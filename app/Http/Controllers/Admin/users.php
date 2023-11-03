<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Str;
use Validator;
use Hash;

class users extends Controller
{
    public function index(){
        $users = DB::table("users")->orderBy("id","desc")->paginate(10);
        return view("admin.users.index", ['data_users' => $users]);
    }

    public function create(){
        return view("admin.users.create");
    }

    public function edit(string $id)
    {
        $data = DB::table('users')->where('id', "=", $id)->first();
        if (empty($data)) {
            return redirect()->route('admin.users.index');
        } else {
            return view('admin.users.edit', ['users_data' => $data]);
        }
    }

    public function update(request $request, $id)
    {
        $data_user = [
            'username' => $request->username,
            'email'=> $request->email,
            // 'group'=> $request->group,
            'name'=> $request->name,
            'diachi'=>$request->diachi,
            'updated_at'=>now(),
        ];
        if(isset($request->password)){
            $data_user['password'] = hash::make($request->password);    
        }
        DB::table("users")->where('id', '=', $id)->update($data_user);

        return redirect()->route('admin.users.index');
    }

    public function store(Request $rq){
        $request = validator::make($rq->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|string|email',
            'group' => 'required|string',
            'name' => 'required|string',
            'diachi' => 'required|string',
        ]);
        if ($request->fails()) {
            return view('admin.users.create', ['status' => 'error', 'msg' => 'Vui Lòng Nhập Đầy Đủ Dữ Liệu!']);     
        }
        
        $data_user = [
            'username' => $rq->username,
            'password'=> hash::make($rq->password),
            'email'=> $rq->email,
            'group'=> $rq->group,
            'name'=> $rq->name,
            'diachi'=>$rq->diachi,
            'remember_token'=>Str::random(24),
            'email_verified_at'=>now(),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];


        // dd($data_user);
        $checkemail = User::where('email', $data_user['email'])->get();
        if($checkemail->count()>0){
            return view('admin.users.create', ['status' => 'error', 'msg' => 'Email Đã Tồn Tại Trên Hệ Thống!']);
        }
        $checkusername = User::where('username', $data_user['username'])->get();
        if($checkusername->count()>0){
            return view('admin.users.create', ['status' => 'error', 'msg' => 'Username Đã Tồn Tại Trên hệ Thống!']);     
        }

        DB::table("users")->insert($data_user);
        return redirect()->route('admin.users.index');
    }

    public function destroy(request $request){
        DB::table("users")->delete($request->id);
        return redirect()->route('admin.users.index');
    }
}
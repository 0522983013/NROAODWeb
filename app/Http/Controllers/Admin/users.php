<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Str;
use Validator;

class users extends Controller
{
    public function index(){
        $users = DB::table("users")->get();
        return view("admin.users.index", ['data_users' => $users]);
    }

    public function createview(){
        return view("admin.users.create");
    }

    public function create(Request $rq){
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
            'password'=> md5($rq->password),
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
        return redirect('admin/users');
    }

    public function delete(request $request){
        DB::table("users")->delete($request->id);
        return redirect('admin/users');
    }
}
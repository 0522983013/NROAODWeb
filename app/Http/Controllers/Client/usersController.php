<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
use validator;
use App\Models\account as User;
use \Session;


class usersController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function edit(string $id)
    {
    }

    public function update(request $request, $id)
    {
    }

    public function store(Request $rq)
    {
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
            'password' => hash::make($rq->password),
            'email' => $rq->email,
            'group' => $rq->group,
            'name' => $rq->name,
            'diachi' => $rq->diachi,
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];


        // dd($data_user);
        $checkemail = User::where('email', $data_user['email'])->get();
        if ($checkemail->count() > 0) {
            return view('admin.users.create', ['status' => 'error', 'msg' => 'Email Đã Tồn Tại Trên Hệ Thống!']);
        }
        $checkusername = User::where('username', $data_user['username'])->get();
        if ($checkusername->count() > 0) {
            return view('admin.users.create', ['status' => 'error', 'msg' => 'Username Đã Tồn Tại Trên hệ Thống!']);
        }

        DB::table("users")->insert($data_user);
        return redirect()->route('admin.users.index');
    }

    public function destroy(request $request)
    {
    }

    public function show(string $id)
    {
        //
    }

    public function Login(request $request)
    {
        $login = [
            'username' => $request->Name,
            'password' => $request->password,
        ];
        if (\Auth::attempt($login)) {
            return redirect()->route('client.index');
        } else {
            Session::flash('error', 'Tài Khoản Hoặc Mật Khẩu Không Chính Xác');
            return redirect()->route('client.users.login');
        }
    }

    public function logout(request $request)
    {
        if(\Auth::check()){
            \Auth::logout();
            return redirect()->route('client.users.login')->with('success','Đăng Xuất Thành Công');
        }
        return redirect()->route('client.users.login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{

    public function viewLogin()
    {
        $data = DB::table('categories')->orderBy('created_at', 'desc')->get();
        if(Auth::check()) {
            // dd(Auth::user());
            // Nếu người dùng đã đăng nhập
            $data['info'] = DB::table('users')->where('email', Auth::user()->email)->first();
            if( $data['info']->role == 0) {
                // Nếu người dùng là admin
                $data['role'] = 'admin';
            } else {
                $data['role'] = 'user';
            }
        } else {
            // Nếu người dùng chưa đăng nhập
            $data['role'] = 'null';
            $data['info'] = "null";
        }
        return view('login', ['data' => $data]);
    }
    public function login(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            $data_user = DB::table('users')->where('email', $request->email)->first();
            // dd($data_user->name);

            if ($data_user->role == 0) {
                return redirect()->route('admin.dashboard.index')->with('success', 'Login ADMIN successfully!');
            } else return redirect()->route('indexId', ['id'->$data_user->id]);
        } else {
            return redirect()->route('login')->with('wrong', 'Incorrect account or password!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

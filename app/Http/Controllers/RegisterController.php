<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    //Register
    public function viewRegister()
    {
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
        return view('register', ['data'=>$data]);
    }
    public function register(RegisterRequest $request)
    {
        $data = $request->except('_token', 'password_confirmation');
        // dd($data);
        $data['created_at'] = new \DateTime();
        $data['password'] = Hash::make($data['password']);
        DB::table('users')->insert($data);
        return redirect()->route('login')->with('success', 'Register successfully');
    }
}

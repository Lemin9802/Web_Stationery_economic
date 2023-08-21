<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }
    public function store(Request $request)
    {
        $data = $request->old('name');
        $data = $request->old('email');
        // dd($username); 

        $data = $request->except('_token', 'password_confirmation');
        $data['created_at'] = new \DateTime();
        $data['password'] = Hash::make($data['password']);
        DB::table('users')->insert($data);
        return redirect()->route('login')->with('success', 'Sign up success');
    }
}

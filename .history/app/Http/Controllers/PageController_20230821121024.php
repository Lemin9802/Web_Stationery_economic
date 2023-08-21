<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function index()
    {

        $data['category'] = DB::table('categories')->orderBy('created_at', 'desc')->get();
        $data['product'] = DB::table('products')->orderBy('created_at', 'desc')->get();

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
        // dd($data);
        // return view('pages.index', ['data' => $data]);
        return view('pages.index', ['data' => $data]);
    }

    public function indexId($id)
    {

        $data = DB::table('categories')->orderBy('created_at', 'desc')->get();

        // $data['user'] = DB::table('users')->where('id', $id)->first();
        dd($id);

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

        dd($data);
        return view('pages.index', ['data' => $data]);
    }


    public function about()
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
        return view('pages.about', ['data' => $data]);
    }

    public function cart()
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
        return view('pages.cart', ['data' => $data]);
    }

    public function checkout()
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
        return view('pages.checkout', ['data' => $data]);
    }

    public function myAccount()
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
        return view('pages.myAccount', ['data' => $data]);
    }

    public function detail()
    {
        $data = DB::table('categories')->orderBy('created_at', 'desc')->get();
        $accountAdmin = DB::table('users')->orderBy('created_at', 'desc')->where('role', 0)->first();
        return view('pages.detail', ['category' => $data], ['account' => $accountAdmin]);
    }
}

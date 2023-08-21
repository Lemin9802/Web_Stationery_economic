<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->orderBy('created_at', 'DESC')->get();
        // dd($data);
        $account_admin = DB::table('users')->where('role', 0)->first();
        // dd($account_admin);
        return view('admin.user.index', ['user' => $data], ['admin' => $account_admin]);
    }

    public function create()
{
    // Check if the authenticated user has the admin role
    if (Auth::user()->role !== 0) {
        // Redirect or show an error page for non-admin users
        return redirect()->route('index'); // Adjust the route according to your application
    }

    $data = DB::table('user')->orderBy('created_at', 'desc')->get();
    $accountAdmin = DB::table('users')->orderBy('created_at', 'desc')->where('role', 0)->first();
    return view('register', ['data' => $data], ['account' => $accountAdmin]);
}
In this code, we're using the Auth::user() method to get the authenticated user and check if their role is equal to 0 (admin role). If it's not, we redirect them to a different page (you can change 'index' to the appropriate route) or show an error message. If the user is an admin, they can access the user creation page as intended.

Remember to adjust the route in the return redirect()->route('index'); line to match your application's routing configuration.

This code assumes that you have set up user authentication using Laravel's built-in authentication mechanisms. If you haven't set up authentication yet, you should do that first using Laravel's authentication scaffolding.








    public function edit($id)
    {
        $data = DB::table('users')->where('id', $id)->first();
        // dd($data);
        return view('admin.user.edit', ['user' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        // dd($data);
        $data['updated_at'] = new \DateTime();

        DB::table('users')->where('id', $id)->update($data);
        return redirect()->route('admin.user.index')->with('success', 'Update User successfully');
    }


    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('admin.user.index');
    }
}

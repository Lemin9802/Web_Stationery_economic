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
        if (Auth::user()->role !== 0) {
            return redirect()->route('user.index');
        }else
        {
        $data = DB::table('users');
        $accountAdmin = DB::table('users')->orderBy('created_at', 'desc')->where('role', 0)->first();
        return view('admin.user.create');
        }
    }
    public function save()
    {

            $accountAdmin = new accountAdmin();
            $accountAdmin ->name = $request->name;
            $accountAdmin ->email = $request->email;
            $accountAdmin ->phone = $request->name;
            $accountAdmin ->name = $request->name;
            $accountAdmin ->name = $request->name;
    }


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

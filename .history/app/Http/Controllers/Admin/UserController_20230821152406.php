<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\admin\User;


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
    public function us(Request $request)
    {
            $users = new User();
            $users->name = $request->name;
            $users->email = $request->email;
            $users->phone = $request->phone;
            $users->address = $request->address;
            $users->password = md5($request->password);
            $users->save();
            return redirect()->back()->with('success','Added successfully');
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

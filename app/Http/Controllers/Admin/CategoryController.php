<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\StoreRequest;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index()
    {
        $data = DB::table('categories')->orderBy('created_at', 'desc')->get();
        // dd($data);   
        return view('admin.category.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        // dd($data);
        $data['created_at'] = new \DateTime();

        DB::table('categories')->insert($data);
        return redirect()->route('admin.category.index')->with('success', 'Add category successfully');
    }

    public function edit($id)
    {
        $data = DB::table('categories')->where('id', $id)->first();
        // dd($data);   
        return view('admin.category.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $data['updated_at'] = new \DateTime();

        DB::table('categories')->where('id', $id)->update($data);
        return redirect()->route('admin.category.index')->with('success', 'Update category successfully');
    }

    public function delete($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->route('admin.category.index')->with('success', 'Delete category successfully');;
    }
}

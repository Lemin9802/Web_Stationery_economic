<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Product\StoreRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = DB::table('products')->orderBy('created_at', 'DESC')->get();
        // dd($data);   
        return view('admin.product.index', ['product' => $data]);
    }

    public function create()
    {
        $data = DB::table('categories')->orderBy('created_at', 'ASC')->get();
        return view('admin.product.create', ['category' => $data]);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        // dd($data);
        // , 'files'

        //upload image
        $file = $request->image;
        $ext = $request->image->extension();
        $file_name = time() . '-product.' . $ext;
        $file->move(public_path('uploads'), $file_name);

        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        $data['image'] = 'uploads/' . $file_name;

        DB::table('products')->insert($data);
        return redirect()->route('admin.product.index')->with('success', 'Add product successfully');
    }

    public function edit($id)
    {
        // get data product and get name category
        // dd($id);
        $data =  DB::table('products')
            ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name_category')
            ->get();
        // dd($data);
        $data =   $data->where('id', $id)->first();
        // dd($data);
        $dataCategory = DB::table('categories')->orderBy('created_at', 'ASC')->get();
        // dd($dataCategory);   
        return view('admin.product.edit', ['product' => $data], ['category' => $dataCategory]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        // dd($data);   
        $data['updated_at'] = new \DateTime();

        DB::table('products')->where('id', $id)->update($data);
        return redirect()->route('admin.product.index')->with('success', 'Update product successfully');
    }

    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('admin.product.index')->with('success', 'Delete product successfully');;
    }
}

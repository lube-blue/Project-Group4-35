<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
// use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("VerifyIsCategory")->only(['index','create']);
    }
    public function index()
    {
        return view('admin.product.index')->with('categories',Category::all());
    }

    public function create(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'category' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'description.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'category.required' => 'กรุณาป้อนประเภทสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );


        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;

        if ($request->hasFile('image')) {
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $product->image = $filemane;
        } else {
            $product->image = 'NOPIC.jpg';
        }

        $product->save();
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $editproduct = Product::find($id);
        return view('admin.product.edit', compact('editproduct'))
        ->with('categories',Category::all());
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'category' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'description.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'category.required' => 'กรุณาป้อนประเภทสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
        if ($request->hasFile('image')) {
            $product = Product::find($id);
            if ($product->image != 'NOPIC.jpg') {
                File::delete(public_path() . '/admin/images/' . $product->image);
            }
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $product->image = $filemane;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->category_id = $request->category;
        } else {
            $product = Product::find($id);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->category_id = $request->category;
        }

        $product->save();
        return redirect()->route('index');
    }

    public function delete($id){
        $delete = Product::find($id);
        if ($delete->image != 'NOPIC.jpg') {
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('index');
    }
     
}

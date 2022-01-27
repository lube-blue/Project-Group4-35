<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Auth;


class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.category.index',compact('category'));
     }
     public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->user_id = Auth::user()->id;
        $category->save();
        return redirect()->route('category')->with('success','บันทึกข้อมูลเรียบร้อย');
     }
     public function edit($category_id){
        $category = Category::find($category_id);
        // dd($category);
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request,$category_id){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category')->with('update','แก้ไขข้อมูลเรียบร้อย');

    }

    public function delete($category_id){
        $category = Category::find($category_id);
        if($category->product->count()>0){
            return redirect()->back()->with('error','ไม่สามารถลบประเภทสินค้าได้');
        }
        Category::destroy($category_id);
        return redirect()->route('category')->with('del','ลบข้อมูลเรียบร้อย');
    }
}

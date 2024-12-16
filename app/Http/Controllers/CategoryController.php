<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    // CRUD

    // Danh sách - Read - R
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('category.index', compact('categories')); // Tìm đến index.blade.php trong thư mục views
    }

    // Thêm - Create - C
    public function create(Request $request)
    {
        return view('category.create');
    }

    //luu thong tin
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        if($request->hasFile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension(); //lay ten mo rong .jpg, .png, ...
            $filename = time().'.'.$extension;
            $file->move('uploads/categories/', $filename); //upload len thu muc uploads/categories
            $category->img = $filename;
        }
        $category->save();
        return redirect()->back()->with('status', 'Them loai tai san thanh cong');
    }
    // Sửa - Edit - U
    public function edit($id)
    {
        //tìm category theo id
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        //tìm category theo id
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        if($request->hasFile('img')){
            //có file dinh kem trong dl cũ
            $imgcu = 'uploads/categories/'.$category->img;
            if(File::exists($imgcu)){
                File::delete($imgcu);
            }
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension(); //lay ten mo rong .jpg, .png, ...
            $filename = time().'.'.$extension;
            $file->move('uploads/categories/', $filename); //upload len thu muc uploads/categories
            $category->img = $filename;
        }
        $category->update();
        return redirect()->back()->with('status', 'Cap nhat loai tai san thanh cong');
    }

    // Xóa - Delete - D
    public function delete($id)
    {
        $category = Category::find($id);
        $imgminhhoa = 'uploads/categories/'.$category->img;
        if(File::exists($imgminhhoa)){
            File::delete($imgminhhoa);
        }
        $category->delete();
        return redirect()->back()->with('status', 'Xoa loai tai san thanh cong');
    }
}

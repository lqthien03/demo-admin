<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category1Request;
use App\Models\Category_level1;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Category_level1Controller extends Controller
{
    public function show()
    {
        $category_level1 = Category_level1::all();
        return view('real_estate.category_level1', compact('category_level1'));
    }
    public function create()
    {
        return view('real_estate.category_level1_create');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu từ form
        // dd($request);
        $request->validate([
            'link' => 'required',
            'tittle' => 'required',
            'describe' => 'required',
            'number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'link.required' => 'Ô này không được bỏ trống',
            'tittle.required' => 'Ô này không được bỏ trống',
            'describe.required' => 'Ô này không được bỏ trống',
        ]);
        // Tìm hoặc tạo một đối tượng Seo
        $seo = new Seo;
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();

        // dd($seo);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }

        $category_level1 = new Category_level1();
        $category_level1->image = $file_name;
        $category_level1->link = $request->input('link');
        $category_level1->tittle = $request->input('tittle');
        $category_level1->describe = $request->input('describe');
        $category_level1->display = $request->has('display') ? 1 : 0;
        $category_level1->number = $request->input('number');
        $category_level1->seo_id = $seo->id;

        // Cập nhật khóa ngoại 'seo_id' của sản phẩm
        $category_level1->seo()->associate($seo);
        $category_level1->save();
        // Chuyển hướng hoặc trả về phản hồi theo cần thiết
        return redirect()->route('show.category1')->with('messageSucces', 'tạo thành công');
    }
    public function edit($id)
    {
        $category_level1 = Category_level1::with(['seo'])->find($id);
        // dd($category_level1);
        // dd($category_level1->display);
        return view('real_estate.category_level1_edit', compact('category_level1'));
    }
    public function update(Request $request, $id)
    {
        $category_level1 = Category_level1::findOrFail($id);
        $seo = $category_level1->seo;
        // dd($request);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
            $category_level1->image = $file_name;
        }

        $category_level1->tittle = $request->input('tittle');
        $category_level1->describe = $request->input('describe');
        $category_level1->link = $request->input('link');
        $category_level1->number = $request->input('number');
        $category_level1->display = $request->has('display');
        $category_level1->seo_id = $request->input('seo_id');
        $category_level1->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back()->with('messageSucces', 'Cập nhật thành công');
    }
    public function destroy($id)
    {
        $category_level1 = Category_level1::find($id);
        $category_level1->delete();
        return back()->with('messageSucces', 'Xóa thành công');
    }
}

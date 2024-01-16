<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class logoController extends Controller
{
    public function edit($id)
    {
        $logo = Logo::find($id);
        return view('image_video.logo', compact('logo'));
    }
    public function update(Request $request, $id)
    {
        $logo = Logo::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }
        $logo->image = $file_name;
        $logo->display = $request->has('display');
        $logo->save();
        return back();
    }
}

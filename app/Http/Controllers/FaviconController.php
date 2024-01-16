<?php

namespace App\Http\Controllers;

use App\Models\Favicon;
use Illuminate\Http\Request;

class FaviconController extends Controller
{
    public function edit($id)
    {
        $favicon = Favicon::find($id);
        return view('image_video.favicon', compact('favicon'));
    }
    public function update(Request $request, $id)
    {
        $favicon = Favicon::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }
        $favicon->image = $file_name;
        $favicon->display = $request->has('display');
        $favicon->save();
        return back();
    }
}

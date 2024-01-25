<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Mail;
use Illuminate\Http\Request;

class logoController extends Controller
{
    public function edit($id)
    {
        $logo = Logo::find($id);
        $total = Mail::count();
        return view('image_video.logo', compact('logo','total'));
    }
    public function update(Request $request, $id)
    {
        $logo = Logo::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);

            // Cập nhật đường dẫn hình ảnh mới
            $logo->image = $file_name;
        }

        // Kiểm tra xem có checkbox "display" được chọn hay không
        $logo->display = $request->has('display');

        // Lưu thông tin Logo
        $logo->save();

        return back()->with('messageSucces', 'Cập nhật thành công');
    }
}

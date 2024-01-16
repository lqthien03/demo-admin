<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function edit($id){
        $banner= Banner::find($id);
        return view('image_video.banner',compact('banner'));
    }
    public function update(Request $request, $id){
        $banner = Banner::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }
        $banner->image=$file_name;
        $banner->display=$request->has('display');
        $banner->save();
        return back();
    }
}


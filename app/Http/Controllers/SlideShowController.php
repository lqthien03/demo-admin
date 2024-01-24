<?php

namespace App\Http\Controllers;

use App\Models\Slideshow;
use Illuminate\Http\Request;

class SlideShowController extends Controller
{
    public function show()
    {
        $slideshow = Slideshow::all();
        return view('image_video.slideshow', compact('slideshow'));
    }
    public function create()
    {
        return view('image_video.slideshow_create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'tittle' => 'required',
            'number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'link.required' => 'Ô này không được bỏ trống',
            'tittle.required' => 'Ô này không được bỏ trống',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }

        $slideshow = new Slideshow();
        $slideshow->image = $file_name;
        $slideshow->link = $request->input('link');
        $slideshow->tittle = $request->input('tittle');
        $slideshow->display = $request->has('display') ? 1 : 0;
        $slideshow->number = $request->input('number');
        $slideshow->save();
        return redirect()->route('show.slideshow')->with('messageSucces', 'tạo thành công');
    }
    public function edit($id)
    {
        $slideshow = Slideshow::find($id);
        return view('image_video.slideshow_edit', compact('slideshow'));
    }
    public function update(Request $request, $id)
    {
        $slideshow = Slideshow::findOrFail($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);

            $slideshow->image = $file_name;
        }

        $slideshow->tittle = $request->input('tittle');
        $slideshow->link = $request->input('link');
        $slideshow->number = $request->input('number');
        $slideshow->display = $request->has('display');
        $slideshow->save();
        return back()->with('messageSucces', 'Cập nhật thành công');
    }
    public function destroy($id)
    {

        $slideshow = Slideshow::findOrFail($id);
        $slideshow->delete();
        return back()->with('messageSucces', 'Xóa thành công');
    }
}

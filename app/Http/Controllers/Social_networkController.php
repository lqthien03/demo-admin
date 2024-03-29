<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Social_network;
use Illuminate\Http\Request;

class Social_networkController extends Controller
{
    public function show()
    {
        $social_network = Social_network::all();
        $total = Mail::count();
        return view('image_video.social_network', compact('social_network', 'total'));
    }
    public function create()
    {
        $total = Mail::count();
        return view('image_video.social_network_create', compact('total'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'link.required' => 'Ô này không được bỏ trống',
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

        $social_network = new Social_network();
        $social_network->image = $file_name;
        $social_network->link = $request->input('link');
        $social_network->display = $request->has('display') ? 1 : 0;
        $social_network->number = $request->input('number');
        $social_network->save();
        return redirect()->route('show.social_network')->with('messageSucces', 'tạo thành công');
    }
    public function edit($id)
    {
        $social_network = social_network::find($id);
        $total = Mail::count();
        return view('image_video.social_network_edit', compact('social_network', 'total'));
    }
    public function update(Request $request, $id)
    {
        $social_network = Social_network::findOrFail($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
            $social_network->image = $file_name;
        }
        $social_network->link = $request->input('link');
        $social_network->number = $request->input('number');
        $social_network->display = $request->has('display');
        $social_network->save();
        return back()->with('messageSucces', 'Cập nhật thành công');
    }
    public function destroy($id)
    {
        $social_network = social_network::find($id);
        $social_network->delete();
        return back()->with('messageSucces', 'Xóa thành công');
    }
}

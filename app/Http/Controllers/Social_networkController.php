<?php

namespace App\Http\Controllers;

use App\Models\Social_network;
use Illuminate\Http\Request;

class Social_networkController extends Controller
{
    public function show()
    {
        $social_network = Social_network::all();
        return view('image_video.social_network', compact('social_network'));
    }
    public function create()
    {
        return view('image_video.social_network_create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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

        $social_network = new social_network();
        $social_network->image = $file_name;
        $social_network->link = $request->input('link');
        $social_network->display = $request->has('display') ? 1 : 0;
        $social_network->number = $request->input('number');
        $social_network->save();
        return redirect()->route('show.social_network');
    }
    public function edit($id)
    {
        $social_network = social_network::find($id);
        return view('image_video.social_network_edit', compact('social_network'));
    }
    public function update(Request $request, $id)
    {
        $social_network = social_network::findOrFail($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }
        $social_network->image = $file_name;
        $social_network->link = $request->input('link');
        $social_network->number = $request->input('number');
        $social_network->display = $request->has('display');
        $social_network->save();
        return back();
    }
}

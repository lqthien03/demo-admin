<?php

namespace App\Http\Controllers;

use App\Models\Advise;
use App\Models\Seo;
use Illuminate\Http\Request;

class AdviseController extends Controller
{
    public function show()
    {
        $advise = Advise::all();
        return view('posts.advise', compact('advise'));
    }
    public function create()
    {
        return view('posts.advise_create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'tittle' => 'required',
            'describe' => 'required',
            'content' => 'required',
            'number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'link.required' => 'Ô này không được bỏ trống',
            'tittle.required' => 'Ô này không được bỏ trống',
            'describe.required' => 'Ô này không được bỏ trống',
            'content.required' => 'Ô này không được bỏ trống',
        ]);
        $seo = new Seo;
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }

        $advise = new Advise();
        $advise->image = $file_name;
        $advise->link = $request->input('link');
        $advise->tittle = $request->input('tittle');
        $advise->describe = $request->input('describe');
        $advise->content = $request->input('content');
        $advise->display = $request->has('display') ? 1 : 0;
        $advise->number = $request->input('number');
        $advise->seo_id = $seo->id;

        // Cập nhật khóa ngoại 'seo_id' của sản phẩm
        $advise->seo()->associate($seo);
        $advise->save();
        // Chuyển hướng hoặc trả về phản hồi theo cần thiết
        return redirect()->route('show.advise')->with('messageSucces', 'tạo thành công');
    }
    public function edit($id)
    {
        $advise = Advise::find($id);
        return view('posts.advise_edit', compact('advise'));
    }
    public function update(Request $request, $id)
    {
        $advise = Advise::findOrFail($id);
        $seo = $advise->seo;
        // dd($request);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
            $advise->image = $file_name;
        }

        $advise->tittle = $request->input('tittle');
        $advise->describe = $request->input('describe');
        $advise->content = $request->input('content');
        $advise->link = $request->input('link');
        $advise->number = $request->input('number');
        $advise->display = $request->has('display');
        $advise->seo_id = $request->input('seo_id');
        $advise->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back()->with('messageSucces', 'Cập nhật thành công');
    }
    public function destroy($id)
    {
        $advise = Advise::find($id);
        $advise->delete();
        return back()->with('messageSucces', 'Xóa thành công');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Seo;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show()
    {
        $news = News::all();
        return view('posts.news', compact('news'));
    }
    public function create()
    {
        return view('posts.news_create');
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'link' => 'required',
            'tittle' => 'required',
            'describe' => 'required',
            'content' => 'required',
            'number' => 'required',
            'display' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'link.required' => 'Ô này không được bỏ trống',
            'tittle.required' => 'Ô này không được bỏ trống',
            'describe.required' => 'Ô này không được bỏ trống',
            'content.required' => 'Ô này không được bỏ trống',
            'number.required' => 'Ô này không được bỏ trống',
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

        $news = new News();
        $news->image = $file_name;
        $news->link = $request->input('link');
        $news->tittle = $request->input('tittle');
        $news->describe = $request->input('describe');
        $news->content = $request->input('content');
        $news->display = $request->has('display') ? 1 : 0;
        $news->number = $request->input('number');
        $news->seo_id = $seo->id;

        // Cập nhật khóa ngoại 'seo_id' của sản phẩm
        $news->seo()->associate($seo);
        $news->save();
        // Chuyển hướng hoặc trả về phản hồi theo cần thiết
        return redirect()->route('show.news');
    }
    public function edit($id)
    {
        $news = News::with(['seo'])->find($id);
        return view('posts.news_edit', compact('news'));
    }
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $seo = $news->seo;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }
        $news->image = $file_name;
        $news->tittle = $request->input('tittle');
        $news->describe = $request->input('describe');
        $news->content = $request->input('content');
        $news->link = $request->input('link');
        $news->number = $request->input('number');
        $news->display = $request->has('display');
        $news->seo_id = $request->input('seo_id');
        $news->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back();
    }
    public function destroy($id)
    {
        $new = News::find($id);
        $new->delete();
        return back();
    }
}

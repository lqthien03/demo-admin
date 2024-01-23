<?php

namespace App\Http\Controllers;

use App\Models\Seo_News;
use Illuminate\Http\Request;

class SeoNewsController extends Controller
{
    public function edit($id)
    {
        $seo_news = Seo_News::find($id);
        return view('seo_page.seo_news', compact('seo_news'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $seo_news = Seo_News::findOrFail($id);
        $seo = $seo_news->seo;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
            $seo_news->image = $file_name;
        }

        $seo_news->seo_id = $request->input('seo_id');
        $seo_news->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back();
    }
}

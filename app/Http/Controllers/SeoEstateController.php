<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Seo_Estate;
use Illuminate\Http\Request;

class SeoEstateController extends Controller
{
    public function edit($id)
    {
        $seo_estate = Seo_Estate::find($id);
        $total = Mail::count();
        return view('seo_page.seo_estate', compact('seo_estate','total'));
    }
    public function update(Request $request, $id)
    {
        $seo_estate = Seo_Estate::findOrFail($id);
        $seo = $seo_estate->seo;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
            $seo_estate->image = $file_name;
        }

        $seo_estate->seo_id = $request->input('seo_id');
        $seo_estate->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back()->with('messageSucces', 'Xóa thành công');
    }
}

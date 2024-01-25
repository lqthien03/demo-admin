<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Seo_Advise;
use Illuminate\Http\Request;

class SeoAdviseController extends Controller
{
    public function edit($id)
    {
        $seo_advise = Seo_Advise::find($id);
        $total = Mail::count();
        return view('seo_page.seo_advise', compact('seo_advise', 'total'));
    }
    public function update(Request $request, $id)
    {
        $seo_advise = Seo_Advise::findOrFail($id);
        $seo = $seo_advise->seo;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
            $seo_advise->image = $file_name;
        }

        $seo_advise->seo_id = $request->input('seo_id');
        $seo_advise->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back()->with('messageSucces', 'Xóa thành công');
    }
}

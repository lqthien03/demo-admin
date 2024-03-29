<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Seo_Procedure;
use Illuminate\Http\Request;

class SeoProcedureController extends Controller
{
    public function edit($id)
    {
        $seo_procedure = Seo_Procedure::find($id);
        $total = Mail::count();
        return view('seo_page.seo_procedure', compact('seo_procedure', 'total'));
    }
    public function update(Request $request, $id)
    {
        $seo_procedure = Seo_Procedure::findOrFail($id);
        $seo = $seo_procedure->seo;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
            $seo_procedure->image = $file_name;
        }

        $seo_procedure->seo_id = $request->input('seo_id');
        $seo_procedure->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back()->with('messageSucces', 'Xóa thành công');
    }
}

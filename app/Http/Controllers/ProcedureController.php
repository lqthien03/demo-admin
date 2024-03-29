<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Procedure;
use App\Models\Seo;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function show()
    {
        $procedure = Procedure::all();
        $total = Mail::count();
        return view('posts.procedure', compact('procedure', 'total'));
    }
    public function create()
    {
        $total = Mail::count();
        return view('posts.procedure_create', compact('total'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url',
            'tittle' => 'required',
            'describe' => 'required',
            'content' => 'required',
            'number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'link.required' => 'Ô này không được bỏ trống',
            'link.url' => 'Đường dẫn không đúng định dạng URL.',
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

        $procedure = new procedure();
        $procedure->image = $file_name;
        $procedure->link = $request->input('link');
        $procedure->tittle = $request->input('tittle');
        $procedure->describe = $request->input('describe');
        $procedure->content = $request->input('content');
        $procedure->display = $request->has('display') ? 1 : 0;
        $procedure->number = $request->input('number');
        $procedure->seo_id = $seo->id;

        // Cập nhật khóa ngoại 'seo_id' của sản phẩm
        $procedure->seo()->associate($seo);
        $procedure->save();
        // Chuyển hướng hoặc trả về phản hồi theo cần thiết
        return redirect()->route('show.procedure')->with('messageSucces', 'tạo thành công');
    }
    public function edit($id)
    {
        $procedure = Procedure::find($id);
        $total = Mail::count();
        return view('posts.procedure_edit', compact('procedure', 'total'));
    }
    public function update(Request $request, $id)
    {
        $procedure = Procedure::findOrFail($id);
        $seo = $procedure->seo;
        // dd($request);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
            $procedure->image = $file_name;
        }
        $procedure->tittle = $request->input('tittle');
        $procedure->describe = $request->input('describe');
        $procedure->content = $request->input('content');
        $procedure->link = $request->input('link');
        $procedure->number = $request->input('number');
        $procedure->display = $request->has('display');
        $procedure->seo_id = $request->input('seo_id');
        $procedure->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back()->with('messageSucces', 'Cập nhật thành công');
    }
    public function destroy($id)
    {
        $procedure = Procedure::find($id);
        $procedure->delete();
        return back()->with('messageSucces', 'Xóa thành công');
    }
}

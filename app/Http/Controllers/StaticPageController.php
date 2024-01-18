<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Customer_support;
use App\Models\Footer;
use App\Models\Introduce;
use App\Models\Register_advise;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function edit_introduce($id)
    {
        $introduce = Introduce::find($id);
        return view('static_page.introduce', compact('introduce'));
    }
    public function update_introduce(Request $request, $id)
    {
        $introduce = Introduce::findOrFail($id);
        $seo = $introduce->seo;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }
        $introduce->image = $file_name;
        $introduce->tittle = $request->input('tittle');
        $introduce->describe = $request->input('describe');
        $introduce->content = $request->input('content');
        $introduce->display = $request->has('display');
        $introduce->seo_id = $request->input('seo_id');
        $introduce->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back();
    }

    public function edit_contact($id)
    {
        $contact = Contact::find($id);
        return view('static_page.contact', compact('contact'));
    }
    public function update_contact(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $seo = $contact->seo;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }
        $contact->image = $file_name;
        $contact->content = $request->input('content');
        $contact->display = $request->has('display');
        $contact->seo_id = $request->input('seo_id');
        $contact->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back();
    }

    public function edit_register_advise($id)
    {
        $register_advise = Register_advise::find($id);
        return view('static_page.register_advise', compact('register_advise'));
    }
    public function update_register_advise(Request $request, $id)
    {
        $register_advise = Register_advise::findOrFail($id);
        $register_advise->content = $request->input('content');
        $register_advise->display = $request->has('display');
        $register_advise->save();
        return back();
    }
    public function edit_customer_support($id)
    {
        $customer_support = Customer_support::find($id);
        return view('static_page.customer_support', compact('customer_support'));
    }
    public function update_customer_support(Request $request, $id)
    {
        $customer_support = Customer_support::findOrFail($id);
        $customer_support->content = $request->input('content');
        $customer_support->display = $request->has('display');
        $customer_support->save();
        return back();
    }
    public function edit_footer($id)
    {
        $footer = Footer::find($id);
        return view('static_page.footer', compact('footer'));
    }
    public function update_footer(Request $request, $id)
    {
        $footer = Footer::findOrFail($id);
        $footer->content = $request->input('content');
        $footer->display = $request->has('display');
        $footer->save();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category_level1;
use App\Models\Category_level2;
use App\Models\Mail;
use App\Models\Product;
use App\Models\Seo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $product = Product::all();
        $category_level2 = Category_level2::all();
        $category_level1 = Category_level1::all();
        return view('real_estate.product', compact('product', 'category_level2', 'category_level1'));
    }
    public function create()
    {
        $category_level2 = Category_level2::all();
        $category_level1 = Category_level1::all();
        return view('real_estate.product_create', compact('category_level2', 'category_level1'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'link' => 'required',
            'tittle' => 'required',
            'describe' => 'required',
            'content' => 'required',
            'number' => 'required',
            'product_code' => 'required',
            'price' => 'required',
            'address' => 'required',
            'size' => 'required',
            'acreage' => 'required',
            'contact' => 'required',
            'direction' => 'required',
            'location' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'link.required' => 'Ô này không được bỏ trống',
            'tittle.required' => 'Ô này không được bỏ trống',
            'describe.required' => 'Ô này không được bỏ trống',
            'content.required' => 'Ô này không được bỏ trống',
            'product_code.required' => 'Ô này không được bỏ trống',
            'price.required' => 'Ô này không được bỏ trống',
            'address.required' => 'Ô này không được bỏ trống',
            'size.required' => 'Ô này không được bỏ trống',
            'acreage.required' => 'Ô này không được bỏ trống',
            'contact.required' => 'Ô này không được bỏ trống',
            'direction.required' => 'Ô này không được bỏ trống',
            'location.required' => 'Ô này không được bỏ trống',
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
        $product = new Product();
        $product->image = $file_name;
        $product->link = $request->input('link');
        $product->tittle = $request->input('tittle');
        $product->describe = $request->input('describe');
        $product->content = $request->input('content');
        $product->number = $request->input('number');
        $product->product_code = $request->input('product_code');
        $product->price = $request->input('price');
        $product->address = $request->input('address');
        $product->size = $request->input('size');
        $product->acreage = $request->input('acreage');
        $product->contact = $request->input('contact');
        $product->direction = $request->input('direction');
        $product->location = $request->input('location');
        $product->display = $request->has('display') ? 1 : 0;
        $product->level1_product_id = $request->input('level1_product_id');
        $product->level2_product_id = $request->input('level2_product_id');
        $product->seo_id = $seo->id;

        $product->seo()->associate($seo);
        $product->save();
        return redirect()->route('show.product');
    }
    public function edit($id)
    {
        $product = Product::with(['seo', 'level1_product', 'level2_product'])->find($id);
        $category_level1 = Category_level1::all();
        $category_level2 = Category_level2::all();
        return view('real_estate.product_edit', compact('product', 'category_level1', 'category_level2'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $product = Product::findOrFail($id);
        $seo = $product->seo;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();

            // Di chuyển hình ảnh đến thư mục lưu trữ
            $file->move(public_path('products'), $file_name);
        } else {
            // Đặt giá trị mặc định nếu không có hình ảnh được tải lên
            $file_name = 'default_image.jpg';
        }


        $product->image = $file_name;
        $product->link = $request->input('link');
        $product->tittle = $request->input('tittle');
        $product->describe = $request->input('describe');
        $product->content = $request->input('content');
        $product->number = $request->input('number');
        $product->product_code = $request->input('product_code');
        $product->price = $request->input('price');
        $product->address = $request->input('address');
        $product->size = $request->input('size');
        $product->acreage = $request->input('acreage');
        $product->contact = $request->input('contact');
        $product->direction = $request->input('direction');
        $product->location = $request->input('location');
        $product->display = $request->has('display');
        $product->seo_id = $request->input('seo_id');
        $product->level1_product_id = $request->input('level1_product_id');
        $product->level2_product_id = $request->input('level2_product_id');
        $product->save();

        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back();
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back();
    }
}

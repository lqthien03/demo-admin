<?php

namespace App\Http\Controllers;

use App\Models\Category_level1;
use App\Models\Category_level2;
use App\Models\Seo;
use Illuminate\Http\Request;

class Category_level2Controller extends Controller
{
    public function show()
    {
        $category_level2 = Category_level2::all();
        $category_level1 = Category_level1::all();
        return view('real_estate.category_level2', compact('category_level2', 'category_level1'));
    }
    public function create()
    {
        $category_level1 = Category_level1::all();
        return view('real_estate.category_level2_create', compact('category_level1'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'tittle' => 'required',
            'describe' => 'required',
            'number' => 'required',
            'level1_product_id' => 'required',
        ], [
            'link.required' => 'Ô này không được bỏ trống',
            'tittle.required' => 'Ô này không được bỏ trống',
            'describe.required' => 'Ô này không được bỏ trống',
            'number.required' => 'Ô này không được bỏ trống',
            'level1_product_id.required' => 'Ô này không được bỏ trống',
        ]);
        $seo = new Seo;
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();

        $category_level2 = new Category_level2();
        $category_level2->link = $request->input('link');
        $category_level2->tittle = $request->input('tittle');
        $category_level2->describe = $request->input('describe');
        $category_level2->display = $request->has('display') ? 1 : 0;
        $category_level2->number = $request->input('number');
        $category_level2->level1_product_id = $request->input('level1_product_id');
        $category_level2->seo_id = $seo->id;

        $category_level2->seo()->associate($seo);
        $category_level2->save();

        return redirect()->route('show.category2');
    }
    public function edit($id)
    {
        $category_level2 = Category_level2::find($id);
        $category_level1 = Category_level1::all();
        // dd($category_level2);
        // dd($category_level1);
        return view('real_estate.category_level2_edit', compact('category_level2', 'category_level1'));
    }
    public function update(Request $request, $id)
    {
        $category_level2 = Category_level2::findOrFail($id);
        $seo = $category_level2->seo;

        $category_level2->tittle = $request->input('tittle');
        $category_level2->describe = $request->input('describe');
        $category_level2->link = $request->input('link');
        $category_level2->number = $request->input('number');
        $category_level2->display = $request->has('display');
        $category_level2->seo_id = $request->input('seo_id');
        $category_level2->level1_product_id = $request->input('level1_product_id');
        $category_level2->save();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();
        return back();
    }
    public function destroy($id)
    {
        $category_level2 = Category_level2::find($id);
        $category_level2->delete();
        return back();
    }
}

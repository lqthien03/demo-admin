<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category1Request;
use App\Models\Category_level1;
use App\Models\Seo;
use Illuminate\Http\Request;

class Category_level1Controller extends Controller
{
    public function show()
    {
        $category_level1 = Category_level1::all();
        return view('real_estate.category_level1', compact('category_level1'));
    }
    public function create()
    {
        return view('real_estate.category_level1_create');
    }
    public function store(Category1Request $request)
    {
        dd($request);
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);

        $seo = new Seo();
        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');
        $seo->save();

        $category_level1 = Category_level1::create(([
            'image' => $file_name,
            'tittle' => $request->input('tittle'),
            'display' => $request->input('display'),
            'describe' => $request->input('describe'),
            'seo_id' => $seo->id,
        ]));
        $category_level1->seo()->associate($seo);
        $category_level1->save();

        return redirect()->route('show.category1')->with('success', 'Bản ghi đã được tạo thành công!');
    }
}

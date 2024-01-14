<?php

namespace App\Http\Controllers;

use App\Models\Category_level1;
use App\Models\Category_level2;
use Illuminate\Http\Request;

class Category_level2Controller extends Controller
{
    public function show()
    {
        $category_level2 = Category_level2::all();
        return view('real_estate.category_level2', compact('category_level2'));
    }
    public function create()
    {
        $category_level1 = Category_level1::all();
        return view('real_estate.category_level2_create');
    }
    public function store()
    {
    }
    public function edit($id)
    {
        $category_level2 = Category_level2::find($id);
        return view('real_estate.category_level2_edit', compact('category_level2'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category_level1;
use App\Models\Category_level2;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit($id)
    {
        $setting = Setting::find($id);
        $category_level1 = Category_level1::all();
        $category_level2 = Category_level2::all();
        return view('setting', compact('setting', 'category_level1', 'category_level2'));
    }
    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $seo = $setting->seo;
        $setting->address = $request->input('address');
        // $setting->name = $request->input('name');
        $setting->email = $request->input('email');
        $setting->hotline = $request->input('hotline');
        $setting->phone = $request->input('phone');
        $setting->zalo = $request->input('zalo');
        $setting->website = $request->input('website');
        $setting->fanpage = $request->input('fanpage');
        $setting->copyright = $request->input('copyright');
        $setting->map = $request->input('map');
        $setting->map_iframe = $request->input('map_iframe');
        $setting->gg_analytic = $request->input('gg_analytic');
        $setting->gg_webmaster_tool = $request->input('gg_webmaster_tool');
        $setting->head_js = $request->input('head_js');
        $setting->body_js = $request->input('body_js');
        $setting->tittle = $request->input('tittle');
        $setting->save();

        $seo->seo_tittle = $request->input('seo_tittle');
        $seo->seo_keyword = $request->input('seo_keyword');
        $seo->seo_description = $request->input('seo_description');

        $seo->save();

        return back();
    }
}

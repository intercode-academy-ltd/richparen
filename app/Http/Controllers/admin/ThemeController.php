<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ThemeController extends Controller
{

    public function theme(){
        Session::put('admin_page', 'theme');
        $theme = Theme::first();
        return view ('admin.theme.theme', compact('theme'));
    }

    // Update News
    public function themeUpdate(Request  $request, $id){
        $data = $request->all();
        $theme = Theme::findOrFail($id);
        $theme->site_title = $data['site_title'];

        if ($request->hasFile('header_logo'))
        {
            $destination_path = 'public/uploads/theme';
            $image = $request->file('header_logo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('header_logo')->storeAs($destination_path, $image_name);
            $theme['header_logo'] = $image_name;
        }

        if ($request->hasFile('main_image'))
        {
            $destination_path = 'public/uploads/theme';
            $image = $request->file('main_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('main_image')->storeAs($destination_path, $image_name);
            $theme['main_image'] = $image_name;
        }

        if ($request->hasFile('footer_logo'))
        {
            $destination_path = 'public/uploads/theme';
            $image = $request->file('footer_logo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('footer_logo')->storeAs($destination_path, $image_name);
            $theme['footer_logo'] = $image_name;
        }

        if ($request->hasFile('favicon'))
        {
            $destination_path = 'public/uploads/theme';
            $image = $request->file('favicon');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('favicon')->storeAs($destination_path, $image_name);
            $theme['favicon'] = $image_name;
        }

        $theme->save();
        Session::flash('success_message', 'Theme Settings Has Been Updated Successfully');
        return redirect()->back();
    }
}

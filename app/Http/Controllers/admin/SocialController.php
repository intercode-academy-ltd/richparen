<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SocialController extends Controller
{
    public function social(){
        Session::put('admin_page', 'social');
        $social = Social::first();
        return view('admin.theme.social', compact('social'));
    }

    public function socialUpdate(Request $request, $id){
        $social = Social::findOrFail($id);
        $data = $request->all();
        $social->facebook=$data['facebook'];
        $social->twitter=$data['twitter'];
        $social->youtube=$data['youtube'];
        $social->telegram=$data['telegram'];
        $social->instagram=$data['instagram'];
        $social->save();

        Session::flash('success_message', 'Social Settings Has Been Updated Successfully');
        return redirect()->back();
    }
}

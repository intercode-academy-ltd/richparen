<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NewsLetterSubscribersController extends Controller
{
    public  function newsLetterSubscribers(){

        $newsletter = NewsletterSubscriber::get()->toArray();

        return view('admin.theme.newsletter')->with(compact('newsletter'));
    }



    // Edit Category
//    public function edit($id){
//        Session::put('admin_page', 'newsletter_subscriber');
//        $NewsletterSubscriber = NewsletterSubscriber::findOrFail($id);
//        return view ('admin.theme.edit', compact('NewsletterSubscriber'));
//    }
//
//    public function UpdatenewsLetterSubscribers(Request $request){
//
//        if ($request->ajax()){
//            $data = $request->all();
//            if ($data['status']=="Active"){
//                $status = 0;
//            } else {
//                $status = 1;
//            }
//        }
//    }







//
//    // Delete Category
//    public function delete($id){
//        $category = NewsletterSubscriber::findOrFail($id);
//        $category->delete();
//        DB::table('newsletter_subscribers')->where('parent_id', $id)->delete();
//        Session::flash('success_message', 'newsletter_subscribers Has Been Deleted Successfully');
//        return redirect()->back();
//    }
}

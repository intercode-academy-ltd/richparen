<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscrber;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function addSubscriber(Request $request){
        if ($request->ajax()){
            $data = $request->all();
//            echo "<pre>"; print_r($data); die;
            $subscriberCount = NewsletterSubscriber::where('email', $data['subscriber'])->count();
            if ($subscriberCount>0){
                return "exists";
            }else {
                $newsletter = new NewsletterSubscriber;
                $newsletter->email = $data['subscriber'];
                $newsletter->status = 1;
                $newsletter->save();
                return "inserted";
            }
        }
    }
}

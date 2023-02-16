<?php

namespace App\Http\Controllers\pages\success;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuccessController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $success_view_count = News::with('admin')->where('category_id','LIKE', '6')
            ->orderBy('view_count','DESC')->take(1)->get();

        $forbes_view_count = News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('view_count','DESC')->take(1)->get();

        $all_post_success = News::with('admin')->where('category_id', 'LIKE', '6')
            ->orderBy('id','DESC')->paginate(25);

        $forbes_last_success = News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('id','DESC')->take(3)->get();

        $lifestyle_last_success = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('id','DESC')->take(3)->get();

        $business_last_success = News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.success.success',
            [ 'success_view_count' =>$success_view_count,
                'all_post_success' =>$all_post_success,
                'forbes_view_count'=>$forbes_view_count,
                'forbes_last_success'=>$forbes_last_success,
                'lifestyle_last_success'=>$lifestyle_last_success,
                'business_last_success'=>$business_last_success,
            ],
            compact('date'));
    }


    public function SuccessNewsSingle($slug, News $news){
        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }

        $date = Carbon::parse($news->created_at);

        $blog_Last_index = News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('id','DESC')->take(4)->get();

        $forbes_Last_index = News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('id','DESC')->take(4)->get();

        $business_Last_index = News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('id','DESC')->take(4)->get();

        $currency_view_count =  News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('view_count','DESC')->take(1)->get();

        $hacking_Last_index = News::with('admin')->where('category_id','LIKE', '19')
            ->orderBy('view_count','DESC')->take(1)->get();

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.success.SuccessNewsSingle',[
            'blog_Last_index'=>$blog_Last_index,
            'hacking_Last_index'=>$hacking_Last_index,
            'currency_view_count'=> $currency_view_count,
            'business_Last_index'=>$business_Last_index,
            'forbes_Last_index'=>$forbes_Last_index,

        ], compact('news_detail','theme', 'date', 'related_news'));
    }
}

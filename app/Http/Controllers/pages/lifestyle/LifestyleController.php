<?php

namespace App\Http\Controllers\pages\lifestyle;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LifestyleController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $lifestyle_view_count = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('view_count','DESC')->take(1)->get();

        $lifestyle_last = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('id','DESC')->paginate(25);

        $crypto_view_count = News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('view_count','DESC')->take(1)->get();

        $forbes_view_count = News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('view_count','DESC')->take(1)->get();

        $business_view_count = News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('view_count','DESC')->take(1)->get();

        $success_view_count = News::with('admin')->where('category_id','LIKE', '6')
            ->orderBy('view_count','DESC')->take(1)->get();

        return view('view.lifestyle.lifestyle',
            [ 'lifestyle_view_count' =>$lifestyle_view_count,
                'lifestyle_last' =>$lifestyle_last,
                'success_view_count'=>$success_view_count,
                'forbes_view_count'=>$forbes_view_count,
                'crypto_view_count'=>$crypto_view_count,
                'business_view_count'=>$business_view_count,
            ],
            compact('date'));
    }


    public function LifestyleNewsSingle($slug, News $news){
        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }

        $date = Carbon::parse($news->created_at);

        $blog_view_count = News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('view_count','DESC')->take(1)->get();

        $business_view_count = News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('view_count','DESC')->take(1)->get();

        $forbes_Last_index = News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('id','DESC')->take(4)->get();

        $travel_Last_index = News::with('admin')->where('category_id','LIKE', '1')
            ->orderBy('id','DESC')->take(4)->get();

        $currency_Last_index =  News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('id','DESC')->take(4)->get();

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.lifestyle.LifestyleNewsSingle',[
            'blog_view_count'=>$blog_view_count,
            'business_view_count'=>$business_view_count,
            'currency_Last_index'=> $currency_Last_index,
            'travel_Last_index'=>$travel_Last_index,
            'forbes_Last_index'=>$forbes_Last_index,

        ], compact('news_detail','theme', 'date', 'related_news'));
    }
}

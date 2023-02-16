<?php

namespace App\Http\Controllers\pages\travel;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TravelController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $travel_view_count = News::with('admin')->where('category_id','LIKE', '1')
            ->orderBy('view_count','DESC')->take(1)->get();

        $travel_last = News::with('admin')->where('category_id','LIKE', '1')
            ->orderBy('id','DESC')->paginate(21);

        $currency_view_count = News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('view_count','DESC')->take(1)->get();

        return view('view.travel.travel',
            [ 'travel_view_count' =>$travel_view_count,
              'travel_last' =>$travel_last,
              'currency_view_count' =>$currency_view_count,],
            compact('date'));
    }

    public function TravelNewsSingle($slug, News $news){
        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }

        $date = Carbon::parse($news->created_at);

        $jetistik_view_count = News::with('admin')->where('category_id','LIKE', '6')
            ->orderBy('view_count','DESC')->take(1)->get();

        $lifestyle_view_count = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('view_count','DESC')->take(1)->get();

        $blog_Last_index =  News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('id','DESC')->take(4)->get();

        $business_Last_index =  News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('id','DESC')->take(4)->get();

        $currency_Last_index =  News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('id','DESC')->take(4)->get();

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.travel.TravelNewsSingle',[
            'blog_Last_index'=>$blog_Last_index,
            'lifestyle_view_count'=>$lifestyle_view_count,
            'jetistik_view_count'=>$jetistik_view_count,
            'business_Last_index'=>$business_Last_index,
            'currency_Last_index'=>$currency_Last_index,
        ], compact('news_detail','theme', 'date', 'related_news'));
    }


}

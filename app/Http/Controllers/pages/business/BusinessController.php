<?php

namespace App\Http\Controllers\pages\business;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BusinessController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $business_view_count = News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('view_count','DESC')->take(3)->get();

        $all_post_business = News::with('admin')->where('category_id', 'LIKE', '5')
            ->orderBy('id','DESC')->paginate(25);

        $lifestyle_view_count = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('view_count','DESC')->take(1)->get();

        $forbes_view_count = News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('view_count','DESC')->take(1)->get();

        $blog_view_count = News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('view_count','DESC')->take(1)->get();

        $success_view_count = News::with('admin')->where('category_id','LIKE', '6')
            ->orderBy('view_count','DESC')->take(1)->get();

        return view('view.business.business',
            [ 'business_view_count' =>$business_view_count,
                'all_post_business' =>$all_post_business,
                'success_view_count'=>$success_view_count,
                'forbes_view_count'=>$forbes_view_count,
                'lifestyle_view_count'=>$lifestyle_view_count,
                'blog_view_count'=>$blog_view_count,
            ],
            compact('date'));
    }

    public function BusinessNewsSingle($slug, News $news){
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

        $forbes_Last_index =  News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('id','DESC')->take(4)->get();

        $books_Last_index =  News::with('admin')->where('category_id','LIKE', '20')
            ->orderBy('id','DESC')->take(4)->get();

        $currency_Last_index =  News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('id','DESC')->take(4)->get();

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.business.BusinessNewsSingle',[
            'forbes_Last_index'=>$forbes_Last_index,
            'lifestyle_view_count'=>$lifestyle_view_count,
            'jetistik_view_count'=>$jetistik_view_count,
            'books_Last_index'=>$books_Last_index,
            'currency_Last_index'=>$currency_Last_index,
        ], compact('news_detail','theme', 'date', 'related_news'));
    }

}

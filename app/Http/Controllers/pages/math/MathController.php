<?php

namespace App\Http\Controllers\pages\math;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MathController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $all_post_math = News::with('admin')->where('category_id', 'LIKE', '18')
            ->orderBy('id','DESC')->paginate(50);

        $enlan_last_math = News::with('admin')->where('category_id','LIKE', '16')
            ->orderBy('id','DESC')->take(1)->get();

        $codeforces_last_math = News::with('admin')->where('category_id','LIKE', '8')
            ->orderBy('id','DESC')->take(1)->get();

        $business_last_math = News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('id','DESC')->take(1)->get();

        $cplusplus_last_math = News::with('admin')->where('category_id','LIKE', '13')
            ->orderBy('id','DESC')->take(1)->get();

        return view('view.math.math',
            [
                'all_post_math' =>$all_post_math,
                'enlan_last_math'=>$enlan_last_math,
                'codeforces_last_math'=>$codeforces_last_math,
                'business_last_math'=>$business_last_math,
                'cplusplus_last_math'=>$cplusplus_last_math,
            ],
            compact('date'));
    }

    public function MathNewsSingle($slug, News $news){
        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }

        $date = Carbon::parse($news->created_at);

        $сryptocurrency_view_count = News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('view_count','DESC')->take(1)->get();

        $hacking_view_count = News::with('admin')->where('category_id','LIKE', '19')
            ->orderBy('view_count','DESC')->take(1)->get();

        $blog_Last_index =  News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('id','DESC')->take(4)->get();

        $english_Last_index =  News::with('admin')->where('category_id','LIKE', '18')
            ->orderBy('id','DESC')->take(4)->get();

        $russian_Last_index =  News::with('admin')->where('category_id','LIKE', '17')
            ->orderBy('id','DESC')->take(4)->get();

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.math.MathNewsSingle',[
            'blog_Last_index'=>$blog_Last_index,
            'hacking_view_count'=>$hacking_view_count,
            'сryptocurrency_view_count'=>$сryptocurrency_view_count,
            'english_Last_index'=>$english_Last_index,
            'russian_Last_index'=>$russian_Last_index,
        ], compact('news_detail','theme', 'date', 'related_news'));
    }
}

<?php

namespace App\Http\Controllers\pages\russianlanguage;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RussianLanguageController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $all_post_rulan = News::with('admin')->where('category_id', 'LIKE', '17')
            ->orderBy('id','DESC')->paginate(50);

        $enlan_last_rulan = News::with('admin')->where('category_id','LIKE', '16')
            ->orderBy('id','DESC')->take(1)->get();

        $math_last_rulan = News::with('admin')->where('category_id','LIKE', '18')
            ->orderBy('id','DESC')->take(1)->get();

        $acmp_last_rulan = News::with('admin')->where('category_id','LIKE', '9')
            ->orderBy('id','DESC')->take(1)->get();

        $hacking_last_rulan = News::with('admin')->where('category_id','LIKE', '19')
            ->orderBy('id','DESC')->take(1)->get();

        return view('view.russianlanguage.russianlanguage',
            [
                'all_post_rulan' =>$all_post_rulan,
                'enlan_last_rulan'=>$enlan_last_rulan,
                'math_last_rulan'=>$math_last_rulan,
                'acmp_last_rulan'=>$acmp_last_rulan,
                'hacking_last_rulan'=>$hacking_last_rulan,
            ],
            compact('date'));
    }

    public function RussianLanguageNewsSingle($slug, News $news){
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

        $math_Last_index =  News::with('admin')->where('category_id','LIKE', '18')
            ->orderBy('id','DESC')->take(4)->get();

        $english_Last_index =  News::with('admin')->where('category_id','LIKE', '16')
            ->orderBy('id','DESC')->take(4)->get();

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.russianlanguage.RussianLanguageNewsSingle',[
            'blog_Last_index'=>$blog_Last_index,
            'lifestyle_view_count'=>$lifestyle_view_count,
            'jetistik_view_count'=>$jetistik_view_count,
            'math_Last_index'=>$math_Last_index,
            'english_Last_index'=>$english_Last_index,
        ], compact('news_detail','theme', 'date', 'related_news'));
    }
}

<?php

namespace App\Http\Controllers\pages\Cryptocurrency;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CryptocurrencyController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $crypto_view_count = News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('view_count','DESC')->take(1)->get();

        $informatics_crypto = News::with('admin')->where('category_id', 'LIKE', '11')
            ->orderBy('id','DESC')->take(1)->get();

        $all_post_crypto = News::with('admin')->where('category_id', 'LIKE','4')
            ->orderBy('id', 'DESC')->paginate(25);

        $hacking_view_count = News::with('admin')->where('category_id','LIKE', '19')
            ->orderBy('view_count','DESC')->take(1)->get();

        $acmp_view_count = News::with('admin')->where('category_id','LIKE', '9')
            ->orderBy('view_count','DESC')->take(1)->get();

        $algorithm_view_count = News::with('admin')->where('category_id','LIKE', '10')
            ->orderBy('view_count','DESC')->take(1)->get();

        $codeforces_view_count = News::with('admin')->where('category_id','LIKE', '8')
            ->orderBy('view_count','DESC')->take(1)->get();

        return view('view.Cryptocurrency.Cryptocurrency',
            [ 'informatics_crypto' =>$informatics_crypto,
                'all_post_crypto'=>$all_post_crypto,
                'crypto_view_count' =>$crypto_view_count,
                'codeforces_view_count'=>$codeforces_view_count,
                'acmp_view_count'=>$acmp_view_count,
                'hacking_view_count'=>$hacking_view_count,
                'algorithm_view_count'=>$algorithm_view_count,
            ],
            compact('date'));
    }


    public function CryptoCurrencyNewsSingle($slug, News $news){
        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }

        $date = Carbon::parse($news->created_at);

        $algorithm_view_count = News::with('admin')->where('category_id','LIKE', '10')
            ->orderBy('view_count','DESC')->take(1)->get();

        $informatics_view_count = News::with('admin')->where('category_id','LIKE', '11')
            ->orderBy('view_count','DESC')->take(1)->get();

        $cplusplus_Last_index =  News::with('admin')->where('category_id','LIKE', '13')
            ->orderBy('id','DESC')->take(4)->get();

        $java_Last_index =  News::with('admin')->where('category_id','LIKE', '12')
            ->orderBy('id','DESC')->take(4)->get();

        $database_Last_index =  News::with('admin')->where('category_id','LIKE', '14')
            ->orderBy('id','DESC')->take(4)->get();

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.Cryptocurrency.CryptoCurrencyNewsSingle',[
            'cplusplus_Last_index'=>$cplusplus_Last_index,
            'informatics_view_count'=>$informatics_view_count,
            'algorithm_view_count'=>$algorithm_view_count,
            'java_Last_index'=>$java_Last_index,
            'database_Last_index'=>$database_Last_index,
        ], compact('news_detail','theme', 'date', 'related_news'));
    }
}

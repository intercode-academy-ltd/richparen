<?php

namespace App\Http\Controllers\pages\informatics;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class InformaticsController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $informatics_view_count = News::with('admin')->where('category_id','LIKE', '11')
            ->orderBy('view_count','DESC')->take(3)->get();

        $all_post_informatics = News::with('admin')->where('category_id', 'LIKE', '11')
            ->orderBy('id','DESC')->paginate(25);

        $cryptocurrency_last_informatics = News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('id','DESC')->take(1)->get();

        $blog_last_informatics = News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('id','DESC')->take(1)->get();

        $math_last_informatics = News::with('admin')->where('category_id','LIKE', '18')
            ->orderBy('id','DESC')->take(1)->get();

        $hacking_last_informatics = News::with('admin')->where('category_id','LIKE', '19')
            ->orderBy('id','DESC')->take(1)->get();

        return view('view.informatics.informatics',
            [ 'informatics_view_count' =>$informatics_view_count,
                'all_post_informatics' =>$all_post_informatics,
                'cryptocurrency_last_informatics'=>$cryptocurrency_last_informatics,
                'blog_last_informatics'=>$blog_last_informatics,
                'math_last_informatics'=>$math_last_informatics,
                'hacking_last_informatics'=>$hacking_last_informatics,
            ],
            compact('date'));
    }

    public function InformaticsNewsSingle($slug, News $news){
        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }

        $date = Carbon::parse($news->created_at);


        $gamedev_Last_index =  News::with('admin')->where('category_id','LIKE', '15')
            ->orderBy('id','DESC')->take(4)->get();

        $java_Last_index =  News::with('admin')->where('category_id','LIKE', '12')
            ->orderBy('id','DESC')->take(4)->get();

        $cpluscplus_Last_index =  News::with('admin')->where('category_id','LIKE', '13')
            ->orderBy('id','DESC')->take(4)->get();

        $currency_view_count =  News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('view_count','DESC')->take(1)->get();

        $algorithm_view_count = News::with('admin')->where('category_id','LIKE', '10')
            ->orderBy('view_count','DESC')->take(1)->get();

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.informatics.InformaticsNewsSingle',[

            'algorithm_view_count'=>$algorithm_view_count,
            'currency_view_count'=>$currency_view_count,
            'gamedev_Last_index' =>$gamedev_Last_index,
            'java_Last_index' =>$java_Last_index,
            'cpluscplus_Last_index'=>$cpluscplus_Last_index,


        ], compact('news_detail','theme', 'date', 'related_news'));
    }

    public  function download($id){
        $data = DB::table('news')->where('id', $id)->first();
        $filepath = storage_path("app/public/uploads/file_name/{$data->file_name}");
        return \Response::download($filepath);
    }
}

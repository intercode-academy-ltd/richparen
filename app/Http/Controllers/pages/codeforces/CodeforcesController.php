<?php

namespace App\Http\Controllers\pages\codeforces;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CodeforcesController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $codeforces_view_count = News::with('admin')->where('category_id','LIKE', '8')
            ->orderBy('view_count','DESC')->take(3)->get();

        $all_post_codeforces = News::with('admin')->where('category_id', 'LIKE', '8')
            ->orderBy('id','DESC')->paginate(25);

        $acmp_last_codeforces = News::with('admin')->where('category_id','LIKE', '9')
            ->orderBy('id','DESC')->take(1)->get();

        $algorithm_last_codeforces = News::with('admin')->where('category_id','LIKE', '10')
            ->orderBy('id','DESC')->take(1)->get();

        $informatics_last_codeforces = News::with('admin')->where('category_id','LIKE', '11')
            ->orderBy('id','DESC')->take(1)->get();

        $gamedev_last_codeforces = News::with('admin')->where('category_id','LIKE', '15')
            ->orderBy('id','DESC')->take(1)->get();

        return view('view.codeforces.codeforces',
            [ 'codeforces_view_count' =>$codeforces_view_count,
                'all_post_codeforces' =>$all_post_codeforces,
                'acmp_last_codeforces'=>$acmp_last_codeforces,
                'algorithm_last_codeforces'=>$algorithm_last_codeforces,
                'informatics_last_codeforces'=>$informatics_last_codeforces,
                'gamedev_last_codeforces'=>$gamedev_last_codeforces,
            ],
            compact('date'));
    }


    public function CodeforcesNewsSingle($slug, News $news){

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

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.codeforces.CodeforcesNewsSingle',[
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

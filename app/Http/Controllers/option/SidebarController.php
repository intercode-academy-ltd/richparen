<?php

namespace App\Http\Controllers\option;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SidebarController extends Controller
{



    public function index(News $news){

        $date = Carbon::parse($news->created_at);


        $lifestyle_last = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('id','DESC')->paginate(25);

        return view('view.lifestyle.lifestyle',
            [
                'lifestyle_last' =>$lifestyle_last,
            ],
            compact('date'));
    }

    public function LifestyleNewsSingle($slug){
        $theme = Theme::first();
        $news_detail = News::where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }
        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(2)->get();
        return view('view.lifestyle.LifestyleNewsSingle', compact('news_detail','theme', 'related_news'));
    }


}

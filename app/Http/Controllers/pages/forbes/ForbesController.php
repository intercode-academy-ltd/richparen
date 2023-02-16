<?php

namespace App\Http\Controllers\pages\forbes;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ForbesController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $list_forbes = News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('id','DESC')->paginate(21);

        return view('view.forbes.forbes',
            ['list_forbes' =>$list_forbes],
            compact('date'));
    }


    public function ForbesNewsSingle($slug, News $news){

        $date = Carbon::parse($news->created_at);
        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }
        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.forbes.ForbesNewsSingle',[

        ], compact('news_detail','theme', 'date', 'related_news'));
    }
}

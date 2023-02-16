<?php

namespace App\Http\Controllers\option;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    public function newsAuthor(News $news){

        $date = Carbon::parse($news->created_at);

        $blog_view_count = News::with('admin')->where('admin_id','LIKE', '1')
            ->orderBy('view_count','DESC')->take(1)->get();

        $all_post_author = News::with('admin')->where('admin_id', 'LIKE', '1')
            ->orderBy('id','DESC')->paginate(50);


        return view('option.author',
            [ 'blog_view_count' =>$blog_view_count,
                'all_post_author' =>$all_post_author,
            ],
            compact('date'));
    }

    public function AuthorNewsSingle($slug, News $news){

        $date = Carbon::parse($news->created_at);


        $theme = Theme::first();
        $news_detail = News::where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }
        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(2)->get();
        return view('option.AuthorNewsSingle',[


        ], compact('news_detail','theme', 'related_news', 'date'));
    }

}

<?php

namespace App\Http\Controllers\pages\blog;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $blog_view_count = News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('view_count','DESC')->take(1)->get();

        $all_post_blog = News::with('admin')->where('category_id', 'LIKE', '3')
            ->orderBy('id','DESC')->paginate(25);

        $hacking_view_count = News::with('admin')->where('category_id','LIKE', '19')
            ->orderBy('view_count','DESC')->take(1)->get();

        $forbes_view_count = News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('view_count','DESC')->take(1)->get();

        $business_view_count = News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('view_count','DESC')->take(1)->get();

        $success_view_count = News::with('admin')->where('category_id','LIKE', '6')
            ->orderBy('view_count','DESC')->take(1)->get();

        return view('view.blog.blog',
            [ 'blog_view_count' =>$blog_view_count,
                'all_post_blog' =>$all_post_blog,
                'success_view_count'=>$success_view_count,
                'forbes_view_count'=>$forbes_view_count,
                'hacking_view_count'=>$hacking_view_count,
                'business_view_count'=>$business_view_count,
                ],
            compact('date'));
    }

    public function BlogNewsSingle($slug, News $news){

        $date = Carbon::parse($news->created_at);

        $math_view_count_blog = News::with('admin')->where('category_id','LIKE', '18')
            ->orderBy('view_count','DESC')->take(1)->get();

        $books_view_count_blog = News::with('admin')->where('category_id','LIKE', '20')
            ->orderBy('view_count','DESC')->take(1)->get();

        $travel_view_count_blog = News::with('admin')->where('category_id','LIKE', '1')
            ->orderBy('view_count','DESC')->take(1)->get();

        $lifestyle_view_count_blog = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('view_count','DESC')->take(1)->get();

        $informatics_view_count = News::with('admin')->where('category_id','LIKE', '11')
            ->orderBy('view_count','DESC')->take(1)->get();

        $jetistik_view_count = News::with('admin')->where('category_id','LIKE', '6')
            ->orderBy('view_count','DESC')->take(1)->get();

        $lifestyle_Last_index = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('id','DESC')->take(4)->get();

        $hacking_Last_index = News::with('admin')->where('category_id','LIKE', '19')
            ->orderBy('id','DESC')->take(4)->get();

        $business_Last_index = News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('id','DESC')->take(4)->get();

        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.blog.BlogNewsSingle',[
            'books_view_count_blog'=>$books_view_count_blog,
            'math_view_count_blog'=>$math_view_count_blog,
            'travel_view_count_blog' =>$travel_view_count_blog,
            'lifestyle_view_count_blog' =>$lifestyle_view_count_blog,
            'jetistik_view_count' => $jetistik_view_count,
            'business_Last_index' =>$business_Last_index,
            'informatics_view_count' =>$informatics_view_count,
            'lifestyle_Last_index' =>$lifestyle_Last_index,
            'hacking_Last_index' =>$hacking_Last_index,
        ], compact('news_detail','theme', 'related_news', 'date'));
    }
}

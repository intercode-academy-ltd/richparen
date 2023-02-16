<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsletterSubscrber;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{
    public function index(News $news)
    {
        $date = Carbon::parse($news->created_at);

        $Blog_Last_index = News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('id','DESC')->take(1)->get();

        $blog_view_count_index = News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('view_count','DESC')->take(1)->get();

        $lifestyle_Last_index = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('id','DESC')->take(1)->get();

        $Cryptocurrency_Last_index = News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('id','DESC')->take(1)->get();

        $business_Last_index =  News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('id','DESC')->take(1)->get();

        $Success_Last_index =  News::with('admin')->where('category_id','LIKE', '6')
            ->orderBy('id','DESC')->take(2)->get();

        $Forbes_Last_index =  News::with('admin')->where('category_id','LIKE', '7')
            ->orderBy('id','DESC')->take(2)->get();

        $codeforces_view_count_index =  News::with('admin')->where('category_id','LIKE', '8')
            ->orderBy('view_count','DESC')->take(1)->get();

        $acmp_view_count_index =  News::with('admin')->where('category_id','LIKE', '9')
            ->orderBy('view_count','DESC')->take(1)->get();

        $hacking_view_count_index = News::with('admin')->where('category_id','LIKE', '19')
            ->orderBy('view_count','DESC')->take(1)->get();

        $Cryptocurrency_view_count_index = News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('view_count','DESC')->take(1)->get();

        $sql_view_count_index =  News::with('admin')->where('category_id','LIKE', '14')
            ->orderBy('view_count','DESC')->take(1)->get();

        //Destination
        $codeforces_Last_index =  News::with('admin')->where('category_id','LIKE', '8')
            ->orderBy('id','DESC')->take(1)->get();

        $acmp_Last_index =  News::with('admin')->where('category_id','LIKE', '9')
            ->orderBy('id','DESC')->take(1)->get();

        $algorithm_Last_index =  News::with('admin')->where('category_id','LIKE', '10')
            ->orderBy('id','DESC')->take(1)->get();

        $informatics_Last_index =  News::with('admin')->where('category_id','LIKE', '11')
            ->orderBy('id','DESC')->take(1)->get();

        //Programming
        $java_Last_index =  News::with('admin')->where('category_id','LIKE', '12')
            ->orderBy('id','DESC')->take(1)->get();

        $cplusplus_Last_index =  News::with('admin')->where('category_id','LIKE', '13')
            ->orderBy('id','DESC')->take(1)->get();

        $sql_Last_index =  News::with('admin')->where('category_id','LIKE', '14')
            ->orderBy('id','DESC')->take(1)->get();

        $gamedev_Last_index =  News::with('admin')->where('category_id','LIKE', '15')
            ->orderBy('id','DESC')->take(1)->get();

        //Language
        $english_Last_index =  News::with('admin')->where('category_id','LIKE', '16')
            ->orderBy('id','DESC')->take(1)->get();

        $russian_Last_index =  News::with('admin')->where('category_id','LIKE', '17')
            ->orderBy('id','DESC')->take(1)->get();

        $math_Last_index =  News::with('admin')->where('category_id','LIKE', '18')
            ->orderBy('id','DESC')->take(1)->get();

        $books_Last_index =  News::with('admin')->where('category_id','LIKE', '20')
            ->orderBy('id','DESC')->take(1)->get();

        $last_all_post_index = News::with('category')->orderBy('id','DESC')->paginate(50);

        return view('welcome',
            [ 'Blog_Last_index' =>$Blog_Last_index,
                'Forbes_Last_index'=>$Forbes_Last_index,
              'Success_Last_index'=>$Success_Last_index,
              'Cryptocurrency_Last_index' =>$Cryptocurrency_Last_index,
                'blog_view_count_index' =>$blog_view_count_index,
                'lifestyle_Last_index' =>$lifestyle_Last_index,
                'business_Last_index' =>$business_Last_index,
                'informatics_Last_index' =>$informatics_Last_index,
                'algorithm_Last_index' =>$algorithm_Last_index,
                'acmp_Last_index' =>$acmp_Last_index,
                'codeforces_Last_index'=>$codeforces_Last_index,
                'java_Last_index'=>$java_Last_index,
                'gamedev_Last_index'=>$gamedev_Last_index,
                'sql_Last_index'=>$sql_Last_index,
                'cplusplus_Last_index'=>$cplusplus_Last_index,
                'english_Last_index'=>$english_Last_index,
                'russian_Last_index'=>$russian_Last_index,
                'math_Last_index'=>$math_Last_index,
                'codeforces_view_count_index'=>$codeforces_view_count_index,
                'acmp_view_count_index'=>$acmp_view_count_index,
                'hacking_view_count_index' =>$hacking_view_count_index,
                'Cryptocurrency_view_count_index'=>$Cryptocurrency_view_count_index,
                'sql_view_count_index'=>$sql_view_count_index,
                'last_all_post_index'=>$last_all_post_index,
                'books_Last_index'=>$books_Last_index,

            ], compact('date'));
    }

    public function WelcomeNewsSingle($slug, News $news){

        $date = Carbon::parse($news->created_at);
        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }

        $jetistik_view_count = News::with('admin')->where('category_id','LIKE', '6')
            ->orderBy('view_count','DESC')->take(1)->get();

        $lifestyle_view_count = News::with('admin')->where('category_id','LIKE', '2')
            ->orderBy('view_count','DESC')->take(1)->get();

        $blog_Last_index =  News::with('admin')->where('category_id','LIKE', '3')
            ->orderBy('id','DESC')->take(4)->get();

        $business_Last_index =  News::with('admin')->where('category_id','LIKE', '5')
            ->orderBy('id','DESC')->take(4)->get();

        $currency_Last_index =  News::with('admin')->where('category_id','LIKE', '4')
            ->orderBy('id','DESC')->take(4)->get();

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('WelcomeNewsSingle',[

            'blog_Last_index'=>$blog_Last_index,
            'lifestyle_view_count'=>$lifestyle_view_count,
            'jetistik_view_count'=>$jetistik_view_count,
            'business_Last_index'=>$business_Last_index,
            'currency_Last_index'=>$currency_Last_index,

        ], compact('news_detail','theme', 'date', 'related_news'));
    }

}

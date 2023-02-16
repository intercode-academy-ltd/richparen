<?php

namespace App\Http\Controllers\pages\books;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $books_english = News::with('admin')->where('post','LIKE', 'english_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_java = News::with('admin')->where('post','LIKE', 'java_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_cplusplus = News::with('admin')->where('post','LIKE', 'cplusplus_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_database = News::with('admin')->where('post','LIKE', 'database_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_gamedev = News::with('admin')->where('post','LIKE', 'gamedev_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_russian = News::with('admin')->where('post','LIKE', 'russian_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_math = News::with('admin')->where('post','LIKE', 'math_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_hacking = News::with('admin')->where('post','LIKE', 'hacking_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_informatics = News::with('admin')->where('post','LIKE', 'informatics_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_business = News::with('admin')->where('post','LIKE', 'business_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_algorithm = News::with('admin')->where('post','LIKE', 'algorithm_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_success = News::with('admin')->where('post','LIKE', 'success_book')
            ->orderBy('id','DESC')->take(3)->get();//

        $books_currency = News::with('admin')->where('post','LIKE', 'currency_book')
            ->orderBy('id','DESC')->take(3)->get();//

        return view('view.books.books',
            [
                'books_english' =>$books_english,
                'books_java'=>$books_java,
                'books_cplusplus'=>$books_cplusplus,
                'books_database'=>$books_database,
                'books_gamedev'=>$books_gamedev,
                'books_russian'=>$books_russian,
                'books_math'=>$books_math,
                'books_hacking'=>$books_hacking,
                'books_informatics'=>$books_informatics,
                'books_business'=>$books_business,
                'books_success'=>$books_success,
                'books_algorithm'=>$books_algorithm,
                'books_currency'=>$books_currency,
                ],
            compact('date'));
    }

    public function BooksNewsSingle($slug, News $news){
        $theme = Theme::first();
        $news_detail = News::with('admin')->where('slug', $slug)->first();
        $newsKey = 'news_' . $news_detail->id;
        if (!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }
        $date = Carbon::parse($news->created_at);

        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id', '!=', $news_detail->id)
            ->orderBy('id','DESC')->take(3)->get();

        return view('view.books.BooksNewsSingle',[

        ], compact('news_detail','theme', 'date', 'related_news'));
    }


    public function success(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_success = News::with('admin')->where('post','LIKE', 'success_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.success', [
            'books_all_success'=>$books_all_success,
        ], compact('date'));
    }

    public function english(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_english = News::with('admin')->where('post','LIKE', 'english_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.english', [
            'books_all_english' =>$books_all_english,
        ], compact('date'));
    }

    public function java(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_java = News::with('admin')->where('post','LIKE', 'java_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.java', [
            'books_all_java'=>$books_all_java,
        ], compact('date'));
    }

    public function cplusplus(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_cplusplus = News::with('admin')->where('post','LIKE', 'cplusplus_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.cplusplus', [
            'books_all_cplusplus'=>$books_all_cplusplus,
        ], compact('date'));
    }

    public function database(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_database = News::with('admin')->where('post','LIKE', 'database_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.database', [
            'books_all_database'=>$books_all_database,
        ], compact('date'));
    }

    public function gamedev(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_gamedev = News::with('admin')->where('post','LIKE', 'gamedev_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.gamedev', [
            'books_all_gamedev'=>$books_all_gamedev,
        ], compact('date'));
    }

    public function russian(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_russian = News::with('admin')->where('post','LIKE', 'russian_book')
            ->orderBy('id','DESC')->paginate(20);
        return view('view.books.russian', [
            'books_all_russian'=>$books_all_russian,

        ], compact('date'));
    }

    public function math(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_math = News::with('admin')->where('post','LIKE', 'math_book')
            ->orderBy('id','DESC')->paginate(20);
        return view('view.books.math', [
            'books_all_math'=>$books_all_math,
        ], compact('date'));
    }

    public function hacking(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_hacking = News::with('admin')->where('post','LIKE', 'hacking_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.hacking', [
            'books_all_hacking'=>$books_all_hacking,
        ], compact('date'));
    }

    public function informatics(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_informatics = News::with('admin')->where('post','LIKE', 'informatics_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.informatics', [
            'books_all_informatics'=>$books_all_informatics,
        ], compact('date'));
    }

    public function business(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_business = News::with('admin')->where('post','LIKE', 'business_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.business', [
            'books_all_business'=>$books_all_business,
        ], compact('date'));
    }

    public function algorithm(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_algorithm = News::with('admin')->where('post','LIKE', 'algorithm_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.algorithm', [
            'books_all_algorithm'=>$books_all_algorithm,
        ], compact('date'));
    }

    public function currency(News $news){
        $date = Carbon::parse($news->created_at);

        $books_all_currency = News::with('admin')->where('post','LIKE', 'currency_book')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.books.currency', [
            'books_all_currency'=>$books_all_currency,
        ], compact('date'));
    }


    public  function download($id){
        $data = DB::table('news')->where('id', $id)->first();
        $filepath = storage_path("app/public/uploads/file_name/{$data->file_name}");
        return \Response::download($filepath);
    }


}

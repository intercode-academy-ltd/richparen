<?php

namespace App\Http\Controllers\pages\java;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class JavaController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $java_news_last = News::with('admin')->where('post','LIKE', 'java')
            ->orderBy('id', 'DESC')->take(3)->get();

        $java_project_last = News::with('admin')->where('project','LIKE', 'project_java')
            ->orderBy('id', 'DESC')->take(3)->get();

        $all_lesson_java = News::with('admin')->where('lesson','LIKE', 'lesson_java')
            ->orderBy('id', 'ASC')->take(10)->get();

        return view('view.java.java', [
            'java_news_last' =>$java_news_last,
            'all_lesson_java' =>$all_lesson_java,
            'java_project_last'=>$java_project_last,
        ], compact('date'));
    }

    public function post(News $news){

        $date = Carbon::parse($news->created_at);

        $last_all_post_java =  News::with('admin')->where('post','LIKE', 'java')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.java.post', [
            'last_all_post_java' =>$last_all_post_java,
        ], compact('date'));
    }

    public  function lesson(News $news){

        $date = Carbon::parse($news->created_at);

        $last_all_lesson =  News::with('admin')->where('lesson','LIKE', 'lesson_java')
            ->orderBy('id','ASC')->paginate(50);

        return view('view.java.lesson', [
            'last_all_lesson' =>$last_all_lesson,
        ], compact('date'));
    }

    public function project(News $news){

        $date = Carbon::parse($news->created_at);

        $last_all_project_java =  News::with('admin')->where('project','LIKE', 'project_java')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.java.project', [
            'last_all_project_java' =>$last_all_project_java,
        ], compact('date'));
    }

    public function JavaNewsSingle($slug, News $news){

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

        return view('view.java.JavaNewsSingle',[

        ], compact('news_detail','theme', 'date', 'related_news'));
    }

    public  function download($id){
        $data = DB::table('news')->where('id', $id)->first();
        $filepath = storage_path("app/public/uploads/file_name/{$data->file_name}");
        return \Response::download($filepath);
    }
}

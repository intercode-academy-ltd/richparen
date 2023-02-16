<?php

namespace App\Http\Controllers\pages\cplusplus;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CplusplusController extends Controller
{
    public function index(News $news){

        $date = Carbon::parse($news->created_at);

        $cplusplus_news_last = News::with('admin')->where('post','LIKE', 'c++')
            ->orderBy('id', 'DESC')->take(3)->get();

        $cplusplus_project_last = News::with('admin')->where('project','LIKE', 'project_cplusplus')
            ->orderBy('id', 'DESC')->take(3)->get();

        $all_lesson_cplusplus = News::with('admin')->where('lesson','LIKE', 'lesson_cplusplus')
            ->orderBy('id', 'ASC')->take(10)->get();

        return view('view.cplusplus.cplusplus', [
            'cplusplus_news_last' =>$cplusplus_news_last,
            'all_lesson_cplusplus' =>$all_lesson_cplusplus,
            'cplusplus_project_last'=>$cplusplus_project_last,
        ], compact('date'));
    }

    public  function download($id){
        $data = DB::table('news')->where('id', $id)->first();
        $filepath = storage_path("app/public/uploads/file_name/{$data->file_name}");
        return \Response::download($filepath);
    }

    public function post(News $news){

        $date = Carbon::parse($news->created_at);

        $last_all_post_cplusplus =  News::with('admin')->where('post','LIKE', 'c++')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.cplusplus.post', [
            'last_all_post_cplusplus' =>$last_all_post_cplusplus,
        ], compact('date'));
    }

    public  function lesson(News $news){

        $date = Carbon::parse($news->created_at);

        $last_all_lesson =  News::with('admin')->where('lesson','LIKE', 'lesson_cplusplus')
            ->orderBy('id','ASC')->paginate(50);

        return view('view.cplusplus.lesson', [
            'last_all_lesson' =>$last_all_lesson,
        ], compact('date'));
    }

    public function project(News $news){

        $date = Carbon::parse($news->created_at);

        $last_all_project_cplusplus =  News::with('admin')->where('project','LIKE', 'project_cplusplus')
            ->orderBy('id','DESC')->paginate(20);

        return view('view.cplusplus.project', [
            'last_all_project_cplusplus' =>$last_all_project_cplusplus,

        ], compact('date'));
    }

    public function CplusplusNewsSingle($slug, News $news){

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

        return view('view.cplusplus.CplusplusNewsSingle',[

        ], compact('news_detail','theme', 'date', 'related_news'));
    }
}

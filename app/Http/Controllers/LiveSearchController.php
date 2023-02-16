<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearchController extends Controller
{
    public function searchContent( Request $request){

        if ($request->search){
            $date = Carbon::parse($request->created_at);

            $search = News::where('news_title', 'LIKE', '%'.$request->search.'%')
                ->orWhere('slug', 'LIKE', '%'.$request->search.'%')
                ->orWhere('subcat', 'LIKE', '%'.$request->search.'%')
                ->orWhere('news_content', 'LIKE', '%'.$request->search.'%')
                ->orWhere('lesson', 'LIKE', '%'.$request->search.'%')
                ->orWhere('project', 'LIKE', '%'.$request->search.'%')
                ->orWhere('post', 'LIKE', '%'.$request->search.'%')->latest()->paginate(15);
            return view('SearchList', compact('search', 'date'));
        } else {
            return redirect()->back()->with('message','Кешіріңіз табылмады');
        }
    }
}





@extends('layouts.app')
@section('title') {{' Деректер базасы '}}@endsection
@section('content')
    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v16.0" nonce="AW4Csa7f">
    </script>
    <script>window.twttr = (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
            if (d.getElementById(id)) return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function(f) {
                t._e.push(f);
            };
            return t;
        }(document, "script", "twitter-wjs"));</script>

    <!-- Start Main content -->
    <main>
        <!--archive header-->
        <div class="archive-header pt-50">
            <div class="container">
                <h2 class="font-weight-900">Database Programming</h2>
                <div class="breadcrumb">
                    <a href="{{asset('')}}" rel="nofollow">Басты бет</a>
                    <span></span> Database
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="container">
            <div class="loop-grid mb-30">
                <div class="row">
                    @foreach($database_news_last as $news)
                        <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                    <a class="img-link" href="{{route('DatabaseNewsSingle', $news->slug)}}">
                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                    </a>
                                    <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                    <ul class="social-share">
                                        <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                        <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/database')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                        <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="post-content p-30">
                                    <div class="entry-meta meta-0 font-small mb-10">
                                        @foreach($database as $nav)
                                            <a href="{{$nav->slug}}"><span class="post-cat text-info">{{$nav->category_name}}</span></a>
                                        @endforeach
                                        <span class="post-cat text-success">{{$news->subcat}}</span>
                                    </div>
                                    <div class="d-flex post-card-content">
                                        <h5 class="post-title mb-20 font-weight-900">
                                            <a style="font-family: 'Georgia, serif'" href="{{route('DatabaseNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                            <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <button class="btn btn-danger"><a href="{{(route('database.post'))}}" style="color: white;">Database барлық блог</a></button>
            </div>
            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            <div class="loop-grid mb-30">
                <div class="row">
                    @foreach($database_project_last as $news)
                        <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                    <a class="img-link" href="{{route('DatabaseNewsSingle', $news->slug)}}">
                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                    </a>
                                    <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                    <ul class="social-share">
                                        <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                        <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/database')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                        <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="post-content p-30">
                                    <div class="entry-meta meta-0 font-small mb-10">
                                        @foreach($database as $nav)
                                            <a href="{{$nav->slug}}"><span class="post-cat text-info">{{$nav->category_name}}</span></a>
                                        @endforeach
                                        <span class="post-cat text-success">{{$news->subcat}}</span>
                                    </div>
                                    <div class="d-flex post-card-content">
                                        <h5 class="post-title mb-20 font-weight-900">
                                            <a style="font-family: 'Georgia, serif'" href="{{route('DatabaseNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                            <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <button class="btn btn-danger"><a href="{{(route('database.project'))}}" style="color: white;">Database барлық проект</a></button>
            </div>
            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
        </div>
        <!--site-bottom-->
        <div class="site-bottom pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                            <div class="widget-header-2 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Database Онлайн сабақтар</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    @foreach($all_lesson_database as $news)
                                        <li class="mb-30">
                                            <div class="d-flex hover-up-2 transition-normal">
                                                <div class=" media-body">
                                                    <h4 class="post-title mb-15  font-medium">
                                                        <span> {{ $loop->index + 1 }}) &nbsp;&nbsp;<a style="text-decoration: underline;" href="{{route('DatabaseNewsSingle', $news->slug)}}">{{$news->news_title}} </a></span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-danger"><a href="{{route('database.lesson')}}" style="color: white;">Database барлық сабақтар</a></button>
            </div>
            <!--container-->
        </div>
        <!--end site-bottom-->
    </main>
    <!-- End Main content -->
@endsection

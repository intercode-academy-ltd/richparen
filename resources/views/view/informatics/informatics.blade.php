@extends('layouts.app')
@section('title') {{' Информатики '}}@endsection
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
                <h2 class="font-weight-900">Ақпараттық және коммуникациялық технологиялар</h2>
                <div class="breadcrumb">
                    <a href="{{asset('')}}" rel="nofollow">Басты бет</a>
                    <span></span> Ақпараттық және коммуникациялық технологиялар
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="pb-50" style="font-family: 'Georgia, serif'">
            <div class="container">
                <div class="loop-grid mb-30">
                    <div class="row">
                        @foreach($informatics_view_count as $news)
                            <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                                <div class="post-card-1 border-radius-10 hover-up">
                                    <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                        <a class="img-link" href="{{route('InformaticsNewsSingle', $news->slug)}}">
                                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                        </a>
                                        <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                        <ul class="social-share">
                                            <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                            <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/informatics')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                            <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                        </ul>
                                </div>
                                <div class="post-content p-30">
                                    <div class="entry-meta meta-0 font-small mb-10">
                                        @foreach($Informatics as $nav)
                                            <a href="{{$nav->slug}}"><span class="post-cat text-info">{{$nav->category_name}}</span></a>
                                        @endforeach
                                        <span style="font-family: 'Georgia, serif'" class="post-cat text-success">{{$news->subcat}}</span>
                                    </div>
                                    <div class="d-flex post-card-content">
                                        <h5 class="post-title mb-20 font-weight-900">
                                            <a style="font-family: 'Georgia, serif'" href="{{route('InformaticsNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
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
            </div>
            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-3">
                        <div class="loop-list loop-list-style-1">
                            @foreach($all_post_informatics as $news)
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative">
                                                    <a class="img-link" href="{{route('InformaticsNewsSingle', $news->slug)}}">
                                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                    </a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/informatics')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    @foreach($Informatics as $nav)
                                                        <a href="{{$nav->slug}}">
                                                            <span class="post-cat text-primary">{{$nav->category_name}}</span>
                                                        </a>
                                                    @endforeach
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('InformaticsNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
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
                    </div>
                    <div class="pagination-area mb-30 wow fadeInUp animated">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                {{$all_post_informatics->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        @include('includes.about')
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Ең танымал</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    @foreach($hacking_last_informatics as $news)
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                        <a style="font-family: 'Georgia, serif'" href="{{route('HackingNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                    </h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                        <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="{{route('HackingNewsSingle', $news->slug)}}">
                                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    @foreach($math_last_informatics as $news)
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                        <a style="font-family: 'Georgia, serif'" href="{{route('MathNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                    </h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                        <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="{{route('MathNewsSingle', $news->slug)}}">
                                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    @foreach($blog_last_informatics as $news)
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                        <a style="font-family: 'Georgia, serif'" href="{{route('BlogNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                    </h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                        <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="{{route('BlogNewsSingle', $news->slug)}}">
                                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    @foreach($cryptocurrency_last_informatics as $news)
                                        <li class=" wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                        <a style="font-family: 'Georgia, serif'" href="{{route('CryptoCurrencyNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                    </h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                        <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="{{route('CryptoCurrencyNewsSingle', $news->slug)}}">
                                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Instagram</h5>
                            </div>
                            @include('includes.instagram')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-- End Main content -->
@endsection

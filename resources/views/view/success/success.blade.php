@extends('layouts.app')
@section('title') {{' Жетістік '}}@endsection
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
                <h2 class="font-weight-900">Жетістік</h2>
                <div class="breadcrumb">
                    <a href="{{asset('')}}" rel="nofollow">Басты бет</a>
                    <span></span> Жетістік
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="container">
            <div class="loop-grid mb-30" style="font-family: 'Georgia, serif'">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                                @foreach($success_view_count as $news)
                                    <div class="position-relative post-thumb">
                                        <div class="thumb-overlay img-hover-slide position-relative">
                                            <a href="{{route('SuccessNewsSingle', $news->slug)}}">
                                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                            </a>
                                            <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                            <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                                <div class="entry-meta meta-0 font-small mb-20">
                                                    @foreach($success as $nav)<a href="{{$nav->slug}}"><span class="post-cat text-info text-uppercase">{{$nav->category_name}}</span></a>@endforeach
                                                    <span style="font-family: 'Georgia, serif'" class="post-cat text-success text-uppercase">{{$news->subcat}}</span>
                                                </div>
                                                <h3 class="post-title font-weight-900 mb-20">
                                                    <a style="font-family: 'Georgia, serif'" class="text-white" href="{{route('SuccessNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h3>
                                                <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                                    <span class="post-by">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @foreach($forbes_view_count as $news)
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                    <a class="img-link" href="{{route('ForbesNewsSingle', $news->slug)}}">
                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                    </a>
                                <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/forbes')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    @foreach($forbes as $nav)<a href="{{$nav->slug}}"><span class="post-cat text-info">{{$nav->category_name}}</span></a>@endforeach
                                    <span style="font-family: 'Georgia, serif'" class="post-cat text-success">{{$news->subcat}}</span>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a style="font-family: 'Georgia, serif'" href="{{route('ForbesNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-by">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                        <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    @foreach($all_post_success as $news)
                        <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s" style="font-family: 'Georgia, serif'">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                    <a class="img-link" href="{{route('SuccessNewsSingle', $news->slug)}}">
                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                    </a>
                                    <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                    <ul class="social-share">
                                        <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                        <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/success')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                        <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="post-content p-30">
                                    <div class="entry-meta meta-0 font-small mb-10">
                                        <span style="font-family: 'Georgia, serif'" class="post-cat text-info">{{$news->subcat}}</span>
                                    </div>
                                    <div class="d-flex post-card-content">
                                        <h5 class="post-title mb-20 font-weight-900">
                                            <a style="font-family: 'Georgia, serif'" href="{{route('SuccessNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-by">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                            <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="row mt-50">
                    <div class="col-12">
                        <div class="pagination-area mb-30 wow fadeInUp animated">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    {{$all_post_success->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
    <!--site-bottom-->
    <div class="site-bottom pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Forbes</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                @foreach($forbes_last_success as $news)
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="{{route('ForbesNewsSingle', $news->slug)}}">
                                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                <a style="font-family: 'Georgia, serif'" href="{{route('ForbesNewsSingle', $news->slug)}}">{{ $news->news_title }}
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-by">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Бизнес</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                @foreach($business_last_success as $news)
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="{{route('BusinessNewsSingle', $news->slug)}}">
                                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                <a style="font-family: 'Georgia, serif'" href="{{route('BusinessNewsSingle', $news->slug)}}">{{ $news->news_title }}
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-by">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Lifestyle</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                @foreach($lifestyle_last_success as $news)
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="{{route('LifestyleNewsSingle', $news->slug)}}">
                                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                <a style="font-family: 'Georgia, serif'" href="{{route('LifestyleNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-by">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </div>
    <!--end site-bottom-->
@endsection


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{config('app.name', 'Richparen')}} | Жеке Блог</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.png')}}">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/widgets.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>
<div class="scroll-progress primary-bg"></div>
<!-- Start Preloader -->
<div class="preloader text-center">
    <div class="circle"></div>
</div>
<!--Offcanvas sidebar-->
@include('includes.sidebar')
<!-- Start Header -->
@include('includes.header')
<!--Start search form-->
@include('includes.search')
<!-- Start Main content -->
<main>
    <div class="featured-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <p class="text-muted"><span class="typewrite d-inline" data-period="2000" data-type='[ " Travel Blogger. ", "Content Writter. ", "Programmer ", "SEO Richparen" ]'></span></p>
                    <h2>Сәлем мен <span>Duman</span></h2>
                    <h3 class="mb-20"> Блогка қош келдің</h3>
                    <h5 class="text-muted">Мотивациялық идеялар, саяхат туралы кеңестер, IT  нұсқаулық туралы соңғы жаңалықтарды жіберіп алмаңыз...</h5>

                    <form class="input-group form-subcriber mt-30 d-flex">
                        <input pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"  name="subscriber"  id="subscriber" required="" type="email" class="form-control bg-white font-small" placeholder="Электрондық поштаңызды енгізіңіз">
                        <button  class="btn bg-primary text-white">Жазылу</button>
                    </form>

                </div>
                <div class="col-lg-6 text-right d-none d-lg-block">
                    @foreach($main_image as $image)
                        <img src="{{asset('storage/uploads/theme/'.$image->main_image)}}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
{{--    <div class="site-bottom pt-50 pb-50">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">--}}
{{--                        <div class="post-block-list post-module-1">--}}
{{--                            <ul class="list-post">--}}
{{--                                <li class="mb-30">--}}
{{--                                    <div class="d-flex hover-up-2 transition-normal">--}}
{{--                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                            <a class="color-white" href="single.html">--}}
{{--                                                <img src="assets/imgs/news/thumb-1.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="post-content media-body">--}}
{{--                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">--}}
{{--                                                <a href="#"><span style="color:blue;">"Mappin"</span> &nbsp; ТОО</a>--}}
{{--                                            </h6>--}}
{{--                                            <div class="entry-meta meta-1 float-left font-x-small">--}}
{{--                                                <span class="post-on">Создать свой собственный <br><br> "Любовь карта"</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="mb-30">--}}
{{--                                    <div class="d-flex hover-up-2 transition-normal">--}}
{{--                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                            <a class="color-white" href="single.html">--}}
{{--                                                <img src="assets/imgs/news/thumb-3.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="post-content media-body">--}}
{{--                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">--}}
{{--                                                <a href="#"><span style="color:blue;">"WikiBlogger"</span> &nbsp; онлайн портал</a>--}}
{{--                                            </h6>--}}
{{--                                            <div class="entry-meta meta-1 float-left font-x-small">--}}
{{--                                                <span class="post-on">Цензуралық ақпараттар бөлімі</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.2s">--}}
{{--                        <div class="post-block-list post-module-1">--}}
{{--                            <ul class="list-post">--}}
{{--                                <li class="mb-30">--}}
{{--                                    <div class="d-flex hover-up-2 transition-normal">--}}
{{--                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                            <a class="color-white" href="#">--}}
{{--                                                <img src="assets/imgs/news/thumb-5.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="post-content media-body">--}}
{{--                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">--}}
{{--                                                <a href="#">--}}
{{--                                                    <span style="color:blue;">"InterCode"</span> &nbsp; ТОО--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                            <div class="entry-meta meta-1 float-left font-x-small">--}}
{{--                                                <span class="post-on">Заманауи бағдарламалау</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="mb-30">--}}
{{--                                    <div class="d-flex hover-up-2 transition-normal">--}}
{{--                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                            <a class="color-white" href="single.html">--}}
{{--                                                <img src="assets/imgs/news/thumb-6.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="post-content media-body">--}}
{{--                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">--}}
{{--                                                <a href="#"><span style="color:blue;">"GoldSenator"</span> &nbsp; ТОО</a>--}}
{{--                                            </h6>--}}
{{--                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">--}}
{{--                                                <span class="post-on">Бред тауарлар дүкені</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.4s">--}}
{{--                        <div class="post-block-list post-module-1">--}}
{{--                            <ul class="list-post">--}}
{{--                                <li class="mb-30">--}}
{{--                                    <div class="d-flex hover-up-2 transition-normal">--}}
{{--                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                            <a class="color-white" href="#">--}}
{{--                                                <img src="assets/imgs/news/thumb-8.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="post-content media-body">--}}
{{--                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">--}}
{{--                                                <a href="#">--}}
{{--                                                    <span style="color:blue;">"AlcoPro"</span> &nbsp; ТОО--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                            <div class="entry-meta meta-1 float-left font-x-small">--}}
{{--                                                <span class="post-on">Онлайн магазин</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="mb-30">--}}
{{--                                    <div class="d-flex hover-up-2 transition-normal">--}}
{{--                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                            <a class="color-white" href="single.html">--}}
{{--                                                <img src="assets/imgs/news/thumb-8.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="post-content media-body">--}}
{{--                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">--}}
{{--                                                <a href="#">--}}
{{--                                                    <span style="color:blue;">"Qazmentor"</span> &nbsp; ТОО--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">--}}
{{--                                                <span class="post-on">Онлайн оқылым жүйесі</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--container-->--}}
{{--    </div>--}}
    <div class="container" style="font-family: 'Georgia, serif'">
        <div class="hot-tags pt-30 pb-30 font-small align-self-center">
            <div class="widget-header-3">
                <div class="row align-self-center">
                    <div class="col-md-4 align-self-center">
                        <h5 class="widget-title">Таңдаулы посттар</h5>
                    </div>
                    <div class="col-md-8 text-md-right font-small align-self-center">
                        <p class="d-inline-block mr-5 mb-0"><i class="elegant-icon  icon_tag_alt mr-5 text-muted"></i>Hot tags:</p>
                        <ul class="list-inline d-inline-block tags">
                            @foreach($acmp as $nav)<li class="list-inline-item"><a href="{{$nav->slug}}">#{{$nav->category_name}}</a></li>@endforeach
                            @foreach($hacking as $nav)<li class="list-inline-item"><a href="{{$nav->slug}}"># {{$nav->category_name}}</a></li>@endforeach
                            @foreach($englishlanguage as $nav)<li class="list-inline-item"><a href="{{$nav->slug}}"># {{$nav->category_name}}</a></li>@endforeach
                            @foreach($business as $nav)<li class="list-inline-item"><a href="{{$nav->slug}}">#{{$nav->category_name}}</a></li>@endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="loop-grid mb-30">
            <div class="row">
                <div class="col-lg-8 mb-30">
                    <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                        <div class="arrow-cover"></div>
                        <div class="slide-fade">
                            <div class="position-relative post-thumb">
                                @foreach($Blog_Last_index as $news)
                                <div class="thumb-overlay img-hover-slide position-relative">
                                        <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                    <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                    <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            @foreach($blog as $nav)
                                                <a href="{{$nav->slug}}"><span class="post-cat text-info text-uppercase">{{$nav->category_name}}</span></a>
                                            @endforeach
                                            <span class="post-cat text-success text-uppercase">{{$news->subcat}}</span>
                                        </div>
                                        <h3 class="post-title font-weight-900 mb-20">
                                            <a style="font-family: 'Georgia, serif'" class="text-white" href="{{route('BlogNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                        </h3>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                            <span class="hit-count has-dot">{{$news->view_count}} Көрілім</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                    @foreach($Cryptocurrency_Last_index as $news)
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                            <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/сryptocurrency')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                @foreach($currency as $nav)
                                    <a href="{{$nav->slug}}">
                                        <span class="post-cat text-info">{{$nav->category_name}}</span>
                                    </a>
                                @endforeach
                                <span style="font-family: 'Georgia, serif'" class="post-cat text-success">{{$news->subcat}}</span>
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a style="font-family: 'Georgia, serif'" href="{{route('CryptoCurrencyNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small">
                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </article>
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated">
                    @foreach($blog_view_count_index as $news)
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                            <a class="img-link" href="{{route('BlogNewsSingle', $news->slug)}}">
                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                            </a>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/blog')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                @foreach($blog as $nav)
                                    <a href="{{$nav->slug}}"><span class="post-cat text-warning">{{$nav->category_name}}</span></a>
                                @endforeach
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a style="font-family: 'Georgia, serif'" href="{{route('BlogNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small ">
                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </article>
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                    @foreach( $lifestyle_Last_index as $news)
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                            <a class="img-link" href="{{route('LifestyleNewsSingle', $news->slug)}}">
                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                            </a>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/lifestyle')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                @foreach($lifestyle as $nav)
                                    <a  href="{{$nav->slug}}"><span class="post-cat text-danger">{{$nav->category_name}}</span></a>
                                @endforeach
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a style="font-family: 'Georgia, serif'" href="{{route('LifestyleNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small">
                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </article>
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                    @foreach($business_Last_index as $news)
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                            <a class="img-link" href="{{route('BusinessNewsSingle', $news->slug)}}">
                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                            </a>
                            <span class="top-right-icon bg-info"><i class="elegant-icon icon_headphones"></i></span>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/business')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                @foreach($business as $nav)
                                    <a href="{{$nav->slug}}"><span class="post-cat text-success">{{$nav->category_name}}</span></a>
                                @endforeach
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a style="font-family: 'Georgia, serif'" href="{{route('BusinessNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small">
                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </article>
            </div>
        </div>
    </div>
    <div class="bg-grey pt-50 pb-50" style="font-family: 'Georgia, serif'">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-2">
                        <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                            <h5 class="mt-5 mb-30">Жетістік және Forbes</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                @foreach($Success_Last_index as $news)
                                <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                            <a class="img-link" href="{{route('SuccessNewsSingle', $news->slug)}}">
                                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                            </a>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/success')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                @foreach($success as $nav)
                                                    <a href="{{$nav->slug}}"><span class="post-cat text-info">{{$nav->category_name}}</span></a>
                                                @endforeach
                                                <span style="font-family: 'Georgia, serif'" class="post-cat text-success">{{$news->subcat}}</span>
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('SuccessNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h5>
                                                <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>
                                                        {{ Str::limit(strip_tags($news->news_content), 100, '...') }}
                                                    </p>
                                                </div>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                                @foreach($Forbes_Last_index as $news)
                                <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                            <a class="img-link" href="{{route('ForbesNewsSingle', $news->slug)}}">
                                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                            </a>
                                            <span class="top-right-icon bg-secondary"><i class="elegant-icon icon_heart_alt"></i></span>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/forbes')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                @foreach($forbes as $nav)
                                                    <a href="{{$nav->slug}}"><span class="post-cat text-danger">{{$nav->category_name}}</span></a>
                                                @endforeach
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('ForbesNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h5>
                                                <div class="post-excerpt mb-25 font-small text-muted">
                                                    <p>
                                                        {{ Str::limit(strip_tags($news->news_content), 100, '...') }}
                                                    </p>
                                                </div>
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
                    </div>
                    <div class="post-module-3">
                        <div class="widget-header-1 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Соңғы жазбалар</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            @foreach($last_all_post_index as $news)
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative">
                                                <a class="img-link" href="{{route('WelcomeNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <span class="post-cat text-danger">{{ $news->category->category_name ?? ''}}</span>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a style="font-family: 'Georgia, serif'" href="{{route('WelcomeNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
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
                                {{$last_all_post_index->links()}}
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
                                    @foreach($codeforces_view_count_index as $news)
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('CodeforcesNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="{{route('CodeforcesNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                        @foreach($acmp_view_count_index as $news)
                                            <li class="mb-30 wow fadeInUp animated">
                                                <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                            <a style="font-family: 'Georgia, serif'" href="{{route('ACMPNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                        </h6>
                                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                            <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                            <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                        <a class="color-white" href="{{route('ACMPNewsSingle', $news->slug)}}">
                                                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                        @foreach($hacking_view_count_index as $news)
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
                                        @foreach($Cryptocurrency_view_count_index as $news)
                                            <li class="mb-30 wow fadeInUp animated">
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
                                        @foreach($sql_view_count_index as $news)
                                            <li class="mb-30 wow fadeInUp animated">
                                                <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                            <a style="font-family: 'Georgia, serif'" href="{{route('DatabaseNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                        </h6>
                                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                            <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                            <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                        <a class="color-white" href="{{route('DatabaseNewsSingle', $news->slug)}}">
                                                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Таңдаулы Цитаталар</h5>
                            </div>
                            @include('includes.quote')
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
<!--site-bottom-->
<div class="site-bottom pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">IT Solution</h5>
                    </div>
                    <div class="post-block-list post-module-1">
                        <ul class="list-post">
                            @foreach($codeforces_Last_index as $news)
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="{{route('CodeforcesNewsSingle', $news->slug)}}">
                                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                            <a style="font-family: 'Georgia, serif'" href="{{route('CodeforcesNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                        </h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                            <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                                @foreach($acmp_Last_index as $news)
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="{{route('ACMPNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('ACMPNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                @foreach($algorithm_Last_index as $news)
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="{{route('AlgorithmNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('AlgorithmNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                @foreach($informatics_Last_index as $news)
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="{{route('InformaticsNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('InformaticsNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
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
                        <h5 class="mt-5 mb-30">Programming</h5>
                    </div>
                    <div class="post-block-list post-module-1">
                        <ul class="list-post">
                            @foreach($java_Last_index as $news)
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="{{route('JavaNewsSingle', $news->slug)}}">
                                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                            <a style="font-family: 'Georgia, serif'" href="{{route('JavaNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                        </h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                            <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @foreach($cplusplus_Last_index as $news)
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="{{route('CplusplusNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('CplusplusNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @foreach($sql_Last_index as $news)
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="{{route('DatabaseNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('DatabaseNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @foreach($gamedev_Last_index as $news)
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="{{route('GameDevNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('GameDevNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
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
                        <h5 class="mt-5 mb-30">Language</h5>
                    </div>
                    <div class="post-block-list post-module-1">
                        <ul class="list-post">
                            @foreach($english_Last_index as $news)
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="{{route('EnglishLanguageNewsSingle', $news->slug)}}">
                                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                <a style="font-family: 'Georgia, serif'" href="{{route('EnglishLanguageNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            @foreach($russian_Last_index as $news)
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="{{route('RussianLanguageNewsSingle', $news->slug)}}">
                                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                <a style="font-family: 'Georgia, serif'" href="{{route('RussianLanguageNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            @foreach($math_Last_index as $news)
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="{{route('MathNewsSingle', $news->slug)}}">
                                                <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                <a style="font-family: 'Georgia, serif'" href="{{route('MathNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                            </h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            @foreach($books_Last_index as $news)
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="{{route('BooksNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('BooksNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
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
<div class="site-bottom pt-50 pb-50">
    <div class="container">
        <div class="sidebar-widget widget-latest-posts mb-30 mt-20 wow fadeInUp animated">
            <div class="widget-header-2 position-relative mb-30">
                <h5 class="mt-5 mb-30">Санаттар</h5>
            </div>
            <div class="carausel-3-columns">
                @foreach($business_Last_index as $news)
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="{{route('BusinessNewsSingle', $news->slug)}}">
                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6>
                        @foreach($business as $nav)
                            <a href="{{$nav->slug}}">{{$nav->category_name}}</a>
                        @endforeach
                        </h6>
                        <a class="font-small" href="{{route('BusinessNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                    </div>
                </div>
                @endforeach
                @foreach($lifestyle_Last_index as $news)
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="{{route('LifestyleNewsSingle', $news->slug)}}">
                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6>
                            @foreach($lifestyle as $nav)
                                <a href="{{$nav->slug}}">{{$nav->category_name}}</a>
                            @endforeach
                        </h6>
                        <a class="font-small" href="{{route('LifestyleNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                    </div>
                </div>
                @endforeach
                @foreach($informatics_Last_index as $news)
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="{{route('InformaticsNewsSingle', $news->slug)}}">
                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6>
                            @foreach($Informatics as $nav)
                                <a href="{{$nav->slug}}">{{$nav->category_name}}</a>
                            @endforeach
                        </h6>
                        <a class="font-small" href="{{route('InformaticsNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                    </div>
                </div>
                @endforeach
                @foreach($Cryptocurrency_Last_index as $news)
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="{{route('CryptoCurrencyNewsSingle', $news->slug)}}">
                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6>
                            @foreach($currency as $nav)
                                <a href="{{$nav->slug}}">{{$nav->category_name}}</a>
                            @endforeach
                        </h6>
                        <a class="font-small" href="{{route('CryptoCurrencyNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--container-->
</div>

<!-- Footer Start-->
@include('includes.footer')
    <!-- End Footer -->
<div class="dark-mark"></div>
<!-- Vendor JS-->
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.slicknav.js')}}"></script>
<script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.ticker.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.vticker-min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/vendor/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.theia.sticky.js')}}"></script>
<!-- NewsBoard JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

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


{{--<script>--}}
{{--    function addSubscriber(){--}}
{{--        var subscriber_email = $("#subscriber_email").val();--}}

{{--        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;--}}
{{--        if(regex.test(subscriber_email)==false){--}}
{{--            alert("Please enter valid email");--}}
{{--            return false;--}}
{{--        }--}}
{{--        $.ajax({--}}
{{--            type: 'post',--}}
{{--            url: '/',--}}
{{--            data:{subscriber_email:subscriber_email},--}}
{{--            success:function (resp){--}}
{{--                if(resp=="exists"){--}}
{{--                    alert("Жазылушының электрондық поштасы бұрыннан бар");--}}
{{--                } else if(resp=="inserted") {--}}
{{--                    alert("Жазылушыға рахмет");--}}
{{--                }--}}
{{--            },error: function (){--}}
{{--                alert("error");--}}
{{--            }--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}



</body>
</html>

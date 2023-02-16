@extends('layouts.app')
@section('title') {{' Саяхат '}}@endsection
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
        <div class="archive-header pt-50 text-center">
            <div class="container">
                <h5 class="font-weight-900" style="font-family: 'Georgia, serif'">Саяхат – өзімізді қайтадан іздеп табуға арналған ең ұлы ғылым </h5>
                <div class="breadcrumb" style="font-family: 'Georgia, serif'">
                   Альберт Камю
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="container">
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                                @foreach($travel_view_count as $news)
                                    <div class="thumb-overlay img-hover-slide position-relative" style="font-family: 'Georgia, serif'">
                                        <a href="{{route('TravelNewsSingle', $news->slug)}}">
                                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                        </a>
                                        <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
                                                @foreach($travel as $nav)
                                                    <a style="font-family: 'Georgia, serif'" href="{{$nav->slug}}">
                                                        <span class="post-cat text-info text-uppercase">{{$nav->category_name}}</span>
                                                    </a>
                                                @endforeach
                                                <span style="font-family: 'Georgia, serif'" class="post-cat text-success text-uppercase">{{ $news->subcat }}</span>
                                            </div>
                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" style="font-family: 'Georgia, serif'" href="{{route('TravelNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                            </h3>
                                            <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5 text-uppercase">
                                                <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                <span class="hit-count has-dot">{{$news->view_count}} Көрілім</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @foreach($currency_view_count as $news)
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up" style="font-family: 'Georgia, serif'">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                <a class="img-link" href="{{route('CryptoCurrencyNewsSingle', $news->slug)}}">
                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                </a>
                                <span class="top-right-icon bg-success">
                                    <i class="elegant-icon icon_camera_alt"></i>
                                </span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/travel')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    @foreach($currency as $nav)
                                        <a style="font-family: 'Georgia, serif'" href="{{$nav->slug}}"><span class="post-cat text-info">{{$nav->category_name}}</span></a>
                                    @endforeach
                                        <span class="post-cat text-success">{{$news->subcat}}</span>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a style="font-family: 'Georgia, serif'" href="{{route('CryptoCurrencyNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
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
                    @foreach($travel_last as $news)
                        <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.1s">
                            <div class="post-card-1 border-radius-10 hover-up" style="font-family: 'Georgia, serif'" >
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                    <a class="img-link" href="{{route('TravelNewsSingle', $news->slug)}}"></a>
                                    <ul class="social-share">
                                        <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                        <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/travel')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                        <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    </ul>
                                </div>
                                <div class="post-content p-30">
                                    <div class="entry-meta meta-0 font-small mb-10">
                                        @foreach($travel as $nav)
                                            <a href="{{$nav->slug}}"><span class="post-cat text-danger">{{$nav->category_name}}</span></a>
                                        @endforeach
                                    </div>
                                    <div class="d-flex post-card-content">
                                        <h5 class="post-title mb-20 font-weight-900">
                                            <a style="font-family: 'Georgia, serif'" href="{{route('TravelNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
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
                <div class="row mt-50">
                    <div class="col-12">
                        <div class="pagination-area mb-30 wow fadeInUp animated">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    {{$travel_last->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
@endsection

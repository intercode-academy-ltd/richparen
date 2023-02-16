@extends('layouts.app')
@section('title') {{ $news_detail->admin->name }} {{ $news_detail->admin->surname }}@endsection
@section('content')
    <div id="fb-root"></div>
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
    <main class="bg-grey pb-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <h3 class="entry-title mb-50 font-weight-700 text-center" style="font-family: 'Times New Roman';">
                    {{$news_detail->news_title}}
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                @php
                                    $current_user = Auth::guard('admin')->user();
                                @endphp
                                <a class="author-avatar" href="{{route('newsAuthor', $news_detail->admin->name)}}">
                                    <img class="img-circle" src="{{ asset('storage/uploads/admin/'. $current_user->image) }}" alt="{{ $current_user->name }}">
                                </a>
                                Авторы
                                <a href="{{route('newsAuthor', $news_detail->admin->name)}}">
                                    <span class="author-name font-weight-bold">{{ $news_detail->admin->name }} {{ $news_detail->admin->surname }}</span>
                                </a>
                            </p>
                            <span class="mr-10">{{ $news_detail->created_at->diffForHumans() }}</span>
                            <span class="has-dot">{{$news_detail->view_count}}</span>
                        </div>
                    </div>
                    <div class="col-md-6 text-right d-none d-md-inline">
                        <ul class="header-social-network d-inline-block list-inline mr-15">
                            <li class="list-inline-item text-muted"><span>Мұнда бөлісіңіз: </span></li>
                            <li class="list-inline-item" data-href="{{url('/post/travel')}}/{{$news_detail->slug}}">
                                <a class="social-icon fb text-xs-center" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/travel')}}/{{$news_detail->slug}}">
                                    <i class="elegant-icon social_facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon tw text-xs-center" target="_blank"  href="https://twitter.com/intent/tweet">
                                    <i class="elegant-icon social_twitter "></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center border-radius-10">
                <img class="border-radius-10" src="{{ asset('storage/uploads/news/'. $news_detail->image) }}" alt="">
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50">
                <div class="excerpt mb-30">
                    <p>{!! $news_detail->news_content !!}</p>
                </div>
                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                    <div class="tags">
                        <span>Тегтер: </span>
                        @foreach($travel as $nav)
                            <a href="{{''}}/{{$nav->slug}}" rel="tag">{{$nav->category_name}}</a>
                        @endforeach
                        <span rel="tag" class="text-danger">{{$news_detail->subcat}}</span>
                    </div>
                </div>
                <div class="single-social-share clearfix wow fadeIn animated">
                    <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                        <span class="hit-count mr-15"><i class="elegant-icon icon_comment_alt mr-5"></i>{{count($news_detail->comments)}} пікірлер</span>
                        <span class="hit-count"><i class="elegant-icon icon_star-half_alt mr-5"></i>Бағалау: 9/10</span>
                    </div>
                    <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                        <li class="list-inline-item text-muted"><span>Мұнда бөлісіңіз: </span></li>
                        <li class="list-inline-item" data-href="{{url('/post/travel')}}/{{$news_detail->slug}}">
                            <a class="social-icon fb text-xs-center" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/travel')}}/{{$news_detail->slug}}">
                                <i class="elegant-icon social_facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-icon tw text-xs-center" target="_blank"  href="https://twitter.com/intent/tweet">
                                <i class="elegant-icon social_twitter "></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--author box-->
                <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn animated">
                    <div class="author-image mb-30">
                        @php
                            $current_user = Auth::guard('admin')->user();
                        @endphp
                        <a href="{{route('newsAuthor', $news_detail->admin->name)}}">
                            <img src="{{ asset('storage/uploads/admin/'. $current_user->image) }}" alt="{{ $current_user->name }}" class="avatar">
                        </a>
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20">
                            <span class="vcard author">
                                <span class="fn">
                                    <a href="{{route('newsAuthor', $news_detail->admin->name)}}" title="Posted by Barbara Cartland" rel="author">{{$news_detail->admin->name }} {{ $news_detail->admin->surname }}</a>
                                </span>
                            </span>
                        </h4>
                        <h5 class="text-muted">Автор туралы</h5>
                        <div class="author-description text-muted">
                            Саясат, қоғамдық пікір және әлеуметтік әділеттілік, идеология.
                        </div>
                        <a href="{{route('newsAuthor', $news_detail->admin->name)}}" class="author-bio-link mb-md-0 mb-3">Барлық жазбаларды көру</a>
                    </div>
                </div>
                <!--related posts-->
                <div class="related-posts">
                    <div class="post-module-3">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Қатысты посттар</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            @foreach($related_news as $news)
                                <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative">
                                                    <a class="img-link" href="{{route('TravelNewsSingle', $news->slug)}}">
                                                        <img class="img-link" src="{{ asset('storage/uploads/news/'. $news->image) }}" alt="">
                                                    </a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li class="list-inline-item" data-href="{{url('/post/travel')}}/{{$news_detail->slug}}"><a class="social-icon fb text-xs-center" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/travel')}}/{{$news_detail->slug}}"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank"  href="https://twitter.com/intent/tweet"><i class="elegant-icon social_twitter "></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <span class="post-cat text-success">{{$news->subcat}}</span>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="{{route('TravelNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $news_detail->created_at->diffForHumans() }}</span>
                                                    <span class="post-by has-dot">{{$news_detail->view_count}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
                @include('includes.comment')
            </article>
        </div>
        <!--container-->
    </main>
    <!-- End Main content -->
@endsection

@section('scripts')
    <script>

    </script>
@endsection

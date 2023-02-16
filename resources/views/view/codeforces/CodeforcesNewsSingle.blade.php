@extends('layouts.appslug')
@section('slug'){{$news_detail->news_title}}@endsection
@section('content')
    <!-- Start Main content -->
    <main class="bg-grey pb-30" style="font-family: 'Georgia, serif'">
        <div class="container single-content">
            <div class="entry-header pt-80 pb-30 mb-20">
                <div class="row">
                    <div class="col-md-6 mb-md-0 mb-sm-3">
                        <figure class="mb-0 mt-lg-0 mt-3 border-radius-5">
                            <img src="{{ asset('storage/uploads/news/'. $news_detail->image) }}" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="post-content">
                            <div class="entry-meta meta-0 mb-15 font-small">
                                <span class="post-cat position-relative text-info">{{$news_detail->subcat}}</span>
                            </div>
                            <h5 class="entry-title mb-30 font-weight-700" style="font-family: 'Georgia, serif'">
                                {{$news_detail->news_title}}
                            </h5>
                            <div class="entry-meta align-items-center meta-2 font-small color-muted">
                                <p class="mb-5">
                                    <a class="author-avatar" href="{{route('newsAuthor', $news_detail->admin->name)}}">
                                        <img class="img-circle" src="{{ asset('storage/uploads/admin/admin.png') }}" alt="">
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
                    </div>
                </div>
            </div>
            <!--end single header-->
            <!--figure-->
            <article class="entry-wraper mb-50">
                <div class="excerpt mb-30">
                    <p>{!! $news_detail->news_content !!}</p>
                </div>
                @switch($news_detail->file_name)
                    @case(null)
                        @break
                    @default
                        <button class="btn btn-success"><a style="color: white;" href="{{url('/download/'.$news_detail->id)}}">Скачать {{$news_detail->file_name}}</a></button>
                @endswitch

                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                    <div class="tags">
                        <span>Тегтер: </span>
                        @foreach($codeforces as $nav)
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
                        <li class="list-inline-item" data-href="{{url('/post/codeforces')}}/{{$news_detail->slug}}">
                            <a class="social-icon fb text-xs-center" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/codeforces')}}/{{$news_detail->slug}}">
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
                <div class="author-bio p-30 mt-50 border-radius-10  wow fadeIn animated"></div>
                <!--related posts-->
                <div class="related-posts">
                    <div class="post-module-3">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Қатысты блогтар</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            @foreach($related_news as $news)
                                <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative">
                                                    <a class="img-link" href="{{route('CodeforcesNewsSingle', $news->slug)}}">
                                                        <img class="img-link" src="{{ asset('storage/uploads/news/'. $news->image) }}" alt="">
                                                    </a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li class="list-inline-item" data-href="{{url('/post/codeforces')}}/{{$news_detail->slug}}"><a class="social-icon fb text-xs-center" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/codeforces')}}/{{$news_detail->slug}}"><i class="elegant-icon social_facebook"></i></a></li>
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
                                                    <a style="font-family: 'Georgia, serif'" href="{{route('CodeforcesNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $news_detail->created_at->diffForHumans() }}</span>
                                                    <span class="post-by has-dot">{{$news_detail->view_count}} Көрілім</span>
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
    <!--site-bottom-->
    <div class="site-bottom pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Game Dev</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
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
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Java</h5>
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">C++</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                @foreach($cpluscplus_Last_index as $news)
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
@section('scripts')
    <script>

    </script>
@endsection

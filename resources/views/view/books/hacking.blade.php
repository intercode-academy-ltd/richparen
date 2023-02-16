@extends('layouts.app')
@section('title') {{'Кітап | Хакинг  '}}@endsection
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
    <!-- Start Main content -->
    <main>
        <!--archive header-->
        <div class="archive-header pt-50">
            <div class="container">
                <h2 class="font-weight-900">Хакинг кітаптары</h2>
                <div class="breadcrumb">
                    <a href="{{asset('')}}" rel="nofollow">Басты бет</a>
                    <span></span> Хакинг кітаптары
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        </div>
        <div class="pb-50">
            <div class="container" style="font-family: 'Georgia, serif'">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="post-module-3">
                            <div class="loop-list loop-list-style-1">
                                @foreach($books_all_hacking as $news)
                                    <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                        <div class="row mb-40 list-style-2">
                                            <div class="col-md-4">
                                                <div class="post-thumb position-relative border-radius-5">
                                                    <div class="img-hover-slide border-radius-5 position-relative">
                                                        <a class="img-link" href="{{route('BooksNewsSingle', $news->slug)}}">
                                                            <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <ul class="social-share">
                                                        <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                        <li><a class="fb" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/books')}}/{{$news->slug}}" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                        <li><a class="tw"  href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8 align-self-center">
                                                <div class="post-content">
                                                    <div class="entry-meta meta-0 font-small mb-10">
                                                        @foreach($books as $nav)
                                                            <a href="{{""}}/{{$nav->slug}}"><span class="post-cat text-danger">{{$nav->category_name}}</span></a>
                                                        @endforeach
                                                    </div>
                                                    <h5 class="post-title font-weight-900 mb-20">
                                                        <a style="font-family: 'Georgia, serif'" href="{{route('BooksNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
                                                    </h5>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>
                                                        <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>
{{--                                                        <a href="{{url('/download/'.$news->id)}}">{{$news->file_name}}</a>--}}
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
                                    {{ $books_all_hacking->links() }}
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

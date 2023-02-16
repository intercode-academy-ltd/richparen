@extends('layouts.app')
@section('title') {{'ACMP'}}@endsection
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
    <!--site-bottom-->
    <div class="site-bottom pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">ACMP Решение</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                @foreach($all_post_acmp as $news)
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class=" media-body">
                                            <h4 class="post-title mb-15  font-medium">
                                                <span> {{ $loop->index + 1 }}) &nbsp;&nbsp;<a style="text-decoration: underline;" href="{{route('ACMPNewsSingle', $news->slug)}}">{{$news->news_title}} </a></span>
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
        </div>
        <!--container-->
    </div>
    <!--end site-bottom-->
@endsection

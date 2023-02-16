@extends('layouts.app')
@section('title') {{' Java курсы '}}@endsection
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
                <h2 class="font-weight-900">Java Сабақ</h2>
                <div class="breadcrumb">
                    <a href="{{asset('')}}" rel="nofollow">Басты бет</a>
                    <span></span> java сабақ
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
                                    @foreach($last_all_lesson as $news)
                                        <li class="mb-30">
                                            <div class="d-flex hover-up-2 transition-normal">
                                                <div class=" media-body">
                                                    <h4 class="post-title mb-15  font-medium">
                                                        <span> {{ $loop->index + 1 }}) &nbsp;&nbsp;<a style="text-decoration: underline;" href="{{route('JavaNewsSingle', $news->slug)}}">{{$news->news_title}} </a></span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                            </div>
                        </div>
                        <div class="pagination-area mb-30 wow fadeInUp animated">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    {{ $last_all_lesson->links() }}
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



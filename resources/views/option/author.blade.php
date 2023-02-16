@extends('layouts.app')
@section('title') {{'Автор'}}@endsection
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
    <main class="bg-grey pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--author box-->
                    @php
                        $current_user = Auth::guard('admin')->user();
                    @endphp
                    <div class="author-bio mb-50 bg-white p-30 border-radius-10">
                        <div class="author-image mb-30">
                            <a href="#">
                                <img src="{{ asset('storage/uploads/admin/'.$current_user->image) }}" alt="" class="avatar">
                            </a>
                        </div>
                        <div class="author-info">
                            <h3 class="font-weight-900">
                                <span class="vcard author">
                                    <span class="fn">
                                        <a href="#" title="Posts by Steven" rel="author">{{$current_user->name}} {{$current_user->surname}}</a>
                                    </span>
                                </span>
                            </h3>
                            <h5 class="text-muted">Автор туралы</h5>
                            <div class="author-description text-muted">
                                Серікбай Думан  2022 жылдан бері Richparen сайтының қалаушысы.
                                IT бағдарламалау, блогер, бизнес мотиватор, саясаткер, қоғамдық пікір және әлеуметтік әділеттілік жақтаушысы.
                            </div>
                            <strong class="text-muted">Follow: </strong>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <li class="list-inline-item"><a class="fb" href="https://www.facebook.com/richparen" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="list-inline-item"><a class="tw" href="https://twitter.com/alcosigara" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li class="list-inline-item"><a class="pt" href="https://www.instagram.com/richparen/" target="_blank" title="Pin it"><i class="elegant-icon social_instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-3">
                        <div class="loop-list loop-list-style-1">
                            @foreach($all_post_author as $news)
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative">
                                                <a class="img-link" href="{{route('AuthorNewsSingle', $news->slug)}}">
                                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">
                                                </a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/travel')}}/{{$news->slug}}" title="Share on Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="https://twitter.com/intent/tweet" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <span class="post-cat text-primary">{{$news->subcat}}</span>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a  href="{{route('AuthorNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>
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
                                {{$all_post_author->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
@endsection

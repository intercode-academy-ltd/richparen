<aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
    <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
    <div class="sidebar-inner">
        <!--Categories-->
        <div class="sidebar-widget widget_categories mb-50 mt-30">
            <div class="widget-header-2 position-relative">
                <h5 class="mt-5 mb-15">Категория</h5>
            </div>
            <div class="widget_nav_menu">
                <ul>
                    @foreach($navigator as $nav)
                    <li class="cat-item cat-item-2">
                        <a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--Latest-->
        <div class="sidebar-widget widget-latest-posts mb-50">
            <div class="widget-header-2 position-relative mb-30">
                <h5 class="mt-5 mb-30">Өткізіп алмаңыз</h5>
            </div>
            <div class="post-block-list post-module-1 post-module-5">
                <ul class="list-post">
{{--                    @foreach($lifestyle_last as $news)--}}
{{--                    <li class="mb-30">--}}
{{--                        <div class="d-flex hover-up-2 transition-normal">--}}
{{--                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                <a class="color-white" href="{{route('LifestyleNewsSingle', $news->slug)}}">--}}
{{--                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="post-content media-body">--}}
{{--                                <h6 class="post-title mb-15 text-limit-2-row font-medium">--}}
{{--                                    <a href="{{route('LifestyleNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>--}}
{{--                                </h6>--}}
{{--                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">--}}
{{--                                    <span class="post-by">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>--}}
{{--                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    @endforeach--}}
{{--                    @foreach($blog_last as $news)--}}
{{--                    <li class="mb-30">--}}
{{--                        <div class="d-flex hover-up-2 transition-normal">--}}
{{--                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                <a class="color-white" href="single.html">--}}
{{--                                    <img src="assets/imgs/news/thumb-2.jpg" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="post-content media-body">--}}
{{--                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Why Don’t More Black American Women Travel Solo?</a></h6>--}}
{{--                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">--}}
{{--                                    <span class="post-on">12 August</span>--}}
{{--                                    <span class="post-by has-dot">23k views</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    @endforeach--}}
{{--                    @foreach($lifestyle_last as $news)--}}
{{--                    <li class="mb-30">--}}
{{--                        <div class="d-flex hover-up-2 transition-normal">--}}
{{--                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                <a class="color-white"  href="{{route('LifestyleNewsSingle', $news->slug)}}">--}}
{{--                                    <img src="{{ asset('storage/uploads/news/'.$news->image) }}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="post-content media-body">--}}
{{--                                <h6 class="post-title mb-15 text-limit-2-row font-medium">--}}
{{--                                    <a href="{{route('LifestyleNewsSingle', $news->slug)}}">{{ $news->news_title }}</a>--}}
{{--                                </h6>--}}
{{--                                <div class="entry-meta meta-1 float-left font-x-small">--}}
{{--                                    <span class="post-on">{{ $date->day }} {{ $date->translatedFormat('F')}} {{ $date->year }}</span>--}}
{{--                                    <span class="post-by has-dot">{{$news->view_count}} Көрілім</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    @endforeach--}}
                </ul>
            </div>
        </div>
        <!--Ads-->
        <div class="sidebar-widget widget-ads">
            <div class="widget-header-2 position-relative mb-30">
                <h5 class="mt-5 mb-30">Жарнамалық баннер</h5>
            </div>
            <a href="#" target="_blank">
                <img class="advertise-img border-radius-5" src="{{'assets/imgs/ads/ads-1.jpg'}}" alt="">
            </a>
        </div>
    </div>
</aside>

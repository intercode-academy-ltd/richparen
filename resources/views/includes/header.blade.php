<header class="main-header header-style-1 font-heading">
    <div class="header-top">
        <div class="container">
            <div class="row pt-20 pb-20">
                <div class="col-md-3 col-xs-6">
                    <a href="{{asset('')}}">
                        @foreach($header_logo as $theme)
                        <img class="logo" style="width: 70%;" src="{{ asset('storage/uploads/theme/'.$theme->header_logo) }}" alt="">
                        @endforeach
                    </a>
                </div>
                <div class="col-md-9 col-xs-6 text-right header-top-right ">
                    <ul class="list-inline nav-topbar d-none d-md-inline">
                        <li class="list-inline-item menu-item-has-children"><a href="#">KZ</a>
                            <ul class="sub-menu font-small">
                                <li ><a href="#">KZ</a></li>
                                <li ><a href="#">RU</a></li>
                                <li ><a href="#">EN</a></li>
                                <li ><a href="#">Arabic</a></li>
                            </ul>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="elegant-icon icon_document_alt mr-5"></i>Document</a>
                        </li>
                    </ul>
                    <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                    <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i class="elegant-icon icon_search mr-5"></i>Іздеу.....</span></button>
                    <button class="btn btn-radius bg-primary text-white ml-15 font-small box-shadow"><a style="color: white;" target="_blank" href="https://t.me/richparenbot">Заказ</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="header-sticky">
        <div class="container align-self-center position-relative">
            <div class="mobile_menu d-lg-none d-block"></div>
            <div class="main-nav d-none d-lg-block float-left">
                <nav>
                    <!--Desktop menu-->
                    <ul class="main-menu d-none d-lg-inline font-small">
                        <li><a href="{{asset('')}}"> <i class="elegant-icon icon_house_alt mr-5"></i>Басты бет</a></li>
                        @foreach($navigator as $nav)
                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                        @endforeach
                        <li class="current-item has-mega-menu">
                            <a href="#">Mega Menu</a>
                            <ul class="mega-menu">
                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                    <a class="menu-title" href="#">IT Solution</a>
                                    <ul>
                                        @foreach($codeforces as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                        @foreach($acmp as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                        @foreach($Algorithm as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                        @foreach($Informatics as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                    <a class="menu-title" href="#">Programming</a>
                                    <ul>
                                        @foreach($java as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                        @foreach($cplusplus as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                        @foreach($database as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                        @foreach($gamedev as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                    <a class="menu-title" href="#">Language &amp; Tech</a>
                                    <ul>
                                        @foreach($englishlanguage as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                        @foreach($russian as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                        @foreach($math as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                    <a class="menu-title" href="#">EXTRA</a>
                                    <ul>
                                        <li><a href="https://github.com/intercode-academy-ltd" target="_blank">GitHub</a></li>
                                        <li><a href="https://leetcode.com/intercode-academy-ltd/" target="_blank">LeetCode</a></li>
                                        @foreach($hacking as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                        @foreach($books as $nav)
                                            <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--Mobile menu-->
                    <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                        <li>
                            <a href="{{asset('')}}">Басты бет</a>
                        </li>
                        <li class="menu-item-has-children"><a href="#">IT Solution</a>
                            <ul class="sub-menu font-small">
                                @foreach($codeforces as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                                @foreach($acmp as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                                @foreach($Algorithm as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                                @foreach($Informatics as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Programming</a>
                            <ul class="sub-menu font-small">
                                @foreach($java as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                                @foreach($cplusplus as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                                @foreach($database as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                                @foreach($gamedev as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Language &amp; Tech</a>
                            <ul class="sub-menu font-small">
                                @foreach($englishlanguage as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                                @foreach($russian as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                                @foreach($math as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">EXTRA</a>
                            <ul class="sub-menu font-small">
                                <li><a href="https://github.com/intercode-academy-ltd" target="_blank">GitHub</a></li>
                                <li><a href="https://leetcode.com/intercode-academy-ltd/" target="_blank">LeetCode</a></li>
                                @foreach($hacking as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                                @foreach($books as $nav)
                                    <li><a href="{{""}}/{{$nav->slug}}">{{$nav->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="float-right header-tools text-muted font-small">
                <ul class="header-social-network d-inline-block list-inline mr-15">
                    <li class="list-inline-item">
                        <a class="social-icon fb text-xs-center" target="_blank" href="https://www.facebook.com/groups/richparen">
                            <i class="elegant-icon social_facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-icon fb text-xs-center" target="_blank" href="https://t.me/richparen">
                            <i class="elegant-icon icon_question_alt"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-icon ins text-xs-center" target="_blank" href="https://www.instagram.com/richparen/">
                            <i class="elegant-icon social_instagram "></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-icon tw text-xs-center" target="_blank" href="https://twitter.com/richparencom">
                            <i class="elegant-icon social_twitter "></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-icon pt text-xs-center" target="_blank" href="https://www.youtube.com/channel/UCK7DzwoarjMlcfIo_37uDqw"><i class="elegant-icon social_youtube "></i></a></li>
                </ul>
                <div class="off-canvas-toggle-cover d-inline-block">
                    <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>

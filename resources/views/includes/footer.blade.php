<footer class="pt-50 pb-20 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="sidebar-widget wow fadeInUp animated mb-30">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Мен туралы</h5>
                    </div>
                    <div class="textwidget">
                        <p>
                            Қазақстандық интернет-журналист және бағдарламашы,
                            WikiBlogger сайтының негізін қалаушы.
                        </p>
                        <p><strong class="color-black">Мекенжай</strong><br>
                            Кулжинская 16/20<br>
                            Алматы,  10001</p>
                        <p><strong class="color-black">Маған жазыл</strong><br>
                        <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                            <li class="list-inline-item"><a class="fb" href="https://www.facebook.com/richparen" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="tw" href="https://twitter.com/richparencom" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                            <li class="list-inline-item"><a class="pt" href="https://www.instagram.com/richparen/" target="_blank" title="Pin it"><i class="elegant-icon social_instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Жылдам сілтеме</h5>
                    </div>
                    <ul class="font-small">
                        <li class="cat-item cat-item-2"><a href="{{asset('option/about')}}">Обо мне</a></li>
{{--                        <li class="cat-item cat-item-4"><a href="#">Help & Support</a></li>--}}
{{--                        <li class="cat-item cat-item-6"><a href="#">Refund Policy</a></li>--}}
                        <li class="cat-item cat-item-7"><a href="{{asset('option/contact')}}">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Санаттар</h5>
                    </div>
                    <div class="tagcloud mt-50">
                        @foreach($business as $nav)<a class="tag-cloud-link" href="{{""}}/{{$nav->slug}}">{{$nav->category_name}} </a>@endforeach
                            @foreach($currency as $nav)<a class="tag-cloud-link" href="{{""}}/{{$nav->slug}}">{{$nav->category_name}} </a>@endforeach
                            @foreach($lifestyle as $nav)<a class="tag-cloud-link" href="{{""}}/{{$nav->slug}}">{{$nav->category_name}} </a>@endforeach
                            @foreach($blog as $nav)<a class="tag-cloud-link" href="{{""}}/{{$nav->slug}}">{{$nav->category_name}} </a>@endforeach
                            @foreach($travel as $nav)<a class="tag-cloud-link" href="{{""}}/{{$nav->slug}}">{{$nav->category_name}} </a>@endforeach
                            @foreach($success as $nav)<a class="tag-cloud-link" href="{{""}}/{{$nav->slug}}">{{$nav->category_name}} </a>@endforeach
                            @foreach($forbes as $nav)<a class="tag-cloud-link" href="{{""}}/{{$nav->slug}}">{{$nav->category_name}} </a>@endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Newsletter</h5>
                    </div>
                    <div class="newsletter">
                        <p class="font-medium">Біздің ақпараттық блогка жазылыңыз және біздің жаңа блогтарымызды бірінші болып алыңыз.</p>
                        <form class="input-group form-subcriber mt-30 d-flex">
                            <input type="email" class="form-control bg-white font-small" placeholder="Email поштаңызды енгізіңіз">
                            <button class="btn bg-primary text-white" type="submit">Жазылу</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

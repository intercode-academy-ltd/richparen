
<div class="main-search-form">
    <div class="container">
        <div class=" pt-50 pb-50 ">
            <div class="row mb-20">
                <div class="col-12 align-self-center main-search-form-cover m-auto">
                    <p class="text-center"><span class="search-text-bg">Іздеу</span></p>

                    <form action="{{url('search')}}" method="GET" role="search" class="search-header">
                        <div class="input-group w-100">
                            <input type="search" name="search" value="{{Request::get('search')}}" placeholder="Әңгімелерді, орындарды және адамдарды іздеңіз" class="form-control">
                            <div class="input-group-append">
                                <button class="btn btn-search bg-white" type="submit">
                                    <i class="elegant-icon icon_search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="row mt-80 text-center">
                <div class="col-12 font-small suggested-area">
                    <h5 class="suggested font-heading mb-20 text-muted"> <strong>Ұсынылған кілт сөздер:</strong></h5>
                    <ul class="list-inline d-inline-block">
                        @foreach($navigator as $nav)
                        <li class="list-inline-item"><a href="{{$nav->slug}}">{{$nav->category_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



@extends('layouts.app')
@section('title') {{'Біз туралы'}}@endsection
@section('content')
    <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50 text-center">
                <h1 class="entry-title mb-20 font-weight-900 ">
                    Біз туралы
                </h1>
                <p class="text-muted"><span class="typewrite d-inline" data-period="2000" data-type='[ " Travel Blogger. ", "Content Writter. ", "Бизнес мотиватор " ]'></span></p>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center border-radius-10">
                <img class="border-radius-10" src="{{asset('assets/imgs/theme/logo.png')}}" alt="post-title">
            </figure>
            <!--figure-->
            <article class="entry-wraper">
                <p class="font-large">
                    RichParen  мұнда IT компания туралы барлық ақпараттар берілген.
                </p>
                <hr class="wp-block-separator is-style-wide">
                <p><span class="mr-5">
                        <ion-icon name="location-outline" role="img" class="md hydrated" aria-label="location outline"></ion-icon>
                    </span><strong>Мекенжай</strong>: Алматы 0000005,  Қазақстан</p>
                <p><span class="mr-5">
                        <ion-icon name="home-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
                    </span><strong>Біздің веб-сайт</strong>: <a href="https://richparen.com">https://richparen.com</a></p>
                <p><span class="mr-5">
                        <ion-icon name="planet-outline" role="img" class="md hydrated" aria-label="planet outline"></ion-icon>
                </span><strong>Support орталығы</strong>: <a href="mailto: support@richparen.com">support@richparen.com</a></p>
            </article>
        </div>
        <!--container-->
    </main>
    <!-- End Main content -->
@endsection

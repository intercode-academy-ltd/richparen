@extends('layouts.app')
@section('title') {{'Контакты'}}@endsection
@section('content')
    <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white">
            <div class="container entry-header-content">
                <h1 class="entry-title mb-50 font-weight-900">
                    Байланысу
                </h1>
            </div>
        </div>
        <div class="container single-content">
            <div class="entry-wraper mt-50">
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

                <h3 class="mt-30">Жарнама туралы</h3>
                <hr class="wp-block-separator is-style-wide">
                <p>Бізбен тікелей байланысыңыз
                    <a href="mailto: advertisement@richparen.com" class="__cf_email__" data-cfemail="c9a8adba89bca5bdbba8a7acbebae7aaa6a4e7">
                        advertisement@richparen.com</a> Үлкен немесе бірегей науқандар үшін электрондық поштаны жіберіңіз
                    <a href="mailto: advertisement@richparen.com" class="__cf_email__" data-cfemail="88fbe9e4edc8fde4fcfae9e6edfffba6ebe7e5">
                        advertisement@richparen.com
                    </a>
                    ұсыныс сұраулары және баға туралы қосымша ақпарат үшін.
                </p>

                <h1 class="mt-30">Байланысу</h1>
                <hr class="wp-block-separator is-style-wide">

                <form class="form-contact comment_form" action="#" id="commentForm">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Аты">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="website" id="website" type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="button button-contactForm">Хат жіберу</button>
                    </div>
                </form>
            </div>
        </div>
        <!--container-->
    </main>
    <!-- End Main content -->
@endsection

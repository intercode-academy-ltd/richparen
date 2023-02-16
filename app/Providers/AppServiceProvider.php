<?php

namespace App\Providers;

use App\Http\Controllers\admin\ThemeController;
use App\Models\Category;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Menu
        $navigator = Category::where('parent_id',0)->where('status', 1)->take(7)->get();
        view()->share('navigator', $navigator);

        $travel = Category::where('slug', 'LIKE','travel')->get();
        view()->share('travel', $travel);

        $success = Category::where('slug', 'LIKE','success')->get();
        view()->share('success', $success);

        $forbes = Category::where('slug', 'LIKE','forbes')->get();
        view()->share('forbes', $forbes);

        $lifestyle = Category::where('slug', 'LIKE','lifestyle')->get();
        view()->share('lifestyle', $lifestyle);

        $blog = Category::where('slug', 'LIKE','blog')->get();
        view()->share('blog', $blog);

        $currency = Category::where('slug', 'LIKE','сryptocurrency')->get();
        view()->share('currency', $currency);

        $business = Category::where('slug', 'LIKE','business')->get();
        view()->share('business', $business);

        $codeforces = Category::where('slug', 'LIKE','codeforces')->get();
        view()->share('codeforces', $codeforces);

        $acmp = Category::where('slug', 'LIKE','acmp')->get();
        view()->share('acmp', $acmp);

        $Algorithm = Category::where('slug', 'LIKE','algorithm')->get();
        view()->share('Algorithm', $Algorithm);

        $Informatics = Category::where('slug', 'LIKE','informatics')->get();
        view()->share('Informatics', $Informatics);

        $java = Category::where('slug', 'LIKE','java')->get();
        view()->share('java', $java);

        $cplusplus = Category::where('slug', 'LIKE','cplusplus')->get();
        view()->share('cplusplus', $cplusplus);

        $database = Category::where('slug', 'LIKE','database')->get();
        view()->share('database', $database);

        $gamedev = Category::where('slug', 'LIKE','gamedev')->get();
        view()->share('gamedev', $gamedev);

        $englishlanguage = Category::where('slug', 'LIKE','english-language')->get();
        view()->share('englishlanguage', $englishlanguage);

        $russian = Category::where('slug', 'LIKE','russian-language')->get();
        view()->share('russian', $russian);

        $math = Category::where('slug', 'LIKE','math')->get();
        view()->share('math', $math);

        $hacking = Category::where('slug', 'LIKE','hacking')->get();
        view()->share('hacking', $hacking);

        $books = Category::where('slug', 'LIKE','books')->get();
        view()->share('books', $books);

        $header_logo = Theme::where('header_logo', 'LIKE', 'logo.png')->get();
        view()->share('header_logo', $header_logo);

        $main_image = Theme::where('main_image', 'LIKE', 'featuredd.png')->get();
        view()->share('main_image', $main_image);

        Paginator::defaultView('vendor.pagination.bootstrap-4');
        Carbon::setLocale('kk-KZ');
    }
}

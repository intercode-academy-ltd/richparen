<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\NewsLetterSubscribersController;
use App\Http\Controllers\admin\SocialController;
use App\Http\Controllers\admin\ThemeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LiveSearchController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\option\AuthorController;
use App\Http\Controllers\option\SidebarController;
use App\Http\Controllers\pages\acmp\ACMPController;
use App\Http\Controllers\pages\algorith\AlgorithmController;
use App\Http\Controllers\pages\blog\BlogController;
use App\Http\Controllers\pages\books\BooksController;
use App\Http\Controllers\pages\business\BusinessController;
use App\Http\Controllers\pages\codeforces\CodeforcesController;
use App\Http\Controllers\pages\cplusplus\CplusplusController;
use App\Http\Controllers\pages\Cryptocurrency\CryptocurrencyController;
use App\Http\Controllers\pages\database\DatabaseController;
use App\Http\Controllers\pages\englishlanguage\EnglishLanguageController;
use App\Http\Controllers\pages\forbes\ForbesController;
use App\Http\Controllers\pages\gamedev\GamedevController;
use App\Http\Controllers\pages\hacking\HackingController;
use App\Http\Controllers\pages\informatics\InformaticsController;
use App\Http\Controllers\pages\java\JavaController;
use App\Http\Controllers\pages\lifestyle\LifestyleController;
use App\Http\Controllers\pages\math\MathController;
use App\Http\Controllers\pages\option\AboutController;
use App\Http\Controllers\pages\option\ContactController;
use App\Http\Controllers\pages\russianlanguage\RussianLanguageController;
use App\Http\Controllers\pages\success\SuccessController;
use App\Http\Controllers\pages\travel\TravelController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Auth::routes();

//Admin
Route::prefix('/admin')->group(function(){
    //Admin login
    Route::match(['get', 'post'], '/login', [AdminController::class, 'adminLogin'])->name('adminLogin');
    Route::group(['middleware' => 'admin'], function(){
        Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
        // Admin Profile
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        // Admin Profile Update
        Route::post('/profile/update/{id}', [AdminController::class, 'profileUpdate'])->name('profileUpdate');
        // Change Password
        Route::get('/profile/change_password',[AdminController::class, 'changePassword'])->name('changePassword');
        // Check User Password
        Route::post('/profile/check-password',[AdminController::class, 'checkUserPassword'])->name('checkUserPassword');
        // Update Admin Password
        Route::post('/profile/update_password/{id}',[AdminController::class, 'upatePassword'])->name('upatePassword');

        // Category
        Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/add', [CategoryController::class, 'add'])->name('category.add');
        Route::post('/category/store',[CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

        // News
        Route::get('/news/index', [NewsController::class, 'index'])->name('news.index');
        Route::get('/news/add', [NewsController::class, 'add'])->name('news.add');
        Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
        Route::post('/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::get('/delete-news/{id}',[NewsController::class, 'delete'])->name('news.delete');

        // Theme Settings
        Route::get('/theme', [ThemeController::class, 'theme'])->name('theme');
        Route::post('/theme/update/{id}',[ThemeController::class, 'themeUpdate'])->name('themeUpdate');

        //Social Setting
        Route::get('/social/setting', [SocialController::class, 'social'])->name('social');
        Route::post('/social/setting/{id}', [SocialController::class, 'socialUpdate'])->name('socialUpdate');

        //NewsLetter
        Route::get('/newsletter-subscribers', [NewsLetterSubscribersController::class, 'newsLetterSubscribers'])->name('newsletter');
        Route::get('/newsletter-subscribers/{id}', [NewsLetterSubscribersController::class, 'UpdatenewsLetterSubscribers'])->name('newsletter.edit');
    });
    Route::get('/admin/logout',[AdminController::class, 'adminLogout'])->name('adminLogout');
});

//NewsLetter
Route::post('/add-subscriber-email',[NewsLetterController::class, 'addSubscriber']);

//Comment
Route::post('{news}/comment/store', [CommentController::class, 'store'])->name('comment.store');

//Search
Route::get('search',[LiveSearchController::class,'searchContent'])->name('search');

//Option
Route::get('/option/contact',[ContactController::class, 'index'])->name('contact');
Route::get('/option/about/',[AboutController::class, 'index'])->name('about');

//Author
Route::get('/author/{name}',[AuthorController::class, 'newsAuthor'])->name('newsAuthor');
Route::get('/author/{name}/slug',[AuthorController::class, 'AuthorNewsSingle'])->name('AuthorNewsSingle');

//Admin forgot password
Route::get('/admin/forget-password', [AdminController::class, 'forgetPassword'])->name('forgetPassword');

//Welcome
Route::get('/',[WelcomeController::class, 'index'])->name('index');
Route::get('/post/{slug}',[WelcomeController::class, 'WelcomeNewsSingle'])->name('WelcomeNewsSingle');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/post/{slug}', [HomeController::class, 'WelcomeNewsSingle'])->name('WelcomeNewsSingle');

//Travel
Route::get('/travel', [TravelController::class, 'index'])->name('travel');
Route::get('/post/travel/{slug}',[TravelController::class, 'TravelNewsSingle'])->name('TravelNewsSingle');

//Lifestyle
Route::get('/lifestyle', [LifestyleController::class, 'index'])->name('lifestyle');
Route::get('/post/lifestyle/{slug}', [LifestyleController::class, 'LifestyleNewsSingle'])->name('LifestyleNewsSingle');

//Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/blog/{slug}',[BlogController::class, 'BlogNewsSingle'])->name('BlogNewsSingle');

//CryptoCurrency
Route::get('/cryptocurrency', [CryptocurrencyController::class, 'index'])->name('cryptocurrency');
Route::get('/post/cryptocurrency/{slug}',[CryptocurrencyController::class, 'CryptoCurrencyNewsSingle'])->name('CryptoCurrencyNewsSingle');

//Business
Route::get('/business', [BusinessController::class, 'index'])->name('business');
Route::get('/post/business/{slug}',[BusinessController::class, 'BusinessNewsSingle'])->name('BusinessNewsSingle');

//Success
Route::get('/success', [SuccessController::class, 'index'])->name('success');
Route::get('/post/success/{slug}',[SuccessController::class, 'SuccessNewsSingle'])->name('SuccessNewsSingle');

//Forbes
Route::get('/forbes', [ForbesController::class, 'index'])->name('forbes');
Route::get('/post/forbes/{slug}',[ForbesController::class, 'ForbesNewsSingle'])->name('ForbesNewsSingle');

//Codeforces
Route::get('/codeforces', [CodeforcesController::class, 'index'])->name('codeforces');
Route::get('download/{id}',[CodeforcesController::class, 'download'])->name('download');
Route::get('/post/codeforces/{slug}',[CodeforcesController::class, 'CodeforcesNewsSingle'])->name('CodeforcesNewsSingle');

//acmp
Route::get('/acmp', [ACMPController::class, 'index'])->name('acmp');
Route::get('download/{id}',[ACMPController::class, 'download'])->name('download');
Route::get('/post/acmp/{slug}',[ACMPController::class, 'ACMPNewsSingle'])->name('ACMPNewsSingle');

//algorithm
Route::get('/algorithm', [AlgorithmController::class, 'index'])->name('algorithm');
Route::get('download/{id}',[AlgorithmController::class, 'download'])->name('download');
Route::get('/post/algorithm/{slug}',[AlgorithmController::class, 'AlgorithmNewsSingle'])->name('AlgorithmNewsSingle');

//informatics
Route::get('/informatics', [InformaticsController::class, 'index'])->name('informatics');
Route::get('download/{id}',[InformaticsController::class, 'download'])->name('download');
Route::get('/post/informatics/{slug}',[InformaticsController::class, 'InformaticsNewsSingle'])->name('InformaticsNewsSingle');

//java
Route::get('/java', [JavaController::class, 'index'])->name('java');
Route::get('download/{id}',[JavaController::class, 'download'])->name('download');
Route::get('/post/java/{slug}',[JavaController::class, 'JavaNewsSingle'])->name('JavaNewsSingle');
Route::get('/java/news', [JavaController::class, 'post'])->name('java.post');
Route::get('/java/lesson', [JavaController::class, 'lesson'])->name('java.lesson');
Route::get('/java/project', [JavaController::class, 'project'])->name('java.project');

//cplusplus
Route::get('/cplusplus', [CplusplusController::class, 'index'])->name('cplusplus');
Route::get('download/{id}',[CplusplusController::class, 'download'])->name('download');
Route::get('/post/cplusplus/{slug}',[CplusplusController::class, 'CplusplusNewsSingle'])->name('CplusplusNewsSingle');
Route::get('/cplusplus/news', [CplusplusController::class, 'post'])->name('cplusplus.post');
Route::get('/cplusplus/lesson', [CplusplusController::class, 'lesson'])->name('cplusplus.lesson');
Route::get('/cplusplus/project', [CplusplusController::class, 'project'])->name('cplusplus.project');

//database
Route::get('/database', [DatabaseController::class, 'index'])->name('database');
Route::get('download/{id}',[DatabaseController::class, 'download'])->name('download');
Route::get('/post/database/{slug}',[DatabaseController::class, 'DatabaseNewsSingle'])->name('DatabaseNewsSingle');
Route::get('/database/news', [DatabaseController::class, 'post'])->name('database.post');
Route::get('/database/lesson', [DatabaseController::class, 'lesson'])->name('database.lesson');
Route::get('/database/project', [DatabaseController::class, 'project'])->name('database.project');

//gamedev
Route::get('/gamedev', [GamedevController::class, 'index'])->name('gamedev');
Route::get('download/{id}',[GamedevController::class, 'download'])->name('download');
Route::get('/post/gamedev/{slug}',[GamedevController::class, 'GameDevNewsSingle'])->name('GameDevNewsSingle');
Route::get('/gamedev/news', [GamedevController::class, 'post'])->name('gamedev.post');
Route::get('/gamedev/lesson', [GamedevController::class, 'lesson'])->name('gamedev.lesson');
Route::get('/gamedev/project', [GamedevController::class, 'project'])->name('gamedev.project');

//english-language
Route::get('/english-language', [EnglishLanguageController::class, 'index'])->name('englishlanguage');
Route::get('/post/english-language/{slug}',[EnglishLanguageController::class, 'EnglishLanguageNewsSingle'])->name('EnglishLanguageNewsSingle');

//russian-language
Route::get('/russian-language', [RussianLanguageController::class, 'index'])->name('russianlanguage');
Route::get('/post/russian-language/{slug}',[RussianLanguageController::class, 'RussianLanguageNewsSingle'])->name('RussianLanguageNewsSingle');

//math
Route::get('/math', [MathController::class, 'index'])->name('math');
Route::get('/post/math/{slug}',[MathController::class, 'MathNewsSingle'])->name('MathNewsSingle');

//hacking
Route::get('/hacking', [HackingController::class, 'index'])->name('hacking');
Route::get('download/{id}',[HackingController::class, 'download'])->name('download');
Route::get('/post/hacking/{slug}',[HackingController::class, 'HackingNewsSingle'])->name('HackingNewsSingle');

//Books
Route::get('/books', [BooksController::class, 'index'])->name('books');
Route::get('/post/books/{slug}',[BooksController::class, 'BooksNewsSingle'])->name('BooksNewsSingle');
Route::get('/books/english', [BooksController::class, 'english'])->name('books.english');
Route::get('/books/russian', [BooksController::class, 'russian'])->name('books.russian');
Route::get('/books/math', [BooksController::class, 'math'])->name('books.math');
Route::get('/books/currency', [BooksController::class, 'currency'])->name('books.currency');
Route::get('/books/java', [BooksController::class, 'java'])->name('books.java');
Route::get('/books/cplusplus', [BooksController::class, 'cplusplus'])->name('books.cplusplus');
Route::get('/books/database', [BooksController::class, 'database'])->name('books.database');
Route::get('/books/informatics', [BooksController::class, 'informatics'])->name('books.informatics');
Route::get('/books/algorithm', [BooksController::class, 'algorithm'])->name('books.algorithm');
Route::get('/books/hacking', [BooksController::class, 'hacking'])->name('books.hacking');
Route::get('/books/gamedev', [BooksController::class, 'gamedev'])->name('books.gamedev');
Route::get('/books/business', [BooksController::class, 'business'])->name('books.business');
Route::get('/books/success', [BooksController::class, 'success'])->name('books.success');
Route::get('download/{id}',[BooksController::class, 'download'])->name('download');


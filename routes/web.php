<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ChannelsController;
use App\Http\Controllers\AuthorsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site.pages.home');
});

Route::get('/articles', function () {
    return view('site.pages.articles');
});

Route::get('/videos', function () {
    return view('site.pages.videos');
});

Route::get('/podcasts', function () {
    return view('site.pages.podcasts');
});

Route::post('/latest-articles-per-num', [ArticlesController::class, "latest"])->name('articles.latest');
Route::post('/channel-articles', [ArticlesController::class, "channelArticles"])->name('channel.articles');
Route::post('/author-articles', [ArticlesController::class, "authorArticles"])->name('author.articles');
Route::get('/post/{id}', [ArticlesController::class, "postIndex"])->name('post.show');
Route::get('/channel/{id}', [ChannelsController::class, "channelIndex"])->name('channel.show');
Route::get('/author/{id}', [AuthorsController::class, "authorIndex"])->name('author.show');

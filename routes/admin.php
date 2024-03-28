<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\DonationsByRepresentativeController;
use App\Http\Controllers\VolunteeringDestinationsController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\VolunteersController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ChannelsController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\Admin\SettingsController;

Route::middleware(['admin_guest'])->group(function () {
    Route::get('/login', [RegisterController::class, 'getLoginIndex']);
    Route::post('/login', [RegisterController::class, 'login'])->name('admin.login');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/', [ArticlesController::class, "index"])->name('admin.home');
    Route::get("/add-image", function() {
        return view("admin.dashboard.imageCropper");
    })->name("add.imagetab");
    Route::get('/update-about', function() {
        return view('admin.dashboard.update_about');
    })->name('update.about');
    Route::get('/update-contact', function() {
        return view('admin.dashboard.update_contact');
    })->name('update.contact');
    Route::post('/add-img-slider', [AdminHomeController::class, 'addImageToSlider'])->name('home.slider.add');
    Route::post('/add-about', [SettingsController::class, 'addAbout'])->name('about.put');
    Route::post('/add-contact', [SettingsController::class, 'addContact'])->name('contact.put');
    Route::get('/get-about', [SettingsController::class, 'getAbout'])->name('about.get');
    Route::get('/get-contact', [SettingsController::class, 'getContact'])->name('contact.get');
    Route::post('/add-img-events', [AdminHomeController::class, 'addImageToEvents'])->name('home.events.add');
    Route::post('/delete-img-slider', [AdminHomeController::class, 'deleteImgFromSlider'])->name('home.slider.delete');
    Route::post('/delete-img-events', [AdminHomeController::class, 'deleteImgFromEvents'])->name('home.events.delete');
    Route::post('/chang-img-slider-sort', [AdminHomeController::class, 'changeSlideSort'])->name('home.slider.change.sort');
    Route::post('/chang-img-events-sort', [AdminHomeController::class, 'changeEventsSort'])->name('home.events.change.sort');
    Route::post('/get-slider-imgs', [AdminHomeController::class, 'getSliderImages'])->name('admin_home.get.slider');
    Route::post('/get-events-imgs', [AdminHomeController::class, 'getEventsImages'])->name('admin_home.get.events');

    // images
    Route::prefix('/images')->group(function () {
        Route::post('/upload', [ImagesController::class, 'uploadeImg'])->name('lib.image.uploade');
        Route::get('/get_images', [ImagesController::class, 'getImages'])->name('lib.getImages');
        Route::post('/search', [ImagesController::class, 'search'])->name('lib.images.search');
    });

    // articles
    Route::prefix('articles')->group(function () {
        Route::get('/', [ArticlesController::class, "index"])->name('article.prev');
        Route::get('/add', [ArticlesController::class, "addIndex"])->name('articles.add');
        Route::get('/edit/{id}', [ArticlesController::class, "edit"])->name('article.edit');
        Route::post('/update', [ArticlesController::class, "update"])->name('article.update');
        Route::post('/get', [ArticlesController::class, "getArticles"])->name('articles.get');
        Route::post('/search', [ArticlesController::class, "search"])->name('articles.search');
        Route::post('/delete', [ArticlesController::class, "delete"])->name('articles.delete');
        Route::post('/add', [ArticlesController::class, "put"])->name('article.put');
    });

    // channels
    Route::prefix('channels')->group(function () {
        Route::get('/', [ChannelsController::class, "index"])->name('channel.prev');
        Route::get('/add', [ChannelsController::class, "addIndex"])->name('channels.add');
        Route::get('/edit/{id}', [ChannelsController::class, "edit"])->name('channels.edit');
        Route::get('/channel/{id}', [ChannelsController::class, "previewChannel"])->name('channel.show');
        Route::post('/update', [ChannelsController::class, "update"])->name('channel.update');
        Route::post('/get', [ChannelsController::class, "getChannels"])->name('channels.get');
        Route::post('/search', [ChannelsController::class, "search"])->name('channels.search');
        Route::post('/delete', [ChannelsController::class, "delete"])->name('channels.delete');
        Route::post('/add', [ChannelsController::class, "put"])->name('channel.put');
    });

    // authors
    Route::prefix('authors')->group(function () {
        Route::get('/', [AuthorsController::class, "index"])->name('author.prev');
        Route::get('/add', [AuthorsController::class, "addIndex"])->name('authors.add');
        Route::get('/edit/{id}', [AuthorsController::class, "edit"])->name('authors.edit');
        Route::get('/author/{id}', [AuthorsController::class, "privewAuthor"])->name('author.show');
        Route::post('/update', [AuthorsController::class, "update"])->name('author.update');
        Route::post('/get', [AuthorsController::class, "getAuthors"])->name('authors.get');
        Route::post('/search', [AuthorsController::class, "search"])->name('authors.search');
        Route::post('/delete', [AuthorsController::class, "delete"])->name('authors.delete');
        Route::post('/add', [AuthorsController::class, "put"])->name('author.put');
    });

    //logout
    Route::get('/logout', [RegisterController::class, 'logout'])->name('admin.logout');
});
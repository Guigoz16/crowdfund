<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DonateController;
use App\Http\Controllers\Admin\CauseController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Site\DonationController;

use App\Http\Controllers\Site\StripeController;
use App\Http\Controllers\Site\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//  return view('master');
//});


Route::group(['prefix' => 'admin/dashboard'], function () {
    Route::middleware('admin')->group(function(){
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'dashboard')->name('admin.dashboard');
    });
});
});


Route::controller(CategoryController::class)->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/', 'index')->name('category.index');
        Route::get('/create', 'create')->name('category.create');
        Route::post('/store', 'store')->name('category.store');
        Route::get('/archive', 'archive')->name('category.archive');
        //Route::post('/restore/{id}', 'restore')->name('category.restore');
        Route::get('/delete/{id}', 'destroy')->name('category.delete');

        Route::post('/update/{id}', 'update')->name('category.update');
        Route::get('/edit/{id}', 'edit')->name('category.edit');
    });
});

Route::controller(CauseController::class)->group(function () {
    Route::prefix('causes')->group(function () {

        Route::get('/', 'index')->name('cause.index');
        Route::get('/create', 'create')->name('cause.create');
        Route::post('/store', 'store')->name('cause.store');
        Route::get('/archive' , 'archive')->name('cause.archive');
        Route::post('/update/{id}', 'update')->name('cause.update');
        Route::get('/edit/{id}', 'edit')->name('cause.edit');

        Route::get('/delete/{id}', 'destroy')->name('cause.delete');
    });
});
Route::get('/restore{id}', [CategoryController::class, 'restore'])->name('category.restore');
Route::get('/forceDelete{id}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');



Route::controller(aboutController::class)->group(function(){
    Route::prefix('abouts')->group(function(){
        Route::get('/', 'index')->name('about.index');
        Route::get('/create' , 'create')->name('about.create');
        Route::post('/store' , 'store')->name('about.store');
        Route::get('/delete/{id}' , 'destroy')->name('about.delete');
        Route::post('/update/{id}' , 'update')->name('about.update');  
        Route::get('/edit/{id}' , 'edit')->name('about.edit');

    });
  });



  Route::controller(DonateController::class)->group(function () {
    Route::prefix('donations')->group(function () {
        
        Route::get('/', 'donate')->name('donations.donation');
    });
});




Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'master')->name('master');
    Route::get('/cause', 'main')->name('cause.main');
    Route::get('/category', 'category')->name('category.category');
    Route::get('/about', 'about')->name('about');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/categories/{id}', 'collection')->name('causet');
    Route::get('/cause_detail/{id}', 'causeDetails')->name('causeDetails');

});

Route::controller(DonationController::class)->group(function () {
    Route::prefix('donations')->group(function () {
        Route::get('/{id}', 'index')->name('donation.index');
   
       
       
    });

});
Route::controller(StripeController::class)->group(function(){
    Route::get('/stripe/{id}', 'stripe')->name('stripe');
    Route::post('stripe/{id}', 'stripePost')->name('stripe.post');
});
Route::controller(ContactController::class)->group(function(){
    Route::get('contact', 'contact')->name('contact');
    Route::post('contact', 'store')->name('contact.store');
});
        





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//quản lý nhà đất
Route::get('/real_estate/category-level1', function () {
    return view('real_estate.category_level1');
});
Route::get('/real_estate/category-level1/create', function () {
    return view('real_estate.category_level1_create');
});
Route::get('/real_estate/category-level1/edit', function () {
    return view('real_estate.category_level1_edit');
});
///
Route::get('/real_estate/category-level2', function () {
    return view('real_estate.category_level2');
});
Route::get('/real_estate/category-level2/create', function () {
    return view('real_estate.category_level2_create');
});
Route::get('/real_estate/category-level2/edit', function () {
    return view('real_estate.category_level2_edit');
});
///
Route::get('/real_estate/product', function () {
    return view('real_estate.product');
});
Route::get('/real_estate/product/create', function () {
    return view('real_estate.product_create');
});
Route::get('/real_estate/product/edit', function () {
    return view('real_estate.product_edit');
});
Route::get('/real_estate/product/gallery', function () {
    return view('real_estate.gallery');
});
/////end

///Quản lý bài viết
Route::get('/posts/advise', function () {
    return view('posts.advise');
});
Route::get('/posts/advise/create', function () {
    return view('posts.advise_create');
});
Route::get('/posts/advise/edit', function () {
    return view('posts.advise_edit');
});
///
Route::get('/posts/news', function () {
    return view('posts.advise');
});
Route::get('/posts/news/create', function () {
    return view('posts.advise_create');
});
Route::get('/posts/news/edit', function () {
    return view('posts.advise_edit');
});
///
Route::get('/posts/procedure', function () {
    return view('posts.procedure');
});
Route::get('/posts/procedure/create', function () {
    return view('posts.procedure_create');
});
Route::get('/posts/procedure/edit', function () {
    return view('posts.procedure_edit');
});
///end

///Quản lý nhận tin
Route::get('/mail/contact', function () {
    return view('mail.contact');
});
Route::get('/mail/contact/create', function () {
    return view('mail.contact_create');
});
Route::get('/mail/contact/edit', function () {
    return view('mail.contact_edit');
});
///
Route::get('/mail/register-advise', function () {
    return view('mail.register_advise');
});
Route::get('/mail/register-advise/create', function () {
    return view('mail.register_advise_create');
});
Route::get('/mail/register-advise/edit', function () {
    return view('mail.register_advise_edit');
});
///end

///Quản lý trang tĩnh
Route::get('/static-page/introduce', function () {
    return view('static_page.introduce');
});
Route::get('/static-page/contact', function () {
    return view('static_page.contact');
});
Route::get('/static-page/register_advise', function () {
    return view('static_page.register_advise');
});
Route::get('/static-page/customer-support', function () {
    return view('static_page.customer_support');
});
Route::get('/static-page/footer', function () {
    return view('static_page.footer');
});
///end

///Quản lý hình ảnh video
Route::get('/image-video/logo', function () {
    return view('image_video.logo');
});
Route::get('/image-video/banner', function () {
    return view('image_video.banner');
});
Route::get('/image-video/favicon', function () {
    return view('image_video.favicon');
});
///
Route::get('/image-video/slideshow', function () {
    return view('image_video.slideshow');
});
Route::get('/image-video/slideshow/create', function () {
    return view('image_video.slideshow_create');
});
Route::get('/image-video/slideshow/edit', function () {
    return view('image_video.slideshow_edit');
});
///
Route::get('/image-video/social_network', function () {
    return view('image_video.social_network');
});
Route::get('/image-video/social_network/create', function () {
    return view('image_video.social_network_create');
});
Route::get('/image-video/social_network/edit', function () {
    return view('image_video.social_network_edit');
});
///end

///Quản lý user
Route::get('/users/information', function () {
    return view('users.information');
});

///Quản lý SEO page
Route::get('/seopage/seo-estate', function () {
    return view('seo_page.seo_estate');
});
Route::get('/seopage/seo-news', function () {
    return view('seo_page.seo_news');
});
Route::get('/seopage/seo-advise', function () {
    return view('seo_page.seo_advise');
});
Route::get('/seopage/seo-procedure', function () {
    return view('seo_page.seo_procedure');
});
///end


Route::get('/setting', function () {
    return view('setting');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

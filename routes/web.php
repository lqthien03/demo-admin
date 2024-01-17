<?php

use App\Http\Controllers\AdviseController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Category_level1Controller;
use App\Http\Controllers\Category_level2Controller;
use App\Http\Controllers\FaviconController;
use App\Http\Controllers\logoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeoAdviseController;
use App\Http\Controllers\SeoEstateController;
use App\Http\Controllers\SeoNewsController;
use App\Http\Controllers\SeoProcedureController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\UserController;
use App\Models\Setting;
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
Route::controller(Category_level1Controller::class)->group(function () {
    Route::get('/real_estate/category-level1', 'show')->name('show.category1');
    Route::get('/real_estate/category-level1/create', 'create')->name('create.category1');
    Route::post('/real_estate/category-level1/create', 'store')->name('store.category1');
    Route::get('/real_estate/category-level1/edit/{category_level1}', 'edit')->name('edit.category1');
    Route::put('/real_estate/category-level1/edit/{category_level1}', 'update')->name('update.category1');
    Route::delete('/real_estate/category-level1/{id}', 'destroy')->name('delete.category1');
});

Route::controller(Category_level2Controller::class)->group(function () {
    Route::get('/real_estate/category-level2', 'show')->name('show.category2');
    Route::get('/real_estate/category-level2/create', 'create')->name('create.category2');
    Route::post('/real_estate/category-level2/create', 'store')->name('store.category2');
    Route::get('/real_estate/category-level2/edit/{category_level2}', 'edit')->name('edit.category2');
    Route::put('/real_estate/category-level2/edit/{category_level2}', 'update')->name('update.category2');
    Route::delete('/real_estate/category-level2/{id}', 'destroy')->name('delete.category2');
});

///
Route::controller(ProductController::class)->group(function () {
    Route::get('/real_estate/product', 'show')->name('show.product');
    Route::get('/real_estate/product/create', 'create')->name('create.product');
    Route::post('/real_estate/product/create', 'store')->name('store.product');
    Route::get('/real_estate/product/edit/{product}', 'edit')->name('edit.product');
    Route::put('/real_estate/product/edit/{product}', 'update')->name('update.product');
    Route::delete('/real_estate/product/{id}', 'destroy')->name('delete.product');
});
///
// Route::get('/real_estate/product', function () {
//     return view('real_estate.product');
// });
// Route::get('/real_estate/product/create', function () {
//     return view('real_estate.product_create');
// });
// Route::get('/real_estate/product/edit', function () {
//     return view('real_estate.product_edit');
// });
Route::get('/real_estate/product/gallery', function () {
    return view('real_estate.gallery');
});
/////end

///Quản lý bài viết
Route::controller(NewsController::class)->group(function () {
    Route::get('/posts/news', 'show')->name('show.news');
    Route::get('/posts/news/create', 'create')->name('create.news');
    Route::post('/posts/news/create', 'store')->name('store.news');
    Route::get('/posts/news/edit{news}', 'edit')->name('edit.news');
    Route::put('/posts/news/edit{news}', 'update')->name('update.news');
    Route::delete('/posts/news/{id}', 'destroy')->name('delete.news');
});
Route::controller(AdviseController::class)->group(function () {
    Route::get('/posts/advise', 'show')->name('show.advise');
    Route::get('/posts/advise/create', 'create')->name('create.advise');
    Route::post('/posts/advise/create', 'store')->name('store.advise');
    Route::get('/posts/advise/edit{advise}', 'edit')->name('edit.advise');
    Route::put('/posts/advise/edit{advise}', 'update')->name('update.advise');
    Route::delete('/posts/advise/{id}', 'destroy')->name('delete.advise');
});
Route::controller(ProcedureController::class)->group(function () {
    Route::get('/posts/procedure', 'show')->name('show.procedure');
    Route::get('/posts/procedure/create', 'create')->name('create.procedure');
    Route::post('/posts/procedure/create', 'store')->name('store.procedure');
    Route::get('/posts/procedure/edit{procedure}', 'edit')->name('edit.procedure');
    Route::put('/posts/procedure/edit{procedure}', 'update')->name('update.procedure');
    Route::delete('/posts/procedure/{id}', 'destroy')->name('delete.procedure');
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
Route::controller(StaticPageController::class)->group(function () {

    Route::get('/static-page/introduce/{introduce}', 'edit_introduce')->name('edit.introduce');
    Route::put('/static-page/introduce/{introduce}', 'update_introduce')->name('update.introduce');
    Route::get('/static-page/contact/{contact}', 'edit_contact')->name('edit.contact');
    Route::put('/static-page/contact/{contact}', 'update_contact')->name('update.contact');
    Route::get('/static-page/register-advise/{register_advise}', 'edit_register_advise')->name('edit.register_advise');
    Route::put('/static-page/register-advise/{register_advise}', 'update_register_advise')->name('update.register_advise');
    Route::get('/static-page/customer-support/{customer_support}', 'edit_customer_support')->name('edit.customer-support');
    Route::put('/static-page/customer-support/{customer_support}', 'update_customer_support')->name('update.customer-support');
    Route::get('/static-page/footer/{footer}', 'edit_footer')->name('edit.footer');
    Route::put('/static-page/footer/{footer}', 'update_footer')->name('update.footer');
});
///end

///Quản lý hình ảnh video
Route::controller(logoController::class)->group(function () {
    Route::get('/image-video/logo/{logo}', 'edit')->name('edit.image.logo');
    Route::put('/image-video/logo/{logo}', 'update')->name('update.image.logo');
});
Route::controller(BannerController::class)->group(function () {
    Route::get('/image-video/banner/{banner}', 'edit')->name('edit.image.banner');
    Route::put('/image-video/banner/{banner}', 'update')->name('update.image.banner');
});
Route::controller(FaviconController::class)->group(function () {
    Route::get('/image-video/favicon/{favicon}', 'edit')->name('edit.image.favicon');
    Route::put('/image-video/favicon/{favicon}', 'update')->name('update.image.favicon');
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
// Route::get('/users/information', function () {
//     return view('users.information');
// });
Route::controller(UserController::class)->group(function () {
    Route::get('/users/information/{user}', 'edit')->name('edit.user');
    Route::put('/users/information/{user}', 'update')->name('update.user');
});


///Quản lý SEO page
Route::controller(SeoEstateController::class)->group(function () {
    Route::get('/seopage/seo-estate/{seo_estate}', 'edit')->name('edit.seo_estate');
    Route::put('/seopage/seo-estate/{seo_estate}', 'update')->name('update.seo_estate');
});
Route::controller(SeoNewsController::class)->group(function () {
    Route::get('/seopage/seo-news/{seo_news}', 'edit')->name('edit.seo_news');
    Route::put('/seopage/seo-news/{seo_news}', 'update')->name('update.seo_news');
});
Route::controller(SeoAdviseController::class)->group(function () {
    Route::get('/seopage/seo-advise/{seo_advise}', 'edit')->name('edit.seo_advise');
    Route::put('/seopage/seo-advise/{seo_advise}', 'update')->name('update.seo_advise');
});
Route::controller(SeoProcedureController::class)->group(function () {
    Route::get('/seopage/seo-procedure/{seo_procedure}', 'edit')->name('edit.seo_procedure');
    Route::put('/seopage/seo-procedure/{seo_procedure}', 'update')->name('update.seo_procedure');
});


///end

Route::controller(SettingController::class)->group(function () {
    Route::get('/setting/{setting}', 'edit')->name('edit.setting');
    Route::put('/setting/{setting}', 'update')->name('update.setting');
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

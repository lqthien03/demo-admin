<?php

use App\Http\Controllers\AdviseController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Category_level1Controller;
use App\Http\Controllers\Category_level2Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaviconController;
use App\Http\Controllers\logoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeoAdviseController;
use App\Http\Controllers\SeoEstateController;
use App\Http\Controllers\SeoNewsController;
use App\Http\Controllers\SeoProcedureController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SlideShowController;
use App\Http\Controllers\Social_networkController;
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
    Route::post('upload_image', 'uploadImage')->name('upload');
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
    Route::get('/real_estate/product/gallery/{gallery}', 'show_gallery')->name('show_gallery.product');
    Route::get('/real_estate/product/gallery/create/{gallery}', 'create_gallery')->name('create_gallery.product');
    Route::post('/real_estate/product/gallery/create/{gallery}', 'store_gallery')->name('store_gallery.product');
    Route::get('/real_estate/product/gallery/edit/{gallery}', 'edit_gallery')->name('edit_gallery.product');
    Route::put('/real_estate/product/gallery/edit/{gallery}', 'update_gallery')->name('update_gallery.product');
    // Route::delete('/real_estate/product/gallery/{id}', 'destroy_gallery')->name('delete_gallery.product');
});

/////end

///Quản lý bài viết
Route::controller(NewsController::class)->group(function () {
    Route::get('/posts/news', 'show')->name('show.news');
    Route::get('/posts/news/create', 'create')->name('create.news');
    Route::post('/posts/news/create', 'store')->name('store.news');
    Route::get('/posts/news/edit/{news}', 'edit')->name('edit.news');
    Route::put('/posts/news/edit/{news}', 'update')->name('update.news');
    Route::delete('/posts/news/delete/{id}', 'destroy')->name('delete.news');
});
//tư vấn
Route::controller(AdviseController::class)->group(function () {
    Route::get('/posts/advise', 'show')->name('show.advise');
    Route::get('/posts/advise/create', 'create')->name('create.advise');
    Route::post('/posts/advise/create', 'store')->name('store.advise');
    Route::get('/posts/advise/edit/{advise}', 'edit')->name('edit.advise');
    Route::put('/posts/advise/edit/{advise}', 'update')->name('update.advise');
    Route::delete('/posts/advise/delete/{id}', 'destroy')->name('delete.advise');
});
//thủ tục
Route::controller(ProcedureController::class)->group(function () {
    Route::get('/posts/procedure', 'show')->name('show.procedure');
    Route::get('/posts/procedure/create', 'create')->name('create.procedure');
    Route::post('/posts/procedure/create', 'store')->name('store.procedure');
    Route::get('/posts/procedure/edit/{procedure}', 'edit')->name('edit.procedure');
    Route::put('/posts/procedure/edit/{procedure}', 'update')->name('update.procedure');
    Route::delete('/posts/procedure/delete/{id}', 'destroy')->name('delete.procedure');
});


///end

///Quản lý nhận tin
Route::controller(MailController::class)->group(function () {
    Route::get('/mail/contact', 'show')->name('show.mail.contact');
    Route::get('/mail/contact/create', 'create')->name('create.mail.contact');
    Route::post('/mail/contact/create', 'store')->name('store.mail.contact');
    Route::get('/mail/contact/edit/{contact}', 'edit')->name('edit.mail.contact');
    Route::put('/mail/contact/edit/{contact}', 'update')->name('update.mail.contact');
    Route::delete('/mail/contact/{id}', 'destroy')->name('delete.mail.contact');
    ///
    Route::get('/mail/register-advise', 'show_register_advise')->name('show.register-advise');
    Route::get('/mail/register-advise/create', 'create_register_advise')->name('create.mail.register-advise');
    Route::post('/mail/register-advise/create', 'store_register_advise')->name('store.mail.register-advise');
    Route::get('/mail/register-advise/edit/{register-advise}', 'edit_register_advise')->name('edit.mail.register-advise');
    Route::put('/mail/register-advise/edit/{register-advise}', 'update_register_advise')->name('update.mail.register-advise');
    Route::delete('/mail/register-advise/{id}', 'destroy_register_advise')->name('delete.mail.register-advise');
});
///end

///Quản lý trang tĩnh

Route::controller(StaticPageController::class)->group(function () {
    Route::get('/static-page/introduce/{introduce}', 'edit_introduce')->name('edit.introduce');
    Route::put('/static-page/introduce/{introduce}', 'update_introduce')->name('update.introduce');
    Route::get('/static-page/contact/{contact}', 'edit_contact')->name('edit.contact');
    Route::put('/static-page/contact/{contact}', 'update_contact')->name('update.contact');
    Route::get('/static-page/register-advise/{register_advise}', 'edit_register_advise')->name('edit.register_advise');
    Route::put('/static-page/register-advise/{register_advise}', 'update_register_advise')->name('update.register_advise');
    Route::get('/static-page/customer-support/{customer_support}', 'edit_customer_support')->name('edit.customer_support');
    Route::put('/static-page/customer-support/{customer_support}', 'update_customer_support')->name('update.customer_support');
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
Route::controller(SlideShowController::class)->group(function () {
    Route::get('/image-video/slideshow', 'show')->name('show.slideshow');
    Route::get('/image-video/slideshow/create', 'create')->name('create.slideshow');
    Route::post('/image-video/slideshow/create', 'store')->name('store.slideshow');
    Route::get('/image-video/slideshow/edit/{slideshow}', 'edit')->name('edit.slideshow');
    Route::put('/image-video/slideshow/edit/{slideshow}', 'update')->name('update.slideshow');
    Route::delete('/image-video/slideshow/delete/{id}', 'destroy')->name('delete.slideshow');
});
///
Route::controller(Social_networkController::class)->group(function () {
    Route::get('/image-video/social_network', 'show')->name('show.social_network');
    Route::get('/image-video/social_network/create', 'create')->name('create.social_network');
    Route::post('/image-video/social_network/create', 'store')->name('store.social_network');
    Route::get('/image-video/social_network/edit/{social_network}', 'edit')->name('edit.social_network');
    Route::put('/image-video/social_network/edit/{social_network}', 'update')->name('update.social_network');
    Route::delete('/image-video/social_network/delete/{id}', 'destroy')->name('delete.social_network');
});
///end


Route::controller(UserController::class)->group(function () {
    Route::get('/users/information/{user}', 'edit')->name('edit.user');
    Route::put('/users/information/{user}', 'update')->name('update.user');
    Route::get('/users/resset-password/{user}', 'edit_password')->name('edit.resset-password');
    Route::put('/users/resset-password/{user}', 'update_password')->name('update.resset-password');
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
// Route::get('/search', 'Category_level1Controller@searchProduct');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'show')->name('show.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

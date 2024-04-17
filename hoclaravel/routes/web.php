<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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


Route::get('/products/{id}', [ProductController::class, 'show'])->name('detail');

Route::get('/pricing', [ProductController::class, 'showPricing'])->name('showPricing');

Route::get('/product-type/{id}', [ProductController::class, 'showProductType'])->name('showProductType');

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [HomeController::class, 'postLogin'])->name('postLogin');

Route::get('/sign-up', [HomeController::class, 'signUp'])->name('sign-up');
Route::post('/sign-up',[HomeController::class,'postSignup'])->name('postsignup');

Route::get('/about-page', [HomeController::class, 'about'])->name('about-page');

Route::get('/contact-page', [HomeController::class, 'contact'])->name('contact-page');

Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');

Route::get('/delete-cart/{id}', [CartController::class, 'deleteCart'])->name('delete-cart');


Route::get('/checkout', [HomeController::class, 'showCart'])->name('showCart');

Route::get('/checkouted', [CartController::class, 'checkout'])->name('checkout');
Route::get('/shopping-cart', [CartController::class, 'shoppingCart'])->name('shoppingCart');

// -----------------đăng nhập admin--------------------------
/*------ phần quản trị ----------*/
Route::get('/admin/dangnhap',[UserController::class,'getLogin'])->name('admin.getLogin');
Route::post('/admin/dangnhap',[UserController::class,'postLogin'])->name('admin.postLogin');
Route::get('/admin/dangxuat',[UserController::class,'getLogout']);

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	
		Route::group(['prefix'=>'category'],function(){
			// admin/category/danhsach
			// Route::get('danhsach',[CategoryController::class,'getCateList'])->name('admin.getCateList');
			// Route::get('them',[CategoryController::class,'getCateAdd'])->name('admin.getCateAdd');
			// Route::post('them',[CategoryController::class,'postCateAdd'])->name('admin.postCateAdd');
			// Route::get('xoa/{id}',[CategoryController::class,'getCateDelete'])->name('admin.getCateDelete');
			// Route::get('sua/{id}',[CategoryController::class,'getCateEdit'])->name('admin.getCateEdit');
			// Route::post('sua/{id}',[CategoryController::class,'postCateEdit'])->name('admin.postCateEdit');
		});

		//viết tiếp các route khác cho crud products, users,.... thì viết tiếp

});
Route::post('/input-email',[PageController::class,'postInputEmail'])->name('postInputEmail');
Route::get('/input-email',[PageController::class,'getinputEmail'])->name('getinputEmail');

Route::post('/contact-page', [PageController::class, 'sendEmail'])->name('contact.send');	
<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;

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

//clients Routes
Route::get('/',function(){
    return '<h1> TRang chur unicpde </h1>';
})->name('home');
Route::prefix('categories')->group(function () {
    //List of categories
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');
    //Get details of a category (Apply show form to edit categories)
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');
    //Handle updates chuyen muc
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);
    //hien thi form add data
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');
    //xu ly them chuyen muc/ handle add categorry
    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);
    // delete category
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');

});
//admin routes
Route::middleware('checkadminlogin')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::middleware('checkadminproduct')->resource('products', ProductsController::class);

});
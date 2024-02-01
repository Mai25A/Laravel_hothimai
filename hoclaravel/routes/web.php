<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Group;

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
    // $tr= '<h1>Học lập trình tại UNICODE</h1>';
    // return $tr;
    return view('welcome');
});
// Route::post('/unicode',function(){
    //     $tr = 'phương thức post của path /unicode';
    //     return $tr;
    // });
    // Route::put('/unicode',function(){
        //     return 'phương thức put của path /unicode';
        // });
        // Route::put('/unicode',function(){
            //     return 'phương thức delete của path /unicode';
            // });
            // Route::patch('/unicode',function(){
                //     return 'phương thức patch của path /unicode';
                // });
                // Route::match(['get','post'],'/unicode',function(){
                    //     return $_SERVER['REQUEST_METHOD'];
                    // });
                    // Route::any('/unicode',function(Request $request){
                        //     // $re = new Request();
                        //     return $request->method();
                        // });
                        
                        // Route::redirect('unicode','show-form');
Route::prefix('admin')->Group(function(){
    Route::get('/unicode',function(){
        $tr = 'phương thức get của path /unicode';
        return $tr;
        // return view('form');
    });
        Route::get('/show-form',function(){
        return view('form');
    });
    Route::prefix('products')->group(function(){
        Route::get('/',function(){
            return 'Danh sách sản phẩm';
        });
        Route::get('add',function(){
            return 'Thêm sản phẩm';
        });
        Route::get('edit',function(){
            return 'Sửa sản phẩm';
        });
        Route::get('delete',function(){
            return 'Xóa sản phẩm';
        });
    });
});
Route::get('/home',function(){
    return view('home');
});
Route::get('/san-pham',function(){
    return view('product');
});
Route::get('/bai-hoc',function(){
    return view('ghibai');
});

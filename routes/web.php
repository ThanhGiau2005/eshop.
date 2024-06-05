<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::get('/home', function(){
    return 'Hello home';
})-> name('home') ;

Route::get('/shop', function(){
    return 'Page Shop';
})->Middleware('checkAge');

Route::get('/about', function(){
    return 'Page about';
});

Route::get('/contact', function(){
    return 'Page contact';
});

Route::post('/post', function(){
    echo 'Method post';
});

Route::put('/put', function(){
    return 'Method put';
});

Route::prefix('admin')->group(function(){
    Route::get('posts/{post}/comments/{comment}', function($postId, $commentId){
        return "postId: $postId - commentId: $commentId";
    });
    
    Route::get('user/{name?}',function($name = 'john'){
        return $name;
    });
});


    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('orderitems', OrderItemController::class);


    Route::get('/child', function(){
        return view('child');
    });

    Route::group(['prefix' => 'admin'], function(){
        Route::resource('users',App\Http\Controllers\Admin\UserController::class,['names' =>'admin.users']);
    }); 
    Route::group(['prefix' => 'admin'], function(){
        Route::resource('products',App\Http\Controllers\Admin\ProductController::class,['names' =>'admin.products']);
    });
    Route::group(['prefix' => 'admin'], function(){
        Route::resource('orders',App\Http\Controllers\Admin\OrderController::class,['names' =>'admin.orders']);
    });
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//GET, POSt, PUT, PATCH, DELETE(method http)
//Base url: http://127.0.0.1:8000
//Đặt tên url: danh-sach-danh-pham

Route::get('test', function () {
    echo 'pham tuan';
});

Route::get('/', function () {
    echo 'Trang chủ';
});

// php artisan make:controller ProductController : tạo class

// url: danh-sach-danh-pham
Route::get('list-products', [ProductController::class, 'showProduct']);

// Truyền dữ liệu từ Route => Controller
// Có 2 cách SLug - Params
// Slug : http://127.0.0.1:8000/list-products/1
// Params: http://127.0.0.1:8000/list-products?id=3&name=iphone

// Slug
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);


// Params: http://127.0.0.1:8000/list-products?id=3&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);


// php artisan make:view list-product : tạo file view
Route::get('show', [ProductController::class, 'showProduct']);


Route::get('thongtinsv', [StudentController::class, 'showInfor']);

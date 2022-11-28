<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/categories', [App\Http\Controllers\HomeController::class, 'categories']);
Route::get('/lohang', [App\Http\Controllers\HomeController::class, 'lohang']);
Route::get('/donvisanpham', [App\Http\Controllers\HomeController::class, 'donvisanpham']);
Route::get('/kehang', [App\Http\Controllers\HomeController::class, 'kehang']);
Route::get('/nhapkho', [App\Http\Controllers\HomeController::class, 'nhapkho']);
Route::get('/xuatkho', [App\Http\Controllers\HomeController::class, 'xuatkho']);
Route::get('/nhasanxuat', [App\Http\Controllers\HomeController::class, 'nhasanxuat']);
Route::get('/nhacungcap', [App\Http\Controllers\HomeController::class, 'nhacungcap']);
Route::get('/nhanvien', [App\Http\Controllers\HomeController::class, 'nhanvien']);




//Post method
Route::post('login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('themnhanvien', [App\Http\Controllers\NhanVienController::class, 'themnhanvien']);
Route::post('themdanhmuc', [App\Http\Controllers\CategoriesController::class, 'themdanhmuc']);
Route::post('themkehang', [App\Http\Controllers\KeHangController::class, 'themkehang']);
Route::post('themnhacungcap', [App\Http\Controllers\NCCController::class, 'themnhacungcap']);
Route::post('themnhasanxuat', [App\Http\Controllers\NSXController::class, 'themnhasanxuat']);
Route::post('themphieunhap', [App\Http\Controllers\PhieuNhapController::class, 'themphieunhap']);
Route::post('themphieuxuat', [App\Http\Controllers\PhieuXuatController::class, 'themphieuxuat']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FrontendController;
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

Route::get('/login', [LoginController::class, 'LoginPage'])->name('login');
Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');
Route::post('/postlogin', [LoginController::class, 'PostLogin'])->name('postlogin');
Route::get('/', [FrontendController::class, 'index']);
Route::group(['middleware'=>['auth']], function(){
    Route::get('/admin', [MenuController::class, 'index']);
    Route::get('admin/addmenu', [MenuController::class, 'create']);
    Route::post('admin/addmenu', [MenuController::class, 'store']);
    Route::get('admin/{id}/updatemenu', [MenuController::class, 'edit']);
    Route::patch('admin/{id}/updatemenu', [MenuController::class, 'update']);
    Route::get('admin/delete/{id}', [MenuController::class, 'destroy']);
    Route::get('/admin/profilecompany', [CompanyController::class, 'index']);
    Route::get('/admin/{id}/updatecompany', [CompanyController::class, 'edit']);
    Route::patch('/admin/{id}/updatecompany', [CompanyController::class, 'update']);
});

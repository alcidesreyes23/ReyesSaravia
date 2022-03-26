<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'departamentos','as' => 'department.'], function() {
    Route::get('/',[DepartmentController::class,'index'])->name('index');
});

Route::group(['prefix' => 'investigaciones','as' => 'investigation.'], function() {
    Route::get('/',[InvestigationController::class,'index'])->name('index');
});

Route::group(['prefix' => 'estados','as' => 'status.'], function() {
    Route::get('/',[StatusController::class,'index'])->name('index');
});

Route::get('api/etiquetas',[TagController::class,'index'])->name('tag.index');

Route::group(['prefix' => 'usuarios','as' => 'user.'], function() {
    Route::get('/',[HomeController::class,'index'])->name('index');
});

<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);

// --------------------------------- test routes -----------------------------------------

// Route::get('test',function(){
//     return view('admin.index');
// });


// ---------------------------------------------------------------------- end - test routes


// ------------------------------------ admin routes ---------------------------------------

Route::middleware(['auth'])->group(function(){
    Route::get('/admin-southpoint', [AdminController::class,'index']);
    Route::get('/logging-out',[AdminController::class,'logoutAdmin'])->name('logging-out');
});

// ----------------------------------------------------------------------- end - admin routes

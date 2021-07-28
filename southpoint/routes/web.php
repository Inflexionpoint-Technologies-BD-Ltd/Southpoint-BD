<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);



// ---------------------------------------------------- admin routes --------------------------------------------------------------

Route::middleware(['auth'])->group(function () {
    Route::get('/admin-southpoint', [AdminController::class, 'index']);
    Route::get('/logging-out', [AdminController::class, 'logoutAdmin'])->name('logging-out');

    // ----------------------------------------------- trade page routes --------------------------------------------
    Route::resource('/trades', 'TradeController'); // trade page images
    Route::resource('/trainings','TrainingController'); // training info of trades page
    // --------------------------------------------------------------------------------------- end - trade page routes

});

// -------------------------------------------------------------------------------------------------------------- end - admin routes


// ---------------------------------------------------------- test routes -----------------------------------------------------------


// ---------------------------------------------------------------------------------------------------------------- end - test routes

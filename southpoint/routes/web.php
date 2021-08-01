<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);


// -------------------------------------------------------- admin routes --------------------------------------------------------------

Route::middleware(['auth'])->group(function () {
    Route::get('/admin-southpoint', [AdminController::class, 'index']);
    Route::get('/logging-out', [AdminController::class, 'logoutAdmin'])->name('logging-out');

    // ----------------------------------------------- trade page routes --------------------------------------------
    Route::resource('/trades', 'TradeController'); // trade page images
    Route::resource('/trainings', 'TrainingController'); // training info of trades page
    // --------------------------------------------------------------------------------------- end - trade page routes

    //----------------------------------------------- about page routes ----------------------------------------------
    Route::resource('/about','AboutController'); // about information of about page
    Route::resource('/message','MessageController'); // director's message
    Route::resource('/profile','ProfileController'); //company profile from about us page
    Route::resource('/client','ClientController'); // company clients list
    //---------------------------------------------------------------------------------------- end - about page routes

    // ---------------------------------------------- Infrastructure page routes -------------------------------------
    Route::resource('/infrastructure','InfrastructureController'); // Infrastructure information with title and content
    Route::resource('/infrastructure-images','InfrastructureImageController'); // Infrastructure slider content
    // ------------------------------------------------------------------------------- end - Infrastructure page routes

});

// ------------------------------------------------------------------------------------------------------------------- end - admin routes


// ---------------------------------------------------------- test routes -----------------------------------------------------------


// ---------------------------------------------------------------------------------------------------------------- end - test routes

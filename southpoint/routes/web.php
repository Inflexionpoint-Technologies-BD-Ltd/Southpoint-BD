<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);


// -------------------------------------------------------- admin routes --------------------------------------------------------------

Route::middleware(['auth'])->group(function () {
    Route::get('/admin-southpoint', [AdminController::class, 'index']);
    Route::get('/logging-out', [AdminController::class, 'logoutAdmin'])->name('logging-out');

    //------------------------------------------------ home page routes ---------------------------------------------

    Route::resource('/slider', 'SliderController'); // sliders of home page
    Route::resource('/content', 'HomeContentController'); // home page content

    //----------------------------------------------------------------------------------------- end - home page routes

    // ----------------------------------------------- trade page routes --------------------------------------------
    Route::resource('/trades', 'TradeController'); // trade page images
    Route::resource('/trainings', 'TrainingController'); // training info of trades page
    // --------------------------------------------------------------------------------------- end - trade page routes

    //----------------------------------------------- about page routes ----------------------------------------------
    Route::resource('/about', 'AboutController'); // about information of about page
    Route::resource('/message', 'MessageController'); // director's message
    Route::resource('/profile', 'ProfileController'); //company profile from about us page
    Route::resource('/client', 'ClientController'); // company clients country
    Route::resource('/area', AreaController::class); // company clients area
    //---------------------------------------------------------------------------------------- end - about page routes

    // ---------------------------------------------- Infrastructure page routes -------------------------------------
    Route::resource('/infrastructure', 'InfrastructureController'); // Infrastructure information with title and content
    Route::resource('/infrastructure-images', 'InfrastructureImageController'); // Infrastructure slider content
    // ------------------------------------------------------------------------------- end - Infrastructure page routes

    // ------------------------------------------- contact us page routes --------------------------------------------
    Route::resource('/contact', 'ContactController'); // contact info of contact page
    // --------------------------------------------------------------------------------- end -  contact us page routes

    //-------------------------------------------- footer page routes ------------------------------------------------

    Route::resource('footer', FooterController::class);

    //---------------------------------------------------------------------------------------- end - footer page routes

    //-------------------------------------------- recruitment page routes ------------------------------------------------

    Route::resource('recruitment',RecruitmentController::class);  // adding recruitments title and content
    Route::resource('service',ServiceController::class); // adding service list and content
    Route::resource('document',DocumentController::class); // adding document title of licence papers
    Route::resource('paper',PaperController::class); // adding paper contents related to documents

    //---------------------------------------------------------------------------------------- end - recruitment page routes

});

// ------------------------------------------------------------------------------------------------------------------- end - admin routes


// ------------------------------------------------------------------ public routes -----------------------------------------------------

// ----------------------------------------- trades page -------------------------------------

Route::get('/pages/trades',[MainController::class,'trades'])->name('page.trades');

// ---------------------------------------------------------------------------- end - trades page

// ------------------------------------------- home page ------------------------------------

//Route::get('/',[MainController::class,'home'])->name('page.home');

// ---------------------------------------------------------------------------- end - home page

// ------------------------------------------- about page -------------------------------------

Route::get('/pages/about',[MainController::class,'about'])->name('page.about');


// --------------------------------------------------------------------------- end - about page

// -------------------------------------- infrastructure page ----------------------------------

//Route::get('/pages/infrastructure',[MainController::class,'infrastructure'])->name('page.infrastructure');
Route::get('/',[MainController::class,'infrastructure'])->name('page.infrastructure'); //infrastructure set as home page for a short time

// ------------------------------------------------------------------- end - infrastructure page

// ---------------------------------------- contact us page ------------------------------------

Route::get("/pages/contact",[MainController::class,'contact'])->name("page.contacts");

// ---------------------------------------- end - contact us page ------------------------------

// ---------------------------------------- recruitment page ------------------------------------

Route::get("/pages/recruitment",[MainController::class,'recruitment'])->name("page.recruitment");

// ---------------------------------------- recruitment page ------------------------------------


// ------------------------------------------------------------------------------------------------------------------- end - public routes


// ---------------------------------------------------------- test routes -----------------------------------------------------------

//Route::get('test', function () {
//    $recruitments = \App\Recruitment::all();
//    return view('main.home',compact('recruitments'));
////    return view('main.trades');
//});

// ---------------------------------------------------------------------------------------------------------------- end - test routes

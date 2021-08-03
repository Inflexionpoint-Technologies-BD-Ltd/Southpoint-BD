<?php

namespace App\Http\Controllers;

use App\Footer;
use App\Trade;
use App\Training;
use Illuminate\Http\Request;

class MainController extends Controller
{

//    ---------------------------------------- trades page functions -------------------------------------------------

    public function trades()
    {
        $trades = Trade::all();
        $trainings = Training::all();
        $footers = Footer::limit(2)->get();
        return view('main.trades', compact('trades', 'trainings', 'footers'));
    }

    //    end - trades page functions --------------------------------------------------------------------------------

}

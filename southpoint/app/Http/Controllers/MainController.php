<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Document;
use App\Footer;
use App\Infrastructure;
use App\InfrastructureImage;
use App\Message;
use App\Profile;
use App\Recruitment;
use App\Service;
use App\Trade;
use App\Training;
use App\Client;
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


    //    ---------------------------------------- home page functions -------------------------------------------------

    public function home()
    {
        return view('main.home');
    }

    //    ------------------------------------------------------------------------------------ end - home page functions

    //    ---------------------------------------- about page functions -------------------------------------------------

    public function about()
    {
        $abouts = About::all();
        $messages = Message::all();
        $profiles = Profile::all();
        $clients = Client::all();
        $footers = Footer::limit(2)->get();
        return view('main.about', compact('abouts', 'messages', 'profiles', 'footers', 'clients'));
    }
    //    ------------------------------------------------------------------------------------- end - about page functions

    //    ---------------------------------------- infrastructure page functions -------------------------------------------------

    public function infrastructure()
    {
        $infrastructures = Infrastructure::all();
        $infrastructure_images = InfrastructureImage::all();
        $footers = Footer::limit(2)->get();
        return view('main.infrastructure',compact('infrastructures','infrastructure_images','footers'));
    }
    //    ------------------------------------------------------------------------------------- end - infrastructure page functions

    //    ---------------------------------------- contact page functions ----------------------------------------------------

    public function contact(){
        $contact_info = Contact::all();
        $footers = Footer::limit(2)->get();
        return view("main.contact",compact('contact_info','footers'));
    }

    //    --------------------------------------------------------------------------------------- end - contact page functions

    // --------------------------------------------- recruitment page --------------------------------------------------------

    public function recruitment(){
        $recruitments = Recruitment::all();
        $documents = Document::all();
        $services = Service::all();
        $footers = Footer::limit(2)->get();
        return view("main.recruitment",compact('documents','recruitments','services','footers'));
    }

    // -----------------------------------------------------------------------------------------------  end - recruitment page

}

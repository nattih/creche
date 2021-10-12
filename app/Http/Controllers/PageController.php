<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function actualites(){
        $actus=Info::where('categorie_id', '=', 1)->latest()->get();
        return view('visiteur.actualite', compact('actus'));
    }

    public function service(){

        return view('visiteur.service');
    }

    public function astuces(){
        $astuces=Info::where('categorie_id', '=', 2)->latest()->get();
        return view('visiteur.astuce', compact('astuces'));
    }

    public function recrutement(){

        return view('visiteur.recrutement');
    }

    public function contact(){

        return view('visiteur.contact');
    }
   
}

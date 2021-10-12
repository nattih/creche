<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actu;
use App\Info;

class AccueilController extends Controller
{
    public function accueil(){
        $actus=Info::where('categorie_id', '=', 1)->latest()->take(1)->get();
        $astuces=Info::where('categorie_id', '=', 2)->latest()->take(1)->get();
        return view('accueil', compact('actus', 'astuces'));
    }
}

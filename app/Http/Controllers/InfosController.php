<?php

namespace App\Http\Controllers;

use App\Info;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InfosController extends Controller
{
    public function index(){
        $infos=Info::all();
        return view('infos.liste', compact('infos'));
    }

    public function infos_create(){
        $categories=Categorie::all();
        return view('infos.create', compact('categories'));
    }

    //ajout d'actualites
    public function infos_store(Request $request){
       
        request()->validate([
           'titre'=>['required','string'],
           'description'=>['required','string'],
           'categorie_id'=>['required','string'],
           'image'=>['required','image'],
         ]);
         $imagePath=request('image')->store('uploads','public');
       Info::create([
           'titre'=>$request->titre,
           'description'=>$request->description,
           'categorie_id'=>$request->categorie_id,
           'image'=>$imagePath,
       ]);
       
           Session::flash('message', 'Ajout réussi!');
           Session::flash('alert-class', 'alert-success text-center');
           return redirect()->back();
   }
    //Lister les actualites
    public function show(){
        $actus=Info::all();
        
        return view('admin.liste_actualites', compact('actus'));
    }
    public function edit(Info $actu){
        $actus=Info::all();
        return view('admin.edit_actu',compact('actus'));
    }

    public function update(Request $request, Info $actu){

        $actus= Info::all();
          $actu->titre=$request->titre;
          $actu->contenu=$request->contenu;
          $actu->photo=$request->photo;
          $actu->save();
          return view('admin.liste_actualites', compact('actus'));
    }
    public function destroy(Info $actu)
    {
        $actu->delete();

        Session::flash('message', 'Suppression réussi!');
        Session::flash('alert-class', 'alert-success text-center');
        return back();
    }
}

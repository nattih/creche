<?php

namespace App\Http\Controllers;

 
use App\Actu;
use App\Bebe;
use App\User;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function dashadmin(){
        
        return view('admin.dashboard');
    }  
     
    public function nounou_liste(){
        $nounous=User::where('roles', '=', 2)->latest()->get();
        return view('admin.nounou_liste', compact('nounous'));
    }

    public function parent_liste(){
        $parents=User::where('roles', '=', 1)->latest()->get();
        return view('admin.parent_liste', compact('parents'));
    }

    public function stucture_liste(){
        $structures=User::where('roles', '=', 3)->latest()->get();
        return view('admin.structure_liste', compact('structures'));
    }

    public function bebe_liste(){
        $bebes=Bebe::latest()->get();
        return view('admin.bebe_liste', compact('bebes'));
    }

    public function bebe_show(Bebe $bebe)
    {
        
        return view('admin.bebe_detail', compact('bebe'));
    }

    public function bebe_destroy(Bebe $bebe)
    { 
        $bebe->delete();
        return redirect()->back();
    }
    public function bebe_create(){
        $parents=User::where('roles', '=', 1)->latest()->get(); 
        return view('admin.bebe.bebe_form', compact('parents'));
    }

    public function bebe_store(Request $request){
        
        request()->validate([
           'nom'=>['required','string'],
           'prenom'=>['required','string'],
           'sexe'=>['required','string'],
           'user_id'=>['required','integer'],
           'parent2'=>['required','string'], 
           'contact'=>['required','integer'], 
           'dat_naiss'=>['required','date'],
           'debut_fonction'=>['required','date'],
           'contrat'=>['required','string'],
           'nounou'=>['required','string'],
           'photo'=>['required','image'],
         ]);
         $imagePath=request('photo')->store('uploads','public');
       Bebe::create([
           'nom'=>$request->nom,
           'prenom'=>$request->prenom,
           'sexe'=>$request->sexe,
           'user_id'=>$request->user_id,
           'parent2'=>$request->parent2,
           'contact'=>$request->contact,
           'dat_naiss'=>$request->dat_naiss, 
           'debut_fonction'=>$request->debut_fonction,
           'contrat'=>$request->contrat, 
           'nounou'=>$request->nounou, 
           'photo'=>$imagePath, 
       ]);
           Session::flash('message', 'Ajout réussi!');
           Session::flash('alert-class', 'alert-success text-center');
           return redirect()->back();
   }


    public function form_member(){
        
        return view('admin.member_form');
    } 
    public function addmember(Request $request){
        
         request()->validate([
            'nom'=>['required','string'],
            'prenom'=>['required','string'],
            'sexe'=>['required','string'],
            'telephone'=>['required','integer'],
            'email'=>['required','string','email','unique:users'],
            'cnib'=>['required','string'],
            'naissance'=>['required','date'],
            'lieu_nais'=>['required','string'],
            'residence'=>['required','string'],
            'poste'=>['required','string'],
            'debut_fonction'=>['required','date'],
            'contrat'=>['required','string'],
            'photo'=>['required','image'],
            'password'=>['required', 'confirmed', 'min:3', 'max:6'],
          ]);
          $imagePath=request('photo')->store('uploads','public');
        Admin::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'sexe'=>$request->sexe,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
            'cnib'=>$request->cnib,
            'naissance'=>$request->naissance,
            'lieu_nais'=>$request->lieu_nais,
            'residence'=>$request->residence,
            'poste'=>$request->poste,
            'debut_fonction'=>$request->debut_fonction,
            'contrat'=>$request->contrat,
            'photo'=>$imagePath,
            'password' => Hash::make($request['password']),
        ]);
            Session::flash('message', 'Ajout réussi!');
            Session::flash('alert-class', 'alert-success text-center');
            return redirect()->back();
    }
    //Lister le personnel
    public function personnel_liste(){
        $personnels=Admin::where('id', '!=' , 1)->get();
        return view('admin.personel_liste', compact('personnels'));
    }
     
     
}

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/&', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Mes routes
    // routes visiteur
    Route::get('/', 'AccueilController@accueil')->name('accueil');
    Route::get('/actualites', 'PageController@actualites')->name('actualites');
    Route::get('/services', 'PageController@service')->name('service');
    Route::get('/astuces', 'PageController@astuces')->name('astuces');
    Route::get('/contact', 'PageController@contact')->name('contact');
    Route::get('/recrutement', 'PageController@recrutement')->name('recrutement');
    Route::get('/forum', 'ForumController@forum')->name('forum');

     //inscription d'un utilisateur
     Route::post('/inscription', 'UserController@store')->name('user.store');
      //espace d'un utilisateur
     Route::get('/parent', 'ParentController@index')->name('parent.page');
     Route::get('/nounou', 'NounouController@index')->name('nounou.page');
     Route::get('/structure', 'StructureController@index')->name('structure.page');
     
        // routes admin, son espace et login
    Route::get('/admin', 'AdminController@dashadmin')->name('dashboard');
    Route::get('/admin-login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/admin-login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/form-membre', 'AdminController@form_member')->name('membre.form'); //ajouter un personnel
    Route::post('/ajout-membre', 'AdminController@addmember')->name('membre.store'); //ajouter un personnel
    Route::get('/liste_personnel', 'AdminController@personnel_liste')->name('personnel.liste'); //lister les personnel
    Route::get('/nounou-liste', 'AdminController@nounou_liste')->name('nounou.liste');
    Route::get('/parent-liste', 'AdminController@parent_liste')->name('parent.liste');
    Route::get('/structure-liste', 'AdminController@stucture_liste')->name('strucure.liste');
    
    //route pour les bebes
    Route::get('/bebe-liste', 'AdminController@bebe_liste')->name('bebe.liste');
    Route::get('/bebe-create', 'AdminController@bebe_create')->name('bebe.create');
    Route::post('/bebe-store', 'AdminController@bebe_store')->name('bebe.store');
    Route::get('/bebe-show/{bebe}', 'AdminController@bebe_show')->name('bebe.show');
    Route::delete('/bebe-delete/{bebe}', 'AdminController@bebe_destroy')->name('bebe.destroy');
   
    //route actualite et astuces
    Route::get('/infos', 'InfosController@index')->name('infos');
    Route::get('/infos-form', 'InfosController@infos_create')->name('infos.create');
    Route::post('/infos-store', 'InfosController@infos_store')->name('infos.store');

    Route::get('/edit_actualite/{actu}', 'AdminController@edit')->name('edit.actu');
    
    Route::put('/update_actualite/{actu}', 'AdminController@update')->name('update.actu');
    
    Route::delete('/delete_actualite/{actu}', 'AdminController@destroy')->name('delete.actu');
    
   
    
    

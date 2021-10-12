@extends('layouts.menu')
@section('contenu') 
    <section id="about" class="about">
        <div class="container" data-aos="fade-up"> 
            <div class="section-title">
                <h2>Inscription</h2>
                <p>Je m'inscris au programme</p>
            </div>
        
            <div class="row">
                <div class="col-5">
                    <img class="img-fluid" src="images/baby_login.jpg" alt="">
                </div>
                <div class="col-7">
                    <div class="fadeInDown">
                        <div id="formContent">  
                            <!-- Formulaire -->
                            <form action="{{route('user.store')}}" method="post">
                                @csrf
                                <div class="form-group d-flex">
                                    <input type="text" id="login" class="fadeIn second  @error('nom') is-invalid @enderror" name="nom" placeholder="Nom">
                                    @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                    
                                    <input type="text" id="login" class="fadeIn second  @error('prenom') is-invalid @enderror" name="prenom" placeholder="Prénom">
                                    @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                    
                                </div>
                                <div class="form-goup d-flex">
                                    <input type="text" id="login" class="fadeIn second  @error('telephone') is-invalid @enderror" name="telephone" placeholder="N° de téléphone">
                                    @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                    
                                    <input type="email" id="login" class="fadeIn second  @error('email') is-invalid @enderror" name="email" placeholder="Email">
                                    @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-goup d-flex">
                                    <input type="text" id="login" class="fadeIn second  @error('cnib') is-invalid @enderror" name="cnib" placeholder="Numéro de CNIB">
                                    @error('cnib')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror 
                                    <select class="second    @error('roles') is-invalid @enderror" name="roles" value="{{ old('roles') }}" >
                                        <option >Choisir le role</option>  
                                        <option value="1" >Parent</option>
                                        <option value="2" >Nounou</option>
                                        <option value="3" >Structure</option> 
                                    </select>
                                        @error('roles')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                </div>
                                <div class="form-goup d-flex">
                                    <input type="password" id="login" class="fadeIn second  @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe">
                                    @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                    <input type="password" id="login" class="fadeIn second  @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirmer MDP">
                                    @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror   
                                </div>
                                <input type="submit" class=" fadeIn btn btn-violet text-white " value="S'inscrire">
                                    @error('libelle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </form> 
                        </div>
                    </div>
                </div> 
            </div> 
        </div> 
    </section>  
 
@endsection

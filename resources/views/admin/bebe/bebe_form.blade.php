@extends('layouts.dash')
@section('content')
<body id="page-top">
    <div id="wrapper">
      <div id="content-wrapper" class="d-flex flex-column ">
        <div id="content ">
          @if(Session::has('message'))
					<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
				   @endif
          <div class="container-fluid  " >
            
            <div class="card-header text-center font-weight-bold"> <i class="text-info fa fa-plus-circle" aria-hidden="true"></i>{{ __(' Nouveau bébé') }}</div>

            <div class="card-body">
                <form method="POST" id="agent_form" action="{{route('bebe.store')}} " enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col form-group">
                          <label class="font-weight-bold">Nom :</label>   
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" placeholder="" value="{{ old('nom') }}">
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                          <label class="font-weight-bold">Prénom(s) :</label>
                          <input type="text" class="form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" placeholder="" value="{{ old('prenom') }}">
                            @error('prenom')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div> 
                        <div class="form-group col">
                            <label class="font-weight-bold">Sexe :</label>
                            <select id="inputState" class="form-control custom-select @error('sexe') is-invalid @enderror" type="text" name="sexe" placeholder="" value="{{ old('sexe') }}">
                              <option> Choose...</option>
                              <option value="homme"> Homme</option>
                              <option value="femme">Femme</option>
                            </select>
                                @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div> 

                    <div class="form-row">
                        <div class="form-group col">
                          <label class="font-weight-bold">Date de naissance :</label>
                          <input type="date" class="form-control @error('dat_naiss') is-invalid @enderror" type="text" name="dat_naiss" placeholder="" value="{{ old('dat_naiss') }}">
                            @error('dat_naiss')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                        <div class="form-group col">
                          <label class="font-weight-bold">Parent 1 :</label>
                          <select id="inputState" class="form-control custom-select @error('user_id') is-invalid @enderror" type="text" name="user_id" placeholder="" value="{{ old('user_id') }}">
                            <option> Choisir...</option>
                              @foreach($parents as $parent)  
                            <option value="{{$parent->id}}">{{$parent->nom}} {{$parent->prenom}}</option>
                              @endforeach
                          </select>
                            @error('user_id')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                      </div>
                        <div class="form-group col">
                            <label class="font-weight-bold">Parent 2 :</label>
                            <input type="text" class="form-control @error('parent2') is-invalid @enderror"  name="parent2" placeholder="" value="{{ old('parent2') }}">
                              @error('parent2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                        </div> 
                    </div>

                    <div class="form-row">
                      <div class="form-group col">
                        <label class="font-weight-bold">Contact parent 2 :</label>
                        <input type="text" class="form-control @error('contact') is-invalid @enderror"  name="contact" placeholder="" value="{{ old('contact') }}">
                          @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                    </div> 
                        <div class="form-group col">
                            <label class="font-weight-bold">Debut de garderie :</label>
                            <input type="date" class="form-control @error('debut_fonction') is-invalid @enderror" type="text" name="debut_fonction" placeholder="" value="{{ old('debut_fonction') }}">
                              @error('debut_fonction')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                        </div>
                        <div class="form-group col">
                            <label class="font-weight-bold">Durée du contrat :</label>
                            <input type="text" class="form-control @error('contrat') is-invalid @enderror" type="text" name="contrat" placeholder="" value="{{ old('contrat') }}">
                                @error('contrat')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                        </div> 
                    </div> 
            
                    <div class="form-row">
                        <div class="form-group col">
                          <label class="font-weight-bold">Photo :</label>
                          <input type="file" class="form-control @error('photo') is-invalid @enderror" type="text" name="photo" placeholder="" value="{{ old('photo') }}">
                              @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                        </div>
                        <div class="form-group col">
                          <label class="font-weight-bold">Nounou (optionel):</label>
                          <input type="text" class="form-control @error('nounou') is-invalid @enderror" type="text" name="nounou" placeholder="" value="{{ old('nounou') }}">
                          @error('nounou')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                            @error('nounou')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                      </div>
                    </div> 
                     
                        <div class="  float-right">
                            <button type="submit" class="btn btn-info">
                                {{ __('Ajouter') }}
                            </button>
                            <button type="reset" class="btn btn-dark">
                                {{ __('Annuler') }}
                            </button>
                             <a  class="btn btn-warning" href=" ">{{ __('Fermer') }}</a>
                        </div>
                        
                </form>
            </div>

            
          </div>
        </div>
      </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
@endsection

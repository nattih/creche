@extends('layouts.dash')
@section('content')
<body id="page-top">
    <div id="wrapper">
      <div id="content-wrapper" class="d-flex flex-column ">
        <div id="content ">
          @if(Session::has('message'))
					<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
				   @endif
          <div class="container-fluid col-8" >
            
            <div class="card-header text-center font-weight-bold"> <i class="text-info fa fa-plus-circle" aria-hidden="true"></i>{{ __(' Nouvelle actualité ou astuce') }}</div>

                <div class="card-body ">
                    <form method="POST" id="agent_form" action="{{route('infos.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                          <div class="form-group col">
                            <label class="font-weight-bold">Entrez la categorie</label>
                            <select class="form-control custom-select @error('categorie_id') is-invalid @enderror" name="categorie_id" value="{{ old('categorie_id') }}" >
                              <option >choisir une categorie</option>
                              @foreach($categories as $categorie)  
                                  <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                              @endforeach
                            </select>
                            @error('categorie_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                          </div>
                            <div class="col form-group">
                              <label class="font-weight-bold">Entre le itre :</label>   
                                <input type="text" class="form-control @error('titre') is-invalid @enderror" type="text" name="titre" placeholder="" value="{{ old('nom') }}">
                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col form-group">
                              <label class="font-weight-bold">Entrez le contenu :</label>
                              <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="" value="{{ old('description') }}" id="" cols="30" rows="10"></textarea>
                                @error('description')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <div class="form-group col">
                              <label class="font-weight-bold">Entrez l'image :</label>
                              <input type="file" class="form-control @error('image') is-invalid @enderror" type="text" name="image" placeholder="" value="{{ old('image') }}">
                                  @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                            </div> 
                        </div> 
                        <div class=" col float-right">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Ajouter') }}
                                </button>
                                <button type="reset" class="btn btn-dark">
                                    {{ __('Annuler') }}
                                </button>
                                 <a  class="btn btn-warning" href="{{route('infos')}}">{{ __('Fermer') }}</a>
                                 {{-- <a  class="btn btn-success" href="{{route('infos')}}">{{ __('Voir la liste') }}</a> --}}
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

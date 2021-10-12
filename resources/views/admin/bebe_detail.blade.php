@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="text-center">
                    <h2>Detail de : {{$bebe->nom}} {{$bebe->prenom}}</h2>
                  </div>
                <div class="  card-body ">
                    <div class="row">
                        <div class="col-7">
                            <img style="height:360px;" src="{{asset('storage').'/'.$bebe->photo}}" class="w-100 h-80 " alt="preuve-recu">
                        </div>
                        <div class="col-5 ">
                            <div class="list-group mt-1">  
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Sexe:</span>   {{$bebe->sexe}}  </div><br>
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Parent 1 </span>  {{$bebe->user->nom}} {{$bebe->user->prenom}} </div><br>
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">contact parent 1 </span>  {{$bebe->user->telephone}}   </div><br>
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Parent 2 </span>  {{$bebe->parent2}}   </div><br>
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Contact parent2 </span>  {{$bebe->contact}}   </div><br>
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Date de naissance: </span> {{$bebe->dat_naiss}}    </div><br>
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Debut garderie: </span> {{$bebe->debut_fonction}}    </div><br>
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Contrat: </span> {{$bebe->contrat}}</div><br>
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Contrat: </span> {{$bebe->nounou}}</div><br>
                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Enregistré le: </span>  {{$bebe->created_at->format('d/m/y à H:m')}}</div><br>
                                
                                <div class="form-group d-flex float-right col-auto">
                                    <a  class="btn btn-warning ml-2 " href="{{route('bebe.liste')}}">{{ __('Fermer') }}</a> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
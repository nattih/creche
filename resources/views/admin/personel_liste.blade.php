@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              @if(Session::has('message'))
               <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
              @endif
                <div class="card-header ">
                  <a class="btn btn-violet btn-info text-white" href=" {{route('membre.form')}} "><span class="bg-info text-white"><i class="fa fa-plus" aria-hidden="true"></i> </span> {{ __('Personnel') }}</a>
                  <h4 class="text-center">liste du personnel</h4>
                </div>
                <div class="table table-responsive p-0 card-body">
                    <table id="example1" class="table table-hover   text-nowrap ">
                      <thead>
                      <tr class="">
                        <th scope="col">N°</th>
                        <th scope="col">Date d'enreg</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Télephone</th>
                        <th scope="col">Email</th>
                        <th scope="col">CNIB</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($personnels as $key=>$personnel)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$parent->created_at->format('d/m/y à H:m')}} </td>
                        <td class="text-bold"> {{$personnel->nom}} </td>
                        <td class="text-bold"> {{$personnel->prenom}} </td>
                        <td class="text-bold"> {{$personnel->telephone}} </td>
                        <td class="text-bold"> {{$personnel->email}} </td>
                        <td class="text-bold"> {{$personnel->cnib}} </td>
                        <td><img src="{{asset('storage').'/'.$personnel->photo}}" style="width:50px;height:50px;" class="bf5 border rounded-circle "></td>
                        <td>{{$personnel->statut}}  </td>
                        <td>
                          <a href=" "><button class="btn btn-success"> <i class="fa fa-eye"></i></button></a>
                          <a href=" "><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                            <form action=" " method="post" class="d-inline">
                              @csrf
                                  @method('DELETE')
                                  <button onclick='return confirm("Voulez-vous vraiment supprimer cet élément?")';  type="submit" class="btn btn-danger d-inline"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                      </tr>
                  </tbody>
                    @endforeach
                </table>
                </div>
                {{-- {{$events->links()}} --}}
            </div>
        </div>
    </div>
</div>
@endsection

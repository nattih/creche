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
                    
                  <h4 class="text-center">liste de nos nounous</h4>
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
                        @foreach($nounous as $key=>$nounou)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$nounou->created_at->format('d/m/y à H:m')}} </td>
                        <td class="text-bold"> {{$nounou->nom}} </td>
                        <td class="text-bold"> {{$nounou->prenom}} </td>
                        <td class="text-bold"> {{$nounou->telephone}} </td>
                        <td class="text-bold"> {{$nounou->email}} </td>
                        <td class="text-bold"> {{$nounou->cnib}} </td>
                        <td><img src="{{asset('storage').'/'.$nounou->photo}}" style="width:50px;height:50px;" class="bf5 border rounded-circle "></td>
                        <td>{{$nounou->statut}}  </td>
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

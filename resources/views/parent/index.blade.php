@extends('layouts.menu')
@section('contenu') 
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
      <div class="mt-2">
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
         @endif
      </div>
      <div class="section-title">
        <h2>Espace PARENT</h2>
        <p>BIENVENUE SUR VOTRE ESPACE </p>
      </div>  
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if (session('password_status'))
        <div class="alert alert-success" role="alert">
            {{ session('password_status') }}
        </div>
    @endif
    <div class="row ">
        <div class="col-md-4 text-center">
            <div class="card " >
                <div class=""> 
                    <div class=" " >
                        <img class="rounded-circle" style="height:262.5px;" src="{{asset('storage').'/'. Auth::user()->photo}}" alt="...">
                            <h5 class="text-info "><strong>{{ __(auth()->user()->nom)}} {{ __(auth()->user()->prenom)}} </strong> </h5>              
                    </div>
                    <p class=" text-center">
                          {{ __(auth()->user()->email)}}
                    </p>
                    <p class=" text-center">
                        {{ __('contact:')}}
                        {{ __(auth()->user()->telephone)}}
                  </p>
                </div>
                <div class="">
                    <hr>
                    <div class="row  card-body">
                             
                            <div class="col-5      ">
                                <h5>{{ __('Contrat:') }}
                                    <small> </small>
                                </h5>
                            </div>
                            <div class="col-7">
                                <h5>{{ __('Statut:') }}
                                    <small> </small>
                                </h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>  
    <div class="col-md-8 text-center">
        <form class="col-md-12" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="">
                    <h5 class="title">{{ __('Changer de photo') }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Photo') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="file" name="photo" class="form-control" placeholder="photo" value="">
                            </div>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('photo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info  ">{{ __('Changer') }}</button>
                        </div>
                    </div>
            </div>
        </form><br> <br>
        <form class="col-md-12" action=" {{ route('password.update') }}" method="POST" >
            @csrf
            <div class="card">
                <div class="">
                    <h5 class="title">{{ __('Changer de password') }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Ancien password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="old_password" class="form-control" placeholder="Ancien password" required>
                            </div>
                            @if ($errors->has('old_password'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('old_password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Nouveau password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Confirmer password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer password " required>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info  ">{{ __('Changer') }}</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>

    </div>
  </section><!-- End Testimonials Section -->

@endsection
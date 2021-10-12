@extends('layouts.menu')
@section('contenu') 
    <section id="about" class="about">
        <div class="container" data-aos="fade-up"> 
            <div class="mt-2">
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
               @endif
            </div>
            <div class="section-title">
                <h2>Connexion</h2>
                <p>Connectez-vous</p>
            </div> 
            <div class="row">
                <div class="col-6">
                  <img class="img-fluid" src="images/administrateur.png" alt="">
                </div>
                <div class="col-4">
                  <div class="wrapper fadeInDown">
                      <div id="formContent">  
                          <form action="{{route('login')}}" method="post">
                          @csrf
                          <input type="email" id="login" required class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror 
                          <input type="password" required id="password" class="fadeIn second @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe">
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
          
                          <div class=" ">
                              <div class="form-check">
                                  <input class="form-check-input font-weight-bold" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label class="form-check-label font-weight-bold text-primary" for="remember">
                                              {{ __('Se souvenir de moi!') }}
                                  </label>
                              </div>
                          </div>
                          <input type="submit" class=" btn btn-violet text-white" value="Se connecter">
                          </form>
                      </div>
                  </div>
                </div>
              </div>
        </div> 
    </section>  
 
@endsection

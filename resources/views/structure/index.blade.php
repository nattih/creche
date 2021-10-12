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
        <h2>Espace Structure</h2>
        <p>BIENVENUE SUR VOTRE ESPACE </p>
      </div> 

    </div>
  </section><!-- End Testimonials Section -->

@endsection
@extends('layouts.menu')
@section('contenu')
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Nos astuces & conseils</h2>
        <p>ASTUCES & CONSEILS</p>
      </div> 
  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us  ">
    <div class="container-fluid d-flex " data-aos="fade-up">
      @foreach ($astuces as $astuce)
      <div class="card card-body m-1">
        <img src="{{asset('storage').'/'.$astuce->image}}" style="width:300px;height:200px;" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">{{$astuce->titre}}</h5>
          <p class="card-text">{{$astuce->description}}</p>
          <a href="#" class="btn btn_voir">Voir</a>
        </div>
      </div>
      @endforeach

    </div>
  </section><!-- End Why Us Section -->
@endsection
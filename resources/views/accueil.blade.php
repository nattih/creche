@extends('layouts.menu')
@section('contenu')
<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(images/adorable-bebe-africain-souriant_58409-9331.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Bienvenue à <span>Ma Crèche</span></h2>
            <p class="animate__animated animate__fadeInUp"> Plus besoin de vous faire du soucis pour la garde de vos enfants pendant les périodes d'occupation</p>
            <a href="#why-us" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(images/1.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Votre safisfaction, notre préocupation</h2>
            <p class="animate__animated animate__fadeInUp">Nous vous offrons des services de qualités pour votre bonheur.</p>
            <a href="{{route('service')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url(images/When-Do-Babies-Smile-FT.webp)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Je choisi MaCreche</h2>
            <p class="animate__animated animate__fadeInUp"> N'hesité à nous contacter par toutes les possibilités que nous vous offrons et nous repondrons</p>
            <a href="{{route('contact')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</section><!-- End Hero -->

   

  

  <section>
    <div class="text-center text-fluid">
      <a class="btn ours" href=" ">Qui sommes nous?</a>
    </div>
  </section>
 <!-- ======= Why Us Section ======= -->
 <section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in" data-aos-delay="100">
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      </div>

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

        <div class="content">
          <h3 class="text-center"> <strong>Située à Ouagadougou au sein d’une résidence sécurisée, 
            MaCreche dispose d'un cadre idéal pour le bonheur des enfants et surtout de vous, les parents.</strong></h3>
        </div>
        <div class="accordion-list">
          <ul>
            <li>
              <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Notre spécificité? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  Dans notre école, les outils pédagogiques utilisés favorisent le développement du raisonnement et stimulent le désir d'apprendre. Les activités au programme sont fascinantes pour les enfants car elles privilégient l'exploration sensorielle, la créativité  et l'initiative.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span>  Pourquoi choisir MaCreche ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                  Nous offrons aux enfants un milieu d'apprentissage stimulant qui leur permettra d'acquérir une excellente éducation tout en favorisant la concentration et le plein épanouissement personnel.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Comment rentrer en contact avec nous? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p>
                   Nous sommes disponible sur Facebook, linkedin. Aussi ils suffit d'appuyer sur le bouton contact dans le menu pour nous laisser votre message.
                   Aussi Creer votre compte pour avoir accès à notre espace Forum. 
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>

    </div>

  </div>
</section><!-- End Why Us Section -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-6"> 
          <div class="text-center section-title">
            <h2></h2>
            <p>Nos actualités</p>
          </div>
          @foreach ($actus as $actu)
          <div class="card card-body ">
            <img src="{{asset('storage').'/'.$actu->image}}" style="width:500px;height:300px;" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">{{$actu->titre}}</h5>
              <p class="card-text">{{$actu->description}}</p>
              <a href="{{route('actualites')}}" class="btn btn_voir">Voir toutes les actualités</a>
            </div>
          </div>
          @endforeach
          
        </div>
        <div class="col-6">
          <div class="text-center section-title">
            <h2></h2>
            <p>Astuces & Conseils</p>
          </div>
          @foreach ($astuces as $astuce)
          <div class="card card-body ">
            <img src="{{asset('storage').'/'.$astuce->image}}" style="width:500px;height:300px;" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">{{$astuce->titre}}</h5>
              <p class="card-text">{{$astuce->description}}</p>
              <a href="{{route('astuces')}}" class="btn btn_voir">Voir tous les astuces et conseils</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section id="why-us" class="why-us section-bg">
    <div class="entity entity-paragraphs-item paragraphs-item-bulle-bleue paragraph-stats">
      <div class="text-center section-title">
        <h2></h2>
        <p>Quelques chiffres</p>
      </div>
      <div class="container wa">
          <div class="row">
            <div class="col-lg-4 col-md-6 stats_col">
              <div class="image">
                <img class="img-responsive border rounded-circle" src="/images/1.jpg" width="150" height="120" alt="" />
              </div>
              <div class="count-box text-white">
                <div >Plus de <span class="counter" data-toggle="counter-up"> 50</span></div>
                <p>Enfants accueillis chaque jours</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 stats_col">
              <div class="image">
                <img class="img-responsive border rounded-circle" src="/images/1.jpg" width="150" height="120" alt="" />
              </div>
              <div class="count-box text-white">
                <div >Au moins <span class="counter" data-toggle="counter-up"> 10</span></div>
                <p>Structres nous font appel chaque mois</p>
              </div>
            </div><div class="col-lg-4 col-md-6 stats_col">
              <div class="image">
                <img class="img-responsive border rounded-circle" src="/images/1.jpg" width="150" height="120" alt=""/>
              </div>
              <div class="count-box text-white">
                <div class="counter"><span data-toggle="counter-up">95</span>%</div>
                <p>Des parents satisfaits de notre services</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section> <!-- End Why Us Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team ">
    <div class="container" data-aos="fade-up">

      <div class="section-title text-center">
        <h2></h2>
        <p>Notre équipe</p>
      </div>

      <div class="row">

        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
          <div class="member" data-aos="zoom-in" data-aos-delay="400">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->
  <!-- ======= liste partenaires Section ======= -->
  
  <section class="section-bg " id="testimonials" class="testimonials  ">
    <div class="text-center section-title ">
      <h2></h2>
      <p>Nos partenaires</p>
    </div>
    <div class="container " data-aos="fade-up">
      <div class="owl-carousel testimonials-carousel ">

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="images/tech4-logo.jpg" style="width:150px;height:100px;" class="" alt="">
          </div>
        </div>

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="images/simplon-logo.jpg" style="width:150px;height:100px;" class="" alt="">
          </div>
        </div>

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="images/makesense-logo.jpg" style="width:150px;height:100px;" class="" alt="">
          </div>
        </div>

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="images/ird-logo.jpg" style="width:150px;height:100px;"class="" alt="">
          </div>
        </div>

        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="images/ministere-logo.jpg" style="width:150px;height:100px;" class="" alt="">
          </div>
        </div>
      </div>

    </div>
  </section><!-- End liste partenaires Section -->
@endsection
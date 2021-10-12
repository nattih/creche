<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ma Creche</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo-creche.png')}}" rel="icon">
  <link href="{{asset('assets/img/logo-creche.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('style/css/style.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"> 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center ">
      <a href="/">
        <img class="logo mr-auto" src="images/logo-creche.png" width="50px" height="50px" alt="">
      </a> 
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('accueil')}}">ACCUEIL</a></li>
          <li><a href="{{route('actualites')}}">ACTUALITES</a></li>  
          <li class=""><a href="{{route('service')}}">NOS SERVICES</a> </li>
          <li class=""><a href="{{route('astuces')}}">ASTUCES</a> </li>
          <li class=""><a href="{{route('recrutement')}}">RECRUTEMENT</a> </li>
          <li><a href="{{route('contact')}}">CONTACTS</a></li> 
          @guest
          <li class=" "><a href="{{route('register')}}">S'INSCRIRE</a> 
          </li>
          <li class=" "><a href="{{route('login')}}">SE CONNECTER</a>
          </li>
          @endguest
          @auth 
          <li>
            <a  href=" {{ route('parent.page') }}">
              MON COMPTE
            </a> 
          </li>
          <li>
            <a  href=" {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              DECONNEXION
            </a> 
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>
          @endauth
        </ul>
      </nav><!-- .nav-menu -->
      <a href="{{route('forum')}}" class="get-started-btn">Forum</a>
    </div>
  </header><!-- End Header -->
  
  <main class="mt-5" id="main" >
    @yield('contenu')
  </main>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>MaCreche</h3>
              <p class="pb-3"><em>Pour vos besion , n'hésitez plus et nous sommes là pour vous !</em></p>
              <p>
                A108 Rue ZOANGA <br>
                NY 535022, Ouagadougou<br><br>
                <strong>Télephone:</strong> +226 76 89 65 45<br>
                <strong>Email:</strong> info@macreche.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Astuces</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terme de contrat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politique & confidentialité</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A la creche</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ma nounou & moi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Halte galerie</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Conseil & assistance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Formation & placement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Joli bébé</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Notre newsletter</h4>
            <p>Inscrivez-vouspour bénficier de nos actualités et astuces pour vous aider dans vos quotidiens au foyer</p>
            <form action="" method="post">
              <input type="email" name="email">
              <input type="submit" value="Souscrire">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Creche</span></strong>.Tout droit réservé
      </div>
      <div class="credits">  
        Designed by <a href=" ">Rafiatou ZOANGA</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('backend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('backend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('backend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.7.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">PPDB</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<!-- .navbar -->
  @include('layouts.navbar')
    </div>
  </header><!-- End Header -->

  <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tentang</h2>
          <ol>
            <li><a href="home">Home</a></li>
            <li>Tentang</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>SMKN 3 Kota Bandung</h2>
            <h3>Sedang mencari Sekolah yang seru?</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            SMKN 3 Kota Bandung saja, kamu bisa memilih jurusan sesuai passion dengan pilihan jurusan super komplit.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Sudah terjamin Pendidikannya.</li>
              <li><i class="ri-check-double-line"></i> Sudah terjamin Kualitasnya.</li>
              <li><i class="ri-check-double-line"></i>Sudah terjamin Kedisiplinannya.</li>
            </ul>
            <p class="fst-italic">
            Di masa pandemi ini ingin tetap produktif tapi malas ke kesekolah? SMKN 3 Kota Bandung siap menjadi solusi. 
            Kami adalah Sekolah Menegah Atas yang menerapkan proses belajar full online. Jadi kamu bisa Sekolah dari rumah, tanpa perlu kemana-mana.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('backend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('backend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('backend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('backend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('backend/assets/js/main.js"></script>

</body>

</html> 
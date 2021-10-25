<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Aplikasi e-PPP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ ('icon.png') }}" rel="icon">
    <link href="{{asset('asseta/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('asseta/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asseta/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('asseta/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('asseta/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('asseta/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('asseta/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('asseta/assets/css/style.css')}}" rel="stylesheet">

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>

    <!-- =======================================================
  * Template Name: OnePage - v2.2.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
 <img src="logo.png" style="width: 1.5cm;" alt="...">&nbsp &nbsp &nbsp &nbsp
            <img src="presisi.png" style="width: 7cm;" alt="..."> <br>
            <h1 class="logo mr-auto"><a href="" style="font-family:Roboto Slab; font-weight:bolder"
                    style="color:#33150e;"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="">Beranda</a></li>
                    <li><a href="#informasi">Informasi</a></li>
                    <li><a href="#berita">Berita</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav><!-- .nav-menu -->

            <a href="{{route('login')}}" class="get-started-btn" style="background-color: #261412;">Masuk</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background-image: url('/background-login.jpg')";>
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <img src="{{ 'logoeppp.png'}}" class="mx-auto" style="width: 400px; margin:auto"
                        class="img-fluid" alt=""><br>
                    <h1 style="color:white;font-family:ar">Selamat datang di e-PPP</h1>
                    <h2 style="color:white">BIRO SDM POLDA BENGKULU</h2>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('login')}}" class="btn-get-started" style="background-color: #261412;">Masuk</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="informasi" class="informasi">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 style="color:#33150e;">Informasi</h2>
                    <p><i style="font-weight: bold;">n.</i> sekumpulan data atau fakta yang diorganisasi atau diolah
                        dengan cara tertentu sehingga mempunyai arti bagi penerima</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                        <img src="logoeppp.png" class="mx-auto" style="width: 500px; margin:auto" class="img-fluid"
                            alt=""><br>
                    </div>
                    <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <?php foreach ($info as $inf) : ?>
                        <h2 style="color:#33150e;"><?php echo $inf->judul ?></h2>
                        <p style="text-align: justify;">{!! $inf->informasi !!}</p>
                        <hr>
                        <?php endforeach; ?>
                        <h2 style="color:#33150e;">PERKAP NOMOR 3 TAHUN 2011</h2>
                        <p style="text-align: justify;">Tentang Pemberian Penghargaan di Lingkungan Kepolisian Negara
                            Republik Indonesia. Lihat atau unduh dokumen 
                            <a href="{{route('tampiluu')}}" style="color:blue;">disini.</a></p>
                        <hr>
                    </div>
                </div>
            </div>
        </section><!-- End Sevices Section -->

        <main id="main">
            <!-- ======= About Section ======= -->
            <!-- <section id="informasi2" class="informasi2">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 style="color:#33150e;">PERATURAN KEPALA KEPOLISIAN NEGARA REPUBLIK INDONESIA</h2>
                    <p><i style="font-weight: bold;">n.</i> PEMBERIAN PENGHARGAAN DI LINGKUNGAN KEPOLISIAN NEGARA REPUBLIK INDONESIA</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <center>
                    <iframe src="{{ asset('assets/img/PERKAPPENG.PDF')}}" width="1000" height="650"></iframe>
                        </center>
                    </div>
                </div>
            </div>
        </section> -->
            <!-- End Sevices Section -->

            <main id="main">
                <!-- ======= About Section ======= -->
                <section id="berita" class="berita">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h2 style="color:#33150e;">Berita</h2>
                            <p> <i style="font-weight: bold;">n.</i> cerita atau keterangan mengenai kejadian atau
                                peristiwa yang hangat; kabar; pemberitahuan; pengumuman </p>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 my-5 mx-3">
                            @foreach ($berita as $ber)
                            <div class="col mb-6 mt-4">
                                <div class="card h-100">
                                    <br>
                                    <img src="{{ $ber->gambar}}" height="200" class="rounded mx-auto d-block">
                                    <div class="card-body">
                                        <h2 class="card-title text-center" style="font-size: 23px; font-weight:bolder">
                                            {{ $ber->judul }}</h2>
                                        <p class="card-text text-justify">{!! $ber->isi !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section><!-- End Sevices Section -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2 style="color:#33150e;">Kontak</h2>
                        </div>

                        <div>
                            <iframe style="border:0; width: 100%; height: 270px;"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d32096.37102362109!2d102.30991075064493!3d-3.835385945581641!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e09afd7d47ee842!2sPolda%20Bengkulu!5e0!3m2!1sid!2sid!4v1623135385449!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div>

                        <div class="container">
                            <div class="row row-cols-3">
                                <div class="col-lg-4">
                                    <div class="info">
                                        <div class="email">
                                            <i style="color: white; background-color:#33150e;"
                                                class="icofont-google-map"></i>
                                            <h4 style="color: black;">Alamat:</h4>
                                            <p style="color: #99582a;">Jl. H. Adam Malik No.KM. 9, Sido Mulyo, Kec.
                                                Gading Cemp., Kota Bengkulu, Bengkulu 38211</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="info">
                                        <div class="email">
                                            <i style="color: white; background-color:#33150e;"
                                                class="icofont-envelope"></i>
                                            <h4 style="color: black;">Email:</h4>
                                            <p style="color: #99582a;">sdmpoldabengkulu2016@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="info">
                                        <div class="phone">
                                            <i style="color: white; background-color:#33150e;"
                                                class="icofont-phone"></i>
                                            <h4 style="color: black;">Telepon:</h4>
                                            <p style="color: #99582a;">(0736) 51213</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section><!-- End Contact Section -->

            </main><!-- End #main -->

            <!-- ======= Footer ======= -->
            <footer id="footer">
                <div class="container d-md-flex py-4">

                    <div class="mr-md-auto text-center text-md-left">
                        <div class="copyright">
                            &copy; Copyright <strong><span>SDM Polda Bengkulu</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                        </div>
                    </div>
                    <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="https://twitter.com/poldabengkulu" target="_blank" style="background-color: #bb9457;"
                            class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/PoldaBengkulucamkoha" target="_blank"
                            style="background-color: #bb9457;" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/polda_bengkulu/" target="_blank"
                            style="background-color: #bb9457;" class="instagram"><i class="bx bxl-instagram"></i></a>
                    </div>
                </div>
            </footer><!-- End Footer -->

            <a href="#" class="back-to-top"><i class="ri-arrow-up-line" style="background-color: #BB9457"></i></a>
            <div id="preloader"></div>

            <!-- Vendor JS Files -->
            <script src="{{ asset('asseta/assets/vendor/jquery/jquery.min.js') }}"> </script>
            <script src="{{asset('asseta/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}">
            </script>
            <script src="{{asset('asseta/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
            <script src="{{asset('asseta/assets/vendor/php-email-form/validate.js')}}"></script>
            <script src="{{asset('asseta/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('asseta/assets/vendor/counterup/counterup.min.js')}}"></script>
            <script src="{{asset('asseta/assets/vendor/venobox/venobox.min.js')}}"></script>
            <script src="{{asset('asseta/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
            <script src="{{asset('asseta/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
            <script src="{{asset('asseta/assets/vendor/aos/aos.js')}}"></script>

            <!-- Template Main JS File -->
            <script src="{{asset('asseta/assets/js/main.js')}}"></script>

</body>

</html>

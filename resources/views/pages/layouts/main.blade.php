<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Pariwisata Simeulue</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pariwisata" name="keywords">
    <meta content="Pariwisata Simelue" name="description">

    <!-- Favicon -->
    <link href="{{ asset('pariwisata.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('pages/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('pages/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">PARI</span>WISATA</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link  {{ $active == 'beranda' ? 'active' : '' }}">Beranda</a>
                        <a href="{{ url('/blog') }}" class="nav-item nav-link {{ $active == 'blog' ? 'active' : '' }}">Blog</a>
                        <a href="{{ url('/tempat-wisata') }}" class="nav-item nav-link {{ $active == 'Tempat Wisata' ? 'active' : '' }}">Tempat Wisata</a>
                        <a href="{{ url('/tentang') }}" class="nav-item nav-link {{ $active == 'Tentang' ? 'active' : '' }}">Tentang</a>
                        <a href="{{ url('/kontak') }}" class="nav-item nav-link {{ $active == 'Kontak' ? 'active' : '' }}">Kontak</a>
                        <a href="{{ url('/login') }}" class="nav-item nav-link {{ $active == 'Login' ? 'active' : '' }}">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    @yield('content')



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="#!" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">PARI</span>WISATA</h1>
                </a>
                {{-- <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor</p> --}}
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Ikuti Kami</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Layanan Kami</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destinasi Terbaik</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Tempat Wisata</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Tentang</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Kontak</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Hubungi Kami</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Simeulue, Indonesia</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                {{-- <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5> --}}
                <div class="d-flex flex-column justify-content-start">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510176.308367208!2d95.60521071754869!3d2.5868837007680074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303cb3ae549a918f%3A0x3039d80b220d200!2sKabupaten%20Simeulue%2C%20Aceh!5e0!3m2!1sid!2sid!4v1665890667122!5m2!1sid!2sid" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#!">2022</a>. All Rights Reserved.</a>
                </p>
            </div>
            {{-- <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div> --}}
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('pages/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('pages/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('pages/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('pages/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('pages/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('pages/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('pages/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('pages/js/main.js') }}"></script>
</body>

</html>
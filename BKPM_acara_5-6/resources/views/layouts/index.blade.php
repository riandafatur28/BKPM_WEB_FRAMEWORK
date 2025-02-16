<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Butterfly Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

    <!-- Main CSS File -->
    <link href={{ asset('assets/css/main.css') }} rel="stylesheet">

    <!-- =======================================================
  * Template Name: Butterfly
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header>
        <header id="header" class="header d-flex align-items-center sticky-top">
            @yield('header')
        </header>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">
            @yield('hero')
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            @yield('about')
        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
            @yield('stats')
        </section><!-- /Stats Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">
            @yield('client')
        </section><!-- /Clients Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">
            @yield('service')
        </section><!-- /Services Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            @yield('service')
        </section><!-- /Portfolio Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">
            @yield('testimoni')
        </section><!-- /Testimonials Section -->

        <!-- Team Section -->
        <section id="team" class="team section">
            @yield('team')
        </section><!-- /Team Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">
            @yield('gallery')
        </section><!-- /Gallery Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            @yield('contact')
        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">
        @yield('footer')
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>
    <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
    <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
    <script src={{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}></script>
    <script src={{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}></script>
    <script src={{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>

    <!-- Main JS File -->
    <script src={{ asset('assets/js/main.js') }}></script>

</body>

</html>

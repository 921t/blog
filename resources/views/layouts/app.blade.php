<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sensive Blog - Home</title>
    <link rel="icon" href="{{ asset('sensive') }}/img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('sensive') }}/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('sensive') }}/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('sensive') }}/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('sensive') }}/vendors/linericon/style.css">
    <link rel="stylesheet" href="{{ asset('sensive') }}/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('sensive') }}/vendors/owl-carousel/owl.carousel.min.css">

    <link rel="stylesheet" href="{{ asset('sensive') }}/css/style.css">
</head>
<body>
<!--================Header Menu Area =================-->
@include('layouts._header')
<!--================Header Menu Area =================-->

<main class="site-main">
    <!--================Hero Banner start =================-->
    <section class="mb-30px">
        <div class="container">
            <div class="hero-banner">
                <div class="hero-banner__content">
                    <h3>Tours & Travels</h3>
                    <h1>Amazing Places on earth</h1>
                    <h4>December 12, 2018</h4>
                </div>
            </div>
        </div>
    </section>
    <!--================Hero Banner end =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="section-margin">
        <div class="container">
            <div class="row">
                @yield('content')

                <!-- Start Blog Post Siddebar -->
                @include('layouts._sidebar')
            </div>
            <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
</main>

<!--================ Start Footer Area =================-->
@include('layouts._footer')
<!--================ End Footer Area =================-->

<script src="{{ asset('sensive') }}/vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="{{ asset('sensive') }}/vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{ asset('sensive') }}/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ asset('sensive') }}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset('sensive') }}/js/mail-script.js"></script>
<script src="{{ asset('sensive') }}/js/main.js"></script>
@yield('scriptsAfterJs')
</body>
</html>

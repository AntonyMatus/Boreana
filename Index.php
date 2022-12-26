<?php

    require 'admin/backend/connection.php';

    $sql = "SELECT * FROM lots_table"; 
    $query = $connection->prepare($sql); 
    $query->execute();
    $lots = $query->fetchAll(PDO::FETCH_OBJ);
    
?>

<!doctype html>
<html class="no-js" lang="en" style="scroll-behavior: smooth;">

<head>
    <title>Boreana Townhouses</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Búho Solutions">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="Boreana es un complejo moderno de 108 townhouses ubicados en una zona de alta plusvalía en la ciudad de Mérida, Mx.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="landing/images/logos/favicon.svg">
    <link rel="apple-touch-icon" href="landing/images/logos/favicon.svg">
    <link rel="apple-touch-icon" sizes="72x72" href="landing/images/logos/favicon.svg">
    <link rel="apple-touch-icon" sizes="114x114" href="landing/images/logos/favicon.svg">
    <!-- style sheets and font icons -->
    <link rel="stylesheet" type="text/css" href="landing/css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="landing/css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="landing/css/style.css" />
    <link rel="stylesheet" type="text/css" href="landing/css/responsive.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" href="landing/rs-plugin/css/settings.css" type="text/css">
    <link rel="stylesheet" href="landing/css/rev-settings.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css" />
    <!-- Toast -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
    <!-- Alpine -->
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>


</head>

<body data-mobile-nav-style="classic" x-data="handlerContact()">
    <!-- start header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top navbar-boxed header-reverse-scroll">
            <div class="container-fluid nav-header-container">
                <div class="col-5 col-lg-2 ps-lg-0 me-auto me-lg-0" style="width: 250px; height: auto; ">
                    <a class="navbar-brand" href="index.html">
                        <img src="landing/images/logos/logowhite.svg" alt="" class="default-logo">
                        <img src="landing/images/logos/logo.svg" alt="" class="alt-logo">
                        <img src="landing/images/logos/logo.svg" class="mobile-logo float-left" alt="">
                    </a>
                </div>
                <div class="col-auto col-lg-8 md-position-initial">
                    <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-right" id="navbarNav">
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown megamenu">
                                <a href="#intro" class="nav-link text-uppercase">Boreana</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#boreana" class="nav-link text-uppercase">Amenidades</a>
                            </li>
                            <li class="nav-item dropdown megamenu">
                                <a href="#Distribución" class="nav-link text-uppercase">Smart Townhouse</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#imagenes" class="nav-link text-uppercase">Galería</a>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#cotizador" class="nav-link text-uppercase">Cotizador</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#ubicacion" class="nav-link text-uppercase">Ubicación</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <!-- end header -->


    <section class="p-0  border-color-black mobile-height">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">

            <div class="carousel-inner">
                <div class="carousel-item active descript-respon">
                    <img src="landing/images/sliders/slider1.jpg" class="d-block w-100 img-responsive img-fluid" alt="...">
                    <div class="carou-pad carousel-caption d-block d-sm-blok">
                        <div class="container h-100 responsive_orange ">
                            <div class="row justify-content-center h-100 align-items-center align-self-center">
                                <div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">
                                    <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-white3 text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom">Vive mejor, vive tu sueño</span>
                                    <h1 class="alt-font font-weight-800 text-white2 text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-100 mx-auto">Vive Boreana</h1>
                                    <a href="#intro" class="a-btn-oc btn btn-fancy btn-large btn-yellow btn-box-shadow align-self-center">Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item descript-respon">
                    <img src="landing/images/sliders/slider2.jpg" class="d-block w-100 img-responsive img-fluid" alt="...">
                    <div class="carou-pad2 carousel-caption d-block d-sm-blok">
                        <div class="container h-100 responsive_orange">
                            <div class="row justify-content-center h-100">
                                <div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">
                                    <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-white3 text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom">Ubicación Privilegiada</span>
                                    <h1 class="alt-font font-weight-800 text-white2 text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-100 mx-auto">zona norte de Mérida</h1>
                                    <a href="#soluna" class="a-btn-oc btn btn-fancy btn-large btn-yellow btn-box-shadow align-self-center">Ver Unidades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item descript-respon">
                    <img src="landing/images/sliders/slider3.jpg" class="d-block w-100 img-responsive img-fluid" alt="...">
                    <div class="carou-pad carousel-caption d-block d-sm-blok">
                        <div class="container h-100 responsive_orange">
                            <div class="row justify-content-center h-100">
                                <div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">
                                    <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-white3 text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom">Comprometidos con la calidad</span>
                                    <h1 class="alt-font font-weight-800 text-white2 text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-100 mx-auto">Acabados de lujo</h1>
                                    <a href="#plantas" class="a-btn-oc btn btn-fancy btn-large btn-yellow btn-box-shadow align-self-center">Ver amenidades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item descript-respon">
                    <img src="landing/images/sliders/slider4.jpg" class="d-block w-100 img-responsive img-fluid" alt="...">
                    <div class="carou-pad carousel-caption d-block d-sm-blok">
                        <div class="container h-100 responsive_orange">
                            <div class="row justify-content-center h-100">
                                <div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">
                                    <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-white3 text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom">108 Townhouses</span>
                                    <h1 class="alt-font font-weight-800 text-white2 text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-100 mx-auto">SMART TOWNHOUSES</h1>
                                    <a href="#plantas" class="a-btn-oc btn btn-fancy btn-large btn-yellow btn-box-shadow align-self-center">Ver amenidades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item descript-respon">
                    <img src="landing/images/sliders/slider5.jpg" class="d-block w-100 img-responsive img-fluid" alt="...">
                    <div class="carou-pad carousel-caption d-block d-sm-blok">
                        <div class="container h-100 responsive_orange">
                            <div class="row justify-content-center h-100">
                                <div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">
                                    <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-white3 text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom">Comprometidos con la calidad</span>
                                    <h1 class="alt-font font-weight-800 text-white2 text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-100 mx-auto">Acabados de lujo</h1>
                                    <a href="#plantas" class="a-btn-oc btn btn-fancy btn-large btn-yellow btn-box-shadow align-self-center">Ver amenidades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item descript-respon">
                    <img src="landing/images/sliders/slider6.jpg" class="d-block w-100 img-responsive img-fluid" alt="...">
                    <div class="carou-pad carousel-caption d-block d-sm-blok">
                        <div class="container h-100 responsive_orange">
                            <div class="row justify-content-center h-100">
                                <div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">
                                    <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-white3 text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom">MÁS DE 6 AMENIDADES PARA DISFRUTAR</span>
                                    <h1 class="alt-font font-weight-800 text-white2 text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-100 mx-auto">CaSA CLUB</h1>
                                    <a href="#plantas" class="a-btn-oc btn btn-fancy btn-large btn-yellow btn-box-shadow align-self-center">Ver amenidades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </section>
    <section class="half-section margin-four-top">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">

                <!-- start feature box item -->
                <div class="col md-margin-40px-bottom xs-margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                        <div class="feature-box-icon margin-30px-right line-height-0px lg-margin-25px-right">
                            <img id="icons" src="landing/images/icons/Recurso 2.svg">
                        </div>
                        <div class="feature-box-content line-height-22px">
                            <span>Complejo Eco-Friendly</span>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col xs-margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                        <div class="feature-box-icon margin-30px-right line-height-0px lg-margin-25px-right">
                            <img id="icons" src="landing/images/icons/Recurso 3.svg">
                        </div>
                        <div class="feature-box-content line-height-22px">
                            <span>Equipados con paneles</span>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.8s">
                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                        <div class="feature-box-icon margin-30px-right line-height-0px lg-margin-25px-right">
                            <img id="icons" src="landing/images/icons/Recurso 4.svg">
                        </div>
                        <div class="feature-box-content line-height-22px">
                            <span>Acceso con código QR</span>
                        </div>
                    </div>
                </div>
                <!-- end feature box item-->
            </div>
        </div>
    </section>

    <section id="intro" class="overflow-visible bg-white cover-background wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6 col-md-10  lg-margin-30px-top md-margin-9-rem-bottom sm-margin-9-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">

                    <div class="w-100 overflow-hidden position-relative md-w-100 h-500px">
                        <img class="h-500px" loading="lazy" src="landing/images/introduccion/img1.jpg" alt="" />
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 col-md-10 wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="alt-font font-weight-500 margin-30px-bottom d-flex"><span class="flex-shrink-0 w-30px h-1px bg-dark opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-dark text-uppercase">108 SMART TOWNHOUSES </span></div>
                    </div>
                    <h5 class="alt-font text-uppercase text-dark font-weight-700 w-85 margin-30px-bottom xl-w-100">VIVE BOREANA<img id="tip1" src="landing/tipografias/Tu-lugar-ideal.svg" alt=""> </h5> <br><br>
                    <p class="w-75 xl-w-100 text-dark">Boreana es un complejo moderno de 108 townhouses ubicados en una zona de alta plusvalía en la ciudad de Mérida. <br> <br> Gracias a sus atributos y características innovadoras, Boreana es el lugar ideal para comenzar a vivir de manera sostenible, ciudando el medio ambiente y aprovechando los beneficios que el IoT (Internet of things) nos ofrece.</p>
                    <a href="#contacto" class="btn btn-fancy btn-large btn-yellow btn-box-shadow  margin-20px-top">contacto</a>
                </div>
            </div>
        </div>
    </section>
    <!-- start section -->
    <section class="big-section overlap-height wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center overlap-gap-section">
                <div class="col-12 col-lg-7 col-md-8 order-md-2 order-lg-1 sm-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                    <h5 class="alt-font text-uppercase text-dark font-weight-700 w-85 margin-30px-bottom xl-w-100">108 SMART TOWNHOUSES<img id="tip11" src="landing/tipografias/Un-lugar-sostenible.svg" alt=""> </h5><br><br>
                    <p class="w-80 lg-w-100">Cada townhouse cuenta con páneles solares, y equipos preparados para instalaciones domóticas; previendo un gran ahorro en el consumo de energía eléctrica y otorgándole el carácter de vivienda inteligente.</p>
                    <br>
                    <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 align-items-center">
                        <!-- start counter item -->
                        <div class="col text-center sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                            <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0" style="color: #000000" data-to="108"></h4>
                            <span class="alt-font text-uppercase text-small d-block margin-5px-top" style="color: #000000;">Townhouses</span>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col text-center sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                            <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0" style="color: #000000" data-to="115"></h4>
                            <span class="alt-font text-uppercase text-small d-block margin-5px-top" style="color: #000000;">m<sup>2</sup> terreno</span>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col text-center xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                            <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0" style="color: #000000" data-to="161"></h4>
                            <span class="alt-font text-uppercase text-small d-block margin-5px-top" style="color: #000000;">m<sup>2</sup> construcción </span>
                        </div>
                        <!-- end counter item -->

                    </div>
                </div>
                <div class="col-12 col-lg-5 order-md-1 order-lg-2 md-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                    <img loading="lazy" src="landing/images/introduccion/img2.jpg" alt="" class="border-radius-6px" />
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->

    <!-- end section -->


    <section id="boreana" class="bg-light-gray wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6 col-md-9 p-0 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="position-relative">
                        <div class="swiper-container slider-one-slide black-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="landing/images/boreana/img.jpg" alt="">
                                        <!-- <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                                <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">01</h4>
                                                </div>
                                                <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-shamrock-green lg-padding-35px-left xs-padding-15px-left">
                                                    <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Privado de lujo</span>
                                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="landing/images/boreana/img2.jpg" alt="">
                                        <!-- <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                                <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">02</h4>
                                                </div>
                                                <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-shamrock-green lg-padding-35px-left xs-padding-15px-left">
                                                    <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Amenidades de primer nivel</span>
                                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="landing/images/boreana/img3.jpg" alt="">
                                        <!-- <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                                <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">03</h4>
                                                </div>
                                                <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-shamrock-green lg-padding-35px-left xs-padding-15px-left">
                                                    <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Ubicación privilegiada</span>
                                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="landing/images/boreana/img4.jpg" alt="">
                                        <!-- <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                                <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">03</h4>
                                                </div>
                                                <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-shamrock-green lg-padding-35px-left xs-padding-15px-left">
                                                    <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Ubicación privilegiada</span>
                                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="landing/images/boreana/img5.jpg" alt="">
                                        <!-- <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                                <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">03</h4>
                                                </div>
                                                <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-shamrock-green lg-padding-35px-left xs-padding-15px-left">
                                                    <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Ubicación privilegiada</span>
                                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="landing/images/boreana/img6.jpg" alt="">
                                        <!-- <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                                <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">03</h4>
                                                </div>
                                                <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-shamrock-green lg-padding-35px-left xs-padding-15px-left">
                                                    <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Ubicación privilegiada</span>
                                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="landing/images/boreana/img7.jpg" alt="">
                                        <!-- <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                                <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">03</h4>
                                                </div>
                                                <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-shamrock-green lg-padding-35px-left xs-padding-15px-left">
                                                    <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Ubicación privilegiada</span>
                                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="landing/images/boreana/img8.jpg" alt="">
                                        <!-- <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                                <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">03</h4>
                                                </div>
                                                <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-shamrock-green lg-padding-35px-left xs-padding-15px-left">
                                                    <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Ubicación privilegiada</span>
                                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- end slider item -->
                            </div>
                        </div>
                        <!-- start slider pagination -->
                        <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-08 dark"><i class="feather icon-feather-arrow-right text-extra-large"></i></div>
                        <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-08 dark"><i class="feather icon-feather-arrow-left text-extra-large"></i></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 col-md-9 wow animate__fadeInRight" data-wow-delay="0.2s">
                    <h4 class="alt-font cd-headline slide font-weight-600 text-extra-dark-gray letter-spacing-minus-1px line-height-40px margin-40px-bottom cd-headline sm-w-75 sm-line-height-30px xs-w-80 xs-margin-20px-bottom">
                        <span class="padding-1-rem-bottom alt-font text-black d-block font-weight-700">CONOCE BOREANA </span>
                        <span class="cd-words-wrapper text-dark">
                            <b class="text-decoration-line-bottom-thick padding-5px-bottom is-visible">Ubicación privilegiada</b>
                            <b class="text-decoration-line-bottom-thick padding-5px-bottom">Excelente Ubicación</b>
                            <b class="text-decoration-line-bottom-thick padding-5px-bottom">Casa club </b>
                        </span>
                    </h4>
                    <p class="w-90 md-w-100 margin-30px-bottom">Entre sus amenidades principales se encuentra el Jardín Central y la casa club, ambas con una red de WiFi comunitaria.</p>
                    <ul class="w-90 list-style-01 font-weight-500 text-black-hover lg-w-100 sm-w-85 xs-w-100">
                        <li><i class="fas fa-check text-orange2"></i>Joggin track, Reading area, Grill Zone
                            <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>
                        </li>
                        <li><i class="fas fa-check text-orange2"></i>Cancha de pádel , Training + gym, Pet Zone
                            <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>
                        </li>
                        <li><i class="fas fa-check text-orange2"></i>Co-work area, Family pool, Sports bar, Kids Club
                            <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>
                        </li>
                    </ul>
                    <br>
                    <img src="landing/images/boreana/Recurso 1.svg" alt="logos">
                </div>
            </div>
        </div>
    </section>

    <section id="Distribución" class="big-section bg-light-gray wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="row justify-content-lg-center">

                    <div class="col-12 col-lg-6 col-sm-8 text-lg-center lg-margin-4-rem-bottom md-margin-3-rem-bottom xs-margin-5-rem-bottom wow animate__fadeIn">

                        <h5 class="alt-font font-weight-700 text-center text-uppercase text-dark letter-spacing-minus-1px m-0 mb-3"><img id="tip3" src="landing/tipografias/Conoce.svg" alt=""> <br> tu próxima Gran inversión</h5>
                        <span class="alt-font font-weight-500 text-center text-dark text-uppercase d-block margin-20px-bottom"> Adaptado a tus necesidades</span>
                    </div>
                </div>
            </div>
            <div class="row  border-width-1px border-color-medium-gray">
                <div class="col-12 p-0 tab-style-07">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs justify-content-center text-center text-uppercase font-weight-500 alt-font  lg-margin-8-rem-bottom  border-color-medium-gray md-margin-6-rem-bottom">
                        <li class="nav-item"><a data-bs-toggle="tab" href="#turnaroundconsulting" class="nav-link active">Planta Baja </a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#strategicplanning">Planta Alta </a></li>
                    </ul>
                    <!-- end tab navigation -->
                </div>
            </div>
            <div class="container margin-three-top">
                <div class="tab-content">
                    <div id="turnaroundconsulting" class="tab-pane fade in active show">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="row  ">
                                    <div class="col-md-5">
                                        <img loading="lazy" src="landing/images/imagen_planos/planta_baja2.png" alt="">
                                    </div>
                                    <div class="col-md-7 d-grid2">
                                        <div class="row ">
                                            <p id="subtitulo" class="text-dark m_2 text-center"><img id="tip4" src="landing/tipografias/Modelo115.svg" alt=""> </p>

                                        </div>
                                        <div class="row">
                                            <div id="informacion_modelos" class="col-md-12 mb-4 ">

                                                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 p-0 margin-ten-top line-height-4rem">
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> Cochera Techada para 2 autos</div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> Sala, comedor, baño </div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> Cocina completa y equipada, Sala TV / Oficina</div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> Amplia Terraza con Piscina </div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> 2 Recámaras c/u con closet vestidor y baño</div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> 7m (frente) x 16.5m (fondo) </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="strategicplanning" class="tab-pane ">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="row padding-seven-bottom ">
                                    <div class="col-md-6 ">
                                        <img src="landing/images/imagen_planos/planta_alta.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 d-grid2">
                                        <div class="row ">
                                            <p id="subtitulo" class="text-dark m_2 text-center"><img id="tip4" src="landing/tipografias/Modelo115.svg" alt=""></p>
                                        </div>
                                        <div class="row">
                                            <div id="informacion_modelos" class="col-md-12 mb-4 ">

                                                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 p-0 margin-ten-top line-height-3rem">
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> Cochera Techada para 2 autos</div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> Sala, comedor, baño </div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> Cocina complete, Sala TV / Oficina</div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> Amplia Terraza con Piscina</div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> 2 Recámaras c/u con closet vestidor y baño</div>
                                                    <div class="col text-dark d-flex"><span class="text-orange2">•</span> 7m (frente) x 16.5m (fondo) </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- start section -->
    <section id="imagenes" class="big-section2 border-color-medium-gray wow animate__fadeIn">
        <div id="container_imagen" class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-2-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-dark text-uppercase d-block margin-10px-bottom">Conoce Boreana</span>
                    <h5 class="alt-font font-weight-700 text-center text-uppercase text-dark letter-spacing-minus-1px m-0 mb-3">COMPROMETIDOS CON LA <img id="tip2" src="landing/tipografias/Calidad.svg" alt=""> </h5>
                </div>
            </div>
        </div>
        <div id="content">
            <div id="container_imagen2" class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- start filter navigation -->
                        <ul class="portfolio-filter grid-filter nav nav-tabs justify-content-center border-0 text-uppercase font-weight-500 alt-font padding-6-rem-bottom md-padding-4-half-rem-bottom sm-padding-2-rem-bottom">
                            <li class="nav active d-none"><a data-filter="*" href="#">all</a></li>


                        </ul>
                        <!-- end filter navigation -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 filter-content">
                        <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <li class="grid-item branding wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img3.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/sport_bar.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Sports Bar</span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item branding wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img4.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/vista_aeria.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Vista área</span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item branding wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img5.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/fachada_principal.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Fechada Principal</span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item branding wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img6.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/interior_casa_club.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Interior Casa Club</span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item branding wow animate__fadeIn" style="visibility: hidden ;">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img7.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/pet_zone.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Pet Zone</span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item branding wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img8.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/canchas_padel.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Canchas de pádel</span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item branding wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img9.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/casa_club.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Casa Club </span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <!-- start portfolio item -->
                            <li class="grid-item branding wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img10.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/casa_club2.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Casa Club </span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item graphics wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img11.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/sala_comedor.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Sala Comedor </span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item graphics wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img12.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/sala_comedor2.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Sala Comedor</span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item graphics wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img13.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/area_social.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Área social</span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>
                            <li class="grid-item graphics wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-transparent-dark-gray">
                                        <img src="landing/images/boreana/img14.jpg" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="landing/images/boreana/entrada.jpg" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a><span class="alt-font text-extra-dark-gray font-weight-500">Entrada Boreana</span></a>
                                        <span class="text-medium text-dark d-block margin-one-bottom">Boreana Smartownhouses</span>
                                    </div>
                                </div>
                            </li>



                            <!-- end portfolio item -->

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end section -->
    <section id="cotizador" class="big-section2 border-color-medium-gray wow animate__fadeIn">
        <div id="container_imagen" class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-2-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <h5 class="alt-font font-weight-700 text-center text-uppercase text-dark letter-spacing-minus-1px m-0 mb-3">Cotiza la disponibilidad de tu Smart Townhouse</h5>
                </div>
                <div class="col-12 margin-four-bottom">
                    <div class="text-center">
                        Disponible <span class="color-option option-1"></span>
                        No Disponible <span class="color-option option-2"></span>
                        Apartado <span class="color-option option-3"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12  col-md-8 mx-auto text-center" style="background-image: url('landing/images/cotizador/img-cotizador.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; padding: 0 !important;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5873.48 3595.13" class="cotizador-svg">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #1d1d1b;
                                stroke-miterlimit: 10;
                            }
                        </style>
                    </defs>
                    <g id="Capa_2" data-name="Capa 2">
                        <g id="Capa_1-2" data-name="Capa 1">

                        <!-- Lotes 77 -> 108 -->
                            <polygon style="fill: green" class="cls-1" points="470.45 0.63 389.13 285.24 547.25 334.94 628.57 50.33 470.45 0.63" />
                            <polygon style="fill: green" class="cls-1" points="782.16 81.95 628.57 50.33 547.25 334.94 700.85 375.6 782.16 81.95" />
                            <polygon style="fill: green" class="cls-1" points="958.35 131.64 872.52 407.22 700.85 375.6 782.16 81.95 958.35 131.64" />
                            <polygon style="fill: green" class="cls-1" points="1116.47 167.78 958.35 131.64 872.52 407.22 1030.63 443.36 1116.47 167.78" />
                            <polygon style="fill: green" class="cls-1" points="1288.14 212.96 1116.47 167.78 1030.63 443.36 1202.31 497.57 1288.14 212.96" />
                            <polygon style="fill: green" class="cls-1" points="1441.74 244.58 1288.14 212.96 1202.31 497.57 1369.46 533.71 1441.74 244.58" />
                            <polygon style="fill: green" class="cls-1" points="1613.41 287.5 1441.74 244.58 1369.46 533.71 1532.09 578.89 1613.41 287.5" />
                            <polygon style="fill: green" class="cls-1" points="1776.05 334.94 1613.41 287.5 1532.09 578.89 1699.24 619.55 1776.05 334.94" />
                            <polygon style="fill: green" class="cls-1" points="1934.16 375.6 1776.05 334.94 1699.24 619.55 1861.88 673.76 1934.16 375.6" />
                            <polygon style="fill: green" class="cls-1" points="2092.28 411.74 1934.16 375.6 1861.88 673.76 2020 700.87 2092.28 411.74" />
                            <polygon style="fill: green" class="cls-1" points="2291.06 443.36 2119.39 411.74 2092.28 700.87 2241.36 723.45 2291.06 443.36" />
                            <polygon style="fill: green" class="cls-1" points="2453.69 453.52 2291.06 443.36 2241.36 723.45 2413.03 723.45 2453.69 453.52" />
                            <polygon style="fill: green" class="cls-1" points="2625.36 497.57 2453.69 453.52 2413.03 723.45 2580.18 764.11 2625.36 497.57" />
                            <polygon style="fill: green" class="cls-1" points="2797.03 504.35 2625.36 497.57 2580.18 764.11 2756.37 786.7 2797.03 504.35" />
                            <polygon style="fill: green" class="cls-1" points="2959.67 538.23 2797.03 504.35 2756.37 786.7 2914.49 822.84 2959.67 538.23" />
                            <polygon style="fill: green" class="cls-1" points="3131.34 567.59 2959.67 538.23 2914.49 822.84 3086.16 822.84 3131.34 567.59" />
                            <polygon style="fill: green" class="cls-1" points="3298.49 583.41 3131.34 567.59 3095.2 854.46 3262.35 877.05 3298.49 583.41" />
                            <polygon style="fill: green" class="cls-1" points="3472.42 608.82 3431.76 901.9 3262.35 877.05 3298.49 583.41 3472.42 608.82" />
                            <polygon style="fill: green" class="cls-1" points="3639.57 628.58 3605.69 901.9 3431.76 901.9 3472.42 608.82 3639.57 628.58" />
                            <polygon style="fill: green" class="cls-1" points="3813.5 642.13 3770.58 935.78 3605.69 901.9 3639.57 628.58 3813.5 642.13" />
                            <polygon style="fill: green" class="cls-1" points="3978.39 663.59 3946.77 951.59 3770.58 935.78 3813.5 642.13 3978.39 663.59" />
                            <polygon style="fill: green" class="cls-1" points="4147.81 680.53 4122.96 965.15 3946.77 951.59 3978.39 663.59 4147.81 680.53" />
                            <polygon style="fill: green" class="cls-1" points="4333.03 680.53 4163.62 680.53 4163.62 965.15 4323.99 965.15 4333.03 680.53" />
                            <polygon style="fill: green" class="cls-1" points="4500.74 965.15 4323.99 965.15 4333.03 680.53 4500.74 680.53 4500.74 965.15" />
                            <polygon style="fill: green" class="cls-1" points="4671.85 973.05 4500.74 965.15 4500.74 680.53 4671.85 680.53 4671.85 973.05" />
                            <rect style="fill: green" class="cls-1" x="4671.85" y="680.54" width="172.8" height="292.52" />
                            <polygon style="fill: green" class="cls-1" points="5014.06 973.05 4844.65 973.05 4844.65 680.53 5014.06 686.75 5014.06 973.05" />
                            <rect style="fill: green" class="cls-1" x="5014.06" y="686.75" width="174.49" height="286.31" />
                            <rect style="fill: green" class="cls-1" x="5188.56" y="686.75" width="167.72" height="286.31" />
                            <polygon style="fill: green" class="cls-1" points="5530.77 988.3 5356.27 981.52 5356.27 686.75 5530.77 686.75 5530.77 988.3" />
                            <rect style="fill: green" class="cls-1" x="5530.77" y="686.75" width="169.41" height="301.55" />
                            <rect style="fill: green" class="cls-1" x="5700.18" y="686.75" width="172.8" height="301.55" />
                            <!-- end lotes 77 - 108 -->
                            <!-- lotes 44 - 55 -->
                            <polygon style="fill: green" class="cls-1" points="3784.14 2939.35 4003.24 3106.51 4109.4 2966.46 3883.52 2801.57 3784.14 2939.35" />
                            <polygon style="fill: green" class="cls-1" points="3985.17 2657 3883.52 2801.57 4109.4 2966.46 4213.31 2826.41 3985.17 2657" />
                            <polygon style="fill: green" class="cls-1" points="4089.08 2512.44 4314.96 2681.85 4213.31 2826.41 3985.17 2657 4089.08 2512.44" />
                            <polygon style="fill: green" class="cls-1" points="4183.95 2372.39 4089.08 2512.44 4314.96 2681.85 4416.6 2539.54 4183.95 2372.39" />
                            <polygon style="fill: green" class="cls-1" points="4285.59 2232.34 4183.95 2372.39 4416.6 2539.54 4520.51 2399.5 4285.59 2232.34" />
                            <polygon style="fill: green" class="cls-1" points="4387.24 2094.56 4285.59 2232.34 4520.51 2399.5 4624.42 2263.97 4387.24 2094.56" />
                            <polygon style="fill: green" class="cls-1" points="4482.11 1945.47 4387.24 2094.56 4624.42 2263.97 4730.58 2126.18 4482.11 1945.47" />
                            <polygon style="fill: green" class="cls-1" points="4583.76 1809.94 4482.11 1945.47 4730.58 2126.18 4832.23 1981.62 4583.76 1809.94" />
                            <polygon style="fill: green" class="cls-1" points="4687.66 1672.16 4583.76 1809.94 4832.23 1981.62 4927.1 1839.31 4687.66 1672.16" />
                            <polygon style="fill: green" class="cls-1" points="4787.05 1532.11 4687.66 1672.16 4927.1 1839.31 5026.49 1701.52 4787.05 1532.11" />
                            <polygon style="fill: green" class="cls-1" points="4879.66 1392.06 4787.05 1532.11 5026.49 1701.52 5121.36 1561.47 4879.66 1392.06" />
                            <!-- end lotes 44 - 55 -->
                            <!-- lotes 56 - 76 -->
                            <polygon style="fill: green" class="cls-1" points="547.25 642.13 709.88 680.53 628.57 969.66 463.67 924.49 547.25 642.13" />
                            <polygon style="fill: green" class="cls-1" points="872.52 723.45 709.88 680.53 628.57 969.66 795.72 1010.32 872.52 723.45" />
                            <polygon style="fill: green" class="cls-1" points="1041.93 764.11 872.52 723.45 795.72 1010.32 958.35 1055.5 1041.93 764.11" />
                            <polygon style="fill: green" class="cls-1" points="1202.31 805.9 1041.93 764.11 958.35 1055.5 1125.51 1098.42 1202.31 805.9" />
                            <polygon style="fill: green" class="cls-1" points="1369.46 858.98 1202.31 805.9 1125.51 1098.42 1288.14 1141.33 1369.46 858.98" />
                            <polygon style="fill: green" class="cls-1" points="1532.09 889.48 1369.46 858.98 1288.14 1141.33 1457.55 1188.77 1532.09 889.48" />
                            <polygon style="fill: green" class="cls-1" points="1699.24 940.3 1532.09 889.48 1457.55 1188.77 1622.44 1233.95 1699.24 940.3" />
                            <polygon style="fill: green" class="cls-1" points="1870.91 989.99 1699.24 940.3 1622.44 1233.95 1791.86 1279.12 1870.91 989.99" />
                            <polygon style="fill: green" class="cls-1" points="2202.96 1046.46 2038.07 1023.88 1992.89 1303.97 2164.56 1328.82 2202.96 1046.46" />
                            <polygon style="fill: green" class="cls-1" points="2374.63 1061.71 2202.96 1046.46 2164.56 1328.82 2336.23 1349.15 2374.63 1061.71" />
                            <polygon style="fill: green" class="cls-1" points="2546.3 1084.86 2374.63 1061.71 2336.23 1349.15 2503.39 1373.99 2546.3 1084.86" />
                            <polygon style="fill: green" class="cls-1" points="2715.71 1109.71 2546.3 1084.86 2503.39 1373.99 2677.31 1396.58 2715.71 1109.71" />
                            <polygon style="fill: green" class="cls-1" points="2885.13 1132.3 2715.71 1109.71 2677.31 1396.58 2858.02 1419.17 2885.13 1132.3" />
                            <polygon style="fill: green" class="cls-1" points="3047.76 1154.89 2885.13 1132.3 2858.02 1419.17 3022.91 1441.76 3047.76 1154.89" />
                            <polygon style="fill: green" class="cls-1" points="3221.69 1176.35 3047.76 1154.89 3022.91 1441.76 3196.84 1471.12 3221.69 1176.35" />
                            <polygon style="fill: green" class="cls-1" points="3395.62 1197.81 3221.69 1176.35 3196.84 1471.12 3367.38 1493.71 3395.62 1197.81" />
                            <polygon style="fill: green" class="cls-1" points="3567.29 1217.85 3395.62 1197.81 3367.38 1493.71 3535.66 1516.3 3567.29 1217.85" />
                            <polygon style="fill: green" class="cls-1" points="3736.7 1240.72 3567.29 1217.85 3535.66 1516.3 3702.82 1532.11 3736.7 1240.72" />
                            <polygon style="fill: green" class="cls-1" points="3908.37 1264.44 3736.7 1240.72 3702.82 1532.11 3874.49 1546.79 3908.37 1264.44" />
                            <polygon style="fill: green" class="cls-1" points="4077.78 1287.03 3908.37 1264.44 3874.49 1546.79 4047.29 1570.51 4077.78 1287.03" />
                            <polygon style="fill: green" class="cls-1" points="4248.32 1313.01 4077.78 1287.03 4047.29 1570.51 4215.57 1593.1 4248.32 1313.01" />
                            <!-- end lotes 56 - 76 -->

                            <!-- lotes 32 - 43   -->
                            <polygon
                                @click="getLotById(<?php echo $lots[31]->id; ?>)"
                                data-available="<?php echo $lots[31]->available; ?>"
                                data-area="<?php echo $lots[31]->area; ?>"
                                data-number="<?php echo $lots[31]->number; ?>"
                                id="lot-<?php echo $lots[31]->id; ?>"
                                class="cls-1" 
                                points="1796.37 1685.71 1959.01 1729.97 1877.69 2017.76 1712.8 1981.62 1796.37 1685.71" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[32]->id; ?>)"
                                data-available="<?php echo $lots[32]->available; ?>"
                                data-area="<?php echo $lots[32]->area; ?>"
                                data-number="<?php echo $lots[32]->number; ?>"
                                id="lot-<?php echo $lots[32]->id; ?>"
                                class="cls-1" 
                                points="2119.39 1776.06 1959.01 1729.97 1877.69 2017.76 2049.36 2058.41 2119.39 1776.06" 
                            />
                            <polygon style="fill: green" class="cls-1" points="2291.06 1826.89 2119.39 1776.06 2049.36 2058.41 2216.51 2094.56 2291.06 1826.89" />
                            <polygon style="fill: green" class="cls-1" points="2453.69 1861.9 2291.06 1826.89 2216.51 2094.56 2390.44 2141.99 2453.69 1861.9" />
                            <polygon style="fill: green" class="cls-1" points="2625.36 1909.33 2453.69 1861.9 2390.44 2141.99 2546.3 2184.91 2625.36 1909.33" />
                            <polygon style="fill: green" class="cls-1" points="2797.03 1954.51 2625.36 1909.33 2546.3 2184.91 2715.71 2232.34 2797.03 1954.51" />
                            <polygon style="fill: green" class="cls-1" points="2966.44 1984.44 2797.03 1954.51 2715.71 2232.34 2885.13 2263.97 2966.44 1984.44" />
                            <polygon style="fill: green" class="cls-1" points="3131.34 2038.09 2966.44 1984.44 2885.13 2263.97 3059.05 2315.92 3131.34 2038.09" />
                            <polygon style="fill: green" class="cls-1" points="3298.49 2083.26 3131.34 2038.09 3059.05 2315.92 3221.69 2372.39 3298.49 2083.26" />
                            <polygon style="fill: green" class="cls-1" points="3467.34 2126.18 3298.49 2083.26 3221.69 2372.39 3395.62 2415.31 3467.34 2126.18" />
                            <polygon style="fill: green" class="cls-1" points="3636.18 2166.84 3467.34 2126.18 3395.62 2415.31 3567.29 2455.97 3636.18 2166.84" />
                            <polygon style="fill: green" class="cls-1" points="3805.59 2205.24 3636.18 2166.84 3567.29 2455.97 3736.7 2501.14 3805.59 2205.24" />
                            <!-- end lotes 32 - 43 -->
                            <!-- lotes  31 - 24  -->
                            <polygon 
                                @click="getLotById(<?php echo $lots[30]->id; ?>)"
                                data-available="<?php echo $lots[30]->available; ?>"
                                data-area="<?php echo $lots[30]->area; ?>"
                                data-number="<?php echo $lots[30]->number; ?>"
                                id="lot-<?php echo $lots[30]->id; ?>"
                                class="cls-1" 
                                points="1699.24 1660.86 1514.02 1617.94 1441.74 1909.33 1622.44 1947.73 1699.24 1660.86" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[29]->id; ?>)"
                                data-available="<?php echo $lots[29]->available; ?>"
                                data-area="<?php echo $lots[29]->area; ?>"
                                data-number="<?php echo $lots[29]->number; ?>"
                                id="lot-<?php echo $lots[29]->id; ?>"
                                class="cls-1" 
                                points="1346.87 1577.29 1272.33 1861.9 1441.74 1909.33 1514.02 1617.94 1346.87 1577.29" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[28]->id; ?>)"
                                data-available="<?php echo $lots[28]->available; ?>"
                                data-area="<?php echo $lots[28]->area; ?>"
                                data-number="<?php echo $lots[28]->number; ?>"
                                id="lot-<?php echo $lots[28]->id; ?>"
                                class="cls-1" 
                                points="1179.72 1529.85 1346.87 1577.29 1272.33 1861.9 1102.92 1814.46 1179.72 1529.85" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[27]->id; ?>)"
                                data-available="<?php echo $lots[27]->available; ?>"
                                data-area="<?php echo $lots[27]->area; ?>"
                                data-number="<?php echo $lots[27]->number; ?>"
                                id="lot-<?php echo $lots[27]->id; ?>"
                                class="cls-1" 
                                points="1012.56 1484.67 1179.72 1529.85 1102.92 1814.46 935.76 1776.06 1012.56 1484.67" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[26]->id; ?>)"
                                data-available="<?php echo $lots[26]->available; ?>"
                                data-area="<?php echo $lots[26]->area; ?>"
                                data-number="<?php echo $lots[26]->number; ?>"
                                id="lot-<?php echo $lots[26]->id; ?>"
                                class="cls-1" 
                                points="849.93 1444.02 1012.56 1484.67 935.76 1776.06 764.09 1729.97 849.93 1444.02" 
                            />
                            <polygon
                                @click="getLotById(<?php echo $lots[25]->id; ?>)"
                                data-available="<?php echo $lots[25]->available; ?>"
                                data-area="<?php echo $lots[25]->area; ?>"
                                data-number="<?php echo $lots[25]->number; ?>"
                                id="lot-<?php echo $lots[25]->id; ?>"
                                class="cls-1" 
                                points="681.65 1397.71 849.93 1444.02 764.09 1729.97 598.07 1683.45 681.65 1397.71" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[24]->id; ?>)"
                                data-available="<?php echo $lots[24]->available; ?>"
                                data-area="<?php echo $lots[24]->area; ?>"
                                data-number="<?php echo $lots[24]->number; ?>"
                                id="lot-<?php echo $lots[24]->id; ?>"
                                class="cls-1" 
                                points="517.88 1353.66 681.65 1397.71 598.07 1683.45 434.31 1637.14 517.88 1353.66" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[23]->id; ?>)"
                                data-available="<?php echo $lots[23]->available; ?>"
                                data-area="<?php echo $lots[23]->area; ?>"
                                data-number="<?php echo $lots[23]->number; ?>"
                                id="lot-<?php echo $lots[23]->id; ?>"
                                class="cls-1" 
                                points="355.25 1308.49 517.88 1353.66 434.31 1637.14 271.67 1596.49 355.25 1308.49" 
                            />
                            <!-- end lotes 31- 24 -->

                            <!-- lotes 1 - 23 -->
                            <polygon 
                                @click="getLotById(<?php echo $lots[0]->id; ?>)"
                                data-available="<?php echo $lots[0]->available; ?>"
                                data-area="<?php echo $lots[0]->area; ?>"
                                data-number="<?php echo $lots[0]->number; ?>"
                                id="lot-<?php echo $lots[0]->id; ?>"
                                class="cls-1" 
                                points="77.41 1873.19 249.08 1909.33 163.25 2205.24 0.61 2166.84 77.41 1873.19" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[1]->id; ?>)"
                                data-available="<?php echo $lots[1]->available; ?>"
                                data-area="<?php echo $lots[1]->area; ?>"
                                data-number="<?php echo $lots[1]->number; ?>"
                                id="lot-<?php echo $lots[1]->id; ?>"
                                class="cls-1" 
                                points="416.24 1954.51 249.08 1909.33 163.25 2205.24 330.4 2263.97 416.24 1954.51" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[2]->id; ?>)"
                                data-available="<?php echo $lots[2]->available; ?>"
                                data-area="<?php echo $lots[2]->area; ?>"
                                data-number="<?php echo $lots[2]->number; ?>"
                                id="lot-<?php echo $lots[2]->id; ?>"
                                class="cls-1" 
                                points="583.39 2004.2 416.24 1954.51 330.4 2263.97 495.3 2302.37 583.39 2004.2" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[3]->id; ?>)"
                                data-available="<?php echo $lots[3]->available; ?>"
                                data-area="<?php echo $lots[3]->area; ?>"
                                data-number="<?php echo $lots[3]->number; ?>"
                                id="lot-<?php echo $lots[3]->id; ?>"
                                class="cls-1" 
                                points="748.28 2049.38 583.39 2004.2 495.3 2302.37 660.19 2345.28 748.28 2049.38" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[4]->id; ?>)"
                                data-available="<?php echo $lots[4]->available; ?>"
                                data-area="<?php echo $lots[4]->area; ?>"
                                data-number="<?php echo $lots[4]->number; ?>"
                                id="lot-<?php echo $lots[4]->id; ?>" 
                                class="cls-1" 
                                points="906.4 2086.65 748.28 2049.38 660.19 2345.28 831.86 2390.46 906.4 2086.65" 
                            />
                            <polygon
                                @click="getLotById(<?php echo $lots[5]->id; ?>)"
                                data-available="<?php echo $lots[5]->available; ?>"
                                data-area="<?php echo $lots[5]->area; ?>"
                                data-number="<?php echo $lots[5]->number; ?>"
                                id="lot-<?php echo $lots[5]->id; ?>"
                                class="cls-1" 
                                points="1080.33 2141.99 906.4 2086.65 831.86 2390.46 1012.56 2433.38 1080.33 2141.99" 
                            />
                            <polygon 
                                @click="getLotById(<?php echo $lots[6]->id; ?>)"
                                data-available="<?php echo $lots[6]->available; ?>"
                                data-area="<?php echo $lots[6]->area; ?>"
                                data-number="<?php echo $lots[6]->number; ?>"
                                id="lot-<?php echo $lots[6]->id; ?>"
                                class="cls-1" 
                                points="1247.48 2184.91 1080.33 2141.99 1012.56 2433.38 1179.72 2474.04 1247.48 2184.91" 
                            />
                            <polygon
                                @click="getLotById(<?php echo $lots[7]->id; ?>)"
                                data-available="<?php echo $lots[7]->available; ?>"
                                data-area="<?php echo $lots[7]->area; ?>"
                                data-number="<?php echo $lots[7]->number; ?>"
                                id="lot-<?php echo $lots[7]->id; ?>"
                                class="cls-1"  
                                points="1410.12 2219.92 1247.48 2184.91 1179.72 2474.04 1346.87 2519.21 1410.12 2219.92" 
                            />
                            <polygon
                                @click="getLotById(<?php echo $lots[8]->id; ?>)"
                                data-available="<?php echo $lots[8]->available; ?>"
                                data-area="<?php echo $lots[8]->area; ?>"
                                data-number="<?php echo $lots[8]->number; ?>"
                                id="lot-<?php echo $lots[8]->id; ?>"
                                class="cls-1" 
                                points="1586.87 2263.97 1410.12 2219.92 1346.87 2519.21 1514.02 2560.44 1586.87 2263.97" 
                            />
                            <polygon
                                @click="getLotById(<?php echo $lots[9]->id; ?>)"
                                data-available="<?php echo $lots[9]->available; ?>"
                                data-area="<?php echo $lots[9]->area; ?>"
                                data-number="<?php echo $lots[9]->number; ?>"
                                id="lot-<?php echo $lots[9]->id; ?>"
                                class="cls-1"  
                                points="1752.89 2315.92 1586.87 2263.97 1514.02 2560.44 1678.35 2607.87 1752.89 2315.92" 
                            />
                            <polygon
                                @click="getLotById(<?php echo $lots[10]->id; ?>)"
                                data-available="<?php echo $lots[10]->available; ?>"
                                data-area="<?php echo $lots[10]->area; ?>"
                                data-number="<?php echo $lots[10]->number; ?>"
                                id="lot-<?php echo $lots[10]->id; ?>"
                                class="cls-1" 
                                points="1917.22 2352.06 1752.89 2315.92 1678.35 2607.87 1851.15 2645.14 1917.22 2352.06" 
                            />
                            <polygon
                                @click="getLotById(<?php echo $lots[11]->id; ?>)"
                                data-available="<?php echo $lots[11]->available; ?>"
                                data-area="<?php echo $lots[11]->area; ?>"
                                data-number="<?php echo $lots[11]->number; ?>"
                                id="lot-<?php echo $lots[11]->id; ?>"
                                class="cls-1"  
                                points="2084.94 2411.36 1917.22 2352.06 1851.15 2645.14 2018.87 2685.8 2084.94 2411.36" 
                            />
                            <polygon style="fill: green" class="cls-1" points="2250.96 2457.1 2084.94 2411.36 2018.87 2685.8 2186.59 2728.16 2250.96 2457.1" />
                            <polygon style="fill: green" class="cls-1" points="2418.68 2499.45 2250.96 2457.1 2186.59 2728.16 2352.61 2772.2 2418.68 2499.45" />
                            <polygon style="fill: green" class="cls-1" points="2588.09 2545.19 2418.68 2499.45 2352.61 2772.2 2520.33 2812.86 2588.09 2545.19" />
                            <polygon style="fill: green" class="cls-1" points="2754.11 2587.54 2588.09 2545.19 2520.33 2812.86 2689.74 2860.3 2754.11 2587.54" />
                            <polygon style="fill: green" class="cls-1" points="2926.91 2634.98 2754.11 2587.54 2689.74 2860.3 2855.76 2902.65 2926.91 2634.98" />
                            <polygon style="fill: green" class="cls-1" points="3906.11 3345.94 3763.81 3233 3567.29 3467.92 3723.15 3594.41 3906.11 3345.94" />
                            <polygon style="fill: green" class="cls-1" points="3619.24 3126.84 3763.81 3233 3567.29 3467.92 3431.76 3366.27 3619.24 3126.84" />
                            <polygon style="fill: green" class="cls-1" points="3479.2 3020.67 3312.04 3248.81 3431.76 3366.27 3619.24 3126.84 3479.2 3020.67" />
                            <polygon style="fill: green" class="cls-1" points="3344.51 2902.65 3479.2 3020.67 3312.04 3248.81 3162.96 3140.39 3344.51 2902.65" />
                            <polygon style="fill: green" class="cls-1" points="3210.39 2801.57 3344.51 2902.65 3162.96 3140.39 3029.69 3036.48 3210.39 2801.57" />
                            <polygon style="fill: green" class="cls-1" points="3059.05 2702.74 3210.39 2801.57 3029.69 3036.48 2894.16 2943.87 3059.05 2702.74" />
                            <!-- end lotes 1 - 23 -->
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </section>
    <section id="ubicacion">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-2-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <h5 class="alt-font font-weight-700 text-center text-uppercase text-dark letter-spacing-minus-1px m-0 mb-3">Ubicación <br> <img id="tip22" src="landing/tipografias/Privilegiada.svg" alt=""> </h5>
                </div>
            </div>
            <div class="row">
                <img loading="lazy" src="landing/images/mapa/mapa-boreana.jpg" alt="mapa">
            </div>
        </div>
    </section>
    <!-- start section -->
    
    <br><br>
    <!-- start footer -->
    <!-- Start modal -->
    <div class="modal fade" id="modal-lots" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <img 
                                loading="lazy"
                                src="landing/images/logos/logo2.svg"
                                class="img-fluid mb-3 w-200px" 
                                alt="Logo Natura" 
                                width="180" 
                            />
                        </div>
                        <div class="col-6" style="text-align: right;">
                            <a @click="closeModal()">
                                <i class="ti-close"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 custom-border-right">
                            <p class="custom-font-size">
                                Número de Lote: <span x-text="lot.number"></span> <br>
                                Precio por m<sup>2</sup>: <span x-text="lot.price_by_square_meter"></span> <br>
                                Frente y Ancho: <span x-text="lot.front_and_width"></span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="custom-font-size">
                                Área de Terreno (m<sup>2</sup>): <span x-text="lot.area"></span> <br>
                                Enganche (30%): <span x-text="lot.money_advance"></span> <br>
                                Precio Total: <span x-text="lot.total_price"></span>
                            </p>
                        </div>
                    </div>
                    <p x-show="lot.available === 1" class="custom-font-size text-center">
                        Para mayor información acerca de este lote favor de llenar el siguiente formulario y uno de nuestros asesores se pondrá en contacto a la brevedad posible. ¡Gracias!
                    </p>
                    <p x-show="lot.available === 2" class="custom-font-size text-center">
                        Este lote actualmente se encuentra <strong>Apartado</strong> sin embargo para mayor información acerca de este lote favor de llenar el siguiente formulario y uno de nuestros asesores se pondrá en contacto a la brevedad posible. ¡Gracias!
                    </p>
                    <p x-show="lot.available === 3" class="custom-font-size text-center">
                        ¡Lo sentimos! Este lote ya fue <strong>Vendido</strong> sin embargo te invitamos a visualizar nuestros lotes disponibles.
                    </p>
                    <form @submit.prevent="onSubmitLotMail()" id="form-lot" x-show="lot.available === 1 || lot.available === 2">
                        <div class="row">
                            <div class="form-group col-12 col-sm-6">
                                <input 
                                    type="text" 
                                    name="first_name"
                                    placeholder="Nombre"
                                    x-model="contact_lot.first_name"
                                    required
                                />
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <input 
                                    type="text" 
                                    name="last_name" 
                                    placeholder="Apellido"
                                    x-model="contact_lot.last_name"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-sm-6">
                                <input 
                                    type="email" 
                                    name="email"
                                    placeholder="Correo"
                                    x-model="contact_lot.email"
                                    required
                                />
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <input 
                                    type="number" 
                                    name="phone" 
                                    placeholder="Teléfono"
                                    x-model="contact_lot.phone"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-yellow btn-box-shadow">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->


    <footer class="padding-six-tb xs-padding-thirteen-tb bg-orange2 pb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4 col-md-6 order-1 order-lg-1 text-center text-md-end">
                    <div id="img" class="social-icon-style-12 margin-20px-bottom justify-content-center">
                        <img class="margin-15px-bottom" src="landing/images/logos/logowhite.svg" alt="" style="width: 50%;">
                    </div>
                    <div class="social-icon-style-12">
                        <ul class="extra-small-icon light">
                            <li><a class="instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="whatsapp" href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-8 order-2 order-lg-2 text-center text-lg-start last-paragraph-no-margin md-margin-25px-top">
                    <p class="text-white">Boreana es un complejo moderno de 108 townhouses ubicados en una zona de alta plusvalía en la ciudad de Mérida. Gracias a sus atributos y características innovadoras, Boreana es el lugar ideal para comenzar a vivir de manera sostenible, ciudando el medio ambiente y aprovechando los beneficios que el IoT (Internet of things) nos ofrece</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col justify-content-center text-center">
                    <p class="text-white">
                    <a href="admin/index.php" class="mx-2"><i class="fas fa-user text-white"></i></a>&copy; BOREANA 2023 <span id="currentYear"></span> – Desarrollado por <a href="https://www.buho-solutions.com/" target="_blank" class="text-decoration-line-bottom text-white-hover text-white font-weight-500">Búho Solutions</a></p>

                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->


    <!-- start scroll to top -->

    <a class="btn-whatsapp-style-1 text-white" href="#" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>
    <!-- end scroll to top -->
    <!-- javascript -->
    <script type="text/javascript" src="landing/js/jquery.min.js"></script>
    <script type="text/javascript" src="landing/js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="landing/js/main.js"></script>
    <script type="text/javascript" src="landing/js/contact.js"></script>

    <!-- revolution slider -->
    <script type="text/javascript" src="landing/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="landing/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Popover -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

      <!-- Toast -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- App -->
    <script type="text/javascript" src="landing/js/app.js"></script>
</body>

</html>
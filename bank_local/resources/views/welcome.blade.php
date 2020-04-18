<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Aplikacja Bankowa</title>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Wczytywanie...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">Aplikacja Bankowa<span class="text-primary">.</span> </a></h1>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

                                <li><a href="#home-section" class="nav-link">Strona Główna</a></li>
                                <li class="has-children">
                                    <a href="#about-section" class="nav-link">O Nas</a>
                                    <ul class="dropdown">
                                        <li><a href="#team-section" class="nav-link">Zespół</a></li>
                                        <li><a href="#pricing-section" class="nav-link">Cennik</a></li>
                                        <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                        <li><a href="#gallery-section" class="nav-link">Galeria</a></li>
                                        <li><a href="#services-section" class="nav-link">Usługi</a></li>
                                        <li><a href="#testimonials-section" class="nav-link">Opinie</a></li>
                                    </ul>
                                </li>


                                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                                <li><a href="#contact-section" class="nav-link">Kontakt</a></li>
                                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
                                                            @if (Route::has('login'))

                                @auth
                                <li> <a class="nav-link" href="{{ url('/home') }}">Twój Pulpit</a></li>
                                <li> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                @else
                                <li><a class="nav-link" href="{{ route('login') }}">Logowanie</a></li>

                                @if (Route::has('register'))
                               <li> <a class="nav-link" href="{{ route('register') }}">Rejestracja</a></li>
                                @endif
                                @endauth

                                @endif
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>



        <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">


                    <div class="col-md-10 mt-lg-5 text-center">
                        <div class="single-text owl-carousel">
                            <div class="slide">
                                <h1 class="text-uppercase" data-aos="fade-up">Rozwiązania Bankowe</h1>
                                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident cupiditate suscipit, magnam libero velit esse sapiente officia inventore!</p>
                                <div data-aos="fade-up" data-aos-delay="100">
                                </div>
                            </div>

                            <div class="slide">
                                <h1 class="text-uppercase" data-aos="fade-up">Rozwiązania Finansowe</h1>
                                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident cupiditate suscipit, magnam libero velit esse sapiente officia inventore!</p>
                            </div>

                            <div class="slide">
                                <h1 class="text-uppercase" data-aos="fade-up">Rozwiązania Oszczędnościowe</h1>
                                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident cupiditate suscipit, magnam libero velit esse sapiente officia inventore!</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <a href="#next" class="mouse smoothscroll">
                <span class="mouse-icon">
                    <span class="mouse-wheel"></span>
                </span>
            </a>
        </div>

        <div class="site-section" id="next">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
                        <img src="{{asset('images/flaticon-svg/svg/001-wallet.svg')}}" alt="Aplikacja Bankowa" class="img-fluid w-25 mb-4">
                        <h3 class="card-title">Oszczędzanie Pieniędzy</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('images/flaticon-svg/svg/004-cart.svg')}}" alt="Aplikacja Bankowa" class="img-fluid w-25 mb-4">
                        <h3 class="card-title">Zakupy Online</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('images/flaticon-svg/svg/006-credit-card.svg')}}" alt="Aplikacja Bankowa" class="img-fluid w-25 mb-4">
                        <h3 class="card-title">Kredyty / Karty Płatnicze</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                        <figure class="circle-bg">
                            <img src="{{asset('images/about_2.jpg')}}" alt="Aplikacja Bankowa" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="mb-4">
                            <h3 class="h3 mb-4 text-black">Amortyzacja Kosztów</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>

                        </div>

                        <div class="mb-4">
                            <ul class="list-unstyled ul-check success">
                                <li>Officia quaerat eaque neque</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                            </ul>

                        </div>

                        <div class="mb-4">
                            <form action="#">
                                <div class="form-group d-flex align-items-center">
                                    <input type="text" class="form-control mr-2" placeholder="Enter your email">
                                    <input type="submit" class="btn btn-primary" value="Submit Email">
                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </div>


        <div class="site-section cta-big-image" id="about-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">O Nas</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                        <figure class="circle-bg">
                            <img src="{{asset('images/hero_1.jpg')}}" alt="Aplikacja Bankowa" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                        <h3 class="text-black mb-4">Rozwiążemy Twój Problem Finansowy</h3>

                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                    </div>
                </div>

            </div>
        </div>


        <section class="site-section border-bottom" id="team-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Poznaj Zespół</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="100">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
                <div class="row">


                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="{{asset('images/person_5.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Kaiara Spencer</h3>
                                <span class="position">Kierownik Finansowy</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="{{asset('images/person_6.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Dave Simpson</h3>
                                <span class="position">Kierownik Marketingowy</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="{{asset('images/person_7.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Ben Thompson</h3>
                                <span class="position">Księgowy</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="{{asset('images/person_8.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Kyla Stewart</h3>
                                <span class="position">Księgowa</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="{{asset('images/person_1.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Kaiara Spencer</h3>
                                <span class="position">Księgowa</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="{{asset('images/person_2.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Dave Simpson</h3>
                                <span class="position">Kasjer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="{{asset('images/person_3.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Ben Thompson</h3>
                                <span class="position">Kasjer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="{{asset('images/person_4.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Chris Stewart</h3>
                                <span class="position">Kasjer</span>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <section class="site-section" id="gallery-section" data-aos="fade">


            <div class="container">

                <div class="row mb-3">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Galeria</h2>
                    </div>
                </div>

                <div class="row justify-content-center mb-5">
                    <div id="filters" class="filters text-center button-group col-md-7">
                        <button class="btn btn-primary active" data-filter="*">Wszystkie</button>
                        <button class="btn btn-primary" data-filter=".web">Wydarzenia</button>
                        <button class="btn btn-primary" data-filter=".design">Imprezy</button>
                        <button class="btn btn-primary" data-filter=".brand">Święta</button>
                    </div>
                </div>

                <div id="posts" class="row no-gutter">
                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_1.jpg')}}" class="item-wrap fancybox">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_1.jpg')}}">
                        </a>
                    </div>
                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_2.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_2.jpg')}}">
                        </a>
                    </div>

                    <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_3.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_3.jpg')}}">
                        </a>
                    </div>

                    <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">

                        <a href="images/img_4.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_4.jpg')}}">
                        </a>

                    </div>

                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_5.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_5.jpg')}}">
                        </a>
                    </div>

                    <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_1.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_1.jpg')}}">
                        </a>
                    </div>

                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_2.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_2.jpg')}}">
                        </a>
                    </div>

                    <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_3.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_3.jpg')}}">
                        </a>
                    </div>

                    <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_4.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_4.jpg')}}">
                        </a>
                    </div>

                    <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_5.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_5.jpg')}}">
                        </a>
                    </div>

                    <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_1.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_1.jpg')}}">
                        </a>
                    </div>

                    <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <a href="images/img_2.jpg')}}" class="item-wrap fancybox" data-fancybox="gallery2">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{asset('images/img_2.jpg')}}">
                        </a>
                    </div>


                </div>
            </div>

        </section>


        <section class="site-section">
            <div class="container">

                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Jak To Działa</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="100">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>

                <div class="row align-items-lg-center">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

                        <div class="owl-carousel slide-one-item-alt">
                            <img src="{{asset('images/slide_1.jpg')}}" alt="Image" class="img-fluid">
                            <img src="{{asset('images/slide_2.jpg')}}" alt="Image" class="img-fluid">
                            <img src="{{asset('images/slide_3.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div class="custom-direction">
                            <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
                        </div>

                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                        <div class="owl-carousel slide-one-item-alt-text">
                            <div>
                                <h2 class="section-title mb-3">01. Wniosek Online</h2>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                                <p><a href="#" class="btn btn-primary mr-2 mb-2">Dowiedz Się Więcej</a></p>
                            </div>
                            <div>
                                <h2 class="section-title mb-3">02. Uzyskaj Akceptację</h2>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                <p><a href="#" class="btn btn-primary mr-2 mb-2">Dowiedz Się Więcej</a></p>
                            </div>
                            <div>
                                <h2 class="section-title mb-3">03. Odbierz Kartę</h2>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                                <p><a href="#" class="btn btn-primary mr-2 mb-2">Dowiedz Się Więcej</a></p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section class="site-section border-bottom bg-light" id="services-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade">
                        <h2 class="section-title mb-3">Nasze Usługi</h2>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{asset('images/flaticon-svg/svg/001-wallet.svg')}}" alt="Aplikacja Bankowa" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Konsultacje</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p><a href="#">Dowiedz Się Więcej</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{asset('images/flaticon-svg/svg/006-credit-card.svg')}}" alt="Aplikacja Bankowa" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Karty Kredytowe</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p><a href="#">Dowiedz Się Więcej</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{asset('images/flaticon-svg/svg/002-rich.svg')}}" alt="Aplikacja Bankowa" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Monitoring Finansowy</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p><a href="#">Dowiedz Się Więcej</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{asset('images/flaticon-svg/svg/003-notes.svg')}}" alt="Aplikacja Bankowa" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Konsultacje Ubezpieczeniowe</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p><a href="#">Dowiedz Się Więcej</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{asset('images/flaticon-svg/svg/004-cart.svg')}}" alt="Aplikacja Bankowa" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Inwestycje Finansowe</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p><a href="#">Dowiedz Się Więcej</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="unit-4">
                            <div class="unit-4-icon">
                                <img src="{{asset('images/flaticon-svg/svg/005-megaphone.svg')}}" alt="Aplikacja Bankowa" class="img-fluid w-25 mb-4">
                            </div>
                            <div>
                                <h3>Zarządzanie Budżetem</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p><a href="#">Dowiedz Się Więcej</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Zadowoleni Klienci</h2>
                    </div>
                </div>
            </div>
            <div class="slide-one-item home-slider owl-carousel">
                <div>
                    <div class="testimonial">

                        <blockquote class="mb-5">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>

                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="{{asset('images/person_3.jpg')}}" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>John Smith</p>
                        </figure>
                    </div>
                </div>
                <div>
                    <div class="testimonial">

                        <blockquote class="mb-5">
                            <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="{{asset('images/person_2.jpg')}}" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>Christine Aguilar</p>
                        </figure>

                    </div>
                </div>

                <div>
                    <div class="testimonial">

                        <blockquote class="mb-5">
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="{{asset('images/person_4.jpg')}}" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>Robert Spears</p>
                        </figure>


                    </div>
                </div>

                <div>
                    <div class="testimonial">

                        <blockquote class="mb-5">
                            <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="{{asset('images/person_4.jpg')}}" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>Bruce Rogers</p>
                        </figure>

                    </div>
                </div>

            </div>
        </section>

        <section class="site-section bg-light" id="pricing-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <h2 class="section-title mb-3">Cennik</h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div class="pricing">
                            <h3 class="text-center text-black">Podstawowy</h3>
                            <div class="price text-center mb-4 ">
                                <span><span>10 PLN</span> / miesiąc</span>
                            </div>
                            <ul class="list-unstyled ul-check success mb-5">

                                <li>Officia quaerat eaque neque</li>
                                <li>Possimus aut consequuntur incidunt</li>
                                <li class="remove">Lorem ipsum dolor sit amet</li>
                                <li class="remove">Consectetur adipisicing elit</li>
                                <li class="remove">Dolorum esse odio quas architecto sint</li>
                            </ul>
                            <p class="text-center">
                                <a href="#" class="btn btn-secondary">Zamów Teraz</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 pricing-popular" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing">
                            <h3 class="text-center text-black">Premium</h3>
                            <div class="price text-center mb-4 ">
                                <span><span>200 PLN</span> / miesiąc</span>
                            </div>
                            <ul class="list-unstyled ul-check success mb-5">

                                <li>Officia quaerat eaque neque</li>
                                <li>Possimus aut consequuntur incidunt</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li class="remove">Dolorum esse odio quas architecto sint</li>
                            </ul>
                            <p class="text-center">
                                <a href="#" class="btn btn-primary">Zamów Teraz</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing">
                            <h3 class="text-center text-black">Professional</h3>
                            <div class="price text-center mb-4 ">
                                <span><span>750 PLN</span> / miesiąc</span>
                            </div>
                            <ul class="list-unstyled ul-check success mb-5">

                                <li>Officia quaerat eaque neque</li>
                                <li>Possimus aut consequuntur incidunt</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Dolorum esse odio quas architecto sint</li>
                            </ul>
                            <p class="text-center">
                                <a href="#" class="btn btn-secondary">Zamów Teraz</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row site-section" id="faq-section">
                    <div class="col-12 text-center" data-aos="fade">
                        <h2 class="section-title">Często Zadawane Pytania</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Czy mogę płacić przy pomocy PayPal?</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Kiedy mogę otrzymać zwrot?</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>


                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Ile czeka się na kartę?</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Skąd wziął się Bank?</h3>
                            <p>Voluptatum nobis obcaecati perferendis dolor totam unde dolores quod maxime corporis officia et. Distinctio assumenda minima maiores.</p>
                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Jakie są godziny otwarcia?</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Czy mogę zapomnieć o płatnościach?</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>

                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Czy WSB ma coś wspólnego ze stroną?</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section" id="about-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                        <figure class="circle-bg">
                            <img src="{{asset('images/hero_1.jpg')}}" alt="Aplikacja Bankowa" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">


                        <div class="row">



                            <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                                <div class="unit-4 d-flex">
                                    <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span></div>
                                    <div>
                                        <h3>Pożyczka</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p class="mb-0"><a href="#">Dowiedz Się Więcej</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="unit-4 d-flex">
                                    <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-smartphone"></span></div>
                                    <div>
                                        <h3>Konsultacja Bankowa </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p class="mb-0"><a href="#">Dowiedz Się Więcej</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>


            </div>
        </section>




        <section class="site-section" id="blog-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade">
                        <h2 class="section-title mb-3">Nasz Blog</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div class="h-entry">
                            <a href="single.html">
                                <img src="{{asset('images/img_1.jpg')}}" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="font-size-regular"><a href="#">Podstawowe informacje na temat franczyzy Żabki</a></h2>
                            <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> 21 czerwca 1997<span class="mx-2">&bullet;</span> <a href="#">Wiadomości</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Czytaj Dalej...</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="h-entry">
                            <a href="single.html">
                                <img src="{{asset('images/img_4.jpg')}}" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="font-size-regular"><a href="#">Jak być bogatym dzięki kredytom "Na Słupa"</a></h2>
                            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> 13 lutego 2013<span class="mx-2">&bullet;</span> <a href="#">Wiadomości</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Czytaj Dalej...</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="h-entry">
                            <a href="single.html">
                                <img src="{{asset('images/img_3.jpg')}}" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="font-size-regular"><a href="#">Z pamiętnika cinkciarza</a></h2>
                            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">Wiadomości</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Czytaj Dalej...</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>




        <section class="site-section bg-light" id="contact-section" data-aos="fade">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Kontakt</h2>
                    </div>
                </div>
                <div class="row mb-5">



                    <div class="col-md-4 text-center">
                        <p class="mb-4">
                            <span class="icon-room d-block h2 text-primary"></span>
                            <span>Ul. Domaniewska 21 01-202 Warszawa</span>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p class="mb-4">
                            <span class="icon-phone d-block h2 text-primary"></span>
                            <a href="#">+48 232 323 324</a>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p class="mb-0">
                            <span class="icon-mail_outline d-block h2 text-primary"></span>
                            <a href="#">mail@mail.com</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-5">



                        <form action="#" class="p-5 bg-white">

                            <h2 class="h4 text-black mb-5">Formularz Kontaktowy</h2>

                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">Imię</label>
                                    <input type="text" id="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname">Nazwisko</label>
                                    <input type="text" id="lname" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="subject">Temat</label>
                                    <input type="subject" id="subject" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message">Wiadomość</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Tutaj napisz swoje pytania..."></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Wyślij Wiadomość" class="btn btn-primary btn-md text-white">
                                </div>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </section>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <h2 class="footer-heading mb-4">O Nas</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <h2 class="footer-heading mb-4">Na Skróty</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#about-section" class="smoothscroll">Zasady</a></li>
                                    <li><a href="#about-section" class="smoothscroll">Regulamin</a></li>
                                    <li><a href="#about-section" class="smoothscroll">O Nas</a></li>
                                    <li><a href="#services-section" class="smoothscroll">Usługi</a></li>
                                    <li><a href="#testimonials-section" class="smoothscroll">Opinie</a></li>
                                    <li><a href="#contact-section" class="smoothscroll">Kontakt</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 footer-social">
                                <h2 class="footer-heading mb-4">Polub Nas</h2>
                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4">Zapisz się na Newsletter</h2>
                        <form action="#" method="post" class="footer-subscribe">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Podaj E-Mail" aria-label="Podaj E-Mail" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-black" type="button" id="button-addon2">Wyślij</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p class="copyright"><small>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());

                                    </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div> <!-- .site-wrap -->

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>


    <script src="{{asset('js/main.js')}}"></script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Burger</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.google.com/specimen/Roboto?query=ROBO" rel="stylesheet" type="text/css" />
        <link href="https://fonts.google.com/specimen/Oswald?query=OSWAL" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <style>
            .fondo{
               color: #fff;
               background-image: url("../assets/img/portfolio/hero-2.jpeg");
               background-repeat: no-repeat;
               background-attachment: scroll;
               background-position: center center;
               background-size: cover;
           }
            .review{
                padding-top: 10.5rem;
                padding-bottom: 6rem;
                text-align: center;
                color: #fff;
                background-image: url("../assets/img/portfolio/reviews.jpeg");
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-position: center center;
                background-size: cover;
            }
            .delivery{
                padding-top: 10.5rem;
                padding-bottom: 6rem;
                text-align: center;
                color: #fff;
                background-image: url("../assets/img/portfolio/banner-4.jpeg");
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-position: center center;
                background-size: cover;
            }
        </style>
    </head>
    <body id="page-top">
        <div class="fondo" >
            <!-- Navbar -->
            <nav class="navbar navbar-expand-mg text-uppercase" id="mainNav" style="margin-top: 0%">
                <div class="container">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            ABOUT
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" type="button" id="our_menu" data-bs-toggle="dropdown" aria-expanded="false">
                            OUR MENU
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="our_menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" type="button" id="shop" data-bs-toggle="dropdown" aria-expanded="false">
                            MEGAMENU
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="shop">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <a class="navbar-brand" href="/burger">
                        <img src="{{asset('assets/img/portfolio/price-badge-yellow.png')}}" alt="" width="40" height="34">
                    </a>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" type="button" id="shop" data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="shop">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" type="button" id="blog" data-bs-toggle="dropdown" aria-expanded="false">
                            BLOG
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="blog">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" type="button" id="contacts" data-bs-toggle="dropdown" aria-expanded="false">
                            CONTACTS
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="contacts">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class=" text-white text-center">
                <div class="container d-flex align-items-center flex-column">
                    <!-- Masthead Heading-->
                    <h1 class="masthead-heading text-uppercase mb-0">BIG BURGER, <br> LITTLE MONEY</h1>
                    <!-- Masthead Avatar Image-->
                    <img class="masthead-avatar mb-5" src="{{asset('assets/img/portfolio/hero-2-img.png')}}" alt="..."  />
                </div>
            </section>
        </div>
        <img src="{{asset('assets/img/portfolio/white-overlay-wave.png')}}" alt="..." style="margin-top:-130px" width="100%">
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2">
                                <img src="{{asset('assets/img/portfolio/1161695.png')}}" alt="..." width="22%">
                            </div>
                            <p class="text-muted mb-0">BUGERS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="{{asset('assets/img/portfolio/1037775.png')}}" alt="..." width="22%">
                            <p class="text-muted mb-0">SIDES</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="{{asset('assets/img/portfolio/3390171.png')}}" alt="..." width="22%">
                            <p class="text-muted mb-0">SALADS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="{{asset('assets/img/portfolio/1037777.png')}}" alt="..." width="22%">
                            <p class="text-muted mb-0">DESSERTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hamburguesas precio-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    @foreach($burgers as $burger)
                    <div class="col-md-3 col-lg-3 mb-5">
                        <div class="card h-90">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/portfolio/single/{{$burger->image}}" alt="..." />
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0">
                                <div class="text-center"><a class="btn" href="/burger/{{$burger->id}}" style="background-color: #642f21; color: #f7be27"> <b>${{$burger->regular_price}}</b></a></div>
                            </div>
                        </div>
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$burger->name}}</h5>
                            <!-- Product price-->
                            <p class="text-muted mb-0">{{$burger->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Promociones -->
        <section class="content-section" id="portfoli">
            <div class="container px-4 px-lg-5">
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfoli-item" href="#!">
                            <img class="img-fluid" src="assets/img/portfolio/offer-1.jpeg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfoli-item" href="#!">
                            <img class="img-fluid" src="assets/img/portfolio/offer-2.jpeg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfoli-item" href="#!">
                            <img class="img-fluid" src="assets/img/portfolio/offer-3.jpeg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfoli-item" href="#!">
                            <img class="img-fluid" src="assets/img/portfolio/offer-4.jpeg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Variado Menu-->
        <section class="content-section" id="portfoli" style="padding-top: 2rem;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-0">
                    <div class="row justify-content-center">
                        <!-- Portfolio Item 1-->
                        <div class="col-md-2 col-lg-2 mb-5">
                            <div class="portfolio-item mx-auto">
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/img-24.jpeg')}}" alt="..." />
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 mb-5">
                            <div class="portfolio-item mx-auto">
                                <h5 class="fw-bolder">TUNA SALAD</h5>
                                <!-- Product price-->
                                <p class="text-muted mb-0">TEXTO DESCRC</p>
                                <p style="margin-bottom: 0px; color: red"><b>$8.99</b></p>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 mb-5">
                            <div class="portfolio-item mx-auto">
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/img-21.jpeg')}}" alt="..." />
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 mb-5">
                            <div class="portfolio-item mx-auto">
                                <h5 class="fw-bolder">TUNA SALAD</h5>
                                <!-- Product price-->
                                <p class="text-muted mb-0">TEXTO DESCRC</p>
                                <p style="margin-bottom: 0px; color: red"><b>$8.99</b></p>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 mb-5">
                            <div class="portfolio-item mx-auto">
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/img-25.jpeg')}}" alt="..." />
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 mb-5">
                            <div class="portfolio-item mx-auto">
                                <h5 class="fw-bolder">TUNA SALAD</h5>
                                <!-- Product price-->
                                <p class="text-muted mb-0">TEXTO DESCRC</p>
                                <p style="margin-bottom: 0px; color: red"><b>$8.99</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- App download -->
        <section class="text-white mb-0" id="about" style="background-color: #f7be27; pa ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h2 style="color:#642f21" >DOWNLOAD MOBILE APP AND.</h2>
                            <h2 style="color:#642f21" ><b>SAVE UP TO 20%</b>.</h2>
                            <p style="color:#642f21">Launch your mobile app landing page faster with this free, open source theme from Start Bootstrap!</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a href="#!"><img  src="assets/img/portfolio/appstore.png" alt="..." width="180px" height="60px"/></a>
                                &nbsp;
                                <a href="#!"><img  src="assets/img/portfolio/googleplay.png" alt="..." width="180px" height="60px"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <img class="img-fluid" src="assets/img/portfolio/e-shop.png" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- People -->
        <section class="page-section text-white mb-0" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <img class="img-fluid" src="assets/img/portfolio/about-01-img.png" alt="..." />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start text-black">
                            <h1 class="display-1 lh-1 mb-3">DOWNLOAD MOBILE APP AND.</h1>
                            <h1 class="display-1 lh-1 mb-3"><b>SAVE UP TO 20%</b>.</h1>
                            <p class="lead fw-normal text-muted mb-5">Launch your mobile app landing page faster with this free, open source theme from Start Bootstrap!</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Rewiew -->
        <section class="text-white text-center">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('assets/img/portfolio/reviews.jpeg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <img class="border-radius: 50%;" src="{{asset('assets/img/portfolio/review-author-1.jpeg ')}}" alt="...">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum nunc at ligula sagittis condimentum. In accumsan turpis efficitur sapien sodales lobortis. In hac habitasse platea dictumst. Etiam pellentesque felis et nibh dictum egestas eget sit amet urna. Nullam rhoncus gravida porttitor. Proin elit massa, finibus non convallis in, fringilla in metus. Sed elementum arcu et ligula consectetur, vitae molestie quam dignissim. Suspendisse potenti."</p>
                        <p>Nombre Apellido.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/portfolio/reviews.jpeg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <img class="border-radius: 50%;" src="{{asset('assets/img/portfolio/review-author-2.jpeg ')}}" alt="...">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum nunc at ligula sagittis condimentum. In accumsan turpis efficitur sapien sodales lobortis. In hac habitasse platea dictumst. Etiam pellentesque felis et nibh dictum egestas eget sit amet urna. Nullam rhoncus gravida porttitor. Proin elit massa, finibus non convallis in, fringilla in metus. Sed elementum arcu et ligula consectetur, vitae molestie quam dignissim. Suspendisse potenti."</p>
                        <p>Nombre Apellido.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/portfolio/reviews.jpeg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <img class="border-radius: 50%;" src="{{asset('assets/img/portfolio/review-author-3.jpeg ')}}" alt="...">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum nunc at ligula sagittis condimentum. In accumsan turpis efficitur sapien sodales lobortis. In hac habitasse platea dictumst. Etiam pellentesque felis et nibh dictum egestas eget sit amet urna. Nullam rhoncus gravida porttitor. Proin elit massa, finibus non convallis in, fringilla in metus. Sed elementum arcu et ligula consectetur, vitae molestie quam dignissim. Suspendisse potenti."</p>
                        <p>Nombre Apellido.</p>
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
        </section>
        <!-- Image Gallery -->
        <section class="page-section portfolio" id="portfolio" style="padding-top: 2rem">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase mb-1" style="color: #e3000e">IMAGE GALLERY</h2>
                <p class="text-muted mb-2 ml-5 mr-10"> "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, ... Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <img class="img-fluid" src="assets/img/portfolio/img-01.jpeg" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <img class="img-fluid" src="assets/img/portfolio/img-02.jpeg" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <img class="img-fluid" src="assets/img/portfolio/img-03.jpeg" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <img class="img-fluid" src="assets/img/portfolio/img-04.jpeg" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <img class="img-fluid" src="assets/img/portfolio/img-05.jpeg" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <img class="img-fluid" src="assets/img/portfolio/img-06.jpeg" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal7">
                            <img class="img-fluid" src="assets/img/portfolio/img-07.jpeg" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal8">
                            <img class="img-fluid" src="assets/img/portfolio/img-08.jpeg" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Delivery -->
        <section class="masthead delivery text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <h3 style="color: #888">WE GUARANTEE</h3>

                <h1 class="masthead-heading text-uppercase mb-0" style="color: #888">30 MINUTES DELIVERY</h1>
                <p style="color: #888">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Donec vestibulum nunc at ligula sagittis condimentum. In accumsan turpis efficitur sapien sodales lobortis.</p>
                <div class="text-center">
                    <p class="btn text-white" style="background-color: #e3000e;"> <b>CALL: 123-456-7891</b>
                    </a></div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center text-black">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">LOCATION</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">WORKING HOURS</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">WORDER NOW</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">FOLLOW US</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="py-4 text-center text-black">
            <div class="container"><small>All Rights Reserved | About Us | Gift Cards | Terms Of Use | Prvacy Policy</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/img-01.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/img-02.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/img-03.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/img-04.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/img-05.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/img-06.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 7-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" aria-labelledby="portfolioModal7" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/img-07.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 8-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" aria-labelledby="portfolioModal8" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/img-08.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

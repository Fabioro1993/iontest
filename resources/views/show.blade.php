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
                background-image: url("../assets/img/portfolio/single/banner-product-page.jpeg");
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-position: center center;
                background-size: cover;
            }

            .number{
                text-align: center;
                font-size: 25px;
                color: #f7be27;
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
        <div class="fondo" style="padding-bottom: 6rem">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-mg text-uppercase" id="mainNav" style="margin-top: 0%">
                <div class="container">
                    <a class="navbar-brand" href="/burger">
                        <img src="{{asset('assets/img/portfolio/price-badge-yellow.png')}}" alt="" width="40" height="34">
                    </a>
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
                            HOURS & LOCATIONS
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="contacts">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <p class="number" >123-456-7891</p>
                </div>
            </nav>
            <!-- Navbar -->
            <section class=" text-white text-center">
                <div class="container d-flex align-items-center flex-column">
                    <!-- Masthead Heading-->
                    <p class="text-uppercase mb-0"><a class=" text-white" href="/burger"> HOME</a> / {{$burger->name}}</p>
                    <!-- Masthead Heading-->
                    <h1 class="masthead-heading text-uppercase mb-0">{{$burger->name}}</h1>
                </div>
            </section>
        </div>
        <!-- People -->
        <section class="page-section text-white mb-0" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <img class="img-fluid" src="{{asset('assets/img/portfolio/single/'.$burger->image.'')}} " alt="..." />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start text-black">
                            <h1 class="display-1 lh-1 mb-3"> <b>{{$burger->name}}</b></h1>
                            <h4> <b style="color: #888; text-decoration: line-through">${{$burger->regular_price}}</b><b style="color: #f7be27"> ${{$burger->sale_price}}</b></h4>
                            <p class="lead fw-normal text-muted mb-5">{{$burger->description}}</p>
                            <table class="table">
                                <tbody>
                                  <tr>
                                    <td><b>Portion Size:</b></td>
                                    <td style="text-align: right" >{{$burger->portion_size}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Calories:</b></td>
                                    <td style="text-align: right" >{{$burger->calories}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Allergies:</b></td>
                                    <td style="text-align: right" >{{$burger->allegies}}</td>
                                  </tr>
                                  <tr>
                                    <td><b>Tags:</b></td>
                                    <td style="text-align: right" >{{$burger->tags}}</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center text-black">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <img class="img-fluid" src="{{asset('assets/img/portfolio/price-badge-yellow.png')}}" alt="..." height="180px" width="180px" />
                        <p class="lead mb-0">
                            <b> &copy; 2021 All Rights Reserved</b>
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <p class="lead mb-0"style="text-align: left">
                            <b>
                                Los Angeles
                                <br />
                                8721 M Central Avenue, CA 90036
                                <br />
                                Email: hello@corre.com
                                <br />
                                Call Now: <b style="text-align: left; color: #f7be27">123-456-7891</b>
                            </b>
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="container">
                            <!-- Portfolio Grid Items-->
                            <div class="row justify-content-center">
                                <!-- Portfolio Item 1-->
                                <div class="col-md-4 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto">
                                        <img class="img-fluid" src="{{asset('assets/img/portfolio/img-01.jpeg')}}" alt="..." />
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto">
                                        <img class="img-fluid" src="{{asset('assets/img/portfolio/img-02.jpeg')}}" alt="..." />
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto">
                                        <img class="img-fluid" src="{{asset('assets/img/portfolio/img-03.jpeg')}}" alt="..." />
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto">
                                        <img class="img-fluid" src="{{asset('assets/img/portfolio/img-04.jpeg')}}" alt="..." />
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto">
                                        <img class="img-fluid" src="{{asset('assets/img/portfolio/img-05.jpeg')}}" alt="..." />
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto">
                                        <img class="img-fluid" src="{{asset('assets/img/portfolio/img-06.jpeg')}}" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="py-4 text-center text-black">
            <div class="container"><small>All Rights Reserved | About Us | Gift Cards | Terms Of Use | Prvacy Policy</small></div>
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

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background: #f3f7fa;
            }
            .ht-100 {
                height: 100px;
            }
            .bg-red {
                background: #E33636;
            }
            .txt-red {
                color: #E33636;
            }
            .border-end-red {
                border-right: 1px solid #E33636;
            }
            .border-start-red {
                border-left: 1px solid #E33636;
            }
            .br-20 {
                border-radius: 20px;
            }
            .ht-50 {
                height: 50px;
            }
            .fs-30 {
                font-size: 30px;
            }
            .fs-35 {
                font-size: 35px;
            }
            #findjobs {
                background-image: url('default-images/find-jobs.png');
                background-color: #f3f7fa;
                background-position: bottom;
                background-repeat: no-repeat;
                background-size: auto;
                position: relative;
                height: 700px;
            }
            #categories {
                background-image: url('default-images/circle-left.png'), url('default-images/circle-right.png');
                background-color: #f3f7fa, #f3f7fa;
                background-position: left, right;
                background-repeat: no-repeat, no-repeat;
            }
            .jobs {
                background-color: black;
                position: relative;
                text-align: center;
                
            }
            .jobseeker-img {
                background-image: url('default-images/jobseeker.png');
                background-color: #f3f7fa;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 600px;
                opacity: .5;
            }
            .hiring-img {
                background-image: url('default-images/hiring.png');
                background-color: #f3f7fa;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 600px;
                opacity: .5;
            }
            .txt-center {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white ht-100 shadow w-100">
            <div class="container">
                <a class="navbar-brand" href="#">ProjectStacks</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#findjobs">Find Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#categories">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#whyus">Why Us</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav">
                            @auth
                            <li class="nav-item p-2 ps-0">
                                <a class="btn btn-danger bg-red" href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('default-images/user-icon.png')}}" alt="" class="">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Payments</a></li>
                                    <li><a class="dropdown-item" href="#">Saved Jobs</a></li>
                                    <li><a class="dropdown-item" href="#">Applied Jobs</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="btn btn-danger" href="#">Log Out</a></li>
                                </ul>
                            </li>
                            @else
                            <li class="nav-item p-2 ps-0">
                                <a class="btn btn-light bg-white border-0" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item p-2 ps-0">
                                <a class="btn btn-danger bg-red br-20" href="{{ route('register') }}">Sign Up</a>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <section id="findjobs" class="text-center py-5">
                <h1 class="pt-5 mt-5"><b>Find a Perfect Job Online</b></h1>
                <p class="p-2">Lorem ipsum dolor sit amet</p>
                <div class="d-flex justify-content-center">
                    <div class="input-group p-5 mt-3" style="max-width: 600px;">
                        <input type="text" class="form-control br-20 border-end-0 ht-50" placeholder="Search jobs" aria-label="" aria-describedby="basic-addon2">
                        <span class="input-group-text br-20 bg-white border-start-0" id="basic-addon2"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </section>

            <section id="categories" class="py-5">
                <h1 class="pt-5 mt-5 text-center"><b>CATEGORIES</b></h1>
                <div class="" style="background-color: none;">
                    <div class="row mt-5">
                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/technology&design.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Office & Admin</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Data Entry</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>
    
                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/business&accounting.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">English</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>
    
                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Writing</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Marketing & Sales</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Advertising</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Web Development</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Graphics & Multimedia</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Software Development</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Finance & Management</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Customer Service</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="px-3 py-4 bg-white rounded shadow text-center" style="height: 100%;">
                                <img src="{{asset('default-images/hr&marketing.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 195px;">
                                <h3 class="text-center mt-3">Project Management</h3>
                                <span class="badge rounded-pill bg-red">5,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="whyus" class="bg-red text-white rounded p-5 mb-5">
                <h1 class="text-center pt-5 mt-5"><b>WHY CHOOSE ProjectStacks?</b></h1>
                <div class="row mt-3">
                    <div class="col-12 col-md-6 mt-5">
                        <div class="row mt-5">
                            <div class="col-12 col-md-2 text-center">
                                <i class="fas fa-database text-red fs-30"></i>
                            </div>
                            <div class="col-12 col-md-10">
                                Largest Database of Online Jobs for Filipinos
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-2 text-center">
                                <i class="fas fa-globe-asia text-red fs-30"></i>
                            </div>
                            <div class="col-12 col-md-10">
                                Widevariety of online jobs - from fresh graduates to experienced workers
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-2 text-center">
                                <i class="fas fa-laptop-house text-red fs-30"></i>
                            </div>
                            <div class="col-12 col-md-10 ">
                                Work from Home - save time and money with no commute
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-2 text-center">
                                <i class="fas fa-building text-red fs-30"></i>
                            </div>
                            <div class="col-12 col-md-10">
                                Our jobs come from legitimate companies from all over the world
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-2 text-center">
                                <i class="fas fa-money-bill-wave text-red fs-30"></i>
                            </div>
                            <div class="col-12 col-md-10">
                                Get a FULL Salary - we don't take commissions, your entire salary goes to you
                            </div>
                        </div>
                        {{-- <ul class="list-unstyled">
                            <li><i class="fas fa-database text-red fs-30"></i>&emsp;Largest Database of Online Jobs for Filipinos</li>
                            <li class="mt-3"><i class="fas fa-globe-asia fs-30"></i>&emsp;Widevariety of online jobs - from fresh graduates to experienced workers</li>
                            <li class="mt-3"><i class="fas fa-laptop-house fs-30"></i>&emsp;Work from Home - save time and money with no commute</li>
                            <li class="mt-3"><i class="fas fa-building fs-30"></i>&emsp;Our jobs come from legitimate companies from all over the world</li>
                            <li class="mt-3"><i class="fas fa-money-bill-wave fs-30"></i>&emsp;Get a FULL Salary - we don't take commissions, your entire salary goes to you</li>
                        </ul> --}}
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <img src="{{asset('default-images/macbook.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="row p-5 bg-red text-light w-100">
                <div class="col-12 col-md-4">
                    <h3><b>ProjectStacks</b></h3>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <ul class="list-unstyled">
                                <li><b>Sitemap</b></li>
                                <li class="mt-3"><a href="" class="text-white text-decoration-none">About Us</a></li>
                                <li><a href="" class="text-white text-decoration-none">Categories</a></li>
                                <li><a href="" class="text-white text-decoration-none">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6">
                            <ul class="list-unstyled">
                                <li><b>Quick Links</b></li>
                                <li class="mt-3"><a href="" class="text-white text-decoration-none">Privacy Policy</a></li>
                                <li><a href="" class="text-white text-decoration-none">Terms and Conditions</a></li>
                                <li><a href="" class="text-white text-decoration-none">Help and Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <p><b>Follow Us</b></p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="" class="text-white text-decoration-none fs-35"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="text-white text-decoration-none fs-35"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="text-white text-decoration-none fs-35"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                    <hr>
                    <p class="text-white">© <b>2021 ProjectStacks</b>. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </body>
</html>

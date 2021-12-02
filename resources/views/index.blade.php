@extends('layouts.app_new')

@section('content')
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
        <div class="container" style="background-color: none;">
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
        <div class="container row mt-3">
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
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img src="{{asset('default-images/macbook.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </section>
@endsection
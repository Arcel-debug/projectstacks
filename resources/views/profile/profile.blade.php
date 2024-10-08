@extends('layouts.app_new')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-8">
                <div class="clearfix py-3">
                    <div class="form-check form-switch float-end">
                        <input class="form-check-input fs-20" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label fs-20" for="flexSwitchCheckChecked">Active</label>
                      </div>
                </div>
                <div class="border rounded shadow p-4 position-relative">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img class="object-cover rounded-circle border img-fluid" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name ?? '' }}" width="200">
                        </div>
                        <div class="col-12 col-md-8 text-start">
                            <h3>{{Auth::user()->name ?? ''}}</h3>
                            <h3 class="text-secondary">Web Developer</h3>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, nulla et iaculis bibendum, tellus purus commodo elit, sed pulvinar arcu mi id dolor. Phasellus iaculis congue lacinia.</p>
                            <small class="text-secondary">Joined: Dec 05, 2021</small>
                        </div>
                        <div class="mt-3 text-center">
                            <span class="d-inline-block p-2"><i class="fa-solid fa-user-check text-success"></i> Identity Verified <i class="fa-solid fa-check text-success"></i></span>
                            <span class="d-inline-block p-2"><i class="fa-solid fa-credit-card text-success"></i> Payment Verified <i class="fa-solid fa-check text-success"></i></span>
                            <span class="d-inline-block p-2"><i class="fa-solid fa-phone text-success"></i> Phone Verified <i class="fa-solid fa-check text-success"></i></span>
                            <span class="d-inline-block p-2"><i class="fa-solid fa-envelope text-success"></i> Email Verified <i class="fa-solid fa-check text-success"></i></span>
                        </div>
                    </div>
                    <i class="fa-solid fa-square-pen floating-edit-icon show_in_popup" data-keyid="0" title="Edit" data-url="/profile/edit_content_one_frm"></i>
                </div>
                
                <div class="row my-5">
                    <div class="col-12 col-md-4 text-center mt-3">
                        <h3 class="form_label fs-15"><i class="fa-solid fa-money-bill txt-red"></i>&emsp;EXPECTED SALARY</h3>
                        <div class="px-4">
                            <h6 class="fs-14">Php 40,000.00/month <br>( $809 USD )</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center mt-3">
                        <h3 class="form_label fs-15"><i class="fa-solid fa-clock txt-red"></i>&emsp;AVAILABILITY</h3>
                        <div class="px-4">
                            <h6 class="fs-14">40 hrs/wk<br>( $4.68 USD/hr )</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center mt-3">
                        <h3 class="form_label fs-15"><i class="fa-solid fa-business-time txt-red"></i>&emsp;EXPERIENCE</h3>
                        <div class="px-4">
                            <h6 class="fs-14">2 years in Web Development</h6>
                        </div>
                    </div>
                </div>

                <div class="border rounded shadow">
                    <div class="clearfix py-4 px-5 border-bottom">
                        <h4 class="float-start"><i class="fa-solid fa-user txt-red"></i>&emsp;Personal Details</h4>
                        <button class="btn btn-danger btn-sm float-end show_in_popup" data-keyid="0" data-url="/profile/edit_content_two_frm" title="Edit Personal Details"><i class="fa-solid fa-pencil"></i></button>
                    </div>
                    
                    <div class="py-4 px-5">
                        <div class="form-group">
                            <label for="" class="form_label fs-15">AGE:</label>
                            <span>23</span>
                        </div>
                        <div class="form-group mt-2">
                            <label for="" class="form_label fs-15">Gender:</label>
                            <span>Male</span>
                        </div>
                        <div class="form-group mt-2">
                            <label for="" class="form_label fs-15">Address:</label>
                            <span>Bacolod, Ozamiz City</span>
                        </div>
                        <div class="form-group mt-2">
                            <label for="" class="form_label fs-15">Website:</label>
                            <span>http://arcelbularon.epizy.com</span>
                        </div>
                    </div>
                </div>

                <div class="border rounded shadow mt-5">
                    <div class="clearfix py-4 px-5 border-bottom">
                        <h4 class="float-start"><i class="fa-solid fa-gear txt-red"></i>&emsp;Skills</h4>
                        <button class="btn btn-danger btn-sm float-end"><i class="fa-solid fa-pencil"></i></button>
                    </div>
                    <div class="position-relative py-4 px-5">
                        <span class="badge bg-primary">Web development</span>
                        <span class="badge bg-primary">Web development</span>
                        <span class="badge bg-primary">Web development</span>
                        <span class="badge bg-primary">Web development</span>
                        <span class="badge bg-primary">Web development</span>
                    </div>
                </div>

                <div class="border rounded shadow mt-5">
                    <h4 class="py-4 px-5 border-bottom"><i class="fas fa-star txt-red"></i>&emsp;Reviews</h4>
                    <div class="py-4 px-5 text-center">
                        <span>No reviews found</span>
                    </div>
                </div>

                <div class="border rounded shadow mt-5">
                    <div class="py-4 px-5 clearfix border-bottom ">
                        <h4 class="float-start"><i class="fas fa-briefcase txt-red"></i>&emsp;Experiences</h4>
                        <button class="btn btn-danger btn-sm float-end" title="Add New Experience"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    
                    <div class="py-4 px-5">
                        <div class="position-relative border-bottom mt-3">
                            <h5>Laravel Developer</h5>
                            <span class="fw-600 fs-14">Webdev Guru</span><br>
                            <small>Apr 2020 - Present</small>
                            <p class="fs-14 mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, nulla et iaculis bibendum, tellus purus commodo elit, sed pulvinar arcu mi id dolor. Phasellus iaculis congue lacinia.
                            </p>
                            <div class="btn-group ellipsis-edit-icon">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                  </ul>
                            </div>
                        </div>
                        <div class="position-relative border-bottom mt-3">
                            <h5>Laravel Developer</h5>
                            <span class="fw-600 fs-14">Webdev Guru</span><br>
                            <small>Apr 2020 - Present</small>
                            <p class="fs-14 mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, nulla et iaculis bibendum, tellus purus commodo elit, sed pulvinar arcu mi id dolor. Phasellus iaculis congue lacinia.
                            </p>
                            <div class="btn-group ellipsis-edit-icon">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border rounded shadow mt-5">
                    <div class="py-4 px-5 clearfix border-bottom ">
                        <h4 class="float-start"><i class="fas fa-briefcase txt-red"></i>&emsp;Education</h4>
                        <button class="btn btn-danger btn-sm float-end"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    
                    <div class="py-4 px-5">
                        <div class="position-relative border-bottom py-3">
                            <h5>Bachelor of Science in Information Technology</h5>
                            <span class="fw-600 fs-14">Misamis University, Philippines</span><br>
                            <small>2015 - 2019 (4 years)</small>
                            <div class="btn-group ellipsis-edit-icon">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2"></div>
        </div>

    </div>
@endsection
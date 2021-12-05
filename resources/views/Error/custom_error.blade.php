@extends(Request::ajax() ? 'layouts.app_xml' : 'layouts.app')

@section('content')
    <div class="container">
        <div class="card" style="background-color: #9933ff;">
            <div class="card-body" style="padding-left: 150px; padding-right: 150px;">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('planets1.png') }}" alt="image" class="img-fluid border-0 mt-5" style="background-color: #9933ff">
                </div>
                
                <h3 class="text-white text-uppercase">Looks like you discovered a bug! Report it to the developer immediately to help you get rid of it.</h3>
                <p class="text-white mt-3">Error message: {{ $error_message }}</p>

                <a href="{{ url('dashboard') }}" class="btn btn-primary mb-5">Go to Dashboard</a>
            </div>
        </div>
    </div>
@endsection
@extends(Request::ajax() ? 'layouts.app_xml' : 'layouts.app')

@section('content')
    <div class="container" >
        <div class="card" style="background-color: #9933ff;">
            <div class="card-body" style="padding-left: 150px; padding-right: 150px;">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('planets1.png') }}" alt="image" class="img-fluid border-0 mt-5" style="background-color: #9933ff">
                </div>
                
                <h3 class="text-white text-uppercase">Looks like you discovered something that isn't from around here</h3>
                <p class="text-white mt-3">The page you are trying to access is for ADMIN only. Click the button below to go back to dashboard. Bye!</p>

                <a href="{{ url('dashboard') }}" class="btn btn-primary mb-5">Go to Dashboard</a>
            </div>
        </div>
    </div>
@endsection
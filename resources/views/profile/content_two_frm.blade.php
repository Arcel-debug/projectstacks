@extends(Request::ajax() ? 'layouts.app_xml' : 'layouts.app_new')

@section('content')
<div class="container">
    <div class="card_header border-bottom p-2">
        <h4 class="card-title d-inline-block mt-2">Profile Appearance</h4>
        <div class="d-inline-block float-end">
            <ul class="list-inline">
                <li class="list-inline-item"><button class="btn btn-danger btn-sm btn_close" data-tableid=""><i class="fa-solid fa-xmark"></i></button></li>
            </ul>
        </div>
    </div>

    <div class="card_body px-2 py-4">
        <form action="/profile/update_content_two_frm" enctype="multipart/form-data" method="POST">
            <div class="row">
                <div class="col col-12">
                    <label for="age" class="form_label">Age</label>
                    <input type="number" name="age" class="form-control" id="age" value="{{ $data['age'] ?? '' }}" placeholder="Age" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-12">
                    <label for="gender" class="form_label">Gender</label>
                    <select name="gender" id="gender" class="form-select">
                        <option value="Male" @if(!empty($data['gender']) && $data['gender'] == 'Male') selected @endif>Male</option>
                        <option value="Female" @if(!empty($data['gender']) && $data['gender'] == 'Female') selected @endif>Female</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-12">
                    <label for="address" class="form_label">Address</label>
                    <textarea name="address" class="form-control" id="address" placeholder="Address" maxlength="250">{{ $data['address'] ?? '' }}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-12">
                    <label for="website" class="form_label">Website</label>
                    <input type="text" name="website" class="form-control" id="website" value="{{ $data['website'] ?? '' }}" placeholder="Website" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <button type="button" class="btn btn-primary d-inline-block btn_save float-end">
                        <i class="fas fa-save icon"></i>
                        Save
                    </button>
                </div>
            </div>
            @csrf
            <input type="hidden" name="keyid" value="{{$data['id'] ?? '0'}}">
        </form>
    </div>
</div>
@endsection
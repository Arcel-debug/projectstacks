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
        <form action="/profile/update_content_one_frm" enctype="multipart/form-data" method="POST">
            <div class="row">
                <div class="col col-12">
                    <label for="name" class="form_label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $data['name'] ?? '' }}" placeholder="User Name" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-12">
                    <label for="profile_title" class="form_label">Profile Title</label>
                    <input type="text" name="profile_title" class="form-control" id="profile_title" value="{{ $data['profile_title'] ?? '' }}" placeholder="Profile Title">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-12">
                    <label for="profile_description" class="form_label">Profile Description <small>(max: 250 words)</small></label>
                    <textarea name="profile_description" class="form-control" id="profile_description" placeholder="Profile Description" maxlength="250">{{ $data['profile_description'] ?? '' }}</textarea>
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
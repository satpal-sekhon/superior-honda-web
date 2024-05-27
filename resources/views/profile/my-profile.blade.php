@extends('layouts.my-account')

@section('my-account')
    <div class="account__content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2 class="account__content--title h3 mb-20">My Profile</h2>
        <div class="card-block">
            <form action="{{ route('profile.update',['profile'=> Auth::id() ])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-3 form-group">
                        <x-input-text name="first_name" label="First Name" value="{{ Auth::user()->first_name }}"></x-input-text>
                    </div>
                    <div class="col-md-3 form-group">
                        <x-input-text name="last_name" label="Last Name" value="{{ Auth::user()->last_name }}"></x-input-text>
                    </div>
                    <div class="col-md-6 form-group">
                        <x-input-text name="email" label="Email Address" value="{{ Auth::user()->email }}" disabled></x-input-text>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <x-input-text name="phone_digicel" label="Phone (Digicel)" value="{{ Auth::user()->phone_digicel }}" ></x-input-text>
                    </div>
                    <div class="col-md-6 form-group">
                        <x-input-text name="phone_lime" label="Phone (Lime)" value="{{ Auth::user()->phone_lime }}" ></x-input-text>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="text" name="date_of_birth" class="account__login--input datepicker" value="{{ Auth::user()->date_of_birth }}" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="col-md-6 form-group">
                        <x-input-text name="lic_no" label="Lic No" value="{{ Auth::user()->lic_no }}" ></x-input-text>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <x-input-text name="address" label="Address" value="{{ Auth::user()->address }}" ></x-input-text>
                    </div>
                </div>
                <button type="submit" class="new__address--btn primary__btn mb-25">Save</button>
            </form>
        </div>

    </div>

    <x-include-plugins datePicker></x-include-plugins>
@endsection

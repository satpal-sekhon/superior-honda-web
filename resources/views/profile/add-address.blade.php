@extends('layouts.my-account')

@section('my-account')
    <div class="account__content">
        <h2 class="account__content--title h3 mb-20">Add New Address</h2>
        <form action="{{ route('addresses.store') }}" method="POST">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <label>Full Name</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>Mobile Number</label>
                <input type="number" name="mobile_no" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>Address (House No., Building Name)</label> 
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>State</label>
                <input type="text" name="state" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>City</label>
                <input type="text" name="city" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>Postal Code</label>
                <input type="number" name="postal_code" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>Nearby Famous Shop/Mall/Landmark</label>
                <input type="text" name="nearby" class="form-control" required>
            </div>
        </div>
        <br/>
        <button class="new__address--btn primary__btn">Save Address</button>
        </form>
    </div> 
@endsection

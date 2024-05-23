@extends('layouts.my-account')

@section('my-account')
    <div class="row">
        <div class="col-md-6">
            <h2 class="account__content--title h3 mb-20">Add Vehicles</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('vehicles.index') }}" class="btn btn-primary primary-btn">Go Back
            </a>
        </div>
        <div class="account__table--area">
            <div class="card-block">
                <form action="{{ route('vehicles.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <x-input-text name="vehicle_no" label="Vehicle No"
                                value="{{ old('vehicle_no') }}"></x-input-text>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="account__login--input">
                                <option value="" selected disabled>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="brand_name" class>Brand Name</label>
                            <select class="account__login--input" id="brand_name" name="brand_name">
                                <option value="" selected disabled>Select Brand</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="model_name" class>Model Name</label>
                            <select class="account__login--input" id="model_name" name="model_name">
                                <option value="" selected disabled>Select Model</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="model_variant_name" class>Model Variant Name</label>
                            <select class="account__login--input" id="model_variant_name" name="model_variant_name">
                                <option value="" selected disabled>Select Model Variant Name</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="model_name" class>Vehicle Type</label>
                            <select class="account__login--input" id="vehicle_type" name="vehicle_type">
                                <option value="" selected disabled>Select Vehicle Type</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <x-input-text name="engine_no" label="Engine No"
                                value="{{ old('engine_no') }}"></x-input-text>
                        </div>

                        <div class="col-md-6 form-group">
                            <x-input-text name="year" label="Year" value="{{ old('year') }}"></x-input-text>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <x-input-text name="color" label="Color" value="{{ old('color') }}"></x-input-text>
                        </div>

                        <div class="col-md-6 form-group">
                            <x-input-text name="chasis_no" label="Chasis No"
                                value="{{ old('chasis_no') }}"></x-input-text>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="branch">Additional Detail</label>
                            <textarea id="additional_detail" name="additional_detail" class="account__login--input" rows="2" cols="50"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary primary-btn">Save</button>
                </form>
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(function() {
            $('#category_id').on('change', function() {
                var category_id = this.value;
                $("#brand_name").html('');
                $("#vehicle_type").html('');
                $("#model_name").html('<option value="">Select Model</option>');
                $("#model_variant_name").html('<option value="">Select Model Variant</option>');
                $.ajax({
                    url: "{{ url('get-vehicle-brand') }}",
                    type: "POST",
                    data: {
                        category_id: category_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#brand_name').html(result.options);
                        $("#vehicle_type").html(result.vehicleTypeOption);
                    }
                });
            });
    
            $('#brand_name').on('change', function() {
                var brand_id = this.value;
                $("#model_name").html('');
                $.ajax({
                    url: "{{ url('get-vehicle-model') }}",
                    type: "POST",
                    data: {
                        brand_id: brand_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#model_name').html(result.options);
                    }
                });
            });
    
            $('#model_name').on('change', function() {
                var model_id = this.value;
                $("#model_variant_name").html('');
                $.ajax({
                    url: "{{ url('get-vehicle-model-variant') }}",
                    type: "POST",
                    data: {
                        model_id: model_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#model_variant_name').html(result.options);
                    }
                });
            });
        })
    </script>
@endsection

@extends('layouts.my-account')

@section('my-account')
    <div class="account__content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2 class="account__content--title h3 mb-20">Addresses</h2>
        <button class="new__address--btn primary__btn mb-25" type="button"><a href="{{ route('addresses.create') }}">Add a new address</a></button>
        <div class="account__details two">
            <h3 class="account__details--title h4">Default</h3>
            <p class="account__details--desc">Admin <br> Dhaka <br> Dhaka 12119 <br> Bangladesh</p>
            <a class="account__details--link" href="#">View Addresses (1)</a>
        </div>
        <div class="account__details--footer d-flex">
            <button class="account__details--footer__btn" type="button">Edit</button>
            <button class="account__details--footer__btn" type="button">Delete</button>
        </div>
    </div>
@endsection
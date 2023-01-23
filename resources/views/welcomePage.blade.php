@extends('Component.welcomenavbar')

@section('document_title', 'Welcome')

@section('body')

    <div class="col-12 card">
        <img src="{{asset('storage/images/welcome_page/black_bg.jpg')}}" alt="Responsive image" style="width:100%;" class="card-img position-absolute opacity-50">
        <img src="{{asset('storage/images/welcome_page/welcome_bg.jpeg')}}" alt="Responsive image" style="width:100%;" class="card-img">
        <div class="card-img-overlay text-white d-flex justify-content-center align-items-center overlay-dark">
            <div class="col text-center">
                <h1 class="text-center" style="color: white;">Welcome to <u style="text-decoration-color: #1385D8;">MaiBoutique</u></h1>
                <p class="text-center font-weight-light" style="color: white">Online Boutique that Provides You with Various Clothes to Suit Your Various Activities</p>
                <a href="{{ route('index_register') }}" class="btn btn-primary"><u>SIGN UP NOW</u></a>
            </div>
        </div>
    </div>

@endsection

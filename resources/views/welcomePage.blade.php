@extends('Component.welcomenavbar')

@section('document_title', 'Welcome')

@section('body')

<div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first" >
                <div class="gradientImage"><img src="{{asset('storage/images/welcome_page/welcome3_bg.jpg')}}" alt=""></div>
                <div class="carousel-caption d-none d-md-block" style="height:60%;">
                    <h1 class="text-center" style="color: white;">Welcome to <img src="{{asset('storage/images/welcome_page/DUOQLO.png')}}" style="width: 100px; height: 100px;"> </h1>
                    <p class="text-center font-weight-light" style="font-size: 22px; color: white">Online Store offering fashion and quality at the best price in sustainable way</p>
            </br>
                    <a href="{{ route('index_register') }}" class="btn btn-lg btn-danger">Sign Up</a>
                </div>
            </div>

            <div class="slide" >
                <div class="gradientImage"><img src="{{asset('storage/images/welcome_page/welcome2_bg.jpg')}}" alt=""></div>
                <div class="carousel-caption d-none d-md-block" style="height:60%;">
                    <h1 class="text-center" style="color: white;">Welcome to <img src="{{asset('storage/images/welcome_page/DUOQLO.png')}}" style="width: 100px; height: 100px;"> </h1>
                    <p class="text-center font-weight-light" style="font-size: 22px; color: white">Online Store offering fashion and quality at the best price in sustainable way</p>
            </br>
                    <a href="{{ route('index_register') }}" class="btn btn-lg btn-danger">Sign Up</a>
                </div>
            </div>

            <div class="slide" >
                <div class="gradientImage"><img src="{{asset('storage/images/welcome_page/welcome_bg.jpg')}}" alt=""></div>
                <div class="carousel-caption d-none d-md-block" style="height:60%;">
                    <h1 class="text-center" style="color: white;">Welcome to <img src="{{asset('storage/images/welcome_page/DUOQLO.png')}}" style="width: 100px; height: 100px;"> </h1>
                    <p class="text-center font-weight-light" style="font-size: 22px; color: white">Online Store offering fashion and quality at the best price in sustainable way</p>
            </br>
                    <a href="{{ route('index_register') }}" class="btn btn-lg btn-danger">Sign Up</a>
                </div>
            </div>

            <div class="slide" >
                <div class="gradientImage"><img src="{{asset('storage/images/welcome_page/welcome4_bg.jpg')}}" alt=""></div>
                <div class="carousel-caption d-none d-md-block" style="height:60%;">
                    <h1 class="text-center" style="color: white;">Welcome to <img src="{{asset('storage/images/welcome_page/DUOQLO.png')}}" style="width: 100px; height: 100px;"> </h1>
                    <p class="text-center font-weight-light" style="font-size: 22px; color: white">Online Store offering fashion and quality at the best price in sustainable way</p>
            </br>
                    <a href="{{ route('index_register') }}" class="fw-bold btn btn-lg btn-danger">Sign Up</a>
                </div>
            </div>
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>


    <footer>
        <div class="footer">

            <ul class="list">
                <li>
                    <a href="#">Privacy Policy</a>
                </li>

                <li>
                    <a href="#">Terms of Service</a>
                </li>

                <li>
                    <a href="#">Contact Us</a>
                </li>

                <li>
                    <a href="#">About Us</a>
                </li>
            </ul>

            <ul class="socials">

                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-reddit-alien"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>

            </ul>
            <p>Copyright &copy;2021 <img src="{{asset('storage/images/welcome_page/DUOQLO.png')}}" class="width="10" height="20">
                all rights reserved.</p>

        </div>

    </footer>


@endsection

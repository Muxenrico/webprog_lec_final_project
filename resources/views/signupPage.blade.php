@extends('Component.welcomenavbar')

@section('document_title', 'Sign Up')

@section('body')

<style>

#title{
color: #ffffff;

}

.form{
color: #ffffff;
}

.form-check-label{
color: #ffffff;
}

a{
    color: #ffffff;
}

a:hover{
    color: red;
}

</style>


    <div class="p-5 m-5">
        <div class="mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <p id="title" class="fs-1 fw-bold">Sign Up</p>
            
            <form enctype="multipart/form-data"action="{{ route('register') }}" method="POST" class="mb-5 col-6">
                {{-- CSRF --}}
                @csrf
            <div class="form">
                <div class="form-group mb-3 w-100">
                  <label for="exampleInputUsername1" class="form-label">Username</label>
                  <input name="inputUsername" type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="(5-20 letters)">
                </div>
                <div class="form-group mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input name="inputEmail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="form-group mb-3 w-100" class="form-label">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="inputPassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="(5-20 letters)">
                </div>
                <div class="form-group mb-3 w-100" class="form-label">
                    <label for="exampleInputPhoneNumber1">Phone Number</label>
                    <input name="inputPhoneNumber" type="text" class="form-control" id="exampleInputPhoneNumber1" aria-describedby="emailHelp" placeholder="(10-13 numbers)">
                </div>
                <div class="form-group mb-4 w-100" class="form-label">
                    <label for="exampleInputAddress1">Address</label>
                    <input name="inputAddress" type="text" class="form-control" id="exampleInputAddress1" aria-describedby="emailHelp" placeholder="(min 5 letters)">
                </div>

                </div>

                <div class="mb-2">
                    {{-- ERROR MESSAGE --}}
                    @if($errors->any())
                      <p class="text-danger">{{ $errors->first() }}</p>
                    @endif
                </div>
                <div class="form-group mb-3 w-100 text-center">
                    <button type="submit" class="btn btn-danger mb-1 w-100">Submit</button>
                    <small id="" class="form-text text-muted">Already Registered? <a href="{{ route('index_login') }}">Sign In Here</a></small>
                </div>
              </form>
        </div>
    </div>


    <footer>
        <div class="footer">
            <p>Copyright &copy;2021 <img src="{{asset('storage/images/welcome_page/DUOQLO.png')}}" class="width="10" height="20"> Online boutique that provides you with various clothes to suit your various activities</p>

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

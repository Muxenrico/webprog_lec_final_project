@extends('Component.navbarmember')

@section('document_title', 'Edit Profile')

@section('body')

    <div class="p-5 m-5">
        <div class="border pb-5 pt-5 col-6 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <p id="title" class="fs-1 fw-bold">Update Profile</p>
            
            <form class="col-6" enctype="multipart/form-data" action="/updateProfile" method="POST" class="mb-5">
                {{-- CSRF --}}
                @csrf

                @method('PATCH')

                <div class="form-group mb-3 w-100">
                    <label for="exampleInputUsername1" class="form-label">Username</label>
                    <input name="inputUsername" type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="(5-20 letters)">
                </div>
                <div class="form-group mb-3 w-100">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input name="inputEmail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="form-group mb-3 w-100" class="form-label">
                    <label for="exampleInputPhoneNumber1">Phone Number</label>
                    <input name="inputPhoneNumber" type="text" class="form-control" id="exampleInputPhoneNumber1" aria-describedby="emailHelp" placeholder="(10-13 numbers)">
                </div>
                <div class="form-group mb-4 w-100" class="form-label">
                    <label for="exampleInputAddress1">Address</label>
                    <input name="inputAddress" type="text" class="form-control" id="exampleInputAddress1" aria-describedby="emailHelp" placeholder="(min 5 letters)">
                </div>
                <div class="mb-2">
                    {{-- ERROR MESSAGE --}}
                    @if($errors->any())
                    <p class="text-danger">{{ $errors->first() }}</p>
                    @endif
                </div>
                <div class="form-group mb-3 w-100 text-center">
                    <button type="submit" class="btn btn-success mb-1 w-100">Save Update</button>
                </div>
            </form>
            <div class="form-group mb-3 col-6">
                <a href="/m-profile" type="submit" class="btn btn-outline-danger">Back</a>
            </div>
        </div>
    </div>

@endsection

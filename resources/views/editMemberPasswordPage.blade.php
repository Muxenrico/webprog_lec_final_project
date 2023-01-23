@extends('Component.navbarmember')

@section('document_title', 'Edit Password')

@section('body')

    <div class="p-5 m-5">
        <div class="border pb-5 pt-5 col-6 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <p id="title" class="fs-1 fw-bold">Update Password</p>
            
            <form class="col-6" enctype="multipart/form-data" action="/updatePassword" method="POST" class="mb-5">
                {{-- CSRF --}}
                @csrf

                @method('PATCH')

                <div class="form-group mb-3 w-100">
                    <label for="exampleInputPassword1" class="form-label">Old Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="5-20 characters">
                </div>
                <div class="form-group mb-3 w-100">
                    <label for="exampleInputPassword2" class="form-label">New Password</label>
                    <input name="inputNewPassword" type="password" class="form-control" id="exampleInputPassword2" placeholder="5-20 characters">
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

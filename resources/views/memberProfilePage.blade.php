@extends('Component.navbarmember')

@section('document_title', 'My Profile')

@section('body')

<div class="p-5 m-5">
    <div class="border col-6 mx-auto d-flex flex-column justify-content-center align-items-center p-3 m-5">
        <p id="title" class="fs-1 fw-bold">My Profile</p>
        <form class="d-flex flex-column justify-content-center align-items-center">
            @csrf
            
            <button type="button" class="btn btn-dark" disabled>{{ $currUser->type }}</button>
            <h5 class="mt-3">Username : {{ $currUser->username }}</h5>
            <span>{{ $currUser->email }}</span>
            <span class="mt-1">Address : {{ $currUser->address }}</span>
            <span class="mt-1">Phone : {{ $currUser->phone_number }}</span>

            <div class="row p-3 d-flex justify-content-center align-items-center">
                <div class="col d-flex flex-column">
                    <form>
                        {{-- CSRF --}}
                        @csrf
                        <a href="/editProfile" type="submit" class="btn btn-primary">Edit Profile</a>
                    </form>
                </div>
                <div class="col">
                    <form>
                        {{-- CSRF --}}
                        @csrf
                        <a href="/editPassword" type="submit" class="btn btn-outline-primary">Edit Password</a>
                    </form>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection

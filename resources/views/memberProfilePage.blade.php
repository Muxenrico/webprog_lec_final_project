@extends('Component.navbarmember')

@section('document_title', 'My Profile')

@section('body')
<style>
*{
    background-color: #252525;
    padding: 0px;
    margin: 0px;
}
.profile{
    color:white;
}
</style>
</br></br>

<div class="profile">
<div class="p-5">
    <div class="border col-6 mx-auto d-flex flex-column justify-content-center align-items-center p-3 m-5">
        <p id="title" class="fs-1 fw-bold">My Profile</p>
        <form class="d-flex flex-column justify-content-center align-items-center">
            @csrf
            
            <button type="button" class="btn btn-light" disabled>{{ $currUser->type }}</button>
            <h5 class="mt-3">Username : {{ $currUser->username }}</h5>
            <span>{{ $currUser->email }}</span>
            <span class="mt-1">Address : {{ $currUser->address }}</span>
            <span class="mt-1">Phone : {{ $currUser->phone_number }}</span>

            <div class="row p-3 d-flex justify-content-center align-items-center">
                <div class="col d-flex flex-column">
                    <form>
                        {{-- CSRF --}}
                        @csrf
                        <a href="/editProfile" style ="width: 150px" type="submit" class="btn btn-danger">Edit Profile</a>
                    </form>
                </div>
                <div class="col">
                    <form>
                        {{-- CSRF --}}
                        @csrf
                        <a href="/editPassword" style ="width: 150px" type="submit" class="btn btn-outline-danger">Edit Password</a>
                    </form>
                </div>
            </div>
        </form>

    </div>
</div>
</div>

@endsection

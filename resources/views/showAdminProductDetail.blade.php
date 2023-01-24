@extends('Component.navbaradmin')

@section('document_title', 'Product Details')

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
        <div class="border col-4 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="row mx-auto">
                <div class="col align-items-center m-3 mx-auto">
                    <img src="{{asset('storage/images/clothes/'.$currProduct->image)}}" class="img-fluid img-thumbnail" alt="Image Not Found">
                </div>
                <form enctype="multipart/form-data" @yield('method') @yield('action') class="col m-3 mx-auto">
                    {{-- CSRF --}}
                    @csrf
                    {{-- Method --}}
                    @yield('method_field')
                
                    <div class="border-bottom">
                        <div class="">
                            <h1 for="ProductName">@yield('productName')</h1>
                        </div>
                        <div class="">
                            <h3 for="ProductPrice">@yield('productPrice')</h2>
                        </div>
                    </div>
                    <div class="mt-3 border-bottom border-secondary">
                        <div class="">
                            <h4>Product Detail</h4>
                        </div>
                        <div class="">
                            <p for="ProductDescription">@yield('productDescription')</p>
                        </div>
                        <div class="">
                            <p for="ProductStock">Stock : @yield('productStock')</p>
                        </div>
                    </div>
                    <div class="border-top border-secondary ">
                        <div class="container">
                            <div class="row mt-3">
                            <div class="col-12 d-flex flex-column mb-3">
                                    <a href="/deleteData/{{ $currProduct->id }}" type="submit" class="btn btn-danger">Delete Item</a>
                                </div>
                                <div class="col-12 d-flex flex-column">
                                    <a href="/a-home" type="button" class="btn btn-outline-danger">Back</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

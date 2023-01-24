@extends('Component.navbarmember')

@section('document_title', 'Edit Cart')

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
    <div class="p-5">

    <div class="profile">
        <div class="border pb-5 pt-5 col-8 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="row mx-auto">
                <p id="title" class="text-center fs-1 fw-bold">Edit Cart</p>
                <div class="col align-items-center m-3 mx-auto">
                    <img src="{{asset('storage/images/clothes/'.$currProduct->image)}}" class="img-fluid img-thumbnail" alt="Image Not Found">
                </div>
                <form enctype="multipart/form-data" @yield('method') @yield('action') class="col m-5 mx-auto pt-5">
                    {{-- CSRF --}}
                    @csrf

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
                    <div class="border-top border-secondary">
                    </div>
                </form>
                <form enctype="multipart/form-data" action="/updateCart/{{$curr_cart_items->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-2 mt-2">
                                <h5>Quantity :</h5>
                            </div>
                            <div class="col">
                                <input name="quantity" type="number" class="form-control text-center" id="exampleInputQuantity1" aria-describedby="emailHelp" min="1" placeholder="0">
                            </div>
                            <div class="col d-flex flex-column">
                                <button id="quantity" type="submit" class="btn btn-danger">Update Cart</button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex flex-column">
                                <a href="/m-cart" type="button" class="btn btn-outline-danger">Back</a>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection

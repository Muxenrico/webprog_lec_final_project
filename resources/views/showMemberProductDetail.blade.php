@extends('Component.navbarmember')

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
    <div class="p-5">
        <div class="border pb-5 col-3 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="row mx-auto">
                <div class="col align-items-center mx-auto mt-3">
                    <img src="{{asset('storage/images/clothes/'.$currProduct->image)}}" class="img-fluid img-thumbnail" alt="Image Not Found">
                </div>

                <div class="profile">
                <form enctype="multipart/form-data" @yield('method') @yield('action') class="col m-5 mx-auto">
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
                <form action="/add-to-cart/{{$currProduct->id}}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row justify-content-center align-items-center text-center inline-block">
                            <div class="col-3">
                                <h5>Quantity:</h5>
                            </div>
                                <div class="col-3 d-flex">
                                <input name="quantity" type="number" style ="width:75px;" class="form-control text-center" id="exampleInputQuantity1" aria-describedby="emailHelp" min="1" placeholder="0">
                                </div>
                            <div class="col-6 d-flex flex-column">
                                <button id="quantity" type="submit" class="btn btn-danger">Add To Cart</button>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-12 d-flex flex-column">
                                <a href="/m-home" type="button" class="btn btn-outline-danger">Back</a>
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
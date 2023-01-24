@extends('Component.navbarmember')

@section('document_title', 'My Cart')

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

    <div class="d-flex flex-column align-items-center">
        <div class="mt-5">
            <p id="title" class="text-white fs-1 fw-bold">My Cart</p>
        </div>
    </div>
    <div>
    
    <div class="container-fluid d-flex justify-content-end">
        <div class="row text-white d-flex justify-content-end align-items-center">
            <div class="col">
                <h4>Total Price: Rp{{number_format($total_price,0,'.', '.')}}</h4>
            </div>
            <div class="col">
                <form class="col" action="/checkout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Checkout({{$total_product}})</button>
                </form>
            </div>
        </div>
    </div>

    </div>
    <div class="row row-cols-1 row-cols-md-6 g-4 p-5 ">
        @foreach($products as $product)
            <div class="col ">
                <div class="card h-100 text-black bg-light mb-3" style="width: 100%">
                    <img class="card-img-top" src="{{asset('storage/images/clothes/'.$product->image)}}" alt="Image Not Found" style="width: 100%; height:70%">
                    <div class="card-body text-white">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Rp{{number_format($product->price,0,'.', '.')}}</p>
                        <p class="card-text">Qty: {{$product->cart_qty}}</p>
                        <div class="container">
                            <div class="row d-flex flex-row">
                                <a href="/editCart/{{$product->id}}" type="submit" class="col btn btn-danger" style="width: 150px">Edit Cart</a>
                            <form class="col" action="/delete-from-cart/{{$product->id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger" style="width: 150px">Remove </br>From Cart</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="p-5 d-flex justify-content-center">
        {{ $products->withQueryString()->links() }}
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

@endsection

@extends('Component.navbaradmin')

@section('document_title', 'Search')

@section('body')
<style>
*{
    background-color: #252525;
    padding: 0px;
    margin: 0px;
}
</style>

    <div class="d-flex flex-column align-items-center mt-4">
        <div class="mt-5">
            
</br>
            <p style="color:white;" id="title" class="fs-1 fw-bold">Search Your Favorite Clothes!</p>
        </div>
    </div>


    
    <form class="d-flex p-5" action="{{ url('/a-view/search') }}">
        <input class="form-control me-2" type="search" placeholder="Insert keywords" aria-label="Search" name="search">
        <button class="btn btn-outline-danger   " type="submit">Search</button>
    </form>

    <div class="row row-cols-1 row-cols-md-6 g-4 p-5">
        @foreach($products as $product)
            <div class="col">
                <div class="card h-100 text-white bg-light mb-3" style="width: 100%">
                    <img class="card-img-top" src="{{asset('storage/images/clothes/'.$product->image)}}" alt="Image Not Found" style="width: 100%; height:70%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Rp.{{number_format($product->price,0,'.', '.')}}</p>
                        <div class="">
                            <a href="/a-productDetail/{{$product->id}}" type="submit" class="btn btn-danger">More Detail</a>
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
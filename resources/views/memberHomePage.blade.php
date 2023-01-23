@extends('Component.navbarmember')

@section('document_title', 'Home')

@section('body')

    <div class="d-flex flex-column align-items-center mt-4">
        <div class="mt-5">
            <p id="title" class="fs-1 fw-bold">Find Your Best Clothes Here!</p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 m-2">
        @foreach($products as $product)
            <div class="col">
                <div class="card h-100 text-black bg-light mb-3" style="width: 100%">
                    <img class="card-img-top" src="{{asset('storage/images/clothes/'.$product->image)}}" alt="Image Not Found" style="width: 100%; height:70%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Rp{{number_format($product->price,0,'.', '.')}}</p>
                        <div class="">
                            <a href="/m-productDetail/{{$product->id}}" type="submit" class="btn btn-primary">More Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="m-5 d-flex justify-content-center">
        {{ $products->withQueryString()->links() }}
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

@endsection

@extends('showAdminProductDetail')

@section('method')
    {{-- METHOD --}}
    method="GET"
@endsection
@section('method_field')
    {{-- METHOD PATCH --}}
    @method('GET')
@endsection
@section('action')
    {{-- ACTION --}}
    action='/a-productDetail/{{$currProduct->id}}'
@endsection

@section('productImage')
    {{$currProduct->image}}
@endsection

@section('productName')
    {{$currProduct->name}}
@endsection

@section('productDescription')
    {{$currProduct->description}}
@endsection

@section('productPrice')
    Rp{{number_format($currProduct->price,0,'.', '.')}}
@endsection

@section('productStock')
    {{$currProduct->stock}}
@endsection

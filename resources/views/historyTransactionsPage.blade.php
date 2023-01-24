@extends('Component.navbarmember')

@section('document_title', 'Home')

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


    <div class="text-white d-flex flex-column align-items-center">
        <div class="mt-5">
            <p id="title" class="fs-1 fw-bold">Check What You've Bought!</p>
        </div>
    </div>

    <div class="col cols-row-1 colds-row-md-4 g-4 p-5">
        @foreach($transactions as $t)
            <div class="card text-white bg-light row m-3 mx-auto">
                <div class="w-100 p-3" style="width: 100%">
                    <h4 class="mb-3" class="card-title">{{date("Y-m-d", strtotime($t->created_at))}}</h4>
                    @php
                        $total_price = 0
                    @endphp
                        @foreach($transaction_items as $ti)
                            @if($ti->transaction_id == $t->id)
                                <p>• {{$ti->transaction_qty}} pc(s) {{$ti->name}} : Rp{{ number_format($ti->transaction_qty * $ti->price,0,'.', '.') }}</p>
                                @php
                                    $total_price += ($ti->transaction_qty * $ti->price)
                                @endphp
                            @endif
                        @endforeach
                    <h4 class="card-body">Total Price: Rp{{number_format($total_price,0,'.', '.')}}</h4>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@extends('Component.navbaradmin')

@section('document_title', 'Add Item')

@section('body')

<style>
*{
    background-color: #252525;
    padding: 0px;
    margin: 0px;
}

form{
    color:white;
}
</style>
</br></br>
    <div class="p-5 ">
        <div class="form">
        <div class="col-6 mx-auto d-flex flex-column justify-content-center align-items-center mt-5">
            <p id="title" class="fs-1 text-white fw-bold mt-5">Add Item</p>
            <form enctype="multipart/form-data" method='POST' action='/addItem' class="mb-5" style="width: 80%">
                {{-- CSRF --}}
                @csrf
                {{-- Method --}}
                @method('POST')

                <div class="mb-3">
                    <label for="inputImage" class="form-label">Clothes Image</label>
                    <input name="inputImage" class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3 w-100">
                    <label for="InputName" class="form-label">Clothes Name</label>
                    <input name="inputName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="(5-20 letters)">
                </div>
                <div class="mb-3 w-100">
                    <label for="inputDescription" class="form-label">Clothes Description</label>
                    <textarea name="inputDescription" type="textarea" class="form-control" id="exampleInputDescription1" placeholder="(min 5 letters)"></textarea>
                </div>
                <div class="mb-3 w-100">
                    <label for="inputPrice" class="form-label">Clothes Price (Rp)</label>
                    <input name="inputPrice" type="text" class="form-control" id="exampleInputPrice1" placeholder="≥1000">
                </div>
                <div class="mb-3 w-100">
                    <label for="inputStock" class="form-label">Clothes Stock</label>
                    <input name="inputStock" type="number" class="form-control" id="exampleInputStock1" min="1" placeholder="≥1">
                </div>

                <button type="submit" class="btn btn-danger">Add</button>
        </form>
        </div>
        </div>
    </div>

@endsection

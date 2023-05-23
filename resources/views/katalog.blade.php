@extends('layout.main')
@section('container')

<h2>Hasil Pencarian</h2>
<div class="container px-4 pt-4 d-flex justify-content-center text-center">
    <div class="row gx-3 gy-3">
        @foreach ($books as $book)
        <div class="col-3">
            <div class="card card-catalog">
                <div class="text-center card-body">
                    <div class="area-img-catalog">
                        <img class="img_buku img-fluid" src="{{ $book->image }}" alt="logo.png">
                    </div>
                    <h1 class="fs-5 mt-4">{{$book->judul}}</h1>
                    <a href="/detail/{{$book->id}}" class="btn btn-catalog btn-blue-ebook btn-block ">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
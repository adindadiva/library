@extends('layout.main')
@section('container')
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Detail Buku</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <style>
      .text-description {
        text-align: justify;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row p-3">
        <div class="col-lg-4 text-center">
          <div class="container text-center" style="height: 400px">
            <img src="{{$book->image}}" class="img-fluid rounded bg-warning" />
          </div>
          <div class="btn-group container-fluid mt-5">
            <a href="/peminjaman" class="btn btn-primary col-lg-6">
              Pinjam Buku
            </a>
            <a class="btn btn-secondary col-lg-6">
              Kembalikan Buku
            </a>
          </div>
        </div>
        <div class="col-lg-8">
          <h1 class="mb-3">{{$book->judul}}</h1>
          <p class="text-description">
            {{$book->deskripsi}}
          </p>
          <ul>
            <li><strong>Category:</strong> {{$book->category->name}}</li>
            <li><strong>Penulis:</strong> {{$book->author}}</li>
            <li><strong>Penerbit:</strong> {{$book->penerbit}}</li>
            <li><strong>Jumlah Halaman:</strong> {{$book->jumlah_halaman}}</li>
            <li><strong>Tahun Terbit:</strong> {{$book->tahun}}</li>
          </ul>
        </div>
      </div>
    </div>
@endsection
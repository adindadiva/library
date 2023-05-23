@extends('layout.main')
@section('container')
<div class="container mt-5">
      <h1 class="text-center mb-3">Formulir Peminjaman Buku</h1>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <form action="{{ route('')}}" method="POST">
            <div class="mb-3">
              <label for="nama">Nama:</label>
              <input
                type="text"
                class="form-control"
                id="nama"
                placeholder="Masukkan nama"
              />
            </div>
            <div class="mb-3">
              <label for="email">Email:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Masukkan email"
              />
            </div>
            <div class="mb-3">
              <label for="no-telp">Nomor Telepon:</label>
              <input
                type="tel"
                class="form-control"
                id="no-telp"
                placeholder="Masukkan nomor telepon"
              />
            </div>
            <div class="mb-3">
              <label for="tgl-pinjam">Tanggal Peminjaman:</label>
              <input type="date" class="form-control" id="tgl-pinjam" />
            </div>
            <div class="mb-3">
              <label for="tgl-kembali">Tanggal Pengembalian:</label>
              <input type="date" class="form-control" id="tgl-kembali" />
            </div>
            <button type="submit" class="btn btn-primary">Pinjam Buku</button>
          </form>
        </div>
      </div>
@endsection
@extends('layout.main')

@section('container')
    <div class="container">
        <h1>Tambah Data Peminjaman</h1>
        
        <form action="{{ route('peminjaman.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">ID Anggota:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_buku">ID Buku:</label>
                <input type="text" name="id_buku" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                <input type="date" name="tanggal_peminjaman" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
                <input type="date" name="tanggal_pengembalian" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Peminjaman</button>
        </form>
    </div>
@endsection

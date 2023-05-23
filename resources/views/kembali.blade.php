@extends('layout.main')
@section('container')
<div class="container mt-5">
  <h1 class="text-center mb-3">Data Buku yang Dikembalikan</h1>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No.</th>
          <th>Judul Buku</th>
          <th>Tanggal Kembali</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Harry Potter and the Philosopher's Stone</td>
          <td>12 Mei 2023</td>
          <td>19 Mei 2023</td>
        </tr>
        <tr>
          <td>2</td>
          <td>The Hunger Games</td>
          <td>15 Mei 2023</td>
          <td>22 Mei 2023</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
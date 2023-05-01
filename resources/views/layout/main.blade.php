<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
  <body>
    <header>
      <h1>Perpustakaan Universitas XYZ</h1>
    </header>
    <nav>
      <ul>
        <li><a href="/">Beranda</a></li>
        <li><a href="/katalog">Katalog Online</a></li>
        <li><a href="/peminjaman">Peminjaman</a></li>
        <li><a href="#">Referensi Online</a></li>
        <li><a href="#">Tentang Kami</a></li>
      </ul>
    </nav>
    <main>
        @yield('container')
    </main>
    <footer>
      <p>Hak Cipta © 2023 Perpustakaan Universitas XYZ. All rights reserved.</p>
    </footer>
  </body>
</html>

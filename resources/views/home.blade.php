@extends('layout.main')
@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection
@section('container')
<h2>Selamat Datang di Perpustakaan Universitas XYZ !</h2>
<p>
    Kami menyediakan koleksi buku, majalah, jurnal, dan sumber daya online
    yang lengkap dan mutakhir. Anda dapat mencari dan meminjam bahan dari
    perpustakaan kami dengan mudah melalui layanan online kami. Silakan
    jelajahi website kami untuk menemukan informasi yang Anda butuhkan.
</p>

<h4>Visi :</h4>
<p>"Terwujudnya Indonesia Cerdas Melalui Gemar Membaca Dengan Memberdayakan Perpustakaan _"</p>

<h4>Misi :</h4>
<p>Terwujudnya layanan prima;
Terwujudnya perpustakaan sebagai pelestari khazanah budaya bangsa;
Terwujudnya perpustakaan sesuai standar nasional perpustakaan.</p>
<div class="container px-4 pt-4 d-flex justify-content-center text-center">
    <div class="row gx-5">
        <div class="col">
            <div class="card card-catalog">
                <div class="text-center card-body">
                    <div class="area-img-catalog">
                        <img class="img_buku img-fluid" src="https://ebook.erlanggaonline.co.id/cover/C3086411100.jpg" alt="logo.png">
                    </div>
                    <a href="/detail" class="btn btn-catalog btn-blue-ebook btn-block ">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-catalog">
                <div class="text-center card-body">
                    <div class="area-img-catalog">
                        <img class="img_buku img-fluid" src="https://ebook.erlanggaonline.co.id/cover/C3086411100.jpg" alt="logo.png">
                    </div>
                    <a href="/detail" class="btn btn-catalog btn-blue-ebook btn-block ">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-catalog">
                <div class="text-center card-body">
                    <div class="area-img-catalog">
                        <img class="img_buku img-fluid" src="https://ebook.erlanggaonline.co.id/cover/C3086411100.jpg" alt="logo.png">
                    </div>
                    <a href="/detail" class="btn btn-catalog btn-blue-ebook btn-block">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row pt-5">
    <a class="btn btn-primary py-2 rounded-pill" href="/katalog">Lihat Semua <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
@endsection
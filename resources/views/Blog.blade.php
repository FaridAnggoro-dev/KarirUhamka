@extends('layouts.app')

@section('content')
<!-- Awal Blog -->
<section id="Blog">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="display-4">Everything you need to know about the Future of Work</h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="news">
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h4>Trending on CareerSeeker Blog</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <a href="" style="text-decoration: none; color: black;">
                    <div class="berita">
                        <img src="{{asset('images/gambar.jpg')}}" alt="gambar-berita" style="width: 250px;">
                    </div>
                    <div class="info">
                        <span style="color: blue;">Dunia Kerja</span>
                        <h5>Libur Nasional 2023: Lihat dan Download Kalendernya Disini!</h5>
                        <span>CareerSeeker</span>
                        <span style="margin-left: 12px; color: grey;">18 Desember 2022</span>
                        <p style="margin-top: 6px; color: grey;">Dibaca 9 menit </p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="" style="text-decoration: none; color: black;">
                    <div class="berita">
                        <img src="{{asset('images/gambar.jpg')}}" alt="gambar-berita" style="width: 250px;">
                    </div>
                    <div class="info">
                        <span style="color: blue;">Dunia Kerja</span>
                        <h5>Libur Nasional 2023: Lihat dan Download Kalendernya Disini!</h5>
                        <span>CareerSeeker</span>
                        <span style="margin-left: 12px; color: grey;">18 Desember 2022</span>
                        <p style="margin-top: 6px; color: grey;">Dibaca 9 menit </p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="" style="text-decoration: none; color: black;">
                    <div class="berita">
                        <img src="{{asset('images/gambar.jpg')}}" alt="gambar-berita" style="width: 250px;">
                    </div>
                    <div class="info">
                        <span style="color: blue;">Dunia Kerja</span>
                        <h5>Libur Nasional 2023: Lihat dan Download Kalendernya Disini!</h5>
                        <span>CareerSeeker</span>
                        <span style="margin-left: 12px; color: grey;">18 Desember 2022</span>
                        <p style="margin-top: 6px; color: grey;">Dibaca 9 menit </p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="" style="text-decoration: none; color: black;">
                    <div class="berita">
                        <img src="{{asset('images/gambar.jpg')}}" alt="gambar-berita" style="width: 250px;">
                    </div>
                    <div class="info">
                        <span style="color: blue;">Dunia Kerja</span>
                        <h5>Libur Nasional 2023: Lihat dan Download Kalendernya Disini!</h5>
                        <span>CareerSeeker</span>
                        <span style="margin-left: 12px; color: grey;">18 Desember 2022</span>
                        <p style="margin-top: 6px; color: grey;">Dibaca 9 menit </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="Hot-News">
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h4>Berita Terbaru</h4>
                <p>Temukan informasi dan berita terkini terkait Lowongan Pekerjaan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="{{asset('images/gambar.jpg')}}" alt="" style="width: 550px;">
            </div>
            <div class="col-6">
                <span>CareerSeeker</span>
                <span>18 Desember 2022</span>
                <a href="" style="text-decoration: none;">
                    <h5 style="color: black;">10 Contoh Surat Lamaran Kerja Yang Menarik dan Tips agar di Terima HRD</h5>
                </a>
                <p>Surat lamaran kerja atau sering disebut dengan Application letter/Cover letter adalah surat yang dikirim bersamaan saat kamu mengirimkan CV/Resume kamu. Ingat ya, Surat lamaran itu terpisah dari Resume, yang artinya berbeda dari CV/Resume. Berdasarkan tim evaluasi Kalibrr, surat lamaran pekerjaan itu lebih banyak berisi informasi tentang kepribadian kamu dan latar belakang mengapa kamu berminat pada posisi yang kamu lamar. Sementara Resume atau CV menguraikan lebih banyak tentang keterampilan dan pengalaman profesional kamu.</p>

                <a href="">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Blog -->

@endsection
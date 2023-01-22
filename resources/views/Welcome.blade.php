@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col hero-tagline text-center mt-3">
                <h3 class="display-4">
                    MULAI KARIRMU BERSAMA CAREERSEEKER
                </h3>
                <p>
                    Kami membutuhkan kamu segera untuk bergabung di berbagai posisi
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Hero Section -->

<!-- Kategori -->
<section id="Kategori">
    <div class="container">
        <div class="row">
            <div class="col mt-5 text-center">
                <h3>Kategori Pekerjaan</h3>
            </div>
            <div class="row">
                <div class="col-3 text-center mt-3">
                    <a href="/lowongan-kerja">
                        <div class="bidang">
                            <img src="{{asset('images/niagahoster.png')}}" alt="logo-perusahaan" width="100">
                            <h5>Administrasi</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3 text-center mt-3">
                    <a href="/lowongan-kerja">
                        <div class="bidang">
                            <img src="{{asset('images/niagahoster.png')}}" alt="logo-perusahaan" width="100">
                            <h5>Akuntansi & Keuangan</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3 text-center mt-3">
                    <a href="/lowongan-kerja">
                        <div class="bidang">
                            <img src="{{asset('images/niagahoster.png')}}" alt="logo-perusahaan" width="100">
                            <h5>Pendidikan & Pelatihan</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3 text-center mt-3">
                    <a href="/lowongan-kerja">
                        <div class="bidang">
                            <img src="{{asset('images/niagahoster.png')}}" alt="logo-perusahaan" width="100">
                            <h5>Programmer</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-3 text-center mt-3">
                    <a href="/lowongan-kerja">
                        <div class="bidang">
                            <img src="{{asset('images/niagahoster.png')}}" alt="logo-perusahaan" width="100">
                            <h5>Konstruksi & Bangunan</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3 text-center mt-3">
                    <a href="/lowongan-kerja">
                        <div class="bidang">
                            <img src="{{asset('images/niagahoster.png')}}" alt="logo-perusahaan" width="100">
                            <h5>Teknik</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3 text-center mt-3">
                    <a href="/lowongan-kerja">
                        <div class="bidang">
                            <img src="{{asset('images/niagahoster.png')}}" alt="logo-perusahaan" width="100">
                            <h5>Hukum & Keamanan</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3 text-center mt-3">
                    <a href="/lowongan-kerja">
                        <div class="bidang">
                            <img src="{{asset('images/niagahoster.png')}}" alt="logo-perusahaan" width="100">
                            <h5>Kesehatan & Kedokteran</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Navs & Tabs -->

<!-- Perusahaan -->
<section id="rekomendasi">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h3>Rekomendasi Perusahaan Kami</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col border">
                <div class="text-center">
                    <img src="{{asset('images/niagahoster.png')}}" width="120" height="120" alt="bank">
                    <h5>PT. Artha Kreasi Utama</h5>
                </div>
            </div>
            <div class="col border">
                <div class="text-center">
                    <img src="{{asset('images/niagahoster.png')}}" width="120" height="120" alt="bank">
                    <h5>PT. Artha Kreasi Utama</h5>
                </div>
            </div>
            <div class="col border">
                <div class="text-center">
                    <img src="{{asset('images/niagahoster.png')}}" width="120" height="120" alt="bank">
                    <h5>PT. Artha Kreasi Utama</h5>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col border border-1">
                <div class="text-center">
                    <img src="{{asset('images/niagahoster.png')}}" width="120" height="120" alt="bank">
                    <h5>PT. Artha Kreasi Utama</h5>
                </div>
            </div>
            <div class="col border border-1">
                <div class="text-center">
                    <img src="{{asset('images/niagahoster.png')}}" width="120" height="120" alt="bank">
                    <h5>PT. Artha Kreasi Utama</h5>
                </div>
            </div>
            <div class="col border border-1">
                <div class="text-center">
                    <img src="{{asset('images/niagahoster.png')}}" width="120" height="120" alt="bank">
                    <h5>PT. Artha Kreasi Utama</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- perusahaan -->

<!-- Banner -->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h1>Mulai Bangun Karir Impianmu</h1>
                <a class="btn btn-primary btn-lg mt-5" href="#" role="button">Telusuri Pekerjaan</a>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Banner -->

<!-- Tips Karir -->
<section id="tips-karir">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h3>Blog</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col border border-1 tips">
                <img src="{{asset('images/niagahoster.png')}}" alt="tips">
                <p>Profesi Data Analys, Talenta Digital yang Banyak Dicari</p>
                <span>Oleh CareerSeeker</span>
            </div>
            <div class="col border border-1 tips">
                <img src="{{asset('images/niagahoster.png')}}" alt="tips">
                <p>Mengapa saya masih belum dapat panggilan kerja dari lamaran saya?</p>
                <span>Oleh CareerSeeker</span>
            </div>
            <div class="col border border-1 tips">
                <img src="{{asset('images/niagahoster.png')}}" alt="tips">
                <p>Keahlian yang banyak dibutuhkan oleh perusahaan startup teknologi</p>
                <span>Oleh CareerSeeker</span>
            </div>
        </div>
        <div class="row">
            <div class="col border border-1 tips">
                <img src="{{asset('images/niagahoster.png')}}" alt="tips">
                <p>Profesi Data Analys, Talenta Digital yang Banyak Dicari</p>
                <span>Oleh CareerSeeker</span>
            </div>
            <div class="col border border-1 tips">
                <img src="{{asset('images/niagahoster.png')}}" alt="tips">
                <p>Mengapa saya masih belum dapat panggilan kerja dari lamaran saya?</p>
                <span>Oleh CareerSeeker</span>
            </div>
            <div class="col border border-1 tips">
                <img src="{{asset('images/niagahoster.png')}}" alt="tips">
                <p>Keahlian yang banyak dibutuhkan oleh perusahaan startup teknologi</p>
                <span>Oleh CareerSeeker</span>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Tips Karir -->

@endsection
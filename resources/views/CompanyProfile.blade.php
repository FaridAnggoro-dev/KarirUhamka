@extends('layouts.app')

@section('content')
<!-- Awal Hero -->
<section id="jumbotron">
    <div class="container-fluid">
        <div class="row">
            <div class="col bg-primary p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{asset('images/niagahoster.png')}}" alt="logo-perusahaan" width="150">
                        </div>
                        <div class="col mt-5">
                            <h3>PT Artha Kreasi Utama</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Hero -->

<!-- Awal Tentang perusahaan -->
<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-4 mt-5">
                <hr>
                <p>Fakta Menarik</p>
                <i class="bi bi-link"></i>
                <a href="" style="text-decoration: none;">https://onlinelearning.uhamka.ac.id/</a>
            </div>
            <div class="col-8 mt-5">
                <div class="row">
                    <div class="col-8">
                        <h5>Tentang Perusahaan</h5>
                    </div>
                    <div class="col-4">
                        <small>Diperbaharui: 2 Hari Lalu</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8">
                        <a href="" style="text-decoration: none;">PT Artha Kreasi Utama</a>
                    </div>
                    <div class="col-4">
                        <small>
                            <a href="" style="text-decoration: none;">https://www.youtube.com/</a>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="col">
                    <small>Perusahaan yang bergerak di bidang jasa</small>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <p>Hari Kerja</p>
                        <small>Senin - Jumat</small>
                    </div>
                    <div class="col">
                        <p>Jam Kerja</p>
                        <small>08:00 - 17:00</small>
                    </div>
                    <div class="col">
                        <p>Industri</p>
                        <small>Konsultan</small>
                    </div>
                    <div class="col">
                        <p>Alamat</p>
                        <small>JALAN K.H RAMLI NO. 6, MENTENG DALAM, TEBET, JAKARTA SELATAN</small>
                    </div>
                </div>
                <div class="col">
                    <h5>Lowongan Kerja di PT Artha Kreasi Utama</h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <a href="">
                            <p>Teknisi</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <i class="bi bi-geo-alt"></i>
                        <small>Bogor</small>
                    </div>
                    <div class="col-3">
                        <small>IDR 3.000.000 - 5.000.000</small>
                    </div>
                    <div class="col-3">
                        <i class="bi bi-briefcase"></i>
                        <small>Full Time</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small>Deskripsi Pekerjaan:</small>
                        <ul>
                            <li>Mampu Mengoperasikan Komputer</li>
                            <li>Mampu Mengoperasikan Komputer</li>
                            <li>Mampu Mengoperasikan Komputer</li>
                        </ul>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Lihat Pekerjaan Lainnya</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Tentang Perusahaan -->

@endsection
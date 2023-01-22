@extends('layouts.app')

@section('content')
<!-- Awal Breadcrumb -->
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cari Lowongan</li>
                </ol>
            </nav>
            <hr>
        </div>
    </div>
</div>
<!-- Akhir Breadcrumb -->

<!-- Awal Header -->
<section id="header">
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h4>Cari Lowongan Kerja</h4>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Header -->

<!-- Awal loker -->
<section id="loker">
    <div class="container">
        <div class="row border mt-3">
            <div class="col bg-primary">
                <div class="row">
                    <div class="col-3 text-white p-3">
                        <h5>VACANCY</h5>
                    </div>
                    <div class="col-4 text-white p-3">
                        <h5>DETAIL</h5>
                    </div>
                    <div class="col-5 text-white p-3">
                        <h5>SKILL</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border">
            <div class="col mt-3 mb-3">
                <div class="row">
                    <div class="col-1" style="margin-right: 24px;">
                        <img src="{{asset('images/niagahoster.png')}}" width="100" alt="logo">
                    </div>
                    <div class="col-1 mt-4">
                        <a href="">Teknisi</a>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-4 mt-4">
                                <h6>Pengalaman</h6>
                            </div>
                            <div class="col-7 mt-4">
                                <p>Setidaknya 1 tahun</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-4">
                                <h6>Tipe Pekerjaan</h6>
                            </div>
                            <div class="col-7 mt-4">
                                <p>Full Time</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-4">
                                <h6>Lokasi</h6>
                            </div>
                            <div class="col-7 mt-4">
                                <p>Bandung</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <p>Menguasai Microsoft Office (Word, Excel & PowerPoint), Mengetik secara cepat dan tepat</p>
                    </div>
                    <div class="row justify-content-end mt-3">
                        <div class="col-2">
                            <a class="btn btn-primary" href="/perusahaan" role="button">Selengkapnya</a>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-primary" href="#" role="button"><i class="bi bi-bookmark" style="margin-right: 6px;"></i>Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border">
            <div class="col mt-3 mb-3">
                <div class="row">
                    <div class="col-1" style="margin-right: 24px;">
                        <img src="{{asset('images/niagahoster.png')}}" width="100" alt="logo">
                    </div>
                    <div class="col-1 mt-4">
                        <a href="">Teknisi</a>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-4 mt-4">
                                <h6>Pengalaman</h6>
                            </div>
                            <div class="col-7 mt-4">
                                <p>Setidaknya 1 tahun</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-4">
                                <h6>Tipe Pekerjaan</h6>
                            </div>
                            <div class="col-7 mt-4">
                                <p>Full Time</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-4">
                                <h6>Lokasi</h6>
                            </div>
                            <div class="col-7 mt-4">
                                <p>Bandung</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <p>Menguasai Microsoft Office (Word, Excel & PowerPoint), Mengetik secara cepat dan tepat</p>
                    </div>
                    <div class="row justify-content-end mt-3">
                        <div class="col-2">
                            <a class="btn btn-primary" href="#" role="button">Selengkapnya</a>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-primary" href="#" role="button"><i class="bi bi-bookmark" style="margin-right: 6px;"></i>Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border">
            <div class="col mt-3 mb-3">
                <div class="row">
                    <div class="col-1" style="margin-right: 24px;">
                        <img src="{{asset('images/niagahoster.png')}}" width="100" alt="logo">
                    </div>
                    <div class="col-1 mt-4">
                        <a href="">Teknisi</a>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-4 mt-4">
                                <h6>Pengalaman</h6>
                            </div>
                            <div class="col-7 mt-4">
                                <p>Setidaknya 1 tahun</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-4">
                                <h6>Tipe Pekerjaan</h6>
                            </div>
                            <div class="col-7 mt-4">
                                <p>Full Time</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mt-4">
                                <h6>Lokasi</h6>
                            </div>
                            <div class="col-7 mt-4">
                                <p>Bandung</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <p>Menguasai Microsoft Office (Word, Excel & PowerPoint), Mengetik secara cepat dan tepat</p>
                    </div>
                    <div class="row justify-content-end mt-3">
                        <div class="col-2">
                            <a class="btn btn-primary" href="" role="button">Selengkapnya</a>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-primary" href="#" role="button"><i class="bi bi-bookmark" style="margin-right: 6px;"></i>Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir loker -->

<!-- Awal Pagination -->
<section id="pagination">
    <div class="container">
        <div class="row mt-3">
            <div class="col-6">
                Menampilkan Halaman 1 sampai 10
            </div>
            <div class="col-6">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Pagination -->
@endsection
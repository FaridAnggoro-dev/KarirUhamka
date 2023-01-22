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
                        <div class="col mt-3">
                            <h3>Flutter Developer</h3>
                            <a href="">
                                <p class="text-white">PT Artha Kreasi Utama</p>
                            </a>
                            <div class="row">
                                <div class="col-2">
                                    <i class="bi bi-geo-alt"></i>
                                    <small>Jakarta</small>
                                </div>
                                <div class="col-2">
                                    <i class="bi bi-geo-alt"></i>
                                    <small>Full Time</small>
                                </div>
                                <div class="col-3">
                                    <i class="bi bi-geo-alt"></i>
                                    <small>Setidaknya 1 tahun</small>
                                </div>
                                <div class="col-4">
                                    <i class="bi bi-geo-alt"></i>
                                    <small>IDR 6.200.000 - 6.800.000</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary" type="button">Apply</button>
                                <button class="btn btn-secondary" type="button">Simpan</button>
                            </div>
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
                <div class="row">
                    <div class="col-6">
                        <p>Jurusan</p>
                        <small>Semuanya</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p>Lulusan</p>
                        <small>SMA / SMK Sederajat</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p>Jenjang Karir</p>
                        <small>Pemula / Staf</small>
                    </div>
                </div>
            </div>
            <div class="col-8 mt-5">
                <div class="row">
                    <div class="col">
                        <h5>Persyaratan</h5>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li>Pria / Wanita</li>
                                    <li>Usia maksimal 34 tahun</li>
                                    <li>Pendidikan min D3 </li>
                                    <li>Berpengalaman minimal 1 tahun dan minimal 1 kali dalam pembangunan / pemeliharaan aplikasi Web</li>
                                    <li>Menguasai bahasa pemrograman PHP (CI/Laravel) / Node JS / Quasar dan database (PostgreSQL/MySQL/Ms SQL Server)</li>
                                    <li>Memiliki kemampuan berkomunikasi yang baik</li>
                                    <li>Memiliki kemampuan analisis dan problem solving yang memadai</li>
                                    <li> Penempatan : JAKARTA SELATAN</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-5">
                        <h5>Deskripsi Pekerjaan</h5>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li>Melakukan tugas administrasi perkantoran</li>
                                    <li>Bertanggung jawab atas Dokumen penting Perusahaan serta pengarsipan</li>
                                    <li>Mengatur kegiatan harian Direktur</li>
                                    <li>Membantu Direktur dengan tugas proyek, Mengatur jadwal pertemuan</li>
                                    <li>turut serta dalam meeting yang dilakukan Direksi dan melakukan notulen</li>
                                    <li>Melakukan komunikasi yang baik dengan pihak eksternal yang berhubungan dengan Perusahaan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-5">
                        <h5>Keahlian</h5>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mt-5">
                        <h5>Tentang Perusahaan</h5>
                    </div>
                    <hr>
                    <div class="col-8 mt-3">
                        <a href="" style="text-decoration: none;">PT Artha Kreasi Utama</a>
                    </div>
                    <div class="col-4 mt-3">
                        <small>
                            <a href="" style="text-decoration: none;">https://www.youtube.com/</a>
                        </small>
                    </div>
                    <div class="col mt-3">
                        <small>Perusahaan yang bergerak di bidang jasa</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-5">
                        <h5>Lowongan Kerja di PT Artha Kreasi Utama</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col mt-3 mb-3">
                        <div class="row">
                            <div class="col-1" style="margin-right: 24px;">
                                <img src="{{asset('images/niagahoster.png')}}" width="80" alt="logo">
                            </div>
                            <div class="col-1 mt-4">
                                <a href="">Teknisi</a>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col mt-4">
                                        <h6>Pengalaman</h6>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <p>Setidaknya 1 tahun</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-4">
                                        <h6>Tipe Pekerjaan</h6>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <p>Full Time</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-4">
                                        <h6>Lokasi</h6>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <p>Bandung</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 mt-4">
                                <ul>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-3 mb-3">
                        <div class="row">
                            <div class="col-1" style="margin-right: 24px;">
                                <img src="{{asset('images/niagahoster.png')}}" width="80" alt="logo">
                            </div>
                            <div class="col-1 mt-4">
                                <a href="">Teknisi</a>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col mt-4">
                                        <h6>Pengalaman</h6>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <p>Setidaknya 1 tahun</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-4">
                                        <h6>Tipe Pekerjaan</h6>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <p>Full Time</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-4">
                                        <h6>Lokasi</h6>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <p>Bandung</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 mt-4">
                                <ul>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-3 mb-3">
                        <div class="row">
                            <div class="col-1" style="margin-right: 24px;">
                                <img src="{{asset('images/niagahoster.png')}}" width="80" alt="logo">
                            </div>
                            <div class="col-1 mt-4">
                                <a href="">Teknisi</a>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col mt-4">
                                        <h6>Pengalaman</h6>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <p>Setidaknya 1 tahun</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-4">
                                        <h6>Tipe Pekerjaan</h6>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <p>Full Time</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-4">
                                        <h6>Lokasi</h6>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <p>Bandung</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 mt-4">
                                <ul>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                    <li>Mampu Mengoperasikan Komputer</li>
                                </ul>
                            </div>
                        </div>
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
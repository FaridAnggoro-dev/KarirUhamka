<!-- Awal Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('images/logo-karir.png')}}" width="50" height="50" alt="logo-website">
            CAREERSEEKER
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-uppercase mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lowongan-kerja">Cari Lowongan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile-perusahaan">Perusahaan</a>
                </li>
            </ul>
            @auth
            <div class="d-flex user-logged nav-item dropdown no-arrow">
                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" class="text-white">
                    Halo, {{ Auth::user()->name }}!
                    <img src="{{ Auth::user()->avatar }}" class="user-photo" alt="">
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">
                        <li>
                            <a href="#" class="dropdown-item">
                                My Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                            <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            </form>
                        </li>
                    </ul>
                </a>
            </div>
            @else
            <a href="" class="nav-link text-white"><i class="bi bi-person-add"></i> Daftar</a>
            <a href="/login" class="nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
            @endauth
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/logo.png') }}" alt="logo" width="40" height="40"></a>
            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('pages.index') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('pages.index') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['pages.history', 'pages.vision-mission', 'pages.task-functions', 'pages.organization']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>

                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ Route::is('pages.history') ? 'active' : '' }}" href="{{ route('pages.history') }}">Sejarah</a></li>
                            <li><a class="dropdown-item {{ Route::is('pages.vision-mission') ? 'active' : '' }}" href="{{ route('pages.vision-mission') }}">Visi dan Misi</a></li>
                            <li>
                                <a class="dropdown-item {{ Route::is('pages.task-functions') ? 'active' : '' }}" href="{{ route('pages.task-functions') }}">Tugas dan Fungsi</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ Route::is('pages.organization') ? 'active' : '' }}" href="{{ route('pages.organization') }}">Struktur Organisasi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['page.secretariat', 'pages.inspectorate', 'pages.education-office']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Unsur Pelaksana
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ Route::is('pages.secretariat') ? 'active' : '' }}" href="{{ route('pages.secretariat') }}">DWP Sekretariat Daerah</a>
                            </li>
                            <li><a class="dropdown-item {{ Route::is('pages.inspectorate') ? 'active' : '' }}" href="{{ route('pages.inspectorate') }}">DWP Inspektorat</a></li>
                            <li>
                                <a class="dropdown-item {{ Route::is('pages.education-office') ? 'active' : '' }}" href="{{ route('pages.education-office') }}">DWP Dinas Pendidikan</a>
                            </li>
                            {{-- <li><a class="dropdown-item" href="#">Dst</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['pages.education', 'pages.socio-cultural', 'pages.economy']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Program Kerja
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ Route::is('pages.education') ? 'active' : '' }}" href="{{ route('pages.education') }}">Bidang Pendidikan</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ Route::is('pages.socio-cultural') ? 'active' : '' }}" href="{{ route('pages.socio-cultural') }}">Bidang Sosial Budaya</a>
                            </li>
                            <li><a class="dropdown-item {{ Route::is('pages.economy') ? 'active' : '' }}" href="{{ route('pages.economy') }}">Bidang Ekonomi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('pages.news') ? 'active' : '' }}"
                            href="{{ route('pages.news') }}">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['pages.gallery-photo', 'pages.gallery-video']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('pages.gallery-photo') ? 'active' : '' }}" href="{{ route('pages.gallery-photo') }}">Galeri Foto</a></li>
                            <li><a class="dropdown-item {{ Route::is('pages.gallery-video') ? 'active' : '' }}" href="{{ route('pages.gallery-video') }}">Galeri Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['pages.external_information', 'pages.internal_information']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('pages.external-information') ? 'active' : '' }}" href="{{ route('pages.external-information') }}">Eksternal</a></li>
                            <li><a class="dropdown-item {{ Route::is('pages.internal-information') ? 'active' : '' }}" href="{{ route('pages.internal-information') }}">Internal</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('pages.contact-us') ? 'active' : '' }}"
                            href="{{ route('pages.contact-us') }}">Kontak Kami</a>
                    </li>
                </ul>
                @guest
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                        </li>
                    </ul>
                {{-- @else
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi, {{ Auth::user()->name }} !
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul> --}}
                @endguest
            </div>
        </div>
    </div>
</nav>

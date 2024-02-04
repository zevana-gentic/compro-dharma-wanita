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
                        <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['history', 'vision_mission', 'task_functions', 'organization']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>

                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ Route::is('history') ? 'active' : '' }}" href="{{ route('history') }}">Sejarah</a></li>
                            <li><a class="dropdown-item {{ Route::is('vision_mission') ? 'active' : '' }}" href="{{ route('vision_mission') }}">Visi dan Misi</a></li>
                            <li>
                                <a class="dropdown-item {{ Route::is('task_functions') ? 'active' : '' }}" href="{{ route('task_functions') }}">Tugas dan Fungsi</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ Route::is('organization') ? 'active' : '' }}" href="{{ route('organization') }}">Struktur Organisasi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['secretariat', 'inspectorate', 'education_office']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Unsur Pelaksana
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ Route::is('secretariat') ? 'active' : '' }}" href="{{ route('secretariat') }}">DWP Sekretariat Daerah</a>
                            </li>
                            <li><a class="dropdown-item {{ Route::is('inspectorate') ? 'active' : '' }}" href="{{ route('inspectorate') }}">DWP Inspektorat</a></li>
                            <li>
                                <a class="dropdown-item {{ Route::is('education_office') ? 'active' : '' }}" href="{{ route('education_office') }}">DWP Dinas Pendidikan</a>
                            </li>
                            {{-- <li><a class="dropdown-item" href="#">Dst</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['education', 'socio_cultural', 'economy']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Program Kerja
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ Route::is('education') ? 'active' : '' }}" href="{{ route('education') }}">Bidang Pendidikan</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ Route::is('socio_cultural') ? 'active' : '' }}" href="{{ route('socio_cultural') }}">Bidang Sosial Budaya</a>
                            </li>
                            <li><a class="dropdown-item {{ Route::is('economy') ? 'active' : '' }}" href="{{ route('economy') }}">Bidang Ekonomi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('news') ? 'active' : '' }}"
                            href="{{ route('news') }}">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['gallery_photo', 'gallery_video']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('gallery_photo') ? 'active' : '' }}" href="{{ route('gallery_photo') }}">Galeri Foto</a></li>
                            <li><a class="dropdown-item {{ Route::is('gallery_video') ? 'active' : '' }}" href="{{ route('gallery_video') }}">Galeri Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['external_information', 'internal_information']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('external_information') ? 'active' : '' }}" href="{{ route('external_information') }}">Eksternal</a></li>
                            <li><a class="dropdown-item {{ Route::is('internal_information') ? 'active' : '' }}" href="{{ route('internal_information') }}">Internal</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('contact-us') ? 'active' : '' }}"
                            href="{{ route('contact-us') }}">Kontak Kami</a>
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
                @else
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi, {{ Auth::user()->name }} !
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>
    </div>
</nav>

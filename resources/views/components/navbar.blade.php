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
                        <a class="nav-link {{ Route::is(['sejarah', 'visi_misi', 'tugas_fungsi', 'struktur_organisasi']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>

                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ Route::is('sejarah') ? 'active' : '' }}" href="{{ route('sejarah') }}">Sejarah</a></li>
                            <li><a class="dropdown-item {{ Route::is('visi_misi') ? 'active' : '' }}" href="{{ route('visi_misi') }}">Visi dan Misi</a></li>
                            <li>
                                <a class="dropdown-item {{ Route::is('tugas_fungsi') ? 'active' : '' }}" href="{{ route('tugas_fungsi') }}">Tugas dan Fungsi</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ Route::is('struktur_organisasi') ? 'active' : '' }}" href="{{ route('struktur_organisasi') }}">Struktur Organisasi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['sekretariat', 'inspektorat', 'dinas_pendidikan']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Unsur Pelaksana
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ Route::is('sekretariat') ? 'active' : '' }}" href="{{ route('sekretariat') }}">DWP Sekretariat Daerah</a>
                            </li>
                            <li><a class="dropdown-item {{ Route::is('inspektorat') ? 'active' : '' }}" href="{{ route('inspektorat') }}">DWP Inspektorat</a></li>
                            <li>
                                <a class="dropdown-item {{ Route::is('dinas_pendidikan') ? 'active' : '' }}" href="{{ route('dinas_pendidikan') }}">DWP Dinas Pendidikan</a>
                            </li>
                            {{-- <li><a class="dropdown-item" href="#">Dst</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['pendidikan', 'sosial_budaya', 'ekonomi']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Program Kerja
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ Route::is('pendidikan') ? 'active' : '' }}" href="{{ route('pendidikan') }}">Bidang Pendidikan</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ Route::is('sosial_budaya') ? 'active' : '' }}" href="{{ route('sosial_budaya') }}">Bidang Sosial Budaya</a>
                            </li>
                            <li><a class="dropdown-item {{ Route::is('ekonomi') ? 'active' : '' }}" href="{{ route('ekonomi') }}">Bidang Ekonomi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('news') ? 'active' : '' }}"
                            href="{{ route('news') }}">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['galeri_foto', 'galeri_video']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('galeri_foto') ? 'active' : '' }}" href="{{ route('galeri_foto') }}">Galeri Foto</a></li>
                            <li><a class="dropdown-item {{ Route::is('galeri_video') ? 'active' : '' }}" href="{{ route('galeri_video') }}">Galeri Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Route::is(['informasi_eksternal', 'informasi_internal']) ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Route::is('informasi_eksternal') ? 'active' : '' }}" href="{{ route('informasi_eksternal') }}">Eksternal</a></li>
                            <li><a class="dropdown-item {{ Route::is('informasi_internal') ? 'active' : '' }}" href="{{ route('informasi_internal') }}">Internal</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('contact-us') ? 'active' : '' }}"
                            href="{{ route('contact-us') }}">Kontak Kami</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

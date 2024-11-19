<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Sekda<span>DWP</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{ Route::is('sekda.dashboard') ? 'active' : '' }}">
                <a href="{{ route('sekda.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Manajemen Konten</li>
            <li class="nav-item {{ Route::is('sekda.news.*') ? 'active' : '' }}">
                <a href="{{ route('sekda.news.list') }}" class="nav-link">
                  <i class="link-icon" data-feather="file-text"></i>
                  <span class="link-title">Berita</span>
                </a>
            </li>
            <li class="nav-item {{ Route::is('sekda.gallery.*') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#galeri" role="button" aria-expanded="false" aria-controls="galeri">
                  <i class="link-icon" data-feather="image"></i>
                  <span class="link-title">Galeri</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="galeri">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
                      <a href="{{ route('sekda.gallery.photo.list') }}" class="nav-link {{ Route::is('sekda.gallery.photo.*') ? 'active' : '' }}">Foto</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('sekda.gallery.video.list') }}" class="nav-link {{ Route::is('sekda.gallery.video.*') ? 'active' : '' }}">Video</a>
                    </li>
                  </ul>
                </div>
              </li>
        </ul>
    </div>
</nav>

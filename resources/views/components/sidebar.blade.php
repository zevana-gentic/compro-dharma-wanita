<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Admin<span>DWP</span>
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
            <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Manajemen Konten</li>
            <li class="nav-item {{ Route::is('slider.*') ? 'active' : '' }}">
                <a href="{{ route('slider.list') }}" class="nav-link">
                  <i class="link-icon" data-feather="sliders"></i>
                  <span class="link-title">Slider</span>
                </a>
            </li>
            <li class="nav-item {{ Route::is('news.*') ? 'active' : '' }}">
                <a href="{{ route('news.list') }}" class="nav-link">
                  <i class="link-icon" data-feather="file-text"></i>
                  <span class="link-title">Berita</span>
                </a>
            </li>
            <li class="nav-item {{ Route::is('gallery.*') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#galeri" role="button" aria-expanded="false" aria-controls="galeri">
                  <i class="link-icon" data-feather="image"></i>
                  <span class="link-title">Galeri</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="galeri">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
                      <a href="{{ route('gallery.photo.list') }}" class="nav-link {{ Route::is('gallery.photo.*') ? 'active' : '' }}">Foto</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('gallery.video.list') }}" class="nav-link {{ Route::is('gallery.video.*') ? 'active' : '' }}">Video</a>
                    </li>
                  </ul>
                </div>
              </li>

            <li class="nav-item nav-category">Anggota DWP</li>
            <li class="nav-item {{ Route::is('dwp-member.*') ? 'active' : '' }}">
                <a href="{{ route('dwp-member.list') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">List Anggota DWP</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand">
            <img src="/img/gkii.png" 
            alt="" width="50" height="50">
          </a>
          
        <a class="navbar-brand" href="/">GKII TIBERIAS SEKADAU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/" >Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  {{ $active === 'about' ? 'active' : '' }}" href="/about" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tentang</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ $active === 'sejarah' ? 'active' : '' }}" href="/sejarah">Sejarah</a></li>
                        <li><a class="dropdown-item {{ $active === 'visimisi' ? 'active' : '' }}" href="/visimisi">Visi Dan Misi</a></li>
                        <li><a class="dropdown-item {{ $active === 'bpj' ? 'active' : '' }}"href="/bpj">Badan Pengurus Jemaat</a></li>
                        <li><a class="dropdown-item {{ $active === 'bidangpelayanan' ? 'active' : '' }}" href="/bidangpelayanan">Bidang Pelayanan</a></li>
                      </ul>
                </li>

                {{-- tambahan boostrap diluar dari tontonan unpas --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Artikel
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Warta Jemaat</a></li>
                      <li><a class="dropdown-item {{ $active === 'jadwalkebaktian' ? 'active' : '' }}" href="/jadwalkebaktian">Jadwal Kebaktian</a></li>
                      <li><a class="dropdown-item {{ $active === 'laporankeuangan' ? 'active' : '' }}" href="/laporankeuangan">Laporan Keuangan Pemasukan</a></li>
                      <li><a class="dropdown-item {{ $active === 'halamanpendataan' ? 'active' : '' }}" href="/halamanpendataan">Data Jemaat</a></li>
                    </ul>
                  </li>
                  {{-- tanbahan boostrap diluar dari tontonan unpas --}}
                  <li class="nav-item">
                    <a class="nav-link {{ $active === 'galery' ? 'active' : '' }}" href="/galery">Galery</a>
                  </li>

                  {{-- tanbahan boostrap diluar dari tontonan unpas --}}
                  <li class="nav-item">
                    <a class="nav-link {{ $active === 'kontak' ? 'active' : '' }}" href="/kontak">Kontak</a>
                  </li>

                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li> --}}
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi 
                            bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>

                              <form action="/logout" method="post">
                                @csrf
                                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout </button>
                              </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}"><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="/register" class="nav-link {{ $active === 'register' ? 'active' : '' }}"><i
                                class=""></i>Register</a>
                    </li> --}}
                @endauth
            </ul>


        </div>
    </div>
</nav>

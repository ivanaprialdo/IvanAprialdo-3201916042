<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" 
                aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text"> </span>
                    My Posts
                </a>
            </li>
        </ul> --}}


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
              
      
        <ul class="nav flex-column">
        @role('staf_tu')
            <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                <span data-feather="grid"> </span>
                Kategori Berita
            </a>
        </li>
        @endrole
      

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/badanpengurusjemaat*') ? 'active' : '' }}" href="/dashboard/badanpengurusjemaat">
                <span data-feather="user"> </span>
                Badan Pengurus Jemaat
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/bidangpelayanan*') ? 'active' : '' }}" href="/dashboard/bidangpelayanan">
                <span data-feather="user-check"> </span>
                Bidang Pelayanan
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <span data-feather="file-text"> </span>
                Warta Jemaat
            </a>
        </li>
    </ul>

    @role('staf_tu')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/jadwalibadah*') ? 'active' : '' }}" href="/dashboard/jadwalibadah">
            <span data-feather="clock"> </span>
            Jadwal Kebaktian
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/datajemaat*') ? 'active' : '' }}" href="/dashboard/datajemaat">
            <span data-feather="file-text"> </span>
            Pendataan Jemaat
        </a>
    </li>
    @endrole
    
    
    <li class="nav-item">
        <a class="nav-link {{ Request::is('keuangan') ? 'active' : '' }}" href="/keuangan">
            <span data-feather="dollar-sign"> </span>
            Laporan Keuangan
        </a>
    </li>
    @role('staf_tu')
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/galery*') ? 'active' : '' }}" href="/dashboard/galery">
                <span data-feather="image"> </span>
                Galery
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link {{ Request::is('kontak/index*') ? 'active' : '' }}" href="/kontak/index">
                <span data-feather="users"> </span>
                Kontak
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pesan*') ? 'active' : '' }}" href="/dashboard/pesan">
                <span data-feather="inbox"> </span>
                Kritik dan Saran
            </a>
        </li>
 @endrole
        </ul>
        
    </div>
</nav>
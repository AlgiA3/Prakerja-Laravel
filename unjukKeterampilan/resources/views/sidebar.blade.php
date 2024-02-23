<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href={{ asset('dasbord') }}>
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-dragon"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Wes Makmur <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href={{ asset('kategori') }}>
            <i class="fas fa-fw fa-table"></i>
            <span>Kategori</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href={{ asset('post') }}>
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Post</span></a>
    </li>

    <!-- Nav Item - Tables -->
    @if (auth()->user()->role=='admin' || auth()->user()->role=='editor')
    <li class="nav-item">
        <a class="nav-link" href={{ asset('produk') }}>
            <i class="fas fa-fw fa-table"></i>
            <span>Produk</span></a>
    </li>
    @endif

    @if (auth()->user()->role=='admin')
    <li class="nav-item">
        <a class="nav-link" href={{ asset('user') }}>
            <i class="fas fa-car"></i>
            <span>User</span></a>
    </li>
    @endif


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src={{ asset('Tpln/img/undraw_rocket.svg') }}
            alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
            and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
            Pro!</a>
    </div>

</ul>

<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Masparta</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">MP</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item ">
            <a href="#" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>

        </li>
        <li class="menu-header">Data Master</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Data Master</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('tahun-akademik.index') }}">Tahun Akademik</a></li>
                <li><a class="nav-link" href="#">Sekolah PK </a>
                </li>
                <li><a class="nav-link" href="{{ route('jurusan.index') }}">Jurusan</a></li>
            </ul>
        </li>
        <li class="active"><a class="nav-link" href="#"><i class="far fa-square"></i>
                <span>Data Industri</span></a></li>


    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>
</aside>

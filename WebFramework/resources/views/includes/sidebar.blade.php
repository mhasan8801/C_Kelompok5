
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./">Home 1</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-label">Data</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Master</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('admin/petugas') }}">Petugas</a></li>
                            <li><a href="{{ url('admin/anggota') }}">Anggota</a></li>
                            <li><a href="{{ url('admin/buku') }}">Buku</a></li>
                        </ul>
                        {{-- <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Master</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./petugas">Petugas</a></li>
                            <li><a href="./anggota">Anggota</a></li>
                            <li><a href="./buku">Buku</a></li>
                        </ul> --}}
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

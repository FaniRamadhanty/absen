<div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
        aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <!-- <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{ asset('assets/dist/img/brand/blue.png') }}" class="navbar-brand-img" alt="">
                </a> -->
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">

                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                                        data-target="#sidenav-collapse-main" aria-controls="sidenav-main"
                                        aria-expanded="false" aria-label="Toggle sidenav">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collapse header -->


                    <!-- Nav items -->
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/pegawai') }}">

                                <span class="nav-link-text">Data Pegawai</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/kehadiran') }}">

                                <span class="nav-link-text">Data Kehadiran</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/hadir') }}">

                                <span class="nav-link-text">Data Hadir</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/absen') }}">

                                <span class="nav-link-text">Data Absen</span>
                            </a>
                        </li>                
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

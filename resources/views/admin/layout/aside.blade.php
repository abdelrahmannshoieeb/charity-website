<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="index.html" class="logo">
            <span>
                <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
            <span class="">
                <img src="assets/images/logo-light.png" alt="logo-large" class="logo-lg logo-light">
                <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end brand-->
    <!--start startbar-menu-->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <!-- Navigation -->
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label mt-2">
                        <span>Main</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">
                            <i class="iconoir-report-columns menu-icon"></i>
                            <span>Admin Dashboard</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('createInstu') }}">
                            <i class="iconoir-report-columns menu-icon"></i>
                            <span>create Instututions</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cities') }}">
                            <i class="iconoir-report-columns menu-icon"></i>
                            <span>Cities</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('regions') }}">
                            <i class="iconoir-report-columns menu-icon"></i>
                            <span>Regions</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jobs') }}">
                            <i class="iconoir-report-columns menu-icon"></i>
                            <span>jobs</span>
                        </a>
                    </li><!--end nav-item-->
             
                </ul><!--end nav-->
            </div><!--end startbarAuthentication-->
            </li><!--end nav-item-->
            </ul><!--end navbar-nav--->
        </div>
    </div><!--end startbar-collapse-->
</div><!--end startbar-menu-->
</div><!--end startbar-->
  
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box ">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('master/assets/images/logos/cclc.png')}}" alt="" width="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('master/assets/images/logos/cclc.png')}}" alt="" width="90"> <span class="logo-txt">Ccl</span>
                                </span>
                            </a>

                            {{-- <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('master/assets/images/logos/cclc.png')}}" alt="" width="100">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('master/assets/images/logos/cclc.png')}}" alt="" width="100"> <span class="logo-txt">CCL</span>
                                </span>
                            </a> --}}
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        {{-- <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form> --}}
                    </div>

                    <div class="d-flex">

                    

                        {{-- <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div> --}}

                       

                       

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-account font-size-24 align-middle me-1"></i>
                                <span class="d-none d-xl-inline-block ms-1 fw-medium"> @auth
                                   {{ auth()->user()->fname }}
                                @endauth</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{url('profile-list')}}"><i class="mdi mdi-account font-size-16 align-middle me-1"></i>Company Details</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('logout') }}" onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                                     <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </header>
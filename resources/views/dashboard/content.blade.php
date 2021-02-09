<div class="main-content" id="panel" style="padding-left: 10px">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
            {{--                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">--}}
            {{--                    <div class="form-group mb-0">--}}
            {{--                        <div class="input-group input-group-alternative input-group-merge">--}}
            {{--                            <div class="input-group-prepend">--}}
            {{--                                <span class="input-group-text"><i class="fas fa-search"></i></span>--}}
            {{--                            </div>--}}
            {{--                            <input class="form-control" placeholder="Search" type="text">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">--}}
            {{--                        <span aria-hidden="true">×</span>--}}
            {{--                    </button>--}}
            {{--                </form>--}}
            <!-- Navbar links -->
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('dashboard-front/img/theme/team-4.jpg') }}">
                  </span>
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!, {{ Auth::user()->name }}</h6>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                @yield('main-title')
                            </ol>
                        </nav>
                    </div>

                </div>
                <!-- Card stats -->
                <div class="col-sm-12">

                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="text-center text-light">
                        @yield('dash-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->

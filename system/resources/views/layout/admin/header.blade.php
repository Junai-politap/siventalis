        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{ url('/') }}">Siventalis</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">

                        {{-- <li class="nav-item">
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    @yield('header')
                                </div>

                                <a class="dropdown-item" href="{{ url('logout') }}"><i
                                        class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                        </li> --}}
                        <li class="nav-items">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{ url('public/admin') }}/assets/images/ti.png" alt=""
                                    class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                                <div class="dropdown-item dropdown-profile-pic" href="">
                                    <img src="{{ url('public/admin') }}/assets/images/ti.png" height="150px" width="150px">
                                    <p class="text-center m-t-10 m-b-20">
                                        {{ auth()->user()->nama }}
                                        {{-- {{ auth()->user()->nama_perusahaan }} --}}
                                    </p>
                                </div>

                                <div class="dropdown-divider"></div>
                                <a href="{{ url('logout') }}" class="dropdown-item"><i
                                        class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </li>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

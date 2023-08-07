@section('profil')

    <li class="nav-item dropdown">
        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><img src="{{ url("public/$pegawai->foto") }}" alt=""
                class="user-avatar-md rounded-circle"></a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
            <div class="dropdown-item dropdown-profile-pic" href="">
                <img src="{{ url("public/$pegawai->foto") }}" height="150px" width="150px" class="rounded-circle">
                <p class="text-center m-t-10 m-b-20">
                    {{ $pegawai->nama }}
                </p>
            </div>

            <a href="{{ url('profil') }}" class="dropdown-item"> <i class="fa fa-user"></i> Profile
            </a>

            <div class="dropdown-divider"></div>
            <a href="{{ url('logout') }}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </li>
@endsection

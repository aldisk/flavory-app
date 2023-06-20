@if(Session::has('username'))
<nav class="navbar navbar-light navbar-expand-lg body-tertiary rounded" aria-label="Thirteenth navbar example"
        style="background-color: #F0E6E6;">
        <div class="container">
            <a href="/" class="navbar-brand me-0" href="#"><img src="{{ asset('img/flavory-removebg-preview.png') }}" alt="Logo" width="100" !>
                <!-- <strong style="color: #BC1823;">Flavory</strong> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
                aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample11">
                <div class="navbar-brand col-lg-2 me-0"></div>
                <ul class="navbar-nav col-lg-7 justify-content-lg-center">
                    <li class="nav-item px-4 mx-1">
                        <a class="nav-link fw-bold" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item px-4 mx-1">
                        <a class="nav-link fw-bold" aria-current="page" href="{{ route('searchResep') }}">Search</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <div class="d-none d-sm-none d-md-flex d-lg-none col-lg-3 justify-content-start ms-4 my-2">
                            <div class="dropdown text-start ">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    @if(file_exists('storage/profile-pic/'.Session::get('username').'.jpg'))
                                        <img class="rounded-circle" 
                                        src="{!! asset('storage/profile-pic/'.Session::get('username').'.jpg?lastmod'.rand()) !!}" 
                                        alt="" width="32" height="32">
                                    @else
                                        <img class="rounded-circle" 
                                        src="{!! asset('defaultpp.png') !!}" 
                                        alt="This is you " width="32" height="32">
                                    @endif
                                </a>
                                <ul class="dropdown-menu dropdown-menu-start">
                                    <li><a class="dropdown-item" href="/about-me">Profil</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="d-none d-sm-none d-md-none d-lg-flex col-lg-3 justify-content-end">
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @if(file_exists('storage/profile-pic/'.Session::get('username').'.jpg'))
                                <img class="rounded-circle" 
                                src="{!! asset('storage/profile-pic/'.Session::get('username').'.jpg?lastmod'.rand()) !!}" 
                                alt="" width="48" height="48">
                            @else
                                <img class="rounded-circle" 
                                src="{!! asset('defaultpp.png') !!}" 
                                alt="This is you " width="48" height="48">
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/about-me">Profil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/logout">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
</nav>
@else
<nav class="navbar navbar-light navbar-expand-lg body-tertiary rounded sticky-top"
    aria-label="Thirteenth navbar example" style="background-color: #F0E6E6;">
    <div class="container">
        <a href="/" class="navbar-brand me-0" href="#"><img src="{{ asset('img/flavory-removebg-preview.png') }}" alt="Logo" width="100" !>
            <!-- <strong style="color: #BC1823;">Flavory</strong> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample11">
            <div class="navbar-brand col-lg-2 me-0"></div>
            <ul class="navbar-nav col-lg-7 justify-content-lg-center">
            <li class="nav-item px-4 mx-1">
                    <a class="nav-link fw-bold" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item px-4 mx-1">
                    <a class="nav-link fw-bold" aria-current="page" href="{{ route('searchResep') }}">Search</a>
                </li>
                <li class="nav-item px-4 mx-1">
                    <!-- <button type="button" class="btn btn-outline-danger ms-4 my-1 d-lg-none">Login</button> -->
                </li>
                <li class="nav-item px-4 mx-1">
                    <!-- <button type="button" class="btn btn-danger ms-4 my-1 d-lg-none">Sign-up</button> -->
                </li>
            </ul>
            <div class="d-none d-sm-none d-md-none d-lg-flex col-lg-3 justify-content-end">
                <a class="btn btn-outline-danger me-2 justify-content-end" aria-current="page" href="/login">Login</a>
                <a class="btn btn-danger justify-content-end" aria-current="page" href="/register">Register</a>
                <!-- <button type="submit" class="btn btn-outline-danger me-2 justify-content-end">Login</button>
                <button type="button" class="btn btn-danger justify-content-end">Register</button> -->
            </div>
        </div>
    </div>
</nav>
@endif
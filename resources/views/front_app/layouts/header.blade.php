<style>
    .nav-list {
        color: black;
        padding: 1em 2em;
        /* Adjust padding as needed */
        border-radius: 31px;
        background: white;
        cursor: pointer;
        font-size: 1em;
        font-weight: 500;
        /* Adjust font size as needed */
    }

    .nav-list.active {
        background: black;
        color: white;
    }

    @media (max-width: 1080px) {
        .nav-list {
            padding: 0.5em 1em;
            /* Adjust padding for smaller screens */
            font-size: 11px !important;
            /* Adjust font size for smaller screens */
        }
    }

    .profile-button {
        background: white !important;
        color: black;
        border: none !important;
        border-radius: 25px;
        padding: 12px;

    }

    .notification-button {
        background: white !important;
        color: black;
        border: none !important;
        border-radius: 50px;
        padding: 12px 17px 12px 17px;
    }

    .profile-info {
        display: flex;
        align-items: center;
    }

    .btn:hover {
        color: black !important;
    }

    .profile-image {
        width: 30px;
        /* Adjust size as needed */
        height: 30px;
        /* Adjust size as needed */
        border-radius: 50%;
        /* To make the image circular */
        margin-right: 10px;
        /* Add some space between image and text */
    }

    .dropdown-toggle::after {
        display: none !important;
    }

    .btn.show {
        color: black;
    }

    .name:visited,
    a {
        color: #101115 !important;
    }

    .notification li {
        padding: 12px;
        border-bottom: 1px solid #d6d6d6;
    }

    .list-unstyled li {
        font-size: 14px !important;
    }
</style>
<div class=" position-fixed w-100 desktop-header" style="z-index:9999;background:#DBDEDD !important;
">
    <nav class=" bg-body-none  p-2 bg-transparent border-3 border-dark  position-relative" style="z-index: 100!important;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 d-flex align-items-center justify-content-center">
                <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
                    <a class="navbar-brand name fs-1 text-black fw-bold" id="tezhly" href="{{route('home')}}">TEZHLY</a>
                    <!-- <button class="navbar-toggler bg-secondary py-2 px-4 border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <i class="fa-solid fa-align-justify fs-5 "></i>
                    </button> -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">TEZHLY</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fw-bold">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('resume-ai-builder')}}">Resume Ai Builder</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('courses')}}">Courses</a>
                                </li>
                                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('goal-plan')}}">Goal Plan</a>
                                </li> --}}
                                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('my-matches')}}">My Matches</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('faqs')}}">FAQs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                </li>
                            </ul>
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled list-inline  mb-0">
                        <li class="list-inline-item  nav-list active">Chat</li>
                        <li class="list-inline-item  nav-list">For Team</li>
                        <li class="list-inline-item  nav-list">For Personal</li>
                        <li class="list-inline-item  nav-list">For Career</li>
                    </ul>
                </div>


                <div class="col-4 align-items-center justify-content-center">
                    @if(!Auth::check())
                    <div class="d-flex justify-content-end">
                        <a href="{{route('login')}}" class="btn profile-button fw-bold mt-2 rounded-pill">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> Login
                        </a>
                    </div>
                    @else

                    <div class="row m-1">
                        <div class="col-5 m-1 align-items-center justify-content-center" style="text-align:end">
                            <button class="btn btn-secondary dropdown-toggle mt-1 notification-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell fs-6 "></i>
                            </button>
                            <ul class="dropdown-menu notification">
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                        </div>
                        <div class="col-6 m-1 align-items-center justify-content-center" style="padding-left: 0px !important;">
                            <button class="btn btn-secondary dropdown-toggle profile-button ml-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="profile-info">
                                    @php
                                    $image = Auth::user()->avatar;
                                    @endphp
                                    @if ($image != NULL)

                                    <img src="{{asset('assets/user/'. $image)}}" alt="Profile Image" class="profile-image">
                                    @else
                                    <img src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" alt="Profile Image" class="profile-image">

                                    @endif
                                    <span class="profile-name">{{Auth::user()->name }}</span>

                                </div>

                                <!-- Profile -->
                            </button>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item " href="{{route('home')}}">Home</a></li>
                                <li><a class="dropdown-item" href="{{route('customer-dashboard')}}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{route('community')}}">Community</a></li>
                                <li><a class="dropdown-item" href="{{route('user-dashboard')}}">profile</a></li>
                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                            </ul>


                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>

    </nav>
</div>

<nav class="navbar bg-body-none  p-3 border-bottom border-3 border-dark mob-header" style="background: #fefaef;">
    <div class="container-fluid">
        <a class="navbar-brand fs-1 fw-bold" href="{{route('home')}}">TEZHLY</a>


        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar1" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar1" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">TEZHLY</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('courses')}}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('resume-ai-builder')}}">Resume Ai Builder</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('goal-plan')}}">Goal Plan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('my-matches')}}">My Matches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('faqs')}}">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin-dashboard')}}">Admin Dashboard</a>
                    </li>

                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center bg-danger">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:koalantt2023@gmail.com">koalantt2023@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100089880205784" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/koalantt" class="instagram"><i class="bi bi-instagram"></i></a>
            {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> --}}
        </div>
    </div>
</section>
<!-- ======= Top Bar ======= -->

<!-- ======= Menu ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">
                <img src="/img/logo.png" alt="logo" width="50" height="50">
                KOALA NTT</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo"><img src="/img/logo.png" alt=""></a> --}}

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Galery</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="nav-link scrollto {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Articles</a>
                </li>
                @auth
                <li class="dropdown"><a href="#"><span>Welcome back, {{auth()->user()->username}}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li><a class="nav-link scrollto {{ Request::is('login') ? 'active' : '' }}" href="/login">Login</a>
                </li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
<!-- ======= Menu ======= -->
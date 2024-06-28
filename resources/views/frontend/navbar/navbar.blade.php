<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt text-primary me-2"></i>adresse, Lomé, Togo</small>
            <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>8h00 - 18h00</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small><i class="fa fa-envelope text-primary me-2"></i>info@example.com</small>
            <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+228 00 00 00 00</small>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="display-5 text-primary m-0">Finanza</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::is('home') ? 'active' : '' }}">Accueil</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">A propos</a>
                <a href="{{ route('service') }}" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('') ? 'active' : '' }}" data-bs-toggle="dropdown">Gestion</a>
                    <div class="dropdown-menu border-light m-0">
                        <a href="{{ route('projet') }}" class="dropdown-item {{ Request::is('projet') ? 'active' : '' }}">Projets</a>
                        <a href="{{ route('feature') }}" class="dropdown-item {{ Request::is('feature') ? 'active' : '' }}">Planification</a>                        
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                    <small class="fab fa-facebook-f text-primary"></small>
                </a>
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                    <small class="fab fa-twitter text-primary"></small>
                </a>
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                    <small class="fab fa-linkedin-in text-primary"></small>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/lampung.png') }}" alt="Logo" width="auto" height="40"
                class="d-inline-block align-text-top">
            <div class="d-inline-block align-middle ms-2">
                <div class="fw-semibold" style="font-size: 1.1rem;">Sistem TU BPSMB</div>
                <div class="text-muted" style="font-size: 0.95rem;">Disperindag Lampung</div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>
                @if (!auth()->check())
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}" role="button">
                            <i class="bi bi-box-arrow-in-right me-1"></i>
                            Login
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="#"
                                class="d-flex align-items-center text-decoration-none dropdown-toggle user-info"
                                id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <div>
                                    <div class="nav-link">{{ Auth::user()->name }}</div>
                                    {{-- <div class="text-muted small">{{ Auth::user()->email }}</div> --}}
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                        <i class="bi bi-house-door me-2"></i> Dashboard
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
</nav>

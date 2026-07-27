@php $activePage = $activePage ?? ''; @endphp
<nav class="navbar" id="mainNavbar">
    <img src="{{ asset('assets/Logo_Coco Agency_White.png') }}" alt="COCO Digital Agency" class="nav-logo" />

    {{-- Desktop links --}}
    <ul class="nav-links">
        <li>
            <a href="{{ route('home') }}" 
            class="{{ request()->routeIs('home') ? 'active' : '' }}" 
            data-log-action="nav_home">Home</a>
        </li>
        <li>
            <a href="{{ route('services') }}" 
            class="{{ request()->routeIs('services') ? 'active' : '' }}" 
            data-log-action="nav_services">Services</a>
        </li>
        <li>
            <a href="{{ route('client') }}" 
            class="{{ request()->routeIs('client') ? 'active' : '' }}" 
            data-log-action="nav_client">Client</a>
        </li>
    </ul>

    {{-- Hamburger button --}}
    <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>

{{-- Mobile dropdown menu --}}
<div class="mobile-menu" id="mobileMenu">
    <ul>
        <li><a href="{{ url('/') }}" {{ $activePage === 'home' ? 'active' : '' }} data-log-action="nav_home">Home</a></li>
        <li><a href="{{ url('/services') }}" {{ $activePage === 'services' ? 'active' : '' }} data-log-action="nav_services">Services</a></li>
        <li><a href="{{ url('/client') }}" {{ $activePage === 'client' ? 'active' : '' }} data-log-action="nav_client">Client</a></li>

    </ul>
</div>
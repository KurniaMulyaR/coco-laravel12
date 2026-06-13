<nav class="navbar" id="mainNavbar">
    <img src="{{ asset('assets/logo_coco.png') }}" alt="COCO Digital Agency" class="nav-logo" />

    {{-- Desktop links --}}
    <ul class="nav-links">
        <li><a href="{{ url('/') }}" class="active" data-log-action="nav_home">Home</a></li>
        <li><a href="{{ url('/services') }}" data-log-action="nav_services">Services</a></li>
        <li><a href="{{ url('/client') }}" data-log-action="nav_client">Client</a></li>

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
        <li><a href="{{ url('/') }}" data-log-action="nav_home">Home</a></li>
        <li><a href="{{ url('/services') }}" data-log-action="nav_services">Services</a></li>
        <li><a href="{{ url('/client') }}" data-log-action="nav_client">Client</a></li>

    </ul>
</div>
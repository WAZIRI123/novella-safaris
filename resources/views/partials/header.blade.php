@php
    $activeNav = $activeNav ?? '';
    $navActive = fn(string $key) => $key === $activeNav ? ' class="active"' : '';
@endphp

<div class="header-top">
    <div class="container header-top-inner">
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('assets/logo.png') }}" alt="Novella Tanzania — Safaris &amp; Trekking" />
        </a>
        <div class="tagline">The number one Tour Operator in Tanzania</div>
        <div class="header-top-right">
            <div class="quick-strip">
                <a href="{{ route('about') }}"><i class="bi bi-people-fill"></i> About Us</a>
                <a href="{{ route('contact') }}"><i class="bi bi-telephone-fill"></i> Contact Us</a>
                <a href="{{ route('resources') }}"><i class="bi bi-file-earmark-pdf-fill"></i> Resources</a>
            </div>
        </div>
    </div>
</div>

<header class="main-nav" id="mainNav">
    <div class="container main-nav-inner">
        <a href="{{ route('home') }}" class="brand brand-mobile">
            <img src="{{ asset('assets/logo.png') }}" alt="Novella Tanzania" />
        </a>
        <nav class="primary-nav" id="primaryNav">
            <ul>
                <li><a href="{{ route('home') }}"{!! $navActive('home') !!}>Home</a></li>
                <li class="has-dropdown">
                    <a href="{{ route('trekking') }}"{!! $navActive('trekking') !!}>Trekking <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="{{ route('trekking.show', 'machame') }}">Machame Route</a></li>
                        <li><a href="{{ route('trekking.show', 'northern-circuit') }}">Northern Circuit</a></li>
                        <li><a href="{{ route('trekking.show', 'lemosho') }}">Lemosho Route</a></li>
                        <li><a href="{{ route('trekking.show', 'marangu') }}">Marangu Route</a></li>
                        <li><a href="{{ route('trekking.show', 'rongai') }}">Rongai Route</a></li>
                        <li><a href="{{ route('trekking.show', 'umbwe') }}">Umbwe Route</a></li>
                        <li><a href="{{ route('trekking.show', 'meru') }}">Mount Meru</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="{{ route('safari') }}"{!! $navActive('safari') !!}>Safari <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="{{ route('safari') }}">Tanzania Safaris</a></li>
                        <li><a href="{{ route('safari') }}#serengeti">Serengeti National Park</a></li>
                        <li><a href="{{ route('safari') }}#ngorongoro">Ngorongoro Crater</a></li>
                        <li><a href="{{ route('safari') }}#tarangire">Tarangire National Park</a></li>
                        <li><a href="{{ route('safari') }}#manyara">Lake Manyara</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('zanzibar') }}"{!! $navActive('zanzibar') !!}>Zanzibar</a></li>
                <li><a href="{{ route('day-trips') }}"{!! $navActive('day-trips') !!}>Day Trips</a></li>
                <li><a href="{{ route('other-country') }}"{!! $navActive('other-country') !!}>Other Country</a></li>
                <li><a href="{{ route('special-packages') }}"{!! $navActive('special-packages') !!}>Special Packages</a></li>
                <li><a href="{{ route('blog') }}"{!! $navActive('blog') !!}>Blog</a></li>
            </ul>
        </nav>

        <div class="nav-actions">
            <a href="{{ route('contact') }}" class="btn-plan"><i class="bi bi-briefcase-fill"></i> LET'S PLAN A TRIP</a>
            <button class="nav-toggle" id="navToggle" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

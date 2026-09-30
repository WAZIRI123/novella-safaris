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
                <a href="{{ route('blog') }}"><i class="bi bi-file-earmark-pdf-fill"></i> Resources</a>
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
                        <li class="has-submenu">
                            <a href="{{ route('trekking') }}">Kilimanjaro <i class="bi bi-chevron-right"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ route('trekking.show', 'machame') }}">Machame Route</a></li>
                                <li><a href="{{ route('trekking.show', 'lemosho') }}">Lemosho Route</a></li>
                                <li><a href="{{ route('trekking.show', 'marangu') }}">Marangu Route</a></li>
                                <li><a href="{{ route('trekking.show', 'rongai') }}">Rongai Route</a></li>
                                <li><a href="{{ route('trekking.show', 'umbwe') }}">Umbwe Route</a></li>
                                <li><a href="{{ route('trekking.show', 'northern-circuit') }}">Northern Circuit Route</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('trekking.show', 'meru') }}">Mount Meru <i class="bi bi-chevron-right"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ route('trekking.show', 'mount-meru-3-day') }}">3 Days Mount Meru Trek</a></li>
                                <li><a href="{{ route('trekking.show', '4-day-mount-meru-trek') }}">4 Days Mount Meru Trek</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="{{ route('tanzania-safaris') }}"{!! $navActive('safari') !!}>Safari <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown dropdown-safari">
                        @foreach ([
                            ['2-days-safari-adventure', '2 Days Safari', 'Tarangire · Ngorongoro Crater'],
                            ['3-days-safari-adventure', '3 Days Safari', 'Serengeti · Ngorongoro Crater'],
                            ['4-days-wildlife-safari', '4 Days Safari', 'Tarangire · Serengeti · Ngorongoro Crater'],
                            ['5-days-safari-expedition', '5 Days Safari', 'Tarangire · Serengeti (2 nights) · Maasai Culture · Ngorongoro Crater'],
                            ['6-days-safari-discovery', '6 Days Safari', 'Tarangire · Central & North Serengeti (2 nights) · Ngorongoro Crater'],
                            ['7-days-safari-journey', '7 Days Safari', 'Tarangire · Central & North Serengeti (3 nights) · Ngorongoro Crater'],
                            ['8-days-safari-expedition', '8 Days Safari', 'Tarangire · Serengeti · Ngorongoro Crater · Lake Manyara'],
                        ] as [$slug, $label, $parks])
                            <li><a href="{{ route('safari.show', $slug) }}">{{ $label }}<small>{{ $parks }}</small></a></li>
                        @endforeach
                        <li class="dropdown-all"><a href="{{ route('tanzania-safaris') }}">View all safaris <i class="bi bi-arrow-right"></i></a></li>
                    </ul>
                </li>
                <li><a href="{{ route('zanzibar') }}"{!! $navActive('zanzibar') !!}>Zanzibar</a></li>
                <li><a href="{{ route('day-trips') }}"{!! $navActive('day-trips') !!}>Day Trips</a></li>
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

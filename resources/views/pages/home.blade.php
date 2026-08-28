@extends('layouts.app', [
    'pageTitle' => 'Novella Safaris — Premier Tour Operator for the Best Safari in Tanzania',
    'pageDescription' => 'Novella Safaris — the number one tour operator in Tanzania. Handcrafted safaris, Kilimanjaro treks and Zanzibar escapes.',
    'activeNav' => 'home',
])

@section('content')
    <section class="hero">
        <div class="hero-slides" id="heroSlides">
            @php
                $slides = $heroSlides->pluck('image')->all();
                if (empty($slides)) {
                    $slides = [
                        asset('images/25.jpeg'),
                        asset('images/27.jpeg'),
                        asset('images/28.jpeg'),
                        asset('images/22.jpeg'),
                        asset('images/24.jpeg'),
                    ];
                }
            @endphp
            @foreach ($slides as $i => $img)
                <div class="hero-slide{{ $i === 0 ? ' active' : '' }}" style="background-image:url('{{ $img }}');"></div>
            @endforeach
        </div>
        <div class="hero-overlay"></div>
        <div class="container hero-inner">
            <h1 class="hero-title">PREMIER TOUR OPERATOR FOR THE BEST SAFARI IN TANZANIA</h1>
            <p class="hero-sub">TO SEE A BEAUTIFUL COUNTRY WITH ITS LANDSCAPES AND WILDERNESS.</p>

            <div class="dual-buttons">
                <a href="{{ route('tanzania-safaris') }}" class="dual-btn">
                    <div class="dual-icon">
                        <svg viewBox="0 0 100 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 40 L25 40 L28 30 L72 30 L75 40 L85 40 L88 45 L88 50 L12 50 L12 45 Z" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <path d="M32 30 L35 22 L65 22 L68 30" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <circle cx="25" cy="50" r="6" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <circle cx="75" cy="50" r="6" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <path d="M42 30 L42 22 M52 30 L52 22 M62 30 L62 22" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <span>Tanzania Safaris</span>
                </a>
                <a href="{{ route('trekking') }}" class="dual-btn">
                    <div class="dual-icon">
                        <svg viewBox="0 0 100 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 50 L30 20 L40 32 L55 12 L75 40 L90 25 L90 50 Z" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <path d="M50 18 L55 12 L60 18" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="72" cy="15" r="4" stroke="currentColor" stroke-width="1.5" fill="none"/>
                        </svg>
                    </div>
                    <span>Mount Kilimanjaro Trek</span>
                </a>
            </div>
        </div>
    </section>

    <section class="why-book">
        <div class="container why-inner">
            <div class="why-text">
                <span class="eyebrow">Why Book with Novella</span>
                <h2>Rooted in Tanzania. <br />Trusted worldwide.</h2>
                <p>Novella Safaris takes travellers deep into the wild heart of East Africa. Our journeys are unrushed, our guides are family, and every itinerary is designed the way we would want to travel ourselves.</p>
                <p>From the sweeping Serengeti plains to the roof of Africa on Kilimanjaro and the turquoise shores of Zanzibar — we are your one team, from your first email to your final sundowner.</p>
                <a href="{{ route('about') }}" class="btn btn-navy">Read Our Story <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="why-portrait">
                <img src="{{ asset('assets/novellapic.jpeg') }}" alt="Novella Safaris Owner" />
            </div>
        </div>
    </section>

    <section class="features-charity">
        <div class="container features-inner">
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                <h3>Safety First</h3>
                <p>Modern 4x4 Land Cruisers, satellite comms and oxygen on every climb.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-person-badge"></i></div>
                <h3>Qualified Guides</h3>
                <p>Wildlife College certified, WFR trained, with deep experience in the bush.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-geo-alt"></i></div>
                <h3>Local Knowledge</h3>
                <p>Born and bred in Tanzania — we know every corner, every season, every secret.</p>
            </div>
        </div>
    </section>


    <section class="top-selling">
        <div class="container">
            <div class="section-title">
                <h2>Top Selling Packages</h2>
            </div>
            <div class="top-grid">
                @foreach ([
                    ['4 Days', 'Tanzania Safari', asset('images/28.jpeg')],
                    ['6 Days', 'Northern Circuit Safari', asset('images/29.jpeg')],
                    ['10 Days', 'Luxury Fly-In Safari', asset('images/22.jpeg')],
                    ['8 Days', 'Kilimanjaro Lemosho', asset('images/27.jpeg')],
                    ['6 Days', 'Kilimanjaro Marangu', asset('images/15.jpeg')],
                    ['7 Days', 'Kilimanjaro Machame', asset('images/20.jpeg')],
                ] as [$days, $title, $img])
                    <a href="{{ route('tanzania-safaris') }}" class="top-card" style="background-image:url('{{ $img }}');">
                        <div class="top-card-overlay">
                            <span class="top-days">{{ $days }}</span>
                            <h4>{{ $title }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="group-banner">
        <div class="container">
            <h2>Tanzania Group Departure Packages</h2>
        </div>
    </section>

    <section class="group-intro">
        <div class="container group-intro-inner">
            <div>
                <h3>Kilimanjaro &amp; Safari Group Departures</h3>
                <p>Join a small, guaranteed group — great for solo travellers and couples.</p>
            </div>
            <div>
                <p>Every departure is capped at 8 guests, led by two certified guides and follows a tried-and-tested itinerary with hand-picked lodges. Perfect for climbing Kilimanjaro with new friends or sharing the Serengeti with like-minded travellers.</p>
            </div>
        </div>
    </section>

    <section class="group-trips">
        <div class="container">
            @foreach ([
                ['7 Days', 'Machame Route Kilimanjaro Climb', '$1,969', asset('images/27.jpeg'), false, route('trekking.show', 'machame')],
                ['8 Days', 'Lemosho Route Kilimanjaro Climb', '$2,251', asset('images/15.jpeg'), true, route('trekking.show', 'lemosho')],
                ['7 Days', 'Serengeti Migration Safari', '$2,651', asset('images/safaris/zebra-with-baby-dust-against-setting-sun-kenya-tanzania-national-park-serengeti-maasai-mara-1780114075090-760945481.jpg'), false, route('tanzania-safaris')],
            ] as [$days, $title, $price, $img, $reverse, $url])
                <article class="trip-row{{ $reverse ? ' reverse' : '' }}">
                    @if ($reverse)
                        <a href="{{ $url }}" class="trip-image" style="background-image:url('{{ $img }}');" aria-label="{{ $title }}"></a>
                    @endif
                    <div class="trip-info">
                        <span class="trip-days">{{ $days }}</span>
                        <h3><a href="{{ $url }}">{{ $title }}</a></h3>
                        <div class="trip-meta">
                            <div class="trip-price"><strong>{{ $price }}</strong><span>Per Person</span></div>
                            <div class="trip-availability">
                                <span class="avail-open"><i class="bi bi-check-circle-fill"></i> Open</span>
                                <a href="{{ $url }}" class="btn btn-yellow btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                    @if (! $reverse)
                        <a href="{{ $url }}" class="trip-image" style="background-image:url('{{ $img }}');" aria-label="{{ $title }}"></a>
                    @endif
                </article>
            @endforeach
        </div>
    </section>


    <div class="gradient-divider"></div>

    <section class="inspiration">
        <div class="container">
            <div class="section-title">
                <h2>Get Inspiration</h2>
                <p>Wildlife, white-sand beaches and unforgettable day adventures across Tanzania.</p>
            </div>
            <div class="inspiration-cols">
                <div class="inspiration-col">
                    <div class="inspiration-col-head">
                        <h3>Safaris</h3>
                        <a href="{{ route('tanzania-safaris') }}">Explore safaris <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="inspiration-stack">
                        @foreach ([
                            'images/safaris/serengeti-migration.jpg',
                            'images/safaris/wildbeet.jpg',
                            'images/safaris/elephant.jpg',
                        ] as $img)
                            <a href="{{ route('tanzania-safaris') }}" class="inspiration-card" style="background-image:url('{{ asset($img) }}');" aria-label="Safari inspiration"></a>
                        @endforeach
                    </div>
                </div>
                <div class="inspiration-col">
                    <div class="inspiration-col-head">
                        <h3>Zanzibar</h3>
                        <a href="{{ route('zanzibar') }}">Explore Zanzibar <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="inspiration-stack">
                        @foreach ([
                            'images/zanzibar images/famous-rock-restaurant-built-cliff-sea-zanzibar-tanzania-1779768277653-505084469.jpg',
                            'images/zanzibar images/Nungi kendwa.jpg',
                            'images/zanzibar images/beach12.png',
                        ] as $img)
                            <a href="{{ route('zanzibar') }}" class="inspiration-card" style="background-image:url('{{ asset($img) }}');" aria-label="Zanzibar inspiration"></a>
                        @endforeach
                    </div>
                </div>
                <div class="inspiration-col">
                    <div class="inspiration-col-head">
                        <h3>Day Trips</h3>
                        <a href="{{ route('day-trips') }}">Explore day trips <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="inspiration-stack">
                        @foreach ([
                            'images/Day Trips/two-elephants-walking-african-savanna-sunset-1780110653074-799730501.jpg',
                            'images/Day Trips/DSC01306-1780110936265-474666078.jpg',
                            'images/Day Trips/IMG-2331-1780110336048-544612569.jpg',
                        ] as $img)
                            <a href="{{ route('day-trips') }}" class="inspiration-card" style="background-image:url('{{ asset($img) }}');" aria-label="Day trip inspiration"></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="section-title">
                <h2>News and Updates</h2>
            </div>
            <div class="news-grid">
                @forelse ($blogPosts as $post)
                    <article class="news-card">
                        <div class="news-img" style="background-image:url('{{ $post->image }}');"></div>
                        <div class="news-body">
                            <span class="news-cat">{{ $post->category }}</span>
                            <h4><a href="{{ route('blog') }}">{{ $post->title }}</a></h4>
                            <p>{{ $post->excerpt }}</p>
                        </div>
                    </article>
                @empty
                    @foreach ([
                        ['Safari Tips', 'When is the best time to see the Great Migration?', 'Month-by-month guide to following the wildebeest across the Serengeti-Mara ecosystem.', asset('images/25.jpeg')],
                        ['Kilimanjaro', 'Which Kilimanjaro route should you choose?', 'Machame vs Lemosho vs Marangu — a climber\'s honest breakdown of every route.', asset('images/27.jpeg')],
                    ] as [$cat, $title, $blurb, $img])
                        <article class="news-card">
                            <div class="news-img" style="background-image:url('{{ $img }}');"></div>
                            <div class="news-body">
                                <span class="news-cat">{{ $cat }}</span>
                                <h4><a href="{{ route('blog') }}">{{ $title }}</a></h4>
                                <p>{{ $blurb }}</p>
                            </div>
                        </article>
                    @endforeach
                @endforelse
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="section-title" style="margin-bottom: 30px;">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="faq-list">
                @foreach ([
                    ['When is the best time to go on safari?', 'Tanzania is a year-round destination, but June–October offers dry weather and easier wildlife viewing. January–March is calving season in the southern Serengeti. The Great Migration river crossings usually happen July–September.'],
                    ['Do I need a visa to enter Tanzania?', 'Most nationalities can obtain a visa on arrival at Kilimanjaro International Airport (USD 50 for tourist visa, USD 100 for US passport holders). E-visas are available online in advance — we recommend applying at least 3 weeks before departure.'],
                    ['What vaccinations do I need?', 'Yellow fever certificate is required if arriving from a yellow-fever endemic country. Malaria prophylaxis is strongly recommended. Consult your travel doctor 4–6 weeks before departure for personalised advice.'],
                    ['How difficult is Kilimanjaro?', 'Kilimanjaro is a non-technical climb — no ropes or climbing experience required. It is however a serious high-altitude trek and the summit day is genuinely demanding. Our 7–9 day routes give you the best acclimatisation, boosting summit success to 98%.'],
                    ['What\'s included in your prices?', 'All safari and climb packages include: park fees, government taxes, professional guide, transport, accommodation, all meals on trip, and airport transfers. Excluded: international flights, tips, personal items and travel insurance.'],
                    ['Can I customise an itinerary?', 'Absolutely — every itinerary on our site is a starting point. Tell us your preferences, dates and traveller count, and we\'ll craft a custom proposal within 24 hours.'],
                ] as [$q, $a])
                    <details class="faq-item">
                        <summary>{{ $q }}</summary>
                        <div class="faq-body">{{ $a }}</div>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="blog-cats">
        <div class="container">
            <div class="section-title">
                <h2>From Our Blog</h2>
            </div>
            <div class="cats-grid">
                @foreach ([
                    ['Climbing', '66 Articles', asset('images/27.jpeg')],
                    ['Safari', '14 Articles', asset('images/25.jpeg')],
                    ['Zanzibar', '4 Articles', asset('images/28.jpeg')],
                ] as [$name, $count, $img])
                    <a href="{{ route('blog') }}" class="cat-card" style="background-image:url('{{ $img }}');">
                        <div class="cat-overlay">
                            <h3>{{ $name }}</h3>
                            <span>{{ $count }}</span>
                            <span class="cat-btn">Read Articles</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="section-title">
                <h2>Our Partners</h2>
            </div>
            <div class="partners-inner">
                @forelse ($partners as $p)
                    <a href="{{ $p->url ?? '#' }}" class="partner-logo"><img src="{{ asset($p->logo_path) }}" alt="{{ $p->name }}" /></a>
                @empty
                    @foreach ([
                        ['assets/partners/tato-2-e1690348892854.png', 'TATO — Tanzania Association of Tour Operators'],
                        ['assets/partners/atta-e1690300992660.png', 'ATTA'],
                        ['assets/partners/gstc-logo.png', 'GSTC'],
                        ['assets/partners/ttssp-web.png', 'TTSSP'],
                    ] as [$src, $alt])
                        <a href="#" class="partner-logo"><img src="{{ asset($src) }}" alt="{{ $alt }}" /></a>
                    @endforeach
                @endforelse
            </div>
        </div>
    </section>
@endsection

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
                <p>Founded by a Tanzanian family in 2005, Novella Safaris has spent nearly two decades taking travellers deep into the wild heart of East Africa. Our journeys are unrushed, our guides are family, and every itinerary is designed the way we would want to travel ourselves.</p>
                <p>From the sweeping Serengeti plains to the roof of Africa on Kilimanjaro and the turquoise shores of Zanzibar — we are your one team, from your first email to your final sundowner.</p>
                <a href="{{ route('about') }}" class="btn btn-navy">Read Our Story <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="why-portrait">
                <img src="{{ asset('assets/novellapic.jpeg') }}" alt="Novella Safaris Owner" />
                <div class="portrait-badge">
                    <strong>19+</strong>
                    <span>Years serving travellers</span>
                </div>
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
                <p>Wildlife College certified, WFR trained, averaging 12 years in the bush.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-geo-alt"></i></div>
                <h3>Local Knowledge</h3>
                <p>Born and bred in Tanzania — we know every corner, every season, every secret.</p>
            </div>
        </div>
    </section>

    <section class="special-packages">
        <div class="container">
            <div class="section-title">
                <h2>Special Packages</h2>
                <p>Hand-crafted itineraries — book direct, pay nothing extra.</p>
            </div>
            <div class="special-grid">
                @forelse ($specialPackages as $pkg)
                    <article class="special-card">
                        <div class="special-img" style="background-image:url('{{ $pkg->image }}');"></div>
                        <div class="special-body">
                            <h4>{{ $pkg->name }}</h4>
                            <a href="{{ route('special-packages') }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                @empty
                    @foreach ([
                        ['7-Day Great Migration Safari', asset('images/07.jpeg')],
                        ['8-Day Kilimanjaro Lemosho Trek', asset('images/08.jpeg')],
                        ['10-Day Safari & Zanzibar Combo', asset('images/09.jpeg')],
                    ] as [$title, $img])
                        <article class="special-card">
                            <div class="special-img" style="background-image:url('{{ $img }}');"></div>
                            <div class="special-body">
                                <h4>{{ $title }}</h4>
                                <a href="{{ route('special-packages') }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </article>
                    @endforeach
                @endforelse
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
                ['7 Days', 'Machame Route Kilimanjaro Climb', '$1,969', asset('images/27.jpeg'), false],
                ['8 Days', 'Lemosho Route Kilimanjaro Climb', '$2,251', asset('images/15.jpeg'), true],
                ['7 Days', 'Serengeti Migration Safari', '$2,651', asset('images/25.jpeg'), false],
            ] as [$days, $title, $price, $img, $reverse])
                <article class="trip-row{{ $reverse ? ' reverse' : '' }}">
                    @if ($reverse)
                        <div class="trip-image" style="background-image:url('{{ $img }}');"></div>
                    @endif
                    <div class="trip-info">
                        <span class="trip-days">{{ $days }}</span>
                        <h3>{{ $title }}</h3>
                        <div class="trip-meta">
                            <div class="trip-price"><strong>{{ $price }}</strong><span>Per Person</span></div>
                            <div class="trip-availability">
                                <span class="avail-open"><i class="bi bi-check-circle-fill"></i> Open</span>
                                <a href="{{ route('contact') }}" class="btn btn-yellow btn-sm">JOIN THE GROUP</a>
                            </div>
                        </div>
                    </div>
                    @if (! $reverse)
                        <div class="trip-image" style="background-image:url('{{ $img }}');"></div>
                    @endif
                </article>
            @endforeach
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="reviews-head">
                <h2>What Our Clients Say</h2>
                <div class="reviews-badge">
                    <span class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                    <strong>EXCELLENT</strong>
                    <span>Based on 1,087 reviews</span>
                    <img src="{{ asset('images/13.jpeg') }}" alt="TripAdvisor" class="tripadvisor-logo" />
                </div>
            </div>
            <div class="reviews-grid">
                @forelse ($reviews as $r)
                    <article class="review-card">
                        <div class="review-stars">
                            @for ($s = 0; $s < $r->rating; $s++)<i class="bi bi-star-fill"></i>@endfor
                        </div>
                        <h5>{{ $r->name }}</h5>
                        <p>{{ $r->quote }}</p>
                        <div class="review-author">
                            @if ($r->avatar)<img src="{{ $r->avatar }}" alt="" />@endif
                            <div><strong>{{ $r->name }}</strong><span>{{ $r->location }}</span></div>
                        </div>
                    </article>
                @empty
                    @foreach ([
                        ['Sarah W.', 'London, UK', 'Trip of a lifetime', 'From airport pickup to the last sundowner, Novella made us feel like family. Our guide Emmanuel is a living encyclopedia of the bush.', asset('images/03.jpeg')],
                        ['Michael T.', 'Tokyo, Japan', 'Summited Kilimanjaro!', 'The Lemosho crew was extraordinary. Porters, food, safety briefings — every day I felt looked after. We all reached Uhuru Peak.', asset('images/04.jpeg')],
                        ['The Hansens', 'Oslo, Norway', 'Perfect family safari', 'Traveled with our 8 and 11 year olds. Pace was perfect, lodges were kid-friendly. Truly the trip of a lifetime.', asset('images/05.jpeg')],
                        ['Anna K.', 'Berlin, Germany', 'Photography dream', 'Private vehicle, off-road permits, golden hour after golden hour. My best-ever wildlife portfolio came from this trip.', asset('images/06.jpeg')],
                    ] as [$name, $loc, $title, $quote, $avatar])
                        <article class="review-card">
                            <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            <h5>{{ $title }}</h5>
                            <p>{{ $quote }}</p>
                            <div class="review-author">
                                <img src="{{ $avatar }}" alt="" />
                                <div><strong>{{ $name }}</strong><span>{{ $loc }}</span></div>
                            </div>
                        </article>
                    @endforeach
                @endforelse
            </div>
        </div>
    </section>

    <div class="gradient-divider"></div>

    <section class="videos">
        <div class="container">
            <div class="section-title">
                <h2>Inspirational Videos</h2>
            </div>
            <div class="videos-grid">
                @foreach ([
                    asset('images/25.jpeg'),
                    asset('images/29.jpeg'),
                    asset('images/27.jpeg'),
                    asset('images/28.jpeg'),
                ] as $img)
                    <a href="#" class="video-card" style="background-image:url('{{ $img }}');">
                        <i class="bi bi-play-fill"></i>
                    </a>
                @endforeach
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

    <section class="resources">
        <div class="container">
            <div class="section-title">
                <h2>Resources and Information</h2>
            </div>
            <div class="resources-grid">
                <a href="{{ route('resources') }}" class="resource-btn"><i class="bi bi-award"></i> NOVELLA'S AWARDS <i class="bi bi-arrow-right"></i></a>
                <a href="{{ route('resources') }}" class="resource-btn"><i class="bi bi-download"></i> DOWNLOAD BROCHURE <i class="bi bi-arrow-right"></i></a>
                <a href="{{ route('resources') }}" class="resource-btn"><i class="bi bi-question-circle"></i> FAQ &amp; TRAVEL TIPS <i class="bi bi-arrow-right"></i></a>
                <a href="{{ route('resources') }}" class="resource-btn"><i class="bi bi-shield-check"></i> RESPONSIBLE TRAVEL <i class="bi bi-arrow-right"></i></a>
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

@extends('layouts.app', [
    'pageTitle' => 'About Us — Novella Safaris',
    'pageDescription' => 'Meet the family behind Novella Safaris. Two decades of handcrafted Tanzania adventures — rooted locally, trusted globally.',
])

@section('content')
    <section class="page-banner" style="background-image:url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1920&q=80');">
        <div class="container">
            <h1>About Novella</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>About Us</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Our Story</span>
            <h2>Rooted in Tanzania. Loved worldwide.</h2>
            <p>Novella Safaris was founded in 2005 by a Tanzanian family who grew up under the shadow of Kilimanjaro. Nearly two decades later, we've guided over 4,800 travellers through the Serengeti, up Uhuru Peak and along Zanzibar's white shores — every journey handcrafted, every guide part of our extended family.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">
            <div class="split-row">
                <div class="split-media">
                    <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=900&q=80" alt="Serengeti sunset" />
                </div>
                <div class="split-content">
                    <span class="eyebrow">Our Mission</span>
                    <h2>Journeys that give back</h2>
                    <p>We believe travel should benefit the places it touches. Every Novella booking supports fair-wage porter treatment, community classrooms, and Tanzania's national park conservation levies.</p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> KPAP-certified porter welfare</li>
                        <li><i class="bi bi-check-circle-fill"></i> Plastic-free camps &amp; low-impact routing</li>
                        <li><i class="bi bi-check-circle-fill"></i> 5% of profits to Novella Foundation</li>
                        <li><i class="bi bi-check-circle-fill"></i> 100% Tanzanian-owned &amp; operated</li>
                    </ul>
                </div>
            </div>

            <div class="split-row reverse" id="sustainability">
                <div class="split-media">
                    <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?auto=format&fit=crop&w=900&q=80" alt="Community project" />
                </div>
                <div class="split-content">
                    <span class="eyebrow">Sustainability</span>
                    <h2>Novella Foundation</h2>
                    <p>A portion of every booking funds classrooms, clean water and porter welfare in the villages around Kilimanjaro and the Serengeti. Ask us about visiting our projects on your itinerary.</p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> 12 schools supported since 2011</li>
                        <li><i class="bi bi-check-circle-fill"></i> 400+ porters equipped with cold-weather gear</li>
                        <li><i class="bi bi-check-circle-fill"></i> Clean water access for 3,200 people</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-navy">Support the Foundation <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="page-intro" id="team">
        <div class="container">
            <span class="eyebrow">Meet the Team</span>
            <h2>Guides, planners, family</h2>
            <p>Every trip is powered by a small team of Tanzanian trip designers, veteran guides, and the office crew who keep the whole thing humming 24/7.</p>
        </div>
    </section>

    <section class="dest-list" style="padding-top:0;">
        <div class="container">
            <div class="team-grid">
                @foreach ([
                    ['Amani Mwakalinga', 'Founder & Head Guide', 'https://i.pravatar.cc/400?img=68'],
                    ['Neema Kileo', 'Trip Designer', 'https://i.pravatar.cc/400?img=47'],
                    ['Emmanuel Msigwa', 'Senior Safari Guide', 'https://i.pravatar.cc/400?img=12'],
                    ['Grace Massawe', 'Guest Relations', 'https://i.pravatar.cc/400?img=32'],
                ] as [$name, $role, $img])
                    <div class="team-card">
                        <img src="{{ $img }}" alt="" />
                        <div class="team-info"><strong>{{ $name }}</strong><span>{{ $role }}</span></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="inner-cta">
        <div class="container">
            <h2>Ready to plan your journey?</h2>
            <p>Tell us your dates, style and dreams — we'll come back with a tailor-made proposal within 24 hours.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Plan My Trip <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

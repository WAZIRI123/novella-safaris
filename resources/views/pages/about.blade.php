@extends('layouts.app', [
    'pageTitle' => 'About Us — Novella Safaris',
    'pageDescription' => 'Meet the family behind Novella Safaris. Handcrafted Tanzania adventures — rooted locally, trusted globally.',
])

@section('content')
    <section class="page-banner" style="background-image:url('{{ asset('images/13.jpeg') }}');">
        <div class="container">
            <h1>About Novella</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>About Us</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Our Story</span>
            <h2>Rooted in Tanzania. Loved worldwide.</h2>
            <p>Novella Safaris takes travellers deep into the wild heart of East Africa. Our journeys are unrushed, our guides are family, and every itinerary is designed the way we would want to travel ourselves.</p>
            <p>From the sweeping Serengeti plains to the roof of Africa on Kilimanjaro and the turquoise shores of Zanzibar — we are your one team, from your first email to your final sundowner.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">
            <div class="split-row">
                <div class="split-media">
                    <img src="{{ asset('images/01.jpeg') }}" alt="Serengeti sunset" />
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
                    <img src="{{ asset('images/02.jpeg') }}" alt="Community project" />
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

    <section class="inner-cta">
        <div class="container">
            <h2>Ready to plan your journey?</h2>
            <p>Tell us your dates, style and dreams — we'll come back with a tailor-made proposal within 24 hours.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Plan My Trip <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

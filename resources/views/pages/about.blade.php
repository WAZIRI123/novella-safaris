@extends('layouts.app', [
    'pageTitle' => 'About Us — Novella Safaris',
    'pageDescription' => 'Novella Tanzania Safaris and Trekking — locally owned, tailor-made safaris, Kilimanjaro climbs and cultural journeys across Tanzania.',
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
            <h2>Your new story begins here</h2>
            <p>At Novella Tanzania Safaris and Trekking, we believe every journey is a new story waiting to be written. The name Novella represents a new chapter — a fresh adventure and unforgettable moments created through travel.</p>
            <p>We are a locally owned Tanzanian company specializing in tailor-made wildlife safaris, Mount Kilimanjaro trekking, and authentic cultural experiences. Founded by Upendo Mwanga, we create exceptional journeys for our guests while making a positive impact in local communities — supporting young talent and meaningful employment across Tanzania's tourism industry.</p>
            <p>Our team of passionate travel experts, mountain crews, and guides share one commitment: quality service, safety, honesty, and genuine Tanzanian hospitality. Whether you dream of summiting Kilimanjaro, witnessing the Serengeti and Ngorongoro, exploring rich cultures, or relaxing on Zanzibar's beaches — we are here to make your journey seamless and unforgettable.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">
            <div class="split-row">
                <div class="split-media">
                    <img src="{{ asset('assets/novellapic.jpeg') }}" alt="Upendo Mwanga, Founder of Novella Tanzania Safaris and Trekking" />
                </div>
                <div class="split-content">
                    <span class="eyebrow">Our Mission</span>
                    <h2>Authentic journeys, lasting impact</h2>
                    <p>To create exceptional, authentic travel experiences that showcase Tanzania's natural beauty, wildlife, and culture — delivered with safe, personalized, professional service.</p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Tailor-made safaris, treks &amp; cultural experiences</li>
                        <li><i class="bi bi-check-circle-fill"></i> Responsible tourism &amp; community support</li>
                        <li><i class="bi bi-check-circle-fill"></i> Meaningful employment for young people</li>
                        <li><i class="bi bi-check-circle-fill"></i> 100% Tanzanian-owned &amp; operated</li>
                    </ul>
                </div>
            </div>

            <div class="split-row reverse">
                <div class="split-media">
                    <img src="{{ asset('images/01.jpeg') }}" alt="Tanzania safari landscape" />
                </div>
                <div class="split-content">
                    <span class="eyebrow">Our Vision</span>
                    <h2>Trusted worldwide, rooted in Tanzania</h2>
                    <p>To become a trusted, leading Tanzanian tourism company, recognized globally for unforgettable adventures, outstanding guest experiences, and positive social impact through sustainable tourism and community empowerment.</p>
                    <p>We aim to inspire travellers from around the world to discover Tanzania while building opportunities for future generations.</p>
                    <a href="{{ route('contact') }}" class="btn btn-navy">Start Your Journey <i class="bi bi-arrow-right"></i></a>
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

@extends('layouts.app', [
    'pageTitle' => 'Special Packages — Novella Safaris',
    'pageDescription' => 'Honeymoon, family, luxury and combo journeys. Handcrafted multi-destination itineraries across Tanzania.',
    'activeNav' => 'special-packages',
])

@section('content')
    <section class="page-banner" style="background-image:url('{{ asset('images/26.jpeg') }}');">
        <div class="container">
            <h1>Special Packages</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>Special Packages</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Curated Combinations</span>
            <h2>Multi-destination journeys, done right</h2>
            <p>Our most-requested combinations — from the classic safari-and-beach to honeymoons, family journeys and photography expeditions. Every itinerary is customisable.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">
            <div class="dest-cards">
                @forelse ($packages as $p)
                    <article class="dest-card">
                        <div class="dest-image" style="background-image:url('{{ asset($p->image) }}');">
                            @if ($p->duration)<span class="dest-days-tag">{{ $p->duration }}</span>@endif
                        </div>
                        <div class="dest-body">
                            <h3>{{ $p->name }}</h3>
                            <p>{{ $p->description }}</p>
                            <div class="dest-foot">
                                @if ($p->price_from)<div class="dest-price">From <strong>${{ number_format($p->price_from) }}</strong></div>@endif
                                <a href="{{ route('special-packages.show', $p->slug) }}" class="btn btn-outline btn-sm">View Details</a>
                            </div>
                        </div>
                    </article>
                @empty
                    @foreach ([
                        ['Safari & Zanzibar Combo', 'Five days on safari — Serengeti, Ngorongoro, Tarangire — then a flight straight to a Nungwi beach villa.', ['Best seller', 'Beach'], '4,780', '10 Days', asset('images/12.jpeg')],
                        ['Luxury Fly-In Safari', 'Private aircraft between the Serengeti, Ruaha and Nyerere — tented luxury under a canopy of stars.', ['Luxury', 'Private aircraft'], '8,450', '12 Days', asset('images/29.jpeg')],
                        ['Family Adventure Safari', 'Slower pace, kid-friendly lodges, junior ranger badges and Maasai visits designed for families.', ['Kids 6+', 'Family'], '2,340', '8 Days', asset('images/11.jpeg')],
                        ['Honeymoon Journey', 'Private plunge-pool suites, champagne dinners under the stars, and a barefoot beach finale on Mnemba.', ['Romance', 'Private'], '6,890', '11 Days', asset('images/24.jpeg')],
                        ['Pro Photography Expedition', 'Private vehicles, beanbags, off-road permits, golden-hour drives — led by a wildlife photographer.', ['Max 4', 'Off-road'], '7,890', '14 Days', asset('images/25.jpeg')],
                        ['Kilimanjaro + Safari + Zanzibar', 'The full Tanzania experience — summit Uhuru, then safari, then unwind on the beach.', ['Ultimate', '3-in-1'], '5,890', '15 Days', asset('images/27.jpeg')],
                    ] as [$name, $desc, $features, $price, $duration, $img])
                        <article class="dest-card">
                            <div class="dest-image" style="background-image:url('{{ $img }}');">
                                <span class="dest-days-tag">{{ $duration }}</span>
                            </div>
                            <div class="dest-body">
                                <h3>{{ $name }}</h3>
                                <p>{{ $desc }}</p>
                                <div class="dest-features">
                                    @foreach ($features as $f)<span>{{ $f }}</span>@endforeach
                                </div>
                                <div class="dest-foot">
                                    <div class="dest-price">From <strong>${{ $price }}</strong></div>
                                    <a href="{{ route('contact') }}" class="btn btn-outline btn-sm">Enquire</a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endforelse
            </div>
        </div>
    </section>

    <section class="inner-cta">
        <div class="container">
            <h2>Nothing here fits? We custom-build every trip.</h2>
            <p>Every itinerary above is a starting point — tell us your dream and we'll design it around you.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Custom Design My Trip <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

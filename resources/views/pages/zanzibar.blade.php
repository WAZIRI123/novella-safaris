@extends('layouts.app', [
    'pageTitle' => 'Zanzibar Beach Escapes — Novella Safaris',
    'pageDescription' => 'Turquoise water, whitewashed villas, spice tours and dhow cruises. The perfect end to your Tanzania journey.',
    'activeNav' => 'zanzibar',
])

@section('content')
    <section class="page-banner" style="background-image:url('{{ asset('images/28.jpeg') }}');">
        <div class="container">
            <h1>Zanzibar</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>Zanzibar</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Spice Island</span>
            <h2>Trade dust for turquoise</h2>
            <p>After the drama of the Serengeti or the summit of Kilimanjaro, sink into whitewashed beach villas, sail traditional dhows at sunset, and lose an afternoon in the labyrinth of Stone Town. Zanzibar is the perfect landing pad for the second half of your journey.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">

            <div class="split-row">
                <div class="split-media">
                    <img src="{{ asset('images/10.jpeg') }}" alt="Stone Town" />
                </div>
                <div class="split-content">
                    <span class="eyebrow">History</span>
                    <h2>Stone Town</h2>
                    <p>Wander UNESCO-listed alleys of coral stone, spice markets, ornate wooden doors and the ghost of the Sultan's palace.</p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Guided walking tours with a local historian</li>
                        <li><i class="bi bi-check-circle-fill"></i> Freddie Mercury &amp; Livingstone landmarks</li>
                        <li><i class="bi bi-check-circle-fill"></i> Sunset at Forodhani food gardens</li>
                    </ul>
                </div>
            </div>

            <div class="split-row reverse">
                <div class="split-media">
                    <img src="{{ asset('images/11.jpeg') }}" alt="Nungwi beach" />
                </div>
                <div class="split-content">
                    <span class="eyebrow">Beaches</span>
                    <h2>Nungwi &amp; Kendwa</h2>
                    <p>The northern tip of the island — powdery white sand, warm shallow water and Zanzibar's best sunsets. Home to the finest beach hotels on the island.</p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Boutique &amp; luxury beachfront hotels</li>
                        <li><i class="bi bi-check-circle-fill"></i> Snorkelling at Mnemba Atoll</li>
                        <li><i class="bi bi-check-circle-fill"></i> Private dhow sunset cruises</li>
                    </ul>
                </div>
            </div>

            <div class="split-row">
                <div class="split-media">
                    <img src="{{ asset('images/12.jpeg') }}" alt="Spice tour" />
                </div>
                <div class="split-content">
                    <span class="eyebrow">Excursions</span>
                    <h2>Spice tours &amp; sea life</h2>
                    <p>Zanzibar earned its name from centuries of spice trade — clove, nutmeg, cardamom, vanilla. Combine a plantation visit with a swim at the Blue Lagoon.</p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Half-day spice plantation walk</li>
                        <li><i class="bi bi-check-circle-fill"></i> Prison Island &amp; giant tortoises</li>
                        <li><i class="bi bi-check-circle-fill"></i> Safari Blue snorkel &amp; seafood cruise</li>
                    </ul>
                </div>
            </div>

            @if ($packages->isNotEmpty())
                <div class="dest-cards" style="margin-top:40px;">
                    @foreach ($packages as $p)
                        <article class="dest-card">
                            <div class="dest-image" style="background-image:url('{{ asset($p->image) }}');">
                                @if ($p->days)<span class="dest-days-tag">{{ $p->days }} Days</span>@endif
                            </div>
                            <div class="dest-body">
                                <h3>{{ $p->name }}</h3>
                                <p>{{ $p->description }}</p>
                                <div class="dest-foot">
                                    @if ($p->price)<div class="dest-price">From <strong>${{ number_format($p->price) }}</strong></div>@endif
                                    <a href="{{ route('zanzibar.show', $p->slug) }}" class="btn btn-outline btn-sm">View Details</a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif

        </div>
    </section>

    <section class="inner-cta">
        <div class="container">
            <h2>Add Zanzibar to your safari</h2>
            <p>Most travellers pair 5–7 days safari with 4–5 days on the beach — we plan both, and the flight between them.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Plan My Escape <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

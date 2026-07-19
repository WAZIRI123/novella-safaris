@extends('layouts.app', [
    'pageTitle' => 'Kilimanjaro Trekking — Novella Safaris',
    'pageDescription' => 'Six Kilimanjaro routes, KPAP-certified porter treatment, 98% summit success. Machame, Lemosho, Marangu, Rongai and more.',
    'activeNav' => 'trekking',
])

@section('content')
    <section class="page-banner" style="background-image:url('https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=1920&q=80');">
        <div class="container">
            <h1>Kilimanjaro Trekking</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>Trekking</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Roof of Africa</span>
            <h2>Stand on the summit of Kilimanjaro</h2>
            <p>Africa's tallest peak, 5,895m of raw magnificence. Six proven routes, KPAP-certified porter care, oxygen at every camp and an unhurried 7–9 day acclimatisation schedule give our climbers a 98% summit success rate.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">
            <div class="dest-cards">
                @forelse ($routes as $r)
                    <article class="dest-card" id="{{ $r->slug }}">
                        <div class="dest-image" style="background-image:url('{{ $r->image }}');">
                            @if ($r->days)<span class="dest-days-tag">{{ $r->days }} Days</span>@endif
                        </div>
                        <div class="dest-body">
                            <h3>{{ $r->name }}</h3>
                            <p>{{ $r->description }}</p>
                            @if (! empty($r->features))
                                <div class="dest-features">
                                    @foreach ($r->features as $f)<span>{{ $f }}</span>@endforeach
                                </div>
                            @endif
                            <div class="dest-foot">
                                @if ($r->price)<div class="dest-price">From <strong>${{ number_format($r->price) }}</strong></div>@endif
                                <a href="{{ route('trekking.show', $r->slug) }}" class="btn btn-outline btn-sm">View Details</a>
                            </div>
                        </div>
                    </article>
                @empty
                    @foreach ([
                        ['machame', 'Machame Route', 'The Whiskey Route — steeper, more scenic, and the most popular route on the mountain.', ['Moderate', 'Best success', 'Scenic'], '1,969', '7', 'https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=800&q=80'],
                        ['lemosho', 'Lemosho Route', 'Approach from the west — remote, quiet, and the best acclimatisation profile of any route.', ['Best acclimatisation', 'Remote'], '2,251', '8', 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=800&q=80'],
                        ['marangu', 'Marangu Route', 'The Coca-Cola Route — the only route with mountain huts. Gentler, and comfortable for first-timers.', ['Huts', 'Beginner-friendly'], '1,556', '6', 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=800&q=80'],
                        ['rongai', 'Rongai Route', 'The only northern approach. Drier, quieter, and the go-to route during the rainy season.', ['Quiet', 'Rainy-season option'], '1,870', '7', 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=800&q=80'],
                        ['northern-circuit', 'Northern Circuit', 'The longest route on the mountain — highest summit success, and stunning 360° panoramas.', ['Longest route', 'Highest success'], '2,590', '9', 'https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?auto=format&fit=crop&w=800&q=80'],
                        ['meru', 'Mount Meru Trek', 'Kilimanjaro\'s little sister at 4,566m — a perfect warm-up climb, wildlife-filled and dramatic.', ['Warm-up climb', 'Wildlife'], '1,120', '4', 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=800&q=80'],
                    ] as [$id, $name, $desc, $features, $price, $days, $img])
                        <article class="dest-card" id="{{ $id }}">
                            <div class="dest-image" style="background-image:url('{{ $img }}');">
                                <span class="dest-days-tag">{{ $days }} Days</span>
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

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Climb With Confidence</span>
            <h2>Why our climbers summit</h2>
            <p>A 98% summit success rate isn't luck — it's the result of two decades of refining our approach.</p>
        </div>
    </section>

    <section class="dest-list" style="padding-top:0;">
        <div class="container">
            <div class="resource-tiles">
                <div class="resource-tile">
                    <i class="bi bi-shield-check"></i>
                    <h3>Oxygen at every camp</h3>
                    <p>Portable oxygen and pulse oximeters carried on every climb. Daily health checks by trained guides.</p>
                </div>
                <div class="resource-tile">
                    <i class="bi bi-people-fill"></i>
                    <h3>KPAP-certified porters</h3>
                    <p>Fair wages, weight limits, hot meals and cold-weather gear. Verified by the Kilimanjaro Porters Assistance Project.</p>
                </div>
                <div class="resource-tile">
                    <i class="bi bi-cup-hot-fill"></i>
                    <h3>Mountain-grade meals</h3>
                    <p>Fresh cooked meals every day — from ginger tea at altitude to full multi-course dinners. Dietary needs catered to.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="inner-cta">
        <div class="container">
            <h2>Ready to summit Kilimanjaro?</h2>
            <p>Tell us your dates and preferred route — we'll craft a proposal within 24 hours.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Plan My Climb <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

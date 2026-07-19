@extends('layouts.app', [
    'pageTitle' => 'East Africa Journeys — Novella Safaris',
    'pageDescription' => 'Extend your journey beyond Tanzania — Kenya, Uganda, Rwanda gorilla trekking and more.',
    'activeNav' => 'other-country',
])

@section('content')
    <section class="page-banner" style="background-image:url('https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1920&q=80');">
        <div class="container">
            <h1>Beyond Tanzania</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>Other Country</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">East Africa</span>
            <h2>Extend your journey across the border</h2>
            <p>Tanzania is our home — but East Africa is our neighbourhood. Combine your safari with gorilla trekking in Rwanda, a Maasai Mara migration crossing in Kenya, or the source of the Nile in Uganda.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">
            <div class="dest-cards">
                @forelse ($trips as $t)
                    <article class="dest-card">
                        <div class="dest-image" style="background-image:url('{{ $t->image }}');">
                            <span class="dest-days-tag">{{ $t->country }}</span>
                        </div>
                        <div class="dest-body">
                            <h3>{{ $t->name }}</h3>
                            <p>{{ $t->description }}</p>
                            <div class="dest-foot">
                                @if ($t->price_from)<div class="dest-price">From <strong>${{ number_format($t->price_from) }}</strong></div>@endif
                                <a href="{{ route('contact') }}" class="btn btn-outline btn-sm">Enquire</a>
                            </div>
                        </div>
                    </article>
                @empty
                    @foreach ([
                        ['Kenya', 'Kenya — Maasai Mara', 'The northern extension of the Serengeti — Mara River crossings, big cat drama and open plains.', ['Migration', 'Big cats', 'Balloon safari'], '3,290', 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=800&q=80'],
                        ['Rwanda', 'Rwanda — Gorilla Trekking', 'Come face-to-face with mountain gorillas in Volcanoes National Park — a once-in-a-lifetime encounter.', ['Mountain gorillas', 'Golden monkeys'], '4,180', 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80'],
                        ['Uganda', 'Uganda — Bwindi & the Nile', 'Half of the world\'s remaining mountain gorillas live here. Combine with chimp trekking in Kibale and the source of the Nile.', ['Gorillas', 'Chimps', 'Nile'], '3,890', 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=800&q=80'],
                        ['Kenya', 'Amboseli & Tsavo', 'Elephants against the backdrop of Kilimanjaro — Amboseli is the classic African postcard.', ['Elephants', 'Kilimanjaro views'], '2,180', 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=800&q=80'],
                        ['Uganda', 'Queen Elizabeth NP', 'Tree-climbing lions in the Ishasha sector, boat cruises on the Kazinga Channel, and volcanic craters.', ['Tree lions', 'Boat safari'], '1,890', 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=800&q=80'],
                        ['Multi-country', '3-Country Combo', 'Tanzania safari + Rwanda gorillas + Zanzibar beach — the ultimate East African journey.', ['Ultimate', 'Custom'], '8,290', 'https://images.unsplash.com/photo-1568393691622-c7ba131d63b4?auto=format&fit=crop&w=800&q=80'],
                    ] as [$country, $name, $desc, $features, $price, $img])
                        <article class="dest-card">
                            <div class="dest-image" style="background-image:url('{{ $img }}');">
                                <span class="dest-days-tag">{{ $country }}</span>
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
            <h2>Cross-border journeys, seamlessly connected</h2>
            <p>We handle all internal flights, border transfers and permits — you just show up and enjoy.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Plan My Multi-Country Trip <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

@extends('layouts.app', [
    'pageTitle' => 'Day Trips from Arusha — Novella Safaris',
    'pageDescription' => 'Ngorongoro, Manyara, Materuni Waterfalls, coffee tours and cultural days — full-day adventures from Arusha & Moshi.',
    'activeNav' => 'day-trips',
])

@section('content')
    <section class="page-banner" style="background-image:url('{{ asset('images/22.jpeg') }}');">
        <div class="container">
            <h1>Day Trips</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>Day Trips</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Full-Day Adventures</span>
            <h2>Short on time? Big on experiences.</h2>
            <p>Whether you're in Tanzania for a week or a weekend, our full-day trips out of Arusha and Moshi pack a lifetime into a single day. Private vehicle, guide, park fees, lunch — all included.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">
            <div class="dest-cards">
                @forelse ($dayTrips as $t)
                    <article class="dest-card">
                        <div class="dest-image" style="background-image:url('{{ $t->image }}');">
                            @if ($t->duration)<span class="dest-days-tag">{{ $t->duration }}</span>@endif
                        </div>
                        <div class="dest-body">
                            <h3>{{ $t->name }}</h3>
                            <p>{{ $t->description }}</p>
                            @if (! empty($t->features))
                                <div class="dest-features">
                                    @foreach ($t->features as $f)<span>{{ $f }}</span>@endforeach
                                </div>
                            @endif
                            <div class="dest-foot">
                                @if ($t->price)<div class="dest-price">From <strong>${{ number_format($t->price) }}</strong></div>@endif
                                <a href="{{ route('day-trips.show', $t->slug) }}" class="btn btn-outline btn-sm">View Details</a>
                            </div>
                        </div>
                    </article>
                @empty
                    @foreach ([
                        ['Ngorongoro Crater Day Trip', 'Descend into the world\'s largest intact caldera for a full-day game drive — Big 5 possible in a single day.', ['Big 5', 'Guided'], '420', 'Full day', asset('images/22.jpeg')],
                        ['Lake Manyara Day Trip', 'Tree-climbing lions, hippo pools, flocks of pink flamingos and a groundwater forest.', ['Tree lions', 'Birds'], '280', 'Full day', asset('images/28.jpeg')],
                        ['Tarangire Day Trip', 'Elephants under the baobabs — one of Africa\'s most photogenic elephant destinations.', ['Elephants', 'Baobabs'], '260', 'Full day', asset('images/29.jpeg')],
                        ['Materuni Waterfalls & Coffee Tour', 'Hike through banana plantations to a hidden waterfall, then roast your own coffee with a Chagga family.', ['Coffee', 'Waterfall'], '90', 'Half day', asset('images/24.jpeg')],
                        ['Maasai Village Cultural Day', 'Learn ceremonial dance, jump with the warriors, share a meal — an unstaged cultural exchange.', ['Culture', 'Community'], '140', 'Full day', asset('images/25.jpeg')],
                        ['Arusha National Park', 'Overlooked gem right on Arusha\'s doorstep — giraffe, buffalo, colobus monkeys and canoe safaris.', ['Canoe safari', 'Giraffe'], '180', 'Half day', asset('images/15.jpeg')],
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
            <h2>Add a day trip to your itinerary</h2>
            <p>Arriving early or leaving late? Fill that extra day with an adventure.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Book a Day Trip <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

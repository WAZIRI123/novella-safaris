@extends('layouts.app', [
    'pageTitle' => 'Tanzania Safaris — Novella Safaris',
    'pageDescription' => 'Serengeti, Ngorongoro, Tarangire and beyond. Handcrafted Tanzania safari experiences from 4 to 14 days.',
    'activeNav' => 'safari',
])

@section('content')
    <section class="page-banner" style="background-image:url('{{ asset('images/25.jpeg') }}');">
        <div class="container">
            <h1>Tanzania Safaris</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>Safari</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Featured Destinations</span>
            <h2>Where the wild writes your story</h2>
            <p>Tanzania is home to a third of Africa's remaining big cats, the largest mammal migration on earth, and the world's largest intact caldera. Every one of our safaris is a private journey — no bus tours, no strangers on your vehicle.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">
            <div class="dest-cards">
                @forelse ($safaris as $s)
                    <article class="dest-card" id="{{ $s->slug }}">
                        <div class="dest-image" style="background-image:url('{{ $s->image }}');">
                            @if ($s->badge)<span class="dest-days-tag">{{ $s->badge }}</span>@endif
                        </div>
                        <div class="dest-body">
                            <h3>{{ $s->name }}</h3>
                            <p>{{ $s->description }}</p>
                            @if (! empty($s->features))
                                <div class="dest-features">
                                    @foreach ($s->features as $f)<span>{{ $f }}</span>@endforeach
                                </div>
                            @endif
                            <div class="dest-foot">
                                @if ($s->price_from)<div class="dest-price">From <strong>${{ number_format($s->price_from) }}</strong></div>@endif
                                <a href="{{ route('safari.show', $s->slug) }}" class="btn btn-outline btn-sm">View Details</a>
                            </div>
                        </div>
                    </article>
                @empty
                    @foreach ([
                        ['serengeti', 'Serengeti National Park', 'Home to the Great Migration and one of the highest concentrations of lion, leopard and cheetah anywhere on earth.', ['Big Cats', 'Migration', 'Balloon safaris'], '2,890', 'Best seller', asset('images/25.jpeg')],
                        ['ngorongoro', 'Ngorongoro Crater', 'The world\'s largest intact caldera — an unbroken ecosystem home to black rhino, lion prides and 30,000 animals.', ['Big 5', 'UNESCO', 'Day trip'], '1,950', 'UNESCO', asset('images/22.jpeg')],
                        ['tarangire', 'Tarangire National Park', 'Ancient baobabs, epic herds of elephant, and the least-crowded of Tanzania\'s northern circuit parks.', ['Elephants', 'Baobabs', 'Quiet'], '1,420', 'Elephants', asset('images/29.jpeg')],
                        ['manyara', 'Lake Manyara', 'Groundwater forest, pink flamingos on the lake, and famous tree-climbing lions.', ['Tree lions', 'Birds', 'Half-day'], '980', 'Flamingos', asset('images/28.jpeg')],
                        ['ruaha', 'Ruaha National Park', 'Tanzania\'s largest park — remote southern wilderness with wild dog, greater kudu and huge lion prides.', ['Fly-in only', 'Wild dogs'], '4,180', 'Remote', asset('images/23.jpeg')],
                        ['nyerere', 'Nyerere / Selous', 'Africa\'s largest game reserve — boat safaris on the Rufiji, walking safaris and no crowds.', ['Boat safaris', 'Walking'], '3,650', 'Southern', asset('images/24.jpeg')],
                    ] as [$id, $name, $desc, $features, $price, $badge, $img])
                        <article class="dest-card" id="{{ $id }}">
                            <div class="dest-image" style="background-image:url('{{ $img }}');">
                                <span class="dest-days-tag">{{ $badge }}</span>
                            </div>
                            <div class="dest-body">
                                <h3>{{ $name }}</h3>
                                <p>{{ $desc }}</p>
                                <div class="dest-features">
                                    @foreach ($features as $f)<span>{{ $f }}</span>@endforeach
                                </div>
                                <div class="dest-foot">
                                    <div class="dest-price">From <strong>${{ $price }}</strong></div>
                                    <a href="{{ route('safari.show', $s->slug) }}" class="btn btn-outline btn-sm">View Details</a>
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
            <h2>Design your dream safari</h2>
            <p>Big Five, migration, honeymoon, family, photography — tell us your style and we'll build it around you.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Plan My Safari <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

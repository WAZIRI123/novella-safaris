@extends('layouts.app', [
    'pageTitle' => 'Tanzania Safaris — Novella Safaris',
    'pageDescription' => 'Serengeti, Ngorongoro, Tarangire and beyond. Handcrafted Tanzania safari experiences from 4 to 14 days.',
    'activeNav' => 'safari',
])

@section('content')
    <section class="page-banner" style="background-image:url('{{ asset('images/safaris/IMG-1402-1780110475334-118582944.jpg') }}');">
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
                @foreach ($safaris as $s)
                    <article class="dest-card" id="{{ $s->slug }}">
                        <div class="dest-image" style="background-image:url('{{ asset($s->image) }}');">
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
                @endforeach
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

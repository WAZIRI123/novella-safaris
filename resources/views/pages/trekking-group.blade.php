@extends('layouts.app', [
    'pageTitle' => ($base->name ?? 'Trekking') . ' — Novella Safaris',
    'pageDescription' => 'Available variations and itineraries for ' . ($base->name ?? 'this route'),
    'activeNav' => 'trekking',
])

@section('content')
    <section class="page-banner" style="background-image:url('{{ asset($base->image ?? 'images/27.jpeg') }}');">
        <div class="container">
            <h1>{{ $base->name }}</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <a href="{{ route('trekking') }}">Trekking</a> <i class="bi bi-chevron-right"></i> <span>{{ $base->name }}</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <h2>Available options for {{ $base->name }}</h2>
            <p>Choose a variation below to view full details and itinerary.</p>
        </div>
    </section>

    <section class="dest-list">
        <div class="container">
            <div class="dest-cards">
                @foreach ($routes as $r)
                    <article class="dest-card" id="{{ $r->slug }}">
                        <div class="dest-image" style="background-image:url('{{ asset($r->image) }}');">
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
                @endforeach
            </div>
        </div>
    </section>

@endsection

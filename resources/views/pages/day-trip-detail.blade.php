@extends('layouts.app', [
    'pageTitle' => $package->name . ' — Novella Safaris',
    'pageDescription' => \Illuminate\Support\Str::limit(strip_tags($package->description), 155),
    'activeNav' => 'day-trips',
])

@section('content')
    @include('partials.package-detail', [
        'package' => $package,
        'typeLabel' => 'Day Trips',
        'listRoute' => 'day-trips',
        'typeBanner' => 'https://images.unsplash.com/photo-1549366021-9f761d040a94?auto=format&fit=crop&w=1920&q=80',
        'destination' => 'Tanzania',
        'relatedTours' => $relatedTours,
    ])
@endsection

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
        'typeBanner' => asset('images/22.jpeg'),
        'destination' => 'Tanzania',
        'relatedTours' => $relatedTours,
    ])
@endsection

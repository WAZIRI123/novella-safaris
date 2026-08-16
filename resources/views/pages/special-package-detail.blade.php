@extends('layouts.app', [
    'pageTitle' => $package->name . ' — Novella Safaris',
    'pageDescription' => \Illuminate\Support\Str::limit(strip_tags($package->description), 155),
    'activeNav' => 'special-packages',
])

@section('content')
    @include('partials.package-detail', [
        'package' => $package,
        'typeLabel' => 'Special Packages',
        'listRoute' => 'special-packages',
        'typeBanner' => asset('images/26.jpeg'),
        'destination' => 'Tanzania',
        'relatedTours' => $relatedTours,
    ])
@endsection

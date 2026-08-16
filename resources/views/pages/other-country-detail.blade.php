@extends('layouts.app', [
    'pageTitle' => $package->name . ' — Novella Safaris',
    'pageDescription' => \Illuminate\Support\Str::limit(strip_tags($package->description), 155),
    'activeNav' => 'other-country',
])

@section('content')
    @include('partials.package-detail', [
        'package' => $package,
        'typeLabel' => 'East Africa',
        'listRoute' => 'other-country',
        'typeBanner' => asset('images/23.jpeg'),
        'destination' => $package->country ?? 'East Africa',
        'relatedTours' => $relatedTours,
    ])
@endsection

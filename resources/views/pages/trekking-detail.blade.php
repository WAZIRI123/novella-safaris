@extends('layouts.app', [
    'pageTitle' => $package->name . ' — Novella Safaris',
    'pageDescription' => \Illuminate\Support\Str::limit(strip_tags($package->description), 155),
    'activeNav' => 'trekking',
])

@section('content')
    @include('partials.package-detail', [
        'package' => $package,
        'typeLabel' => 'Trekking',
        'listRoute' => 'trekking',
        'typeBanner' => asset('images/27.jpeg'),
        'relatedTours' => $relatedTours,
    ])
@endsection

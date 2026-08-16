@extends('layouts.app', [
    'pageTitle' => $package->name . ' — Novella Safaris',
    'pageDescription' => \Illuminate\Support\Str::limit(strip_tags($package->description), 155),
    'activeNav' => 'safari',
])

@section('content')
    @include('partials.package-detail', [
        'package' => $package,
        'typeLabel' => 'Safari',
        'listRoute' => 'safari',
        'typeBanner' => asset('images/25.jpeg'),
        'relatedTours' => $relatedTours,
    ])
@endsection

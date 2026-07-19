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
        'typeBanner' => 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1920&q=80',
        'destination' => $package->country ?? 'East Africa',
        'relatedTours' => $relatedTours,
    ])
@endsection

@extends('layouts.app', [
    'pageTitle' => $package->name . ' — Novella Safaris',
    'pageDescription' => \Illuminate\Support\Str::limit(strip_tags($package->description), 155),
    'activeNav' => 'zanzibar',
])

@section('content')
    @include('partials.package-detail', [
        'package' => $package,
        'typeLabel' => 'Zanzibar',
        'listRoute' => 'zanzibar',
        'typeBanner' => asset('images/28.jpeg'),
        'relatedTours' => $relatedTours,
    ])
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $pageTitle ?? 'Novella Safaris — Premier Tour Operator for the Best Safari in Tanzania' }}</title>
    <meta name="description" content="{{ $pageDescription ?? 'Novella Safaris — the number one tour operator in Tanzania. Handcrafted safaris, Kilimanjaro treks and Zanzibar escapes.' }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    @include('partials.header', ['activeNav' => $activeNav ?? ''])

    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

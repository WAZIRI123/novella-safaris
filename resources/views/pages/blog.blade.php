@extends('layouts.app', [
    'pageTitle' => 'Journal & Blog — Novella Safaris',
    'pageDescription' => 'Stories from the bush, Kilimanjaro summit reports, Zanzibar guides and safari tips from the Novella team.',
    'activeNav' => 'blog',
])

@section('content')
    <section class="page-banner" style="background-image:url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1920&q=80');">
        <div class="container">
            <h1>Journal</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>Blog</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Stories &amp; Guides</span>
            <h2>From the bush &amp; beyond</h2>
            <p>Trip reports, planning guides and the occasional wildlife photo we couldn't resist sharing — everything you need to know before you go.</p>
        </div>
    </section>

    <section class="blog-list">
        <div class="container">
            <div class="blog-list-grid">
                @forelse ($posts as $post)
                    <article class="blog-item">
                        <div class="blog-item-img" style="background-image:url('{{ $post->image }}');">
                            @if ($post->category)<span class="blog-item-cat">{{ $post->category }}</span>@endif
                        </div>
                        <div class="blog-item-body">
                            <h3><a href="#">{{ $post->title }}</a></h3>
                            <p>{{ $post->excerpt }}</p>
                            <div class="blog-item-meta">
                                <span><i class="bi bi-calendar3"></i> {{ optional($post->published_at)->format('j M Y') }}</span>
                            </div>
                        </div>
                    </article>
                @empty
                    @foreach ([
                        ['Safari', 'When is the best time to see the Great Migration?', 'A month-by-month guide to following the wildebeest across the Serengeti-Mara ecosystem — river crossings, calving season, and the shoulder-season sweet spots.', '12 May 2026', '6 min read', 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=800&q=80'],
                        ['Kilimanjaro', 'Which Kilimanjaro route should you choose?', 'Machame vs Lemosho vs Marangu vs Rongai — a climber\'s honest breakdown of every route on the mountain.', '3 Apr 2026', '9 min read', 'https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=800&q=80'],
                        ['Zanzibar', 'A local\'s guide to Stone Town in 48 hours', 'Where to eat, where to wander, and the little-known corners the guidebooks miss.', '18 Mar 2026', '5 min read', 'https://images.unsplash.com/photo-1589197331516-4d84b72ebde3?auto=format&fit=crop&w=800&q=80'],
                        ['Safari', 'What to pack for a Tanzania safari', 'Layers, muted colours, camera gear — a packing list refined over 4,800 traveller trips.', '2 Mar 2026', '4 min read', 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=800&q=80'],
                        ['Kilimanjaro', 'Altitude sickness — what every climber needs to know', 'Symptoms, prevention, and how our KPAP-certified guides keep 98% of our climbers on the mountain.', '14 Feb 2026', '7 min read', 'https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?auto=format&fit=crop&w=800&q=80'],
                        ['Culture', 'Meeting the Maasai — respectfully', 'How to visit a Maasai village without falling into the tourist-trap trap. A guide to authentic cultural exchange.', '22 Jan 2026', '6 min read', 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=800&q=80'],
                    ] as [$cat, $title, $blurb, $date, $read, $img])
                        <article class="blog-item">
                            <div class="blog-item-img" style="background-image:url('{{ $img }}');">
                                <span class="blog-item-cat">{{ $cat }}</span>
                            </div>
                            <div class="blog-item-body">
                                <h3><a href="#">{{ $title }}</a></h3>
                                <p>{{ $blurb }}</p>
                                <div class="blog-item-meta"><span><i class="bi bi-calendar3"></i> {{ $date }}</span><span>{{ $read }}</span></div>
                            </div>
                        </article>
                    @endforeach
                @endforelse
            </div>
        </div>
    </section>

    <section class="inner-cta">
        <div class="container">
            <h2>Have a question? Talk to a human.</h2>
            <p>Blogs are great — but nothing beats a real chat with a Tanzania-based expert.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Contact Us <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

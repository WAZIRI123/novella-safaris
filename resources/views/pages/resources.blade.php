@extends('layouts.app', [
    'pageTitle' => 'Resources — Novella Safaris',
    'pageDescription' => 'Downloadable brochures, packing lists, FAQs, visa guides and pre-departure info for your Tanzania adventure.',
])

@section('content')
    <section class="page-banner" style="background-image:url('{{ asset('images/24.jpeg') }}');">
        <div class="container">
            <h1>Resources</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>Resources</span></div>
        </div>
    </section>

    <section class="page-intro">
        <div class="container">
            <span class="eyebrow">Plan With Confidence</span>
            <h2>Everything you need before you fly</h2>
            <p>Downloadable guides, packing lists and FAQs — refined from 4,800+ traveller trips over two decades.</p>
        </div>
    </section>

    <section class="dest-list" style="padding-top:20px;">
        <div class="container">
            <div class="resource-tiles">
                @forelse ($items as $r)
                    <div class="resource-tile">
                        <i class="{{ $r->icon ?? 'bi bi-file-earmark-pdf-fill' }}"></i>
                        <h3>{{ $r->title }}</h3>
                        <p>{{ $r->description }}</p>
                        @if ($r->file_path || $r->external_url)
                            <a href="{{ $r->file_path ? asset('storage/'.$r->file_path) : $r->external_url }}">Read / Download <i class="bi bi-arrow-right"></i></a>
                        @endif
                    </div>
                @empty
                    @foreach ([
                        ['bi bi-file-earmark-pdf-fill', 'Kilimanjaro Brochure', 'All six routes, day-by-day itineraries, gear list and pricing. 24-page PDF.', 'Download PDF'],
                        ['bi bi-file-earmark-pdf-fill', 'Safari Brochure', 'Featured itineraries, park guides, best-time-to-visit calendar. 32-page PDF.', 'Download PDF'],
                        ['bi bi-luggage-fill', 'Packing Checklist', 'What to bring for safari, climbing and Zanzibar — printable one-pager.', 'Download PDF'],
                        ['bi bi-passport-fill', 'Visa & Entry Guide', 'Visa-on-arrival, e-visa, vaccinations and border rules for Tanzania.', 'Read Guide'],
                        ['bi bi-calendar3-week', 'When to Go', 'Month-by-month weather, migration position and best parks calendar.', 'Read Guide'],
                        ['bi bi-bandaid-fill', 'Health & Safety', 'Altitude sickness, malaria prophylaxis, travel insurance recommendations.', 'Read Guide'],
                    ] as [$icon, $title, $desc, $cta])
                        <div class="resource-tile">
                            <i class="{{ $icon }}"></i>
                            <h3>{{ $title }}</h3>
                            <p>{{ $desc }}</p>
                            <a href="#">{{ $cta }} <i class="bi bi-arrow-right"></i></a>
                        </div>
                    @endforeach
                @endforelse
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="section-title" style="margin-bottom: 30px;">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="faq-list">
                @foreach ([
                    ['When is the best time to go on safari?', 'Tanzania is a year-round destination, but June–October offers dry weather and easier wildlife viewing. January–March is calving season in the southern Serengeti. The Great Migration river crossings usually happen July–September.'],
                    ['Do I need a visa to enter Tanzania?', 'Most nationalities can obtain a visa on arrival at Kilimanjaro International Airport (USD 50 for tourist visa, USD 100 for US passport holders). E-visas are available online in advance — we recommend applying at least 3 weeks before departure.'],
                    ['What vaccinations do I need?', 'Yellow fever certificate is required if arriving from a yellow-fever endemic country. Malaria prophylaxis is strongly recommended. Consult your travel doctor 4–6 weeks before departure for personalised advice.'],
                    ['How difficult is Kilimanjaro?', 'Kilimanjaro is a non-technical climb — no ropes or climbing experience required. It is however a serious high-altitude trek and the summit day is genuinely demanding. Our 7–9 day routes give you the best acclimatisation, boosting summit success to 98%.'],
                    ['What\'s included in your prices?', 'All safari and climb packages include: park fees, government taxes, professional guide, transport, accommodation, all meals on trip, and airport transfers. Excluded: international flights, tips, personal items and travel insurance.'],
                    ['Can I customise an itinerary?', 'Absolutely — every itinerary on our site is a starting point. Tell us your preferences, dates and traveller count, and we\'ll craft a custom proposal within 24 hours.'],
                ] as [$q, $a])
                    <details class="faq-item">
                        <summary>{{ $q }}</summary>
                        <div class="faq-body">{{ $a }}</div>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="inner-cta">
        <div class="container">
            <h2>Still have questions?</h2>
            <p>Our Tanzania-based team is happy to jump on a call — no obligation.</p>
            <a href="{{ route('contact') }}" class="btn btn-yellow btn-lg">Contact Us <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
@endsection

{{--
    Shared detail template for Safari, TrekkingRoute, ZanzibarPackage.
    Expects: $package, $typeLabel, $listRoute, $typeBanner, optionally $relatedTours.
    Uses site palette: --forest, --amber, --gold, --cream, --sand.
--}}

<style>
    /* ============ Package detail — Novella palette ============ */
    .pkg-hero { position: relative; min-height: 460px; background-size: cover; background-position: center; color: var(--white); }
    .pkg-hero::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(15,29,18,.15) 0%, rgba(15,29,18,.78) 100%); }
    .pkg-hero-inner { position: relative; z-index: 2; padding: 110px 0 70px; }
    .pkg-crumb { color: rgba(255,255,255,.85); font-size: .88rem; margin-bottom: 14px; }
    .pkg-crumb a { color: var(--amber-light); text-decoration: none; }
    .pkg-crumb a:hover { text-decoration: underline; }
    .pkg-hero .eyebrow { display: inline-block; background: var(--amber); color: var(--white); padding: 6px 14px; border-radius: 30px; font-size: .72rem; letter-spacing: 2px; font-weight: 700; text-transform: uppercase; margin-bottom: 12px; }
    .pkg-hero h1 { font-size: 2.7rem; font-weight: 800; margin: 0 0 22px; line-height: 1.15; max-width: 900px; }
    .pkg-hero-meta { display: flex; flex-wrap: wrap; gap: 10px; }
    .pkg-hero-meta .chip { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,.10); backdrop-filter: blur(6px); border: 1px solid rgba(255,255,255,.22); padding: 8px 16px; border-radius: 24px; font-size: .88rem; font-weight: 600; }
    .pkg-hero-meta .chip i { color: var(--amber-light); }

    /* Sticky anchor bar */
    .pkg-anchors { background: var(--forest-dark); position: sticky; top: 0; z-index: 40; box-shadow: 0 2px 14px rgba(0,0,0,.15); }
    .pkg-anchors .container { display: flex; flex-wrap: wrap; gap: 4px; padding: 0; overflow-x: auto; }
    .pkg-anchors a { color: rgba(255,255,255,.85); padding: 16px 18px; text-decoration: none; font-size: .82rem; font-weight: 700; text-transform: uppercase; letter-spacing: .8px; white-space: nowrap; border-bottom: 3px solid transparent; transition: var(--transition); }
    .pkg-anchors a:hover { color: var(--white); border-bottom-color: var(--amber); background: rgba(255,255,255,.04); }

    /* Two-column layout */
    .pkg-body { padding: 60px 0; background: var(--cream); }
    .pkg-grid { display: grid; grid-template-columns: minmax(0, 1fr) 340px; gap: 40px; align-items: start; }
    @media (max-width: 1024px) { .pkg-grid { grid-template-columns: 1fr; } }

    /* Section cards */
    .pkg-card { background: var(--white); border-radius: var(--radius-md); box-shadow: var(--shadow-sm); overflow: hidden; margin-bottom: 30px; }
    .pkg-card-head { background: var(--forest); color: var(--white); padding: 18px 26px; display: flex; align-items: center; gap: 12px; }
    .pkg-card-head i { color: var(--amber-light); font-size: 1.35rem; }
    .pkg-card-head h2 { margin: 0; font-size: 1.35rem; font-weight: 800; letter-spacing: .3px; color: var(--white); }
    .pkg-card-body { padding: 30px; color: var(--text); line-height: 1.75; }
    .pkg-card-body h3 { color: var(--forest); font-size: 1.1rem; margin-top: 20px; }
    .pkg-card-body p { color: #4a4a3f; }

    /* Sidebar */
    .pkg-sidebar { position: sticky; top: 76px; }
    .pkg-side-card { background: var(--white); border-radius: var(--radius-md); box-shadow: var(--shadow-md); overflow: hidden; margin-bottom: 22px; border-top: 4px solid var(--amber); }
    .pkg-side-card .head { padding: 20px 24px; border-bottom: 1px solid var(--line); }
    .pkg-side-card .head .price-lead { font-size: .78rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px; font-weight: 700; }
    .pkg-side-card .head .price { display: block; font-size: 2rem; font-weight: 800; color: var(--forest); }
    .pkg-side-card .head .price small { display: inline; font-size: .8rem; color: var(--muted); font-weight: 500; margin-left: 4px; }
    .pkg-side-card .body { padding: 20px 24px; }
    .pkg-side-card .body ul { list-style: none; padding: 0; margin: 0; }
    .pkg-side-card .body li { display: flex; align-items: center; gap: 10px; padding: 8px 0; color: var(--text); font-size: .95rem; }
    .pkg-side-card .body li i { color: var(--amber); width: 18px; text-align: center; }
    .pkg-side-card .cta { display: block; text-align: center; background: var(--amber); color: var(--white); padding: 14px; font-weight: 800; text-decoration: none; text-transform: uppercase; letter-spacing: 1px; font-size: .88rem; transition: var(--transition); }
    .pkg-side-card .cta:hover { background: var(--amber-dark); }
    .pkg-side-card .cta i { margin-right: 6px; }

    /* Pricing table */
    .pkg-price-table { width: 100%; border-collapse: collapse; }
    .pkg-price-table th { background: var(--forest-light); color: var(--white); padding: 14px 18px; text-align: left; font-weight: 700; font-size: .9rem; text-transform: uppercase; letter-spacing: .6px; }
    .pkg-price-table td { padding: 16px 18px; border-top: 1px solid var(--line-2); color: var(--text); }
    .pkg-price-table tr:hover td { background: var(--cream); }
    .pkg-price-table .price { font-weight: 800; color: var(--gold); font-size: 1.1rem; }

    /* Itinerary — day badge */
    .pkg-day { display: flex; gap: 18px; padding: 22px 0; border-bottom: 1px solid var(--line-2); }
    .pkg-day:last-child { border-bottom: none; }
    .pkg-day-num { flex-shrink: 0; width: 62px; height: 62px; border-radius: 50%; background: var(--forest); color: var(--white); display: flex; flex-direction: column; align-items: center; justify-content: center; font-weight: 800; box-shadow: 0 6px 16px rgba(40,60,40,.25); border: 3px solid var(--amber); }
    .pkg-day-num span { font-size: .65rem; text-transform: uppercase; letter-spacing: 1px; opacity: .85; }
    .pkg-day-num strong { font-size: 1.35rem; line-height: 1; }
    .pkg-day-content { flex: 1; min-width: 0; }
    .pkg-day-content h3 { margin: 4px 0 8px; color: var(--forest); font-size: 1.15rem; }
    .pkg-day-content p { margin: 0 0 10px; }
    .pkg-day-meta { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 12px; }
    .pkg-day-meta span { background: var(--sand); color: var(--forest); padding: 5px 12px; border-radius: 20px; font-size: .8rem; font-weight: 600; }
    .pkg-day-meta span i { color: var(--gold); margin-right: 5px; }

    /* Includes/Excludes */
    .inc-exc-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
    .inc-exc-grid ul { list-style: none; padding: 0; margin: 0; }
    .inc-exc-grid li { padding: 10px 0 10px 32px; position: relative; color: var(--text); border-bottom: 1px solid var(--line-2); }
    .inc-exc-grid li:last-child { border-bottom: none; }
    .inc-exc-grid .included li::before { content: '✓'; position: absolute; left: 0; top: 10px; width: 22px; height: 22px; border-radius: 50%; background: var(--forest); color: var(--white); display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: .75rem; }
    .inc-exc-grid .excluded li::before { content: '✕'; position: absolute; left: 0; top: 10px; width: 22px; height: 22px; border-radius: 50%; background: var(--amber-dark); color: var(--white); display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: .75rem; }
    .inc-exc-grid h4 { color: var(--forest); margin: 0 0 12px; font-size: 1.05rem; }
    @media (max-width: 640px) { .inc-exc-grid { grid-template-columns: 1fr; } }

    /* Accommodations */
    .accom-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 22px; }
    .accom-card { background: var(--white); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid var(--line-2); transition: var(--transition); }
    .accom-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
    .accom-card .accom-img { height: 180px; background-size: cover; background-position: center; background-color: var(--sand); }
    .accom-card .accom-body { padding: 18px; }
    .accom-card h4 { margin: 0 0 8px; color: var(--forest); font-size: 1rem; }
    .accom-card p { margin: 0; font-size: .88rem; color: var(--muted); line-height: 1.55; }

    /* Gallery */
    .pkg-gallery-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
    .pkg-gallery-grid .g-img { padding-top: 66%; background-size: cover; background-position: center; background-color: var(--sand); border-radius: 6px; }
    @media (max-width: 640px) { .pkg-gallery-grid { grid-template-columns: repeat(2, 1fr); } }

    /* Meta grid */
    .pkg-meta-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 16px; }
    .pkg-meta-grid .meta { padding: 16px; background: var(--cream); border-left: 3px solid var(--amber); border-radius: 6px; }
    .pkg-meta-grid .meta strong { display: block; color: var(--muted); text-transform: uppercase; font-size: .72rem; letter-spacing: 1px; margin-bottom: 4px; font-weight: 700; }
    .pkg-meta-grid .meta span { color: var(--forest); font-weight: 700; font-size: 1rem; }

    /* Accordion */
    .pkg-accord details { border-bottom: 1px solid var(--line-2); }
    .pkg-accord details:last-child { border-bottom: none; }
    .pkg-accord summary { list-style: none; cursor: pointer; padding: 18px 0; font-weight: 700; color: var(--forest); display: flex; align-items: center; justify-content: space-between; gap: 14px; font-size: 1rem; }
    .pkg-accord summary::-webkit-details-marker { display: none; }
    .pkg-accord summary::after { content: '+'; display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; border-radius: 50%; background: var(--sand); color: var(--forest); font-weight: 800; flex-shrink: 0; transition: var(--transition); font-size: 1.2rem; }
    .pkg-accord details[open] summary::after { content: '−'; background: var(--amber); color: var(--white); transform: rotate(180deg); }
    .pkg-accord .accord-body { padding: 0 0 22px; color: var(--text); line-height: 1.75; }
    .pkg-accord .accord-body p { color: #4a4a3f; }

    /* Booking form (sidebar/inline) */
    .pkg-booking-form label { display: block; font-weight: 600; margin-bottom: 6px; color: var(--forest); font-size: .88rem; }
    .pkg-booking-form input, .pkg-booking-form textarea { width: 100%; padding: 11px 14px; border: 1px solid var(--line); border-radius: 6px; font-family: inherit; font-size: .95rem; margin-bottom: 12px; background: var(--white); }
    .pkg-booking-form input:focus, .pkg-booking-form textarea:focus { outline: none; border-color: var(--amber); box-shadow: 0 0 0 3px rgba(207,137,64,.18); }
    .pkg-booking-form textarea { min-height: 110px; resize: vertical; }
    .pkg-booking-form button { width: 100%; background: var(--amber); color: var(--white); border: none; padding: 14px; border-radius: 6px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; font-size: .95rem; transition: var(--transition); }
    .pkg-booking-form button:hover { background: var(--amber-dark); }

    /* Related tours */
    .related-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 22px; }
    .related-card { display: block; text-decoration: none; color: inherit; background: var(--white); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); transition: var(--transition); }
    .related-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
    .related-card .r-img { height: 180px; background-size: cover; background-position: center; }
    .related-card .r-body { padding: 18px; }
    .related-card .r-days { display: inline-block; background: var(--amber); color: var(--white); padding: 3px 10px; border-radius: 20px; font-size: .7rem; font-weight: 700; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 8px; }
    .related-card h4 { margin: 0; color: var(--forest); font-size: 1.05rem; }

    /* Flash messages */
    .pkg-flash { padding: 14px 18px; border-radius: 6px; margin-bottom: 18px; font-size: .92rem; }
    .pkg-flash.success { background: #e6f4ea; border: 1px solid #b6dfc3; color: #205e33; }
    .pkg-flash.error { background: #fdecea; border: 1px solid #f5c2be; color: #8a2c25; }

    @media (max-width: 768px) {
        .pkg-hero h1 { font-size: 1.8rem; }
        .pkg-card-body { padding: 22px; }
        .pkg-day { flex-direction: column; }
        .pkg-day-num { width: 54px; height: 54px; }
    }
</style>

{{-- HERO --}}
<section class="pkg-hero" style="background-image:url('{{ $package->image ?? $typeBanner }}');">
    <div class="pkg-hero-inner container">
        <div class="pkg-crumb">
            <a href="{{ route('home') }}">Home</a>
            <i class="bi bi-chevron-right"></i>
            <a href="{{ route($listRoute) }}">{{ $typeLabel }}</a>
            <i class="bi bi-chevron-right"></i>
            <span>{{ $package->name }}</span>
        </div>
        <span class="eyebrow">{{ $package->category ?? $typeLabel }}</span>
        <h1>
            @if ($package->duration_days || $package->duration_nights)
                {{ $package->duration_days ? $package->duration_days.' Days' : '' }}{{ $package->duration_nights ? ' | '.$package->duration_nights.' Nights ' : ' ' }}
            @endif
            {{ $package->name }}
        </h1>
        <div class="pkg-hero-meta">
            @if ($package->duration_days)
                <span class="chip"><i class="bi bi-calendar3"></i> {{ $package->duration_days }} Days</span>
            @endif
            @if ($package->duration_nights)
                <span class="chip"><i class="bi bi-moon-stars"></i> {{ $package->duration_nights }} Nights</span>
            @endif
            @if ($package->skill_level)
                <span class="chip"><i class="bi bi-bar-chart"></i> {{ $package->skill_level }}</span>
            @endif
            @if ($package->theme)
                <span class="chip"><i class="bi bi-compass"></i> {{ $package->theme }}</span>
            @endif
            @if (($package->price_from ?? $package->price ?? null))
                <span class="chip"><i class="bi bi-tag-fill"></i> From ${{ number_format((float) ($package->price_from ?? $package->price)) }} pp</span>
            @endif
        </div>
    </div>
</section>

{{-- STICKY ANCHOR NAV --}}
<nav class="pkg-anchors">
    <div class="container">
        <a href="#overview">Overview</a>
        <a href="#pricing">Pricing</a>
        <a href="#itinerary">Itinerary</a>
        <a href="#includes">Includes</a>
        <a href="#accommodations">Stay</a>
        <a href="#gallery">Gallery</a>
        <a href="#travel-info">Travel Info</a>
        <a href="#booking">Book Now</a>
        <a href="#policies">Policies</a>
    </div>
</nav>

{{-- MAIN 2-COL LAYOUT --}}
<div class="pkg-body">
    <div class="container pkg-grid">

        {{-- ============ LEFT: CONTENT ============ --}}
        <div>

            {{-- Overview --}}
            <div class="pkg-card" id="overview">
                <div class="pkg-card-head">
                    <i class="bi bi-info-circle-fill"></i>
                    <h2>Overview</h2>
                </div>
                <div class="pkg-card-body">
                    @if ($package->overview)
                        {!! nl2br(e($package->overview)) !!}
                    @else
                        <p>{{ $package->description }}</p>
                    @endif
                </div>
            </div>

            {{-- Pricing --}}
            @if (! empty($package->pricing_tiers))
                <div class="pkg-card" id="pricing">
                    <div class="pkg-card-head">
                        <i class="bi bi-cash-stack"></i>
                        <h2>Pricing</h2>
                    </div>
                    <div class="pkg-card-body" style="padding: 0;">
                        <table class="pkg-price-table">
                            <thead>
                                <tr>
                                    <th>Group Size</th>
                                    <th>Price Per Person (USD)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($package->pricing_tiers as $tier)
                                    <tr>
                                        <td>{{ $tier['persons'] ?? '' }} {{ (($tier['persons'] ?? 1) > 1) ? 'Persons' : 'Person' }}</td>
                                        <td class="price">${{ number_format((float) ($tier['price'] ?? 0)) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            {{-- Itinerary --}}
            @if (! empty($package->itinerary))
                <div class="pkg-card" id="itinerary">
                    <div class="pkg-card-head">
                        <i class="bi bi-map-fill"></i>
                        <h2>Detailed Itinerary</h2>
                    </div>
                    <div class="pkg-card-body">
                        @foreach ($package->itinerary as $i => $day)
                            <div class="pkg-day">
                                <div class="pkg-day-num">
                                    <span>Day</span>
                                    <strong>{{ $day['day'] ?? ($i + 1) }}</strong>
                                </div>
                                <div class="pkg-day-content">
                                    <h3>{{ $day['title'] ?? '' }}</h3>
                                    <p>{!! nl2br(e($day['description'] ?? '')) !!}</p>
                                    @if (! empty($day['accommodation']) || ! empty($day['meals']))
                                        <div class="pkg-day-meta">
                                            @if (! empty($day['accommodation']))
                                                <span><i class="bi bi-house-heart-fill"></i> {{ $day['accommodation'] }}</span>
                                            @endif
                                            @if (! empty($day['meals']))
                                                <span><i class="bi bi-cup-hot-fill"></i> {{ is_array($day['meals']) ? implode(', ', $day['meals']) : $day['meals'] }}</span>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- Includes / Excludes --}}
            @if (! empty($package->includes) || ! empty($package->excludes))
                <div class="pkg-card" id="includes">
                    <div class="pkg-card-head">
                        <i class="bi bi-check2-square"></i>
                        <h2>What's Included &amp; Excluded</h2>
                    </div>
                    <div class="pkg-card-body">
                        <div class="inc-exc-grid">
                            <div class="included">
                                <h4>Included</h4>
                                <ul>
                                    @foreach ($package->includes ?? [] as $item)
                                        <li>{{ is_array($item) ? ($item['text'] ?? '') : $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="excluded">
                                <h4>Not Included</h4>
                                <ul>
                                    @foreach ($package->excludes ?? [] as $item)
                                        <li>{{ is_array($item) ? ($item['text'] ?? '') : $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Accommodations --}}
            @if (! empty($package->accommodations))
                <div class="pkg-card" id="accommodations">
                    <div class="pkg-card-head">
                        <i class="bi bi-house-door-fill"></i>
                        <h2>Where You'll Stay</h2>
                    </div>
                    <div class="pkg-card-body">
                        <div class="accom-grid">
                            @foreach ($package->accommodations as $acc)
                                <div class="accom-card">
                                    <div class="accom-img" style="background-image:url('{{ $acc['image'] ?? '' }}');"></div>
                                    <div class="accom-body">
                                        <h4>{{ $acc['name'] ?? '' }}</h4>
                                        <p>{{ $acc['description'] ?? '' }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            {{-- Gallery --}}
            @if (! empty($package->gallery))
                <div class="pkg-card" id="gallery">
                    <div class="pkg-card-head">
                        <i class="bi bi-images"></i>
                        <h2>Gallery</h2>
                    </div>
                    <div class="pkg-card-body">
                        <div class="pkg-gallery-grid">
                            @foreach ($package->gallery as $img)
                                <div class="g-img" style="background-image:url('{{ is_array($img) ? ($img['url'] ?? '') : $img }}');"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            {{-- Travel Info --}}
            <div class="pkg-card" id="travel-info">
                <div class="pkg-card-head">
                    <i class="bi bi-info-square-fill"></i>
                    <h2>Travel Information</h2>
                </div>
                <div class="pkg-card-body pkg-accord">
                    <details>
                        <summary><span><i class="bi bi-people-fill"></i> Is this trip for you?</span></summary>
                        <div class="accord-body">
                            <p>Novella Safaris has been running Tanzanian journeys since 2005. Our licensed guides, modern 4×4 Land Cruisers, and 24/7 in-country support make us the trusted choice for over 4,800 travellers to date. Group size is capped so every guest gets personal attention.</p>
                        </div>
                    </details>
                    <details>
                        <summary><span><i class="bi bi-truck"></i> Transportation</span></summary>
                        <div class="accord-body">
                            <p>All in-destination transport is included: airport pickup, park drives in custom 4×4 vehicles, inter-park transfers. International and domestic flights are not included.</p>
                        </div>
                    </details>
                    <details>
                        <summary><span><i class="bi bi-cash-coin"></i> Money &amp; Payments</span></summary>
                        <div class="accord-body">
                            <p>Tanzanian Shilling (TZS) is the local currency. USD is widely accepted at parks, lodges and shops. ATMs are available in Arusha, Moshi, Zanzibar and major hubs. We accept Visa, Mastercard, AMEX and bank wire.</p>
                        </div>
                    </details>
                    <details>
                        <summary><span><i class="bi bi-backpack2-fill"></i> Recommended Gear</span></summary>
                        <div class="accord-body">
                            <p><strong>Clothing:</strong> Layered, muted colours; light hiking pants, breathable shirts, warm fleece and waterproof shell.</p>
                            <p><strong>Footwear:</strong> Broken-in walking shoes, sandals, warm socks.</p>
                            <p><strong>Essentials:</strong> Sun hat, sunglasses, sunscreen, water bottle, insect repellent, small day pack, binoculars, camera with spare batteries, headlamp.</p>
                            <p><strong>Documents:</strong> Passport (6+ months validity), visa, travel insurance, printed itinerary copies.</p>
                            <p><strong>First-aid:</strong> Personal medication, ibuprofen, malaria prophylaxis, plasters, oral rehydration salts.</p>
                        </div>
                    </details>
                    <details>
                        <summary><span><i class="bi bi-geo-alt-fill"></i> Departure &amp; Pickup Locations</span></summary>
                        <div class="accord-body">
                            <p><strong>Departure:</strong> Novella Safaris office, Boma Road, Arusha, Tanzania.</p>
                            <p><strong>Pickup available from:</strong> Kilimanjaro International Airport (JRO), Arusha Airport (ARK), Julius Nyerere International Airport (DAR).</p>
                        </div>
                    </details>
                    <details>
                        <summary><span><i class="bi bi-heart-fill"></i> Safari Tips &amp; Tipping</span></summary>
                        <div class="accord-body">
                            <p>Tipping is customary and appreciated. Guideline: USD 15 per day for driver-guides, USD 10 per day for cooks, USD 5 per day for camp staff. Tips are paid at the end of the trip.</p>
                        </div>
                    </details>
                </div>
            </div>

            {{-- Additional details / meta --}}
            <div class="pkg-card" id="details">
                <div class="pkg-card-head">
                    <i class="bi bi-tags-fill"></i>
                    <h2>Trip Details</h2>
                </div>
                <div class="pkg-card-body">
                    <div class="pkg-meta-grid">
                        <div class="meta"><strong>Category</strong><span>{{ $package->category ?? $typeLabel }}</span></div>
                        <div class="meta"><strong>Destination</strong><span>Tanzania</span></div>
                        <div class="meta"><strong>Theme</strong><span>{{ $package->theme ?? 'Culture & Wildlife' }}</span></div>
                        <div class="meta"><strong>Skill Level</strong><span>{{ $package->skill_level ?? 'Intermediate' }}</span></div>
                        <div class="meta"><strong>Payment</strong><span>Visa · AMEX · MC · Wire</span></div>
                    </div>
                </div>
            </div>

            {{-- Booking form (large, in-content) --}}
            <div class="pkg-card" id="booking">
                <div class="pkg-card-head">
                    <i class="bi bi-envelope-paper-fill"></i>
                    <h2>Book This Trip</h2>
                </div>
                <div class="pkg-card-body">
                    <p style="margin-top:0;">Send us an enquiry — a Tanzania-based trip designer will reply within 24 hours with a tailored proposal, no obligation.</p>

                    @if (session('success'))
                        <div class="pkg-flash success">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="pkg-flash error">
                            <ul style="margin:0;padding-left:20px;">
                                @foreach ($errors->all() as $err)<li>{{ $err }}</li>@endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="pkg-booking-form" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <input type="hidden" name="trip_interest" value="{{ $package->name }}" />
                        <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
                            <div>
                                <label>Full Name</label>
                                <input name="name" type="text" value="{{ old('name') }}" required />
                            </div>
                            <div>
                                <label>Email</label>
                                <input name="email" type="email" value="{{ old('email') }}" required />
                            </div>
                            <div>
                                <label>Phone (optional)</label>
                                <input name="phone" type="tel" value="{{ old('phone') }}" />
                            </div>
                            <div>
                                <label>Approx. Dates</label>
                                <input name="dates" type="text" value="{{ old('dates') }}" placeholder="e.g. July 2026" />
                            </div>
                        </div>
                        <label>Tell us about your dream trip</label>
                        <textarea name="message" required placeholder="Traveller count, budget range, must-see wildlife…">{{ old('message') }}</textarea>
                        <button type="submit"><i class="bi bi-send"></i> Send Enquiry</button>
                    </form>
                </div>
            </div>

            {{-- Policies --}}
            <div class="pkg-card" id="policies">
                <div class="pkg-card-head">
                    <i class="bi bi-shield-check"></i>
                    <h2>Reservation &amp; Cancellation</h2>
                </div>
                <div class="pkg-card-body pkg-accord">
                    <details>
                        <summary><span><i class="bi bi-wallet2"></i> Reservation &amp; Payment Terms</span></summary>
                        <div class="accord-body">
                            <p><strong>Deposit:</strong> 20% at reservation to confirm your booking.</p>
                            <p><strong>Balance:</strong> Due 60 days before departure.</p>
                            <p><strong>Accepted methods:</strong> Visa · Mastercard · AMEX · bank wire.</p>
                            <p><strong>Documents required:</strong> Signed booking form, passport with 6+ months validity, valid visa, travel insurance.</p>
                        </div>
                    </details>
                    <details>
                        <summary><span><i class="bi bi-x-circle"></i> Cancellation Policy</span></summary>
                        <div class="accord-body">
                            <p><strong>30+ days before departure:</strong> 20% of the total trip cost retained.</p>
                            <p><strong>14–29 days before departure:</strong> 50% retained.</p>
                            <p><strong>Less than 14 days:</strong> 100% retained.</p>
                            <p>If you find a replacement 14+ days before departure, no cancellation fee applies.</p>
                        </div>
                    </details>
                </div>
            </div>

        </div>

        {{-- ============ RIGHT: STICKY SIDEBAR ============ --}}
        <aside class="pkg-sidebar">

            {{-- Trip summary card --}}
            <div class="pkg-side-card">
                <div class="head">
                    <span class="price-lead">Starting from</span>
                    <span class="price">${{ number_format((float) ($package->price_from ?? $package->price ?? 0)) }}<small>/ per person</small></span>
                </div>
                <div class="body">
                    <ul>
                        @if ($package->duration_days)<li><i class="bi bi-calendar3"></i> {{ $package->duration_days }} Days</li>@endif
                        @if ($package->duration_nights)<li><i class="bi bi-moon-stars"></i> {{ $package->duration_nights }} Nights</li>@endif
                        <li><i class="bi bi-geo-alt-fill"></i> Tanzania</li>
                        @if ($package->skill_level)<li><i class="bi bi-bar-chart"></i> {{ $package->skill_level }}</li>@endif
                        @if ($package->theme)<li><i class="bi bi-compass"></i> {{ $package->theme }}</li>@endif
                        <li><i class="bi bi-check-circle-fill"></i> Best-price guarantee</li>
                        <li><i class="bi bi-headset"></i> 24/7 in-country support</li>
                    </ul>
                </div>
                <a href="#booking" class="cta"><i class="bi bi-send"></i> Book This Trip</a>
            </div>

            {{-- Quick contact card --}}
            <div class="pkg-side-card">
                <div class="head">
                    <span class="price-lead">Need help?</span>
                    <span class="price" style="font-size:1.15rem;">Talk to an expert</span>
                </div>
                <div class="body">
                    <ul>
                        <li><i class="bi bi-telephone-fill"></i> +255 754 000 000</li>
                        <li><i class="bi bi-envelope-fill"></i> info@novellasafaris.com</li>
                        <li><i class="bi bi-clock-fill"></i> Reply within 24h</li>
                    </ul>
                </div>
                <a href="https://wa.me/255754000000" class="cta" style="background: #25d366;"><i class="bi bi-whatsapp"></i> WhatsApp Us</a>
            </div>

        </aside>

    </div>

    {{-- Related tours (full width) --}}
    @if (isset($relatedTours) && $relatedTours->isNotEmpty())
        <div class="container" style="margin-top: 50px;" id="related">
            <div class="pkg-card">
                <div class="pkg-card-head">
                    <i class="bi bi-grid-fill"></i>
                    <h2>You Might Also Like</h2>
                </div>
                <div class="pkg-card-body">
                    <div class="related-grid">
                        @foreach ($relatedTours as $rel)
                            <a href="{{ route($listRoute . '.show', $rel->slug) }}" class="related-card">
                                <div class="r-img" style="background-image:url('{{ $rel->image }}');"></div>
                                <div class="r-body">
                                    @if ($rel->duration_days)<span class="r-days">{{ $rel->duration_days }} Days</span>@endif
                                    <h4>{{ $rel->name }}</h4>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

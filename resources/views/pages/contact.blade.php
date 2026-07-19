@extends('layouts.app', [
    'pageTitle' => 'Contact Us — Novella Safaris',
    'pageDescription' => 'Get in touch with Novella Safaris — we\'ll craft your Tanzania adventure and reply within 24 hours.',
])

@section('content')
    <section class="page-banner" style="background-image:url('https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1920&q=80');">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> <i class="bi bi-chevron-right"></i> <span>Contact</span></div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="contact-wrap">
                <div class="contact-info">
                    <span class="eyebrow">Get in Touch</span>
                    <h2>Let's plan your Tanzania journey</h2>
                    <p>Whether you have a rough idea or a full itinerary in mind, our Arusha-based team will get back to you within 24 hours with a tailored proposal — no obligation.</p>
                    <ul>
                        <li><i class="bi bi-geo-alt-fill"></i><div><strong>Office</strong><span>Boma Road, Arusha, Tanzania</span></div></li>
                        <li><i class="bi bi-telephone-fill"></i><div><strong>Phone / WhatsApp</strong><span>+255 754 000 000 (24/7)</span></div></li>
                        <li><i class="bi bi-envelope-fill"></i><div><strong>Email</strong><span>info@novellasafaris.com</span></div></li>
                        <li><i class="bi bi-clock-fill"></i><div><strong>Office Hours</strong><span>Mon – Sat, 8:00 – 18:00 EAT</span></div></li>
                    </ul>
                </div>

                <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <h3>Send us an enquiry</h3>

                    @if (session('success'))
                        <div style="background:#d4edda;border:1px solid #c3e6cb;color:#155724;padding:14px 18px;border-radius:8px;margin-bottom:20px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div style="background:#f8d7da;border:1px solid #f5c6cb;color:#721c24;padding:14px 18px;border-radius:8px;margin-bottom:20px;">
                            <ul style="margin:0;padding-left:20px;">
                                @foreach ($errors->all() as $err)<li>{{ $err }}</li>@endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="field-row">
                        <div>
                            <label for="c-name">Full Name</label>
                            <input id="c-name" name="name" type="text" value="{{ old('name') }}" placeholder="Your name" required />
                        </div>
                        <div>
                            <label for="c-country">Country</label>
                            <input id="c-country" name="country" type="text" value="{{ old('country') }}" placeholder="Where are you from?" />
                        </div>
                    </div>
                    <div class="field-row">
                        <div>
                            <label for="c-email">Email</label>
                            <input id="c-email" name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com" required />
                        </div>
                        <div>
                            <label for="c-phone">Phone (optional)</label>
                            <input id="c-phone" name="phone" type="tel" value="{{ old('phone') }}" placeholder="+1 555 000 0000" />
                        </div>
                    </div>
                    <div class="field-row">
                        <div>
                            <label for="c-interest">I'm interested in</label>
                            <select id="c-interest" name="trip_interest" required>
                                <option value="">Choose one…</option>
                                @foreach (['Safari', 'Kilimanjaro Climb', 'Zanzibar Beach', 'Safari + Zanzibar Combo', 'Day Trip', 'Other'] as $opt)
                                    <option value="{{ $opt }}" @selected(old('trip_interest') === $opt)>{{ $opt }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="c-dates">Approx. Dates</label>
                            <input id="c-dates" name="dates" type="text" value="{{ old('dates') }}" placeholder="e.g. July 2026" />
                        </div>
                    </div>
                    <div class="field">
                        <label for="c-msg">Tell us about your dream trip</label>
                        <textarea id="c-msg" name="message" placeholder="Traveller count, budget range, must-see wildlife, honeymoon, family with kids…" required>{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-yellow btn-lg">Send Enquiry <i class="bi bi-send"></i></button>
                </form>
            </div>
        </div>
    </section>

    <section class="inner-cta">
        <div class="container">
            <h2>Prefer WhatsApp?</h2>
            <p>Chat with our team directly on WhatsApp — replies within an hour during office time.</p>
            <a href="https://wa.me/255754000000" class="btn btn-yellow btn-lg"><i class="bi bi-whatsapp"></i> WhatsApp Us</a>
        </div>
    </section>
@endsection

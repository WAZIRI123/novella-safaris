<?php
$pageTitle       = "Novella Safaris — Premier Tour Operator for the Best Safari in Tanzania";
$pageDescription = "Novella Safaris — the number one tour operator in Tanzania. Handcrafted safaris, Kilimanjaro treks and Zanzibar escapes.";
$activeNav       = "home";
include __DIR__ . "/partials/header.php";
?>


    <!-- ============ HERO ============ -->
    <section class="hero">
        <div class="hero-slides" id="heroSlides">
            <div class="hero-slide active" style="background-image:url('https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1920&q=80');"></div>
            <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1920&q=80');"></div>
            <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=1920&q=80');"></div>
            <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=1920&q=80');"></div>
            <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?auto=format&fit=crop&w=1920&q=80');"></div>
        </div>
        <div class="hero-overlay"></div>
        <div class="container hero-inner">
            <h1 class="hero-title">PREMIER TOUR OPERATOR FOR THE BEST SAFARI IN TANZANIA</h1>
            <p class="hero-sub">TO SEE A BEAUTIFUL COUNTRY WITH ITS LANDSCAPES AND WILDERNESS.</p>

            <div class="dual-buttons">
                <a href="#" class="dual-btn">
                    <div class="dual-icon">
                        <svg viewBox="0 0 100 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 40 L25 40 L28 30 L72 30 L75 40 L85 40 L88 45 L88 50 L12 50 L12 45 Z" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <path d="M32 30 L35 22 L65 22 L68 30" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <circle cx="25" cy="50" r="6" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <circle cx="75" cy="50" r="6" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <path d="M42 30 L42 22 M52 30 L52 22 M62 30 L62 22" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <span>Tanzania Safaris</span>
                </a>
                <a href="#" class="dual-btn">
                    <div class="dual-icon">
                        <svg viewBox="0 0 100 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 50 L30 20 L40 32 L55 12 L75 40 L90 25 L90 50 Z" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <path d="M50 18 L55 12 L60 18" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="72" cy="15" r="4" stroke="currentColor" stroke-width="1.5" fill="none"/>
                        </svg>
                    </div>
                    <span>Mount Kilimanjaro Trek</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ WHY BOOK ============ -->
    <section class="why-book">
        <div class="container why-inner">
            <div class="why-text">
                <span class="eyebrow">Why Book with Novella</span>
                <h2>Rooted in Tanzania. <br />Trusted worldwide.</h2>
                <p>Founded by a Tanzanian family in 2005, Novella Safaris has spent nearly two decades taking travellers deep into the wild heart of East Africa. Our journeys are unrushed, our guides are family, and every itinerary is designed the way we would want to travel ourselves.</p>
                <p>From the sweeping Serengeti plains to the roof of Africa on Kilimanjaro and the turquoise shores of Zanzibar — we are your one team, from your first email to your final sundowner.</p>
                <a href="#" class="btn btn-navy">Read Our Story <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="why-portrait">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=700&q=80" alt="Founder portrait" />
                <div class="portrait-badge">
                    <strong>19+</strong>
                    <span>Years serving travellers</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ FEATURES + CHARITY ============ -->
    <section class="features-charity">
        <div class="container features-inner">
            <div class="feature-column">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                    <h3>Safety First</h3>
                    <p>Modern 4x4 Land Cruisers, satellite comms and oxygen on every climb.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-person-badge"></i></div>
                    <h3>Qualified Guides</h3>
                    <p>Wildlife College certified, WFR trained, averaging 12 years in the bush.</p>
                </div>
            </div>
            <div class="feature-column">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-geo-alt"></i></div>
                    <h3>Local Knowledge</h3>
                    <p>Born and bred in Tanzania — we know every corner, every season, every secret.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-tree"></i></div>
                    <h3>Environmentally Friendly</h3>
                    <p>Plastic-free camps, KPAP-certified porter care, conservation levies on every trip.</p>
                </div>
            </div>
            <div class="charity-card">
                <span class="eyebrow">Corporate Social Responsibility</span>
                <h2>Novella Foundation</h2>
                <p>A portion of every booking funds classrooms, clean water and porter welfare in the villages around Kilimanjaro and the Serengeti.</p>
                <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?auto=format&fit=crop&w=700&q=80" alt="Community project" />
                <a href="#" class="btn btn-yellow"><i class="bi bi-heart"></i> Donate Now</a>
            </div>
        </div>
    </section>

    <!-- ============ SPECIAL PACKAGES ============ -->
    <section class="special-packages">
        <div class="container">
            <div class="section-title">
                <h2>Special Packages</h2>
                <p>Hand-crafted itineraries — book direct, pay nothing extra.</p>
            </div>
            <div class="special-grid">
                <article class="special-card">
                    <div class="special-img" style="background-image:url('https://images.unsplash.com/photo-1534177616072-ef7dc120449d?auto=format&fit=crop&w=700&q=80');"></div>
                    <div class="special-body">
                        <h4>7-Day Great Migration Safari</h4>
                        <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </article>
                <article class="special-card">
                    <div class="special-img" style="background-image:url('https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=700&q=80');"></div>
                    <div class="special-body">
                        <h4>8-Day Kilimanjaro Lemosho Trek</h4>
                        <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </article>
                <article class="special-card">
                    <div class="special-img" style="background-image:url('https://images.unsplash.com/photo-1589197331516-4d84b72ebde3?auto=format&fit=crop&w=700&q=80');"></div>
                    <div class="special-body">
                        <h4>10-Day Safari &amp; Zanzibar Combo</h4>
                        <a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============ TOP SELLING ============ -->
    <section class="top-selling">
        <div class="container">
            <div class="section-title">
                <h2>Top Selling Packages</h2>
            </div>
            <div class="top-grid">
                <a href="#" class="top-card" style="background-image:url('https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=800&q=80');">
                    <div class="top-card-overlay">
                        <span class="top-days">4 Days</span>
                        <h4>Tanzania Safari</h4>
                    </div>
                </a>
                <a href="#" class="top-card" style="background-image:url('https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=800&q=80');">
                    <div class="top-card-overlay">
                        <span class="top-days">6 Days</span>
                        <h4>Northern Circuit Safari</h4>
                    </div>
                </a>
                <a href="#" class="top-card" style="background-image:url('https://images.unsplash.com/photo-1549366021-9f761d040a94?auto=format&fit=crop&w=800&q=80');">
                    <div class="top-card-overlay">
                        <span class="top-days">10 Days</span>
                        <h4>Luxury Fly-In Safari</h4>
                    </div>
                </a>
                <a href="#" class="top-card" style="background-image:url('https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=800&q=80');">
                    <div class="top-card-overlay">
                        <span class="top-days">8 Days</span>
                        <h4>Kilimanjaro Lemosho</h4>
                    </div>
                </a>
                <a href="#" class="top-card" style="background-image:url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=800&q=80');">
                    <div class="top-card-overlay">
                        <span class="top-days">6 Days</span>
                        <h4>Kilimanjaro Marangu</h4>
                    </div>
                </a>
                <a href="#" class="top-card" style="background-image:url('https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?auto=format&fit=crop&w=800&q=80');">
                    <div class="top-card-overlay">
                        <span class="top-days">7 Days</span>
                        <h4>Kilimanjaro Machame</h4>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ GROUP DEPARTURE BANNER ============ -->
    <section class="group-banner">
        <div class="container">
            <h2>Tanzania Group Departure Packages</h2>
        </div>
    </section>

    <section class="group-intro">
        <div class="container group-intro-inner">
            <div>
                <h3>Kilimanjaro &amp; Safari Group Departures</h3>
                <p>Join a small, guaranteed group — great for solo travellers and couples.</p>
            </div>
            <div>
                <p>Every departure is capped at 8 guests, led by two certified guides and follows a tried-and-tested itinerary with hand-picked lodges. Perfect for climbing Kilimanjaro with new friends or sharing the Serengeti with like-minded travellers.</p>
            </div>
        </div>
    </section>

    <!-- ============ GROUP DEPARTURE TRIPS ============ -->
    <section class="group-trips">
        <div class="container">

            <article class="trip-row">
                <div class="trip-info">
                    <span class="trip-days">7 Days</span>
                    <h3>Machame Route Kilimanjaro Climb</h3>
                    <div class="trip-meta">
                        <div class="trip-price"><strong>$1,969</strong><span>Per Person</span></div>
                        <div class="trip-availability">
                            <span class="avail-open"><i class="bi bi-check-circle-fill"></i> Open</span>
                            <a href="#" class="btn btn-yellow btn-sm">JOIN THE GROUP</a>
                        </div>
                    </div>
                </div>
                <div class="trip-image" style="background-image:url('https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=800&q=80');"></div>
            </article>

            <article class="trip-row reverse">
                <div class="trip-image" style="background-image:url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=800&q=80');"></div>
                <div class="trip-info">
                    <span class="trip-days">8 Days</span>
                    <h3>Lemosho Route Kilimanjaro Climb</h3>
                    <div class="trip-meta">
                        <div class="trip-price"><strong>$2,251</strong><span>Per Person</span></div>
                        <div class="trip-availability">
                            <span class="avail-open"><i class="bi bi-check-circle-fill"></i> Open</span>
                            <a href="#" class="btn btn-yellow btn-sm">JOIN THE GROUP</a>
                        </div>
                    </div>
                </div>
            </article>

            <article class="trip-row">
                <div class="trip-info">
                    <span class="trip-days">7 Days</span>
                    <h3>Serengeti Migration Safari</h3>
                    <div class="trip-meta">
                        <div class="trip-price"><strong>$2,651</strong><span>Per Person</span></div>
                        <div class="trip-availability">
                            <span class="avail-open"><i class="bi bi-check-circle-fill"></i> Open</span>
                            <a href="#" class="btn btn-yellow btn-sm">JOIN THE GROUP</a>
                        </div>
                    </div>
                </div>
                <div class="trip-image" style="background-image:url('https://images.unsplash.com/photo-1534177616072-ef7dc120449d?auto=format&fit=crop&w=800&q=80');"></div>
            </article>

        </div>
    </section>

    <!-- ============ REVIEWS ============ -->
    <section class="reviews">
        <div class="container">
            <div class="reviews-head">
                <h2>What Our Clients Say</h2>
                <div class="reviews-badge">
                    <span class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                    <strong>EXCELLENT</strong>
                    <span>Based on 1,087 reviews</span>
                    <img src="https://static.tacdn.com/img2/branding/tripadvisor_logo_transp_340x84.png" alt="TripAdvisor" class="tripadvisor-logo" />
                </div>
            </div>
            <div class="reviews-grid">
                <article class="review-card">
                    <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <h5>Trip of a lifetime</h5>
                    <p>From airport pickup to the last sundowner, Novella made us feel like family. Our guide Emmanuel is a living encyclopedia of the bush.</p>
                    <div class="review-author">
                        <img src="https://i.pravatar.cc/60?img=47" alt="" />
                        <div><strong>Sarah W.</strong><span>London, UK</span></div>
                    </div>
                </article>
                <article class="review-card">
                    <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <h5>Summited Kilimanjaro!</h5>
                    <p>The Lemosho crew was extraordinary. Porters, food, safety briefings — every day I felt looked after. We all reached Uhuru Peak.</p>
                    <div class="review-author">
                        <img src="https://i.pravatar.cc/60?img=12" alt="" />
                        <div><strong>Michael T.</strong><span>Tokyo, Japan</span></div>
                    </div>
                </article>
                <article class="review-card">
                    <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <h5>Perfect family safari</h5>
                    <p>Traveled with our 8 and 11 year olds. Pace was perfect, lodges were kid-friendly. Truly the trip of a lifetime.</p>
                    <div class="review-author">
                        <img src="https://i.pravatar.cc/60?img=32" alt="" />
                        <div><strong>The Hansens</strong><span>Oslo, Norway</span></div>
                    </div>
                </article>
                <article class="review-card">
                    <div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <h5>Photography dream</h5>
                    <p>Private vehicle, off-road permits, golden hour after golden hour. My best-ever wildlife portfolio came from this trip.</p>
                    <div class="review-author">
                        <img src="https://i.pravatar.cc/60?img=68" alt="" />
                        <div><strong>Anna K.</strong><span>Berlin, Germany</span></div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============ YELLOW DIVIDER ============ -->
    <div class="gradient-divider"></div>

    <!-- ============ VIDEOS ============ -->
    <section class="videos">
        <div class="container">
            <div class="section-title">
                <h2>Inspirational Videos</h2>
            </div>
            <div class="videos-grid">
                <a href="#" class="video-card" style="background-image:url('https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=600&q=80');">
                    <i class="bi bi-play-fill"></i>
                </a>
                <a href="#" class="video-card" style="background-image:url('https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=600&q=80');">
                    <i class="bi bi-play-fill"></i>
                </a>
                <a href="#" class="video-card" style="background-image:url('https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=600&q=80');">
                    <i class="bi bi-play-fill"></i>
                </a>
                <a href="#" class="video-card" style="background-image:url('https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=600&q=80');">
                    <i class="bi bi-play-fill"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ NEWS ============ -->
    <section class="news">
        <div class="container">
            <div class="section-title">
                <h2>News and Updates</h2>
            </div>
            <div class="news-grid">
                <article class="news-card">
                    <div class="news-img" style="background-image:url('https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=600&q=80');"></div>
                    <div class="news-body">
                        <span class="news-cat">Safari Tips</span>
                        <h4><a href="#">When is the best time to see the Great Migration?</a></h4>
                        <p>Month-by-month guide to following the wildebeest across the Serengeti-Mara ecosystem.</p>
                    </div>
                </article>
                <article class="news-card">
                    <div class="news-img" style="background-image:url('https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=600&q=80');"></div>
                    <div class="news-body">
                        <span class="news-cat">Kilimanjaro</span>
                        <h4><a href="#">Which Kilimanjaro route should you choose?</a></h4>
                        <p>Machame vs Lemosho vs Marangu — a climber's honest breakdown of every route.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============ RESOURCES ============ -->
    <section class="resources">
        <div class="container">
            <div class="section-title">
                <h2>Resources and Information</h2>
            </div>
            <div class="resources-grid">
                <a href="#" class="resource-btn"><i class="bi bi-award"></i> NOVELLA'S AWARDS <i class="bi bi-arrow-right"></i></a>
                <a href="#" class="resource-btn"><i class="bi bi-download"></i> DOWNLOAD BROCHURE <i class="bi bi-arrow-right"></i></a>
                <a href="#" class="resource-btn"><i class="bi bi-question-circle"></i> FAQ &amp; TRAVEL TIPS <i class="bi bi-arrow-right"></i></a>
                <a href="#" class="resource-btn"><i class="bi bi-shield-check"></i> RESPONSIBLE TRAVEL <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ============ BLOG CATEGORIES ============ -->
    <section class="blog-cats">
        <div class="container">
            <div class="section-title">
                <h2>From Our Blog</h2>
            </div>
            <div class="cats-grid">
                <a href="#" class="cat-card" style="background-image:url('https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=800&q=80');">
                    <div class="cat-overlay">
                        <h3>Climbing</h3>
                        <span>66 Articles</span>
                        <span class="cat-btn">Read Articles</span>
                    </div>
                </a>
                <a href="#" class="cat-card" style="background-image:url('https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=800&q=80');">
                    <div class="cat-overlay">
                        <h3>Safari</h3>
                        <span>14 Articles</span>
                        <span class="cat-btn">Read Articles</span>
                    </div>
                </a>
                <a href="#" class="cat-card" style="background-image:url('https://images.unsplash.com/photo-1589197331516-4d84b72ebde3?auto=format&fit=crop&w=800&q=80');">
                    <div class="cat-overlay">
                        <h3>Zanzibar</h3>
                        <span>4 Articles</span>
                        <span class="cat-btn">Read Articles</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ PARTNERS ============ -->
    <section class="partners">
        <div class="container">
            <div class="section-title">
                <h2>Our Partners</h2>
            </div>
            <div class="partners-inner">
                <a href="#" class="partner-logo"><img src="assets/partners/tato-2-e1690348892854.png" alt="TATO — Tanzania Association of Tour Operators" /></a>
                <a href="#" class="partner-logo"><img src="assets/partners/atta-e1690300992660.png" alt="ATTA" /></a>
                <a href="#" class="partner-logo"><img src="assets/partners/gstc-logo.png" alt="GSTC" /></a>
                <a href="#" class="partner-logo"><img src="assets/partners/ttssp-web.png" alt="TTSSP" /></a>
            </div>
        </div>
    </section>
<?php include __DIR__ . "/partials/footer.php"; ?>

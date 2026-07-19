<?php
$pageTitle       = "Journal &amp; Blog — Novella Safaris";
$pageDescription = "Stories from the bush, Kilimanjaro summit reports, Zanzibar guides and safari tips from the Novella team.";
$activeNav       = "blog";
include __DIR__ . "/partials/header.php";
?>

<section class="page-banner" style="background-image:url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1920&q=80');">
    <div class="container">
        <h1>Journal</h1>
        <div class="breadcrumb"><a href="index.php">Home</a> <i class="bi bi-chevron-right"></i> <span>Blog</span></div>
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
            <article class="blog-item">
                <div class="blog-item-img" style="background-image:url('https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=800&q=80');">
                    <span class="blog-item-cat">Safari</span>
                </div>
                <div class="blog-item-body">
                    <h3><a href="#">When is the best time to see the Great Migration?</a></h3>
                    <p>A month-by-month guide to following the wildebeest across the Serengeti-Mara ecosystem — river crossings, calving season, and the shoulder-season sweet spots.</p>
                    <div class="blog-item-meta"><span><i class="bi bi-calendar3"></i> 12 May 2026</span><span>6 min read</span></div>
                </div>
            </article>

            <article class="blog-item">
                <div class="blog-item-img" style="background-image:url('https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=800&q=80');">
                    <span class="blog-item-cat">Kilimanjaro</span>
                </div>
                <div class="blog-item-body">
                    <h3><a href="#">Which Kilimanjaro route should you choose?</a></h3>
                    <p>Machame vs Lemosho vs Marangu vs Rongai — a climber's honest breakdown of every route on the mountain.</p>
                    <div class="blog-item-meta"><span><i class="bi bi-calendar3"></i> 3 Apr 2026</span><span>9 min read</span></div>
                </div>
            </article>

            <article class="blog-item">
                <div class="blog-item-img" style="background-image:url('https://images.unsplash.com/photo-1589197331516-4d84b72ebde3?auto=format&fit=crop&w=800&q=80');">
                    <span class="blog-item-cat">Zanzibar</span>
                </div>
                <div class="blog-item-body">
                    <h3><a href="#">A local's guide to Stone Town in 48 hours</a></h3>
                    <p>Where to eat, where to wander, and the little-known corners the guidebooks miss.</p>
                    <div class="blog-item-meta"><span><i class="bi bi-calendar3"></i> 18 Mar 2026</span><span>5 min read</span></div>
                </div>
            </article>

            <article class="blog-item">
                <div class="blog-item-img" style="background-image:url('https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=800&q=80');">
                    <span class="blog-item-cat">Safari</span>
                </div>
                <div class="blog-item-body">
                    <h3><a href="#">What to pack for a Tanzania safari</a></h3>
                    <p>Layers, muted colours, camera gear — a packing list refined over 4,800 traveller trips.</p>
                    <div class="blog-item-meta"><span><i class="bi bi-calendar3"></i> 2 Mar 2026</span><span>4 min read</span></div>
                </div>
            </article>

            <article class="blog-item">
                <div class="blog-item-img" style="background-image:url('https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?auto=format&fit=crop&w=800&q=80');">
                    <span class="blog-item-cat">Kilimanjaro</span>
                </div>
                <div class="blog-item-body">
                    <h3><a href="#">Altitude sickness — what every climber needs to know</a></h3>
                    <p>Symptoms, prevention, and how our KPAP-certified guides keep 98% of our climbers on the mountain.</p>
                    <div class="blog-item-meta"><span><i class="bi bi-calendar3"></i> 14 Feb 2026</span><span>7 min read</span></div>
                </div>
            </article>

            <article class="blog-item">
                <div class="blog-item-img" style="background-image:url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=800&q=80');">
                    <span class="blog-item-cat">Culture</span>
                </div>
                <div class="blog-item-body">
                    <h3><a href="#">Meeting the Maasai — respectfully</a></h3>
                    <p>How to visit a Maasai village without falling into the tourist-trap trap. A guide to authentic cultural exchange.</p>
                    <div class="blog-item-meta"><span><i class="bi bi-calendar3"></i> 22 Jan 2026</span><span>6 min read</span></div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="inner-cta">
    <div class="container">
        <h2>Have a question? Talk to a human.</h2>
        <p>Blogs are great — but nothing beats a real chat with a Tanzania-based expert.</p>
        <a href="contact.php" class="btn btn-yellow btn-lg">Contact Us <i class="bi bi-arrow-right"></i></a>
    </div>
</section>

<?php include __DIR__ . "/partials/footer.php"; ?>

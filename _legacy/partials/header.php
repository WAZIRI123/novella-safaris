<?php
// Shared header partial
// Variables that pages may set BEFORE including this:
//   $pageTitle       — window/tab title
//   $pageDescription — meta description
//   $activeNav       — one of: home | trekking | safari | zanzibar | day-trips | other-country | special-packages | blog

$pageTitle       = $pageTitle       ?? 'Novella Safaris — Premier Tour Operator for the Best Safari in Tanzania';
$pageDescription = $pageDescription ?? 'Novella Safaris — the number one tour operator in Tanzania. Handcrafted safaris, Kilimanjaro treks and Zanzibar escapes.';
$activeNav       = $activeNav       ?? '';

function nav_active($key, $current) {
    return $key === $current ? ' class="active"' : '';
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

    <!-- ============ HEADER TOP (white) ============ -->
    <div class="header-top">
        <div class="container header-top-inner">
            <a href="index.php" class="brand">
                <img src="assets/logo.png" alt="Novella Tanzania — Safaris &amp; Trekking" />
            </a>
            <div class="tagline">The number one Tour Operator in Tanzania</div>
            <div class="header-top-right">
                <div class="quick-strip">
                    <a href="about.php"><i class="bi bi-people-fill"></i> About Us</a>
                    <a href="contact.php"><i class="bi bi-telephone-fill"></i> Contact Us</a>
                    <a href="resources.php"><i class="bi bi-file-earmark-pdf-fill"></i> Resources</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============ MAIN NAV (sticky) ============ -->
    <header class="main-nav" id="mainNav">
        <div class="container main-nav-inner">
            <a href="index.php" class="brand brand-mobile">
                <img src="assets/logo.png" alt="Novella Tanzania" />
            </a>
            <nav class="primary-nav" id="primaryNav">
                <ul>
                    <li><a href="index.php"<?= nav_active('home', $activeNav) ?>>Home</a></li>
                    <li class="has-dropdown">
                        <a href="trekking.php"<?= nav_active('trekking', $activeNav) ?>>Trekking <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="trekking.php#machame">Machame Route</a></li>
                            <li><a href="trekking.php#lemosho">Lemosho Route</a></li>
                            <li><a href="trekking.php#marangu">Marangu Route</a></li>
                            <li><a href="trekking.php#rongai">Rongai Route</a></li>
                            <li><a href="trekking.php#meru">Mount Meru</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="safari.php"<?= nav_active('safari', $activeNav) ?>>Safari <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="safari.php#serengeti">Serengeti National Park</a></li>
                            <li><a href="safari.php#ngorongoro">Ngorongoro Crater</a></li>
                            <li><a href="safari.php#tarangire">Tarangire National Park</a></li>
                            <li><a href="safari.php#manyara">Lake Manyara</a></li>
                        </ul>
                    </li>
                    <li><a href="zanzibar.php"<?= nav_active('zanzibar', $activeNav) ?>>Zanzibar</a></li>
                    <li><a href="day-trips.php"<?= nav_active('day-trips', $activeNav) ?>>Day Trips</a></li>
                    <li><a href="other-country.php"<?= nav_active('other-country', $activeNav) ?>>Other Country</a></li>
                    <li><a href="special-packages.php"<?= nav_active('special-packages', $activeNav) ?>>Special Packages</a></li>
                    <li><a href="blog.php"<?= nav_active('blog', $activeNav) ?>>Blog</a></li>
                </ul>
            </nav>

            <div class="nav-actions">
                <a href="contact.php" class="btn-plan"><i class="bi bi-briefcase-fill"></i> LET'S PLAN A TRIP</a>
                <button class="nav-toggle" id="navToggle" aria-label="Menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

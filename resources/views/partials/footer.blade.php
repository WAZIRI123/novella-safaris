<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-col">
            <a href="{{ route('home') }}" class="brand light">
                <img src="{{ asset('assets/logo-light.png') }}" alt="Novella Tanzania — Safaris &amp; Trekking" />
            </a>
            <p>Handcrafted Tanzania adventures since 2005. Licensed by TALA &amp; TATO. Proud KPAP partner.</p>
            <div class="socials">
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
        <div class="footer-col">
            <h5>USEFUL LINKS</h5>
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('about') }}#team">Our Team</a></li>
                <li><a href="{{ route('about') }}#sustainability">Sustainability</a></li>
                <li><a href="{{ route('resources') }}">Resources</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h5>POPULAR EXPERIENCES</h5>
            <ul>
                <li><a href="{{ route('tanzania-safaris') }}">Tanzania Safaris</a></li>
                <li><a href="{{ route('trekking') }}#machame">Kilimanjaro Machame Route</a></li>
                <li><a href="{{ route('day-trips') }}">Ngorongoro Crater Day Trip</a></li>
                <li><a href="{{ route('zanzibar') }}">Zanzibar Beach Escape</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h5>OUR CONTACTS</h5>
            <ul class="contact-list">
                <li><i class="bi bi-geo-alt"></i> Boma Road, Arusha, Tanzania</li>
                <li><i class="bi bi-telephone"></i> +255 754 000 000</li>
                <li><i class="bi bi-envelope"></i> info@novellasafaris.com</li>
                <li><i class="bi bi-clock"></i> 24/7 emergency line</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <span>&copy; {{ date('Y') }} Novella Safaris Ltd. All rights reserved.</span>
            <div>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>

<div class="fixed-side">
    <a href="{{ route('contact') }}" class="fixed-btn book-now"><i class="bi bi-calendar-check"></i> Book Now</a>
</div>

<a href="https://wa.me/255754000000" class="wa-float" aria-label="WhatsApp us"><i class="bi bi-whatsapp"></i> <span>WhatsApp us</span></a>

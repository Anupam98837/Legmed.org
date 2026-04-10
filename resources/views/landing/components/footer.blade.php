<style>
    /* ============================================================
   SECTION 7: SOCIAL
   ============================================================ */
.social-section {
    background: #f5f3ef;
    padding: 48px 40px;
    text-align: center;
}

.social-heading {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 36px;
    font-weight: 700;
    color: #111;
    margin-bottom: 12px;
}

.social-divider {
    width: 60px;
    height: 2px;
    background: #b8a090;
    margin: 0 auto 28px;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 16px;
}

.social-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: #A30000;
    text-decoration: none;
    transition: background 0.2s, transform 0.2s;
}

.social-btn:hover {
    background: #7a0000;
    transform: translateY(-2px);
}

/* ============================================================
   MAIN FOOTER
   ============================================================ */
.main-footer {
    background: #A30000;
    color: #fff;
}

.footer-inner {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 32px;
    padding: 48px 64px 40px;
}

.footer-heading {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 15px;
    color: #FFD700;
    margin-bottom: 18px;
}

.footer-heading-white {
    color: #fff;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
}

.footer-links li {
    margin-bottom: 8px;
}

.footer-links li a {
    font-size: 13.5px;
    color: rgba(255,255,255,0.88);
    text-decoration: none;
    font-family: 'Inter', sans-serif;
    transition: color 0.15s;
}

.footer-links li a:hover {
    color: #FFD700;
}

.footer-social {
    display: flex;
    gap: 12px;
    align-items: center;
    margin-top: 4px;
}

.footer-social a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: rgba(255,255,255,0.15);
    transition: background 0.15s;
}

.footer-social a:hover {
    background: rgba(255,255,255,0.28);
}


.footer-gallery {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6px;
}

.footer-gallery-img img {
    width: 100%;
    height: 100px;
    object-fit: cover;
    border: 1px solid rgba(255,255,255,0.3);
}

.footer-bottom {
    background: #7a0000;
    text-align: center;
    padding: 14px;
    font-size: 13px;
    color: rgba(255,255,255,0.88);
    font-family: 'Inter', sans-serif;
} 


/* ============================================================
   FOOTER RESPONSIVE MEDIA QUERIES
   ============================================================ */
 
@media (max-width: 1400px) {
    .footer-inner { padding: 40px 48px 36px; }
}
 
@media (max-width: 1200px) {
    .footer-inner { padding: 40px 36px 32px; gap: 24px; }
}
 
@media (max-width: 1024px) {
    .footer-inner { 
        grid-template-columns: 1fr 1fr; 
        gap: 24px; 
        padding: 36px 28px 28px; 
    }
    .footer-gallery-img img { height: 88px; }
}
 
@media (max-width: 768px) {
    .footer-inner { 
        grid-template-columns: 1fr 1fr; 
        gap: 20px; 
        padding: 28px 20px 24px; 
    }
    .footer-heading { font-size: 14px; margin-bottom: 14px; }
    .footer-links li a { font-size: 13px; }
    .footer-gallery-img img { height: 80px; }
    .footer-bottom { font-size: 12px; padding: 12px; }
}
 
@media (max-width: 600px) {
    .footer-inner { 
        grid-template-columns: 1fr; 
        padding: 24px 16px; 
        gap: 24px; 
    }
    .footer-gallery { grid-template-columns: repeat(4, 1fr); }
    .footer-gallery-img img { height: 70px; }
}
 
@media (max-width: 480px) {
    .footer-inner { padding: 20px 12px; }
    .footer-heading { font-size: 13.5px; }
    .footer-links li a { font-size: 12.5px; }
    .footer-bottom { font-size: 11.5px; padding: 10px; }
}
 
@media (max-width: 360px) {
    .footer-gallery { grid-template-columns: 1fr 1fr; }
    .footer-gallery-img img { height: 60px; }
}


</style>
{{-- Social Section --}}
<section class="social-section">
    <h2 class="social-heading">Join Us</h2>
    <div class="social-divider"></div>
    <div class="social-icons">
        <a href="#" class="social-btn"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
        <a href="#" class="social-btn"><svg width="20" height="20" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
        <a href="#" class="social-btn"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.95C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.96-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon fill="#A30000" points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/></svg></a>
    </div>
</section>

{{-- Main Footer --}}
<footer class="main-footer">
    <div class="footer-inner">
        <div class="footer-col">
            <h4 class="footer-heading">Administration Links</h4>
            <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Association</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
            <div class="footer-social">
                <a href="#"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
                <a href="#"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.95C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.96-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon fill="#A30000" points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/></svg></a>
                <a href="#"><svg width="20" height="20" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                <a href="#"><svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.259 5.63zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
            </div>
        </div>

        <div class="footer-col">
            <h4 class="footer-heading">Services</h4>
            <ul class="footer-links">
                <li><a href="#">Education Support</a></li>
                <li><a href="#">Medico-Legal Assistance</a></li>
                <li><a href="#">LegMed Pharmacy &amp; Opticals</a></li>
                <li><a href="#">LegMed Pharmacy &amp; Opticals</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4 class="footer-heading">Services</h4>
            <ul class="footer-links">
                <li><a href="#">Healthcare Licenses</a></li>
                <li><a href="#">Accreditation Support</a></li>
                <li><a href="#">Compliance Solutions</a></li>
                <li><a href="#">Run &amp; Operate</a></li>
                <li><a href="#">Health Scheme TPA Tie-Ups</a></li>
                <li><a href="#">Planning &amp; Design</a></li>
                <li><a href="#">Clinical Trial Support</a></li>
            </ul>
        </div>

        <div class="footer-col footer-col-gallery">
            <h4 class="footer-heading footer-heading-white">LegMed Foundation &amp; Research</h4>
            <div class="footer-gallery">
                <div class="footer-gallery-img"><img src="{{ asset('assets/media/images/web/Gallery1.webp') }}" alt="Gallery 1"></div>
                <div class="footer-gallery-img"><img src="{{ asset('assets/media/images/web/Gallery2.webp') }}" alt="Gallery 2"></div>
                <div class="footer-gallery-img"><img src="{{ asset('assets/media/images/web/Gallery3.webp') }}" alt="Gallery 3"></div>
                <div class="footer-gallery-img"><img src="{{ asset('assets/media/images/web/Gallery4.webp') }}" alt="Gallery 4"></div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>Copyright &copy; 2025 LegMed Foundation &amp; Research</p>
    </div>
</footer>

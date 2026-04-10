<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegMed Foundation & Research</title>
   <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/media/images/favicon/msit_logo.jpg') }}">

    {{-- Bootstrap + Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"/>

    {{-- Common UI --}}
    <link rel="stylesheet" href="{{ asset('assets/css/common/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common/home.css') }}">

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

@include('landing.components.header')
@include('landing.components.headerMenu')


{{-- ===================== SECTION 2: HERO ===================== --}}
<section class="hero-section">
    <div class="hero-grid">
        {{-- Left: Text --}}
        <div class="hero-left">
            <h1 class="hero-heading">Together, We Can Make A Difference</h1>
            <p class="hero-body">
                <strong>LegMed Foundation & Research</strong> was formally established in <strong>2025</strong>, born out of a shared vision and heartfelt collaboration among a group of friends committed to making a <strong>meaningful impact on society</strong>. What began as a collective aspiration soon evolved into a structured initiative focused on health, education, empowerment, and social upliftment.
            </p>
            <a href="#" class="show-more-link">
                SHOW MORE
                <span class="show-more">&#x2193;</span>
            </a>
        </div>

        {{-- Middle: Swami Vivekananda portrait --}}
        <div class="hero-middle">
            <img src="{{ asset('assets/media/images/web/Swami_Vivekananda.webp') }}"
                 alt="Swami Vivekananda" class="hero-portrait-bw">
        </div>

        {{-- Right: Spiritual figure + card + arches --}}
        <div class="hero-right">
            <img src="{{ asset('assets/media/images/web/Spiritual_Figure.webp') }}"
                 alt="Spiritual Figure" class="hero-portrait-color">
            <div class="sacred-card">
                <h3 class="sacred-title">Service Is Sacred</h3>
                <p class="sacred-text">At LegMed, we serve humanity with compassion and purpose—because to serve others is to serve the divine.</p>
            </div>
        </div>
    </div>
</section>

{{-- ===================== SECTION 3: PARALLAX CAROUSEL ===================== --}}
<section class="parallax-section">
    <div class="parallax-overlay"></div>
    <div class="parallax-content">
        <h2 class="parallax-heading">A Place For Everyone</h2>
        <p class="parallax-subtext">
            At LegMed Foundation, <strong>every life matters</strong>. We believe in creating safe, inclusive spaces where dignity, care, and opportunity are offered to all—regardless of background.
        </p>

        <div class="carousel-wrapper">
            <button class="carousel-btn carousel-prev" id="carouselPrev">&#8249;</button>
            <div class="carousel-track-outer">
                <div class="carousel-track" id="carouselTrack">
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service1.webp') }}" alt="Community Service 1">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service2.webp') }}" alt="Community Service 2">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service3.webp') }}" alt="Community Service 3">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service4.webp') }}" alt="Community Service 4">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service5.webp') }}" alt="Community Service 5">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service6.webp') }}" alt="Community Service 6">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service7.webp') }}" alt="Community Service 7">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service8.webp') }}" alt="Community Service 8">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service9.webp') }}" alt="Community Service 9">
                    </div>
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/media/images/web/Community_Service10.webp') }}" alt="Community Service 10">
                    </div>
                </div>
            </div>
            <button class="carousel-btn carousel-next" id="carouselNext">&#8250;</button>
        </div>

        <div class="carousel-dots" id="carouselDots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <a href="#" class="read-more-btn">READ MORE</a>
    </div>
</section>

{{-- ===================== SECTION 4: TESTIMONIAL & MISSION GRID ===================== --}}
<section class="testimonial-section">
    {{-- Quote Block --}}
    <div class="quote-block">
        <div class="quote-avatar">
            <img src="{{ asset('assets/media/images/web/Albert_Pike.webp') }}" alt="Albert Pike">
        </div>
        <div class="quote-content">
            <div class="quote-marks">&ldquo;&ldquo;</div>
            <blockquote class="quote-text">
                "What we have done for ourselves alone dies with us; what we have done for others and the world remains and is immortal."
            </blockquote>
            <cite class="quote-author">— Albert Pike</cite>
        </div>
    </div>

    {{-- 4-column mission grid --}}
    <div class="mission-grid">
        <div class="mission-col mission-text-col">
            <p>Inspired by the eternal message of love, compassion, and service found in all faiths, LegMed Foundation &amp; Research works tirelessly to uplift those in need. We believe that <strong>serving humanity is serving the divine</strong>—whether through healing the sick, educating the youth, or empowering the underserved.</p>
            <p style="margin-top:18px;">Your support helps us carry this sacred mission forward.</p>
        </div>
        <div class="mission-col mission-media-col">
            <img src="{{ asset('assets/media/images/web/Volunteer.webp') }}" alt="Volunteer">
        </div>
        <div class="mission-col mission-media-col mission-video-col">
            <div class="video-thumb">
                <img src="" alt="Video">
                <div class="play-btn">&#9654;</div>
                <div class="video-controls">
                    <span>&#128266;</span>
                    <span>&#8942;</span>
                </div>
            </div>
        </div>
        <div class="mission-col mission-media-col">
            <img src="{{ asset('assets/media/images/web/Eye_Exam.webp') }}" alt="Eye Exam">
        </div>
    </div>
</section>

{{-- ===================== SECTION 5A: FREE EYE SCREENING ===================== --}}
<section class="service-block eye-screening-block">
    <h2 class="service-heading eye-heading">FREE EYE SCREENING!</h2>
    <div class="eye-gallery">
        <div class="eye-img"><img src="{{ asset('assets/media/images/web/Eye_Camp1.webp') }}" alt="Eye Camp 1"></div>
        <div class="eye-img"><img src="{{ asset('assets/media/images/web/Eye_Camp2.webp') }}" alt="Eye Camp 2"></div>
        <div class="eye-img"><img src="{{ asset('assets/media/images/web/Eye_Camp3.webp') }}" alt="Eye Camp 3"></div>
        <div class="eye-img"><img src="{{ asset('assets/media/images/web/Eye_Camp4.webp') }}" alt="Eye Camp 4"></div>
    </div>
    <p class="service-helpline">For booking <strong>FREE EYE SCREENING</strong> camp call our help line...8272994771</p>
</section>

{{-- ===================== SECTION 5B: CANTEEN SERVICES ===================== --}}
<section class="service-block canteen-block">
    <div class="canteen-grid">
        <div class="canteen-left">
            <div class="canteen-gallery">
                <img src="{{ asset('assets/media/images/web/Canteen1.webp') }}" alt="Canteen 1">
                <img src="{{ asset('assets/media/images/web/Canteen2.webp') }}" alt="Canteen 2">
                <img src="{{ asset('assets/media/images/web/Canteen3.webp') }}" alt="Canteen 3">
            </div>
            <p class="service-helpline">To <strong>ORDER FOOD</strong> call our help line...8272994771</p>
        </div>
        <div class="canteen-divider"></div>
        <div class="canteen-right">
            <h2 class="service-heading canteen-heading">CANTEEN SERVICES</h2>
            <p class="canteen-text">
                At <strong>LEGMED's BIWS Canteen</strong>, we provide <strong>safe, hygienic, and affordable meals</strong> for patients, attendants, and visitors—so no one has to compromise on nutrition during treatment. Our meal planning is done with <strong>dietician consultation</strong> to ensure the food supports <strong>recovery and overall well-being</strong>, with a focus on consistent quality and care. As part of BIWS's broader <strong>"Health and Food For All"</strong> efforts, the canteen is designed to keep nourishing food accessible every day.
            </p>
        </div>
    </div>
</section>

{{-- ===================== SECTION 6A: INITIATIVES ===================== --}}
<section class="initiatives-section">
    <h2 class="initiatives-heading">Join Us in Making a Difference</h2>
    <div class="initiatives-divider"></div>
    <p class="initiatives-subtext">
        At LegMed Foundation &amp; Research, we invite you to engage with the world through faith and service. Inspired by the teachings of Swami Vivekananda and Swami Pranabananda Maharaj, we are dedicated to transforming lives with compassion and purpose. Explore how you can contribute:
    </p>

    <div class="initiatives-icons">
        <div class="initiative-item">
            <div class="initiative-circle">
                <svg width="30" height="30" fill="none" stroke="#A30000" stroke-width="2" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="#A30000"/></svg>
            </div>
            <a href="#" class="initiative-label">Health for All</a>
        </div>
        <div class="initiative-item">
            <div class="initiative-circle">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#A30000" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
            </div>
            <a href="#" class="initiative-label">Education for All</a>
        </div>
        <div class="initiative-item">
            <div class="initiative-circle">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#A30000" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
            </div>
            <a href="#" class="initiative-label">Food for All</a>
        </div>
        <div class="initiative-item">
            <div class="initiative-circle">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#A30000" stroke-width="2"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="2"/><path d="M6 12h.01M18 12h.01"/></svg>
            </div>
            <a href="#" class="initiative-label">Skill Enhancement Programs</a>
        </div>
        <div class="initiative-item">
            <div class="initiative-circle">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#A30000" stroke-width="2"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8M15 18h-5M10 6h8v4h-8z"/></svg>
            </div>
            <a href="#" class="initiative-label">Woman &amp; Girls Empowerment</a>
        </div>
    </div>

    <div style="text-align:center;margin-top:40px;">
        <a href="#" class="view-details-btn">VIEW DETAILS</a>
    </div>
</section>

{{-- ===================== SECTION 6B: TEAM ===================== --}}
<section class="team-section">
    <div class="team-intro">
        <h2 class="team-heading">Who We Are</h2>
        <p class="team-body">
            <strong>LegMed Foundation &amp; Research</strong> was formally established in <strong>2025</strong>, born out of a shared vision and heartfelt collaboration among a group of friends committed to making a <strong>meaningful impact on society</strong>. What began as a collective aspiration soon evolved into a structured initiative focused on health, education, empowerment, and social upliftment.
        </p>
    </div>

    <div class="team-grid">
        <div class="team-card">
            <div class="team-photo">
                <img src="{{ asset('assets/media/images/web/Dr.Arunalok_Bhattacharya.webp') }}" alt="Dr. Arunalok Bhattacharya">
            </div>
            <div class="team-label">
                <div class="team-name">Dr. Arunalok Bhattacharya</div>
                <div class="team-title">Deputy Director, Institute of Child Health</div>
            </div>
        </div>
        <div class="team-card">
            <div class="team-photo">
                <img src="{{ asset('assets/media/images/web/Mr.Sumanta_Chatterjee.webp') }}" alt="Mr. Sumanta Chatterjee">
            </div>
            <div class="team-label">
                <div class="team-name">Mr. Sumanta Chatterjee</div>
                <div class="team-title">Dy. Director, Techno India Group</div>
            </div>
        </div>
        <div class="team-card">
            <div class="team-photo">
                <img src="{{ asset('assets/media/images/web/Mr.Arijit_Dutta.webp') }}" alt="Mr. Arijit Dutta">
            </div>
            <div class="team-label">
                <div class="team-name">Mr. Arijit Dutta</div>
                <div class="team-title">Group Head – Human Resources, Techno India Group</div>
            </div>
        </div>
        <div class="team-card">
            <div class="team-photo">
                <img src="{{ asset('assets/media/images/web/Ms.Mitali_Chatterjee.webp') }}" alt="Ms. Mitali Chatterjee">
            </div>
            <div class="team-label">
                <div class="team-name">Ms. Mitali Chatterjee</div>
                <div class="team-title">Director, LegMed Healthcare Solutions Pvt. Ltd.</div>
            </div>
        </div>
        <div class="team-card">
            <div class="team-photo">
                <img src="{{ asset('assets/media/images/web/Mr.Palash_Chatterjee.webp') }}" alt="Mr. Palash Chatterjee">
            </div>
            <div class="team-label">
                <div class="team-name">Mr. Palash Chatterjee</div>
                <div class="team-title">Eminent IT Personnel</div>
            </div>
        </div>
        <div class="team-card">
            <div class="team-photo">
                <img src="{{ asset('assets/media/images/web/Adv.Tamal_Chatterjee.webp') }}" alt="Adv. Tamal Chatterjee">
            </div>
            <div class="team-label">
                <div class="team-name">Adv. Tamal Chatterjee</div>
                <div class="team-title">Director</div>
            </div>
        </div>
        <div class="team-card">
            <div class="team-photo">
                <img src="{{ asset('assets/media/images/web/Dr.Anamitra_Jana.webp') }}" alt="Dr. Anamitra Jana">
            </div>
            <div class="team-label">
                <div class="team-name">Dr. Anamitra Jana</div>
                <div class="team-title">Director</div>
            </div>
        </div>
    </div>
</section>

@include('landing.components.footer')

<script src="{{ asset('assets/js/home.js') }}"></script>
</body>
</html>

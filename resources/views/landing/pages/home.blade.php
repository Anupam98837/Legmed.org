{{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  {{-- ✅ Server-side meta tags (SEO + share friendly) --}}
@include('landing.components.metaTags')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWTGXP6R');</script>
<!-- End Google Tag Manager -->

<link rel="canonical" href="https://msit.edu.in/">
<meta property="og:title" content="MSIT Kolkata | Best Engineering College">
<meta property="og:description" content="Top BTech, MBA, MCA college in Kolkata with strong placements.">
<meta property="og:image" content="https://msit.edu.in/assets/media/images/og-image.jpg">
<meta property="og:url" content="https://msit.edu.in/">
<meta property="og:type" content="website">
 
 
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "CollegeOrUniversity",
  "name": "Meghnad Saha Institute of Technology",
  "url": "https://msit.edu.in",
  "address": {
    "@@type": "PostalAddress",
    "addressLocality": "Kolkata",
    "addressRegion": "West Bengal",
    "addressCountry": "India"
  }
}
</script>

<!-- <title>{{ config('app.name','College Portal') }} — Home</title> -->
<title>MSIT Kolkata | Top Engineering, BTech, BCA & BBA College in West Bengal</title>

<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/media/images/favicon/msit_logo.jpg') }}">

{{-- Bootstrap + Icons --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"/>

{{-- Common UI --}}
<link rel="stylesheet" href="{{ asset('assets/css/common/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/common/home.css') }}">

@php
/**
* ✅ IMPORTANT:
* Only use THESE APIs (as per your routes). No /full usage.
* Page will load fast: above-fold loads sequentially; below-fold loads on scroll.
*
* ✅ NOTE:
* Recruiters dynamic API removed from this page because the full recruiters module is included below.
*/
$homeApis = $homeApis ?? [
// Above-fold (loads immediately one-by-one)
'hero' => url('/api/public/grand-homepage/hero-carousel'),
'noticeMarquee' => url('/api/public/grand-homepage/notice-marquee'),
'infoBoxes' => url('/api/public/grand-homepage/quick-links'),
'nvaRow' => url('/api/public/grand-homepage/notice-board'),

// Lazy (loads on scroll)
'stats' => url('/api/public/grand-homepage/stats'),
'achvRow' => url('/api/public/grand-homepage/activities'),
'placementNotices'=> url('/api/public/grand-homepage/placement-notices'),

'testimonials' => url('/api/public/grand-homepage/successful-entrepreneurs'),
'alumni' => url('/api/public/grand-homepage/alumni-speak'),
'success' => url('/api/public/grand-homepage/success-stories'),
'courses' => url('/api/public/grand-homepage/courses'),
];
@endphp

<style>
  
/* ============================================================
   home.css — LegMed Foundation Homepage
   Uses main.css variables where applicable
   ============================================================ */

/* ---------- Reset & Base ---------- */
*, *::before, *::after {
     box-sizing: border-box;
     margin: 0;
     padding: 0;
}

body {
    font-family: 'Inter', sans-serif;
    color: #1a1a1a;
    background: #fff;
    overflow-x: hidden;
}

img { display: block; max-width: 100%; height: auto; }
a { text-decoration: none; color: inherit; }
ul { list-style: none; }

/* ============================================================
   SIDEBAR RIBBON
   ============================================================ */
.sidebar-ribbon {
    position: fixed;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    z-index: 9999;
    background: #1a2b4a;
    width: 32px;
    height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}


.sidebar-ribbon span {
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    color: #FFD700;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 11px;
    letter-spacing: 0.5px;
    white-space: nowrap;
}

/* ============================================================
   HEADER
   ============================================================ */
.site-header {

    z-index: 1000;
    width: 100%;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

/* Top tier */
.header-top {
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 48px 10px 48px;
    min-height: 75px;
}

.brand-name {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 22px;
    color: #A30000;
    line-height: 1.2;
}

.brand-tagline {
    font-size: 14px;
    color: #1a1a1a;
    margin-top: 2px;
    font-family: 'Inter', sans-serif;
}

/* LM Logo */
/* Logo Size Fix */
.header-logo {
    display: flex;
    align-items: center;
}

.logo-image {
    width: 110px;           /* Adjusted size - looks balanced */
    height: auto;
    max-height: 85px;
    object-fit: contain;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
}

/* Optional: Make logo slightly larger on hover */
.logo-image:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}

/* Make Donate button stand out */
.donate-pill {
    background: #FFD700 !important;
    color: #A30000 !important;
    font-weight: 900 !important;
}

/* Navigation bar */
.header-nav {
    background: #A30000;
    padding: 10px 0;
    width: 100%;
}

.nav-list {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
    padding: 0 20px;
}

.nav-pill {
    display: inline-block;
    background: #FFD700;
    color: #A30000;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 13px;
    padding: 7px 16px;
    border-radius: 999px;
    transition: background 0.18s ease, color 0.18s ease;
    white-space: nowrap;
}

.nav-pill:hover,
.nav-list li .nav-pill.active {
    background: #e6c200;
    color: #7a0000;
}

.nav-arrow {
    font-size: 9px;
    margin-left: 3px;
}

/* Dropdown */
.has-dropdown {
    position: relative;
}

.has-dropdown .dropdown-nav {
    display: none;
    position: absolute;
    top: calc(100% + 6px);
    left: 0;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    min-width: 180px;
    z-index: 2000;
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    padding: 6px 0;
}

.has-dropdown:hover .dropdown-nav {
    display: block;
}

.dropdown-nav li a {
    display: block;
    padding: 8px 16px;
    font-size: 13px;
    color: #f5f0f0;
    background-color: #A30000;
    font-family: 'Inter', sans-serif;
    transition: background 0.15s;
}

.dropdown-nav li a:hover {
    background: #f5f0f0;
    color: #A30000;
}

/* ============================================================
   SECTION 2: HERO
   ============================================================ */

.hero-section {
    padding: 40px 40px 20px 64px;
    background: #fff;
}

.hero-grid {
    display: grid;
    grid-template-columns: 40% 30% 30%;
    gap: 0;
    align-items: stretch;
}

/* Left */
.hero-left {
    padding-right: 30px;
    padding-top: 20px;
    padding-bottom: 20px;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.hero-heading {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 52px;
    font-weight: 700;
    color: #1a1a1a;
    line-height: 1.1;
    margin-bottom: 28px;
}

.hero-body {
    font-size: 14px;
    color: #555;
    line-height: 1.7;
    margin-bottom: 0;
}

.hero-body strong {
    color: #1a1a1a;
}

.show-more-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #A30000;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 0.5px;
    border-bottom: 2px solid #A30000;
    padding-bottom: 2px;
    text-decoration: none;
    margin-top: 20px;
    width: fit-content;
    align-self: flex-start;
}

.show-more-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 22px;
    height: 22px;
    border: 2px solid #A30000;
    border-radius: 50%;
    font-size: 13px;
    color: #A30000;
}

/* Middle */
.hero-middle {
    padding: 0; /* Removed padding to eliminate gap */
    display: flex;
    flex-direction: column;
    height: 98%;
}

.hero-portrait-bw {
    width: 100%;
    height: 83%;
    object-fit: cover;
    object-position: top;
    display: block;
}

/* Right */
.hero-right {
    padding-left: 15px; /* Added 15px gap between middle and right image */
    display: flex;
    flex-direction: column;
    gap: 0;
    height: 100%;
    justify-content: flex-start;
}

.hero-portrait-color {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    padding: 0;
    flex-shrink: 0;
}

.hero-portrait-color img {
    width: 100%;
    max-width: 350px;
    height: auto;
    max-height: 380px;
    object-fit: contain;
    display: block;
}

.sacred-card {
    background: #fff;
    border: 1px solid #e5e5e5;
    padding: 16px 18px;
    margin-top: 0;
    width: 100%;
    flex-shrink: 0;
}

.sacred-title {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 17px;
    font-weight: 700;
    color: #1a1a1a;
    text-align: center;
    margin-bottom: 10px;
}

.sacred-text {
    font-size: 13px;
    color: #555;
    line-height: 1.6;
    text-align: justify;
}


/* ============================================================
   SECTION 3: PARALLAX CAROUSEL
   ============================================================ */
.parallax-section {
    position: relative;
    background-image: url('https://images.unsplash.com/photo-1504813184591-01572f98c85f?w=1600&q=80');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 60px 40px 60px;
    text-align: center;
    min-height: 650px;
}

.parallax-overlay {
    position: absolute;
    inset: 0;
    background: rgba(120, 20, 20, 0.72);
    z-index: 0;
}

.parallax-content {
    position: relative;
    z-index: 1;
}

.parallax-heading {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 20px;
}

.parallax-subtext {
    font-size: 16px;
    color: rgba(255,255,255,0.92);
    max-width: 660px;
    margin: 0 auto 36px;
    line-height: 1.7;
}

.parallax-subtext strong {
    color: #fff;
}

/* Carousel */
.carousel-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
}

.carousel-btn {
    background: transparent;
    border: none;
    color: #fff;
    font-size: 44px;
    cursor: pointer;
    line-height: 1;
    padding: 0 8px;
    transition: opacity 0.2s;
    z-index: 2;
}

.carousel-btn:hover {
    opacity: 0.75;
}

.carousel-track-outer {
    overflow: hidden;
    width: 860px;
}

.carousel-slide {
    flex: 0 0 calc((100% - 32px) / 3);
}

.carousel-slide img {
    width: 270px;
    height: 270px;
    object-fit: cover;
    border-radius: 10px;
    border: 2px solid rgba(255,255,255,0.75);
}

.carousel-track {
    display: flex;
    gap: 16px;
    transition: transform 0.4s ease;
}

.carousel-slide {
    flex-shrink: 0;
}

.carousel-dots {
    display: flex;
    gap: 6px;
    justify-content: center;
    margin-bottom: 28px;
    flex-wrap: wrap;
}

.dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: rgba(255,255,255,0.45);
    display: inline-block;
    cursor: pointer;
    transition: background 0.2s;
}

.dot.active {
    background: #fff;
}

.read-more-btn {
    display: inline-block;
    background: #C0392B;
    color: #fff;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1.5px;
    padding: 14px 48px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: background 0.2s;
}

.read-more-btn:hover {
    background: #a93226;
}

/* ============================================================

   SECTION 4: TESTIMONIAL & MISSION GRID

   ============================================================ */

.testimonial-section {

    background: #fff;

    padding: 60px 320px;           /* Matched with Eye Screening */

}
 
.testimonial-section .container {

    max-width: 1200px;

    margin: 0 auto;

}
 
.quote-block {

    display: grid;
    grid-template-columns: 20% 80%;

    /* align-items: flex-start; */

    /* gap: 36px; */

    margin-bottom: 40px;

}

 
.quote-avatar img {

    width: 200px;

    height: 200px;
    
    border-radius: 50%;

    object-fit: cover;

    filter: grayscale(100%);

    border: 3px solid #e0e0e0;

}
 
.quote-content {

    flex: 1;

    position: relative;

}
 
.quote-marks {

    font-family: Georgia, serif;

    font-size: 80px;

    color: #e8d5c5;

    line-height: 0.6;

    margin-bottom: 16px;

    letter-spacing: -5px;

}
 
.quote-text {

    font-family: 'Playfair Display', Georgia, serif;

    font-size: 28px;

    font-weight: 600;

    color: #111;

    line-height: 1.4;

    margin-bottom: 14px;

    font-style: normal;

}
 
.quote-author {

    font-size: 15px;

    font-style: italic;

    color: #555;

    font-weight: 600;

}
 
/* Mission Grid */

.mission-grid {

    display: grid;

    grid-template-columns: 50% 16.6% 16.6% 16.6%;

    border: 1px solid #d0d0d0;

    overflow: hidden;

    margin-top: 50px;

}
 
.mission-col {

    border-right: 1px solid #d0d0d0;

}

.mission-media-col{
    height: 306px;
    width: 185px;
    position: relative;
}
 
.mission-col:last-child {

    border-right: none;

}
 
.mission-text-col {

    padding: 30px 26px;

    background: #fff;

    display: flex;

    flex-direction: column;

    justify-content: center;

}
 
.mission-text-col p {

    font-size: 13.5px;

    color: #555;

    line-height: 1.75;

}
 
.mission-text-col strong {

    color: #1a1a1a;

}
 


.video-thumb {

    width: 100%;

    height: 250px;

    object-fit: cover;

    display: block;

}
 
.video-thumb {

    position: relative;

    background: #111;

    overflow: hidden;

}
 
.play-btn {

    position: absolute;

    top: 50%;

    left: 50%;

    transform: translate(-50%, -50%);

    width: 44px;

    height: 44px;

    background: rgba(255,255,255,0.9);

    border-radius: 50%;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 16px;

    color: #333;

    cursor: pointer;

}
 
.video-controls {

    position: absolute;

    bottom: 8px;

    right: 10px;

    display: flex;

    gap: 10px;

    color: #fff;

    font-size: 14px;

}
 

/* ============================================================
   FREE EYE SCREENING SECTION (with side padding)
   ============================================================ */
.eye-screening-section {
    padding: 60px 48px;
    background: #fff;
    border-top: 1px solid #eee;
}
 
.eye-screening-block {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px 20px;
    margin-bottom: 50px;
}
 
.eye-gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-top: 30px;
}
 
.eye-img img {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-radius: 8px;
}

/* ============================================================

   SECTION 5B: CANTEEN SERVICES (Fixed with proper padding)

   ============================================================ */

.canteen-section {

    background: #fff;

    padding: 60px 48px;           /* Matched with Eye Screening */

}
 
.canteen-block {

    max-width: 1200px;

    margin: 0 auto;

    border: 1px solid #ccc;

    padding: 0;

    overflow: hidden;

}
 
.canteen-grid {

    display: grid;

    grid-template-columns: 1fr 1px 1fr;

    min-height: 320px;

}
 
.canteen-left {

    padding: 32px 28px 28px;

    display: flex;

    flex-direction: column;

    justify-content: space-between;

}
 
.canteen-gallery {

    display: flex;

    gap: 12px;

    align-items: flex-start;

    margin-bottom: 20px;

}
 
.canteen-gallery img {

    flex: 1;
    height: auto;
    width: 158px;;

    object-fit: contain;           /* Changed from contain to cover for better look */

    border-radius: 6px;

}
 
.canteen-divider {

    background: #ccc;

    width: 1px;

    align-self: stretch;

}
 
.canteen-right {

    padding: 32px 32px;

    display: flex;

    flex-direction: column;

    justify-content: center;

}
 
.canteen-heading {

    color: #A30000;

    text-align: center;

    margin-bottom: 20px;

    font-size: 24px;

    font-weight: 700;

}
 
.canteen-text {

    font-size: 14px;

    color: #1a1a1a;

    line-height: 1.8;

    text-align: justify;

}
 
.canteen-text strong {

    color: #1a1a1a;

}
 

/* ============================================================
   SECTION 6A: INITIATIVES (Fixed - Consistent spacing between icons)
   ============================================================ */
.initiatives-section {
    background: #f5f3ef;
    padding: 60px 48px;           /* Matched with Eye Screening */
    text-align: center;
    margin-top: 80px;
}
 
.initiatives-section .container {
    max-width: 1200px;
    margin: 0 auto;
}
 
.initiatives-heading {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 40px;
    font-weight: 700;
    color: #111;
    margin-bottom: 12px;
}
 
.initiatives-divider {
    width: 60px;
    height: 3px;
    background: #A30000;
    margin: 0 auto 24px;
    border-radius: 2px;
}
 
.initiatives-subtext {
    font-size: 15px;
    color: #555;
    max-width: 800px;
    margin: 0 auto 48px;
    line-height: 1.75;
}
 
/* Initiatives Icons - Fixed consistent spacing */
.initiatives-icons {
    display: flex;
    justify-content: center;
    gap: 48px;                    /* Consistent gap between items */
    flex-wrap: wrap;
    max-width: 1100px;
    margin: 0 auto;               /* Center the entire row */
    padding: 0 20px;              /* Safe side padding inside container */
}
 
.initiative-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 14px;
    max-width: 130px;
    flex: 0 0 130px;              /* Fixed width to prevent stretching */
}
 
.initiative-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 2px solid #A30000;
    display: flex;
    align-items: center;
    justify-content: center;
    background: transparent;
    transition: background 0.2s;
    flex-shrink: 0;
}
 
.initiative-circle:hover {
    background: rgba(163,0,0,0.06);
}
 
.initiative-label {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 14px;
    font-weight: 600;
    color: #1a1a1a;
    text-align: center;
    text-decoration: underline;
    line-height: 1.4;
}
 
.view-details-btn {
    display: inline-block;
    background: #C0392B;
    color: #fff;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 1.5px;
    padding: 14px 48px;
    text-decoration: none;
    transition: background 0.2s;
    margin-top: 30px;
}
 
.view-details-btn:hover {
    background: #a93226;
}

/* ============================================================
   WHO WE ARE / MISSION SECTION (with side padding)
   ============================================================ */
.team-section {
    padding: 60px 350px;
    background: #fff;
}

.team-body{
    font-size: 14px;

}
 
.team-grid {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;   /* adjust if your actual structure differs */
    gap: 24px;
    align-items: start;
}



/* ============================================================
   RESPONSIVE — Full multi-device coverage
   Breakpoints:
     1400px  Large desktop / wide laptop
     1200px  Standard laptop / small desktop
     1024px  Landscape tablet / small laptop
      768px  Portrait tablet
      600px  Large mobile / phablet
      480px  Standard mobile
      360px  Small / budget mobile
   ============================================================ */

@media (max-width: 1400px) {
    .hero-section          { padding: 40px 40px 20px 56px; }
    .hero-heading          { font-size: 48px; }
    .footer-inner          { padding: 40px 48px 36px; }
    .testimonial-section   { padding: 50px 48px 40px; }
}

/* ----------------------------------------------------------
   1200px — Standard laptop
   ---------------------------------------------------------- */
@media (max-width: 1200px) {
    /* Header */
    .header-top            { padding: 10px 32px; }
    .brand-name            { font-size: 19px; }

    /* Nav */
    .nav-pill              { font-size: 12px; padding: 6px 13px; }

    /* Hero */
    .hero-section          { padding: 32px 32px 16px 48px; }
    .hero-grid             { grid-template-columns: 40% 30% 30%; }
    .hero-heading          { font-size: 42px; }

    /* Carousel */
    .carousel-track-outer  { width: 780px; }
    .carousel-slide img    { width: 240px; height: 340px; }

    /* Testimonial */
    .testimonial-section   { padding: 44px 36px 36px; }
    .quote-text            { font-size: 24px; }

    /* Service blocks */
    .eye-screening-block   { margin: 20px 32px; }
    .canteen-block         { margin: 0 32px 24px; }

    /* Initiatives */
    .initiatives-heading   { font-size: 34px; }
    .initiatives-icons     { gap: 36px; }

    /* Team */
    .team-section          { padding: 48px 32px; }
    .team-heading          { font-size: 34px; }

    /* Footer */
    .footer-inner          { padding: 40px 36px 32px; gap: 24px; }
}

/* ----------------------------------------------------------
   1024px — Landscape tablet / small laptop
   ---------------------------------------------------------- */
@media (max-width: 1024px) {
    /* Sidebar */
    .sidebar-ribbon        { width: 28px; height: 190px; }
    .sidebar-ribbon span   { font-size: 10px; }

    /* Header */
    .header-top            { padding: 10px 24px; min-height: 65px; }
    .brand-name            { font-size: 17px; }
    .brand-tagline         { font-size: 13px; }
    .lm-logo               { padding: 8px 10px; min-width: 78px; }
    .logo-lm               { font-size: 24px; }

    /* Nav — allow 2 rows */
    .nav-pill              { font-size: 11.5px; padding: 6px 11px; }
    .nav-list              { gap: 7px; padding: 0 12px; }

    /* Hero — collapse middle column, show left + right stacked on right */
    .hero-section          { padding: 28px 24px 16px 40px; }
    .hero-grid             { grid-template-columns: 44% 56%; }
    .hero-middle           { display: none; }
    .hero-heading          { font-size: 36px; }
    .hero-body             { font-size: 13.5px; }

    /* Parallax */
    .parallax-heading      { font-size: 38px; }
    .parallax-subtext      { font-size: 14px; }
    .carousel-track-outer  { width: 680px; max-width: 75vw; }
    .carousel-slide img    { width: 210px; height: 300px; }

    /* Testimonial */
    .testimonial-section   { padding: 36px 24px 32px; }
    .quote-text            { font-size: 21px; }
    .mission-grid          { grid-template-columns: 1fr 1fr; }

    /* Eye screening */
    .eye-gallery           { grid-template-columns: repeat(2, 1fr); }
    .eye-img img           { height: 220px; }
    .eye-screening-block   { margin: 16px 24px; padding: 22px 22px; }

    /* Canteen */
    .canteen-block         { margin: 0 24px 20px; }
    .canteen-gallery img   { height: 160px; }

    /* Initiatives */
    .initiatives-section   { padding: 48px 24px; }
    .initiatives-heading   { font-size: 30px; }
    .initiatives-subtext   { font-size: 14px; }
    .initiatives-icons     { gap: 28px; }
    .initiative-circle     { width: 70px; height: 70px; }

    /* Team */
    .team-section          { padding: 40px 24px; }
    .team-intro            { grid-template-columns: 40% 60%; gap: 32px; }
    .team-heading          { font-size: 30px; }
    .team-grid             { grid-template-columns: repeat(2, 1fr); gap: 16px; }
    .team-photo img        { height: 300px; }

    /* Footer */
    .footer-inner          { grid-template-columns: 1fr 1fr; gap: 24px; padding: 36px 28px 28px; }
    .footer-gallery-img img { height: 88px; }
}

/* ----------------------------------------------------------
   768px — Portrait tablet
   ---------------------------------------------------------- */
@media (max-width: 768px) {
    
    /* Header */
    .header-top            { padding: 10px 16px; min-height: 60px; }
    .brand-name            { font-size: 16px; }
    .brand-tagline         { font-size: 12px; }
    .sidebar-ribbon {
        display:flex;
        width:22px;
        height:180px;
    }

    /* Mobile nav toggle */
    .nav-hamburger         { display: flex; }
    .nav-list              { flex-direction: column; align-items: flex-start; gap: 4px;
                             padding: 10px 16px; display: none; }
    .nav-list.nav-open     { display: flex; }
    .nav-pill              { font-size: 13px; padding: 8px 16px; border-radius: 999px;
                             width: 100%; text-align: center; }

    /* Hero */
    .hero-section          { padding: 24px 16px 20px 16px; }
    .hero-grid             { grid-template-columns: 1fr; gap: 24px; }
    .hero-middle           { display: block; }
    .hero-portrait-bw      { height: 374px; width: 400px; object-fit: contain; }
    .hero-portrait-color   { height: 374px; width: 400px; object-fit:contain;}
    .hero-heading          { font-size: 32px; margin-bottom: 18px; }
    .hero-body             { font-size: 13.5px; margin-bottom: 24px; }
    .hero-left             { padding-right: 0; }

    /* Parallax */
    .parallax-section      { background-attachment: scroll; padding: 44px 16px 44px; min-height: auto; }
    .parallax-heading      { font-size: 30px; }
    .parallax-subtext      { font-size: 13.5px; max-width: 100%; }
    .carousel-track-outer  { width: 560px; max-width: 85vw; }
    .carousel-slide img    { width: 170px; height: 260px; }
    .read-more-btn         { padding: 12px 36px; font-size: 13px; }

    /* Testimonial
    .testimonial-section   { padding: 28px 16px 24px; }
    .quote-block           { flex-direction: column; gap: 20px; align-items: flex-start; }
    .quote-avatar img      { width: 200px; height: 200px; }
    .quote-text            { font-size: 18px; }
    .quote-marks           { font-size: 64px; } */
    .mission-grid          { grid-template-columns: 1fr 1fr; }
    .mission-text-col      { grid-column: 1 / -1; padding: 22px 18px; }

    /* Eye screening */
    .eye-screening-block   { margin: 14px 16px; padding: 20px 16px; }
    .eye-gallery           { grid-template-columns: repeat(2, 1fr); gap: 8px; }
    .eye-img img           { height: 190px; }
    .service-helpline      { font-size: 13.5px; }

    /* Canteen */
    .canteen-block         { margin: 0 16px 20px; }
    .canteen-grid          { grid-template-columns: 1fr; }
    .canteen-divider       { display: none; }
    .canteen-left          { padding: 20px 16px; object-fit: contain; }
    .canteen-right         { padding: 20px 16px; border-top: 1px solid #ccc; }
    .canteen-gallery img   { height: 100%; width: 100%; object-fit: contain; }
    .canteen-heading       { font-size: 18px; }
    .canteen-text          { font-size: 13.5px; }

    /* Initiatives */
    .initiatives-section   { padding: 40px 16px; }
    .initiatives-heading   { font-size: 26px; }
    .initiatives-subtext   { font-size: 13.5px; }
    .initiatives-icons     { gap: 20px; }
    .initiative-item       { max-width: 110px; }
    .initiative-circle     { width: 64px; height: 64px; }
    .initiative-label      { font-size: 12.5px; }
    .view-details-btn      { padding: 12px 36px; font-size: 12px; }

    /* Team */
    .team-section          { padding: 36px 16px; }
    .team-intro            { grid-template-columns: 1fr; gap: 16px; margin-bottom: 28px; }
    .team-heading          { font-size: 28px; }
    .team-grid             { grid-template-columns: repeat(2, 1fr); gap: 14px; }
    .team-photo img        { height: 260px; }
    .team-name             { font-size: 14px; }
    .team-title            { font-size: 11px; }

    /* Social */
    .social-section        { padding: 36px 16px; }
    .social-heading        { font-size: 28px; }

    /* Footer */
    .footer-inner          { grid-template-columns: 1fr 1fr; gap: 20px; padding: 28px 20px 24px; }
    .footer-heading        { font-size: 14px; margin-bottom: 14px; }
    .footer-links li a     { font-size: 13px; }
    .footer-gallery-img img { height: 80px; }
    .footer-bottom         { font-size: 12px; padding: 12px; }
}

/* ----------------------------------------------------------
   600px — Large mobile / phablet
   ---------------------------------------------------------- */
@media (max-width: 600px) {
    /* Header */
    .brand-name            { font-size: 14.5px; }
    .brand-tagline         { font-size: 11.5px; }
    .lm-logo               { display: none; }

    /* Hero */
    .hero-heading          { font-size: 28px; }

    /* Parallax */
    .parallax-heading      { font-size: 26px; }
    .parallax-subtext      { font-size: 13px; }
    .carousel-track-outer  { width: 100%; max-width: 88vw; }
    .carousel-slide img    { width: 140px; height: 220px; }

    /* Testimonial */
    .quote-text            { font-size: 16px; }
    .mission-grid          { grid-template-columns: 1fr; }
    .mission-media-col img,
    .video-thumb           { height: 210px; }

    /* Eye gallery — single column */
    .eye-gallery           { grid-template-columns: 1fr 1fr; }
    .eye-img img           { height: 160px; }

    /* Canteen gallery */
    .canteen-gallery       { flex-direction: column; }
    .canteen-gallery img   { width: 100%; height: 180px; flex: unset; }

    /* Initiatives — 2 per row on small screens */
    .initiatives-icons     { gap: 16px; justify-content: center; }
    .initiative-item       { max-width: 100px; }
    .initiatives-heading   { font-size: 22px; }

    /* Team — single column */
    .team-grid             { grid-template-columns: 1fr; max-width: 340px; margin: 0 auto; }
    .team-photo img        { height: 300px; }

    /* Footer single col */
    .footer-inner          { grid-template-columns: 1fr; padding: 24px 16px; gap: 24px; }
    .footer-gallery        { grid-template-columns: repeat(4, 1fr); }
    .footer-gallery-img img { height: 70px; }
}

/* ----------------------------------------------------------
   480px — Standard mobile
   ---------------------------------------------------------- */
@media (max-width: 480px) {
    /* Header */
    .header-top            { padding: 8px 12px; min-height: 54px; }
    .brand-name            { font-size: 13px; }
    .brand-tagline         { font-size: 11px; }

    /* Nav pills smaller */
    .nav-pill              { font-size: 12px; padding: 7px 14px; }

    /* Hero */
    .hero-section          { padding: 18px 12px 16px 12px; }
    .hero-heading          { font-size: 24px; line-height: 1.15; }
    .hero-body             { font-size: 13px; }
    .hero-portrait-bw      { height: 372px; width:400px; }
    .hero-portrait-color   { height: 374px; width: 400px; }

    /* Parallax */
    .parallax-section      { padding: 36px 12px; }
    .parallax-heading      { font-size: 22px; }
    .parallax-subtext      { font-size: 12.5px; }
    .carousel-slide img    { width: 200px; height: 297px; }
    .carousel-btn          { font-size: 34px; padding: 0 4px; }

    /* Testimonial
    .testimonial-section   { padding: 22px 12px 20px; }
    .quote-text            { font-size: 15px; }
    .quote-marks           { font-size: 50px; }
    .quote-avatar img      { width: 80px; height: 80px; } */

    /* Eye gallery */
    .eye-screening-block   { margin: 12px; padding: 16px 12px; }
    .eye-gallery           { grid-template-columns: 1fr 1fr; gap: 6px; }
    .eye-img img           { height: 140px; }
    .service-helpline      { font-size: 12.5px; }

    /* Canteen */
    .canteen-block         { margin: 0 12px 16px; }
    .canteen-left          { padding: 16px 12px; object-fit: contain; }
    .canteen-left img      { object-fit: contain; height: 100%; width: 100%s;}
    .canteen-right         { padding: 16px 12px; }

    /* Initiatives */
    .initiatives-section   { padding: 32px 12px; }
    .initiatives-heading   { font-size: 20px; }
    .initiatives-subtext   { font-size: 12.5px; }
    .initiatives-icons     { gap: 14px; }
    .initiative-circle     { width: 58px; height: 58px; }
    .initiative-item       { max-width: 88px; }
    .initiative-label      { font-size: 11.5px; }
    .view-details-btn      { padding: 11px 28px; font-size: 11.5px; }

    /* Team */
    .team-section          { padding: 28px 12px; }
    .team-heading          { font-size: 24px; }
    .team-body             { font-size: 13px; }
    .team-photo img        { height: 280px; }
    .team-label            { padding: 12px 12px; }
    .team-name             { font-size: 13.5px; }
    .team-title            { font-size: 10.5px; }

    /* Social */
    .social-section        { padding: 28px 12px; }
    .social-heading        { font-size: 24px; }
    .social-btn            { width: 44px; height: 44px; }

    /* Footer */
    .footer-inner          { padding: 20px 12px; }
    .footer-heading        { font-size: 13.5px; }
    .footer-links li a     { font-size: 12.5px; }
    .footer-bottom         { font-size: 11.5px; padding: 10px; }
}

/* ----------------------------------------------------------
   360px — Small / budget mobile
   ---------------------------------------------------------- */
@media (max-width: 360px) {
    /* Header */
    .brand-name            { font-size: 12px; }
    .brand-tagline         { display: none; }
    .header-top            { min-height: 48px; }

    /* Nav */
    .nav-pill              { font-size: 11px; padding: 6px 10px; }
    .nav-list              { gap: 4px; }

    /* Hero */
    .hero-heading          { font-size: 21px; }
    .hero-portrait-bw      { height: 230px; }
    .hero-portrait-color   { height: 180px; }

    /* Parallax */
    .parallax-heading      { font-size: 19px; }
    .carousel-slide img    { width: 200px; height: 297px; }

    /* Testimonial */
    .quote-text            { font-size: 14px; }

    /* Eye gallery — full width per image on tiny screens */
    .eye-gallery           { grid-template-columns: 1fr; }
    .eye-img img           { height: 200px; }

    /* Canteen gallery */
    .canteen-gallery       { flex-direction: column; }
    .canteen-gallery img   { width: 100%; }

    /* Initiatives */
    .initiatives-heading   { font-size: 18px; }
    .initiatives-icons     { gap: 12px; }
    .initiative-circle     { width: 52px; height: 52px; }
    .initiative-item       { max-width: 78px; }
    .initiative-label      { font-size: 11px; }

    /* Team */
    .team-heading          { font-size: 21px; }
    .team-photo img        { height: 250px; }

    /* Footer */
    .footer-gallery        { grid-template-columns: 1fr 1fr; }
    .footer-gallery-img img { height: 60px; }
}

/* ----------------------------------------------------------
   Hamburger toggle button — shown on tablet/mobile
   ---------------------------------------------------------- */
.nav-hamburger {
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5px;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 4px 8px;
    margin-left: auto;
    margin-right: 12px;
}

.nav-hamburger span {
    display: block;
    width: 24px;
    height: 2px;
    background: #fff;
    border-radius: 2px;
    transition: all 0.2s;
}

@media (max-width: 768px) {
    .nav-hamburger { display: flex; }
}

/* ----------------------------------------------------------
   Prevent background-attachment: fixed on mobile (iOS bug)
   ---------------------------------------------------------- */
@media (max-width: 768px) {
    .parallax-section { background-attachment: scroll; }
}

/* ============================================================

   ADDITIONS — Animations + Mobile UI improvements

   Append this entire block to the END of home.css

   DO NOT modify anything above this block

   ============================================================ */
 
/* ── 1. NAVBAR FADE-IN ANIMATION on page load ────────────────

   Each .nav-pill fades in with a slight upward slide.

   Uses nth-child stagger so items appear one after another.

   ---------------------------------------------------------- */

@keyframes navFadeIn {

    from {
        opacity: 0;
        transform: translateY(-8px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
 
.nav-list .nav-pill {
    opacity: 0;
    animation: navFadeIn 0.4s ease forwards;
}
 
/* Stagger each nav item — 8 items × 0.07s gap */

.nav-list li:nth-child(1) .nav-pill { animation-delay: 0.05s; }
.nav-list li:nth-child(2) .nav-pill { animation-delay: 0.12s; }
.nav-list li:nth-child(3) .nav-pill { animation-delay: 0.19s; }
.nav-list li:nth-child(4) .nav-pill { animation-delay: 0.26s; }
.nav-list li:nth-child(5) .nav-pill { animation-delay: 0.33s; }
.nav-list li:nth-child(6) .nav-pill { animation-delay: 0.40s; }
.nav-list li:nth-child(7) .nav-pill { animation-delay: 0.47s; }
.nav-list li:nth-child(8) .nav-pill { animation-delay: 0.54s; }
 
/* ── 2. "WHO WE ARE" TEAM BADGE ANIMATION ────────────────────

   .team-label (the red badge overlapping each portrait)

   fades in and slides slightly upward when the card is visible.

   Triggered by .is-visible class added via JS IntersectionObserver.

   ---------------------------------------------------------- */

@keyframes badgeFadeUp {

    from {
        opacity: 0;
        transform: translateY(14px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
 
.team-card .team-label {
    opacity: 0;
    animation: none;
}
 
.team-card.is-visible .team-label {
    animation: badgeFadeUp 0.2s ease 0.10s forwards;

}
 
/* Also animate the photo slightly */

@keyframes photoFadeIn {
    from { opacity: 0; transform: scale(0.97); }
    to   { opacity: 1; transform: scale(1); }
}
 
.team-card .team-photo img {

    opacity: 0;
    animation: none;

}
 
.team-card.is-visible .team-photo img {

    animation: photoFadeIn 0.45s ease forwards;

}
 
/* ── 3. MOBILE SIDEBAR OVERLAY + COLLAPSIBLE DROPDOWNS ───────

   On mobile (≤768px):

   - Hamburger toggles a full-height sidebar panel (.mobile-sidebar)

   - Sidebar contains nav items with collapsible dropdown sections

   - Overlay dims the page behind the open sidebar

   ---------------------------------------------------------- */
 
/* Overlay behind sidebar */

.mobile-overlay {

    display: none;

    position: fixed;

    inset: 0;

    background: rgba(0, 0, 0, 0.52);

    z-index: 3000;

    opacity: 0;

    transition: opacity 0.25s ease;

}
 
.mobile-overlay.is-open {

    display: block;

    opacity: 1;

}
 
/* Sidebar panel */

.mobile-sidebar {

    position: fixed;

    top: 0;

    left: 0;

    width: 280px;

    height: 100vh;

    background: #1a2b4a;

    z-index: 3100;

    display: flex;

    flex-direction: column;

    transform: translateX(-100%);

    transition: transform 0.28s cubic-bezier(0.4, 0, 0.2, 1);

    overflow-y: auto;

}
 
.mobile-sidebar.is-open {

    transform: translateX(0);

}
 
/* Sidebar header row */

.mobile-sidebar-header {

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 16px 18px;

    background: #A30000;

    flex-shrink: 0;

}
 
.mobile-sidebar-brand {

    font-family: 'Poppins', sans-serif;

    font-weight: 700;

    font-size: 14px;

    color: #FFD700;

    line-height: 1.3;

}
 
.mobile-sidebar-close {

    background: none;

    border: none;

    cursor: pointer;

    color: #fff;

    font-size: 22px;

    line-height: 1;

    padding: 2px 6px;

    border-radius: 4px;

    transition: background 0.15s;

}
 
.mobile-sidebar-close:hover {

    background: rgba(255,255,255,0.15);

}
 
/* Nav items inside sidebar */

.mobile-sidebar-nav {

    flex: 1;

    padding: 12px 0 24px;

}
 
.mobile-nav-item {

    border-bottom: 1px solid rgba(255,255,255,0.07);

}
 
/* Top-level link / dropdown trigger */

.mobile-nav-link {

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 13px 20px;

    color: rgba(255,255,255,0.88);

    font-family: 'Poppins', sans-serif;

    font-size: 14px;

    font-weight: 600;

    text-decoration: none;

    cursor: pointer;

    transition: background 0.15s, color 0.15s;

    background: none;

    border: none;

    width: 100%;

    text-align: left;

}
 
.mobile-nav-link:hover,

.mobile-nav-link.active {

    background: rgba(255,255,255,0.08);

    color: #FFD700;

}
 
/* Dropdown arrow inside sidebar */

.mobile-nav-arrow {

    font-size: 10px;

    transition: transform 0.22s ease;

    display: inline-block;

    color: rgba(255,255,255,0.55);

}
 
.mobile-nav-item.is-open .mobile-nav-arrow {

    transform: rotate(180deg);

    color: #FFD700;

}
 
/* Collapsible dropdown list */

.mobile-dropdown {

    max-height: 0;

    overflow: hidden;

    transition: max-height 0.28s ease;

    background: rgba(0,0,0,0.18);

}
 
.mobile-nav-item.is-open .mobile-dropdown {

    max-height: 300px; /* large enough for any dropdown */

}
 
.mobile-dropdown a {

    display: block;

    padding: 10px 20px 10px 32px;

    font-size: 13px;

    color: rgba(255,255,255,0.70);

    font-family: 'Inter', sans-serif;

    text-decoration: none;

    transition: color 0.15s, background 0.15s;

    border-bottom: 1px solid rgba(255,255,255,0.04);

}
 
.mobile-dropdown a:hover {

    color: #FFD700;

    background: rgba(255,255,255,0.05);

}
@media (max-width: 768px){
.mobile-hero-portrait-color {
    height: 374px;
    width: 400px;
}
}
/* Hide the original desktop nav on mobile — sidebar replaces it */

@media (max-width: 768px) {

    .header-nav .nav-list {

        display: none !important;

    }
 
    /* Keep hamburger visible — it now opens the sidebar */

    .header-nav {

        display: flex;

        align-items: center;

        justify-content: flex-end;

        padding: 8px 12px;

        min-height: 44px;

    }
 
    .nav-hamburger {

        display: flex;

        margin: 0;

    }

}
 
/* ── 4. CAROUSEL — 1 image at a time on mobile ───────────────

   JS already sets visibleCount=1 at ≤480px.

   This CSS ensures the track-outer clips correctly and

   each slide is exactly full-width of the visible area.

   ---------------------------------------------------------- */

@media (max-width: 480px) {

    .carousel-track-outer {

        width: 100% !important;

        max-width: 90vw;

        overflow: hidden;

    }
 
    .carousel-track {

        gap: 20px;                    /* no gap — 1 slide visible */

    }
 
    .carousel-slide {

        flex: 0 0 100%;            /* full width = 1 slide */

        min-width: 100%;

    }
    
 
    .carousel-slide img {

        width: 297px;               /* fill the slide */
        height: 200px;
        object-fit: cover;
        border-radius: 10px;

    }
    /* .quote-avatar img {
        height: 200px;
        width: 200px;
        margin-left: 80px;
    }
    .quote-text {
        justify-content: center;
    } */
}
 
/* ── 5. EQUAL IMAGE STYLING — consistent padding + sizing ────

   Applies to: eye gallery, canteen gallery, mission media,

   team photos — all use the same padding wrapper logic.

   ---------------------------------------------------------- */

@media (max-width: 768px) {
 
    /* Eye gallery — equal 2-col grid with consistent image height */

    .eye-gallery {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        padding: 0 4px;
    }
 
    .eye-img {
        padding: 0;                /* reset any extra padding */

    }
 
    .eye-img img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 6px;

    }
 
    /* Canteen gallery — 3 equal images in a row */

    .canteen-gallery {

        display: grid;

        grid-template-columns: repeat(3, 1fr);

        gap: 8px;

        align-items: stretch;

    }
 
    .canteen-gallery img {

        width: 100%;

        height: 130px;

        object-fit: cover;

        border-radius: 6px;

        flex: unset;               /* override inline flex:1 */

    }
 
    /* Mission media — equal heights */


    .video-thumb {

        height: 180px;

        width: 100%;

        object-fit: cover;

    }
    .canteen-left img{
        height: 100% !important;
        width: 100% !important;
    }
 
    /* Team photos — consistent height */

    .team-photo img {

        height: 100%;

        width: 100%;

        object-fit: contain;

        object-position: top;

    }

}
 
@media (max-width: 480px) {

    .eye-img img           { height: 130px; }

    .canteen-gallery img   { height: 110px; }

    .team-photo img        { height: 220px; }
 
    /* Canteen collapses to 1-col at very small screens */

    .canteen-gallery {

        grid-template-columns: 1fr;

    }
 
    .canteen-gallery img   { height: 160px; }

}
 
/* ── 6. "JOIN US" INITIATIVES — 2 icons per row on mobile ────

   Overrides the flex-wrap default to force exactly 2 per row.

   ---------------------------------------------------------- */

@media (max-width: 600px) {

    .initiatives-icons {

        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 24px 16px;

        justify-items: center;

        max-width: 320px;

        margin-left: auto;

        margin-right: auto;

    }
 
    .initiative-item {

        max-width: 130px;

        width: 100%;

    }

}
 


 /* ========== RESPONSIVE BREAKPOINTS ========== */
/* TABLET (portrait and small desktops) */
@media screen and (max-width: 1300px) {
    .testimonial-section {
        padding: 60px 120px;
    }
}

/* TABLET (landscape & medium devices) */
@media screen and (max-width: 1024px) {
    .testimonial-section {
        padding: 50px 60px;
    }
    
    .quote-block {
        grid-template-columns: 28% 72%;
        gap: 24px;
    }
    
    .quote-avatar img {
        width: 180px;
        height: 180px;
    }
    
    .quote-text {
        font-size: 24px;
    }
    
    .quote-marks {
        font-size: 70px;
        margin-bottom: 12px;
    }
}

/* TABLET / MOBILE LARGE (max 800px) */
@media screen and (max-width: 800px) {
    .testimonial-section {
        padding: 48px 40px;
    }
    
    .quote-block {
        grid-template-columns: 1fr;
        gap: 20px;
        text-align: center;
        margin-bottom: 48px;
    }
    
    .quote-avatar {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .quote-avatar img {
        width: 160px;
        height: 160px;
    }
    
    .quote-content {
        text-align: center;
    }
    
    .quote-marks {
        font-size: 64px;
        letter-spacing: -3px;
        margin-bottom: 8px;
    }
    
    .quote-text {
        font-size: 22px;
        line-height: 1.4;
        margin-bottom: 12px;
    }
    
    .quote-author {
        font-size: 14px;
    }
}

/* SMALL MOBILE (max 550px) */
@media screen and (max-width: 550px) {
    .testimonial-section {
        padding: 40px 20px;
    }
    
    .quote-block {
        gap: 18px;
        margin-bottom: 36px;
    }
        .quote-avatar {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .quote-avatar img {
        margin-left: 0px;
        width: 150px;
        height: 150px;
    }
    
    .quote-marks {
        font-size: 52px;
        letter-spacing: -2px;
        margin-bottom: 6px;
    }
    
    .quote-text {
        font-size: 20px;
    }
    
    .quote-author {
        font-size: 13px;
    }
    
}

/* EXTRA SMALL DEVICES (<= 380px) */
@media screen and (max-width: 380px) {
    .testimonial-section {
        padding: 32px 16px;
    }
    
    .quote-text {
        font-size: 18px;
    }
    
    .quote-marks {
        font-size: 46px;
    }
}

/* LARGE SCREENS (optional) */
@media screen and (min-width: 1921px) {
    .testimonial-section {
        padding: 80px 320px;
    }
}

@media (max-width: 1024px) {
  .mission-grid {
    grid-template-columns: 1fr 1fr;
  }

  .mission-text-col {
    grid-column: span 3; /* text takes full width */
  }

  .mission-media-col {
    width: 100%;
    height: auto;
  }

  .video-thumb {
    height: auto;
  }
}




</style>
</head>

<body>


{{-- Top Header --}}
@include('landing.components.topHeaderMenu')

{{-- Main Header --}}
@include('landing.components.header')

{{-- Header Menu --}}
@include('landing.components.headerMenu')

{{-- Sticky Buttons --}}
@include('landing.components.stickyButtons')


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


{{-- Footer --}}
@include('landing.components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
/**
* ✅ This file calls ONLY the routes listed in $homeApis:
* - /notice-marquee, /hero-carousel, /quick-links, /notice-board
* - /activities, /placement-notices, /stats, /courses
* - /successful-entrepreneurs, /alumni-speak, /success-stories
*
* ✅ Recruiters dynamic API removed (full recruiters module is included in Blade).
*
* ✅ PERFORMANCE: below-fold loads only on scroll (IntersectionObserver)
* ✅ UX: page-loader + richer animations
*/

const HOME_APIS = @json($homeApis);

/* ✅ NEW: Notice marquee GIF from frontend (public/assets/...) */
const NOTICE_MARQUEE_GIF_SRC = @json(asset('assets/media/noticeMarquee/new.gif'));

/* Attach common query params to every API call if present in URL */
const PAGE_QS = new URLSearchParams(window.location.search);
const deptParam = (PAGE_QS.get('department') || '').trim();
const limitParam = (PAGE_QS.get('limit') || '').trim();

function withParams(u){
const raw = String(u || '').trim();
if(!raw) return raw;

try{
const url = new URL(raw, window.location.origin);
if(deptParam) url.searchParams.set('department', deptParam);
if(limitParam) url.searchParams.set('limit', limitParam);
return url.toString();
}catch(e){
const qs = [];
if(deptParam) qs.push('department=' + encodeURIComponent(deptParam));
if(limitParam) qs.push('limit=' + encodeURIComponent(limitParam));
if(!qs.length) return raw;
return raw + (raw.includes('?') ? '&' : '?') + qs.join('&');
}
}


/* =========================
✅ Page Loader controls
========================= */
const LOADER = {
root: document.getElementById('pageLoader'),
bar: document.getElementById('pageLoaderBar'),
text: document.getElementById('pageLoaderText'),
set(pct, label){
if(this.bar) this.bar.style.width = Math.max(6, Math.min(100, pct || 0)) + '%';
if(this.text) this.text.textContent = String(label || 'Loading…');
},
done(){
if(!this.root) return;
this.root.classList.add('is-done');
this.root.setAttribute('aria-hidden','true');

try{ showHomePopupOnce(); }catch(e){}
}
};

setTimeout(() => { LOADER.done(); }, 12000);


// home.js — LegMed Homepage JS  (v2 — fixed carousel + sidebar)
 
document.addEventListener('DOMContentLoaded', function () {
 
    /* =============================================
       1. MOBILE SIDEBAR — collapsible dropdowns
       ============================================= */
    const headerNav = document.querySelector('.header-nav');
    const navList   = document.querySelector('.nav-list');
 
    // Create overlay
    const overlay = document.createElement('div');
    overlay.className = 'mobile-overlay';
    document.body.appendChild(overlay);
 
    // Build sidebar
    const sidebar = document.createElement('nav');
    sidebar.className = 'mobile-sidebar';
    sidebar.setAttribute('aria-label', 'Mobile navigation');
    sidebar.innerHTML =
        '<div class="mobile-sidebar-header">' +
            '<div class="mobile-sidebar-brand">LegMed Foundation &amp; Research</div>' +
            '<button class="mobile-sidebar-close" aria-label="Close menu">&#10005;</button>' +
        '</div>' +
        '<div class="mobile-sidebar-nav" id="mobileSidebarNav"></div>';
    document.body.appendChild(sidebar);
 
    // Populate sidebar from desktop nav-list
    const sidebarNav = document.getElementById('mobileSidebarNav');
    if (navList && sidebarNav) {
        navList.querySelectorAll('li').forEach(function (li) {
            const item     = document.createElement('div');
            item.className = 'mobile-nav-item';
 
            const topLink    = li.querySelector(':scope > a');
            const dropdownUl = li.querySelector(':scope > ul.dropdown-nav');
 
            if (dropdownUl) {
                // Collapsible dropdown item
                const btn = document.createElement('button');
                btn.className = 'mobile-nav-link';
                var labelText = topLink ? topLink.textContent.replace(/[▼▾▸▼]/g, '').trim() : '';
                btn.innerHTML = labelText + ' <span class="mobile-nav-arrow">&#9660;</span>';
 
                const dropDiv      = document.createElement('div');
                dropDiv.className  = 'mobile-dropdown';
 
                dropdownUl.querySelectorAll('a').forEach(function (a) {
                    const sub      = document.createElement('a');
                    sub.href       = a.href;
                    sub.textContent = a.textContent.trim();
                    sub.addEventListener('click', closeSidebar);
                    dropDiv.appendChild(sub);
                });
 
                btn.addEventListener('click', function () {
                    item.classList.toggle('is-open');
                });
 
                item.appendChild(btn);
                item.appendChild(dropDiv);
            } else {
                // Plain link
                const a      = document.createElement('a');
                a.className  = 'mobile-nav-link';
                if (topLink) {
                    a.href        = topLink.href;
                    a.textContent = topLink.textContent.trim();
                    if (topLink.classList.contains('active')) a.classList.add('active');
                }
                a.addEventListener('click', closeSidebar);
                item.appendChild(a);
            }
 
            sidebarNav.appendChild(item);
        });
    }
 
    // Inject hamburger button into header-nav
    if (headerNav && navList) {
        const burger = document.createElement('button');
        burger.className = 'nav-hamburger';
        burger.setAttribute('aria-label', 'Toggle navigation');
        burger.innerHTML = '<span></span><span></span><span></span>';
        headerNav.insertBefore(burger, navList);
        burger.addEventListener('click', openSidebar);
    }
 
    function openSidebar() {
        sidebar.classList.add('is-open');
        overlay.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }
 
    function closeSidebar() {
        sidebar.classList.remove('is-open');
        overlay.classList.remove('is-open');
        document.body.style.overflow = '';
    }
 
    overlay.addEventListener('click', closeSidebar);
 
    var closeBtn = sidebar.querySelector('.mobile-sidebar-close');
    if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
 
    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) closeSidebar();
    });
 
    /* =============================================
       2. TEAM BADGE ANIMATION — IntersectionObserver
       ============================================= */
    if ('IntersectionObserver' in window) {
        var cardObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    cardObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
 
        document.querySelectorAll('.team-card').forEach(function (card) {
            cardObserver.observe(card);
        });
    } else {
        // Fallback — no observer support
        document.querySelectorAll('.team-card').forEach(function (c) {
            c.classList.add('is-visible');
        });
    }
 
    /* =============================================
       3. CAROUSEL — FIX: slideW matches CSS 78vw
       ============================================= */
    var track   = document.getElementById('carouselTrack');
    var prevBtn = document.getElementById('carouselPrev');
    var nextBtn = document.getElementById('carouselNext');
    var dots    = document.querySelectorAll('.dot');
 
    if (!track) return;
 
    var current      = 0;
    var autoInterval = null;
 
    function getConfig() {
        var vw = window.innerWidth;
        var visibleCount, slideW;
 
        if (vw <= 480) {
            // CSS sets slide to 82vw, gap 0
            visibleCount = 1;
            slideW = Math.round(vw * 0.82);
        } else if (vw <= 768) {
            // CSS sets slide to 78vw, gap 0
            visibleCount = 1;
            slideW = Math.round(vw * 0.78);
        } else if (vw <= 1024) {
            visibleCount = 3;
            slideW = 210 + 16;
        } else if (vw <= 1200) {
            visibleCount = 3;
            slideW = 240 + 16;
        } else {
            visibleCount = 3;
            slideW = 270 + 16;
        }
 
        var total    = track.querySelectorAll('.carousel-slide').length;
        var maxIndex = Math.max(0, total - visibleCount);
        return { visibleCount: visibleCount, slideW: slideW, maxIndex: maxIndex };
    }
 
    function goTo(index) {
        var cfg  = getConfig();
        current  = Math.max(0, Math.min(index, cfg.maxIndex));
        track.style.transform = 'translateX(-' + (current * cfg.slideW) + 'px)';
        dots.forEach(function (dot, i) {
            dot.classList.toggle('active', i === current);
        });
    }
 
    function startAuto() {
        stopAuto();
        autoInterval = setInterval(function () {
            var cfg = getConfig();
            goTo(current < cfg.maxIndex ? current + 1 : 0);
        }, 4000);
    }
 
    function stopAuto() {
        if (autoInterval) { clearInterval(autoInterval); autoInterval = null; }
    }
 
    if (prevBtn) prevBtn.addEventListener('click', function () { stopAuto(); goTo(current - 1); startAuto(); });
    if (nextBtn) nextBtn.addEventListener('click', function () { stopAuto(); goTo(current + 1); startAuto(); });
 
    dots.forEach(function (dot, i) {
        dot.addEventListener('click', function () { stopAuto(); goTo(i); startAuto(); });
    });
 
    // Touch swipe support
    var touchStartX = 0;
    track.addEventListener('touchstart', function (e) {
        touchStartX = e.touches[0].clientX;
        stopAuto();
    }, { passive: true });
 
    track.addEventListener('touchend', function (e) {
        var diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) {
            diff > 0 ? goTo(current + 1) : goTo(current - 1);
        }
        startAuto();
    }, { passive: true });
 
    window.addEventListener('resize', function () { goTo(0); current = 0; });
 
    goTo(0);
    startAuto();
});


</script>

@stack('scripts')
</body>
</html>
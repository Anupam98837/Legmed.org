// home.js — LegMed Homepage JS
// CHANGES vs previous version:
//   1. Mobile sidebar with collapsible dropdowns (replaces flat hamburger toggle)
//   2. IntersectionObserver for .team-card .is-visible animation
//   Everything else (carousel, touch, resize) is UNCHANGED.
 
document.addEventListener('DOMContentLoaded', function () {
 
    /* =============================================
       1. MOBILE SIDEBAR — replaces flat nav toggle
       ============================================= */
    const headerNav  = document.querySelector('.header-nav');
    const navList    = document.querySelector('.nav-list');
    const siteHeader = document.querySelector('.site-header');
 
    // Build sidebar and overlay dynamically — no blade changes needed
    const overlay = document.createElement('div');
    overlay.className = 'mobile-overlay';
    document.body.appendChild(overlay);
 
    const sidebar = document.createElement('nav');
    sidebar.className = 'mobile-sidebar';
    sidebar.setAttribute('aria-label', 'Mobile navigation');
    sidebar.innerHTML = `
<div class="mobile-sidebar-header">
<div class="mobile-sidebar-brand">LegMed Foundation &amp; Research</div>
<button class="mobile-sidebar-close" aria-label="Close menu">&#10005;</button>
</div>
<div class="mobile-sidebar-nav" id="mobileSidebarNav"></div>
    `;
    document.body.appendChild(sidebar);
 
    // Populate sidebar from the existing desktop nav-list
    const sidebarNav = document.getElementById('mobileSidebarNav');
    if (navList && sidebarNav) {
        navList.querySelectorAll('li').forEach(function (li) {
            const item = document.createElement('div');
            item.className = 'mobile-nav-item';
 
            const topLink = li.querySelector(':scope > a');
            const dropdownUl = li.querySelector(':scope > ul.dropdown-nav');
 
            if (dropdownUl) {
                // Item has a dropdown — make it a collapsible trigger
                const btn = document.createElement('button');
                btn.className = 'mobile-nav-link';
                btn.innerHTML =
                    (topLink ? topLink.textContent.replace(/[▼▾▸]/g, '').trim() : '') +
                    ' <span class="mobile-nav-arrow">&#9660;</span>';
 
                // Collapsible dropdown container
                const dropDiv = document.createElement('div');
                dropDiv.className = 'mobile-dropdown';
                dropdownUl.querySelectorAll('a').forEach(function (a) {
                    const subLink = document.createElement('a');
                    subLink.href = a.href;
                    subLink.textContent = a.textContent.trim();
                    subLink.addEventListener('click', closeSidebar);
                    dropDiv.appendChild(subLink);
                });
 
                btn.addEventListener('click', function () {
                    item.classList.toggle('is-open');
                });
 
                item.appendChild(btn);
                item.appendChild(dropDiv);
            } else {
                // Plain link — no dropdown
                const a = document.createElement('a');
                a.className = 'mobile-nav-link';
                if (topLink) {
                    a.href = topLink.href;
                    a.textContent = topLink.textContent.trim();
                    if (topLink.classList.contains('active')) a.classList.add('active');
                }
                a.addEventListener('click', closeSidebar);
                item.appendChild(a);
            }
 
            sidebarNav.appendChild(item);
        });
    }
 
    // Hamburger button — inject into header-nav (same as before, but now opens sidebar)
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
 
    // Close on overlay click
    overlay.addEventListener('click', closeSidebar);
 
    // Close button inside sidebar
    const closeBtn = sidebar.querySelector('.mobile-sidebar-close');
    if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
 
    // Close sidebar on window resize to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) closeSidebar();
    });
 
    /* =============================================
       2. "WHO WE ARE" TEAM BADGE ANIMATION
       IntersectionObserver adds .is-visible to each
       .team-card when it enters the viewport.
       CSS handles the actual animation.
       ============================================= */
    if ('IntersectionObserver' in window) {
        const teamCards = document.querySelectorAll('.team-card');
        const cardObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    cardObserver.unobserve(entry.target); // animate once only
                }
            });
        }, { threshold: 0.15 });
 
        teamCards.forEach(function (card) {
            cardObserver.observe(card);
        });
    } else {
        // Fallback: no IntersectionObserver — show all immediately
        document.querySelectorAll('.team-card').forEach(function (c) {
            c.classList.add('is-visible');
        });
    }
 
    /* =============================================
       CAROUSEL — UNCHANGED from previous version
       ============================================= */
    const track   = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('carouselPrev');
    const nextBtn = document.getElementById('carouselNext');
    const dots    = document.querySelectorAll('.dot');
 
    if (!track) return;
 
    let current      = 0;
    let autoInterval = null;
 
    function getConfig() {
        const vw = window.innerWidth;
        let visibleCount, slideW;
        if (vw <= 480)       { visibleCount = 1; slideW = window.innerWidth * 0.90; }
        else if (vw <= 600)  { visibleCount = 2; slideW = 140 + 16; }
        else if (vw <= 768)  { visibleCount = 2; slideW = 170 + 16; }
        else if (vw <= 1024) { visibleCount = 3; slideW = 210 + 16; }
        else if (vw <= 1200) { visibleCount = 3; slideW = 240 + 16; }
        else                 { visibleCount = 3; slideW = 270 + 16; }
        const total    = track.querySelectorAll('.carousel-slide img').length;
        const maxIndex = Math.max(0, total - visibleCount);
        return { visibleCount, slideW, maxIndex };
    }
 
    function goTo(index) {
        const { slideW, maxIndex } = getConfig();
        current = Math.max(0, Math.min(index, maxIndex));
        track.style.transform = 'translateX(-' + (current * slideW) + 'px)';
        dots.forEach(function (dot, i) {
            dot.classList.toggle('active', i === current);
        });
    }
 
    function startAuto() {
        stopAuto();
        autoInterval = setInterval(function () {
            const { maxIndex } = getConfig();
            goTo(current < maxIndex ? current + 1 : 0);
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
 
    // Touch swipe — UNCHANGED
    let touchStartX = 0;
    track.addEventListener('touchstart', function (e) { touchStartX = e.touches[0].clientX; stopAuto(); }, { passive: true });
    track.addEventListener('touchend', function (e) {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) { diff > 0 ? goTo(current + 1) : goTo(current - 1); }
        startAuto();
    }, { passive: true });
 
    window.addEventListener('resize', function () { goTo(current); });
 
    goTo(0);
    startAuto();
});
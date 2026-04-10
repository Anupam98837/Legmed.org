<style>
    /* ============================================================
   HEADER — Top Bar (with Responsive Media Queries)
   ============================================================ */
.site-header {
    top: 0;
    z-index: 1000;
    width: 100%;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
 
.header-top {
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 200px;
    /* padding: 12px 48px; */
    min-height: 85px;
}
 
.brand-name {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 24px;
    color: #A30000;
    line-height: 1.1;
    margin: 0;
}
 
.brand-tagline {
    font-size: 14px;
    color: #1a1a1a;
    margin-top: 4px;
    font-family: 'Inter', sans-serif;
}
 
.header-logo {
    display: flex;
    align-items: center;
}
 
.logo-image {
    width: 110px;
    height: auto;
    max-height: 85px;
    object-fit: contain;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
}
 
.logo-image:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}
 

 
/* ============================================================
   HEADER MEDIA QUERIES
   ============================================================ */
 
@media (max-width: 1400px) {
    .header-top { padding: 12px 40px; }
}
 
@media (max-width: 1200px) {
    .header-top { padding: 10px 32px; }
    .brand-name { font-size: 21px; }
}
 
@media (max-width: 1024px) {
    .header-top { 
        padding: 10px 24px; 
        min-height: 72px; 
    }
    .brand-name { font-size: 19px; }
    .brand-tagline { font-size: 13px; }
    .logo-image { width: 98px; }
}
 
@media (max-width: 768px) {
    .header-top { 
        padding: 10px 16px; 
        min-height: 68px; 
    }
    .brand-name { font-size: 17px; }
    .brand-tagline { font-size: 12.5px; }
    .logo-image { width: 90px; }
}
 
@media (max-width: 600px) {
    .brand-name { font-size: 16px; }
    .brand-tagline { font-size: 12px; }
}
 
@media (max-width: 480px) {
    .header-top { 
        padding: 8px 12px; 
        min-height: 60px; 
    }
    .brand-name { font-size: 15px; }
    .brand-tagline { font-size: 11.5px; }
    .logo-image { width: 82px; }
}
 
@media (max-width: 360px) {
    .brand-name { font-size: 14px; }
    .brand-tagline { font-size: 11px; }
    .logo-image { width: 76px; }
}
</style>
{{-- Sticky Sidebar --}}
<a href="#" class="sidebar-ribbon" target="_blank">
    <span>LegMed Healthcare Solutions</span>
</a>

{{-- Header --}}
<header class="site-header">
    <div class="header-top">
        <div class="header-brand">
            <div class="brand-name">LegMed Foundation &amp; Research</div>
            <div class="brand-tagline">Empowering Healthcare, Believing Solutions</div>
        </div>
        
        <div class="header-logo">
            <!-- Fixed Logo with proper size -->
            <img src="https://legmed.org/wp-content/uploads/2025/03/Final_Logo_LegMed-removebg-preview-e1740858099503.png" 
                 alt="LegMed Logo" 
                 class="logo-image">
        </div>
    </div>
</header>
{{-- resources/views/auth/login.blade.php (Hallienz Home Builder • shared UI + auth logic) --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Login — {{ config('app.name', 'Hallienz Home Builder') }}</title>
 
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
 
  <!-- Vendors -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"/>
 
  <!-- Global tokens / design system -->
  <link rel="stylesheet" href="{{ asset('/assets/css/common/main.css') }}"/>
 
  <style>
    /* =========================
       Namespaced Login (lx-*)
       ========================= */
 
    /* html, body { height:100%; }
    body.lx-auth-body{
      height:100%;
      overflow:hidden;
      background:var(--bg-body);
      color:var(--text-color);
      font-family:var(--font-sans);
    }
 
    .lx-grid{
      height:100vh;
      display:grid;
      grid-template-columns: minmax(420px,560px) 1fr;
    }
    @media (max-width: 992px){ .lx-grid{ grid-template-columns: 1fr; } }
 
    /* LEFT: form column */
    /* .lx-left{
      height:100vh;
      display:flex; flex-direction:column;
      justify-content:center; align-items:center;
      padding:clamp(22px,5vw,56px);
      position:relative; isolation:isolate;
    }
    .lx-left::before,
    .lx-left::after{
      content:""; position:absolute; z-index:0; pointer-events:none;
      border-radius:50%; filter: blur(26px); opacity:.25; display:none;
    }
    .lx-left::before{
      width:320px; height:320px; left:-80px; top:10%;
      background: radial-gradient(closest-side, var(--primary-light), transparent 70%);
      animation: lx-floatA 9s ease-in-out infinite;
    }
    .lx-left::after{
      width:280px; height:280px; right:-60px; bottom:14%;
      background: radial-gradient(closest-side, var(--accent-color), transparent 70%);
      animation: lx-floatB 11s ease-in-out infinite;
    }
    @media (max-width: 992px){ .lx-left::before, .lx-left::after{ display:block; } }
 
    .lx-brand{ display:grid; place-items:center; margin-bottom:18px; position:relative; z-index:1; }
    .lx-brand img{ height:60px; }
 
    .lx-title{
      font-family:var(--font-head); font-weight:700; color:var(--ink);
      text-align:center; font-size:clamp(1.6rem, 2.6vw, 2.2rem); margin:.35rem 0 .25rem;
      position:relative; z-index:1;
    }
    .lx-sub{
      text-align:center;
      color:var(--muted-color);
      margin-bottom:18px;
      position:relative;
      z-index:1;
      max-width: 420px;
    }
 
    .lx-card{
      position:relative; z-index:1;
      background:var(--surface); border:1px solid var(--line-strong);
      border-radius:18px; padding:24px; box-shadow:var(--shadow-2);
      width:100%; max-width:430px; overflow:hidden;
    }
    .lx-card::before,
    .lx-card::after{
      content:""; position:absolute; border-radius:50%;
      filter: blur(18px); opacity:.25; pointer-events:none;
    }
    .lx-card::before{
      width:160px; height:160px; left:-40px; top:-40px;
      background: radial-gradient(closest-side, var(--accent-color), transparent 65%);
      animation: lx-orbitA 12s linear infinite;
    }
    .lx-card::after{
      width:140px; height:140px; right:-30px; bottom:-30px;
      background: radial-gradient(closest-side, var(--primary-color), transparent 65%);
      animation: lx-orbitB 14s linear infinite reverse;
    }
    .lx-float-chip{
      position:absolute; top:12px; right:12px; z-index:1;
      padding:6px 10px; border-radius:999px; font-size:.78rem;
      background:rgba(0,0,0,.04); color:var(--text-color);
      border:1px solid var(--line-strong);
      backdrop-filter: blur(4px);
      animation: lx-chip 7s ease-in-out infinite;
    }
 
    .lx-label{ font-weight:600; color:var(--ink); }
    .lx-input-wrap{ position:relative; }
    .lx-control{ height:46px; border-radius:12px; padding-right:48px; }
    .lx-control::placeholder{ color:#aab2c2; }
    .lx-eye{
      position:absolute; top:50%; right:10px; transform:translateY(-50%);
      width:36px; height:36px; border:none; background:transparent; color:#8892a6;
      display:grid; place-items:center; cursor:pointer; border-radius:8px;
    }
    .lx-eye:focus-visible{ outline:none; box-shadow: var(--ring); }
 
    .lx-row{ display:flex; justify-content:space-between; align-items:center; gap:12px; }
    .lx-login{
      width:100%; height:48px; border:none; border-radius:12px; font-weight:700; color:#fff;
      background:linear-gradient(180deg,
        color-mix(in oklab, var(--primary-color) 92%, #fff 8%),
        var(--primary-color)
      );
      box-shadow:0 10px 22px rgba(158,54,58,.26);
      transition:var(--transition);
    }
    .lx-login:hover{ filter:brightness(.98); transform:translateY(-1px); } */
 
    /* RIGHT visuals (hidden on mobile) */
    /* .lx-right{
      position:relative; height:100vh; display:grid; place-items:center;
      background:
        radial-gradient(120% 100% at 10% 10%, rgba(201,75,80,.16) 0%, rgba(7,13,42,0) 55%),
        linear-gradient(180deg,#061220,#08142a);
      padding: clamp(24px, 4vw, 60px);
      isolation:isolate; overflow:hidden;
    }
    @media (max-width: 992px){ .lx-right{ display:none; } }
 
    .lx-arc{
      position:absolute; inset: -18% -10% auto auto;
      width:120%; height:140%;
      background:radial-gradient(110% 110% at 80% 20%,
        rgba(201,75,80,.18) 0%,
        rgba(158,54,58,.16) 35%,
        rgba(7,13,42,0) 62%
      );
      border-bottom-left-radius:48% 44%;
      pointer-events:none; animation: lx-drift 16s ease-in-out infinite;
    }
    .lx-ring{
      position:absolute; inset:auto -120px -80px auto; width:420px; height:420px; border-radius:50%;
      background:
        radial-gradient(closest-side, rgba(255,255,255,.18), rgba(255,255,255,0) 70%),
        conic-gradient(from 0deg,
          rgba(158,54,58,.25),
          rgba(0,210,196,.20),
          rgba(158,54,58,.25)
        );
      filter:blur(18px); opacity:.18; pointer-events:none; animation: lx-spin 24s linear infinite;
    }
    .lx-hero{ position:relative; width:min(680px, 96%); aspect-ratio: 3/4; animation: lx-pop .7s ease-out both; }
    .lx-hero-frame{
      position:relative; width:100%; height:100%; padding:20px; border-radius:36px;
      background: linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.02));
      box-shadow: 0 24px 54px rgba(0,0,0,.35), 0 0 0 1px rgba(255,255,255,.06) inset;
      transition: transform .25s ease, box-shadow .25s ease;
      will-change: transform;
    }
    .lx-hero-img{
      width:100%; height:100%; border-radius:24px; overflow:hidden; position:relative;
      box-shadow:0 18px 40px rgba(0,0,0,.35);
    }
    .lx-hero-img img{
      width:100%; height:100%; object-fit:cover; display:block; transform:translateZ(0);
      animation: lx-zoom 26s ease-in-out infinite alternate; will-change: transform;
    }
    .lx-particles{
      position:absolute; inset:0; pointer-events:none; opacity:.28;
      background:
        radial-gradient(#ffffff 1px, transparent 2px) 0 0/22px 22px,
        radial-gradient(#ffffff 1px, transparent 2px) 11px 11px/22px 22px;
      mix-blend-mode: overlay; animation: lx-twinkle 12s linear infinite;
    }
 
    .lx-obj{ position:absolute; z-index:3; opacity:.9; filter: drop-shadow(0 8px 18px rgba(0,0,0,.28)); user-select:none; pointer-events:none; }
 
    .lx-books{
      top: clamp(18px, 3vw, 36px);
      left: clamp(12px, 2vw, 28px);
      display:grid; gap:6px;
    }
    .lx-book{
      width:110px; height:22px; border-radius:5px;
      background:linear-gradient(90deg, var(--primary-color), var(--accent-color));
      transform:rotate(-6deg);
    }
    .lx-book:nth-child(2){
      width:124px; height:24px;
      background:linear-gradient(90deg, #0ea5e9, #22c55e);
      transform:rotate(-4deg) translateX(8px);
    }
    .lx-book:nth-child(3){
      width:132px; height:24px;
      background:linear-gradient(90deg, #f97316, #facc15);
      transform:rotate(-2deg) translateX(14px);
    }
 
    .lx-cup{
      right: clamp(16px, 3vw, 36px);
      bottom: clamp(18px, 3vw, 36px);
      width:90px; height:110px;
    }
    .lx-cup-body{
      position:absolute; left:0; bottom:0; width:90px; height:64px;
      border-radius:12px 12px 18px 18px;
      background:linear-gradient(180deg, #1b2a55, #0f1a3a);
      border:1px solid rgba(255,255,255,.10);
    }
    .lx-pencil{
      position:absolute; bottom:40px; width:10px; height:78px;
      border-radius:6px;
      background:linear-gradient(180deg, #facc15, #eab308);
      box-shadow:inset 0 0 0 1px rgba(0,0,0,.08);
      transform-origin:bottom center; animation: lx-sway 5s ease-in-out infinite;
    }
    .lx-pencil:nth-child(2){
      left:24px; transform:rotate(-8deg);
      background:linear-gradient(180deg, #22c55e, #16a34a);
      animation-delay:.6s;
    }
    .lx-pencil:nth-child(3){
      left:46px; transform:rotate(6deg);
      background:linear-gradient(180deg, #3b82f6, #2563eb);
      animation-delay:1.2s;
    }
    .lx-pencil:nth-child(4){
      left:64px; transform:rotate(-2deg);
      background:linear-gradient(180deg, var(--accent-color), var(--primary-color));
      animation-delay:1.8s;
    } 
  */

/* Base & Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body.lx-auth-body {
  font-family: 'Poppins', 'Segoe UI', system-ui, -apple-system, 'Inter', sans-serif;
  background: linear-gradient(135deg, #f5f7fc 0%, #eef2f9 100%);
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2rem;
}

/* GRID LAYOUT - Two column modern layout */
.lx-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  max-width: 1400px;
  width: 100%;
  background: #ffffff;
  border-radius: 2rem;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
  overflow: hidden;
  transition: all 0.3s ease;
}

/* LEFT PANEL - Form area */
.lx-left {
  padding: 3rem 2.5rem;
  background: white;
  position: relative;
  z-index: 2;
}

/* Brand / Logo */
.lx-brand {
  margin-bottom: 2rem;
}

.lx-brand img {
  height: 48px;
  width: auto;
  object-fit: contain;
}

/* Typography */
.lx-title {
  font-size: 2rem;
  font-weight: 700;
  color: #1a2c3e;
  margin-bottom: 0.75rem;
  letter-spacing: -0.02em;
}

.lx-sub {
  font-size: 0.95rem;
  color: #5b6e8c;
  line-height: 1.5;
  margin-bottom: 2rem;
  max-width: 90%;
}

/* Card-like form container */
.lx-card {
  position: relative;
  background: white;
}

/* Floating chip / badge */
.lx-float-chip {
  display: inline-flex;
  align-items: center;
  background: #e2d8d8;
  padding: 0.4rem 1rem;
  border-radius: 40px;
  font-size: 0.75rem;
  font-weight: 500;
  color: #8a2c2c;
  margin-bottom: 1.5rem;
  letter-spacing: 0.3px;
}

/* Form fields */
.lx-label {
  font-size: 0.85rem;
  font-weight: 600;
  color: #2c3e50;
  margin-bottom: 0.4rem;
  display: block;
}

.lx-input-wrap {
  position: relative;
  display: flex;
  align-items: center;
}

.lx-control {
  width: 100%;
  padding: 0.9rem 1rem;
  font-size: 0.95rem;
  border: 1.5px solid #e2e8f0;
  border-radius: 1rem;
  background: #fafcff;
  transition: all 0.2s ease;
  font-family: inherit;
}

.lx-control:focus {
  outline: none;
  border-color: #792929;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
  background: white;
}

.lx-control::placeholder {
  color: #a0b3d9;
  font-size: 0.85rem;
}

/* Password eye button */
.lx-eye {
  position: absolute;
  right: 12px;
  background: none;
  border: none;
  color: #8ba0bc;
  cursor: pointer;
  padding: 0 6px;
  font-size: 1.1rem;
  transition: color 0.2s;
}

.lx-eye:hover {
  color: #612222;
}

/* Row with checkbox and forgot password */
.lx-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 0.75rem;
}

.form-check {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.form-check-input {
  width: 1.1rem;
  height: 1.1rem;
  border-radius: 0.3rem;
  border: 1.5px solid #cbd5e1;
  cursor: pointer;
}

.form-check-input:checked {
  background-color: #491c1c;
  border-color: #a02e2e;
}

.form-check-label {
  font-size: 0.85rem;
  color: #2d3e5f;
  cursor: pointer;
}

.lx-row a {
  font-size: 0.85rem;
  font-weight: 500;
  color: #b33f3f;
  transition: color 0.2s;
}

.lx-row a:hover {
  color: #1e40af;
  text-decoration: underline !important;
}

/* Login Button */
.lx-login {
  width: 100%;
  background: linear-gradient(105deg, #5f1e1e 0%, #8a2c2c 100%);
  border: none;
  padding: 0.9rem 1.5rem;
  border-radius: 2rem;
  font-weight: 600;
  font-size: 1rem;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.6rem;
  cursor: pointer;
  transition: all 0.25s ease;
  box-shadow: 0 8px 18px rgba(28, 65, 98, 0.15);
  margin-top: 1.5rem;
}

.lx-login:hover {
  transform: translateY(-2px);
  background: linear-gradient(105deg, #501414 0%, #722323 100%);
  box-shadow: 0 12px 24px rgba(28, 65, 98, 0.2);
}

.lx-login:active {
  transform: translateY(1px);
}

/* Alert messages */
.alert {
  padding: 0.75rem 1rem;
  border-radius: 1rem;
  font-size: 0.85rem;
}

/* ========== RIGHT PANEL - VISUAL ACADEMIC DESIGN ========== */
.lx-right {
  background: linear-gradient(145deg, #632d2d 0%, #7e2929 100%);
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  padding: 2rem;
}

/* Decorative arcs & rings */
.lx-arc {
  position: absolute;
  top: -20%;
  right: -15%;
  width: 280px;
  height: 280px;
  border-radius: 50%;
  border: 2px solid rgba(59, 130, 246, 0.15);
  border-top-color: rgba(59, 130, 246, 0.4);
  transform: rotate(25deg);
}

.lx-ring {
  position: absolute;
  bottom: -10%;
  left: -10%;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  border: 2px solid rgba(100, 116, 139, 0.1);
  border-bottom-color: rgba(59, 130, 246, 0.2);
}

/* Main hero image container */
.lx-hero {
  width: 100%;
  max-width: 380px;
  position: relative;
  z-index: 5;
}

.lx-hero-frame {
  background: white;
  border-radius: 2rem;
  padding: 0.8rem;
  box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.1);
  transform: rotate(2deg);
  transition: transform 0.3s ease;
}

.lx-hero-img {
  border-radius: 1.5rem;
  overflow: hidden;
  position: relative;
  background: #e9d7d7;
  min-height: 280px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.lx-hero-img img {
  width: 100%;
  height: auto;
  object-fit: cover;
  display: block;
}

/* Particles effect (simple overlay) */
.lx-particles {
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 20% 40%, rgba(255,255,240,0.08) 1px, transparent 1px);
  background-size: 18px 18px;
  pointer-events: none;
}

/* BOOKS illustration (stacked books) */
.lx-obj.lx-books {
  position: absolute;
  bottom: 12%;
  left: 8%;
  display: flex;
  flex-direction: column;
  gap: 5px;
  z-index: 8;
}

.lx-book {
  width: 48px;
  height: 10px;
  background: #eeb3b3;
  border-radius: 4px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  transform: skewX(-5deg);
}

.lx-book:nth-child(2) {
  width: 56px;
  background: #e4adaf;
}
.lx-book:nth-child(3) {
  width: 42px;
  background: #ddabab;
}

/* CUP with pencils (study theme) */
.lx-obj.lx-cup {
  position: absolute;
  bottom: 15%;
  right: 10%;
  width: 65px;
  height: 65px;
  background: #fef3c7;
  border-radius: 0 0 20px 20px;
  box-shadow: 0 8px 12px rgba(0,0,0,0.1);
  z-index: 9;
}

.lx-cup-body {
  position: relative;
  width: 100%;
  height: 100%;
  background: linear-gradient(145deg, #ffedd5, #fed7aa);
  border-radius: 0 0 20px 20px;
}

.lx-pencil {
  position: absolute;
  bottom: 100%;
  width: 8px;
  height: 28px;
  background: #fbbf24;
  border-radius: 2px 2px 0 0;
  transform-origin: bottom;
  transform: rotate(6deg);
}

.lx-pencil::after {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 0;
  width: 100%;
  height: 6px;
  background: #f9a8d4;
  border-radius: 2px 2px 0 0;
}

.lx-pencil:nth-child(2) {
  left: 12px;
  transform: rotate(-4deg);
  background: #a5f3fc;
}
.lx-pencil:nth-child(3) {
  left: 28px;
  transform: rotate(8deg);
  background: #c4b5fd;
}
.lx-pencil:nth-child(4) {
  left: 45px;
  transform: rotate(-2deg);
  background: #fca5a5;
}

/* Responsive */
@media (max-width: 900px) {
  .lx-grid {
    grid-template-columns: 1fr;
    max-width: 550px;
  }

  .lx-right {
    display: none;
  }

  .lx-left {
    padding: 2rem 1.5rem;
  }

  .lx-title {
    font-size: 1.75rem;
  }

  .lx-sub {
    max-width: 100%;
  }
}

@media (max-width: 480px) {
  body.lx-auth-body {
    padding: 1rem;
  }

  .lx-left {
    padding: 1.5rem;
  }

  .lx-row {
    flex-direction: column;
    align-items: flex-start;
  }
}

/* Additional subtle details */
.lx-control:not(:placeholder-shown) {
  background: white;
  border-color: #cbdff2;
}

.lx-card .form-check-input:focus {
  box-shadow: 0 0 0 2px rgba(59,130,246,0.3);
}

.lx-eye:focus-visible {
  outline: 2px solid #3b82f6;
  border-radius: 30px;
}
    
    /* Animations */
    @keyframes lx-pop{ from{opacity:0; transform:translateY(10px) scale(.98);} to{opacity:1; transform:none;} }
    @keyframes lx-zoom{ from{transform:scale(1);} to{transform:scale(1.06);} }
    @keyframes lx-drift{ 0%,100%{transform:translate3d(0,0,0);} 50%{transform:translate3d(-2%,2%,0);} }
    @keyframes lx-spin{ 0%{ transform:rotate(0deg);} 100%{ transform:rotate(360deg);} }
    @keyframes lx-sway{ 0%,100%{ transform:rotate(0deg);} 50%{ transform:rotate(4deg);} }
    @keyframes lx-floatA{ 0%,100%{ transform:translate(0,0);} 50%{ transform:translate(10px, -14px);} }
    @keyframes lx-floatB{ 0%,100%{ transform:translate(0,0);} 50%{ transform:translate(-12px, 10px);} }
    @keyframes lx-orbitA{ 0%{transform:translate(0,0);} 50%{transform:translate(6px, -6px);} 100%{transform:translate(0,0);} }
    @keyframes lx-orbitB{ 0%{transform:translate(0,0);} 50%{transform:translate(-6px, 6px);} 100%{transform:translate(0,0);} }
    @keyframes lx-chip{ 0%,100%{ transform:translateY(0);} 50%{ transform:translateY(-6px);} }
    @keyframes lx-twinkle{ 0%{opacity:.22;} 50%{opacity:.34;} 100%{opacity:.22;} }
  </style>
</head>
<body class="lx-auth-body">
 
<div class="lx-grid">
  <!-- LEFT: LOGIN FORM -->
  <section class="lx-left">
    <div class="lx-brand">
      <img src="{{ asset('/assets/media/images/web/logo.png') }}" alt="{{ config('app.name', 'Hallienz Home Builder') }}">
    </div>
 
    <h1 class="lx-title">Sign in to {{ config('app.name', 'Hallienz Home Builder') }}</h1>
    <p class="lx-sub">
      Use your institute credentials to manage departments, faculty profiles, notices, and more —
      all from a single dashboard.
    </p>
 
    <form class="lx-card" id="lx_form" action="/login" method="post" novalidate>
      <span class="lx-float-chip">
        <i class="fa-solid fa-shield-halved me-1"></i> Secure token-based access
      </span>
      @csrf
 
      <!-- Alerts -->
      <div id="lx_alert" class="alert d-none mb-3" role="alert"></div>
 
      <!-- Email (Hallienz typically uses email login) -->
      <div class="mb-3">
        <label class="lx-label form-label" for="lx_id_or_email">Institute Email</label>
        <div class="lx-input-wrap">
          <input id="lx_id_or_email" type="email" class="lx-control form-control" name="identifier"
                 placeholder="you@Hallienz.edu.in" required>
        </div>
      </div>
 
      <!-- Password with eye toggle -->
      <div class="mb-2">
        <label class="lx-label form-label" for="lx_pw">Password</label>
        <div class="lx-input-wrap">
          <input id="lx_pw" type="password" class="lx-control form-control" name="password"
                 placeholder="Enter at least 8+ characters" minlength="8" required>
          <button type="button" class="lx-eye" id="lx_togglePw" aria-label="Toggle password visibility">
            <i class="fa-regular fa-eye-slash" aria-hidden="true"></i>
          </button>
        </div>
      </div>
 
      <div class="lx-row mb-3">
        <div class="form-check m-0">
          <input class="form-check-input" type="checkbox" id="lx_keep">
          <label class="form-check-label" for="lx_keep">Keep me logged in</label>
        </div>
        <a class="text-decoration-none" href="/forgot-password">Forgot password?</a>
      </div>
 
      <button class="lx-login" id="lx_btn" type="submit">
        <span class="me-2"><i class="fa-solid fa-right-to-bracket"></i></span> Login
      </button>
    </form>
  </section>
 
  <!-- RIGHT: VISUAL (hidden on mobile) -->
  <aside class="lx-right" id="lx_visual" aria-hidden="true">
    <span class="lx-arc"></span>
    <span class="lx-ring"></span>
 
    <div class="lx-obj lx-books">
      <div class="lx-book"></div>
      <div class="lx-book"></div>
      <div class="lx-book"></div>
    </div>
 
    <div class="lx-obj lx-cup">
      <div class="lx-cup-body"></div>
      <div class="lx-pencil" style="left:8px;"></div>
      <div class="lx-pencil"></div>
      <div class="lx-pencil"></div>
      <div class="lx-pencil"></div>
    </div>
 
    <div class="lx-hero" id="lx_hero">
      <div class="lx-hero-frame">
        <div class="lx-hero-img">
          {{-- Better academic image (library / study hall) --}}
          <img
            src="{{ asset('/assets/media/images/web/logo.png') }}"
            alt="Indian boys studying together">
          <div class="lx-particles"></div>
        </div>
      </div>
    </div>
  </aside>
</div>
 
<script>
  (function(){
    // ---- CONFIG (uses Hallienz Home Builder API contracts) ----
    const LOGIN_API = "/api/auth/login";
    const CHECK_API = "/api/auth/check";
 
    const csrf = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
 
    // ---- DOM ----
    const form    = document.getElementById('lx_form');
    const emailIn = document.getElementById('lx_id_or_email');
    const pwIn    = document.getElementById('lx_pw');
    const keepCb  = document.getElementById('lx_keep');
    const btn     = document.getElementById('lx_btn');
    const alertEl = document.getElementById('lx_alert');
    const toggle  = document.getElementById('lx_togglePw');
 
    // ---- UI helpers ----
    function setBusy(b){
      btn.disabled = b;
      btn.innerHTML = b
        ? '<i class="fa-solid fa-spinner fa-spin me-2"></i>Signing you in…'
        : '<span class="me-2"><i class="fa-solid fa-right-to-bracket"></i></span> Login';
    }
    function showAlert(kind, msg){
      alertEl.classList.remove('d-none', 'alert-danger', 'alert-success', 'alert-warning');
      alertEl.classList.add('alert', kind === 'error' ? 'alert-danger' : (kind === 'warn' ? 'alert-warning' : 'alert-success'));
      alertEl.textContent = msg;
    }
    function clearAlert(){
      alertEl.classList.add('d-none');
      alertEl.textContent = '';
    }
 
    // ---- Storage helpers (keys EXACTLY "token" and "role") ----
    const authStore = {
      set(token, role, keep){
        // Always in session
        sessionStorage.setItem('token', token);
        sessionStorage.setItem('role', role);
        if (keep){
          // Keep me logged in: also in local
          localStorage.setItem('token', token);
          localStorage.setItem('role', role);
        } else {
          localStorage.removeItem('token');
          localStorage.removeItem('role');
        }
      },
      clear(){
        sessionStorage.removeItem('token');
        sessionStorage.removeItem('role');
        localStorage.removeItem('token');
        localStorage.removeItem('role');
      },
      getSession(){
        return { token: sessionStorage.getItem('token'), role: sessionStorage.getItem('role') };
      },
      getLocal(){
        return { token: localStorage.getItem('token'), role: localStorage.getItem('role') };
      }
    };
 
    // ---- Build role dashboard path (adjust routes here if needed) ----
    function rolePath(role){
      const r = (role || '').toString().trim().toLowerCase();
      if (!r) return '/dashboard';
 
      // If later you create role-specific dashboards, you can switch here.
      // Example:
      // if (r === 'director' || r === 'principal' || r === 'it_person') return '/admin/dashboard';
      // if (r === 'hod') return '/hod/dashboard';
      // if (r === 'faculty') return '/faculty/dashboard';
      // if (r === 'student') return '/student/dashboard';
 
      return '/dashboard';
    }
 
    // ---- Password eye toggle ----
    toggle?.addEventListener('click', () => {
      const show = pwIn.type === 'password';
      pwIn.type = show ? 'text' : 'password';
      toggle.innerHTML = show
        ? '<i class="fa-regular fa-eye" aria-hidden="true"></i>'
        : '<i class="fa-regular fa-eye-slash" aria-hidden="true"></i>';
    });
 
    // ---- Auto-redirect if token already present in local (Keep me logged in) ----
    async function tryAutoLoginFromLocal(){
      const { token, role } = authStore.getLocal();
      if(!token) return;
 
      try{
        const res = await fetch(CHECK_API, {
          headers: { 'Authorization': 'Bearer ' + token }
        });
        const data = await res.json().catch(() => ({}));
        if(res.ok && data && data.user){
          const resolvedRole = (data.user.role || role || '').toString().toLowerCase();
          authStore.set(token, resolvedRole, true);
          window.location.replace(rolePath(resolvedRole));
        } else {
          authStore.clear();
          showAlert('error', data?.message || data?.error || 'Your session expired. Please log in again.');
        }
      } catch(e){
        // network issue: ignore, stay on login
      }
    }
 
    document.addEventListener('DOMContentLoaded', () => {
      tryAutoLoginFromLocal();
    });
 
    // ---- Intercept submit -> call /api/auth/login ----
    form?.addEventListener('submit', async (e) => {
      e.preventDefault();
      clearAlert();
 
      const identifier = (emailIn.value || '').trim();
      const password   = pwIn.value || '';
      const keep       = !!keepCb.checked;
 
      if(!identifier || !password){
        showAlert('error','Please enter both email and password.');
        return;
      }
 
      setBusy(true);
      try{
        const res = await fetch(LOGIN_API, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf
          },
          // Backend expects: { email, password }
          body: JSON.stringify({ email: identifier, password, remember: keep })
        });
 
        const data = await res.json().catch(() => ({}));
 
        if(!res.ok){
          const msg = data?.message || data?.error ||
                      (data?.errors ? Object.values(data.errors).flat().join(', ') : 'Unable to log in.');
          showAlert('error', msg);
          setBusy(false);
          return;
        }
 
        // Expected from your UserController: { success, token, token_type, user:{ role, ... } }
        const token = data?.access_token || data?.token || '';
        const role  = (data?.user?.role || localStorage.getItem('role') || 'student').toLowerCase();
 
        if(!token){
          showAlert('error', 'No token received from server.');
          setBusy(false);
          return;
        }
 
        // Save token+role
        authStore.set(token, role, keep);
 
        showAlert('success', 'Login successful. Redirecting…');
        setTimeout(() => {
          window.location.assign(rolePath(role));
        }, 500);
 
      } catch(err){
        showAlert('error','Network error. Please try again.');
      } finally {
        setBusy(false);
      }
    });
 
    // ---- Parallax (desktop only) ----
    (function(){
      const stage  = document.getElementById('lx_visual');
      const hero   = document.getElementById('lx_hero');
      const frame  = document.querySelector('.lx-hero-frame');
      const img    = document.querySelector('.lx-hero-img img');
      if (!stage || !frame || !img || !hero) return;
 
      const mq = window.matchMedia('(max-width: 992px)');
      let targetTX = 0, targetTY = 0, targetRX = 0, targetRY = 0;
      let currTX = 0, currTY = 0, currRX = 0, currRY = 0;
      let rafId = null;
 
      const MAX_T = 18, MAX_RX = 6, MAX_RY = 8, LERP = 0.12;
 
      function onMove(e){
        const rect = stage.getBoundingClientRect();
        const cx = rect.left + rect.width/2;
        const cy = rect.top  + rect.height/2;
        const dx = (e.clientX - cx) / (rect.width/2);
        const dy = (e.clientY - cy) / (rect.height/2);
        const ndx = Math.max(-1, Math.min(1, dx));
        const ndy = Math.max(-1, Math.min(1, dy));
 
        targetTX = ndx * MAX_T;
        targetTY = ndy * MAX_T;
        targetRY = ndx * MAX_RY;
        targetRX = -ndy * MAX_RX;
 
        if (!hero.classList.contains('is-tracking')){
          hero.classList.add('is-tracking');
          tick();
        }
      }
      function onLeave(){ targetTX = targetTY = targetRX = targetRY = 0; }
      function tick(){
        currTX += (targetTX - currTX) * LERP;
        currTY += (targetTY - currTY) * LERP;
        currRX += (targetRX - currRX) * LERP;
        currRY += (targetRY - currRY) * LERP;
 
        frame.style.transform =
          `translate3d(${currTX.toFixed(2)}px, ${currTY.toFixed(2)}px, 0)
           rotateX(${currRX.toFixed(2)}deg)
           rotateY(${currRY.toFixed(2)}deg)`;
 
        const ix = (-currTX * 0.6).toFixed(2);
        const iy = (-currTY * 0.6).toFixed(2);
        img.style.transform = `translate3d(${ix}px, ${iy}px, 0) scale(1.05)`;
 
        const nearZero =
          Math.abs(currTX) < 0.15 && Math.abs(currTY) < 0.15 &&
          Math.abs(currRX) < 0.08 && Math.abs(currRY) < 0.08 &&
          Math.abs(targetTX) < 0.15 && Math.abs(targetTY) < 0.15 &&
          Math.abs(targetRX) < 0.08 && Math.abs(targetRY) < 0.08;
 
        if (!nearZero){
          rafId = requestAnimationFrame(tick);
        } else {
          frame.style.transform = 'translate3d(0,0,0) rotateX(0) rotateY(0)';
          img.style.transform = 'translate3d(0,0,0) scale(1)';
          hero.classList.remove('is-tracking');
          rafId && cancelAnimationFrame(rafId);
          rafId = null;
        }
      }
      function attach(){ if (mq.matches) return; stage.addEventListener('mousemove', onMove); stage.addEventListener('mouseleave', onLeave); }
      function detach(){ stage.removeEventListener('mousemove', onMove); stage.removeEventListener('mouseleave', onLeave); onLeave(); }
 
      attach();
      mq.addEventListener('change', () => { detach(); attach(); });
      window.addEventListener('blur', onLeave);
    })();
  })();
</script>
</body>
</html>
 
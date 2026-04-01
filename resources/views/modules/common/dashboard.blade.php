@extends('pages.users.layout.structure')

@section('title', 'Dashboard — TechnoHere')

@section('styles')
<style>
    /* =====================================================
       DASHBOARD PAGE — Clean centered welcome screen
       ===================================================== */

    .dash-container {
        min-height: calc(100vh - 60px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 32px;
    }

    .dash-welcome-card {
        background: #fff;
        border-radius: 32px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08), 0 4px 12px rgba(0,0,0,0.03);
        padding: 64px 56px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        max-width: 680px;
        width: 100%;
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }

    .dash-icon-ring {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        background: linear-gradient(135deg, #2563eb, #1e40af);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 32px;
        box-shadow: 0 12px 28px rgba(37,99,235,0.25);
        flex-shrink: 0;
    }

    .dash-icon-ring svg {
        width: 48px;
        height: 48px;
    }

    .dash-welcome-title {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        font-size: 42px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 16px;
        line-height: 1.2;
        letter-spacing: -0.02em;
    }
    
    .dash-welcome-title span { 
        background: linear-gradient(135deg, #2563eb, #1e40af);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .dash-welcome-sub {
        font-size: 18px;
        color: #475569;
        line-height: 1.6;
        margin-bottom: 32px;
        max-width: 480px;
    }

    .dash-divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #2563eb, #60a5fa);
        border-radius: 4px;
        margin-bottom: 32px;
    }

    /* Decorative elements */
    .dash-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #f1f5f9;
        border-radius: 100px;
        padding: 8px 20px;
        margin-top: 24px;
        font-size: 14px;
        color: #1e293b;
        font-weight: 500;
    }
    
    .dash-badge-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #22c55e;
        animation: pulse 2s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(1.2); }
    }

    /* Simple stat cards - minimal */
    .dash-stats {
        display: flex;
        gap: 20px;
        justify-content: center;
        margin-top: 40px;
        width: 100%;
        flex-wrap: wrap;
    }
    
    .dash-stat-item {
        text-align: center;
        padding: 12px 24px;
        background: #f8fafc;
        border-radius: 16px;
        min-width: 120px;
    }
    
    .dash-stat-number {
        font-size: 28px;
        font-weight: 700;
        color: #0f172a;
        font-family: 'Inter', monospace;
    }
    
    .dash-stat-label {
        font-size: 12px;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 4px;
    }

    /* Responsive */
    @media (max-width: 640px) {
        .dash-container {
            padding: 20px;
        }
        .dash-welcome-card {
            padding: 40px 28px;
            border-radius: 24px;
        }
        .dash-welcome-title {
            font-size: 32px;
        }
        .dash-welcome-sub {
            font-size: 16px;
        }
        .dash-icon-ring {
            width: 72px;
            height: 72px;
        }
        .dash-icon-ring svg {
            width: 36px;
            height: 36px;
        }
        .dash-stats {
            gap: 12px;
        }
        .dash-stat-item {
            padding: 8px 16px;
            min-width: 100px;
        }
        .dash-stat-number {
            font-size: 22px;
        }
    }
    
    @media (max-width: 480px) {
        .dash-welcome-card {
            padding: 32px 20px;
        }
        .dash-welcome-title {
            font-size: 28px;
        }
        .dash-welcome-sub {
            font-size: 14px;
        }
    }
</style>
@endsection

@section('content')

<div class="dash-container">
    <div class="dash-welcome-card">
        
        <div class="dash-icon-ring">
            <svg fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
        </div>

        <h1 class="dash-welcome-title">
            Welcome to <span>TechnoHere</span>
        </h1>

        <p class="dash-welcome-sub">
            Your examination portal is ready. Access your courses, tests, and results from here.
        </p>

        <div class="dash-divider"></div>
        
        <div class="dash-badge">
            <div class="dash-badge-dot"></div>
            <span>Session Active</span>
        </div>
        
        {{-- Simple stats for visual balance --}}
        <div class="dash-stats">
            <div class="dash-stat-item">
                <div class="dash-stat-number">—</div>
                <div class="dash-stat-label">Courses</div>
            </div>
            <div class="dash-stat-item">
                <div class="dash-stat-number">—</div>
                <div class="dash-stat-label">Tests</div>
            </div>
            <div class="dash-stat-item">
                <div class="dash-stat-number">—</div>
                <div class="dash-stat-label">Results</div>
            </div>
        </div>
        
    </div>
</div>

@endsection

@section('scripts')
{{-- No scripts needed — clean dashboard --}}
<script>
    (function() {
        // Simple console greeting — no API calls
        console.log('TechnoHere Dashboard — Welcome!');
    })();
</script>
@endsection
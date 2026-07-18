@extends('layouts.app')

@section('title', 'Invexorite Wealth | Grow Your Wealth One Egg At A Time')

@section('content')

<div class="farm-page">

    <!-- ==========================================
            Floating Background Elements
    =========================================== -->

    <div class="sky">
        <div class="cloud cloud-1"></div>
        <div class="cloud cloud-2"></div>
        <div class="cloud cloud-3"></div>

        <div class="floating-egg egg-1">🥚</div>
        <div class="floating-egg egg-2">🥚</div>
        <div class="floating-egg egg-3">🥚</div>
    </div>

    <!-- ==========================================
            NAVBAR
    =========================================== -->

    <nav class="navbar">

        <a href="/" class="logo">

            <img src="/images/homelogo.png" alt="Logo">

        </a>

        <ul class="nav-links">

            <li><a href="#hero">Home</a></li>
            <li><a href="#hens">Marketplace</a></li>
            <li><a href="#how">How It Works</a></li>
            <li><a href="#faq">FAQ</a></li>

        </ul>

        <div class="nav-actions">

            <a href="/admin/login" class="btn-outline">
                Login
            </a>

            <a href="/register" class="btn-primary">
                Register
            </a>

        </div>

        <button class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>

    </nav>

    <div class="mobile-overlay"></div>

    <div class="mobile-menu">

        <ul>

            <li><a href="#hero">Home</a></li>

            <li><a href="#hens">Marketplace</a></li>

            <li><a href="#how">How It Works</a></li>

            <li><a href="#faq">FAQ</a></li>

            <li><a href="admin/login">Login</a></li>

        </ul>

        <a href="{{ route('register') }}" class="btn-primary">
            Buy Your First Hen
        </a>

    </div>

    <!-- ==========================================
            HERO
    =========================================== -->

    <section class="hero">

        <div class="container hero-grid">

            <div class="hero-left">

                <span class="badge">

                    🥚 Wealth Powered By Daily Eggs

                </span>

                <h2>

                    Grow Your Wealth

                    <span>One Egg At A Time.</span>

                </h2>

                <p>

                    Buy digital hens that lay valuable eggs every day.

                    Each egg represents your daily earnings.

                    Fill your tray and choose whether to withdraw

                    or reinvest to grow your flock.

                </p>

                <div class="hero-buttons">

                    <a href="#" class="btn-primary">

                        Buy a Hen

                    </a>

                    <a href="#works" class="btn-outline">

                        Learn More

                    </a>

                </div>

            <div class="hero-features">

                <div class="feature-item">

                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>

                    <div class="feature-text">
                        <h4>Secure</h4>
                        <span>Protected</span>
                    </div>

                </div>

                <div class="feature-item">

                    <div class="feature-icon egg">
                        <i class="fas fa-egg"></i>
                    </div>

                    <div class="feature-text">
                        <h4>Daily Eggs</h4>
                        <span>Earn Every Day</span>
                    </div>

                </div>

                <div class="feature-item">

                    <div class="feature-icon refresh">
                        <i class="fas fa-sync-alt"></i>
                    </div>

                    <div class="feature-text">
                        <h4>Reinvest</h4>
                        <span>Grow Your Flock</span>
                    </div>

                </div>

            </div>

            </div>

            <div class="hero-right">

                <div class="hero-card">

                    <img

                        src="/images/hero-hen.png"

                        class="hero-hen"

                        alt="Hen"

                    >

                    <div class="egg-basket">

                        <div class="basket-counter">

                            Today's Eggs

                            <strong>18</strong>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ==========================================
            LIVE STATS
    =========================================== -->

    <section class="stats">

        <div class="container">

            <div class="stats-wrapper">

                <div class="stat-card">

                    <div class="stat-icon green">
                        <i class="fas fa-users"></i>
                    </div>

                    <div class="stat-content">

                        <h2 class="counter"
                            data-target="3560">
                            0
                        </h2>

                        <h4>Active Investors</h4>

                        <span>+48 joined today</span>

                    </div>

                </div>

                <div class="stat-card">

                    <div class="stat-icon orange">
                        <i class="fas fa-dove"></i>
                    </div>

                    <div class="stat-content">

                        <h2 class="counter"
                            data-target="12890">
                            0
                        </h2>

                        <h4>Digital Hens</h4>

                        <span>Growing every hour</span>

                    </div>

                </div>

                <div class="stat-card">

                    <div class="stat-icon yellow">
                        <i class="fas fa-egg"></i>
                    </div>

                    <div class="stat-content">

                        <h2 class="counter"
                            data-target="45218">
                            0
                        </h2>

                        <h4>Eggs Collected Today</h4>

                        <span>Live production</span>

                    </div>

                </div>

                <div class="stat-card">

                    <div class="stat-icon blue">
                        <i class="fas fa-wallet"></i>
                    </div>

                    <div class="stat-content">

                        <h2 class="counter"
                            data-target="920000">
                            0
                        </h2>

                        <h4>Total Withdrawals</h4>

                        <span>Paid to investors</span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ==========================================
            OUR HENS
    =========================================== -->

    <section
        id="hens"
        class="hens-section">

        <div class="container">

            <div class="section-title">

                <span>Choose Your Investment</span>

                <h2>

                    Meet Your Digital Hens

                </h2>

            </div>

            <div class="hen-grid">

                <!-- Small -->

                <div class="hen-card">

                    <div class="hen-image">

                        <img src="/images/small-hen.png">

                    </div>

                    <h3>🐣 Small Hen</h3>

                    <h4>0.70% Daily</h4>

                    <p>

                        Perfect for beginners.

                    </p>

                    <a href="#" class="btn-primary">

                        Buy Hen

                    </a>

                </div>

                <!-- Medium -->

                <div class="hen-card">

                    <div class="hen-image">

                        <img src="/images/medium-hen.png">

                    </div>

                    <h3>🐔 Medium Hen</h3>

                    <h4>0.85% Daily</h4>

                    <p>

                        Balanced growth.

                    </p>

                    <a href="#" class="btn-primary">

                        Buy Hen

                    </a>

                </div>

                <!-- Large -->

                <div class="hen-card">

                    <div class="popular">
                        Most Popular
                    </div>

                    <div class="hen-image">

                        <img src="/images/large-hen.png">

                    </div>

                    <h3>🐓 Large Hen</h3>

                    <h4>1.00% Daily</h4>

                    <p>

                        Faster egg production.

                    </p>

                    <a href="#" class="btn-primary">

                        Buy Hen

                    </a>

                </div>

                <!-- XL -->

                <div class="hen-card featured">

                    <div class="hen-image">

                        <img src="/images/xl-hen.png">

                    </div>

                    <h3>👑 X-Large Hen</h3>

                    <h4>1.20% Daily</h4>

                    <p>

                        Maximum daily rewards.

                    </p>

                    <a href="#" class="btn-primary">

                        Buy Hen

                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- ==========================================
            HOW IT WORKS
    

    <section id="works" class="how-it-works">

        <div class="container">

            <div class="section-title">

                <span>Simple Process</span>

                <h2>

                    From Hen To Wealth

                </h2>

            </div>

            <div class="steps">

                <div class="step">

                    <div class="step-icon">🐣</div>

                    <h3>Buy a Hen</h3>

                </div>

                <div class="step">

                    <div class="step-icon">🥚</div>

                    <h3>Collect Eggs</h3>

                </div>

                <div class="step">

                    <div class="step-icon">🧺</div>

                    <h3>Fill Tray</h3>

                </div>

                <div class="step">

                    <div class="step-icon">💰</div>

                    <h3>Withdraw or Reinvest</h3>

                </div>

            </div>

        </div>

    </section>

    =========================================== -->

    <!-- ==========================================
            EGG TRAY
    =========================================== -->

    <!-- ==========================================
            CALL TO ACTION
    =========================================== -->

    <section class="cta-section">

    <div class="container">

        <div class="cta-container">

            <span class="cta-egg one">🥚</span>
            <span class="cta-egg two">🥚</span>
            <span class="cta-egg three">🥚</span>

            <div class="cta-content">

                <h2>Start Growing Your Digital Flock Today</h2>

                <p>
                    Buy your first digital hen, collect eggs every day, and
                    decide whether to withdraw your earnings or reinvest to
                    grow your wealth.
                </p>

                <div class="cta-buttons">

                    <a href="{{ route('register') }}" class="btn-primary">
                        Buy Your First Hen
                    </a>

                    <a href="#hens" class="btn-outline">
                        Explore Hens
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

    <!-- ==========================================
            FOOTER
    =========================================== -->

<footer class="footer">

    <!-- ==========================
        Footer CTA
    =========================== -->

    <div class="footer-top">

        <div class="container">

            <h2>
                Start Growing Your Wealth Today
            </h2>

            <p>
                Join thousands of investors who are already collecting daily eggs
                from their digital hens. Buy your first hen today and begin
                building your digital farm.
            </p>

            <a href="/register" class="btn btn-light">
                Buy Your First Hen
            </a>

        </div>

    </div>

    <!-- ==========================
        Main Footer
    =========================== -->

    <div class="footer-main">

        <div class="container">

            <div class="footer-grid">

                <!-- Brand -->

                <div class="footer-brand">

                    <img
                        src="/images/logohome.png"
                        alt="Invexorite Wealth">

                    <h3>Invexorite Wealth</h3>

                    <p>
                        Grow your wealth one egg at a time.
                        Invest in digital hens, collect daily eggs,
                        withdraw your earnings or reinvest to grow
                        your flock.
                    </p>

                    <div class="footer-social">

                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#">
                            <i class="fab fa-x-twitter"></i>
                        </a>

                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                    </div>

                </div>

                <!-- Company -->

                <div class="footer-column">

                    <h4>Company</h4>

                    <ul>

                        <li>
                            <a href="#">About Us</a>
                        </li>

                        <li>
                            <a href="#">How It Works</a>
                        </li>

                        <li>
                            <a href="#">Our Mission</a>
                        </li>

                        <li>
                            <a href="#">FAQs</a>
                        </li>

                        <li>
                            <a href="#">Contact Us</a>
                        </li>

                    </ul>

                </div>

                <!-- Invest -->

                <div class="footer-column">

                    <h4>Invest</h4>

                    <ul>

                        <li>
                            <a href="#">Buy Hens</a>
                        </li>

                        <li>
                            <a href="#">Investment Plans</a>
                        </li>

                        <li>
                            <a href="#">Egg Tray</a>
                        </li>

                        <li>
                            <a href="#">Withdrawals</a>
                        </li>

                        <li>
                            <a href="#">Referral Program</a>
                        </li>

                    </ul>

                </div>

                <!-- Legal -->

                <div class="footer-column">

                    <h4>Legal</h4>

                    <ul>

                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>

                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>

                        <li>
                            <a href="#">Risk Disclosure</a>
                        </li>

                        <li>
                            <a href="#">Cookies Policy</a>
                        </li>

                        <li>
                            <a href="#">Support</a>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <!-- ==========================
        Bottom Footer
    =========================== -->

    <div class="footer-bottom">

        <div class="container">

            <div class="footer-bottom-content">

                <p>
                    © {{ date('Y') }} Invexorite Wealth. All Rights Reserved.
                </p>

                <div class="footer-badges">

                    <div class="footer-badge">
                        <i class="fas fa-shield-alt"></i>
                        Secure Platform
                    </div>

                    <div class="footer-badge">
                        <i class="fas fa-lock"></i>
                        SSL Encrypted
                    </div>

                    <div class="footer-badge">
                        <i class="fas fa-user-shield"></i>
                        Privacy Protected
                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>

</div>

@endsection
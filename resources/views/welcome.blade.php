<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Invexorite Wealth</title>

<style>
/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

body {
    background: #f7f9fc;
    color: #333;
}

/* NAVBAR */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 60px;
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #1e88e5;
}

.menu a {
    margin-left: 25px;
    text-decoration: none;
    color: #333;
    font-weight: 500;
}

.menu a:hover {
    color: #1e88e5;
}

.btn {
    padding: 10px 18px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}

.login-btn {
    background: transparent;
    border: 1px solid #1e88e5;
    color: #1e88e5;
}

.register-btn {
    background: #1e88e5;
    color: white;
}

/* HERO SECTION */
.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 80px 60px;
}

.hero-text h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.hero-text p {
    font-size: 18px;
    margin-bottom: 25px;
}

.hero img {
    width: 450px;
}

.primary-btn {
    background: #1e88e5;
    color: white;
    padding: 14px 28px;
    border-radius: 8px;
    text-decoration: none;
}

/* SECTIONS */
section {
    padding: 80px 60px;
}

.section-title {
    text-align: center;
    margin-bottom: 40px;
    font-size: 32px;
}

/* PACKAGES */
.packages {
    display: flex;
    gap: 30px;
    justify-content: center;
}

.card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    width: 280px;
    text-align: center;
}

.card h3 {
    margin-bottom: 10px;
}

.card p {
    margin-bottom: 20px;
}

.card button {
    background: #1e88e5;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
}

/* HOW IT WORKS */
.steps {
    display: flex;
    justify-content: center;
    gap: 40px;
}

.step {
    max-width: 250px;
    text-align: center;
}

.step-number {
    font-size: 40px;
    color: #1e88e5;
    margin-bottom: 10px;
}

/* CONTACT */
.contact-form {
    max-width: 600px;
    margin: auto;
    display: flex;
    flex-direction: column;
}

.contact-form input,
.contact-form textarea {
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 6px;
    border: 1px solid #ddd;
}

.contact-form button {
    background: #1e88e5;
    color: white;
    padding: 14px;
    border: none;
    border-radius: 6px;
}

/* FOOTER */
footer {
    text-align: center;
    padding: 25px;
    background: #111;
    color: white;
}

/* DISCLAIMER */

.disclaimer-section {
    background: #fff3f3;
    padding: 70px 20px;
}

.disclaimer-container {
    max-width: 900px;
    margin: auto;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

.disclaimer-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #d32f2f;
}

.disclaimer-container p {
    font-size: 16px;
    margin-bottom: 15px;
}

.disclaimer-container ul {
    margin-left: 20px;
    margin-bottom: 20px;
}

.disclaimer-container li {
    margin-bottom: 8px;
}

.disclaimer-highlight {
    font-weight: bold;
    color: #b71c1c;
}
/* CONTACT SECTION LAYOUT */

#contact {
    padding: 80px 60px;
    background: #f8fbff;
}

/* FLEX CONTAINER */

.contact-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 60px;
    max-width: 1100px;
    margin: auto;
}

/* IMAGE COLUMN */

.contact-image img {
    width: 320px;
    height: auto;
}

/* CONTENT COLUMN */

.contact-content {
    flex: 1;
}

/* TITLE */

.section-title {
    font-size: 32px;
    margin-bottom: 20px;
}

/* FORM */

.contact-form {
    display: flex;
    flex-direction: column;
}

.contact-form input,
.contact-form textarea {
    padding: 14px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 15px;
}

/* BUTTON */

.contact-form button {
    background: #1e88e5;
    color: white;
    padding: 14px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s ease;
}

.contact-form button:hover {
    background: #1565c0;
}

/* RESPONSIVE DESIGN */

@media(max-width: 900px) {

.contact-container {
    flex-direction: column;
    text-align: center;
}

.contact-image img {
    width: 200px;
}

}

}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
<div class="logo"><img src="/images/homelogo.png"></div>

<div class="menu">
<a href="#home">Home</a>
<a href="#packages">Packages</a>
<a href="#how">How It Works</a>
<a href="#contact">Get In Touch</a>
<a href="/admin/login"><button class="btn login-btn">Login</button></a>
<a href="/register"><button class="btn register-btn">Register</button></a>
</div>
</nav>


<!-- HERO -->
<section class="hero" id="home">
<div class="hero-text">
<h1>Grow Your Wealth With Smart Investments</h1>
<p>
Open your account in minutes, select an investment package that suits your budget, and monitor your returns directly from your personal dashboard.
</p>
<a href="/register" class="primary-btn">Start Investing</a>
</div>

<img src="/images/home.png">
</section>


<!-- PACKAGES -->
<section id="packages">
<h2 class="section-title">Investment Packages</h2>

<div class="packages">

<div class="card">
<h3>Starter Plan</h3>
<p>Minimum Deposit: $50<br>Weekly ROI: 5%</p>
<button onclick="redirectRegister()">Invest Now</button>
</div>

<div class="card">
<h3>Growth Plan</h3>
<p>Minimum Deposit: $200<br>Weekly ROI: 8%</p>
<button onclick="redirectRegister()">Invest Now</button>
</div>

<div class="card">
<h3>Premium Plan</h3>
<p>Minimum Deposit: $500<br>Weekly ROI: 12%</p>
<button onclick="redirectRegister()">Invest Now</button>
</div>

</div>
</section>


<!-- HOW IT WORKS -->
<section id="how">
<h2 class="section-title">How It Works</h2>

<div class="steps">

<div class="step">
<div class="step-number">1</div>
<h3>Create Your Secure Account</h3>
<p>
Register in minutes by providing your basic details. Your account gives you
access to available investment packages, performance tracking tools, and your
personal investor dashboard.
</p>
</div>

<div class="step">
<div class="step-number">2</div>
<h3>Select an Investment Package</h3>
<p>
Choose a package that matches your investment goals and budget. Each package
clearly outlines expected returns, duration, and participation requirements so
you can make informed decisions.
</p>
</div>

<div class="step">
<div class="step-number">3</div>
<h3>Track Growth and Receive Returns</h3>
<p>
Monitor your investment performance directly from your dashboard and receive
returns according to your selected package schedule, subject to platform
performance and market conditions.
</p>
</div>

</div>
</section>


<!-- CONTACT -->
<section id="contact">

<div class="contact-container">

<div class="contact-image">
<img src="/images/main_logo.png" alt="Invexorite Wealth Logo">
</div>

<div class="contact-content">
<h2 class="section-title">Get In Touch</h2>

<form class="contact-form" onsubmit="submitForm(event)">
<input type="text" placeholder="Full Name" required>
<input type="email" placeholder="Email Address" required>
<textarea rows="5" placeholder="Your Message"></textarea>
<button type="submit">Send Message</button>
</form>
</div>

</div>

</section>

<!-- INVESTMENT RISK DISCLAIMER -->
<section id="disclaimer" class="disclaimer-section">
    <div class="disclaimer-container">

        <h2>Important Investment Risk Notice</h2>

        <p>
            Investments offered through this platform involve financial risk and are not guaranteed.
            Participation is voluntary and investors may lose part or all of their invested capital.
        </p>

        <p>
            This platform does not provide financial, legal, or tax advice. Users are encouraged to seek
            independent professional advice before making investment decisions.
        </p>

        <ul>
            <li>Returns displayed on this platform are estimates and are not guaranteed.</li>
            <li>Market conditions, operational risks, and economic factors may affect performance.</li>
            <li>You should only invest funds that you can afford to lose.</li>
            <li>Past or projected earnings do not guarantee future performance.</li>
            <li>This platform is not a bank and investments are not protected by deposit insurance schemes.</li>
        </ul>

        <p>
            By registering an account and investing through this platform, you confirm that you understand
            the risks involved and accept full responsibility for your investment decisions.
        </p>

        <p class="jurisdiction-note">
            Users from Lesotho and South Africa acknowledge that they are participating at their own discretion
            and remain responsible for compliance with any applicable local financial regulations.
        </p>

    </div>
</section>


<!-- FOOTER -->
<footer>
<p>© 2026 Investment Platform. All rights reserved.</p>
</footer>


<script>

function redirectRegister() {
    window.location.href = "/register";
}

function submitForm(event) {
    event.preventDefault();
    alert("Message submitted successfully!");
}

</script>

</body>
</html>

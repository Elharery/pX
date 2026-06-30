<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuln page</title>
    <link rel="icon" type="image/x-icon" href="images/logopng.png">
    <link rel="stylesheet" href="{{ asset('css/Frame-Work.css') }}">
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <canvas id="bg"></canvas>
    {{-- <i class="fa-solid fa-shield-halved icon"></i>

<i class="fa-solid fa-lock icon"></i>

<i class="fa-solid fa-bug icon"></i>

<i class="fa-solid fa-database icon"></i>

<i class="fa-solid fa-network-wired icon"></i>

<i class="fa-solid fa-globe icon"></i>

<i class="fa-solid fa-key icon"></i>

<i class="fa-solid fa-server icon"></i>

<i class="fa-solid fa-fingerprint icon"></i>

<i class="fa-solid fa-user-secret icon"></i> --}}
    <x-header />
    {{-- section --}}
    {{-- <section>
        <div class="content">
            <h1>p<span class="wrd-c">X</span></h1>
            <p class="fs-20">Scan your website for vulnerabilities and keep your digital assets safe.</p>
            <button class="btn-out fs-20">Check Now !</button>
        </div>
    </section> --}}
    <section class="hero">

    <div class="content">

        <span class="hero-tag">
            Advanced Web Security Platform 🔒
        </span>

        <h1>
            Protect Your System<br>
            Before <span class="wrd-c">Attackers</span> Do.
        </h1>

        {{-- <p class="fs-20">
            Scan your website for security vulnerabilities, analyze SSL,
            verify security headers, detect exposed files, and receive
            detailed reports with actionable recommendations.
        </p> --}}

        <div class="hero-buttons">

            <button class="btn-out fs-20">
                Learn More
                <i class="fa-solid fa-user-secret"></i>
            </button>
        </div>
    </div>

</section>
    {{-- about --}}
    <div class="about" id="about">
    <div class="about-content hds">

        <span class="small-title">ABOUT US</span>

        <h2>
            Secure Your System
            <span>Before It's Too Late.</span>
        </h2>

        <p>
            Our platform helps developers, businesses, and security professionals
            identify vulnerabilities before they become real threats. From SSL
            analysis and security headers to vulnerability detection, we provide
            everything needed to strengthen your website's security.
        </p>

        <div class="about-list">

            <div class="hds">
                <i class="fa-solid fa-shield-halved"></i>
                Vulnerability Detection
            </div>

            <div class="hds">
                <i class="fa-solid fa-lock"></i>
                SSL & HTTPS Analysis
            </div>

            <div class="hds">
                <i class="fa-solid fa-globe"></i>
                Security Headers Check
            </div>

            <div class="hds">
                <i class="fa-solid fa-chart-line"></i>
                Detailed Security Reports
            </div>

        </div>

    </div>

    <div class="about-image">

        <img src="{{ asset('images/about-png.png') }}" class="brd-r hds" alt="Cyber Security">

    </div>

</div>

    {{-- <section class="about">

    <div class="about-image">
        <img src="{{ asset('images/about/about.png') }}" alt="">
    </div>

    <div class="about-content">

        <span class="small-title">ABOUT US</span>

        <h2>
            Protecting Websites Against
            <span>Modern Cyber Threats</span>
        </h2>

        <p>
            pX is an advanced web security platform that helps developers,
            businesses, and security professionals identify vulnerabilities
            before attackers do. Our mission is to make website security
            simple, fast, and accessible.
        </p>

        <div class="stats">

            <div>
                <h3>10K+</h3>
                <span>Scans</span>
            </div>

            <div>
                <h3>99.9%</h3>
                <span>Accuracy</span>
            </div>

            <div>
                <h3>24/7</h3>
                <span>Support</span>
            </div>

        </div>

    </div>

</section> --}}
    {{-- <div class="about pt-70">
        <div>
            <h3 class="hding c-fff">About p<span class="wrd-c">X</span></h3>
        </div>
        <div class="d-flex gap-20 j-cont-a pt-70">
            <div>
                <p class="c-fff w-300p">p<span class="wrd-c">X</span> is a powerful tool for identifying and mitigating security vulnerabilities in your web applications. Our platform provides comprehensive scanning capabilities to ensure your digital assets are protected.</p>
            </div>
            <div class="img"><img class="w-300p brd-r" src="{{ asset('images/a.jpg') }}" alt="About pX"></div>
        </div>
    </div> --}}
    {{-- next sec--}}
    <section class="features" id="features">

    <h4 class="hds">FEATURES</h4>

    <h2 class="hds">Everything You Need</h2>

    <div class="cards">

        <div class="card hds">

            <i class="fa-solid fa-shield-halved"></i>

            <h3>Vulnerability Scan</h3>

            <p>
                Detect common web vulnerabilities automatically.
            </p>

        </div>

        <div class="card hds">

            <i class="fa-solid fa-lock"></i>

            <h3>SSL Analysis</h3>

            <p>
                Validate SSL certificates and HTTPS configuration.
            </p>

        </div>

        <div class="card hds">

            <i class="fa-solid fa-globe"></i>

            <h3>Security Headers</h3>

            <p>
                Check HTTP security headers for missing protection.
            </p>

        </div>

        <div class="card hds">

            <i class="fa-solid fa-server"></i>

            <h3>Technology Detection</h3>

            <p>
                Discover frameworks and server technologies.
            </p>

        </div>

        <div class="card hds">

            <i class="fa-solid fa-file-shield"></i>

            <h3>Sensitive Files</h3>

            <p>
                Detect exposed configuration and backup files.
            </p>

        </div>

        <div class="card hds">

            <i class="fa-solid fa-chart-line"></i>

            <h3>Security Reports</h3>

            <p>
                Detailed reports with recommendations.
            </p>

        </div>

    </div>

</section>
    {{--  --}}

<section class="plans hds" id="plans">

    <div class="heading">
        <h2>Choose Your Plan</h2>
        <p>Select the perfect plan for your security testing needs.</p>
    </div>

    <div class="plans-container hds">

        <!-- Basic Plan -->
        <a href="#" class="c-fff txt-dec-none hds">

            <div class="plan-box">
                <h3>Basic</h3>
            <span>Free</span>

            <ul>
                <li><i class="fa-solid fa-check"></i> Automated Security Scans</li>
                <li><i class="fa-solid fa-check"></i> Up to 5 Scans per Month</li>
                <li><i class="fa-solid fa-check"></i> Basic Vulnerability Report</li>
                <li><i class="fa-solid fa-check"></i> Scan One Website</li>
                <li><i class="fa-solid fa-check"></i> Community Support</li>
            </ul>

            {{-- <a href="#" class="btn">Get Started</a> --}}
        </div>

        </a>
        <!-- Business Plan -->
        <a href="#" class="c-fff txt-dec-none hds ">

            <div class="plan-box active">
                <div class="popular">Most Popular</div>

                <h3>Business</h3>
            <span>$19/month</span>

            <ul>
                <li><i class="fa-solid fa-check"></i> Unlimited Security Scans</li>
                <li><i class="fa-solid fa-check"></i> AI Assisstant</li>
                <li><i class="fa-solid fa-check"></i> Advanced Vulnerability Reports</li>
                <li><i class="fa-solid fa-check"></i> Scheduled Automatic Scans</li>
                <li><i class="fa-solid fa-check"></i> Multiple Domains & APIs</li>
                <li><i class="fa-solid fa-check"></i> Re-Scan After Fixes</li>
                <li><i class="fa-solid fa-check"></i> Email Notifications</li>
                <li><i class="fa-solid fa-check"></i> Priority Support</li>
            </ul>

            {{-- <a href="#" class="btn">Upgrade Now</a> --}}
        </div>
    </a>

    </div>

</section>
    {{--  --}}
    <footer class="footer c-fff ">
        <div class="input d-flex j-center a-center gap-20">
            <input type="email" placeholder="Enter your email" class="input-mbg w-60">
            <button class="btn-out">Subscribe</button>
        </div>
        <div class="text-align pt-20">
            <p class="fw-bold">&copy; 2026 p<span class="wrd-c">X</span>. All rights reserved.</p>
        </div>
    </footer>
    {{--  --}}
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

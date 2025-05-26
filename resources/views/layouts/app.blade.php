<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Smart Transportation and Robotics (STAR)')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- Yield for additional CSS from specific pages -->
    @yield('extra-css')
    
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            scroll-behavior: smooth;
            padding-top: var(--navbar-height, 70px); /* Default 70px if variable not set */
        }
        
        :root {
            --navbar-height: 70px;
        }
        
        /* Add this style to create space for fixed navbar */
        main {
            padding-top: var(--navbar-height);
        }
        
        /* Section Dividers */
        .section-divider {
            position: relative;
            height: 150px;
            background: #fff;
            overflow: hidden;
            z-index: 1;
        }
        
        .divider-wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z' fill='%23ffffff'/%3E%3C/svg%3E");
            background-size: cover;
            transform: rotate(180deg);
        }
        
        .divider-diagonal {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M1200 120L0 16.48 0 0 1200 0 1200 120z' fill='%23ffffff'/%3E%3C/svg%3E");
            background-size: cover;
        }
        
        .divider-curves {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z' opacity='.25' fill='%23ffffff'/%3E%3Cpath d='M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z' opacity='.5' fill='%23ffffff'/%3E%3Cpath d='M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z' fill='%23ffffff'/%3E%3C/svg%3E");
            background-size: cover;
        }
        
        /* Hero Section Enhancement */
        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
            margin-top: 0;
            padding-top: 0;
        }
        
        .hero-content {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-card {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.5s ease;
        }
        
        .hero-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }
        
        /* Research Section */
        .research-section {
            background-color: #f8f9fa;
            padding: 80px 0;
            position: relative;
        }
        
        /* Team Section */
        .team-section {
            padding: 100px 0;
            background-color: #fff;
        }
        
        .team-member {
            transition: all 0.3s ease;
            padding: 20px;
            border-radius: 10px;
        }
        
        .team-member:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        
        .team-member img {
            transition: all 0.3s ease;
            border: 5px solid #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .team-member:hover img {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        /* Custom Navbar */
        .navbar {
            transition: all 0.3s ease;
            padding: 15px 0;
            margin-bottom: 0;
        }
        
        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }
        
        /* Footer enhancement */
        .footer-section {
            position: relative;
        }
        
        /* Carousel enhancement */
        .carousel-item img {
            transition: all 0.5s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }
        
        .carousel-control-prev, .carousel-control-next {
            opacity: 0.7;
            width: 10%;
            height: 80px;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50px;
            margin: 0 20px;
        }
        
        .carousel-control-prev:hover, .carousel-control-next:hover {
            opacity: 1;
            background-color: rgba(255, 255, 255, 0.95);
        }
        
        /* Scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }
        
        /* Team Page Styles */
        /* Hero Section */
        .team-hero {
            height: 60vh;
            min-height: 400px;
            position: relative;
            display: flex;
            align-items: center;
            background-position: center;
            background-size: cover;
            margin-bottom: 50px;
        }

        .hero-content {
            z-index: 2;
            padding: 2rem 0;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.5) 100%);
            z-index: 1;
        }

        .parallax-bg {
            background-attachment: fixed;
        }

        /* Luxury Elements */
        .gold-divider {
            width: 70px;
            height: 3px;
            background: linear-gradient(90deg, #c39738 0%, #ffeb99 50%, #c39738 100%);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        .elegant-title {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            position: relative;
            display: inline-block;
        }

        .elegant-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 2px;
            background: linear-gradient(90deg, #c39738 0%, #ffeb99 50%, #c39738 100%);
        }

        .team-intro {
            position: relative;
            border-radius: 10px;
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        /* Cards Styling */
        .luxury-card {
            position: relative;
            border-radius: 15px;
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: none;
        }

        .card-header-custom {
            position: relative;
            padding: 2rem;
            background: linear-gradient(135deg, #1a3c6e 0%, #2c5ebd 100%);
            color: white;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
        }

        .card-body-custom {
            padding: 2rem;
        }

        /* Section Titles */
        .section-title {
            position: relative;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            font-weight: 600;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, #1a3c6e 0%, #2c5ebd 100%);
            border-radius: 3px;
        }

        /* Member Cards */
        .member-card {
            position: relative;
            padding: 15px;
            transition: all 0.3s ease;
            border-radius: 10px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .member-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .member-head {
            border: 1px solid rgba(0, 0, 0, 0.05);
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .member-info {
            padding: 15px 0 0;
        }

        .member-name {
            margin-bottom: 10px;
            font-weight: 600;
        }

        .role-badge {
            position: absolute;
            bottom: 0;
            right: 0;
            background: #0d6efd;
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
            border: 3px solid white;
        }

        /* Hexagon Image */
        .hexagon {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 115%;
            margin: 0 auto;
            overflow: hidden;
        }

        .hexagon-inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            clip-path: polygon(50% 0%, 95% 25%, 95% 75%, 50% 100%, 5% 75%, 5% 25%);
            overflow: hidden;
        }

        .hexagon img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .member-card:hover .hexagon img {
            transform: scale(1.1);
        }

        /* Social Icons */
        .social-links {
            margin-top: 10px;
        }

        .social-icon {
            display: inline-block;
            width: 32px;
            height: 32px;
            line-height: 32px;
            text-align: center;
            margin: 0 5px;
            background: #f0f0f0;
            color: #333;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #1a3c6e;
            color: white;
            transform: translateY(-3px);
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .section-divider {
                height: 80px;
            }
            .divider-wave, .divider-diagonal, .divider-curves {
                height: 60px;
            }
            .hero-content {
                padding: 20px;
            }
            .team-hero {
                height: 40vh;
            }
            
            .card-header-custom {
                flex-direction: column;
                text-align: center;
                padding: 1.5rem;
            }
            
            .icon-circle {
                margin-bottom: 10px;
            }
        }

        @media (max-width: 576px) {
            .member-card {
                max-width: 250px;
                margin: 0 auto;
            }
        }

        /* Team Page Styles - Circular Profile Photos */
        .member-card {
            position: relative;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .member-card:hover {
            transform: translateY(-5px);
        }

        .member-photo {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0 auto 15px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .member-head .member-photo {
            width: 220px;
            height: 220px;
            border: 5px solid #0d6efd;
        }

        .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .member-card:hover .member-photo img {
            transform: scale(1.1);
        }

        .member-info {
            padding: 10px 5px;
        }

        .member-name {
            font-family: 'Playfair Display', serif;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .role-badge {
            position: absolute;
            bottom: 0;
            right: 0;
            background: #0d6efd;
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
            border: 3px solid white;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .social-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0d6efd;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #0d6efd;
            color: white;
        }

        .luxury-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-top: 5px solid #0d6efd;
        }

        .card-header-custom {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px 30px;
            border-bottom: 1px solid #eee;
            background-color: #f8f9fa;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #0d6efd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
        }

        .card-body-custom {
            padding: 30px;
        }

        .section-title {
            position: relative;
            font-family: 'Playfair Display', serif;
            color: #333;
            margin-bottom: 30px;
            padding-bottom: 10px;
            font-weight: 600;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background: #0d6efd;
        }

        .team-hero {
            height: 400px;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .gold-divider {
            width: 80px;
            height: 3px;
            background: #ffc107;
        }

        .elegant-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #333;
        }

        .team-content {
            background-color: #f8f9fa;
        }

        .team-intro {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        /* Media queries for responsive design */
        @media (max-width: 767px) {
            .member-photo {
                width: 150px;
                height: 150px;
            }
            
            .member-head .member-photo {
                width: 180px;
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Smart Transportation and Robotics (STAR)</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                    </li>
                    
                    <!-- Dropdown About -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="{{ url('/about') }}">Profil</a></li>
                            <li><a class="dropdown-item" href="{{ url('/visi-misi') }}">Visi & Misi</a></li>
                        </ul>
                    </li>
                    
                    <!-- Dropdown Layanan -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="{{ url('/konsultasi') }}">Community Service</a></li>
                            <li><a class="dropdown-item" href="{{ url('/penelitian') }}">Research our Teams</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('team') ? 'active' : '' }}" href="{{ url('/team') }}">Our Members</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-luxury">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="footer-brand">
                            <h3 class="footer-logo">CoE STAR</h3>
                            <div class="gold-divider-sm my-3"></div>
                            <p class="footer-desc">Centre of Excellence for Smart Transportation And Robotics</p>
                        </div>
                        <div class="footer-social">
                            <a href="#" class="social-circle"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-circle"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-circle"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-circle"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-circle"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <h4 class="footer-heading">Quick Links</h4>
                        <div class="gold-divider-xs mb-4"></div>
                        <ul class="footer-links">
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/visi-misi') }}">Visi & Misi</a></li>
                            <li><a href="{{ url('/penelitian') }}">Research</a></li>
                            <li><a href="{{ url('/team') }}">Our Team</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-5 col-md-12">
                        <h4 class="footer-heading">Contact Information</h4>
                        <div class="gold-divider-xs mb-4"></div>
                        <ul class="footer-contact">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jl. Telekomunikasi No. 1, Bandung<br>Terusan Buahbatu - Bojongsoang, Sukapura,<br>Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>coestar@telkomuniversity.ac.id</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>(022) 7564108</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                    <p class="mb-0 text-white">&copy; {{ date('Y') }} Centre of Excellence STAR. All rights reserved.</p>
                    <div class="footer-bottom-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            mirror: false
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
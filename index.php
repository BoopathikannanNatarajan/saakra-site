<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saakra Enterprises Pvt Ltd | Dream It. Design It. Deliver It.</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root { 
            --primary-green: #00652d; 
            --secondary-green: #83b744; 
            --green-light: #e8f5e9; 
            --animation-duration: 0.5s;
        }
        .text-green { color: var(--primary-green); }
        .text-secondary-green { color: var(--secondary-green); }
        .bg-green { background-color: var(--primary-green); }
        .bg-secondary-green { background-color: var(--secondary-green); }
        .bg-green-light { background-color: var(--green-light); }
        .btn.btn-green { 
            background-color: var(--primary-green); 
            color: white;
            transition: all var(--animation-duration) ease;
        }
        .btn.btn-green:hover { 
            background-color: var(--secondary-green); 
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .btn.btn-outline-green { 
            border-color: var(--primary-green); 
            color: var(--primary-green);
            transition: all var(--animation-duration) ease;
        }
        .btn.btn-outline-green:hover { 
            background-color: var(--primary-green); 
            color: white;
            transform: translateY(-2px);
        }
        
        /* Enhanced Header/Navbar Styles */
       

        /* Hero Section */
        .hero-section {
            padding: 100px 0 80px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9f5eb 100%);
        }
        
        .hero-badge {
            display: inline-block;
            background-color: var(--green-light);
            color: var(--primary-green);
            padding: 5px 15px;
            border-radius: 20px;
            margin-bottom: 15px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .tagline {
            font-size: 1.25rem;
            color: var(--primary-green);
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        .hero-image-container {
            position: relative;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .hero-image {
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            transform-style: preserve-3d;
            transform: perspective(1000px);
        }
        
        .hero-image-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            padding: 10px 15px;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            font-size: 14px;
            font-weight: 600;
            z-index: 2;
        }
        
        .hero-features {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            font-size: 14px;
            background: white;
            padding: 8px 15px;
            border-radius: 30px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }
        
        /* Services Section */
        .services-section {
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .service-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            border: none;
            height: 100%;
            overflow: hidden;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .service-icon-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        
        .service-icon-circle-lg {
            width: 70px;
            height: 70px;
            margin-bottom: 20px;
            background: rgba(131, 183, 68, 0.1);
        }
        
        .service-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            font-size: 14px;
            margin-bottom: 20px;
        }
        
        .btn-arrow {
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .btn-arrow:hover i {
            transform: translateX(5px);
        }
        
        .btn-arrow i {
            transition: transform 0.3s ease;
        }
        
        /* About Section */
        .about-section {
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .about-image-container {
            position: relative;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .about-image {
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .experience-badge {
            position: absolute;
            bottom: -20px;
            right: 20px;
            background: var(--primary-green);
            color: white;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            z-index: 2;
        }
        
        .experience-badge span {
            font-size: 1.5rem;
            line-height: 1;
        }
        
        .experience-badge small {
            font-size: 0.7rem;
        }
        
        .about-features {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-top: 30px;
        }
        
        .feature-box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .feature-box i {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--primary-green);
        }
        
        /* Testimonials */
        .testimonials-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9f5eb 100%);
        }
        
        .testimonial-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: none;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .rating {
            color: #ffc107;
            font-size: 14px;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--secondary-green) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .cta-section .section-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        /* Footer */
        .footer {
            padding: 60px 0 30px;
            background: #343a40;
            color: white;
            position: relative;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .footer-logo img {
            height: 40px;
            margin-right: 10px;
        }
        
        .footer-logo-text {
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .footer p {
            opacity: 0.8;
            margin-bottom: 20px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            margin-right: 10px;
            transition: all 0.3s ease;
            color: white;
        }
        
        .social-icons a:hover {
            background: var(--secondary-green);
            transform: translateY(-3px);
        }
        
        .footer h5 {
            color: var(--secondary-green);
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .footer ul {
            list-style: none;
            padding: 0;
        }
        
        .footer ul li {
            margin-bottom: 10px;
        }
        
        .footer ul li a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer ul li a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .footer-contact li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .footer-contact i {
            margin-right: 10px;
            color: var(--secondary-green);
            margin-top: 3px;
        }
        
        .footer-bottom {
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        
        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-green);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background: var(--secondary-green);
            transform: translateY(-3px);
        }
        
        /* Section Header */
        .section-header {
            margin-bottom: 50px;
            position: relative;
        }
        
        .section-header .section-icon {
            font-size: 2.5rem;
            color: var(--primary-green);
            margin-bottom: 15px;
        }
        
        .section-header h2 {
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
        }
        
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--primary-green);
        }
        
        .section-header .section-subtitle {
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Shapes */
        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(131, 183, 68, 0.1);
            z-index: 0;
        }
        
        .shape-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -150px;
        }
        
        .shape-2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: -100px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .hero-section {
                padding: 80px 0;
            }
            
            .hero-content {
                text-align: center;
                margin-bottom: 40px;
            }
            
            .hero-features {
                justify-content: center;
            }
            
            .about-content {
                text-align: center;
                margin-top: 40px;
            }
            
            .section-header h2::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
        
        @media (max-width: 767.98px) {
            .hero-section {
                padding: 60px 0;
            }
            
            .hero-badge {
                margin: 0 auto 15px;
            }
            
            .hero-cta .btn {
                display: block;
                width: 100%;
                margin-bottom: 15px;
            }
            
            .hero-cta .btn:last-child {
                margin-bottom: 0;
            }
            
            .service-card {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 575.98px) {
            .hero-section {
                padding: 50px 0;
            }
            
            .hero-image-badge {
                top: 10px;
                right: 10px;
                padding: 8px 12px;
                font-size: 12px;
            }
            
            .feature-item {
                font-size: 12px;
                padding: 6px 12px;
            }
            
            .footer-logo {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .footer-logo img {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Loading Animation -->
    <div class="loader">
        <div class="loader-circle"></div>
        <div class="loader-text">Loading Saakra Enterprises</div>
    </div>

    <!-- Navigation -->
    <?php include "header.php"; ?>

    <!-- Hero Section -->
    <section class="hero-section  pt-5 mt-5">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="hero-content">
                        <div class="hero-badge animate__animated animate__fadeIn">
                            <i class="fas fa-star me-2"></i> Trusted Since 2016
                        </div>
                        <h1 class="text-green animate__animated animate__fadeInUp">Saakra Enterprises Pvt Ltd</h1>
                        <p class="tagline animate__animated animate__fadeInUp animate__delay-1s">
                            <i class="fas fa-lightbulb me-2"></i> Dream It. Design It. Deliver It.
                        </p>
                        <p class="lead animate__animated animate__fadeInUp animate__delay-1s">
                            Your trusted partner for diverse business solutions across multiple industries.
                        </p>
                        <div class="hero-cta animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="#services" class="btn btn-green btn-lg me-3 mb-3 mb-md-0">
                                <i class="fas fa-th me-2"></i> Our Services
                            </a>
                            <a href="contact.html" class="btn btn-outline-green btn-lg">
                                <i class="fas fa-phone-alt me-2"></i> Contact Us
                            </a>
                        </div>
                        <div class="hero-features animate__animated animate__fadeInUp animate__delay-2s">
                            <div class="feature-item">
                                <i class="fas fa-check-circle text-green me-2"></i>
                                <span>15+ Industries Served</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle text-green me-2"></i>
                                <span>150+ Happy Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 d-flex align-items-center justify-content-center">
                    <div class="position-relative" style="max-width: 400px;">
                        <!-- Clean logo display with transparent background -->
                        <img src="images/logo-bg.png" alt="Company Logo" 
                             class="img-fluid" 
                             style="background: transparent; width: 100%; height: auto;">
                        
                        <!-- Minimal quality badge -->
                        <div class="position-absolute top-0 end-0 mt-3 me-3">
                            <span class="badge bg-green text-white p-2 animate__animated animate__pulse animate__infinite">
                                <i class="fas fa-award me-1"></i>
                                Certified
                            </span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <div class="section-icon animate__animated animate__fadeIn">
                    <i class="fas fa-cogs"></i>
                </div>
                <h2 class="text-green">Our Business Verticals</h2>
                <p class="section-subtitle animate__animated animate__fadeIn animate__delay-1s">
                    Comprehensive solutions tailored to your business needs
                </p>
            </div>
            
            <div class="row g-4 justify-content-center">
         <!-- Professional Landscaping & Construction -->
<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
    <div class="card service-card h-100 border-0">
        <div class="card-body text-center p-4">
            <div class="service-icon-circle-lg rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                <i class="fas fa-tractor text-green" style="font-size: 1.5rem;"></i>
            </div>
            <h5 class="text-green mb-3">Professional Landscaping & Construction</h5>
            <p class="mb-4">Comprehensive outdoor solutions from design to implementation with premium quality materials.</p>
            <div class="service-features mb-4">
                <div class="text-start mb-2">
                    <i class="fas fa-check-circle text-green me-2"></i> 
                    <span>Landscape Design & Installation</span>
                </div>
             
               
            </div>
            <a href="oil-vendor.php" class="btn btn-outline-green btn-arrow">
                <span>Explore Service</span>
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</div>
                <!-- Tyres Trading -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card service-card h-100 border-0">
                        <div class="card-body text-center p-4">
                            <div class="service-icon-circle-lg rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                                <i class="bi bi-radioactive text-green" style="font-size: 1.5rem;"></i>
                            </div>
                            <h5 class="text-green mb-3">Tyres Trading</h5>
                            <p class="mb-4">Premium quality tyres for all vehicle types with competitive pricing and warranties.</p>
                            <div class="service-features mb-4">
                                <span><i class="fas fa-check-circle text-green me-2"></i> All Vehicle Types</span>
                                <span><i class="fas fa-check-circle text-green me-2"></i> Warranty Included</span>
                            </div>
                            <a href="tyres-trading.php" class="btn btn-outline-green btn-arrow">
                                <span>Explore Service</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- ATM Franchise -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card service-card h-100 border-0">
                        <div class="card-body text-center p-4">
                            <div class="service-icon-circle-lg rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                                <i class="fas fa-money-bill-wave text-green" style="font-size: 1.5rem;"></i>
                            </div>
                            <h5 class="text-green mb-3">ATM Franchise</h5>
                            <p class="mb-4">ATM management services with secure operations, maintenance and cash management.</p>
                            <div class="service-features mb-4">
                                <span><i class="fas fa-check-circle text-green me-2"></i> 24/7 Support</span>
                                <span><i class="fas fa-check-circle text-green me-2"></i> Secure Operations</span>
                            </div>
                            <a href="atm-franchise.php" class="btn btn-outline-green btn-arrow">
                                <span>Explore Service</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Transport -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card service-card h-100 border-0">
                        <div class="card-body text-center p-4">
                            <div class="service-icon-circle-lg rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                                <i class="fas fa-truck text-green" style="font-size: 1.5rem;"></i>
                            </div>
                            <h5 class="text-green mb-3">Transport Services</h5>
                            <p class="mb-4">Efficient logistics solutions for all your transportation needs across India.</p>
                            <div class="service-features mb-4">
                                <span><i class="fas fa-check-circle text-green me-2"></i> Pan-India Network</span>
                                <span><i class="fas fa-check-circle text-green me-2"></i> Timely Delivery</span>
                            </div>
                            <a href="transport.php" class="btn btn-outline-green btn-arrow">
                                <span>Explore Service</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- E-Commerce -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card service-card h-100 border-0">
                        <div class="card-body text-center p-4">
                            <div class="service-icon-circle-lg rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                                <i class="fas fa-shopping-cart text-green" style="font-size: 1.5rem;"></i>
                            </div>
                            <h5 class="text-green mb-3">E-Commerce Services</h5>
                            <p class="mb-4">Complete solutions for Amazon, Flipkart, Meesho, dropshipping and print-on-demand.</p>
                            <div class="service-features mb-4">
                                <span><i class="fas fa-check-circle text-green me-2"></i> Marketplace Setup</span>
                                <span><i class="fas fa-check-circle text-green me-2"></i> Account Management</span>
                            </div>
                            <a href="ecommerce.php" class="btn btn-outline-green btn-arrow">
                                <span>Explore Service</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- IT Services -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card service-card h-100 border-0">
                        <div class="card-body text-center p-4">
                            <div class="service-icon-circle-lg rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                                <i class="fas fa-laptop-code text-green" style="font-size: 1.5rem;"></i>
                            </div>
                            <h5 class="text-green mb-3">IT Services</h5>
                            <p class="mb-4">Web development, design, and digital marketing solutions for your business growth.</p>
                            <div class="service-features mb-4">
                                <span><i class="fas fa-check-circle text-green me-2"></i> Custom Solutions</span>
                                <span><i class="fas fa-check-circle text-green me-2"></i> SEO Optimized</span>
                            </div>
                            <a href="it-services.php" class="btn btn-outline-green btn-arrow">
                                <span>Explore Service</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
                <a href="#contact" class="btn btn-green btn-lg">
                    <i class="fas fa-envelope me-2"></i> Get a Free Consultation
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <div class="section-icon animate__animated animate__fadeIn">
                    <i class="fas fa-building"></i>
                </div>
                <h2 class="text-green">About Saakra Enterprises</h2>
                <p class="section-subtitle animate__animated animate__fadeIn animate__delay-1s">
                    Our journey since 2010
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-image-container" data-aos="fade-right">
                        <img src="images/about-homepage.jpg" alt="About Saakra Enterprises" class="img-fluid rounded shadow about-image">
                        <div class="experience-badge">
                            <span style="text-align: center;">13+</span>
                            <small style="text-align: center;">Years Experience</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3 class="text-green mb-4" data-aos="fade-up">Our Story</h3>
                        <p data-aos="fade-up" data-aos-delay="100">Founded with a vision to provide diverse business solutions, Saakra Enterprises Pvt Ltd has grown into a multi-faceted organization serving clients across various industries.</p>
                        <p data-aos="fade-up" data-aos-delay="100">Our tagline "Dream It. Design It. Deliver It." reflects our commitment to turning your business visions into reality through careful planning and flawless execution.</p>
                        
                        <div class="about-features">
                            <div class="feature-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="fas fa-bullseye"></i>
                                <h5>Our Mission</h5>
                                <p>To provide innovative and reliable business solutions that drive growth and success.</p>
                            </div>
                            <div class="feature-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="fas fa-eye"></i>
                                <h5>Our Vision</h5>
                                <p>To be the preferred partner for businesses seeking comprehensive solutions.</p>
                            </div>
                        </div>
                        
                        <div data-aos="fade-up" data-aos-delay="400">
                            <a href="about.html" class="btn btn-green mt-3">Read More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <div class="section-icon animate__animated animate__fadeIn">
                    <i class="fas fa-quote-left"></i>
                </div>
                <h2 class="text-green">What Our Clients Say</h2>
                <p class="section-subtitle animate__animated animate__fadeIn animate__delay-1s">
                    Trusted by businesses across industries
                </p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <i class="fas fa-quote-left text-green me-3"></i>
                                <p>Saakra Enterprises has been our reliable oil vendor for over 5 years. Their service is impeccable and deliveries are always on time.</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="../images/clients/client1.jpg" alt="Client" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0 text-green">Rajesh Sharma</h6>
                                    <small class="text-muted">Transport Company Owner</small>
                                    <div class="rating mt-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <i class="fas fa-quote-left text-green me-3"></i>
                                <p>The IT team at Saakra transformed our online presence. Our e-commerce sales have increased by 200% since they redesigned our website.</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="../images/clients/client2.jpg" alt="Client" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0 text-green">Priya Patel</h6>
                                    <small class="text-muted">Fashion Retailer</small>
                                    <div class="rating mt-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <i class="fas fa-quote-left text-green me-3"></i>
                                <p>Their tyre trading division provided us with high-quality products at competitive prices. Excellent customer service and after-sales support.</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="../images/clients/client3.jpg" alt="Client" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0 text-green">Vikram Singh</h6>
                                    <small class="text-muted">Fleet Manager</small>
                                    <div class="rating mt-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container text-center">
            <div class="section-icon mb-3 animate__animated animate__pulse animate__infinite">
                <i class="fas fa-rocket"></i>
            </div>
            <h2 class="text-white mb-4" data-aos="fade-up">Ready to Grow Your Business?</h2>
            <p class="lead mb-4 text-white" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-handshake me-2"></i> Contact us today to discuss how we can help you achieve your business goals.
            </p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="contact.html" class="btn btn-light btn-lg me-3 mb-3 mb-md-0">
                    <i class="fas fa-paper-plane me-2"></i> Get Started
                </a>
                <a href="tel:+919876543210" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-phone-alt me-2"></i> Call Now
                </a>
            </div>
        </div>
    </section>

      <!-- Footer -->
      <footer class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="./images/logo-bg.png" alt="Saakra Enterprises" height="40" class="me-2">
                        <span class="company-name">Saakra Enterprises Pvt Ltd</span>
                    </div>
                    <p>Dream It. Design It. Deliver It.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="text-green">Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="oil-vendor.php" class="text-white">Indian Oil Vendor</a></li>
                        <li><a href="tyres-trading.php" class="text-white">Tyres Trading</a></li>
                        <li><a href="atm-franchise.php" class="text-white">ATM Franchise</a></li>
                        <li><a href="transport.php" class="text-white">Transport</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="text-green">Digital Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="ecommerce.php" class="text-white">E-Commerce</a></li>
                        <li><a href="it-services.php" class="text-white">IT Services</a></li>
                        <li><a href="it-services.php" class="text-white">Web Development</a></li>
                        <li><a href="it-services.php" class="text-white">Digital Marketing</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="text-green">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2 text-green"></i> Salem, Tamilnadu, India</li>
                        <li><i class="fas fa-phone me-2 text-green"></i> +91 99 44 111 597</li>
                        <li><i class="fas fa-envelope me-2 text-green"></i> saakraenterprisespvtltd.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0">&copy; 2025 Saakra Enterprises Pvt Ltd. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small mb-0">
                        <a href="#" class="text-white">Privacy Policy</a> | 
                        <a href="#" class="text-white">Terms of Service</a>
                    </p>
                </div>
            </div>
            <div class="text-start mt-3">
                <p class="small mb-0"><strong>Designed by the Saakra IT Team</strong></p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Loading animation
        window.addEventListener('load', function() {
            const loader = document.querySelector('.loader');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);

            // Back to top button
            const backToTopButton = document.getElementById('backToTop');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('active');
                } else {
                    backToTopButton.classList.remove('active');
                }
            });
            
            backToTopButton.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({top: 0, behavior: 'smooth'});
            });
        });
    </script>
</body>
</html>
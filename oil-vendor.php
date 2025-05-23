<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landscaping & Construction Services | Saakra Enterprises Pvt Ltd</title>
    <link rel="icon" href="./images/logo-bg.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root { 
            --primary-green: #00652d;
            --secondary-green: #83b744;
            --green-light: #e8f5e9;
            --neon-glow: #00ff41;
            --animation-duration: 0.5s;
        }
        
        .text-green { color: var(--primary-green); }
        .bg-green { background-color: var(--primary-green); }
        .bg-dark-green { background-color: var(--primary-green); }
        .bg-green-light { background-color: var(--green-light); }
        .btn.btn-green { 
            background-color: var(--primary-green); 
            color: white;
            transition: all var(--animation-duration) ease;
        }
        .btn.btn-green:hover { 
            background-color: var(--primary-green); 
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
            color: rgb(255, 255, 255);
            transform: translateY(-2px);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideInDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .fade-in {
            animation: fadeIn 1s ease forwards;
        }
        .slide-in-down {
            animation: slideInDown 0.8s ease-out forwards;
        }
        .pulse {
            animation: pulse 2s infinite ease-in-out;
        }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
        
        /* Loading animation */
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--dark-green);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }
        .loader-circle {
            width: 60px;
            height: 60px;
            border: 5px solid rgba(255,255,255,0.2);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s linear infinite;
        }
        .loader-text {
            color: white;
            margin-top: 20px;
            font-size: 1.2rem;
            font-weight: 500;
            animation: fadeIn 1s ease infinite alternate;
        }
        @keyframes spin {
            100% { transform: rotate(360deg); }
        }
        
        /* Landscaping specific styles */
        .company-name {
            font-size: clamp(1rem, 2vw, 1.5rem);
        }
        
        .page-header {
            padding: 3rem 0;
            margin-top: 80px;
        }
        
        .service-header h1 {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
        }
        
        .process-steps .step {
            display: flex;
            margin-bottom: 1.5rem;
        }
        
        .step-number {
            background-color: #28a745;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .feature-box {
            transition: transform 0.3s ease;
        }
        
        .feature-box:hover {
            transform: translateY(-5px);
        }
        
        .testimonial-card {
            transition: transform 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        
        .bg-green-50 {
            background-color: rgba(40, 167, 69, 0.1);
        }
        
        .border-green {
            border-color: #28a745 !important;
        }
        
        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }
        
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .navbar-collapse { 
                background: rgba(30, 126, 52, 0.95); 
                padding: 15px; 
                border-radius: 10px; 
                margin-top: 15px;
                animation: fadeIn var(--animation-duration) ease;
                backdrop-filter: blur(10px);
            }
            .company-name {
                font-size: 1rem;
            }
            .navbar-brand img {
                height: 45px;
            }
            .nav-link {
                padding: 8px 0 !important;
                margin: 5px 0;
            }
            .nav-link::after {
                display: none;
            }
            .page-header {
                text-align: center;
                padding: 2rem 1rem;
                margin-top: 70px;
            }
            .page-header img {
                margin: 0 auto;
                display: block;
            }
            .section-header {
                text-align: center;
            }
            .process-steps .step {
                flex-direction: column;
            }
            .step-number {
                margin-bottom: 10px;
                margin-right: 0;
            }
            .service-header h1 {
                font-size: 1.8rem;
            }
            .page-header .lead {
                font-size: 1.1rem;
            }
            .btn-lg {
                padding: 0.5rem 1rem;
                font-size: 1rem;
            }
        }
        
        @media (max-width: 767.98px) {
            .page-header {
                padding: 1.5rem 1rem;
            }
            .service-header h1 {
                font-size: 1.6rem;
            }
            .feature-box {
                margin-bottom: 1rem;
            }
            .testimonial-card {
                margin-bottom: 1rem;
            }
            .portfolio-item {
                margin-bottom: 1rem;
            }
            .d-flex.flex-wrap {
                justify-content: center;
            }
            .process-steps .step {
                margin-bottom: 1rem;
            }
            .card-body {
                padding: 1.25rem;
            }
        }
        
        @media (max-width: 575.98px) {
            .navbar-brand {
                flex-direction: row;
                align-items: center;
            }
            .company-name {
                margin-top: 0;
                margin-left: 10px;
                font-size: 0.9rem;
            }
            .header-space {
                height: 70px;
            }
            .page-header {
                margin-top: 60px;
                padding: 1rem 0.5rem;
            }
            .service-header h1 {
                font-size: 1.4rem;
            }
            .page-header .lead {
                font-size: 1rem;
            }
            .btn-lg {
                padding: 0.5rem;
                font-size: 0.9rem;
            }
            .col-lg-4 .sticky-lg-top {
                position: relative !important;
                top: 0 !important;
                margin-top: 2rem;
            }
            .portfolio-item img {
                height: 200px !important;
            }
            .section-header h2 {
                font-size: 1.5rem;
            }
            .footer .col-lg-4, .footer .col-lg-2 {
                margin-bottom: 1.5rem;
                text-align: center;
            }
            .footer .social-icons {
                justify-content: center;
            }
            .footer ul.list-unstyled {
                padding-left: 0;
            }
        }
        
        /* Extra small devices (phones, 360px and down) */
        @media (max-width: 360px) {
            .service-header h1 {
                font-size: 1.3rem;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 0.5rem;
            }
            .d-flex.flex-wrap.gap-3 {
                flex-direction: column;
                gap: 0.5rem !important;
            }
            .d-flex.flex-wrap {
                flex-direction: column;
                align-items: center;
            }
            .pe-4 {
                padding-right: 0 !important;
            }
        }
    </style>
</head>
<body>
    <!-- Loading animation -->
    <div class="loader">
        <div class="loader-circle"></div>
        <div class="loader-text">Loading Saakra Enterprises</div>
    </div>

    <!-- Navigation -->
    <?php include "header.php"; ?>

    <!-- Page Header -->
    <header class="page-header py-5 service-header pt-5 mt-5" style="background: linear-gradient(to right, #f8f9fa 0%, #e8f5e9 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <h1 class="text-green display-4 fw-bold mb-3">Professional Landscaping & Construction</h1>
                    <p class="lead fs-4 mb-4">Transforming ordinary spaces into extraordinary environments with premium landscaping and construction solutions</p>
                    
                    <div class="d-flex flex-wrap mb-4 justify-content-center justify-content-lg-start">
                        <div class="pe-4 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-green me-2"></i>
                                <span class="fw-medium">12+ Years Experience</span>
                            </div>
                        </div>
                        <div class="pe-4 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-green me-2"></i>
                                <span class="fw-medium">Licensed & Insured</span>
                            </div>
                        </div>
                        <div class="pe-4 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-green me-2"></i>
                                <span class="fw-medium">Free Consultations</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-3 mt-3 justify-content-center justify-content-lg-start">
                        <a href="contact.php" class="btn btn-green btn-lg px-4">
                            <i class="fas fa-file-signature me-2"></i>Request Quote
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 text-lg-end text-center mt-lg-0 mt-4 position-relative mb-4 mb-lg-0">
                    <img src="./images/vendor-hero.jpg" alt="Landscaping Services" class="img-fluid hover-scale rounded-3 shadow" style="max-width: 350px; height: auto; transform: perspective(1000px) rotateY(-10deg); transition: all 0.3s ease;">
                    <div class="position-absolute bg-success text-white p-2 rounded-pill shadow-sm d-flex align-items-center" style="bottom: 20px; left: 20px; transform: rotate(-5deg);">
                        <!-- Optional badge content -->
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.querySelector('.hover-scale').addEventListener('mouseover', function() {
                this.style.transform = 'perspective(1000px) rotateY(10deg) scale(1.03)';
                this.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
            });
            document.querySelector('.hover-scale').addEventListener('mouseout', function() {
                this.style.transform = 'perspective(1000px) rotateY(-10deg) scale(1)';
                this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.05)';
            });
        </script>
    </header>

    <!-- Service Details -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-1 order-2">
                    <h2 class="text-green mb-4">Comprehensive Landscaping & Construction Services</h2>
                    <p class="lead">We specialize in creating beautiful outdoor spaces and quality construction projects with attention to detail and craftsmanship.</p>
                    
                    <div class="my-4">
                        <h4 class="text-green">Our Landscaping Services</h4>
                        <div class="row g-4 mt-3">
                            <div class="col-md-6">
                                <div class="card feature-box h-100 border-green">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-tree text-green fs-3 me-3"></i>
                                            <h5 class="text-green mb-0">Garden Design</h5>
                                        </div>
                                        <p>Custom garden designs that complement your property's architecture and your personal style.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card feature-box h-100 border-green">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-leaf text-green fs-3 me-3"></i>
                                            <h5 class="text-green mb-0">Lawn Installation</h5>
                                        </div>
                                        <p>Professional lawn installation with premium grass varieties suited to your climate.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card feature-box h-100 border-green">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-water text-green fs-3 me-3"></i>
                                            <h5 class="text-green mb-0">Irrigation Systems</h5>
                                        </div>
                                        <p>Efficient watering systems that conserve water while keeping your landscape lush.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card feature-box h-100 border-green">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-lightbulb text-green fs-3 me-3"></i>
                                            <h5 class="text-green mb-0">Landscape Lighting</h5>
                                        </div>
                                        <p>Beautiful outdoor lighting solutions to enhance your property's nighttime appeal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-5">
                        <h4 class="text-green">Our Construction Services</h4>
                        <div class="row g-4 mt-3">
                            <div class="col-md-4 col-sm-6">
                                <div class="text-center p-3">
                                    <div class="bg-green-50 rounded-circle d-flex align-items-center justify-content-center p-2 mb-3 mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-home text-green fs-5"></i>
                                    </div>
                                    <h5 class="text-green">Residential Construction</h5>
                                    <p class="small">Quality home building and renovation services</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="text-center p-3">
                                    <div class="bg-green-50 rounded-circle d-flex align-items-center justify-content-center p-2 mb-3 mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-building text-green fs-5"></i>
                                    </div>
                                    <h5 class="text-green">Commercial Projects</h5>
                                    <p class="small">Construction for business properties</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mx-sm-auto">
                                <div class="text-center p-3">
                                    <div class="bg-green-50 rounded-circle d-flex align-items-center justify-content-center p-2 mb-3 mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-road text-green fs-5"></i>
                                    </div>
                                    <h5 class="text-green">Hardscaping</h5>
                                    <p class="small">Patios, walkways, and retaining walls</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-5">
                        <h4 class="text-green">Our Process</h4>
                        <div class="process-steps mt-4">
                            <div class="step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h5 class="text-green">Consultation</h5>
                                    <p>We discuss your vision, needs, and budget for the project.</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h5 class="text-green">Design & Planning</h5>
                                    <p>Our team creates detailed plans and 3D renderings of your project.</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h5 class="text-green">Material Selection</h5>
                                    <p>We help you choose quality materials that fit your style and budget.</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h5 class="text-green">Construction & Installation</h5>
                                    <p>Our skilled team brings your project to life with precision craftsmanship.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="card border-green sticky-lg-top mb-4" style="top: 20px;">
                        <div class="card-body p-4">
                            <h4 class="text-green mb-4" id="quote">Request Service Quote</h4>
                            <form id="serviceQuoteForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="company" class="form-label">Company</label>
                                    <input type="text" class="form-control" id="company">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone *</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="service" class="form-label">Service Needed</label>
                                    <select class="form-select" id="service">
                                        <option value="landscaping">Landscaping</option>
                                        <option value="construction">Construction</option>
                                        <option value="both">Both Services</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="project-details" class="form-label">Project Details</label>
                                    <textarea class="form-control" id="project-details" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-green w-100">Request Quote</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Why Choose Saakra Enterprises?</h2>
                <p>We bring expertise and dedication to every project</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="card border-green h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-green-50 p-3 rounded me-4">
                                    <i class="fas fa-award text-green fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-green">Experienced Team</h5>
                                    <p>Our skilled professionals have years of experience in landscaping and construction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card border-green h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-green-50 p-3 rounded me-4">
                                    <i class="fas fa-clipboard-check text-green fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-green">Quality Materials</h5>
                                    <p>We use only premium materials that stand the test of time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card border-green h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-green-50 p-3 rounded me-4">
                                    <i class="fas fa-calendar-alt text-green fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-green">Timely Completion</h5>
                                    <p>We respect your time and complete projects as scheduled.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card border-green h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-green-50 p-3 rounded me-4">
                                    <i class="fas fa-rupee-sign text-green fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-green">Transparent Pricing</h5>
                                    <p>No hidden costs - we provide detailed quotes upfront.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card border-green h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-green-50 p-3 rounded me-4">
                                    <i class="fas fa-shield-alt text-green fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-green">Safety First</h5>
                                    <p>Strict adherence to safety protocols on all job sites.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card border-green h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start">
                                <div class="bg-green-50 p-3 rounded me-4">
                                    <i class="fas fa-thumbs-up text-green fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="text-green">Customer Satisfaction</h5>
                                    <p>We're not satisfied until you're completely happy with the results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">What Our Clients Say</h2>
                <p>Satisfied customers across Salem and beyond</p>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card h-100 border-green">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <i class="fas fa-quote-left text-green me-3"></i>
                                <p>Saakra transformed our backyard into a beautiful oasis. Their attention to detail and creative design exceeded our expectations.</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0 text-green">Muruga ananthan</h6>
                                    <small class="text-muted">Homeowner</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card h-100 border-green">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <i class="fas fa-quote-left text-green me-3"></i>
                                <p>The construction team built our office extension on time and within budget. Professional work from start to finish.</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0 text-green">PR Groups</h6>
                                    <small class="text-muted">Business Owner</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card h-100 border-green">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <i class="fas fa-quote-left text-green me-3"></i>
                                <p>Their landscape lighting design has completely changed how we enjoy our garden at night. Highly recommend their services!</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0 text-green">Arun Mehta</h6>
                                    <small class="text-muted">Residential Client</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Gallery -->
    <section class="py-5 bg-green-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Recent Projects</h2>
                <p>See examples of our landscaping and construction work</p>
            </div>
            
            <div class="row g-3">
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item overflow-hidden rounded">
                        <img src="./images/garden-work.jpg" alt="Garden Design" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="text-center text-white p-3">
                                <h5>Residential Garden Design</h5>
                                <p>Salem, Tamilnadu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item overflow-hidden rounded">
                        <img src="./images/construction.jpg" alt="Commercial Construction" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="text-center text-white p-3">
                                <h5>Commercial Building</h5>
                                <p>Coimbatore, Tamilnadu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item overflow-hidden rounded">
                        <img src="./images/landscaping.jpg" alt="Patio Construction" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                            <div class="text-center text-white p-3">
                                <h5>Stone Patio Installation</h5>
                                <p>Chennai, Tamilnadu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-green">View More Projects</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-dark-green text-white">
        <div class="container text-center">
            <h2>Ready to Transform Your Space?</h2>
            <p class="lead mb-4">Contact our team today to discuss your landscaping or construction project.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="contact.php" class="btn btn-light btn-lg">Contact Us</a>
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
            <div class="text-center mt-3">
                <p class="small mb-0"><strong>Designed by the Saakra IT Team</strong></p>
            </div>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Loading animation
        window.addEventListener('load', function() {
            const loader = document.querySelector('.loader');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
            
            // Add animation to navbar items after load
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach((item, index) => {
                item.style.animation = `fadeIn 0.5s ease forwards ${index * 0.1 + 0.5}s`;
                item.style.opacity = '0';
            });
        });

        // Mobile menu close on click
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 992) {
                        navbarCollapse.classList.remove('show');
                    }
                });
            });

            // Enhanced Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                const logo = document.querySelector('.navbar-brand img');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                    document.querySelector('.company-name').style.fontSize = '1rem';
                    logo.style.height = '45px';
                } else {
                    navbar.classList.remove('scrolled');
                    document.querySelector('.company-name').style.fontSize = '1.2rem';
                    logo.style.height = '55px';
                }
            });

            // Smooth scrolling for all links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - document.querySelector('.navbar').offsetHeight,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Hover effect for dropdown items
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            dropdownItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    const iconCircle = item.querySelector('.service-icon-circle');
                    iconCircle.style.transform = 'scale(1.1)';
                    iconCircle.style.backgroundColor = 'rgba(39, 226, 92, 0.2)';
                });
                item.addEventListener('mouseleave', () => {
                    const iconCircle = item.querySelector('.service-icon-circle');
                    iconCircle.style.transform = 'scale(1)';
                    iconCircle.style.backgroundColor = 'rgba(39, 226, 92, 0.1)';
                });
            });

            // Form validation for service quote form
            document.getElementById('serviceQuoteForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form elements
                const name = document.getElementById('name');
                const email = document.getElementById('email');
                const phone = document.getElementById('phone');
                let isValid = true;
                
                // Reset error states
                name.classList.remove('is-invalid');
                email.classList.remove('is-invalid');
                phone.classList.remove('is-invalid');
                
                // Validate name
                if (name.value.trim() === '') {
                    name.classList.add('is-invalid');
                    isValid = false;
                }
                
                // Validate email
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email.value)) {
                    email.classList.add('is-invalid');
                    isValid = false;
                }
                
                // Validate phone
                const phoneRegex = /^[0-9]{10}$/;
                if (!phoneRegex.test(phone.value)) {
                    phone.classList.add('is-invalid');
                    isValid = false;
                }
                
                // If form is valid, show success message
                if (isValid) {
                    alert('Thank you for your service request! Our team will contact you within 24 hours.');
                    this.reset();
                }
            });

            // Back to top button
            const backToTopButton = document.getElementById('backToTop');
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.style.display = 'block';
                } else {
                    backToTopButton.style.display = 'none';
                }
            });
            backToTopButton.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({top: 0, behavior: 'smooth'});
            });
        });
    </script>

    <a id="backToTop" href="#" class="btn btn-green position-fixed bottom-0 end-0 m-3" style="display: none;">↑</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Saakra Enterprises Pvt Ltd</title>
    <link rel="icon" href="./images/logo-bg.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root { 
            --primary-green: #00652d;
      --secondary-green: #83b744;
      --green-light: #e8f5e9;
            --animation-duration: 0.5s;
        }
        
      
        
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

        /* About Page Custom Styles */
        .bg-dark-green {
            background-color: #1e7e34;
        }
        .text-green {
            color: var(--primary-green);
        }
        .bg-green-light {
            background-color: #d5f5e3;
        }
        .btn.btn-green {
            background-color: var(--green);
            color: white;
            transition: all var(--animation-duration) ease;
        }
        .btn.btn-green:hover { 
            background-color: var(--dark-green); 
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .btn.btn-outline-green { 
            border-color: var(--green); 
            color: var(--green);
            transition: all var(--animation-duration) ease;
        }
        .btn.btn-outline-green:hover { 
            background-color: var(--green); 
            color: white;
            transform: translateY(-2px);
        }
        
        /* Dropdown Menu */
        .dropdown-menu-creative {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            padding: 10px;
        }
        
        /* Page Header */
        .page-header {
            background-color: #f8f9fa;
        }
        
        /* Cards */
        .mission-card, .vision-card, .value-card, .team-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        .mission-card:hover, .vision-card:hover, .value-card:hover, .team-card:hover {
            transform: translateY(-5px);
        }
        .value-icon {
            width: 60px;
            height: 60px;
            background-color: #d5f5e3;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--green);
        }
        
        /* Team Section */
        .team-card img {
            border-radius: 10px 10px 0 0;
            height: 250px;
            object-fit: cover;
        }
        /* #imgf{
            border:100%;

        } */
        .social-links a {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: var(--green);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin: 0 5px;
        }
        
        /* Timeline */
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--green);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 10px;
        }
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            background-color: rgb(125, 217, 120);
            border: 4px solid var(--green);
            border-radius: 50%;
            top: 15px;
            z-index: 1;
        }
        .timeline-year {
            padding: 5px 15px;
            background-color: var(--green);
            color: rgb(84, 220, 166);
            border-radius: 20px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 10px;
        }
        .timeline-content {
            padding: 20px;
            background-color: rgb(111, 224, 132);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .left {
            left: 0;
        }
        .right {
            left: 50%;
        }
        .left::after {
            right: -12px;
        }
        .right::after {
            left: -12px;
        }
        
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
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .timeline::after {
                left: 31px;
            }
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            .timeline-item::after {
                left: 18px;
            }
            .left::after, .right::after {
                left: 18px;
            }
            .left, .right {
                left: 0;
            }
            .header-space {
                height: 70px;
            }
        }
        
        @media (max-width: 767.98px) {
            .navbar-collapse { 
                background: rgba(30, 126, 52, 0.95); 
                padding: 15px; 
                border-radius: 10px; 
                margin-top: 15px;
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
        }
        
        /* Footer */
        footer a {
            text-decoration: none;
            transition: color 0.3s;
        }
        footer a:hover {
            color: var(--green) !important;
        }
        .social-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 35px;
            margin-right: 10px;
            transition: background-color 0.3s;
        }
        .social-icons a:hover {
            background-color: var(--green);
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
    <header class="page-header py-5 bg-light  pt-5 mt-5">
        <div class="container text-center">
            <h1 class="text-green">About Saakra Enterprises</h1>
            <p class="lead">Dream It. Design It. Deliver It.</p>
        </div>
    </header>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="images/aboutus-hero.jpg" alt="About Saakra Enterprises" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="text-green mb-4">Our Story</h2>
                    <p>Founded in 2016, Saakra Enterprises Pvt. Ltd. started with a clear vision and a strong entrepreneurial spirit. What began as a modest venture has evolved into a dynamic and forward-looking enterprise.</p>
                    <p>Our journey is a testament to resilience, innovation, and a deep-rooted commitment to excellence. With each passing year, we've embraced new challenges, adapted to changing market landscapes, and continued to build lasting relationships based on integrity and trust. Today, Saakra Enterprises stands as a symbol of sustainable growth, driven by a clear vision and guided by strong values.<p>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="text-green mb-4 text-center">Our Mission & Vision</h2>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card mission-card h-100">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-bullseye text-green fs-1 mb-3"></i>
                            <h4 class="text-green">Our Mission</h4>
                            <p>To provide comprehensive business solutions that empower our clients to achieve their goals through reliable services, innovative approaches, and unwavering commitment to quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card vision-card h-100">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-eye text-green fs-1 mb-3"></i>
                            <h4 class="text-green">Our Vision</h4>
                            <p>To be recognized as a leader in diversified business services, known for our integrity, customer-centric approach, and ability to deliver exceptional value across all our business verticals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Core Values</h2>
                <p class="text-muted">The principles that guide everything we do</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="value-icon mb-3">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h4 class="text-green">Integrity</h4>
                            <p>We conduct our business with honesty, transparency, and ethical practices in all our dealings.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="value-icon mb-3">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="text-green">Customer Focus</h4>
                            <p>Our clients are at the heart of everything we do. We listen, understand, and deliver solutions tailored to their needs.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="value-icon mb-3">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h4 class="text-green">Innovation</h4>
                            <p>We embrace change and continuously seek better ways to serve our clients and improve our services.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="value-icon mb-3">
                                <i class="fas fa-award"></i>
                            </div>
                            <h4 class="text-green">Quality</h4>
                            <p>We maintain the highest standards in all our products and services, ensuring consistent excellence.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="value-icon mb-3">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h4 class="text-green">Collaboration</h4>
                            <p>We believe in the power of teamwork, both within our organization and with our partners and clients.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="value-icon mb-3">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 class="text-green">Growth</h4>
                            <p>We are committed to continuous improvement and sustainable growth for our business and our clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Team Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="text-green">Meet Our Leadership</h2>
            <p class="text-muted">The driving force behind Saakra Enterprises</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="row justify-content-center">
                    <div class="row justify-content-center">
                        <!-- Director Card (No Icon) -->
                        <div class="col-lg-5 col-md-6 mb-4">
                            <div class="card team-card h-100 border-0 shadow-sm">
                                <div class="card-body p-4 d-flex flex-column text-center">
                                    <!-- Name starts directly here (no empty space) -->
                                    <h4 class="text-green mb-1">SUHANA V</h4>
                                    <p class="text-muted fw-bold mb-3">DIRECTOR (SAAKRA ENTERPRISES PVT LTD)</p>
                                    <p class="mb-4">Experience in software development and quality assurance, Director of Saakra Enterprises with a vision to deliver testing solutions and innovative software products that transform businesses.</p>
                                    
                                    <div class="social-links d-flex justify-content-center gap-3 mt-auto">
                                        <a href="#" class="text-green"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" class="text-green"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="text-green"><i class="fas fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Managing Director (With Image) -->
                    <div class="col-lg-5 col-md-6 mb-4">
                        <div class="card team-card h-100 border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="mx-auto mb-3" style="width: 150px; height: 150px;">
                                    <img src="images/Directorsaakra.jpg" class="img-fluid rounded-circle w-100 h-100 object-fit-cover" alt="Managing Director">
                                </div>
                                <h4 class="text-green mt-3 mb-1">AASHIK AASAN K</h4>
                                <p class="text-muted fw-bold mb-3">MD (SAAKRA ENTERPRISES PVT LTD)</p>
                                <p class="mb-4 px-3">With 16+ years of cross-domain expertise spanning IT solutions, trading operations, Transport Services, franchise development, Indian oil vendor, and e-commerce ventures, Managing Director of Saakra Enterprises with a vision for diversified business excellence.</p>
                                <div class="social-links d-flex justify-content-center gap-3">
                                    <a href="#" class="text-green"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="text-green"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-green"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
                    
</section>
    <!-- Milestones -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Journey</h2>
                <p class="text-muted">Key milestones in our growth story</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item left">
                    <div class="timeline-year"><b>2016</b></div>
                    <div class="timeline-content">
                        <h5 class="text-green">Company Founded</h5>
                        <p>Saakra Enterprises established as an Indian Oil vendor in Sankari,Salem.Serving local businesses with fuel distribution services.</p>
                    </div>
                </div>
                
                <div class="timeline-item right">
                    <div class="timeline-year"><b>2022</b></div>
                    <div class="timeline-content">
                        <h5 class="text-green">Tyres Trading Division</h5>
                        <p>Expanded into tyre trading, providing quality tyres to transport and logistics companies.</p>
                    </div>
                </div>
                
                <div class="timeline-item left">
                    <div class="timeline-year"><b>2023</b></div>
                    <div class="timeline-content">
                        <h5 class="text-green">ATM Franchise Services</h5>
                        <p>Partnered with major banks to provide ATM franchise services across Maharashtra.</p>
                    </div>
                </div>
                
                <div class="timeline-item right">
                    <div class="timeline-year">2021</div>
                    <div class="timeline-content">
                        <h5 class="text-green">Transport Division</h5>
                        <p>Launched our own transport services to complement our existing logistics operations.</p>
                    </div>
                </div>
                
                <div class="timeline-item left">
                    <div class="timeline-year"><b>2022</b></div>
                    <div class="timeline-content">
                        <h5 class="text-green">E-Commerce Services</h5>
                        <p>Established e-commerce division to help businesses sell online through Amazon, Flipkart, and Meesho.</p>
                    </div>
                </div>
                
                <div class="timeline-item right">
                    <div class="timeline-year"><b>2025</b></div>
                    <div class="timeline-content">
                        <h5 class="text-green">IT Services Launch</h5>
                        <p>Added web development, design, and digital marketing services to our portfolio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-dark-green text-white">
        <div class="container text-center">
            <h2>Want to Know More About Us?</h2>
            <p class="lead mb-4">Our team is ready to answer your questions and discuss how we can work together.</p>
            <a href="contact.php" class="btn btn-light btn-lg">Contact Us</a>
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

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
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
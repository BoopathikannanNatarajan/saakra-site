<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyres Trading Services | Saakra Enterprises Pvt Ltd</title>
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
            --animation-duration: 0.5s;
        }
        .text-green { color: var(--green); }
        .bg-green { background-color: var(--green); }
        .bg-dark-green { background-color: var(--dark-green); }
        .bg-green-light { background-color: var(--green-light); }
        .btn-green { 
            background-color: var(--green); 
            color: white;
            transition: all var(--animation-duration) ease;
        }
        .btn-green:hover { 
            background-color: var(--dark-green); 
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .btn-outline-green { 
            border-color: var(--green); 
            color: var(--green);
            transition: all var(--animation-duration) ease;
        }
        .btn-outline-green:hover { 
            background-color: var(--green); 
            color: white;
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

        /* Tyres Page Specific Styles */
        .brand-logo {
            max-height: 60px;
            width: auto;
            margin: 10px 0;
        }
        
        .service-header img {
            max-width: 100%;
            height: auto;
        }
        
        .border-green {
            border-color: var(--green) !important;
        }
        
        .bg-green-50 {
            background-color: rgba(39, 226, 92, 0.1);
        }
        
        @media (max-width: 768px) {
            .page-header {
                text-align: center;
            }
            
            .navbar-brand .company-name {
                font-size: 1rem;
            }
            
            .card {
                margin-bottom: 20px;
            }
        }
        
        @media (max-width: 576px) {
            .section-header h2 {
                font-size: 1.8rem;
            }
            
            .navbar-brand img {
                height: 50px;
            }
        }
        
        /* Responsive adjustments */
        @media (max-width: 767.98px) {
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
    <header class="page-header py-5 service-header pt-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="text-green">Tyres Trading Services</h1>
                    <p class="lead">Premium quality tyres for all vehicle types at competitive prices</p>
                    <a href="#tyre-selector" class="btn btn-green btn-lg mt-3">Find Your Tyres</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <img src="./images/tyers-hero.jpg" alt="Tyres Trading Services" class="img-fluid hover-scale" style="max-width: 300px; height: auto; transform: perspective(1000px) rotateY(0deg); transition: transform 0.5s;">
                </div>
            </div>
        </div>
    </header>

    <!-- Tyre Categories -->
    <section class="py-5 bg-white" id="tyre-selector">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Tyre Categories</h2>
                <p>Find the perfect tyres for your vehicle</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-green h-100">
                        <img src="./images/tyer1.jpg" class="card-img-top" alt="Passenger Vehicle Tyres">
                        <div class="card-body">
                            <h5 class="text-green">Passenger Vehicle Tyres</h5>
                            <p>High-performance tyres for cars, SUVs, and minivans from top brands.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-green me-2"></i> All-season and seasonal options</li>
                                <li><i class="fas fa-check text-green me-2"></i> Fuel-efficient models</li>
                                <li><i class="fas fa-check text-green me-2"></i> Premium and budget choices</li>
                            </ul>
                            <a href="#" class="btn btn-outline-green mt-3">View Options</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-green h-100">
                        <img src="./images/tyer3.jpg" class="card-img-top" alt="Commercial Vehicle Tyres">
                        <div class="card-body">
                            <h5 class="text-green">Commercial Vehicle Tyres</h5>
                            <p>Durable tyres for trucks, buses, and heavy-duty vehicles built to last.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-green me-2"></i> Long-haul and regional options</li>
                                <li><i class="fas fa-check text-green me-2"></i> High-load capacity</li>
                                <li><i class="fas fa-check text-green me-2"></i> Retread options available</li>
                            </ul>
                            <a href="#" class="btn btn-outline-green mt-3">View Options</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-green h-100">
                        <img src="./images/tyer2.jpg" class="card-img-top" alt="Industrial Tyres">
                        <div class="card-body">
                            <h5 class="text-green">Industrial & OTR Tyres</h5>
                            <p>Specialty tyres for construction, mining, and industrial equipment.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-green me-2"></i> Extreme durability</li>
                                <li><i class="fas fa-check text-green me-2"></i> Heavy-load designs</li>
                                <li><i class="fas fa-check text-green me-2"></i> Custom solutions available</li>
                            </ul>
                            <a href="#" class="btn btn-outline-green mt-3">View Options</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Partner Brands</h2>
                <p>We carry tyres from the world's leading manufacturers</p>
            </div>
            
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-6 col-sm-4 col-md-3 text-center">
                    <img src="./images/mrf.png" alt="MRF" class="img-fluid brand-logo">
                </div>
                <div class="col-6 col-sm-4 col-md-3 text-center">
                    <img src="./images/apollo-tyres-brand-logo.png" alt="Apollo" class="img-fluid brand-logo">
                </div>
                <div class="col-6 col-sm-4 col-md-3 text-center">
                    <img src="./images/ceat.png" alt="CEAT" class="img-fluid brand-logo">
                </div>
                <div class="col-6 col-sm-4 col-md-3 text-center">
                    <img src="./images/bridgestone.png" alt="Bridgestone" class="img-fluid brand-logo">
                </div>
                <div class="col-6 col-sm-4 col-md-3 text-center">
                    <img src="./images/michelin.png" alt="Michelin" class="img-fluid brand-logo">
                </div>
                <div class="col-6 col-sm-4 col-md-3 text-center">
                    <img src="./images/goodyear.png" alt="Goodyear" class="img-fluid brand-logo">
                </div>
                <div class="col-6 col-sm-4 col-md-3 text-center">
                    <img src="./images/jktyer.jpeg" alt="JK Tyre" class="img-fluid brand-logo">
                </div>
                <div class="col-6 col-sm-4 col-md-3 text-center">
                    <img src="./images/bkt.png" alt="BKT" class="img-fluid brand-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Tyre Services</h2>
                <p>Complete solutions for all your tyre needs</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card border-green h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-green-50 rounded-circle p-3 mb-4 mx-auto" style="width: 80px; height: 80px;">
                                <i class="fas fa-truck-loading text-green fs-3"></i>
                            </div>
                            <h5 class="text-green">Bulk Supply</h5>
                            <p>Competitive pricing for fleet operators and large volume purchases.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card border-green h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-green-50 rounded-circle p-3 mb-4 mx-auto" style="width: 80px; height: 80px;">
                                <i class="fas fa-tools text-green fs-3"></i>
                            </div>
                            <h5 class="text-green">Tyre Management</h5>
                            <p>Complete solutions including rotation, balancing, and pressure monitoring.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card border-green h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-green-50 rounded-circle p-3 mb-4 mx-auto" style="width: 80px; height: 80px;">
                                <i class="fas fa-recycle text-green fs-3"></i>
                            </div>
                            <h5 class="text-green">Retreading</h5>
                            <p>Cost-effective retreading services to extend tyre life.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card border-green h-100">
                        <div class="card-body text-center p-4">
                            <div class="bg-green-50 rounded-circle p-3 mb-4 mx-auto" style="width: 80px; height: 80px;">
                                <i class="fas fa-headset text-green fs-3"></i>
                            </div>
                            <h5 class="text-green">24/7 Support</h5>
                            <p>Round-the-clock assistance for emergency tyre needs and consultations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">What Our Customers Say</h2>
                <p>Trusted by businesses and individuals across the region</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <div>
                                    <h5 class="mb-1">Yamuna Transport</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>"Saakra Enterprises provided our transport company with high-quality tyres at wholesale prices. Their service is exceptional and delivery is always on time."</p>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                            
                                <div>
                                    <h5 class="mb-1">KNK Transport</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <p>"I've been buying tyres for my transport from Saakra for 3 years now. They always have the best brands in stock and their staff is very knowledgeable about tyre specifications."</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                            
                                <div>
                                    <h5 class="mb-1">NAS Transport</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>"Their tyre management services have helped our fleet reduce maintenance costs by 20%. Highly recommend their professional approach and quality products."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-green text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="mb-3">Ready to Find Your Perfect Tyres?</h2>
                    <p class="lead mb-lg-0">Contact our tyre specialists today for expert advice and competitive pricing.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="./contact.php" class="btn btn-light btn-lg">Get in Touch</a>
                </div>
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

 
    <!-- Custom JS -->
    <script src="../js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <a id="backToTop" href="#" class="btn btn-green position-fixed bottom-0 end-0 m-3 rounded-circle" style="display: none; width: 50px; height: 50px; padding: 0; line-height: 50px;">↑</a>
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

            // Back to top button
            window.addEventListener('scroll', function() {
                var backToTop = document.getElementById('backToTop');
                if (window.pageYOffset > 300) {
                    backToTop.style.display = 'block';
                } else {
                    backToTop.style.display = 'none';
                }
            });
            
            document.getElementById('backToTop').addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({top: 0, behavior: 'smooth'});
            });

            // Hover effect for the tyre image
            document.querySelector('.hover-scale')?.addEventListener('mouseover', function() {
                this.style.transform = 'perspective(1000px) rotateY(15deg)';
            });
            document.querySelector('.hover-scale')?.addEventListener('mouseout', function() {
                this.style.transform = 'perspective(1000px) rotateY(0deg)';
            });
        });
    </script>
</body>
</html>
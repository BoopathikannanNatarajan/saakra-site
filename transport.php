<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Services | Saakra Enterprises Pvt Ltd</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
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
        
        /* Transport Page Specific Styles */
        .transport-card {
            transition: transform 0.3s;
            border: 1px solid #28a745;
            margin-bottom: 20px;
        }
        .transport-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .service-icon {
            font-size: 2.5rem;
            color: #28a745;
            margin-bottom: 1rem;
        }
        .fleet-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .bg-dark-green {
            background-color: #1a472a;
        }
        .bg-green {
            background-color: #28a745;
        }
        .bg-light-green {
            background-color: #e8f5e9;
        }
        .text-green {
            color: #28a745;
        }
        .btn-green {
            background-color: #28a745;
            color: white;
        }
        .btn-outline-green {
            border-color: #28a745;
            color: #28a745;
        }
        .btn-outline-green:hover {
            background-color: #28a745;
            color: white;
        }
        .page-header {
            padding: 3rem 0;
        }
        @media (max-width: 768px) {
            .page-header {
                padding: 2rem 0;
                text-align: center;
            }
            .page-header img {
                margin-top: 20px;
                width: 100% !important;
                transform: none !important;
            }
            .section-header {
                text-align: center;
            }
            .fleet-image {
                height: 150px;
            }
            .service-icon {
                font-size: 2rem;
            }
        }
        @media (max-width: 576px) {
            .page-header {
                padding: 1.5rem 0;
            }
            .card-body {
                padding: 1.5rem;
            }
            .fleet-statistics h2 {
                font-size: 1.5rem;
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
    <header class="page-header py-5 bg-light pt-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-green">Transport Services</h1>
                    <p class="lead">Reliable and efficient logistics solutions for your business needs</p>
                    <a href="#our-services" class="btn btn-green btn-lg mt-3">Explore Services</a>
                </div>
                <div class="col-lg-6">
                    <img src="./images/transport-hero1.png" alt="Transport Services" class="img-fluid rounded shadow" style="width: 80%; transform: perspective(1000px) rotateY(15deg);">
                </div>
            </div>
        </div>
    </header>

    <!-- Our Services -->
    <section class="py-5 bg-white" id="our-services">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Transport Solutions</h2>
                <p>Comprehensive logistics services tailored to your requirements</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card transport-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h3 class="text-green">Goods Transportation</h3>
                            <p>Safe and timely delivery of goods across the region</p>
                            <ul class="text-start ps-3">
                                <li>Full truckload (FTL) services</li>
                                <li>Less than truckload (LTL) options</li>
                                <li>Temperature-controlled transport</li>
                                <li>Dedicated fleet operations</li>
                            </ul>
                            <a href="#contact" class="btn btn-outline-green mt-3">Enquire Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card transport-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-gas-pump"></i>
                            </div>
                            <h3 class="text-green">Fuel Transportation</h3>
                            <p>Specialized transport for petroleum products</p>
                            <ul class="text-start ps-3">
                                <li>Diesel and petrol tankers</li>
                                <li>LPG cylinder distribution</li>
                                <li>Adherence to safety standards</li>
                                <li>Regular maintenance fleet</li>
                            </ul>
                            <a href="#contact" class="btn btn-outline-green mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card transport-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <h3 class="text-green">Warehousing & Distribution</h3>
                            <p>Complete supply chain solutions</p>
                            <ul class="text-start ps-3">
                                <li>Secure storage facilities</li>
                                <li>Inventory management</li>
                                <li>Last-mile delivery</li>
                                <li>Customs clearance support</li>
                            </ul>
                            <a href="#contact" class="btn btn-outline-green mt-3">View Options</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Fleet -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Transport Fleet</h2>
                <p>Modern, well-maintained vehicles for all your logistics needs</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card transport-card h-100">
                        <img src="./images/heavytruck.jpg" class="card-img-top fleet-image" alt="Heavy Truck">
                        <div class="card-body text-center">
                            <h4 class="text-green">Heavy Trucks</h4>
                            <p>10T, 20T, and 30T capacity options</p>
                            <span class="badge bg-green">Available: 15</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card transport-card h-100">
                        <img src="./images/oiltanker.jpg" class="card-img-top fleet-image" alt="Tanker Truck">
                        <div class="card-body text-center">
                            <h4 class="text-green">Tanker Trucks</h4>
                            <p>12,000L to 35,000L capacity</p>
                            <span class="badge bg-green">Available: 8</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card transport-card h-100">
                        <img src="./images/containertruck.jpg" class="card-img-top fleet-image" alt="Container Truck">
                        <div class="card-body text-center">
                            <h4 class="text-green">Container Trucks</h4>
                            <p>20ft and 40ft container capacity</p>
                            <span class="badge bg-green">Available: 12</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card transport-card h-100">
                        <img src="./images/deliverytruck.jpg" class="card-img-top fleet-image" alt="Delivery Van">
                        <div class="card-body text-center">
                            <h4 class="text-green">Delivery Vans</h4>
                            <p>1T to 3T cargo capacity</p>
                            <span class="badge bg-green">Available: 25</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="bg-white p-4 rounded shadow-sm">
                            <h4 class="text-green mb-3">Fleet Statistics</h4>
                            <div class="row">
                                <div class="col-6 col-md-3 mb-3 mb-md-0">
                                    <h2 class="text-green">60+</h2>
                                    <p>Vehicles</p>
                                </div>
                                <div class="col-6 col-md-3 mb-3 mb-md-0">
                                    <h2 class="text-green">100%</h2>
                                    <p>GPS Tracked</p>
                                </div>
                                <div class="col-6 col-md-3">
                                    <h2 class="text-green">24/7</h2>
                                    <p>Support</p>
                                </div>
                                <div class="col-6 col-md-3">
                                    <h2 class="text-green">99%</h2>
                                    <p>On-time Delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Area -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Coverage Network</h2>
                <p>Serving across Maharashtra with expanding operations</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="./images/vehicle-road.jpg" alt="Coverage Area" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="text-green">Primary Service Areas</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-map-marker-alt text-green me-2"></i> Mumbai</li>
                                <li class="mb-2"><i class="fas fa-map-marker-alt text-green me-2"></i> Pune</li>
                                <li class="mb-2"><i class="fas fa-map-marker-alt text-green me-2"></i> Nagpur</li>
                                <li class="mb-2"><i class="fas fa-map-marker-alt text-green me-2"></i> Nashik</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-map-marker-alt text-green me-2"></i> Aurangabad</li>
                                <li class="mb-2"><i class="fas fa-map-marker-alt text-green me-2"></i> Kolhapur</li>
                                <li class="mb-2"><i class="fas fa-map-marker-alt text-green me-2"></i> Solapur</li>
                                <li class="mb-2"><i class="fas fa-map-marker-alt text-green me-2"></i> Amravati</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-green">Expanding to New Regions</h4>
                        <p>We're continuously expanding our network to serve more locations across India. Contact us to inquire about service availability in your area.</p>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i> Special rates available for regular routes and bulk contracts.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Why Choose Saakra Transport?</h2>
                <p>We go the extra mile to ensure your goods arrive safely and on time</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-4 text-green">
                            <i class="fas fa-shield-alt fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-green">Safety First</h4>
                            <p>Our drivers are highly trained and all vehicles undergo regular safety inspections. We maintain comprehensive insurance for all shipments.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-4 text-green">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-green">On-Time Guarantee</h4>
                            <p>With our advanced route planning and real-time tracking, we guarantee timely deliveries with a 99% on-time delivery record.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-4 text-green">
                            <i class="fas fa-rupee-sign fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-green">Competitive Pricing</h4>
                            <p>We offer transparent pricing with no hidden charges. Our volume discounts and regular customer benefits provide great value.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-4 text-green">
                            <i class="fas fa-headset fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-green">24/7 Support</h4>
                            <p>Our customer service team is available round the clock to handle your queries and provide shipment updates.</p>
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
                <div class="col-lg-8 mb-3 mb-lg-0">
                    <h2 class="mb-3">Ready to Ship With Us?</h2>
                    <p class="lead mb-lg-0">Get a free quote for your transportation needs today.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="../contact.php" class="btn btn-light btn-lg">Get a Quote</a>
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
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Services | Saakra Enterprises Pvt Ltd</title>
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
            --green: #0f5820;
            --dark-green: #00652d;
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
        
        /* E-commerce specific styles */
        .ecom-card {
            transition: transform 0.3s;
            border: 1px solid var(--green);
            margin-bottom: 20px;
        }
        .ecom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .service-icon {
            font-size: 2.5rem;
            color: var(--green);
            margin-bottom: 1rem;
        }
        .platform-image {
            height: 200px;
            object-fit: contain;
            padding: 20px;
        }
        .page-header {
            background-color: #f8f9fa;
            background-image: linear-gradient(to bottom, rgba(248, 249, 250, 0.9), rgba(248, 249, 250, 0.9)), url('images/ecommerce/ecom-bg.jpg');
            background-size: cover;
            background-position: center;
            padding: 3rem 0;
            margin-top: 80px;
        }
        .platform-logo {
            max-height: 60px;
            width: auto;
            transition: all 0.3s ease;
            margin: 0 auto;
            display: block;
        }
        .platform-logo:hover {
            transform: scale(1.1);
        }
        .section-header {
            padding-bottom: 20px;
        }
        .bg-green-50 {
            background-color: rgba(40, 167, 69, 0.1);
        }
        .bg-light-green {
            background-color: var(--green-light);
        }
        .btn-outline-green:hover {
            background-color: var(--green);
            color: white;
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
            .page-header h1 {
                font-size: 2rem;
            }
            .platform-logo {
                max-height: 40px;
            }
            .ecom-card h4 {
                font-size: 1.2rem;
            }
            .why-choose-us h4 {
                font-size: 1.1rem;
            }
            .cta-section h2 {
                font-size: 1.5rem;
            }
            .cta-section .btn {
                width: 100%;
                margin-top: 10px;
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
    <header class="page-header pt-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-green">E-Commerce Services</h1>
                    <p class="lead">Complete online selling solutions across multiple platforms</p>
                    <a href="#our-platforms" class="btn btn-green btn-lg mt-3">Explore Our Platforms</a>
                </div>
                <div class="col-lg-6">
                    <img src="./images/ecom-header.jpg" alt="E-Commerce Services" class="img-fluid rounded shadow" style="transition: transform 0.5s, box-shadow 0.5s; transform: perspective(1000px) rotateY(0deg); background: none; max-height: 300px;">
                </div>
                <script>
                    document.querySelector('.col-lg-6 img').addEventListener('mouseover', function() {
                        this.style.transform = 'perspective(1000px) rotateY(15deg)';
                        this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.2)';
                    });
                    document.querySelector('.col-lg-6 img').addEventListener('mouseout', function() {
                        this.style.transform = 'perspective(1000px) rotateY(0deg)';
                        this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.1)';
                    });
                </script>
            </div>
        </div>
    </header>

    <!-- Our Platforms -->
    <section class="py-5 bg-white" id="our-platforms">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our E-Commerce Platforms</h2>
                <p>We sell across multiple marketplaces to maximize your reach</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card ecom-card h-100">
                        <div class="card-body text-center p-4">
                            <img src="./images/buyzzy.shop.webp" alt="Buyzzy" class="platform-logo mb-4">
                            <h4 class="text-green">Buyzzy Dropshipping <br><b>(Own Store)</b></h4>
                            <p>Our dedicated dropshipping store offering products.</p>
                            <ul class="text-start">
                                <li><i class="fas fa-check-circle text-green me-2"></i> Print-on-demand services</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Custom product creation</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Worldwide shipping</li>
                            </ul>
                            <a href="https://buyzzy.shop" target="_blank" class="btn btn-outline-green mt-3">Visit Buyzzy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card ecom-card h-100">
                        <div class="card-body text-center p-4">
                            <img src="./images/meesho.png" alt="Meesho" class="platform-logo mb-4">
                            <h4 class="text-green">Meesho Reseller</h4>
                            <p>We supply products to Meesho resellers with competitive pricing and reliable fulfillment.</p>
                            <ul class="text-start">
                                <li><i class="fas fa-check-circle text-green me-2"></i> Zero investment selling</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Pan-India delivery network</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Social commerce focus</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card ecom-card h-100">
                        <div class="card-body text-center p-4">
                            <img src="./images/amazon.png" alt="Amazon" class="platform-logo mb-4">
                            <h4 class="text-green">Amazon Seller</h4>
                            <p>We maintain an active Amazon seller account with Prime eligibility for fast shipping and better visibility.</p>
                            <ul class="text-start">
                                <li><i class="fas fa-check-circle text-green me-2"></i> FBA and FBM options</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Sponsored product ads</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Brand registry support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card ecom-card h-100">
                        <div class="card-body text-center p-4">
                            <img src="./images/flipcart.png" alt="Flipkart" class="platform-logo mb-4">
                            <h4 class="text-green">Flipkart Seller</h4>
                            <p>We're an established Flipkart seller with access to premium listing options and promotions.</p>
                            <ul class="text-start">
                                <li><i class="fas fa-check-circle text-green me-2"></i> Flipkart Advantage program</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> SuperCoins rewards</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Big Billion Day participation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our E-Commerce Services</h2>
                <p>Comprehensive solutions for your online business needs</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card ecom-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-green-50 rounded-circle p-3 me-3">
                                    <i class="fas fa-store text-green fs-4"></i>
                                </div>
                                <h4 class="text-green mb-0">Multi-Channel Selling</h4>
                            </div>
                            <p>We manage your products across all major marketplaces simultaneously, ensuring consistent branding and inventory synchronization.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-green me-2"></i> Centralized inventory management</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Unified product catalog</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Cross-platform analytics</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card ecom-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-green-50 rounded-circle p-3 me-3">
                                    <i class="fas fa-tshirt text-green fs-4"></i>
                                </div>
                                <h4 class="text-green mb-0">Print-on-Demand</h4>
                            </div>
                            <p>Our custom printing service lets you create unique products without inventory risk, fulfilled through our Buyzzy.shop platform.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-green me-2"></i> T-shirts, mugs, phone cases & more</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> No minimum order quantity</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> White-label packaging</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card ecom-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-green-50 rounded-circle p-3 me-3">
                                    <i class="fas fa-truck text-green fs-4"></i>
                                </div>
                                <h4 class="text-green mb-0">Dropshipping Solutions</h4>
                            </div>
                            <p>We handle inventory, packaging, and shipping so you can focus on marketing and customer acquisition.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-green me-2"></i> 100+ products ready to sell</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> 2-3 day processing time</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Branded invoicing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card ecom-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-green-50 rounded-circle p-3 me-3">
                                    <i class="fas fa-chart-line text-green fs-4"></i>
                                </div>
                                <h4 class="text-green mb-0">Marketplace Optimization</h4>
                            </div>
                            <p>We optimize your product listings to improve visibility and conversion rates across all platforms.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-green me-2"></i> SEO-optimized titles & descriptions</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Professional product photography</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> A+ Content creation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card ecom-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-green-50 rounded-circle p-3 me-3">
                                    <i class="fas fa-ad text-green fs-4"></i>
                                </div>
                                <h4 class="text-green mb-0">Advertising Management</h4>
                            </div>
                            <p>We manage and optimize your marketplace ads to maximize ROI and sales velocity.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-green me-2"></i> Sponsored product campaigns</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Display advertising</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Performance analytics</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card ecom-card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-green-50 rounded-circle p-3 me-3">
                                    <i class="fas fa-headset text-green fs-4"></i>
                                </div>
                                <h4 class="text-green mb-0">Customer Support</h4>
                            </div>
                            <p>We handle all customer inquiries, returns, and after-sales support on your behalf.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-green me-2"></i> 24/7 query resolution</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Returns & refund management</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Review generation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-white why-choose-us">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Why Choose Our E-Commerce Services?</h2>
                <p>We provide comprehensive solutions to grow your online business</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-4 text-green">
                            <i class="fas fa-chart-pie fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-green">Multi-Platform Expertise</h4>
                            <p>With experience across all major marketplaces, we know how to optimize your presence on each platform for maximum visibility and sales.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-4 text-green">
                            <i class="fas fa-boxes fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-green">Inventory Management</h4>
                            <p>Our centralized inventory system ensures stock levels are synchronized across all platforms, preventing overselling.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-4 text-green">
                            <i class="fas fa-tags fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-green">Competitive Pricing</h4>
                            <p>We offer transparent pricing with no hidden fees, helping you maximize your profit margins while staying competitive.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="me-4 text-green">
                            <i class="fas fa-shield-alt fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="text-green">Brand Protection</h4>
                            <p>We help protect your brand from counterfeiters and unauthorized sellers through brand registry programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-green text-white cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Ready to Grow Your Online Business?</h2>
                    <p class="lead mb-lg-0">Let us handle the e-commerce operations while you focus on scaling your brand.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="./contact.php" class="btn btn-light btn-lg">Get Started Today</a>
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
        });

        // Back to top button
        window.addEventListener('scroll', function() {
            const backToTop = document.getElementById('backToTop');
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
    </script>

    <a id="backToTop" href="#" class="btn btn-green position-fixed bottom-0 end-0 m-3" style="display: none;">↑</a>
</body>
</html>
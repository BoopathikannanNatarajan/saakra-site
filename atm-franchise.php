<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Franchise Services in Hitech City | Saakra Enterprises Pvt Ltd</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
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
            background-color: var(--primary-green);
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

        /* ATM Page Specific Styles */
        .atm-location-card {
            transition: transform 0.3s;
        }
        .atm-location-card:hover {
            transform: translateY(-5px);
        }
        .atm-feature-icon {
            font-size: 2rem;
            color: var(--primary-green);
            margin-bottom: 1rem;
        }
        /* Hero section image size adjustment */
        .hero-image {
            max-height: 400px;
            width: auto;
            object-fit: cover;
        }
        
        .border-green {
            border: 1px solid var(  --primary-green);
        }
        .bg-green {
            background-color: var( --primary-green);
        }
        .bg-light-green {
            background-color: var( --green-light);
        }
        .text-green {
            color: var(--primary-green);
        }
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
            color: white;
            transform: translateY(-2px);
        }
        
        /* Responsive adjustments */
     
        /* Footer */
        footer a {
            text-decoration: none;
            transition: color 0.3s;
        }
        footer a:hover {
            color: var(--green-light) !important;
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
            background-color: var(--primary-green);
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

    <!-- Our ATMs Section -->
    <section class="py-5 bg-white pt-5 mt-5" id="atm-locations">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our ATM Locations in Hitech City</h2>
                <p>Strategically placed for maximum convenience and accessibility</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- ATM Location 1 -->
                <div class="col-md-6">
                    <div class="card atm-location-card h-100 border-green">
                        <div class="card-body">
                            <h3 class="text-green">Sankari RS,Tiruchengode Main Road ATM</h3>
                            <p class="text-muted"><i class="fas fa-map-marker-alt text-green me-2"></i>Tiruchengode Main Road, Sankari,Salem</p>
                            <div class="mb-3">
                                <span class="badge bg-green text-white me-2">24/7 Access</span>
                                <span class="badge bg-green text-white me-2">Cash Withdrawal</span>
                                <span class="badge bg-green text-white">Balance Inquiry</span>
                            </div>
                            <p>Our flagship ATM located in the heart of Hitech City, serving thousands of IT professionals daily. Features include:</p>
                            <ul>
                                <li>High transaction capacity</li>
                                <li>Biometric authentication</li>
                                <li>Multi-bank compatibility</li>
                                <li>Regular maintenance</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-phone-volume text-green me-2"></i>
                                    <small>Support: +91 9944111597</small>
                                </div>
                                <a href="https://maps.google.com" class="btn btn-sm btn-outline-green" target="_blank">
                                    <i class="fas fa-directions me-1"></i> Directions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ATM Location 2 -->
                <div class="col-md-6">
                    <div class="card atm-location-card h-100 border-green">
                        <div class="card-body">
                            <h3 class="text-green">New Eddappadi Main Road,Sankari</h3>
                            <p class="text-muted"><i class="fas fa-map-marker-alt text-green me-2"></i>Sankari,Salem</p>
                            <div class="mb-3">
                                <span class="badge bg-green text-white me-2">24/7 Access</span>
                                <span class="badge bg-green text-white me-2">Cash Withdrawal</span>
                                <span class="badge bg-green text-white">Mini Statements</span>
                            </div>
                            <p>Our premium ATM serving the Financial District area with advanced features including:</p>
                            <ul>
                                <li>Contactless card support</li>
                                <li>Higher cash withdrawal limits</li>
                                <li>Multi-language interface</li>
                                <li>Enhanced security monitoring</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-phone-volume text-green me-2"></i>
                                    <small>Support: +91 9944111597</small>
                                </div>
                                <a href="https://maps.google.com" class="btn btn-sm btn-outline-green" target="_blank">
                                    <i class="fas fa-directions me-1"></i> Directions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ATM Features -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our ATM Services</h2>
                <p>Comprehensive financial solutions at your fingertips</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="text-center p-4">
                        <div class="atm-feature-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h4 class="text-green">Cash Withdrawal</h4>
                        <p>Instant cash access with competitive withdrawal limits to meet your daily needs</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="text-center p-4">
                        <div class="atm-feature-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h4 class="text-green">Balance Inquiry</h4>
                        <p>Check your account balance anytime without visiting the bank</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="text-center p-4">
                        <div class="atm-feature-icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                        <h4 class="text-green">Mini Statements</h4>
                        <p>Get quick overview of your recent transactions at our Financial District location</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="text-center p-4">
                        <div class="atm-feature-icon">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <h4 class="text-green">Biometric Access</h4>
                        <p>Secure authentication using fingerprint technology at our Main Road location</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="text-center p-4">
                        <div class="atm-feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4 class="text-green">Contactless Transactions</h4>
                        <p>Tap-and-go functionality for faster, more convenient transactions</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="text-center p-4">
                        <div class="atm-feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="text-green">Advanced Security</h4>
                        <p>24/7 surveillance and anti-skimming technology for your protection</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">What People Say About Our ATMs</h2>
                <p>Feedback from our valued users in Hitech City</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <div>
                                    <h5 class="mb-1">Rajesh Kumar</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>"The ATM near Cyber Towers is always operational and has the shortest queues. Very convenient for quick cash withdrawals during lunch breaks."</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <div>
                                    <h5 class="mb-1">Hari</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <p>"I use the Financial District ATM regularly. The biometric authentication makes it very secure and the interface is user-friendly."</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 mx-auto">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <div>
                                    <h5 class="mb-1">Remo</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>"These ATMs are a lifesaver in Hitech City where banking options are limited. Never had any issues with transactions."</p>
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
                    <h2 class="mb-3">Have Questions About Our ATM Services?</h2>
                    <p class="lead mb-lg-0">Contact us for more information about our existing ATMs or partnership opportunities.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="../contact.php" class="btn btn-light btn-lg">Contact Us</a>
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

    <!-- AOS Animation -->
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
            
        

            // Back to top button
            window.addEventListener('scroll', function() {
                var backToTop = document.getElementById('backToTop');
                if (window.pageYOffset > 300) {
                    backToTop.style.display = 'flex';
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

    <a id="backToTop" href="#" class="btn btn-green position-fixed bottom-0 end-0 m-3" style="display: none;">↑</a>
</body>
</html>
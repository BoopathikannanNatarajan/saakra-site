<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Saakra Enterprises Pvt Ltd</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome (for icons) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap Icons (optional) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" href="./images/logo-bg.png" type="image/png">

  <style>
    :root {
      --primary-green: #00652d;
      --secondary-green: #83b744;
      --green-light: #e8f5e9;
      --neon-glow: #00ff41;
    }

    /* Navbar Styles */
    .navbar-custom {
      background-color: var(--primary-green);
      animation: fadeInDown 1s ease-in-out;
      min-height: 80px;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link,
    .navbar-custom .dropdown-toggle {
      color: white;
      transition: color 0.3s ease;
    }

    .navbar-custom .nav-link:hover,
    .navbar-custom .dropdown-item:hover {
      color: var(--secondary-green);
    }

    /* Logo Animation */
    .logo-container {
      position: relative;
      display: inline-block;
    }
    
    .logo-neon {
      height: 55px;
      border: 2px solid white;
      border-radius: 50%;
      padding: 4px;
      background-color: white;
      position: relative;
      z-index: 1;
      animation: 
        neonPulse 2s ease infinite alternate,
        float 3s ease-in-out infinite;
    }
    
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-5px); }
    }
    
    @keyframes neonPulse {
      0% {
        box-shadow: 
          0 0 5px var(--neon-glow),
          0 0 10px var(--neon-glow),
          0 0 15px var(--neon-glow);
      }
      100% {
        box-shadow: 
          0 0 10px var(--neon-glow),
          0 0 20px var(--neon-glow),
          0 0 30px var(--neon-glow);
      }
    }
    
    .navbar-brand:hover .logo-neon {
      animation: none;
      transform: scale(1.1) translateY(-5px);
      border-color: var(--neon-glow);
      box-shadow: 
        0 0 15px var(--neon-glow),
        0 0 30px var(--neon-glow),
        0 0 45px var(--neon-glow);
    }

    /* Enhanced Our Services Dropdown */
    .dropdown-menu-creative {
      background-color: var(--green-light);
      animation: fadeIn 0.3s ease-in-out;
      border: none !important;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
      border-radius: 10px !important;
      overflow: hidden;
      padding: 0 !important;
      transform-origin: top center;
      min-width: 350px;
    }

    .dropdown-menu-creative .dropdown-item {
      color: #000;
      transition: all 0.4s ease;
      padding: 12px 20px !important;
      border-left: 3px solid transparent;
      position: relative;
      overflow: hidden;
    }

    /* Service Icons Animation */
    .service-icon-circle {
      width: 40px;
      height: 40px;
      background-color: #e9ecef;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.4s ease;
      transform-origin: center;
    }

    /* Company Name Animation */
    .company-name {
      font-weight: bold;
      font-size: 1.25rem;
      transition: transform 0.3s ease;
    }
    
    .navbar-brand:hover .company-name {
      transform: translateX(5px);
    }

    /* Basic Animations */
    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    /* ENHANCED HOVER ANIMATIONS FOR EACH SERVICE */
    
    /* 1. Oil Vendor - Fuel Pump Animation */
    .dropdown-item[href*="oil-vendor"]:hover {
      background: linear-gradient(135deg, var(--secondary-green) 0%, #00652d 100%) !important;
      color: white !important;
      transform: perspective(200px) rotateX(5deg);
      box-shadow: 0 10px 20px rgba(0,101,45,0.2);
    }
    .dropdown-item[href*="oil-vendor"]:hover .service-icon-circle {
      animation: fuelPump 0.8s ease infinite;
      background: white !important;
    }
    @keyframes fuelPump {
      0%, 100% { transform: translateY(0) scale(1); }
      50% { transform: translateY(-5px) scale(1.1); }
    }

    /* 2. Tyres Trading - Rotating Wheel with Bounce */
    .dropdown-item[href*="tyres-trading"]:hover {
      background: linear-gradient(135deg, #83b744 0%, #4a8c20 100%) !important;
      animation: tyreBounce 0.5s ease;
      color: white !important;
    }
    .dropdown-item[href*="tyres-trading"]:hover .service-icon-circle {
      animation: wheelSpin 1s linear infinite;
      background: conic-gradient(white 0%, #e9ecef 100%) !important;
    }
    @keyframes wheelSpin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    @keyframes tyreBounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-3px); }
    }

    /* 3. Transport Services - Moving Truck */
    .dropdown-item[href*="transport"]:hover {
      background: linear-gradient(to right, var(--secondary-green) 0%, #5a9e2a 100%) !important;
      animation: roadMovement 1s linear infinite;
      background-size: 200% 100%;
      color: white !important;
    }
    .dropdown-item[href*="transport"]:hover .service-icon-circle {
      animation: truckDrive 0.8s ease-in-out infinite alternate;
      background: white !important;
    }
    @keyframes truckDrive {
      0% { transform: translateX(0) rotate(0deg); }
      100% { transform: translateX(5px) rotate(2deg); }
    }
    @keyframes roadMovement {
      0% { background-position: 0 0; }
      100% { background-position: 50px 0; }
    }

    /* 4. ATM Franchise - Cash Flow */
    .dropdown-item[href*="atm-franchise"]:hover {
      background: linear-gradient(135deg, #83b744 0%, #2d6a4f 100%) !important;
      overflow: hidden;
      color: white !important;
    }
    .dropdown-item[href*="atm-franchise"]:hover::after {
      content: "💰💵💳";
      position: absolute;
      right: -30px;
      top: 50%;
      transform: translateY(-50%);
      animation: cashFlow 1.5s linear infinite;
      opacity: 0.7;
    }
    .dropdown-item[href*="atm-franchise"]:hover .service-icon-circle {
      animation: cashSpin 2s linear infinite;
      background: white !important;
    }
    @keyframes cashFlow {
      0% { right: -30px; }
      100% { right: 120%; }
    }
    @keyframes cashSpin {
      0% { transform: rotateY(0deg); }
      100% { transform: rotateY(360deg); }
    }

    /* 5. E-Commerce - Cart Zoom */
    .dropdown-item[href*="ecommerce"]:hover {
      background: linear-gradient(135deg, #83b744 0%, #3d8b37 100%) !important;
      animation: cartPulse 0.8s ease infinite alternate;
      color: white !important;
    }
    .dropdown-item[href*="ecommerce"]:hover .service-icon-circle {
      animation: cartAdd 0.5s ease;
      box-shadow: 0 0 0 5px rgba(255,255,255,0.4);
      background: white !important;
    }
    @keyframes cartPulse {
      0% { transform: scale(1); }
      100% { transform: scale(1.02); }
    }
    @keyframes cartAdd {
      0% { transform: scale(1); }
      50% { transform: scale(1.3); }
      100% { transform: scale(1.1); }
    }

    /* 6. IT Services - Digital Glitch */
    .dropdown-item[href*="it-services"]:hover {
      background: linear-gradient(135deg, #83b744 0%, #1b5e20 100%) !important;
      animation: glitch 0.4s linear infinite alternate;
      color: white !important;
    }
    .dropdown-item[href*="it-services"]:hover .service-icon-circle {
      animation: binaryFlash 0.8s steps(1) infinite;
    }
    @keyframes glitch {
      0% { clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); }
      20% { clip-path: polygon(0 10%, 100% 5%, 100% 95%, 0 90%); }
      40% { clip-path: polygon(0 5%, 100% 10%, 100% 90%, 0 95%); }
      60% { clip-path: polygon(0 15%, 100% 0%, 100% 85%, 0 100%); }
      80% { clip-path: polygon(0 0%, 100% 15%, 100% 100%, 0 85%); }
      100% { clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); }
    }
    @keyframes binaryFlash {
      0%, 100% { background: white; }
      50% { background: #f0f0f0; }
    }

    /* ============================================ */
    /* MOBILE-SPECIFIC STYLES (IMPROVED) */
    /* ============================================ */
    
    /* Mobile Menu Button (Hamburger Icon) */
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      color: white;
      font-size: 1.8rem;
      padding: 0.5rem;
      cursor: pointer;
      transition: transform 0.3s ease;
    }
    
    .mobile-menu-btn.active {
      transform: rotate(90deg);
    }
    
    /* Mobile Menu Container */
    .mobile-menu-container {
      position: relative;
      display: none;
      z-index: 1000;
    }
    
    /* Mobile Menu Dropdown */
    .mobile-menu-dropdown {
      position: fixed;
      right: 15px;
      top: 80px;
      background-color: var(--primary-green);
      border-radius: 10px;
      box-shadow: 0 5px 25px rgba(0,0,0,0.2);
      z-index: 1000;
      display: none;
      width: calc(100% - 30px);
      max-width: 350px;
      max-height: 80vh;
      overflow-y: auto;
      transform-origin: top right;
      animation: scaleIn 0.2s ease-out;
    }
    
    @keyframes scaleIn {
      from {
        transform: scale(0.8);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }
    
    .mobile-menu-dropdown.show {
      display: block;
    }
    
    /* Mobile Menu Items */
    .mobile-menu-item {
      padding: 1rem 1.5rem;
      color: white;
      display: flex;
      align-items: center;
      text-decoration: none;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      transition: all 0.3s ease;
    }
    
    .mobile-menu-item i:first-child {
      width: 24px;
      text-align: center;
      margin-right: 12px;
    }
    
    .mobile-menu-item:last-child {
      border-bottom: none;
    }
    
    .mobile-menu-item:hover {
      background-color: var(--secondary-green);
      padding-left: 1.75rem;
    }
    
    /* Mobile Submenu */
    .mobile-submenu {
      display: none;
      background-color: rgba(0,0,0,0.1);
      border-radius: 0 0 10px 10px;
    }
    
    .mobile-submenu.show {
      display: block;
    }
    
    .mobile-submenu .mobile-menu-item {
      padding-left: 2.5rem;
      font-size: 0.95rem;
    }
    
    .mobile-submenu .mobile-menu-item:hover {
      padding-left: 2.75rem;
    }
    
    /* Chevron Animation */
    .mobile-menu-item .chevron {
      margin-left: auto;
      transition: transform 0.3s ease;
    }
    
    .mobile-menu-item.active .chevron {
      transform: rotate(180deg);
    }
    
    /* Mobile Logo Adjustments */
    .mobile-logo {
      height: 40px;
      border: 2px solid white;
      border-radius: 50%;
      padding: 3px;
      background-color: white;
    }
    
    /* Mobile Company Name */
    .mobile-company-name {
      font-size: 1.1rem;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 180px;
    }
    
    /* ============================================ */
    /* RESPONSIVE ADJUSTMENTS */
    /* ============================================ */
    
    @media (max-width: 991.98px) {
      /* Hide desktop menu on mobile */
      .desktop-menu {
        display: none;
      }
      
      /* Show mobile menu container */
      .mobile-menu-container {
        display: block;
      }
      
      /* Show mobile menu button */
      .mobile-menu-btn {
        display: block;
      }
      
      /* Adjust navbar brand for mobile */
      .navbar-brand .company-name {
        display: none;
      }
      
      /* Mobile-specific logo and company name */
      .mobile-brand {
        display: flex;
        align-items: center;
      }
      
      /* Adjust logo size for mobile */
      .logo-neon {
        height: 40px;
      }
      
      /* Make dropdown full width on mobile */
      .dropdown-menu-creative {
        min-width: auto;
        width: 100%;
        border-radius: 0 !important;
        box-shadow: none !important;
        position: fixed;
        top: 80px;
        left: 0;
        right: 0;
        max-height: calc(100vh - 80px);
        overflow-y: auto;
      }
    }
    
    @media (min-width: 992px) {
      /* Hide mobile menu on desktop */
      .mobile-menu-container {
        display: none;
      }
      
      /* Show desktop menu */
      .desktop-menu {
        display: flex;
      }
      
      /* Show full company name on desktop */
      .navbar-brand .company-name {
        display: inline;
      }
    }
    
    /* Extra small devices (phones, 600px and down) */
    @media (max-width: 600px) {
      .navbar-custom {
        min-height: 70px;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }
      
      .mobile-menu-dropdown {
        top: 70px;
      }
      
      .logo-neon {
        height: 36px;
      }
      
      .mobile-menu-item {
        padding: 0.9rem 1.25rem;
      }
      
      .mobile-submenu .mobile-menu-item {
        padding-left: 2rem;
      }
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <div class="logo-container me-2">
          <img src="./images/logo.png" alt="Saakra Enterprises" class="logo-neon">
        </div>
        <span class="company-name text-white">Saakra Enterprises Pvt Ltd</span>
        <span class="mobile-brand d-lg-none">
          <span class="mobile-company-name text-white ms-2">Saakra Enterprises</span>
        </span>
      </a>
      
      <!-- Desktop Menu (shown on large screens) -->
      <div class="desktop-menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active d-flex align-items-center" href="index.php">
              <i class="fas fa-home me-2"></i>Home
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-th me-2"></i>Our Services
            </a>
            <ul class="dropdown-menu dropdown-menu-creative" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item d-flex align-items-center" href="oil-vendor.php">
                <div class="service-icon-circle me-3">
                  <i class="fas fa-gas-pump text-success"></i>
                </div>
                <div>
                  <h6 class="mb-0">Indian Oil Vendor</h6>
                  <small class="text-muted">Landscaping & Construction</small>
                </div>
              </a></li>
              <li><a class="dropdown-item d-flex align-items-center" href="tyres-trading.php">
                <div class="service-icon-circle me-3">
                  <i class="bi bi-radioactive text-success"></i>
                </div>
                <div>
                  <h6 class="mb-0">Tyres Trading</h6>
                  <small class="text-muted">Premium quality tyres</small>
                </div>
              </a></li>
              <li><a class="dropdown-item d-flex align-items-center" href="transport.php">
                <div class="service-icon-circle me-3">
                  <i class="fas fa-truck text-success"></i>
                </div>
                <div>
                  <h6 class="mb-0">Transport Services</h6>
                  <small class="text-muted">Efficient logistics</small>
                </div>
              </a></li>
              <li><a class="dropdown-item d-flex align-items-center" href="atm-franchise.php">
                <div class="service-icon-circle me-3">
                  <i class="fas fa-money-bill-wave text-success"></i>
                </div>
                <div>
                  <h6 class="mb-0">ATM Franchise</h6>
                  <small class="text-muted">Secure cash solutions</small>
                </div>
              </a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item d-flex align-items-center" href="ecommerce.php">
                <div class="service-icon-circle me-3">
                  <i class="fas fa-shopping-cart text-success"></i>
                </div>
                <div>
                  <h6 class="mb-0">E-Commerce</h6>
                  <small class="text-muted">Online selling solutions</small>
                </div>
              </a></li>
              <li><a class="dropdown-item d-flex align-items-center" href="it-services.php">
                <div class="service-icon-circle me-3">
                  <i class="fas fa-laptop-code text-success"></i>
                </div>
                <div>
                  <h6 class="mb-0">IT Services</h6>
                  <small class="text-muted">Tech solutions</small>
                </div>
              </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="about.php">
              <i class="fas fa-info-circle me-2"></i>About Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="contact.php">
              <i class="fas fa-phone-alt me-2"></i>Contact
            </a>
          </li>
        </ul>
      </div>
      
      <!-- Mobile Menu (shown on small screens) -->
      <div class="mobile-menu-container">
        <button class="mobile-menu-btn" id="mobileMenuToggle">
          <i class="fas fa-bars"></i>
        </button>
        <div class="mobile-menu-dropdown" id="mobileMenuDropdown">
          <a href="index.php" class="mobile-menu-item">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
          <a href="#" class="mobile-menu-item" id="mobileServicesToggle">
            <i class="fas fa-th"></i>
            <span>Our Services</span>
            <i class="fas fa-chevron-down chevron"></i>
          </a>
          <div class="mobile-submenu" id="mobileServicesMenu">
            <a href="oil-vendor.php" class="mobile-menu-item">
              <i class="fas fa-gas-pump"></i>
              <span>Indian Oil Vendor</span>
            </a>
            <a href="tyres-trading.php" class="mobile-menu-item">
              <i class="bi bi-radioactive"></i>
              <span>Tyres Trading</span>
            </a>
            <a href="transport.php" class="mobile-menu-item">
              <i class="fas fa-truck"></i>
              <span>Transport Services</span>
            </a>
            <a href="atm-franchise.php" class="mobile-menu-item">
              <i class="fas fa-money-bill-wave"></i>
              <span>ATM Franchise</span>
            </a>
            <a href="ecommerce.php" class="mobile-menu-item">
              <i class="fas fa-shopping-cart"></i>
              <span>E-Commerce</span>
            </a>
            <a href="it-services.php" class="mobile-menu-item">
              <i class="fas fa-laptop-code"></i>
              <span>IT Services</span>
            </a>
          </div>
          <a href="about.php" class="mobile-menu-item">
            <i class="fas fa-info-circle"></i>
            <span>About Us</span>
          </a>
          <a href="contact.php" class="mobile-menu-item">
            <i class="fas fa-phone-alt"></i>
            <span>Contact</span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Bootstrap Bundle with Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Mobile Menu Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const mobileMenuToggle = document.getElementById('mobileMenuToggle');
      const mobileMenuDropdown = document.getElementById('mobileMenuDropdown');
      const mobileServicesToggle = document.getElementById('mobileServicesToggle');
      const mobileServicesMenu = document.getElementById('mobileServicesMenu');
      
      // Toggle main mobile menu
      mobileMenuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        this.classList.toggle('active');
        mobileMenuDropdown.classList.toggle('show');
        
        // Change icon between bars and times
        const icon = this.querySelector('i');
        if (icon.classList.contains('fa-bars')) {
          icon.classList.remove('fa-bars');
          icon.classList.add('fa-times');
        } else {
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
        }
      });
      
      // Toggle services submenu
      mobileServicesToggle.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        this.classList.toggle('active');
        mobileServicesMenu.classList.toggle('show');
      });
      
      // Close menu when clicking outside
      document.addEventListener('click', function(e) {
        if (!mobileMenuDropdown.contains(e.target) && e.target !== mobileMenuToggle) {
          mobileMenuDropdown.classList.remove('show');
          mobileServicesMenu.classList.remove('show');
          mobileMenuToggle.classList.remove('active');
          mobileServicesToggle.classList.remove('active');
          
          // Reset icon to bars
          const icon = mobileMenuToggle.querySelector('i');
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
        }
      });
      
      // Handle window resize
      window.addEventListener('resize', function() {
        if (window.innerWidth >= 992) {
          mobileMenuDropdown.classList.remove('show');
          mobileServicesMenu.classList.remove('show');
          mobileMenuToggle.classList.remove('active');
          mobileServicesToggle.classList.remove('active');
          
          // Reset icon to bars
          const icon = mobileMenuToggle.querySelector('i');
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
        }
      });
      
      // Smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            target.scrollIntoView({
              behavior: 'smooth'
            });
            
            // Close mobile menu after click
            mobileMenuDropdown.classList.remove('show');
            mobileMenuToggle.classList.remove('active');
            const icon = mobileMenuToggle.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
          }
        });
      });
    });
  </script>
</body>
</html>
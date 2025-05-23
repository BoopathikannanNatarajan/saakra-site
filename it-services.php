<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Services | Saakra Enterprises Pvt Ltd</title>
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
        
        /* IT Services specific styles */
        .tech-card {
            transition: transform 0.3s;
            border: 1px solid var(--primary-green);
        }
        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .tech-icon {
            font-size: 2.5rem;
            color: var(--primary-green);
            margin-bottom: 1rem;
        }
        .tech-image {
            height: 200px;
            object-fit: contain;
            padding: 20px;
        }
        .page-header {
            background-color: #f8f9fa;
            background-image: linear-gradient(to bottom, rgba(248, 249, 250, 0.9), rgba(248, 249, 250, 0.9)), url('images/it-services/it-bg.jpg');
            background-size: cover;
            background-position: center;
            padding: 5rem 0;
            margin-top: 80px;
        }
        .tech-logo {
            max-height: 60px;
            width: auto;
            transition: all 0.3s ease;
        }
        .tech-logo:hover {
            transform: scale(1.1);
        }
        .work-card {
            transition: all 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }
        .work-card:hover {
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .tab-content {
            padding: 20px;
            border-left: 1px solid #dee2e6;
            border-right: 1px solid #dee2e6;
            border-bottom: 1px solid #dee2e6;
            border-radius: 0 0 5px 5px;
        }
        .nav-tabs .nav-link {
            color: #495057;
            font-weight: 500;
        }
        .nav-tabs .nav-link.active {
            color: #28a745;
            background-color: white;
            border-color: #dee2e6 #dee2e6 #fff;
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
            .tech-logo {
                max-height: 40px;
                margin: 10px;
            }
            .page-header {
                text-align: center;
                padding: 3rem 0;
                margin-top: 70px;
            }
            .page-header img {
                margin-top: 20px;
                max-width: 100%;
            }
            .section-header {
                margin-bottom: 2rem !important;
            }
            .tech-icon {
                font-size: 2rem;
            }
            .nav-tabs .nav-item {
                width: 100%;
                margin-bottom: 5px;
            }
            .tab-content .row {
                flex-direction: column-reverse;
            }
            .tab-content img {
                margin-bottom: 20px;
            }
        }
        @media (max-width: 991.98px) {
            .tech-logo {
                max-height: 50px;
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
    <header class="page-header py-5 pt-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-green">IT Services & Solutions</h1>
                    <p class="lead">Comprehensive technology services for businesses of all sizes</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#services" class="btn btn-green btn-lg">Our Services</a>
                        <a href="#work-with-us" class="btn btn-outline-green btn-lg">Work With Us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="./images/it-services.jpg" alt="IT Services" class="img-fluid rounded shadow" style="width: 100%; max-width: 300px; transition: transform 0.5s, box-shadow 0.5s;" onmouseover="this.style.transform='rotateY(10deg) rotateX(10deg) scale(1.1)'; this.style.boxShadow='0 20px 30px rgba(0,0,0,0.2)';" onmouseout="this.style.transform='rotateY(0) rotateX(0) scale(1)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)';">
                </div>
            </div>
        </div>
    </header>

<!-- IT Services -->
<section class="py-5 bg-white" id="services">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="text-green">Our IT Services</h2>
            <p>End-to-end technology solutions tailored to your business needs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card tech-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-code tech-icon"></i>
                        <h4 class="text-green">Custom Software Development</h4>
                        <p>Bespoke applications designed to streamline your business operations and improve efficiency.</p>
                        <ul class="text-start">
                            <li><i class="fas fa-check-circle text-green me-2"></i> Web applications</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Mobile apps (iOS/Android)</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Enterprise solutions</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> API development</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card tech-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-globe tech-icon"></i>
                        <h4 class="text-green">Web Development</h4>
                        <p>Professional websites that drive engagement and convert visitors into customers.</p>
                        <ul class="text-start">
                            <li><i class="fas fa-check-circle text-green me-2"></i> Responsive design</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> E-commerce solutions</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> CMS development</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> SEO optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card tech-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cloud tech-icon"></i>
                        <h4 class="text-green">Cloud Solutions</h4>
                        <p>Scalable cloud infrastructure to support your growing business needs.</p>
                        <ul class="text-start">
                            <li><i class="fas fa-check-circle text-green me-2"></i> AWS/Azure/GCP setup</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Cloud migration</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Serverless architecture</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> DevOps automation</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card tech-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-database tech-icon"></i>
                        <h4 class="text-green">Database Management</h4>
                        <p>Optimized database solutions for performance and reliability.</p>
                        <ul class="text-start">
                            <li><i class="fas fa-check-circle text-green me-2"></i> SQL/NoSQL solutions</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Data modeling</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Performance tuning</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Backup strategies</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card tech-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-shield-alt tech-icon"></i>
                        <h4 class="text-green">Cybersecurity</h4>
                        <p>Comprehensive protection for your digital assets and infrastructure.</p>
                        <ul class="text-start">
                            <li><i class="fas fa-check-circle text-green me-2"></i> Vulnerability assessments</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Penetration testing</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Security audits</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Compliance consulting</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card tech-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-file-medical tech-icon"></i>
                        <h4 class="text-green">Medical Coding</h4>
                        <p>Accurate and compliant medical coding services for healthcare providers.</p>
                        <ul class="text-start">
                            <li><i class="fas fa-check-circle text-green me-2"></i> ICD-10-CM/PCS coding</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> CPT/HCPCS coding</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Revenue cycle management</li>
                            <li><i class="fas fa-check-circle text-green me-2"></i> Compliance auditing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Technologies We Use -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Technologies We Work With</h2>
                <p>Our expertise spans across modern and proven technologies</p>
            </div>
            
            <div class="row text-center">
                <div class="col">
                    <ul class="list-inline tech-list">
                        <li class="list-inline-item m-3"><img src="./images/html5.webp" alt="HTML5" class="tech-logo" data-bs-toggle="tooltip" title="HTML5"></li>
                        <li class="list-inline-item m-3"><img src="./images/css.png" alt="CSS3" class="tech-logo" data-bs-toggle="tooltip" title="CSS3"></li>
                        <li class="list-inline-item m-3"><img src="./images/js.png" alt="JavaScript" class="tech-logo" data-bs-toggle="tooltip" title="JavaScript"></li>
                        <li class="list-inline-item m-3"><img src="./images/react.png" alt="React" class="tech-logo" data-bs-toggle="tooltip" title="React"></li>
                        <li class="list-inline-item m-3"><img src="./images/angular.png" alt="Angular" class="tech-logo" data-bs-toggle="tooltip" title="Angular"></li>
                        <li class="list-inline-item m-3"><img src="./images/vue.png" alt="Vue" class="tech-logo" data-bs-toggle="tooltip" title="Vue.js"></li>
                        <li class="list-inline-item m-3"><img src="./images/nodejs.png" alt="Node.js" class="tech-logo" data-bs-toggle="tooltip" title="Node.js"></li>
                        <li class="list-inline-item m-3"><img src="./images/python.png" alt="Python" class="tech-logo" data-bs-toggle="tooltip" title="Python"></li>
                        <li class="list-inline-item m-3"><img src="./images/java.webp" alt="Java" class="tech-logo" data-bs-toggle="tooltip" title="Java"></li>
                        <li class="list-inline-item m-3"><img src="./images/php.jpeg" alt="PHP" class="tech-logo" data-bs-toggle="tooltip" title="PHP"></li>
                        <li class="list-inline-item m-3"><img src="./images/mysql.png" alt="MySQL" class="tech-logo" data-bs-toggle="tooltip" title="MySQL"></li>
                        <li class="list-inline-item m-3"><img src="./images/mang.png" alt="MongoDB" class="tech-logo" data-bs-toggle="tooltip" title="MongoDB"></li>
                        <li class="list-inline-item m-3"><img src="./images/aws.png" alt="AWS" class="tech-logo" data-bs-toggle="tooltip" title="Amazon Web Services"></li>
                        <li class="list-inline-item m-3"><img src="./images/azur.png" alt="Azure" class="tech-logo" data-bs-toggle="tooltip" title="Microsoft Azure"></li>
                        <li class="list-inline-item m-3"><img src="./images/cloud.png" alt="Google Cloud" class="tech-logo" data-bs-toggle="tooltip" title="Google Cloud Platform"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Work With Us -->
    <section class="py-5 bg-white" id="work-with-us">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Work With Us</h2>
                <p>Join our team of talented IT professionals</p>
            </div>
            
            <ul class="nav nav-tabs justify-content-center mb-4" id="workTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="freelance-tab" data-bs-toggle="tab" data-bs-target="#freelance" type="button" role="tab">Freelance</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="fulltime-tab" data-bs-toggle="tab" data-bs-target="#fulltime" type="button" role="tab">Full-Time</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="parttime-tab" data-bs-toggle="tab" data-bs-target="#parttime" type="button" role="tab">Part-Time</button>
                </li>
            </ul>
            
            <div class="tab-content" id="workTabsContent">
                <div class="tab-pane fade show active" id="freelance" role="tabpanel">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="text-green mb-4">Freelance Opportunities</h3>
                            <p>Join our network of freelance professionals and work on exciting projects with flexible schedules.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Choose projects that match your skills</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Competitive compensation</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Work remotely from anywhere</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Flexible working hours</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Long-term project opportunities</li>
                            </ul>
                            <a href="contact.php" class="btn btn-green">Apply as Freelancer</a>
                        </div>
                        <div class="col-lg-6">
                            <img src="./images/freelancerwork.jpg" alt="Freelance Work" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="fulltime" role="tabpanel">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="text-green mb-4">Full-Time Positions</h3>
                            <p>Become part of our core team and grow your career with challenging projects and professional development.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Competitive salary and benefits</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Health insurance coverage</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Professional development budget</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Flexible work arrangements</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Performance bonuses</li>
                            </ul>
                            <a href="contact.php" class="btn btn-green">View Open Positions</a>
                        </div>
                        <div class="col-lg-6">
                            <img src="./images/full-time.jpg" alt="Full-Time Work" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="parttime" role="tabpanel">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="text-green mb-4">Part-Time Opportunities</h3>
                            <p>Ideal for students or professionals looking to supplement their income with meaningful IT work.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Flexible 20-30 hour work weeks</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Remote work options</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Gain valuable experience</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-green me-2"></i> Potential to transition to full-time</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Supportive team environment</li>
                            </ul>
                            <a href="contact.php" class="btn btn-green">Apply for Part-Time</a>
                        </div>
                        <div class="col-lg-6">
                            <img src="./images/part-time.jpg" alt="Part-Time Work" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Openings -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Current Job Openings</h2>
                <p>Explore our available positions across different work arrangements</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card tech-card h-100">
                        <div class="card-body p-4">
                            <span class="badge bg-green mb-2">Full-Time</span>
                            <h5 class="text-green">Frontend Developer</h5>
                            <p class="text-muted"><i class="fas fa-map-marker-alt text-green me-2"></i> Remote / Bangalore</p>
                            <p>We're looking for an experienced React developer to join our product team.</p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check-circle text-green me-2"></i> 3+ years React experience</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Strong JavaScript/TypeScript</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> CSS preprocessors</li>
                            </ul>
                            <a href="contact.php" class="btn btn-outline-green w-100">Apply Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card tech-card h-100">
                        <div class="card-body p-4">
                            <span class="badge bg-primary mb-2">Freelance</span>
                            <h5 class="text-green">UI/UX Designer</h5>
                            <p class="text-muted"><i class="fas fa-map-marker-alt text-green me-2"></i> Remote</p>
                            <p>Contract position for redesigning our client portal and mobile app.</p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check-circle text-green me-2"></i> Portfolio required</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Figma/Sketch expertise</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> 6-month project</li>
                            </ul>
                            <a href="contact.php" class="btn btn-outline-green w-100">Apply Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card tech-card h-100">
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Part-Time</span>
                            <h5 class="text-green">Python Developer</h5>
                            <p class="text-muted"><i class="fas fa-map-marker-alt text-green me-2"></i> Remote / Hyderabad</p>
                            <p>Evening/weekend position for API development and maintenance.</p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check-circle text-green me-2"></i> Flask/Django experience</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> REST API design</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> 20 hrs/week</li>
                            </ul>
                            <a href="contact.php" class="btn btn-outline-green w-100">Apply Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card tech-card h-100">
                        <div class="card-body p-4">
                            <span class="badge bg-green mb-2">Full-Time</span>
                            <h5 class="text-green">DevOps Engineer</h5>
                            <p class="text-muted"><i class="fas fa-map-marker-alt text-green me-2"></i> Mumbai</p>
                            <p>Join our infrastructure team to build and maintain CI/CD pipelines.</p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check-circle text-green me-2"></i> AWS/Azure experience</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Kubernetes/Docker</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Terraform/Ansible</li>
                            </ul>
                            <a href="contact.php" class="btn btn-outline-green w-100">Apply Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card tech-card h-100">
                        <div class="card-body p-4">
                            <span class="badge bg-primary mb-2">Freelance</span>
                            <h5 class="text-green">Technical Writer</h5>
                            <p class="text-muted"><i class="fas fa-map-marker-alt text-green me-2"></i> Remote</p>
                            <p>Create documentation for our APIs and developer tools.</p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check-circle text-green me-2"></i> Technical background</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Clear writing samples</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Markdown/AsciiDoc</li>
                            </ul>
                            <a href="contact.php" class="btn btn-outline-green w-100">Apply Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card tech-card h-100">
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Part-Time</span>
                            <h5 class="text-green">QA Tester</h5>
                            <p class="text-muted"><i class="fas fa-map-marker-alt text-green me-2"></i> Remote</p>
                            <p>Manual testing position for our web applications.</p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check-circle text-green me-2"></i> Attention to detail</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> Bug tracking systems</li>
                                <li><i class="fas fa-check-circle text-green me-2"></i> 15-25 hrs/week</li>
                            </ul>
                            <a href="contact.php" class="btn btn-outline-green w-100">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <p class="lead">Don't see your perfect role? We're always looking for talented people.</p>
                <a href="contact.php" class="btn btn-green btn-lg">Send Us Your Resume</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-green text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Ready to Transform Your Business with Technology?</h2>
                    <p class="lead mb-lg-0">Let our IT experts help you build the perfect digital solution.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="contact.php" class="btn btn-light btn-lg">Get Started Today</a>
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
            
            // Add animation to navbar items after load
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach((item, index) => {
                item.style.animation = `fadeIn 0.5s ease forwards ${index * 0.1 + 0.5}s`;
                item.style.opacity = '0';
            });

            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
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
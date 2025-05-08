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
    <style>
        :root { 
            --primary-green: #00652d;
      --secondary-green: #83b744;
      --green-light: #e8f5e9;
            --animation-duration: 0.5s;
        }
        
      
        /* Animation classes */
        .fade-in {
            animation: fadeIn 1s ease forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }

        /* Contact Page Styles */
        /* Contact Cards */
        .contact-card {
            transition: transform 0.3s;
            border: 1px solid var(--primary-green);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .contact-icon {
            font-size: 2rem;
            color: #28a745;
            margin-bottom: 1rem;
        }
        
        .page-header {
            background-color: #f8f9fa;
            padding: 3rem 0;
            text-align: center;
        }
        
        .map-container {
            height: 300px;
            width: 100%;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .form-control:focus {
            border-color:var(--primary-green);
            box-shadow: 0 0 0 0.25rem rgba(40, 167, 69, 0.25);
        }
        
        .contact-method {
            transition: all 0.3s ease;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .contact-method:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .bg-dark-green {
            background-color: var(--primary-green);
        }
        
        .bg-light-green {
            background-color: #e8f5e9;
        }
        
        .btn.btn-green {
            background-color: var(--primary-green);
            color: white;
        }
        .btn.btn-green:hover { 
            background-color: var(--secondary-green); 
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .btn.btn-outline-green {
            border-color:var(--primary-green);
            color:var(--primary-green);
        }
        
        .btn.btn-outline-green:hover {
            background-color:var(--primary-green);
            color: white;
        }
        
        .text-green {
            color:var(--primary-green) ;
        }
        
        /* Responsive adjustments */
    
        @media (max-width: 768px) {
            .page-header {
                padding: 2rem 0;
            }
            
            .contact-icon {
                font-size: 1.5rem;
            }
            
            .section-header h2 {
                font-size: 1.8rem;
            }
            
            .navbar-brand .company-name {
                font-size: 1rem;
            }
            
            .btn-lg {
                padding: 0.5rem 1rem;
                font-size: 1rem;
            }
            
            .contact-method {
                margin-bottom: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .page-header {
                padding: 1.5rem 0;
            }
            
            .contact-method {
                padding: 1rem;
            }
            
            .accordion-button {
                font-size: 0.9rem;
            }
            
            .footer .col-lg-4, 
            .footer .col-lg-2 {
                margin-bottom: 1.5rem;
            }
            
            .map-container {
                height: 250px;
            }
            
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <?php include "header.php"; ?>

    <!-- Contact Form Section -->
    <section class="py-5 bg-white pt-5 mt-5" id="contact-form">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h2 class="text-green">Get In Touch</h2>
      <p>Fill out the form below and our team will get back to you within 24 hours</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card contact-card">
          <div class="card-body p-4">
            <form id="contactForm" action="send_mail.php" method="POST" >
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="name" class="form-label">Your Name *</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="company" class="form-label">Company Name</label>
                  <input type="text" class="form-control" id="company" name="company">
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address *</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone">
              </div>
              <div class="mb-3">
                <label for="service" class="form-label">Service Interested In</label>
                <select class="form-select" id="service" name="service">
                  <option value="">Select a service</option>
                  <option value="oil">Indian Oil Vendor</option>
                  <option value="tyres">Tyres Trading</option>
                  <option value="atm">ATM Franchise</option>
                  <option value="transport">Transport</option>
                  <option value="ecommerce">E-Commerce Services</option>
                  <option value="it">IT Services</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="message" class="form-label">Your Message *</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
              </div>
              <button type="submit" class="btn btn-green w-100">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <!-- Contact Methods -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Contact Methods</h2>
                <p>Choose your preferred way to get in touch with us</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card contact-method h-100 text-center p-3">
                        <i class="fas fa-phone-alt contact-icon"></i>
                        <h4 class="text-green">Phone Support</h4>
                        <p>Speak directly with our customer support team</p>
                        <div class="mt-3">
                            <a href="tel:+919876543210" class="btn btn-outline-green">
                                <i class="fas fa-phone-alt me-2"></i> +91 9944111597
                            </a>
                        </div>
                        <p class="small mt-3 mb-0">Monday-Friday: 9AM-6PM IST</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card contact-method h-100 text-center p-3">
                        <i class="fas fa-envelope contact-icon"></i>
                        <h4 class="text-green">Email Us</h4>
                        <p>Send us an email and we'll respond within 24 hours</p>
                        <div class="mt-3">
                            <a href="mailto:info@saakraenterprises.com" class="btn btn-outline-green">
                                <i class="fas fa-envelope me-2"></i> saakraenterprisespvtltd@gmail.com
                            </a>
                        </div>
                        <p class="small mt-3 mb-0">General inquiries and support</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card contact-method h-100 text-center p-3">
                        <i class="fas fa-comment-dots contact-icon"></i>
                        <h4 class="text-green">Live Chat</h4>
                        <p>Chat with our support team in real-time</p>
                        <div class="mt-3">
                            <button class="btn btn-outline-green" data-bs-toggle="modal" data-bs-target="#chatModal">
                                <i class="fas fa-comment me-2"></i> Start Chat
                            </button>
                        </div>
                        <p class="small mt-3 mb-0">Available 9AM-5PM IST</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Locations -->
    <section class="py-5 bg-white" id="locations">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Our Offices</h2>
                <p>Visit us at one of our locations across India</p>
            </div>
            
            <div class="row g-4 justify-content-center">
    <div class="col-md-4 text-center">
        <div class="card h-100 contact-card">
            <div class="card-body p-3">
                <h4 class="text-green">Sankari Office</h4>
                <div class="mb-3">
                    <i class="fas fa-map-marker-alt text-green me-2"></i>
                    <span>New Eddappadi Main Road Sankari,Salem,Pincode-637301</span>
                </div>
                <div class="mb-3">
                    <i class="fas fa-phone text-green me-2"></i>
                    <span>+91 9944111597</span>
                </div>
                <div class="mb-3">
                    <i class="fas fa-envelope text-green me-2"></i>
                    <span>saakraenterprisespvtltd@gmail.com</span>
                </div>
                <div class="mt-4">
                    <a href="https://maps.google.com" class="btn btn-outline-green w-100">
                        <i class="fas fa-directions me-2"></i> Get Directions
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
                
                
                
                
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-0 bg-light">
        <div class="container-fluid p-0">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.715247748038!2d72.8532143153773!3d19.03307065803745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf3d6d5e1e9d%3A0x6b4e5a7e5b3e5c1d!2sBusiness%20Park%2C%20Andheri%20East%2C%20Mumbai%2C%20Maharashtra%20400069!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light-green">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-green">Frequently Asked Questions</h2>
                <p>Find answers to common questions about contacting us</p>
            </div>
            
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item mb-3 border-0 rounded overflow-hidden">
                    <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed bg-white text-green" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            What are your business hours?
                        </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white">
                            Our main office is open Monday through Friday from 9:00 AM to 6:00 PM IST. Our customer support team is available via phone and email during these hours. Live chat is available from 9:00 AM to 5:00 PM IST.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item mb-3 border-0 rounded overflow-hidden">
                    <h3 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed bg-white text-green" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            How quickly can I expect a response to my inquiry?
                        </button>
                    </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white">
                            We strive to respond to all inquiries within 24 hours during business days. For urgent matters, we recommend calling our support line for immediate assistance.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item mb-3 border-0 rounded overflow-hidden">
                    <h3 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed bg-white text-green" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            Do I need to schedule an appointment to visit your office?
                        </button>
                    </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white">
                            While walk-ins are welcome, we recommend scheduling an appointment to ensure the appropriate team member is available to assist you. You can call ahead or use our online appointment scheduling system.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item mb-3 border-0 rounded overflow-hidden">
                    <h3 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed bg-white text-green" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                            What information should I include in my support request?
                        </button>
                    </h3>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white">
                            Please include your contact information, the nature of your inquiry, any relevant account or order numbers, and as much detail as possible about your question or issue. This helps us provide you with the most accurate and timely response.
                        </div>
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

    <!-- Chat Modal -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-green text-white">
                    <h5 class="modal-title">Live Chat Support</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="chat-container p-3" style="height: 300px; overflow-y: auto; background-color: #f8f9fa; border-radius: 5px;">
                        <div class="text-center text-muted my-5">
                            <i class="fas fa-comment-dots fa-3x mb-3"></i>
                            <p>Our support team will be with you shortly</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type your message...">
                            <button class="btn btn-green" type="button">Send</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <small class="text-muted">Live chat available Monday-Friday, 9AM-5PM IST</small>
                </div>
            </div>
        </div>
    </div>

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

 
    <script>
      

        // Contact form validation
        // document.getElementById('contactForm').addEventListener('submit', function(e) {
        //     e.preventDefault();
            
            // Get form elements
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');
            let isValid = true;
            
            // Reset error states
            name.classList.remove('is-invalid');
            email.classList.remove('is-invalid');
            message.classList.remove('is-invalid');
            
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
            
            // Validate message
            if (message.value.trim() === '') {
                message.classList.add('is-invalid');
                isValid = false;
            }
            
            // If form is valid, show success message
            if (isValid) {
                alert('Thank you for your message! We will get back to you within 24 hours.');
                this.reset();
            }
        ;
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>
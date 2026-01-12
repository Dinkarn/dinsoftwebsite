<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinsoft Solutions - Professional Software Development</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Navigation */
        nav {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .nav-links a:hover {
            opacity: 0.8;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 8rem 2rem;
            text-align: center;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -200px;
            right: -100px;
        }

        .hero::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -150px;
            left: -100px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 0.9rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
        }

        .btn-primary {
            background: white;
            color: #667eea;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: #667eea;
        }

        /* Features Section */
        .features {
            padding: 5rem 2rem;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.2);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
            color: #667eea;
        }

        .feature-card p {
            color: #666;
            line-height: 1.8;
        }

        /* Services Section */
        .services {
            padding: 5rem 2rem;
            background: white;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .service-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2.5rem;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: scale(1.05);
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .service-card p {
            opacity: 0.95;
            line-height: 1.8;
        }

        /* About Section */
        .about {
            padding: 5rem 2rem;
            background: #f8f9fa;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .about-text p {
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .about-image {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 400px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 2rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta {
            background: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        .cta h2 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .cta p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 2rem;
        }

        /* Contact Section */
        .contact {
            background: #f8f9fa;
            padding: 5rem 2rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .contact-item {
            display: flex;
            gap: 1.5rem;
        }

        .contact-icon {
            font-size: 2rem;
            color: #667eea;
            min-width: 50px;
        }

        .contact-item h3 {
            margin-bottom: 0.5rem;
            color: #333;
        }

        .contact-item p {
            color: #666;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
            font-size: 1rem;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        /* Footer */
        footer {
            background: #222;
            color: white;
            padding: 3rem 2rem 1rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            color: #aaa;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 2rem;
            color: #aaa;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .section-title {
                font-size: 2rem;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .about-image {
                height: 300px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 4rem 1rem;
                min-height: 60vh;
            }
        }

        /* Scroll Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="logo">💻 Dinsoft Solutions</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <button class="mobile-menu-btn">☰</button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Transform Your Business with Digital Solutions</h1>
            <p>Innovative software development and technology solutions for modern enterprises</p>
            <div class="hero-buttons">
                <button class="btn btn-primary">Get Started</button>
                <button class="btn btn-secondary">Learn More</button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title fade-in">Why Choose Dinsoft Solutions?</h2>
            <div class="features-grid">
                <div class="feature-card fade-in">
                    <div class="feature-icon">⚡</div>
                    <h3>High Performance</h3>
                    <p>We deliver fast, reliable solutions that scale with your business growth and ensure optimal performance.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">🔒</div>
                    <h3>Secure & Reliable</h3>
                    <p>Enterprise-grade security and reliability to protect your business and customer data with confidence.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">👥</div>
                    <h3>Expert Team</h3>
                    <p>Our experienced developers and consultants bring years of expertise to every project we undertake.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">💡</div>
                    <h3>Innovation First</h3>
                    <p>We stay ahead of the curve with cutting-edge technologies and best practices in software development.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">📱</div>
                    <h3>Mobile Ready</h3>
                    <p>Responsive and mobile-first design ensures your solutions work perfectly on all devices.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">🚀</div>
                    <h3>Fast Deployment</h3>
                    <p>Quick turnaround times without compromising quality or thoroughness of our work.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title fade-in">Our Services</h2>
            <div class="services-grid">
                <div class="service-card fade-in">
                    <h3>🌐 Web Development</h3>
                    <p>Custom web applications and responsive websites tailored to your business needs using modern frameworks and technologies.</p>
                </div>
                <div class="service-card fade-in">
                    <h3>📱 Mobile Apps</h3>
                    <p>Native and cross-platform mobile applications that deliver exceptional user experiences on iOS and Android.</p>
                </div>
                <div class="service-card fade-in">
                    <h3>☁️ Cloud Solutions</h3>
                    <p>Scalable cloud infrastructure and migration services to optimize your operations and reduce costs.</p>
                </div>
                <div class="service-card fade-in">
                    <h3>🔧 Consulting</h3>
                    <p>Expert technical consultation and strategic guidance to help you make informed technology decisions.</p>
                </div>
                <div class="service-card fade-in">
                    <h3>🛠️ Maintenance</h3>
                    <p>Ongoing support, maintenance, and updates to keep your systems running smoothly and securely.</p>
                </div>
                <div class="service-card fade-in">
                    <h3>📊 Data Analytics</h3>
                    <p>Advanced analytics and business intelligence solutions to drive data-informed decision making.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat fade-in">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Projects Completed</div>
                </div>
                <div class="stat fade-in">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Happy Clients</div>
                </div>
                <div class="stat fade-in">
                    <div class="stat-number">8+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat fade-in">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Customer Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text fade-in">
                    <h2>About Dinsoft Solutions</h2>
                    <p>
                        At Dinsoft Solutions, we are passionate about delivering exceptional software solutions that drive business growth and innovation. With a team of skilled developers, designers, and consultants, we've been helping businesses transform their digital presence since 2016.
                    </p>
                    <p>
                        We combine cutting-edge technology with strategic thinking to create solutions that not only meet your current needs but anticipate your future challenges. Our commitment to quality, security, and customer satisfaction sets us apart in the competitive software industry.
                    </p>
                    <p>
                        Whether you're a startup looking to launch your first product or an enterprise seeking to optimize existing systems, we have the expertise and dedication to make your vision a reality.
                    </p>
                </div>
                <div class="about-image fade-in">
                    🏢
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Start Your Digital Transformation?</h2>
            <p>Get in touch with our team today and discover how we can help your business thrive</p>
            <button class="btn btn-primary">Contact Us Now</button>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title fade-in">Get in Touch</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item fade-in">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h3>Address</h3>
                            <p>123 Tech Street<br>Innovation City, IC 12345<br>Your Country</p>
                        </div>
                    </div>
                    <div class="contact-item fade-in">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h3>Phone</h3>
                            <p>+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                        </div>
                    </div>
                    <div class="contact-item fade-in">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h3>Email</h3>
                            <p>hello@dinsoftsolutions.com<br>support@dinsoftsolutions.com</p>
                        </div>
                    </div>
                    <div class="contact-item fade-in">
                        <div class="contact-icon">🕐</div>
                        <div>
                            <h3>Business Hours</h3>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p style="color: #aaa; text-align: left;">Dinsoft Solutions is a leading software development company dedicated to delivering innovative and reliable technology solutions.</p>
            </div>
            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="#services">Web Development</a></li>
                    <li><a href="#services">Mobile Apps</a></li>
                    <li><a href="#services">Cloud Solutions</a></li>
                    <li><a href="#services">Consulting</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Dinsoft Solutions. All rights reserved. | Designed & Developed with ❤️</p>
        </div>
    </footer>

    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Fade-in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            
            // Show success message
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });

        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function () {
            const navLinks = document.querySelector('.nav-links');
            navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
        });
    </script>
</body>
</html>

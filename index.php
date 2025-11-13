<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://public-frontend-cos.metadl.com/mgx/img/favicon.png" type="image/png">
    <title><?php echo $personal_info['name']; ?> - Portfolio</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Background Images -->
    <div class="bg-images">
        <div class="bg-image bg-1"></div>
        <div class="bg-image bg-2"></div>
        <div class="bg-image bg-3"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo"><?php echo $personal_info['name']; ?></div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#experience" class="nav-link">Educational Background</a></li>
                <li><a href="#education" class="nav-link">Project Completed</a></li>
                <li><a href="#certificates" class="nav-link">Certificates</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Hi, I'm <span class="highlight"><?php echo $personal_info['name']; ?></span></h1>
                    <h2 class="hero-subtitle"><?php echo $personal_info['title']; ?></h2>
                    <p class="hero-description">Crafting exceptional digital experiences with modern technologies</p>
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-primary">Get In Touch</a>
                        <a href="#certificates" class="btn btn-secondary">View Certificates</a>
                    </div>
                    <div class="social-links">
                        <a href="<?php echo $personal_info['linkedin']; ?>" target="_blank" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        <a href="<?php echo $personal_info['github']; ?>" target="_blank" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="mailto:<?php echo $personal_info['email']; ?>" class="social-icon"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-wrapper">
                        <img src="<?php echo $personal_info['profile_image']; ?>" alt="<?php echo $personal_info['name']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <p class="about-text"><?php echo $about; ?></p>
                <div class="about-info">
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo $personal_info['email']; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <span><?php echo $personal_info['phone']; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo $personal_info['location']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">Skills & Expertise</h2>
            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                <div class="skill-item">
                    <div class="skill-header">
                        <span class="skill-name"><?php echo $skill['name']; ?></span>
                        <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" data-progress="<?php echo $skill['level']; ?>"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience">
        <div class="container">
            <h2 class="section-title">Educational Background</h2>
            <div class="timeline">
                <?php foreach ($experience as $index => $job): ?>
                <div class="timeline-item <?php echo $index % 2 == 0 ? 'left' : 'right'; ?>">
                    <div class="timeline-content">
                        <div class="timeline-date"><?php echo $job['period']; ?></div>
                        <h3 class="timeline-title"><?php echo $job['title']; ?></h3>
                        <h4 class="timeline-company"><?php echo $job['company']; ?></h4>
                        <p class="timeline-description"><?php echo $job['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Education Section (Projects) -->
    <section id="education" class="education">
        <div class="container">
            <h2 class="section-title">Project Completed</h2>
            <div class="education-grid">
                <?php foreach ($education as $edu): ?>
                <div class="education-card">
                    <div class="education-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="education-degree"><?php echo $edu['degree']; ?></h3>
                    <h4 class="education-institution"><?php echo $edu['institution']; ?></h4>
                    <p class="education-period"><?php echo $edu['period']; ?></p>
                    <?php if (!empty($edu['link'])): ?>
                    <a href="<?php echo $edu['link']; ?>" target="_blank" class="project-link">
                        <i class="fas fa-external-link-alt"></i> <?php echo $edu['link_text']; ?>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($edu['description'])): ?>
                    <p class="education-description"><?php echo $edu['description']; ?></p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="certificates">
        <div class="container">
            <h2 class="section-title">Certificates & Achievements</h2>
            <p class="certificates-note">Click on any certificate to view or download the PDF</p>
            <div class="certificates-grid">
                <?php foreach ($certificates as $cert): ?>
                <a href="<?php echo $cert['pdf']; ?>" target="_blank" class="certificate-card">
                    <div class="certificate-image">
                        <img src="<?php echo $cert['image']; ?>" alt="<?php echo $cert['name']; ?>">
                        <div class="certificate-overlay">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                    </div>
                    <div class="certificate-content">
                        <h3 class="certificate-name"><?php echo $cert['name']; ?></h3>
                        <p class="certificate-issuer"><i class="fas fa-award"></i> <?php echo $cert['issuer']; ?></p>
                        <p class="certificate-date"><i class="far fa-calendar"></i> <?php echo $cert['date']; ?></p>
                        <p class="certificate-pdf"><i class="fas fa-file-pdf"></i> View PDF Certificate</p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Let's Connect</h3>
                    <p>I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <a href="mailto:<?php echo $personal_info['email']; ?>"><?php echo $personal_info['email']; ?></a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Phone</h4>
                                <a href="tel:<?php echo $personal_info['phone']; ?>"><?php echo $personal_info['phone']; ?></a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Location</h4>
                                <p><?php echo $personal_info['location']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $personal_info['name']; ?>. All rights reserved.</p>
            <div class="footer-social">
                <a href="<?php echo $personal_info['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="<?php echo $personal_info['github']; ?>" target="_blank"><i class="fab fa-github"></i></a>
                <a href="mailto:<?php echo $personal_info['email']; ?>"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </footer>

    <script type="module" src="./script.js"></script>
</body>

</html>
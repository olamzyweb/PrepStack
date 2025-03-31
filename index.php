<?php session_start();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PrepStack - Ace Your Exams with Real Past Questions</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Access a wide range of past questions and study materials to ace your exams. PrepStack offers secure Paystack payment integration for easy downloads. Start preparing smarter today Discover and purchase past question and notes">
<meta name="keywords" content="Past Questions,exam Preparation,prepstack, Educational Resources,Study Materials,notes,pdf, Past Questions,Download Questions,Online Learning,Paystack Integration,Exam Success,Study Tools,Education,Exam Practice,Student Portal,Prepare for Exams,Academic Resources">
<meta name="author" content="Prepstack Olamzyweb Olanrewaju">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.prepstack.olamzyweb.com.ng">
    
    <meta property="og:title" content="PrepStack">
    <meta property="og:description" content="Access a wide range of past questions and study materials to ace your exams. Download past questions easy and affordable.">
    <meta property="og:image" content="https://prepstack.olamzyweb.com.ng/images/bg.jpg">
    <meta property="og:url" content="https://prepstack.com.ng">
    <meta property="og:type" content="website">
</head>
<body>
    <style>

/* General Styles */
body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  background: #FFFFFF;
  color: #333333;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
}


/* Navbar Styles */
.navbar {
  background: #FFFFFF;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  padding: 15px 0;
  position: sticky;
  top: 0;
  z-index: 1000;
}

.containerr {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar-brand a {
  font-size: 1.5rem;
  font-weight: 700;
  color: #333333;
  text-decoration: none;
}

.navbar-menu {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.navbar-menu li {
  margin-left: 30px;
}

.navbar-menu li a {
  font-size: 1rem;
  font-weight: 600;
  color: #333333;
  text-decoration: none;
  transition: color 0.3s ease;
}

.navbar-menu li a:hover {
  color: #FFC107;
}

#user-name a {
  color: #FFC107; /* Highlight the user's name */
}

/* Mobile Menu Toggle */
.navbar-toggle {
  display: none;
  flex-direction: column;
  cursor: pointer;
}

.navbar-toggle .bar {
  width: 25px;
  height: 3px;
  background: #333333;
  margin: 4px 0;
  transition: all 0.3s ease;
}

/* Responsive Navbar */
@media (max-width: 768px) {
  .navbar-menu {
    display: none;
    flex-direction: column;
    width: 100%;
    background: #FFFFFF;
    position: absolute;
    top: 60px;
    left: 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .navbar-menu.active {
    display: flex;
  }

  .navbar-menu li {
    margin: 10px 0;
    text-align: center;
  }

  .navbar-toggle {
    display: flex;
  }
}

h1, h2, h3 {
  font-weight: 700;
  color: #333333;
}

p {
  font-weight: 400;
  line-height: 1.6;
  color: #555555;
}

/* Hero Section */
.hero {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 100px 0;
  background: url('images/hero3.jpg') no-repeat center center/cover; /* Add your image here */
  position: relative;
  color: #333333;
}

.hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.7); /* Light overlay for better text readability */
}

.hero-content {
  position: relative;
  z-index: 1;
  max-width: 600px;
  text-align: center;
}

.hero h1 {
  font-size: 3.5rem;
  margin-bottom: 20px;
  color: #333333;
}

.hero p {
  font-size: 1.2rem;
  margin-bottom: 30px;
  color: #555555;
}

.cta-button {
  background: #FFC107;
  color: #333333;
  padding: 15px 30px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.3s ease;
}

.cta-button:hover {
  background: linear-gradient(45deg, #FFC107, #FFD700);
}

/* How It Works Section */
.how-it-works {
  padding: 80px 0;
  text-align: center;
  background: #F5F5F5;
}

.how-it-works h2 {
  font-size: 2.5rem;
  margin-bottom: 50px;
  color: #333333;
}

.steps {
  display: flex;
  justify-content: space-between;
  gap: 30px;
  flex-wrap: wrap; /* Allow cards to wrap on smaller screens */
}

.step {
  flex: 1 1 100%; /* Full width on mobile */
  padding: 20px;
  background: #FFFFFF;
  border-radius: 20px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
  margin-bottom: 20px; /* Add spacing between stacked cards */
}

.step:hover {
  transform: translateY(-10px);
}

.step i {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #FFC107;
}

/* Why Choose Us Section */
.why-choose-us {
  padding: 80px 0;
  text-align: center;
  background: #FFFFFF;
}

.benefits {
  display: flex;
  justify-content: space-between;
  gap: 30px;
  flex-wrap: wrap; /* Allow cards to wrap on smaller screens */
}

.benefit {
  flex: 1 1 100%; /* Full width on mobile */
  padding: 20px;
  background: #FFFFFF;
  border-radius: 20px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px; /* Add spacing between stacked cards */
}

.benefit i {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #FFC107;
}

/* Testimonials Section */
.testimonials {
  padding: 80px 0;
  text-align: center;
  background: #F5F5F5;
}

.testimonial-slider {
  display: flex;
  gap: 20px;
  overflow-x: auto;
  padding: 20px 0;
}

.testimonial-card {
  flex: 0 0 300px;
  padding: 20px;
  background: #FFFFFF;
  border-radius: 20px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

/* Call to Action Section */
.cta {
  padding: 80px 0;
  text-align: center;
  background: linear-gradient(135deg, #FFC107, #FFD700);
}

.cta h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  color: #333333;
}

.cta p {
  color: #555555;
}

.cta .cta-button {
  background: #FFFFFF;
  color: #333333;
  border: 2px solid #FFC107;
}

.cta .cta-button:hover {
  background: #FFC107;
  color: #FFFFFF;
}

/* Footer */
footer {
  padding: 20px 0;
  text-align: center;
  background: #333333;
  color: #FFFFFF;
}

.social-links a {
  color: #FFFFFF;
  margin: 0 10px;
  font-size: 1.2rem;
  transition: color 0.3s ease;
}

.social-links a:hover {
  color: #FFC107;
}

/* Media Queries for Mobile Responsiveness */
@media (max-width: 768px) {
  .hero h1 {
    font-size: 2.5rem; /* Smaller font size for mobile */
  }

  .hero p {
    font-size: 1rem; /* Smaller font size for mobile */
  }

  .steps, .benefits {
    flex-direction: column; /* Stack cards vertically */
  }

  .step, .benefit {
    flex: 1 1 100%; /* Full width on mobile */
    margin-bottom: 20px; /* Add spacing between stacked cards */
  }

  .testimonial-slider {
    flex-wrap: nowrap; /* Keep testimonial cards in a horizontal scroll */
  }

  .testimonial-card {
    flex: 0 0 80%; /* Wider cards for better readability on mobile */
  }
}




/* Course Catalogue Section */
.course-catalogue {
  padding: 80px 0;
  text-align: center;
  background: #FFFFFF;
}

.course-catalogue h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  color: #333333;
}

.course-catalogue p {
  font-size: 1.2rem;
  margin-bottom: 50px;
  color: #555555;
}

.course-grid {
  display: flex;
  justify-content: space-between;
  gap: 30px;
  flex-wrap: wrap; /* Allow cards to wrap on smaller screens */
}

.course-card {
  flex: 1 1 calc(25% - 30px); /* 4 cards per row on desktop */
  background: #FFFFFF;
  border-radius: 20px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease;
}

.course-card:hover {
  transform: translateY(-10px);
}

.course-image img {
  width: 100%;
  height: 200px;
  object-fit: cover; /* Ensure the image covers the area */
}

.course-details {
  padding: 20px;
  text-align: left;
}

.course-details h3 {
  font-size: 1.5rem;
  margin-bottom: 10px;
  color: #333333;
}

.course-details p {
  font-size: 1rem;
  margin-bottom: 20px;
  color: #555555;
}

.view-details {
  display: inline-block;
  background: #FFC107;
  color: #333333;
  padding: 10px 20px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.3s ease;
}

.view-details:hover {
  background: linear-gradient(45deg, #FFC107, #FFD700);
}

/* Responsive Design for Course Catalogue */
@media (max-width: 1200px) {
  .course-card {
    flex: 1 1 calc(33.33% - 30px); /* 3 cards per row on tablets */
  }
}

@media (max-width: 768px) {
  .course-card {
    flex: 1 1 calc(50% - 30px); /* 2 cards per row on smaller tablets */
  }
}

@media (max-width: 480px) {
  .course-card {
    flex: 1 1 100%; /* 1 card per row on mobile */
  }
}


/* Contact Section */
.contact {
  padding: 80px 0;
  background: #FFFFFF;
  text-align: center;
}

.contact h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  color: #333333;
}

.contact p {
  font-size: 1.2rem;
  margin-bottom: 50px;
  color: #555555;
}

.contact-content {
  display: flex;
  justify-content: space-between;
  gap: 50px;
  text-align: left;
}

.contact-form {
  flex: 1;
}

.contact-form .form-group {
  margin-bottom: 20px;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 15px;
  border: 1px solid #DDDDDD;
  border-radius: 10px;
  font-size: 1rem;
  color: #333333;
  background: #F5F5F5;
  transition: border-color 0.3s ease;
}

.contact-form input:focus,
.contact-form textarea:focus {
  border-color: #FFC107;
  outline: none;
}

.contact-form textarea {
  resize: vertical;
}

.submit-button {
  background: #FFC107;
  color: #333333;
  padding: 15px 30px;
  border: none;
  border-radius: 50px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s ease;
}

.submit-button:hover {
  background: linear-gradient(45deg, #FFC107, #FFD700);
}

.contact-info {
  flex: 1;
  background: #F5F5F5;
  padding: 30px;
  border-radius: 20px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.contact-info h3 {
  font-size: 1.5rem;
  margin-bottom: 20px;
  color: #333333;
}

.contact-info ul {
  list-style: none;
  padding: 0;
}

.contact-info ul li {
  margin-bottom: 15px;
  font-size: 1rem;
  color: #555555;
}

.contact-info ul li i {
  margin-right: 10px;
  color: #FFC107;
}

.contact-info .social-links {
  display: flex;
  gap: 15px;
  margin-top: 20px;
}

.contact-info .social-links a {
  color: #333333;
  font-size: 1.2rem;
  transition: color 0.3s ease;
}

.contact-info .social-links a:hover {
  color: #FFC107;
}

/* Responsive Design for Contact Section */
@media (max-width: 768px) {
  .contact-content {
    flex-direction: column;
  }

  .contact-form,
  .contact-info {
    flex: 1 1 100%;
    width: 90%;
  }
}


    </style>

    <!-- Navbar -->
<nav class="navbar">
  <div class="containerr">
    <div class="navbar-brand">
      <a href="#home">PrepStack</a>
    </div>
    <div class="navbar-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    <ul class="navbar-menu">
      <li><a href="#index.php">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="catalog.php">Catalogue</a></li>
      <li><a href="register.html" id="register-link">Register</a></li>
      <li id="user-name"><a href="#profile"><?php echo @$_SESSION['username'];?></a></li> <!-- Replace "John Doe" with dynamic user name -->
    </ul>
  </div>
</nav>
 <!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <h1>Ace Your Exams with PrepStack!</h1>
      <p>Access verified, up-to-date past questions and excel in your exams.</p>
      <a href="#course" class="cta-button">Get Started</a>
    </div>
  </div>
</section>

  <!-- How It Works Section -->
  <section class="how-it-works">
    <div class="container">
      <h2>How It Works</h2>
      <div class="steps">
        <div class="step">
          <i class="fas fa-search"></i>
          <h3>Search</h3>
          <p>Find past questions by subject, year, or exam type.</p>
        </div>
        <div class="step">
          <i class="fas fa-download"></i>
          <h3>Download</h3>
          <p>Download verified materials instantly.</p>
        </div>
        <div class="step">
          <i class="fas fa-chart-line"></i>
          <h3>Excel</h3>
          <p>Practice and ace your exams with confidence.</p>
        </div>
      </div>
    </div>
  </section>




  <!-- Course Catalogue Section -->
<section id="course" class="course-catalogue">
  <div class="container">
    <h2>Explore Our Catalogue</h2>
    <p>Browse through our collection of past questions and study materials.</p>
    <div class="course-grid">
      <!-- Course Card 1 -->
      <div class="course-card">
        <!-- <div class="course-image">
          <img src="https://via.placeholder.com/300x200" alt="Mathematics Course">
        </div> -->
        <div class="course-details">
          <h3>Mathematics</h3>
          <p>Master key concepts in algebra, geometry, and calculus with our comprehensive past questions.</p>
          <a href="catalog.php" class="view-details">View Details</a>
        </div>
      </div>
      <!-- Course Card 2 -->
      <div class="course-card">
        <!-- <div class="course-image">
          <img src="https://via.placeholder.com/300x200" alt="Physics Course">
        </div> -->
        <div class="course-details">
          <h3>Physics</h3>
          <p>Understand the laws of motion, energy, and electricity with our curated past questions.</p>
          <a href="catalog.php" class="view-details">View Details</a>
        </div>
      </div>
      <!-- Course Card 3 -->
      <div class="course-card">
        <!-- <div class="course-image">
          <img src="https://via.placeholder.com/300x200" alt="Chemistry Course">
        </div> -->
        <div class="course-details">
          <h3>Chemistry</h3>
          <p>Learn about chemical reactions, atomic structure, and more with our verified past questions.</p>
          <a href="catalog.php" class="view-details">View Details</a>
        </div>
      </div>
      <!-- Course Card 4 -->
      <div class="course-card">
        <!-- <div class="course-image">
          <img src="https://via.placeholder.com/300x200" alt="Biology Course">
        </div> -->
        <div class="course-details">
          <h3>Biology</h3>
          <p>Explore topics in genetics, ecology, and human anatomy with our up-to-date past questions.</p>
          <a href="catalog.php" class="view-details">View Details</a>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Why Choose Us Section -->
  <section id="about" class="why-choose-us">
    <div class="container">
      <h2>Why Choose Us?</h2>
      <div class="benefits">
        <div class="benefit">
          <i class="fas fa-check-circle"></i>
          <h3>Verified Questions</h3>
          <p>We ensure all materials are accurate and up-to-date.</p>
        </div>
        <div class="benefit">
          <i class="fas fa-clock"></i>
          <h3>Instant Access</h3>
          <p>Download past questions anytime, anywhere.</p>
        </div>
        <div class="benefit">
          <i class="fas fa-users"></i>
          <h3>Trusted by Thousands</h3>
          <p>Join a community of successful students.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <div class="container">
      <h2>What Students Are Saying</h2>
      <div class="testimonial-slider">
        <div class="testimonial-card">
          <p>"PrepStack helped me score an A in my finals! Highly recommended."</p>
          <h4>- Oladunni</h4>
        </div>
        <div class="testimonial-card">
          <p>"The past questions were exactly what I needed to prepare."</p>
          <h4>- Daramola</h4>
        </div>
        <div class="testimonial-card">
          <p>"Easy to use and incredibly helpful. Thank you, PrepStack!"</p>
          <h4>- Lolade</h4>
        </div>
      </div>
    </div>
  </section>
  
  
 
  

 <!-- Contact Section -->
<section class="contact">
  <div class="container">
    <h2>Get in Touch</h2>
    <p>Have questions or need assistance? Reach out to us!</p>
    <div class="contact-content">
      <!-- Contact Form -->
      <div class="contact-form">
        <form action="#" method="POST">
          <div class="form-group">
            <input type="text" name="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
          </div>
          <button type="submit" class="submit-button">Send Message</button>
        </form>
      </div>
      <!-- Contact Information -->
      <div class="contact-info">
        <h3>Contact Information</h3>
        <ul>
          <li>
            <i class="fas fa-envelope"></i>
            <span>Email: admin@prepstack.olamzyweb.com.ng</span>
          </li>
          <li>
            <i class="fas fa-phone"></i>
            <span>Phone: +234 816 562 1984</span>
          </li>
          <!--<li>-->
          <!--  <i class="fas fa-map-marker-alt"></i>-->
          <!--  <span>Address: </span>-->
          <!--</li>-->
        </ul>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</section> 

  <!-- Call to Action Section -->
  <section class="cta">
    <div class="container">
      <h2>Ready to Ace Your Exams?</h2>
      <p>Sign up now and get access to thousands of past questions.</p>
      <a href="register.html" class="cta-button">Sign Up Today</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 PrepStack. All rights reserved.</p>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>

  <!-- JavaScript for Interactive Effects -->
  <script>

// Add interactive effects or animations here
// Example: Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Navbar Toggle for Mobile
const mobileMenu = document.getElementById('mobile-menu');
const navbarMenu = document.querySelector('.navbar-menu');

mobileMenu.addEventListener('click', () => {
  navbarMenu.classList.toggle('active');
});


  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tech Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
     
        body {
            background-color: black;
            color: #f5f5f5;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar Styling */
        .navbar {
            background-color: black;
            padding: 1rem 2rem;
            border-bottom: 1px solid #333;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white;
        }

        .navbar-brand img {
            max-height: 50px;
            
         
        }

        .navbar-nav .nav-link {
            color: #f5f5f5;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #1e90ff;
        }

        .navbar-toggler {
            border-color: #1e90ff;
        }

        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,...'); /* Add custom icon */
        }

        /* Banner Section Styling */
        .banner {
            position: relative;
            height: 80vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('banner-bg.jpg') no-repeat center center/cover;
        }

        .carousel-inner img {
            width: 100%;
            height: 80vh;
            object-fit: cover;
            filter: brightness(60%);
        }

        .carousel-caption {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            text-align: center;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        }

        .carousel-caption h2 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-in-out;
        }

        .carousel-caption p {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .carousel-caption .btn {
            padding: 12px 24px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation: fadeInUp 2s ease-in-out;
        }

        .carousel-caption .btn:hover {
            background-color: #4682b4;
            transform: scale(1.05);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 10px;
        }

        /* Custom Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .carousel-caption h2 {
                font-size: 2.5rem;
            }

            .carousel-caption p {
                font-size: 1.2rem;
            }
        }

       
.about {
    padding: 70px 0;
    background: linear-gradient(135deg, #000, #3f3f6c, #1e90ff); /* Gradient Background */
    color: #fff;
    text-align: center;
}

.about h2 {
    font-size: 3.5rem;
    margin-bottom: 2rem;
    color: #fff; /* White */
    animation: fadeIn 1s ease-in-out;
}

.content-with-image {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin-bottom: 50px;
    animation: slideIn 1s ease-in-out;
}

.content-with-image img {
    width: 100%;
    max-width: 200px;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.content-with-image .text {
    max-width: 500px;
    padding: 20px;
}

.content-with-image .text h3 {
    margin-top: 1rem;
    font-size: 3rem;
    color: #1e90ff; /* Dark blue */
}

.content-with-image .text p {
    margin-top: 0.5rem;
    line-height: 1.6;
}

/* About Details */
.about-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    animation: slideIn 1.5s ease-in-out;
}

.detail-block {
    background: #1e90ff; /* Dark blue */
    color: #fff;
    border-radius: 15px;
    padding: 30px;
    width: 300px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: left;
    animation: fadeIn 1.5s ease-in-out;
}

.detail-block h3 {
    margin-bottom: 1rem;
    font-size: 1.8rem;
}

.detail-block p, .detail-block ul {
    margin-top: 0.5rem;
    font-size: 1.1rem;
}

.detail-block ul {
    list-style-type: disc;
    padding-left: 20px;
}

.detail-block:hover {
    transform: translateY(-15px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.5);
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideIn {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
/* Services Section */
.services {
    padding: 100px 0;
    background: linear-gradient(135deg, #000, #3f3f6c, #1e90ff, #fff); /* Gradient Background */
    color: #fff;
    position: relative;
    overflow: hidden;
}

.services::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay for better text contrast */
    z-index: 1;
}

.services h2 {
    font-size: 2.5rem;
    text-align: center;
    margin-bottom: 4rem;
    color: #fff;
    position: relative;
    z-index: 2;
    animation: fadeIn 1s ease-in-out;
}

.row {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 0px; 
}
.service-box {
    flex: 1 1 calc(33.333% - 10px); 
    padding: 20px; 
    background-color: #1e1e1e;
    border-radius: 20px;
    text-align: center;
    transition: transform 0.3s ease, background-color 0.3s ease;
    position: relative;
    z-index: 2;
    animation: scaleUp 1s ease-in-out;
    border: 2px solid #1e90ff;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    margin-bottom: 10px; 
}

.service-box:hover {
    transform: scale(1.05);
    background-color: #1e90ff;
    color: #fff;
}




.service-box img {
    width: 20%;
    max-width: 250px;
    border-radius: 15px;
    margin-bottom: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}

.service-box h3 {
    font-size: 1.8rem;
    margin-top: 1rem;
    color: #fff;
}

.service-box p {
    font-size: 1rem;
    line-height: 1.5;
    color: #ccc;
    margin-bottom: 1rem;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1rem;
    color: #fff;
    background-color: #1e90ff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

/* Keyframe Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes scaleUp {
    from {
        transform: scale(0.9);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .services h2 {
        font-size: 2.5rem;
    }

    .service-box {
        flex: 1 1 100%; /* Full width on small screens */
        max-width: 100%;
        margin-bottom: 30px;
    }
}

/* Modal Styles */
.modal-content {
    background: linear-gradient(135deg, #000, #3f3f6c, #1e90ff, #fff); /* Gradient Background */
    color: #fff;
  
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.6); /* Slightly larger shadow for depth */
    overflow: hidden; /* Ensure content stays within bounds */
}

.modal-header {
    border-bottom: none;
    padding: 25px;
    background: linear-gradient(135deg, #000, #3f3f6c); /* Dark blue */
    color: #fff;
 
    position: relative;
    z-index: 1;
}

.modal-title {
    font-size: 2.2rem;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); /* Adds depth to the title */
}

.modal-body {
    padding: 25px;
    background-color: black; /* Darker grey for contrast */
    line-height: 1.6;
    position: relative;
    z-index: 1;
}

.modal-body img {
    border-radius: 10px;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4);
    margin-bottom: 20px;
    max-width: 50%; /* Ensure the image is responsive */
}

.modal-footer {
    border-top: none;
    padding: 20px;
    background: linear-gradient(135deg, #000, #3f3f6c); 
    text-align: right; /* Right-align buttons in the footer */
}

.btn-close {
    filter: invert(1); /* Light color for close button */
    font-size: 1.2rem;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.btn-close:hover {
    opacity: 1;
}

/* Responsive Design */
@media (max-width: 768px) {
    .modal-dialog {
        margin: 15px;
    }

    .modal-title {
        font-size: 1.8rem;
    }

    .modal-body {
        font-size: 1rem;
    }
}




/* Careers Section Styles */
.careers {
    background: linear-gradient(135deg, #000); /* Matching gradient */
    padding: 60px 20px;
    color: #fff;
}



.careers .content-with-image {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 30px;
}

.careers img {
    flex: 1;
    max-width: 50%;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
}

.careers .text {
    flex: 2;
}

.careers h3 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: white;
}



.careers p {
    font-size: 1.2rem;
    margin-bottom: 20px;
    line-height: 1.6;
}





.careers .btn {
    background-color: #1e90ff;
    color: #fff;
    padding: 15px 30px;
    font-size: 1.2rem;
    border-radius: 10px;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
}

.careers .btn:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .careers .content-with-image {
        flex-direction: column;
    }

    .careers img {
        max-width: 100%;
    }
}
/* Introductory Jobs Section Styles */
/* Introductory Jobs Section Styles */
.intro-jobs {
    background: linear-gradient(135deg, #000, #3f3f6c);
    padding: 60px 0;
    text-align: center;
}

.intro-jobs h2 {
    font-size: 2.5rem;
    color: white;
    margin-bottom: 40px;
    font-weight: bold;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.job-intro {
    margin-bottom: 30px;
    padding: 15px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.job-block {
    background-color: #2e2e54;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.job-intro h3 {
    font-size: 1.8rem;
    color: white;
    margin-bottom: 15px;
    font-weight: bold;
}

.job-intro p {
    font-size: 1rem;
    color: #ddd;
    line-height: 1.6;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    padding: 12px 25px;
    font-size: 1.1rem;
    font-weight: bold;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.text-center {
    text-align: center;
}

/* Animated Blocks */
.animated-block {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}

.animated-block:hover .job-block {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

.intro-jobs .row {
    display: flex;
    justify-content: center;
}

@media (prefers-reduced-motion: no-preference) {
    .animated-block.appear {
        opacity: 1;
        transform: translateY(0);
    }
}
.testimonials-wrapper {
    padding: 60px 0;
    background: linear-gradient(135deg, #1a1a1a, #3f3f6c);
    font-family: 'Montserrat', sans-serif;
}

.title-section {
    font-size: 32px;
    margin-bottom: 40px;
    color: white;
    text-transform: uppercase;
}

.carousel-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.testimonial-box {
    background-color: #1f1f1f;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    padding: 35px;
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
    transition: transform 0.3s ease-in-out;
}

.testimonial-box:hover {
    transform: scale(1.05);
}

.testimonial-text p {
    font-size: 18px;
    font-style: italic;
    color: #eaeaea;
    margin-bottom: 25px;
}

.client-info {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.client-info img {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}

.client-info h5 {
    font-size: 22px;
    color: #ffffff;
    margin: 0;
}

.client-info p {
    font-size: 16px;
    color: #bbbbbb;
    margin: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #444;
    border-radius: 50%;
    padding: 12px;
    width: 40px;
    height: 40px;
}

.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
    background-color: #000;
}



footer {
    background: linear-gradient(135deg, #1a1a1a, #000);
    color: #f5f5f5;
    padding: 60px 0;
    font-family: 'Montserrat', sans-serif;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.footer-col {
    flex: 1;
    min-width: 240px;
    margin-bottom: 20px;
}

.footer-col h4 {
    font-size: 22px;
    margin-bottom: 20px;
    position: relative;
    text-transform: uppercase;
    color: #f5f5f5;
}

.footer-col h4::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    height: 3px;
    width: 50px;
    background-color:#1e90ff;
}

.footer-col p, .footer-col ul li {
    font-size: 16px;
    margin-bottom: 10px;
    color: #ccc;
    line-height: 1.6;
}

.footer-col ul {
    list-style: none;
    padding: 0;
}

.footer-col ul li {
    margin-bottom: 12px;
}

.footer-col ul li a {
    color: #ccc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-col ul li a:hover {
    color:#1e90ff;
}

.footer-col a {
    color:#1e90ff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-col a:hover {
    color: #f5f5f5;
}

.social-links a {
    display: inline-block;
    margin-right: 10px;
    color: #f5f5f5;
    font-size: 18px;
    transition: color 0.3s ease;
}

.social-links a:hover {
    color: #1e90ff;
}

.footer-bottom {
    text-align: center;
padding-top: 20px;
    border-top: 1px solid #333;
    margin-top: 20px;
    font-size: 15px;
    margin-bottom: 10px;
}



    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand " href="#">
            <img src="images/TECH LOGO.png" alt="Company Logo">
            MyTechCo
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                  
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="careers.php">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobs-update.php">Jobs & Updates</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Banner Section -->
    <div id="carouselExampleCaptions" class="carousel slide banner">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner1.jpg" class="d-block w-100" alt="Banner Image 1">
                <div class="carousel-caption">
                    <h2>Welcome to My Tech Company</h2>
                    <p>Innovating the Future of Technology</p>
                    <a class="btn" href="#services">Explore Our Services</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner2.jpeg" class="d-block w-100" alt="Banner Image 2">
                <div class="carousel-caption">
                    <h2>Cutting-Edge Solutions</h2>
                    <p>Your Success is Our Mission</p>
                    <a class="btn" href="#about">Learn More</a>
                </div>
            </div>
            <!-- Add more carousel items as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

<!-- About Us Section -->
<section id="about" class="about">
    <div class="container">
    
        <div class="content-with-image">
            <div class="text">
                <h3>Who We Are</h3>
                <p>We are a forward-thinking tech company dedicated to innovation and excellence. Our team is driven by a passion for technology and a commitment to delivering exceptional solutions.</p>
            </div>
            <img src="images/TECH LOGO.png" alt="About Us Image">
        </div>
        <div class="about-details">
            <div class="detail-block">
                <h3>Our Vision</h3>
                <p>To be at the forefront of technological advancements, creating solutions that empower individuals and organizations worldwide.</p>
            </div>
            <div class="detail-block">
                <h3>Our Mission</h3>
                <p>To deliver cutting-edge technology solutions that exceed expectations and drive success for our clients and partners.</p>
            </div>
            <div class="detail-block">
                <h3>Core Values</h3>
                <ul>
                    <li>Innovation</li>
                    <li>Integrity</li>
                    <li>Excellence</li>
                    <li>Collaboration</li>
                </ul>
            </div>
            <div class="detail-block">
                <h3>Our Team</h3>
                <p>Our diverse team of experts brings a wealth of experience and creativity to every project, ensuring high-quality results and client satisfaction.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services">
    <h2>Our Services</h2>
    <div class="container">
        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="service-box" data-bs-toggle="modal" data-bs-target="#serviceModal1">
                    <img src="images/ux.png" alt="Service 1">
                    <h3>Web Development</h3>
                    <p>We create stunning, responsive websites that drive results.</p>
                    <a href="#!" class="btn">Learn More</a>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4">
                <div class="service-box" data-bs-toggle="modal" data-bs-target="#serviceModal2">
                    <img src="images/smartphone.png" alt="Service 2">
                    <h3>Mobile App Development</h3>
                    <p>Our mobile apps are designed to engage users and boost your business.</p>
                    <a href="#!" class="btn">Learn More</a>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4">
                <div class="service-box" data-bs-toggle="modal" data-bs-target="#serviceModal3">
                    <img src="images/ui-ux.png" alt="Service 3">
                    <h3>UI/UX Design</h3>
                    <p>We focus on creating user-friendly designs that enhance user interaction.</p>
                    <a href="#!" class="btn">Learn More</a>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="col-md-4">
                <div class="service-box" data-bs-toggle="modal" data-bs-target="#serviceModal4">
                    <img src="images/social-media.png" alt="Service 4">
                    <h3>Digital Marketing</h3>
                    <p>Boost your online presence with our digital marketing strategies.</p>
                    <a href="#!" class="btn">Learn More</a>
                </div>
            </div>
            <!-- Service 5 -->
            <div class="col-md-4">
                <div class="service-box" data-bs-toggle="modal" data-bs-target="#serviceModal5">
                    <img src="images/monitor.png" alt="Service 5">
                    <h3>E-Commerce Solutions</h3>
                    <p>Build and optimize your online store with our comprehensive solutions.</p>
                    <a href="#!" class="btn">Learn More</a>
                </div>
            </div>
            <!-- Service 6 -->
            <div class="col-md-4">
                <div class="service-box" data-bs-toggle="modal" data-bs-target="#serviceModal6">
                    <img src="images/service.png" alt="Service 6">
                    <h3>Consulting Services</h3>
                    <p>Get expert advice and strategies to improve your business processes.</p>
                    <a href="#!" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modals -->
<!-- Service 1 Modal -->
<div class="modal fade" id="serviceModal1" tabindex="-1" aria-labelledby="serviceModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel1">Web Development</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="images/ux.png" alt="Service 1" class="img-fluid mb-3">
                <p>We create stunning, responsive websites that drive results. Our development process ensures seamless user experiences and high performance. Whether you need a custom-built website or a revamp of your existing site, our team has the expertise to deliver top-notch solutions tailored to your needs.</p>
                <h6>Key Features:</h6>
                <ul>
                    <li>Responsive Design</li>
                    <li>SEO Optimization</li>
                    <li>Custom Development</li>
                    <li>Content Management Systems</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Service 2 Modal -->
<div class="modal fade" id="serviceModal2" tabindex="-1" aria-labelledby="serviceModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel2">Mobile App Development</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="images/smartphone.png" alt="Service 2" class="img-fluid mb-3">
                <p>Our mobile apps are designed to engage users and boost your business. From concept to deployment, we ensure that your mobile applications are feature-rich, user-friendly, and optimized for all devices.</p>
                <h6>Key Features:</h6>
                <ul>
                    <li>Cross-Platform Support</li>
                    <li>High Performance</li>
                    <li>User-Friendly Interface</li>
                    <li>Custom Development</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Service 3 Modal -->
<div class="modal fade" id="serviceModal3" tabindex="-1" aria-labelledby="serviceModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel3">UI/UX Design</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="images/ui-ux.png" alt="Service 3" class="img-fluid mb-3">
                <p>We focus on creating user-friendly designs that enhance user interaction. Our UI/UX design process is centered around understanding user behavior and crafting designs that are both intuitive and aesthetically pleasing.</p>
                <h6>Key Features:</h6>
                <ul>
                    <li>User-Centered Design</li>
                    <li>Wireframing & Prototyping</li>
                    <li>Responsive Design</li>
                    <li>Visual Design</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Service 4 Modal -->
<div class="modal fade" id="serviceModal4" tabindex="-1" aria-labelledby="serviceModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel4">Digital Marketing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="images/social-media.png" alt="Service 4" class="img-fluid mb-3">
                <p>Boost your online presence with our digital marketing strategies. From social media marketing to SEO and PPC, we have the tools and expertise to drive traffic to your website and increase conversions.</p>
                <h6>Key Features:</h6>
                <ul>
                    <li>Social Media Management</li>
                    <li>SEO & PPC</li>
                    <li>Email Marketing</li>
                    <li>Content Marketing</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Service 5 Modal -->
<div class="modal fade" id="serviceModal5" tabindex="-1" aria-labelledby="serviceModalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel5">E-Commerce Solutions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="images/monitor.png" alt="Service 5" class="img-fluid mb-3">
                <p>Build and optimize your online store with our comprehensive solutions. From setting up your e-commerce platform to managing inventory and integrating payment gateways, we offer end-to-end solutions for your online business.</p>
                <h6>Key Features:</h6>
                <ul>
                    <li>Custom E-Commerce Development</li>
                    <li>Inventory Management</li>
                    <li>Payment Gateway Integration</li>
                    <li>Order Management</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Service 6 Modal -->
<div class="modal fade" id="serviceModal6" tabindex="-1" aria-labelledby="serviceModalLabel6" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel6">Consulting Services</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="images/service.png" alt="Service 6" class="img-fluid mb-3">
                <p>Get expert advice and strategies to improve your business processes. Our consulting services are tailored to meet the unique needs of your business, helping you achieve your goals efficiently and effectively.</p>
                <h6>Key Features:</h6>
                <ul>
                    <li>Business Process Improvement</li>
                    <li>Strategy Development</li>
                    <li>Operational Efficiency</li>
                    <li>Technology Consulting</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Extended Careers Section -->
<section id="careers" class="careers">
    <div class="content-with-image">
        <img src="images/carrer3.jpeg" alt="Careers Image">
        <div class="text">
            <h3>Join Our Dynamic Team</h3>
           
            <p>If you're interested in any of our open positions, click the button below to view detailed job descriptions and submit your application. We look forward to hearing from you!</p>
            <a class="btn" href="careers.php">View Openings</a>
        </div>
    </div>
</section>


<!-- Jobs & Updates Section -->
<!-- Introductory Jobs Section -->
<section id="intro-jobs" class="intro-jobs">
    <h2>Explore Career Opportunities</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 job-intro">
                <h3>Software Engineer</h3>
                <p>Join our team to develop innovative solutions that shape the future of technology.</p>
            </div>
            <div class="col-md-4 job-intro">
                <h3>Product Manager</h3>
                <p>Lead our product teams to create impactful products that make a difference.</p>
            </div>
            <div class="col-md-4 job-intro">
                <h3>UI/UX Designer</h3>
                <p>Design intuitive and beautiful user experiences that delight our customers.</p>
            </div>
        </div>
        <div class="text-center">
            <a href="jobs-update.php" class="btn btn-primary">View All Jobs & Apply</a>
        </div>
    </div>
    </section>
    <section id="testimonials" class="testimonials-wrapper">
    <div class="container">
        <h2 class="title-section text-center">What Our Clients Say</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="testimonial-box">
                        <div class="testimonial-text">
                            <p>“MyTechCo’s innovative solutions transformed our business operations. The team's dedication and expertise are unparalleled.”</p>
                        </div>
                        <div class="client-info">
                            <img src="images/client1.jpeg" alt="Client 1">
                            <div>
                                <h5>John Doe</h5>
                                <p>CEO, Tech Innovators</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-box">
                        <div class="testimonial-text">
                            <p>“Working with MyTechCo was a game-changer. Their cutting-edge technology and strategic insights were exactly what we needed.”</p>
                        </div>
                        <div class="client-info">
                            <img src="images/client2.jpg" alt="Client 2">
                            <div>
                                <h5>Jane Smith</h5>
                                <p>CTO, Web Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-box">
                        <div class="testimonial-text">
                            <p>“The professionalism and technical prowess exhibited by MyTechCo's team exceeded our expectations. Highly recommend!”</p>
                        </div>
                        <div class="client-info">
                            <img src="images/client3.jpeg" alt="Client 3">
                            <div>
                                <h5>Michael Lee</h5>
                                <p>Head of IT, Global Enterprises</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

    <footer>
    <div class="footer-container">
        <div class="footer-row">
            <div class="footer-col">
                <h4>MyTechCo</h4>
                <p>MyTechCo is a leading provider of innovative tech solutions, dedicated to transforming businesses through cutting-edge technology.</p>
            </div>
            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Technology Services</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">Consulting Services</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="career.php">Careers</a></li>
                    <li><a href="jobs-updates.php">Jobs & Updates</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Us</h4>
                <p>Email: <a href="mailto:info@mytechco.com">info@mytechco.com</a></p>
                <p>Phone: <a href="tel:+1234567890">+123 456 7890</a></p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 MyTechCo. All rights reserved.</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

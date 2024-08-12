<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #000, #3f3f6c);
            color: #fff;
            font-family: 'Arial', sans-serif;
        }
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
        .about-main h2 {
            color:#1e90ff;
        }

        .about-main p {
            color: #b0bec5;
        }

        .content-with-image-text h3 {
            color: white;
        }

        .content-with-image-text p {
            color: white;
        }
        .creation-history {
    background: linear-gradient(135deg, #000, #3f3f6c);
    color: #fff;
    padding: 60px 20px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
    animation: fadeIn 1.5s ease-in-out;
}

.creation-history h6 {
    font-size: 2.5rem;
    letter-spacing: 2px;
    font-weight: bold;
    color: #1e90ff; /* Blue color */
}

.creation-history p {
    font-size: 1.15rem;
    line-height: 1.8;
}

.creation-history .lead {
    font-size: 1.2rem;
    font-weight: 300;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

        .card {
            background: black;
            color: #fff;
            border: 1px solid #00bcd4;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .card-title {
            color: white;
        }

        .meet-the-team {
            padding: 60px 0;
        }

        .meet-the-team h3 {
            color: #1e90ff; /* Bright cyan */
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        .team-card {
            background: black; /* Dark gray */
            border: 1px solid#1e90ff; /* Dark blue border */
            color: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            align-items: center; /* Center horizontally */
    justify-content: center; /* Center vertically */
    text-align: center;
        }

        .team-card img {
            width: 120px;
    height: 120px;
    object-fit: cover;
  /* Dark blue border */
    border-radius: 50%; /* Circle shape */
    transition: transform 0.3s ease;
    margin-bottom: 15px;
            border: 5px solid #1e90ff; /* Dark blue border */
            transition: transform 0.3s ease;
        }

        .team-card img:hover {
            transform: scale(1.1);
        }

        .team-card .card-body {
            background: #1e90ff; /* Dark gray */
            padding: 20px;
            text-align: center;
        }

        .team-card h5 {
            color: white; /* Bright cyan */
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .team-card p {
            color: #cfd8dc; /* Light gray */
            font-size: 1rem;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.8);
        }

        .creation-history p {
            color: #cfd8dc;
        }
        .creation-history h6 {
            color: white;
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

    <!-- About Section -->
    <section id="about" class="about py-5">
        <div class="container">
            <!-- Main About Section -->
            <div class="about-main text-center mb-5">
                <h4 class="display-4">About Us</h4>
                <p class="lead">We are a forward-thinking tech company dedicated to innovation and excellence. Our team is driven by a passion for technology and a commitment to delivering exceptional solutions. We strive to push the boundaries of what's possible and create technology that transforms lives.</p>
            </div>

            <!-- Content with Image -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <div class="content-with-image-text">
                        <h5 class="display-5">Who We Are</h5>
                        <p>At MyTechCO, we blend creativity and technology to build solutions that make a difference. We believe in pushing boundaries and embracing new ideas to stay ahead in a fast-evolving world. Our team consists of passionate innovators and skilled professionals who work collaboratively to achieve remarkable results. Our commitment to innovation ensures we are always at the cutting edge of technology.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/TECH LOGO.png" alt="About Us Image" class="img-fluid rounded" style="max-width: 150px;">
                </div>
            </div>

            <!-- About Details -->
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="detail-block">
                        <h3>Our Vision</h3>
                        <p>To be at the forefront of technological advancements, creating solutions that empower individuals and organizations worldwide. We envision a future where our innovations lead to sustainable progress and meaningful change.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="detail-block">
                        <h3>Our Mission</h3>
                        <p>To deliver cutting-edge technology solutions that exceed expectations and drive success for our clients and partners. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="detail-block">
                        <h3>Core Values</h3>
                        <ul>
                            <li>Innovation: Embracing creativity and new technologies to solve problems.</li>
                            <li>Integrity: Upholding the highest standards of honesty and ethics.</li>
   
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="detail-block">
                        <h3>Our Team</h3>
                        <p>Our diverse team of experts brings a wealth of experience and creativity to every project, ensuring high-quality results and client satisfaction. Each member contributes unique skills and perspectives, driving innovation and excellence.</p>
                    </div>
                </div>
            </div>

            <!-- Creation History -->
            <div class="creation-history text-center mb-5">
    <h6 class="display-5 text-uppercase text-primary mb-4">Our Creation History</h6>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="lead mb-4">
                    Our journey began with a simple idea: to revolutionize the way technology is integrated into daily life. Founded in 2010, we started as a small startup with a vision to deliver innovative solutions that could make a real impact. Over the years, we have grown into a leading tech company with a global presence, thanks to our relentless pursuit of excellence and our commitment to pushing the boundaries of technology.
                </p>
                <p class="mb-4">
                    Our first major breakthrough came in 2013 with the launch of our flagship product, a cutting-edge software platform that transformed industry standards. This success laid the foundation for our expansion into new markets and the development of additional groundbreaking technologies. Each milestone in our history has been a testament to our dedication to innovation and our ability to adapt to the ever-evolving tech landscape.
                </p>
              
            </div>
        </div>
    </div>
</div>


            <!-- Meet the Team -->
            <div class="meet-the-team">
                <h3 class="text-center">Meet The Team</h3>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="team-card card p-4 text-center bg dark">
                            <img src="images/images-142.jpeg" alt="Team Member 1" class="rounded-circle mb-3">
                            <div class="card-body">
                                <h5 class="card-title">John Doe</h5>
                                <p class="card-text">Chief Technology Officer. With over 15 years of experience in technology, John leads our technical team with a vision for innovation and excellence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="team-card card p-4 text-center bg dark">
                            <img src="images/images-143.jpeg" alt="Team Member 2" class="rounded-circle mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Jane Smith</h5>
                                <p class="card-text">Lead Developer. Jane is a skilled developer specializing in creating robust and scalable solutions that meet our clients' needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="team-card card p-4 text-center bg dark">
                            <img src="images/5c1066a877a165235648bac0.webp" alt="Team Member 3" class="rounded-circle mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Emily Johnson</h5>
                                <p class="card-text">UX/UI Designer. Emily brings a user-centered approach to design, ensuring that our products are intuitive and visually appealing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    
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

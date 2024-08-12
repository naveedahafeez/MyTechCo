<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers at MyTechCO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            background-color: black;
            color: #f5f5f5;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar and Header Styles */
        header, .navbar {
            margin: 0;
            padding: 0;
            background-color: black;
            color: black;
        }

        /* Main Content Styles */
        .careers {
            background: linear-gradient(135deg, #000, #3f3f6c);
            margin: 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            position: relative;
            max-width: 1500px; /* Adjust max-width as needed */
            padding-bottom: 100px; /* Ensures space for footer */
        }

        .careers h1 {
            font-size: 2rem;
            color: #fff;
            padding-top: 20px;
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .careers h2 {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: #fff;
            font-weight: bold;
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }

        .careers-section {
            border-bottom: 2px solid #1e90ff;
            max-width: 800px; /* Adjust max-width as needed */
            margin-left: auto;
            margin-right: auto;
      
        }

        .careers-section:last-of-type {
            border-bottom: none;
        }

        .careers-section h3 {
            font-size: 2rem;
            color: #1e90ff;
            margin-bottom: 15px;
            animation: slideIn 1s ease-out;
            position: relative;
            padding-bottom: 10px;
        }

        .careers-section h3::after {
            content: '';
            display: block;
            width: 50px;
            height: 4px;
            background: #1e90ff;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .careers-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #fff;
        }

        .careers-section img {
            width: 100%;
            height: 300px; /* Fixed height for equal size */
            object-fit: cover; /* Ensures images cover the area without distortion */
            border-radius: 10px;
            margin: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .careers-section img:hover {
            transform: scale(1.05);
        }

        .btn {
            display: inline-block;
            background-color: black; /* Changed to a more prominent color */
            color: #fff;
            padding: 12px 24px; /* Increased padding for better visibility */
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            font-size: 1.1rem;
        }

        .btn:hover {
            background-color: #005b96; /* Darker shade on hover */
            transform: translateY(-4px); /* More prominent hover effect */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Adds shadow on hover */
        }

        /* Testimonials Styles */
        .testimonials {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 40px auto;
            max-width: 800px;
        }

        .testimonial {
            background-color: #1e1e1e;
            border-radius: 10px;
            padding: 20px;
            color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .testimonial p {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .testimonial span {
            font-style: italic;
            display: block;
            text-align: right;
        }
/* Updated Styles for Join Us Section */
.join-us {
    background: linear-gradient(135deg, #1e90ff, #ff6f61);
    border-radius: 10px;
    padding: 40px 30px;
    margin: 20px auto;
    max-width: 800px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.join-us h3 {
    font-size: 2.5rem;
    color: #fff;
    margin-bottom: 20px;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
}

.join-us p {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #fff;
    margin-bottom: 30px;
}

.btn {
    background-color: #1e90ff !important;
    color: #fff;
    padding: 15px 30px;
    font-size: 1.2rem;
    border-radius: 10px;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background: linear-gradient(45deg, #000, #fff);
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

        /* Footer Styles */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }

        /* Animations */
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
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .careers {
                width: 90%;
                padding-bottom: 60px; /* Adjusted for smaller screens */
            }

            .careers h2 {
                font-size: 2rem;
            }

            .careers-section h3 {
                font-size: 1.5rem;
            }

            .careers-section img {
                height: auto; /* Adjust height for smaller screens */
            }
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>

<section class="major">
    <main class="careers">
        <h1>Careers at MyTechCO</h1>
        <h2>Why Work With Us?</h2>
        <div class="careers-section">
            <h3>Our Company Culture</h3>
            <img src="images/cul.jpeg" alt="Company Culture">
            <p>At MyTechCO, we foster a collaborative and inclusive work environment where every team member is valued and encouraged to thrive. Our culture is built on mutual respect, open communication, and a shared commitment to excellence. We believe in supporting personal and professional growth while maintaining a healthy work-life balance.</p>
        </div>
        <div class="careers-section">
            <h3>Career Growth and Development</h3>
            <img src="images/dev.jpeg" alt="Career Growth">
            <p>We are dedicated to the continuous growth of our employees through various training programs, mentorship, and career advancement opportunities. Whether you aim to develop your current skills or explore new areas of expertise, MyTechCO provides the resources and support you need to achieve your career goals.</p>
        </div>
        <div class="careers-section">
            <h3>Benefits and Perks</h3>
            <img src="images/benefits.jpeg" alt="Benefits">
            <p>Our comprehensive benefits package includes health insurance, retirement plans, generous paid time off, and additional perks such as flexible working hours, remote work options, and wellness programs. We strive to ensure our employees are well-supported and enjoy a rewarding work experience.</p>
        </div>
        <div class="testimonials">
            <div class="testimonial">
                <p>"MyTechCO has been a fantastic place to grow professionally. The supportive team environment and challenging projects make every day exciting."</p>
                <span>- Jane Doe, Senior Developer</span>
            </div>
            <div class="testimonial">
                <p>"The emphasis on professional development and work-life balance has made my time at MyTechCO extremely fulfilling. It's a great place to advance your career."</p>
                <span>- John Smith, Project Manager</span>
            </div>
        </div>
        <div class="careers-section">
            <h3>Join Us</h3>
            <p>If you’re passionate about technology and want to join a vibrant and innovative team, we’d love to hear from you. Check out our current job openings and apply today to be part of our growing success story.</p>
            <a class="btn" href="jobs-update.php">Apply Now</a>
        </div>
    </main>
</section>
<?php include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
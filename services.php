<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - MyTechCO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* Global Styles */
        body {
            background: linear-gradient(135deg, #000, #3f3f6c);
            color: white;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar and Header Styles */
        header,
        .navbar {
            background-color: black;
            color: white;
        }

        /* Services Section Styles */
        .services-section {
            padding: 60px 20px;
            text-align: center;
        }

        .services-section h1 {
            font-size: 3rem;
            margin-bottom: 40px;
            color: #1e90ff;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
        }

        .services-description {
            font-size: 1.2rem;
            margin-bottom: 90px;
            color: #d3d3d3;
            max-width: 900px;
            margin: 0 auto;
        }

        .service-card {
            background: linear-gradient(135deg, #1a1a1a, #3f3f6c);
            padding: 30px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .service-icon {
            font-size: 3rem;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .service-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .service-description {
            font-size: 1rem;
            color: #d3d3d3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .services-section h1 {
                font-size: 2rem;
            }

            .service-card {
                padding: 20px;
            }

            .service-icon {
                font-size: 2rem;
            }

            .service-title {
                font-size: 1.3rem;
            }

            .service-description {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <section class="services-section">
        <h1>Our Services</h1>
        <p class="services-description">At MyTechCO, we offer a wide range of high-quality services tailored to meet the needs of businesses and individuals. From web development to cybersecurity, we have the expertise to bring your ideas to life and protect your digital presence.</p>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-laptop"></i> <!-- Bootstrap icon for technology -->
                        </div>
                        <h2 class="service-title">Web Development</h2>
                        <p class="service-description">We create responsive and modern websites that are optimized for performance and designed to engage users. Our development process ensures your website is scalable, secure, and tailored to your specific needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-phone"></i> <!-- Bootstrap icon for mobile development -->
                        </div>
                        <h2 class="service-title">Mobile App Development</h2>
                        <p class="service-description">Our team specializes in building user-friendly mobile apps for both Android and iOS platforms. We focus on delivering intuitive and engaging mobile experiences that enhance user satisfaction and drive business growth.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-palette"></i> <!-- Bootstrap icon for design -->
                        </div>
                        <h2 class="service-title">UI/UX Design</h2>
                        <p class="service-description">We design intuitive interfaces and engaging user experiences that captivate your audience. Our design philosophy is centered on usability, accessibility, and aesthetics to create products that users love.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-bar-chart"></i> <!-- Bootstrap icon for analytics -->
                        </div>
                        <h2 class="service-title">SEO Optimization</h2>
                        <p class="service-description">Our SEO services ensure your website ranks high in search engine results, driving more traffic and increasing visibility. We use the latest techniques to improve your website’s organic search performance and ROI.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-shop"></i> <!-- Bootstrap icon for ecommerce -->
                        </div>
                        <h2 class="service-title">E-commerce Solutions</h>
                        <p class="service-description">We offer complete e-commerce solutions to help you sell your products online effectively. Our services include everything from setting up online stores to integrating payment gateways and optimizing the customer shopping experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-shield-lock"></i> <!-- Bootstrap icon for security -->
                        </div>
                        <h2 class="service-title">Cybersecurity</h2>
                        <p class="service-description">Our cybersecurity services protect your digital assets from threats and vulnerabilities. We provide comprehensive security solutions, including risk assessments, threat detection, and incident response, to safeguard your business.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-graph-up"></i> <!-- Bootstrap icon for growth -->
                        </div>
                        <h2 class="service-title">Digital Marketing</h2>
                        <p class="service-description">Our digital marketing services are designed to help you reach your target audience and grow your brand. We specialize in social media marketing, content creation, email marketing, and online advertising to boost your online presence and drive conversions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-cloud-arrow-up"></i> <!-- Bootstrap icon for cloud -->
                        </div>
                        <h2 class="service-title">Cloud Services</h2>
                        <p class="service-description">We offer cloud computing services that enable you to scale your business operations efficiently. Our cloud solutions include cloud migration, storage, and management, helping you leverage the power of the cloud for increased flexibility and cost savings.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-gear"></i> <!-- Bootstrap icon for custom solutions -->
                        </div>
                        <h2 class="service-title">Custom Software Development</h2>
                        <p class="service-description">Our custom software development services cater to businesses that require unique solutions. We work closely with you to understand your needs and develop software that automates processes, enhances productivity, and solves complex challenges.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>

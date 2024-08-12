<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Job Openings at MyTechCo</title>

    <style>
        body {
            background: linear-gradient(135deg, #000, #3f3f6c);
            color: white;
        }

        .jobs {
            background: inherit;
            padding: 60px 20px;
        }

        .jobs h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
            color: white;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        .job-listing {
            background-color: #1e1e1e;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
            color: #f0f0f0;
            animation: slideInUp 0.5s ease-in-out;
        }

        .job-listing:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            background-color: #1e90ff;
        }

        .job-listing h3 {
            font-size: 1.8rem;
            color: #1e90ff;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .job-listing:hover h3 {
            color: white;
        }

        .job-listing p {
            font-size: 1.1rem;
            color: #dcdcdc;
        }
        .job-listing .btn {
    background-color: #1e90ff !important;
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


        .btn:hover {
            background-color: #005b96;
            color: white;
            transform: scale(1.05);
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

        @keyframes slideInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-content {
    background-color: black;
    color: white;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
}
.modal-content {
    background-color: black;
    color: white;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
}

.modal-header {
    background-color: #1e90ff;
    color: white;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.modal-title {
    font-size: 1.5rem;
    font-weight: bold;
}

.btn-close {
    background: transparent;
    border: none;
    color: white;
    font-size: 1.2rem;
}

.alert-info {
    background-color: #1e90ff;
    color: white;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
}

.application-form .form-group {
    margin-bottom: 20px;
}

.application-form .form-label {
    color: black;
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}

.application-form .form-control {
    background-color:grey;
    color: #f0f0f0;
    border: none;
    border-radius: 5px;
    box-shadow: none;
    padding: 10px;
}

.application-form .form-control:focus {
    border-color: #1e90ff;
    box-shadow: 0 0 0 0.2rem rgba(30, 144, 255, 0.25);
}

.btn-primary {
    background-color: #1e90ff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #005b96;
}

    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Main Content -->
    <main class="jobs container">
        <h2>Current Job Openings</h2>
        
        <!-- Job listings -->
        <div class="job-listing">
            <h3>Web Developer</h3>
            <p><strong>Location:</strong> Remote or In-Office</p>
            <p><strong>Type:</strong> Full-Time</p>
            <p><strong>Description:</strong> We are looking for a talented Web Developer to join our team. The ideal candidate will have experience with front-end and back-end development, be proficient in HTML, CSS, JavaScript, and have a keen eye for design.</p>
            <a class="btn" data-bs-toggle="modal" data-bs-target="#webDeveloperModal">Apply Now</a>
        </div>
        
        <!-- Additional job listings -->
        <div class="job-listing">
            <h3>Mobile App Developer</h3>
            <p><strong>Location:</strong> Remote or In-Office</p>
            <p><strong>Type:</strong> Full-Time</p>
            <p><strong>Description:</strong> As a Mobile App Developer, you'll be responsible for creating and maintaining mobile applications for our clients. We are looking for someone with experience in both iOS and Android platforms.</p>
            <a class="btn" data-bs-toggle="modal" data-bs-target="#MobileAppDeveloperModal">Apply Now</a>
        </div>

        <div class="job-listing">
            <h3>UI/UX Designer</h3>
            <p><strong>Location:</strong> Remote or In-Office</p>
            <p><strong>Type:</strong> Full-Time</p>
            <p><strong>Description:</strong> We are seeking a creative UI/UX Designer to create engaging and user-friendly interfaces for our products. The ideal candidate will have experience with design tools such as Adobe XD, Figma, and Sketch.</p>
            <a class="btn" data-bs-toggle="modal" data-bs-target="#UI/UXDesignerModal">Apply Now</a>
        </div>

        <div class="job-listing">
            <h3>Backend Developer</h3>
            <p><strong>Location:</strong> Remote or In-Office</p>
            <p><strong>Type:</strong> Full-Time</p>
            <p><strong>Description:</strong> We are looking for a skilled Backend Developer to build and maintain server-side logic and database management. Proficiency in Node.js, Python, and SQL is required.</p>
            <a class="btn" data-bs-toggle="modal" data-bs-target="#BackendDeveloperModal">Apply Now</a>
        </div>

        <div class="job-listing">
            <h3>DevOps Engineer</h3>
            <p><strong>Location:</strong> Remote or In-Office</p>
            <p><strong>Type:</strong> Full-Time</p>
            <p><strong>Description:</strong> We need a DevOps Engineer to manage our infrastructure, automate workflows, and improve deployment processes. Experience with Docker, Kubernetes, and CI/CD pipelines is a must.</p>
            <a class="btn"data-bs-toggle="modal" data-bs-target="#DevOpsEngineerModal">Apply Now</a>
        </div>

        <div class="job-listing">
            <h3>Data Scientist</h3>
            <p><strong>Location:</strong> Remote or In-Office</p>
            <p><strong>Type:</strong> Full-Time</p>
            <p><strong>Description:</strong> We're seeking a Data Scientist to analyze complex data sets, develop predictive models, and provide actionable insights. Proficiency in Python, R, and machine learning frameworks is essential.</p>
            <a class="btn" data-bs-toggle="modal" data-bs-target="#DataScientistModal">Apply Now</a>
        </div>

        <div class="job-listing">
            <h3>Project Manager</h3>
            <p><strong>Location:</strong> Remote or In-Office</p>
            <p><strong>Type:</strong> Full-Time</p>
            <p><strong>Description:</strong> We are looking for a Project Manager to oversee project timelines, coordinate between teams, and ensure successful project delivery. Experience in Agile methodologies and project management tools is required.</p>
            <a class="btn" data-bs-toggle="modal" data-bs-target="#ProjectManagerModal">Apply Now</a>
        </div>

        <div class="job-listing">
            <h3>Digital Marketer</h3>
            <p><strong>Location:</strong> Remote or In-Office</p>
            <p><strong>Type:</strong> Full-Time</p>
            <p><strong>Description:</strong> We need a Digital Marketer to develop and execute online marketing strategies, manage social media accounts, and analyze campaign performance. Experience with SEO, PPC, and content marketing is required.</p>
            <a class="btn"data-bs-toggle="modal" data-bs-target="#DigitalMarketerModal">Apply Now</a>
        </div>
    </main>
    <div class="modal fade" id="webDeveloperModal" tabindex="-1" aria-labelledby="webDeveloperModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="webDeveloperModalLabel">Apply for Web Developer Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Web Developer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="DigitalMarketerlabel" tabindex="-1" aria-labelledby="DigitalMarketerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DigitalMarketerModalLabel">Apply for Digital Marketer Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Web Developer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="DataScientistModal" tabindex="-1" aria-labelledby="DataScientistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DataScientist ModalLabel">Apply for Data Scientist Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Web Developer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ProjectManagerModal" tabindex="-1" aria-labelledby="ProjectManagerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ProjectManagerModalLabel">Apply for Project Manager Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Web Developer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="DevOpsEngineerModal" tabindex="-1" aria-labelledby="DevOpsEngineerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DevOpsEngineerModalLabel">Apply for DevOps Engineer Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Web Developer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="UI/UXDesignerModal" tabindex="-1" aria-labelledby="UI/UXDesignerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UI/UXDesignerModalLabel">Apply for UI/UX Designer Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Web Developer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="MobileAppDeveloperModal" tabindex="-1" aria-labelledby="MobileAppDeveloperModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="MobileAppDeveloperModalLabel">Apply for Mobile App Developer Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Web Developer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="webDeveloperModal" tabindex="-1" aria-labelledby="webDeveloperModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="webDeveloperModalLabel">Apply for Web Developer Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Web Developer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="BackendDeveloperModal" tabindex="-1" aria-labelledby="BackendDeveloperModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="BackendDeveloperModalLabel">Apply for Backend Developer Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Web Developer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="DigitalMarketerModal" tabindex="-1" aria-labelledby="DigitalMarketerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DigitalMarketerModalLabel">Apply for Digital Marketer Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="alert alert-info">Please email your CV to <a href="mailto:careers@mytechco.com">careers@mytechco.com</a> after submitting the form.</p>
                <form action="application-handler.php" method="post" class="application-form">
                    <input type="hidden" name="job" value="Digital Marketer">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="Pakistan">Pakistan</option>
                            <!-- Add more countries as needed -->
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="form-label">Degree</label>
                        <select class="form-control" id="degree" name="degree" required>
                            <option value="Bachelor's">Bachelor's</option>
                            <option value="Master's">Master's</option>
                            <option value="PhD">PhD</option>
                            <!-- Add more degrees as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience (in years)</label>
                        <select class="form-control" id="experience" name="experience" required>
                            <option value="0-1">0-1 Year</option>
                            <option value="1-3">1-3 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="additional_info" class="form-label">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>




</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MyTechCO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        /* Contact Form Styles */
        .contact-form-container {
            background: linear-gradient(135deg, #1e1e2f, #4e4e70);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: 50px auto;
        }

        .contact-form-container h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            color: #1e90ff;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
        }

        .form-group label {
            font-size: 1.2rem;
            color: #1e90ff;
            margin-bottom: 10px;
            display: block;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #2c2c4a;
            color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #1e90ff;
            outline: none;
            background-color: #3f3f6c;
        }

        .form-group textarea {
            resize: none;
            height: 150px;
        }

        .btn-submit {
            display: block;
            background-color: #1e90ff;
            color: white;
            padding: 12px 24px;
            font-size: 1.1rem;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            margin: 0 auto;
        }

        .btn-submit:hover {
            background-color: #005b96;
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-form-container {
                padding: 30px;
                margin: 20px;
            }

            .contact-form-container h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <div class="contact-form-container">
        <h1>Contact Us</h1>
        <form action="submit_contact.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Send Message</button>
        </form>
    </div>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MyTechCO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        /* Contact Form Styles */
        .contact-form-container {
            background: linear-gradient(135deg, #000, #3f3f6c);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: 50px auto;
        }

        .contact-form-container h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: white;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
        }

        .form-group label {
            font-size: 1.2rem;
            color: white;
            margin-bottom: 10px;
            display: block;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #2c2c4a;
            color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #1e90ff;
            outline: none;
            background-color: #3f3f6c;
        }

        .form-group textarea {
            resize: none;
            height: 150px;
        }

        .btn-submit {
            display: block;
            background-color: #1e90ff;
            color: white;
            padding: 12px 24px;
            font-size: 1.1rem;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            margin: 0 auto;
        }

        .btn-submit:hover {
            background-color: #005b96;
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-form-container {
                padding: 30px;
                margin: 20px;
            }

            .contact-form-container h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <div class="contact-form-container">
        <h1>Contact Us</h1>
        <form action="submit_contact.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Send Message</button>
        </form>
    </div>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>

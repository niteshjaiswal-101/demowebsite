<?php
// This PHP block is optional; it's used to set a dynamic title or include other PHP logic.
$pageTitle = "Welcome to My Landing Page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to a CSS file for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1><?php echo $pageTitle; ?></h1>
        </header>
        <main>
            <p>Welcome to our amazing landing page! We are thrilled to have you here. Explore our offerings and get in touch with us.</p>
            <a href="#contact" class="cta-button">Get in Touch</a>
        </main>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> My Landing Page. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>

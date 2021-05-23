<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runestone | About Us</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/forms.css">
</head>
<body>
<?php require_once("../navigation.php") ?>

<main>
    <section class="container">
        <h1>Contact Us</h1>
            <form id="contact" class="form" action="contact.php?success=1" method="POST">
                <fieldset>
                    <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Email Address" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Type your message here..." tabindex="4" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit">Submit</button>
                </fieldset>
            </form>
            <?php
                if (isset($_GET["success"])){
                    echo "<p class='get_back_msg'>Thank you for contacting us! We'll get back to you as soon as possible.</p>";
                }
            ?>
    </section>
    <aside>
        <img width="40" height="40" src="../images/facebook.svg" alt="facebook link">
        <img width="40" height="40" src="../images/twitter.svg" alt="facebook link">
    </aside>
</main>
            <footer class="contact__footer">
                <div class="contact__info">
                    <p>We are located</p>
                    <p>Pedersensgate 75, <br> Stavdal, Norway</p>
                </div>
                <div class="contact__info">
                    <p>Working hours</p>
                    <p>From 9:00 to 18:00 <br> </p>
                </div>
                <div class="contact__info">
                    <p>Working days</p>
                    <p>Monday -- Friday <br></p>
                </div>
            </footer>
</body>
</html>
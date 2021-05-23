<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runestone | Sign In</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/forms.css">
</head>
<body>
<?php require_once("../navigation.php") ?>

<main>
    <section class="container">
        <h1>Login</h1>
        <form id="contact" class="form" action="../../src/login.php" method="POST">
            <fieldset>
                <input placeholder="Your Email Address" type="email" tabindex="1" name="email" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Password" type="password" tabindex="2" name="password" required >
            </fieldset>
            <fieldset>
                <button name="submit" type="submit">Submit</button>
            </fieldset>
        </form>
        <?php
        if (isset($_GET["fail"])) {
            echo "<p class='error_message'>Something went wrong. Please try again later.</p>";
        }
        ?>
        <p>Don't have an account? <a class="link" href="register.php">Sign up!</a> </p>
    </section>
</main>

<?php require_once("../common/footer.php") ?>
</body>
</html>
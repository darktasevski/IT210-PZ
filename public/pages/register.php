<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runestone | Signup</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/forms.css">
</head>
<body>
<?php require_once("../navigation.php") ?>

<?php
    if (isset($_SESSION["email"])){
        header("Location: ../index.php");
    }
?>

<main>
    <section class="container">
        <h1>Signup</h1>
        <form id="contact" class="form" action="../../src/register.php" method="POST">
            <fieldset>
                <input placeholder="Your Name" type="text" tabindex="1" name="name" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Surname" type="text" tabindex="2" name="surname" required>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="email" tabindex="3" name="email" required>
            </fieldset>
            <fieldset>
                <input placeholder="Your Password" type="password" tabindex="3" name="password" required>
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number (optional)" type="tel" tabindex="4" name="phone">
            </fieldset>
            <fieldset>
                <input placeholder="Your Shipping address" type="text" tabindex="5" name="address" required>
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
        <p>Already have an account? <a class="link" href="login.php">Login!</a> </p>
    </section>
</main>

<?php require_once("../common/footer.php") ?>
</body>
</html>
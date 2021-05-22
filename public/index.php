<?php
define('ROOT_PATH', __DIR__);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runestone | Unique Authentic Jewelry</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/fonts.css">
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>

<img src="./images/cartographer.png" alt="bg pattern" class="bg_image">

<?php require_once("navigation.php") ?>

<div class="img__container img__featured">
    <img width="400" height="400" src="./images/gugnir_1.png" alt="Gugnir image">
</div>
<div class="img__container img_alternate">
    <img width="370" height="370" class="hero__alt" src="./images/gugnir_2.png" alt="Gugnir image">
</div>
<div class="img__container img_alternate_2">
    <img width="400" height="400" class="hero__alt" src="./images/gugnir_2.png" alt="Gugnir image">
</div>
<div class="img__container img_alternate_3">
    <img width="320" height="320" class="hero__alt" src="./images/gugnir_1.png" alt="Gugnir image">
</div>
<main>
    <section class="hero__message">
        <p>Jewelry is something that reflects the essence of a human being during the tens of thousands of years.</p>
        <p><em> Since ancient times, people wear pendants, amulets, bracelets and rings... <span class="h__underline">These pieces show people's individuality,</span>
            nationality, <span class="h__underline">religious beliefs, and social status.</span>
            They give protection, inspire confidence and, of course, simply adorn men and women.</em></p>
        <p class="link"><i>ß </i><a href="#">About Us</a></p>
    </section>
</main>

<?php require_once("common/footer.php") ?>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RuneStone | Unique Authentic Jewelry</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/fonts.css">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/slider.css">
</head>
<body>
<?php require_once("navigation.php") ?>

<div class="img__container img__featured">
    <img src="./images/gugnir_1.png" alt="Gugnir image">
</div>
<div class="img__container img_alternate">
    <img class="hero__alt" src="./images/gugnir_2.png" alt="Gugnir image">
</div>
<div class="img__container img_alternate_2">
    <img class="hero__alt" src="./images/gugnir_2.png" alt="Gugnir image">
</div>
<div class="img__container img_alternate_3">
    <img class="hero__alt" src="./images/gugnir_1.png" alt="Gugnir image">
</div>
<main class="homepage">
    <section class="hero">
        <section class="hero__message">
            <p>Jewelry is something that reflects the essence of a human being during the tens of thousands of years.</p>
            <p><em> Since ancient times, people wear pendants, amulets, bracelets and rings... <span class="h__underline">These pieces show people's individuality,</span>
                    nationality, <span class="h__underline">religious beliefs, and social status.</span>
                    They give protection, inspire confidence and, of course, simply adorn men and women.</em></p>
            <p class="link">&#5833;<a href="pages/about.php">About Us</a></p>
        </section>
        <a href="#featured">
            <img class="arrow_down bounce" height="32" width="32" src="images/ChevronDownCircle.svg" alt="Chevron down">
        </a>
    </section>

    <section id="featured" class="featured">
        <h2 class="featured__title">Featured products</h2>
        <p class="featured__subtitle"> Current favorites in our collection!</p>
        <div id="slider" class="slider">
            <div class="wrapper">
                <div id="slides" class="slides">
                    <?php
                    require_once('../src/common/connection.php');
                    $conn = connect();

                    $sql = "SELECT * FROM jewelry ORDER BY RAND() LIMIT 6";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch()) {
                        echo '<div class="slide">
                            <img class="featured__item__img" id="'.$row["id"].'" src="'.$row["image_uri"].'" alt="image" />
                            <p class="featured__item__title">'. $row["name"] .'</p>
                        </div>';
                    }
                    ?>
                </div>
            </div>
            <a id="prev" class="control prev"></a>
            <a id="next" class="control next"></a>
        </div>
    </section>
</main>

<?php
    require_once("common/footer.php");

    if (isset($_SESSION["name"])){
        echo '<div class="greeting">
            <p>Hello, '.$_SESSION["name"].'.</p>
            <p>Welcome to our shop!</p>
        </div>';
    }
?>

<script src="scripts/slider.js"></script>

<script>
    const featuredSlides = document.getElementById("slides");

    featuredSlides.addEventListener('click', function (e) {
        if (e.target.id) {
            window.location.href = `pages/product.php?id=${e.target.id}`;
        }
    })
</script>

</body>
</html>
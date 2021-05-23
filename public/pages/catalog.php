<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runestone | Jewelry Catalog</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/catalog.css">
    <link rel="stylesheet" href="../styles/social_bar.css">
</head>
<body>
<?php require_once("../navigation.php") ?>

<?php require_once("../common/social_bar.html") ?>

<main>
    <section class="catalog">
        <h2>Product Catalog</h2>
        <div class="catalog__container">
        <?php
            require_once('../../src/common/connection.php');
            $conn = connect();

            $sql = "SELECT id, name, image_uri FROM jewelry";
            $result = $conn->query($sql);

            while ($row = $result->fetch()) {
                echo '<div class="catalog__item">
                        <img src="'.$row["image_uri"].'" id="'.$row["id"].'" alt="catalog image" class="catalog__item__image">
                        <p class="catalog__item__title">'.$row["name"].'</p>
                     </div>';
            }
        ?>
        </div>
    </section>
</main>

<script>
    const catalog = document.getElementsByClassName("catalog__container")[0];

    catalog.addEventListener('click', function (e) {
        if (e.target.id) {
            window.location.href = `product.php?id=${e.target.id}`;
        }
    })
</script>
</body>
</html>
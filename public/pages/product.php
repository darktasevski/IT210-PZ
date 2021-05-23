<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runestone | About Us</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/social_bar.css">
    <link rel="stylesheet" href="../styles/product.css">
</head>
<body>
<?php require_once("../navigation.php") ?>

<?php require_once("../common/social_bar.php") ?>

<main>
    <section class="about">
        <?php
            if (isset($_GET["id"]) && filter_var($_GET["id"], FILTER_VALIDATE_INT)){
                require_once('../../src/common/connection.php');
                $conn = connect();

                $stmt = $conn->prepare("SELECT * FROM jewelry WHERE id=?");
                $stmt->execute([$_GET["id"]]);
                $row = $stmt->fetch();

                if ($row) {
                    echo '<div class="product">
                        <h2 class="product__title">'.$row["name"].'</h2>
                        <div class="product_layout">                      
                            <img src="'.$row["image_uri"].'" alt="image" class="product__image" />
                            <div>
                                <p class="product__description">'.$row["description"].'</p>
                                <p class="product__price">Price: '.$row["price"].'&#8364;</p>
                            </div>
                        </div>
                    </div>';
                } else {
                    header("Location: ../index.php");
                }
            } else {
                header("Location: ../index.php");
            }
        ?>
    </section>

</main>
</body>
</html>
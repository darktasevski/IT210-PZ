<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runestone | Jewelry Catalog</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<img src="../images/cartographer.png" alt="bg pattern" class="bg_image">

<?php require_once("../navigation.php") ?>

<main>
    <section class="grid">
        <?php
            require_once('../../src/common/connection.php');
            $conn = connect();

            $sql = "SELECT * FROM jewelry";
            $result = $conn->query($sql);


            while ($row = $result->fetch()) {
                echo '<div class="card">
                <img height="200" width="200" id="'.$row["id"].'" src="'.$row["image_uri"].'" alt="image" />
                '. $row["name"] .'</div>';
            }

        ?>
    </section>
</main>

<?php require_once("../common/footer.php") ?>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/forms.css">
    <link rel="stylesheet" href="../styles/tabs.css">
</head>
<body>
<img src="../images/cartographer.png" alt="bg pattern" class="bg_image">

<?php require_once("../navigation.php") ?>

<main>
    <section class="container">
        <div class="tabs">
            <input type="radio" name="tab" id="tab1" aria-controls="add_new" checked>
            <label for="tab1">Add new</label>

            <input type="radio" name="tab" id="tab2" aria-controls="edit">
            <label for="tab2">Edit</label>

            <div class="tab-panels">
                <section id="add_new" class="tab-panel">
                    <h3 class="h__center_text">Add new jewelry piece to catalog</h3>
                    <form id="contact" class="form" action="../../src/new_jewel.php" method="POST">
                        <fieldset>
                            <input placeholder="Piece name" type="text" tabindex="1" name="name" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Piece price in euros" min="1" type="number" tabindex="2" name="price" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Piece image URL" type="email" tabindex="3" name="image_uri" required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Piece Description..." tabindex="4"></textarea>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit">Submit</button>
                        </fieldset>
                    </form>
                </section>

                <section id="edit" class="tab-panel">
                    <h3 class="h__center_text">Edit existing jewelry piece</h3>
                    <form id="contact" class="form" action="../../src/edit_jewel.php" method="POST">
                        <fieldset>
                            <input placeholder="Piece name" type="text" tabindex="1" name="name" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Piece price" min="1" type="number" tabindex="2" name="price" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Piece image" type="email" tabindex="3" name="image_uri" required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Piece Description..." tabindex="4"></textarea>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit">Submit</button>
                        </fieldset>
                    </form>
                </section>
            </div>
        </div>
        <?php
        if (isset($_GET["fail"])) {
            echo "<p class='error_message'>Something went wrong. Please try again later.</p>";
        }
        ?>
    </section>
</main>

<?php require_once("../common/footer.php") ?>
</body>
</html>
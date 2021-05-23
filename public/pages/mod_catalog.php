<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RuneStone | Admin panel</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/forms.css">
    <link rel="stylesheet" href="../styles/tabs.css">
</head>
<body>
<?php require_once("../navigation.php") ?>

<?php
if (!isset($_SESSION["is_employee"]) || $_SESSION["is_employee"] == 0){
    header("Location: ../index.php");
}
?>
    <ul id="productsList" style="visibility: hidden; pointer-events: none">
        <?php
            require_once('../../src/common/connection.php');
            $conn = connect();

            $sql = "SELECT * FROM jewelry";
            $result = $conn->query($sql);

            while ($row = $result->fetch()) {
                echo '<li class="productsList__item" id="'.$row["id"].'"
                        data-name="'.$row["name"].'"
                        data-price="'.$row["price"].'"
                        data-description="'.$row["description"].'"
                        data-image-uri="'.$row["image_uri"].'"
                        >
                        '.$row["name"].'
                      </li>';
            }
        ?>
    </ul>

<main>
    <section class="container">
        <div class="tabs">
            <input type="radio" name="tab" id="addTab" aria-controls="add_new" checked>
            <label for="addTab">Add new</label>

            <input type="radio" name="tab" id="editTab" aria-controls="edit">
            <label for="editTab">Edit</label>

            <div class="tab-panels">
                <section id="add_new" class="tab-panel">
                    <h3 class="h__center_text">Add new jewelry piece to catalog</h3>
                    <form id="contact" class="form" action="../../src/add_jewel.php" method="POST">
                        <fieldset>
                            <input placeholder="Piece name" type="text" tabindex="1" name="name" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Piece price in euros" min="1" type="number" tabindex="2" name="price" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Piece image URL" type="text" tabindex="3" name="image_uri" required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Piece Description..." tabindex="4" name="description"></textarea>
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
                            <input placeholder="Piece name" type="text" tabindex="1" name="name" id="nameInput" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Piece price" min="1" type="number" tabindex="2" name="price" id="priceInput" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Piece image URL" type="text" tabindex="3" name="image_uri" id="uriInput" required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Piece Description..." id="descInput" tabindex="4" name="description"></textarea>
                        </fieldset>
                        <input type="hidden" id="idInput" name="id" hidden />
                        <input type="checkbox" id="shouldDelete" value="false" name="should_delete" hidden />
                        <div class="btnsContainer">
                            <fieldset>
                                <button type="submit">Submit</button>
                            </fieldset>
                            <fieldset>
                                <button id="deleteBtn" type="submit">Delete product</button>
                            </fieldset>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <?php
        if (isset($_GET["fail"])) {
            echo "<p class='error_message'>Something went wrong. Please try again later.</p>";
        } else if (isset($_GET["success"])) {
            echo "<p class='success_message'>Operation was executed successfully.</p>";
        }
        ?>
    </section>
</main>

<?php require_once("../common/footer.php") ?>

<script>
    const addNewTab = document.getElementById("addTab");
    const editTab = document.getElementById("editTab");
    const deleteBtn = document.getElementById("deleteBtn");
    const shouldDelete = document.getElementById("shouldDelete");
    const productsList = document.getElementById("productsList");

    const nameInput = document.getElementById("nameInput");
    const priceInput = document.getElementById("priceInput");
    const uriInput = document.getElementById("uriInput");
    const descInput = document.getElementById("descInput");
    const idInput = document.getElementById("idInput");

    addNewTab.addEventListener('click', e => {
        productsList.style.visibility = 'hidden';
        productsList.style.pointerEvents = 'none';
    })

    editTab.addEventListener('click', e => {
        productsList.style.visibility = 'visible';
        productsList.style.pointerEvents = 'all';
    })

    deleteBtn.addEventListener('click', e => {
        shouldDelete.checked = true;
        shouldDelete.value = true;
    })

    productsList.addEventListener('click', e => {
        if (e.target.id){
            idInput.value = e.target.id;
            nameInput.value = e.target.dataset.name;
            priceInput.value = e.target.dataset.price;
            uriInput.value = e.target.dataset.imageUri;
            descInput.value = e.target.dataset.description;
        }
    })


    const qp = new URLSearchParams(window.location.search);
    const isEdit = qp.get("edit");
    const isAdd = qp.get("add");
    if (isEdit){
        console.log(isEdit);
        editTab.checked = true;
        productsList.style.visibility = 'visible';
        productsList.style.pointerEvents = 'all';
    } else if(isAdd){
        console.log(isAdd);
        addNewTab.checked = true;
    }
</script>
</body>
</html>
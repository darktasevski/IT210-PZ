<?php
require_once('common/connection.php');

if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image_uri'])) {
    $conn = connect();

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image_uri = $_POST['image_uri'];
    $description = null;
    $id = $_POST['id'];

    if (isset($_POST['description'])){
        $description = $_POST['description'];
    }

    $stmt = $conn->prepare("UPDATE jewelry j 
                            SET j.name=:name, j.price=:price, j.image_uri=:image_uri, j.description=:description 
                            WHERE j.id =:id");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":image_uri", $image_uri);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":id", $id);

    if($stmt->execute()) {
        header('Location: ../public/pages/mod_catalog.php?success=1');
    } else {
        header('Location: ../public/pages/mod_catalog.php?fail=1');
    }
} else {
    header('Location: ../public/pages/mod_catalog.php?fail=1');
}

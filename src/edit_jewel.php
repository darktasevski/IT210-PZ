<?php
require_once('common/connection.php');
require_once('common/entitizeEmojis.php');

if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image_uri']) && isset($_POST['id'])) {
    $conn = connect();

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $image_uri = filter_var($_POST['image_uri'], FILTER_SANITIZE_URL);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $description = null;

    if (isset($_POST['description'])){
        $description = emoji_entitizer(filter_var($_POST['description'], FILTER_SANITIZE_STRING));
    }

    $stmt = null;

    if (isset($_POST["should_delete"])){
        $stmt = $conn->prepare("DELETE FROM jewelry WHERE id=:id");
        $stmt->bindParam(":id", $id);
    } else {
        $stmt = $conn->prepare("UPDATE jewelry j 
                                SET j.name=:name, j.price=:price, j.image_uri=:image_uri, j.description=:description 
                                WHERE j.id =:id");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":image_uri", $image_uri);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":id", $id);
    }

    if($stmt->execute()) {
        header('Location: ../public/pages/mod_catalog.php?success=1&edit=true');
    } else {
        header('Location: ../public/pages/mod_catalog.php?fail=1&edit=true');
    }
} else {
    header('Location: ../public/pages/mod_catalog.php?fail=1&edit=true');
}

<?php
require_once('common/connection.php');
require_once('common/entitizeEmojis.php');

if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image_uri'])) {
    $conn = connect();

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $image_uri = filter_var($_POST['image_uri'], FILTER_SANITIZE_URL);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
    $description = null;

    if (isset($_POST['description'])){
        $description = emoji_entitizer(filter_var($_POST['description'], FILTER_SANITIZE_STRING));
    }

    $stmt = $conn->prepare("INSERT INTO jewelry (name, price, image_uri, description)
                            VALUES (:name, :price, :image_uri, :description)");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":image_uri", $image_uri);
    $stmt->bindParam(":description", $description);

    if($stmt->execute()) {
        header('Location: ../public/pages/mod_catalog.php?success=1&add=true');
    } else {
        header('Location: ../public/pages/mod_catalog.php?fail=1&add=true');
    }
} else {
    header('Location: ../public/pages/mod_catalog.php?fail=1&add=true');
}

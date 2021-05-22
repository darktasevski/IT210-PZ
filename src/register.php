<?php
require_once('common/connection.php');

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['address'])) {
    $conn = connect();

    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = md5($password);
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $address = $_POST["address"];
    $tel = null;

    if (isset($_POST["phone"])){
        $tel = $_POST["phone"];
    }

    $stmt = $conn->prepare("INSERT INTO clients (email, password, name, surname, telephone, address)
                           VALUES (:email, :password, :name, :surname, :telephone, :address)");
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":surname", $surname);
    $stmt->bindParam(":telephone", $tel);
    $stmt->bindParam(":address", $address);

    if ($stmt->execute()) {
        session_start();
        $userID = $conn->lastInsertId();
        $_SESSION["id"] = $userID;
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;
        header("Location: ../public/index.php");
    } else {
        header("Location: ../public/pages/register.php?fail=1");
    }
}

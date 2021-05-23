<?php
require_once('common/connection.php');

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['address'])) {
    $conn = connect();
    $email = null;

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email = $_POST['email'];
    } else {
        header("Location: ../public/pages/login.php?fail=1");
    }

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $surname = filter_var($_POST['surname'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

    $password = $_POST["password"];
    $password = md5($password);
    $tel = null;

    if (isset($_POST["phone"])){
        $tel = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
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
} else {
    header("Location: ../public/pages/register.php?fail=1");
}


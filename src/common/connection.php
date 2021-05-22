<?php
function connect() {
    try {
        $dbHost = "db-mysql-fra1-it250-do-user-2992259-0.b.db.ondigitalocean.com";
        $dbPort = 25060;
        $dbname = "store";
        $charset = 'utf8' ;

        $dsn = "mysql:host={$dbHost};port={$dbPort};dbname={$dbname};charset={$charset}";
        $username = "doadmin";
        $password = "yuos9yrjdh5ls3rb";

        $con = new PDO($dsn, $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
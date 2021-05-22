<?php
$dbHost = "db-mysql-fra1-it250-do-user-2992259-0.b.db.ondigitalocean.com";
$dbPort = 25060;
$dbname = "defaultdb";
$charset = 'utf8' ;

$dsn = "mysql:host={$dbHost};port={$dbPort};dbname={$dbname};charset={$charset}";
$username = "admin";
$password = "ZOEvILo8aEVbIbJK0Z9f";

$pdo = new PDO($dsn, $username, $password);

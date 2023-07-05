<?php

$host = "mysql:host=localhost;dbname=tuyacademy";
$user = "ec2-user";
$pass = "Passw0rd";

    try {
        $dbc = new PDO($host, $user, $pass);
        $dbc->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Cannot connect: " . $e->getMessage() . "<br>";
        die();
    }


?>
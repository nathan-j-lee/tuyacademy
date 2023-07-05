<?php

include '../classes/db.class.php';
include '../classes/phpmailer.class.php';

date_default_timezone_set("America/Los_Angeles"); 

try {
    $name = strtolower(htmlspecialchars($_POST['fullname']));
    $email = strtolower(htmlspecialchars($_POST['email']));
    $phone = strtolower(htmlspecialchars($_POST['phone']));
    $comment = strtolower(htmlspecialchars($_POST['comment']));
    
    // prepare statements
    $stmt = $dbc->prepare("INSERT INTO contacts 
            (name, email, phone, comment, date) 
            VALUES (:name, :email, :phone, :comment, :currentTime)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':currentTime', date('Y-m-d h:i:s'));
    $stmt->execute();

} catch (Exception $e) {
    echo "DB conn failed: " . $e->getMessage() . "<br>";
}

try {
    emailContactForm($name, $email, $phone, $comment);
} catch (Exception $e) {
    echo "Email failed to send: " . $e->getMessage() . "<br>";
}

?>

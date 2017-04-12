<?php

$DB = new PDO("mysql:host=cias.rit.edu;dbname=amh5267", 'amh5267', 'IPVtwxhBaI');
$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['comment']) && !empty($_POST['comment'])) {
    $comment = $_POST['comment'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $query = $DB->prepare("INSERT INTO commentSection (comment, first_name, last_name) VALUES (:comment :first_name :last_name)");
    $query->bindParam(':comment', $comment);
    $query->bindParam(':first_name', $first_name);
    $query->bindParam(':last_name', $last_name);

    $query->execute();
}
?>



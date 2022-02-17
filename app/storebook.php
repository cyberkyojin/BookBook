<?php

$con = new PDO("mysql:host=localhost;dbname=bookbook", "root", "Minecraft1!");

$stmt = $con->prepare("INSERT INTO books(title, author, release_year) VALUES(:title, :author, :release_year)");
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':author', $_POST['author']);
$stmt->bindValue(':release_year', $_POST['release_year']);
$stmt->execute();

header('Location: /');

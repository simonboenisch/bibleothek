<?php

$name = $_POST['name'];
$class = $_POST['class'];
$von = $_POST['von'];
$bis = $_POST['bis'];

$db = new SQLite3("data.db");

$stmt = $db->prepare('INSERT INTO banned (name, class, von, bis) VALUES (:name, :class, :von, :bis)');

$stmt->bindValue(':name', $name, SQLITE3_TEXT);
$stmt->bindValue(':class', $class, SQLITE3_TEXT);
$stmt->bindValue(':von', $von, SQLITE3_TEXT);
$stmt->bindValue(':bis', $bis, SQLITE3_TEXT);

$result = $stmt->execute();

header("Location: index.php");
exit;
<?php
$name = $_POST['name'];

$db = new SQLite3("data.db");
$db->exec("DELETE FROM banned WHERE name = '$name'"); 
header("Location: index.php");
exit;

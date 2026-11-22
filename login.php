<?php

$password = $_POST["password"];


if($password == "1234"){
    session_start();
    $_SESSION['logedin'] = true;
    header("Location: index.php");
}

exit;
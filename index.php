<?php session_start(); ?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Bibliothek</h2>
    </header>
    <main>
        <?php
        if ($_SESSION['logedin'] ?? '' === true) {
        } else {
            echo '<form action="login.php" method="post" class="forms">
                    <label for="password">Passwort:</label>
                    <input type="password" name="password">
                    <input type="submit">
                </form>';
        }
        ?>
    </main>
</body>

</html>
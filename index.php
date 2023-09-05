<?php
session_start();
    if (isset($_SESSION["user_id"])) {
        
        $mysqli = require __DIR__ . "/database.php";

        $sql = "SELECT * FROM webshop_users WHERE id = {$_SESSION["user_id"]}";

        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Home</title>
</head>
<body>
    <center>
        <h1>Home</h1>

        <?php if (isset($user)): ?>
            <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
            <br>
            <p><a href="logout.php">Log out!</a></p>
        <?php else: ?>
            <p><a href="login.php">Log in</a> or <a href="signup.html">signup</a></p>
        <?php endif ?>
    </center>

</body>
</html>
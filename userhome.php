<?php
    session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is user page</h1>
    <?php echo $_SESSION["username"] ?>

    <a href="logout.php">Log out</a>
</body>
</html>
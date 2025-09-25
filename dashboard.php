<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    if ($_SESSION['status'] != "login") {
        header('location: index.php?pesan=login-dulu');
    }
    ?>
    <h2>Selamat Datang <b><?= $_SESSION['user'] ?></b></h2>
    <br>
    <br>
    <a href="logout.php">Logout</a> || <a href="index.php">Dashboard</a>

</body>

</html>
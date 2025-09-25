<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN SEDERHANA</title>
</head>

<body>
    <?php
    session_start();

    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == 'login-dulu') {
            echo 'Tolong Login Terlebih Dahulu !!';
        } elseif ($_GET['pesan'] == 'failed') {
            echo 'Maaf Cek Kembali Username atau Password Anda !!';
        } elseif ($_GET['pesan'] == 'logout') {
            echo 'Terimakasih, Anda telah Logout !!';
        }
    }

    if (isset($_POST['log'])) {
        $username = $_POST['uname'];
        $password = $_POST['pass'];

        if ($username == 'kamal' && $password == 'kamal123') {

            $_SESSION['user'] = $username;
            $_SESSION['status'] = 'login';

            header('location:dashboard.php');
        } else {
            header('location:index.php?pesan=failed');
        }
    }

    if (isset($_SESSION['status'])) {
        header("location: dashboard.php");
    }

    print_r($_SESSION);
    ?>

    <form action="" method="POST">
        <div>
            <input type="text" name="uname" id="" placeholder="Masukan Username Anda..">
        </div>
        <div>
            <input type="password" name="pass" id="" placeholder="Masukan Password Anda..">
        </div>
        <div>
            <input type="submit" name="log" value="Login">
        </div>
    </form>
</body>

</html>
<style>
body {
    background-image: url(./hundred-euro.jpg);
}
form {
    text-align: center;
}
</style>
<?php
require __DIR__ . '/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['logout'])) {
        //2. Atjungia juseri
        unset($_SESSION['logged'], $_SESSION['name']);
        setMessage('Iki susitikimo');
        header('Location: http://localhost/namu_darbai/08bankas/login.php');
        die;
    }
        //1. Rodyti forma
}
else {
    //2. Tikrint prisijungimo duomenis
    $darbuotojai = json_decode( file_get_contents(__DIR__.'/darbuotojai.json'), 1);
    foreach ($darbuotojai as $darbuotojas) {
        if ($darbuotojas['name'] == $_POST['name']) {
            if ($darbuotojas['pass'] == md5($_POST['pass'])) {
                $_SESSION['logged'] = 1;
                $_SESSION['name'] = $darbuotojas['name'];
                setMessage('Labas, '.$darbuotojas['name']);
                header('Location: http://localhost/namu_darbai/08bankas/');
                die;
            }
        }
    }
    setMessage('Labai Blogai');
    header('Location: http://localhost/namu_darbai/08bankas/login.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body class="">
    <?php include __DIR__ . '/msg.php' ?>
    <h1>Login</h1>
    <a class="btn btn-secondary" href="http://localhost/namu_darbai/08bankas/bankas.php">Pagrindinis</a>
    <form class="center" action="http://localhost/namu_darbai/08bankas/login.php" method="post">
    <input style="border: 2px solid #000000" type="text" name="name" placeholder="Ivesti varda">
    <input style="border: 2px solid #000000" type="password" name="pass" placeholder="Ivesti slaptazodi">
    <button class="btn btn-success" type="submit">Prisijungti</button>
    </form>
</body>
</html>
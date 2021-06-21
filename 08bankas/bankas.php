<style>
h1 {
    text-align: center;
    font-size: 45px;
    font-color: black;
}
a {
    text-align: center; 
}
body {
    background-image: url(./one-hundred.jpg);
}
div {
    text-align: center;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulinis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body class="">
    <h1 class="title">EuroBankas</h1>
    <div>
    <?php if (!isset($_SESSION['logged'])) : ?>
    <a class="btn btn-secondary" href="http://localhost/namu_darbai/08bankas/login.php">Login</a>
    <?php else : ?>
    <a href="http://localhost/namu_darbai/08bankas/login.php?logout">Logout</a>
    </div>
    <?php endif ?>
</body>
</html>
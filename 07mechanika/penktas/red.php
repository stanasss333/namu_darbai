<?php

if (!empty($_GET))  {
    header('Location: ./blue.php');
    die; // get
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: red">
    <form action="" method="GET">
        <a href="?page=2">Nuoroda i save</a>
    </form>
</body>
</html>

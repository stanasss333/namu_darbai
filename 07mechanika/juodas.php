<?php
_d($_SERVER['REQUEST_METHOD']);

$color = 'black';
if(isset($_GET['color'])) {
    $color = 'red';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juodas</title>
</head>
<h1>
<body style="background-color: <?=$color?>; ">
<a href="./juodas.php">juodas</a>
<a href="./juodas.php?color=1">raudonas</a>
 </h1>   
</body>
</html>
<?php
_d($_SERVER['REQUEST_METHOD']);

$color = 'green';
if(isset($_GET['color'])) {
    $color = '#' . $_GET['color'];
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

<body style="background-color: <?=$color?>; ">
 
</body>
</html>
<form style="margin:30px;" action="?color=" method="get">
    <h3>GET</h3>
    Irasyti spalva: <input type="text" name="color">
    <button type="submit">žiūrėti</button>
</form>
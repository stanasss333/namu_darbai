<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//_d($_POST, 'issiusti duomenys');

header('Location: http://localhost/namu_darbai/07mechanika/sestas.php'); // get
die;

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
<body>  
<form style="margin:30px;" action="http://localhost/namu_darbai/07mechanika/sestas.php" method="get">
    <button type="submit">GET</button>
</form>
<form style="margin:30px;" action="http://localhost/namu_darbai/07mechanika/sestas.php" method="post">
    <button type="submit">POST</button>
</form>
</body>
</html>
<?php
_d($_SERVER['REQUEST_METHOD']);
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo '<body style="background-color: green">';
} elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<body style="background-color: yellow">';
}

?>

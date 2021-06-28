<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
<input type="text" name="_0" ><br>
<input type="text" name="_1" ><br>
<input type="text" name="_2" ><br>
<h1>Result</h1>
<button type="submit">Go</button><br>
<button type="reset">Reset</button>
</form>

</body>
</html>
<?php
if(!empty($_GET)) {
    $mas = [];
    if(is_numeric($_GET['_0'])) {
        $mas[] = $_GET['_0'];
    }
    if(is_numeric($_GET['_1'])) {
        $mas[] = $_GET['_1'];
    }
    if(is_numeric($_GET['_2'])) {
        $mas[] = $_GET['_2'];
    }
}
rsort($mas);
print_r($mas);

?>

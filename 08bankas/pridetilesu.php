<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prideti lesu</title>
</head>
<body>
    <?php include __DIR__ . '/menu.php' ?>
    <?php $id = $_GET['id'] ?? 0 ?>
    <form style="margin:30px;" action="?action=pridetilesu&id=<?= $id ?>" method="post">
        <input type="text" name="suma">
        <button type="submit">Prideti</button>
    </form>
</body>
</html>
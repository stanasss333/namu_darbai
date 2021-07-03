<?php require DIR.'views/top.php' ?>
<?php include DIR.'views/msg.php' ?>
<h1>Login</h1>
    <a class="btn btn-secondary" href="http://localhost/namu_darbai/bankasObject/bankas.php">Pagrindinis</a>
    <form class="center" action="http://localhost/namu_darbai/bankasObject/login.php" method="post">
    <input style="border: 2px solid #000000" type="text" name="name" placeholder="Ivesti varda">
    <input style="border: 2px solid #000000" type="password" name="pass" placeholder="Ivesti slaptazodi">
    <button class="btn btn-success" type="submit">Prisijungti</button>
    </form>
<?php require DIR.'views/bottom.php' ?>
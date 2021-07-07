<?php require DIR.'views/top.php' ?>
<?php include DIR.'views/menu.php' ?>
<?php //include DIR.'views/msg.php' ?>
    <?php $id = $_GET['id'] ?? 0 ?>
    
    <form style="margin:30px;" action="<?= URL ?>pridetilesu/<?= $id ?>" method="post">
        <input style="border: 2px solid #000000" type="text" name="suma" placeholder="Ivesti suma" pattern="[0-9]{1,}\.[0-9]{2}">
        <button class="btn btn-success"type="submit">Prideti<?= ' '. $id ?></button>
    </form>
<?php require DIR.'views/bottom.php' ?>
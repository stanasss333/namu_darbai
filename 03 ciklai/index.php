<?php

echo '<br>';
echo '<br>';

echo 'Pirmas uzdavinys';
echo '<br>';
$string = str_repeat('*', 400);
echo $string;
echo '<br>';

echo "<p>$string</p>";
<style type="css">
p {
    overflow-wrap: break-word;
}
</style>
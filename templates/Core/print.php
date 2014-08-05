<?php
$db = getdb();
$getRecord = $db->getRow("SELECT * FROM admission WHERE id={$_GET['id']}");
var_dump($getRecord);
?>
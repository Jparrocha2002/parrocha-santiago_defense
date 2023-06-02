<?php
include "../writer.php";

$check = new Writer();
$check->createtTbl();

var_dump($_POST);

echo json_encode($check);
?>
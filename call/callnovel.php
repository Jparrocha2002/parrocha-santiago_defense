<?php
include "../novel.php";

$check = new Novel();
$check->createTbl();

var_dump($_POST);

echo json_encode($check);
?>
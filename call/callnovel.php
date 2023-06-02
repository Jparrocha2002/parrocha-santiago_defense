<?php
include "../novel.php";

$call = new Novel();
$call->createTbl();

var_dump($_GET);

echo json_encode($call);
?>
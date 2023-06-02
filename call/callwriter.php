<?php
include "../writer.php";

$call = new Writer();
$call->createTbl();

var_dump($_GET);

echo json_encode($call);
?>
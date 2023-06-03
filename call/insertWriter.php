<?php
include "../writer.php";

$insert = new Writer();
$insert->createTbl();

if(!empty($_GET['id']))
{
    $insert->insert($_GET['id'], $_GET['fname'],$_GET['lname'],$_GET['mname'], $_GET['gender']);
}

var_dump($_GET);

echo json_encode($insert);
?>
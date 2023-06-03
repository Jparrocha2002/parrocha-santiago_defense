<?php
include "../writer.php";

$insert = new Writer();
$insert->createTbl();

if(!empty($_POST['fname']))
{
    $insert->insert(NULL, $_POST['fname'],$_POST['lname'],$_POST['mname'], $_POST['gender']);
}

var_dump($_POST);

echo json_encode($insert);
?>
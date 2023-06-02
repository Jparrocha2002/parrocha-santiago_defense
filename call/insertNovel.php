<?php
include "../novel.php";

$insert = new Novel();
$insert->createTbl();

if(!empty($_GET['id']))
{
    $insert->insert($_GET['id'], $_GET['title'],$_GET['status'],$_GET['release'], $_GET['desc']);
}

var_dump($_GET);

echo json_encode($insert);
?>
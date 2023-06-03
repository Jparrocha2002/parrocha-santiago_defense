<?php
include "../novel.php";

$insert = new Novel();
$insert->createTbl();
var_dump($insert);
if(!empty($insert))
{
    $insert->insert(NULL, $_POST['title'],$_POST['status'],$_POST['release'], $_POST['desc']);
}

var_dump($_POST);

echo json_encode($insert);

?>
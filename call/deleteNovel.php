<?php
include "../novel.php";

$delete = new Novel();
$delete->createTbl();

if(!empty($_GET['id']))
{
    $delete->delete_novel($_GET['id']);
}

var_dump($_GET);

echo json_encode($delete);

?>
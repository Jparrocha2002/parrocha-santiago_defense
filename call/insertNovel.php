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

// if(!empty($_GET['id']))
// {
//     $values = [
//         'title' => $_GET['title'],
//         'status' => $_GET['status'],
//         'release_date' => $_GET['release'],
//         'description' => $_GET['desc'],  
//     ];
// }

// $status = $insert->insert($values);

// If ($status == true)
// {
//     echo json_encode($status);
// }
?>
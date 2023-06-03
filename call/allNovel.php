<?php
include "../novel.php";

$all = new Novel();
$all->createTbl();
$data = $all->getAll();
var_dump($data);
if(empty($data))
{
    $response = [
        'code' => 404,
        'message' => 'no novel found'
    ];

    echo json_encode($response);
}
var_dump($_POST);
?>
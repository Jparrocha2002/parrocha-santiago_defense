<?php
include "../writer.php";

$all = new Writer();
$all->createTbl();
$data = $all->getAll();

if(empty($data))
{
    $response = [
        'code' => 404,
        'message' => 'no writer found'
    ];

    echo json_encode($response);
}
var_dump($_POST);
?>
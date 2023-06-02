<?php
include "../novel.php";

$all = new Novel();
$all->createTbl();
$items = $all->selectAll();
$data = $items->fetch_all(MYSQLI_ASSOC);

if(empty(data))
{
    $response = [
        'code' => 404,
        'message' => 'no novel found'
    ];

    return json_encode($response);
}
?>
<?php
include "../novel.php";

$all = new Novel();
$all->createTbl();
$data = $all->fetch_novel();

if(empty($data))
{
    $response = [
        'code' => 404,
        'message' => 'no novel found'
    ];

    return json_encode($response);
}
var_dump($_GET);
?>
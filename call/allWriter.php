<?php
include "../writer.php";

$all = new Writer();
$all->createTbl();
$data = $all->fetch_writer();

if(empty($data))
{
    $response = [
        'code' => 404,
        'message' => 'no writer found'
    ];

    return json_encode($response);
}
var_dump($_GET);
?>
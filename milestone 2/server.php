<?php 
include 'db.php';

$data = $discs;

header('content-type: application/json');

echo json_encode($data);
?>
<?php
#Database
include '../db/db.php';

header('Content-Type: application/json');

echo json_encode($disks);
?>
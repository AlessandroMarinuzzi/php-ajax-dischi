<?php
#Database
include './db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link my app.css -->
    <link rel="stylesheet" href="./dist/css/app.css">
    <title>PHP Disks</title>
</head>
<body>
    <?php
    include './templates/header.php';
    include './templates/main.php';
    var_dump($_SERVER);
    ?>
</body>
</html>

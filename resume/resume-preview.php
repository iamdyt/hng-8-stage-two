<?php
    include_once './helper/database.php';
    $db = new ResumeDB();
   $rows =  $db->fetchData($_GET['user']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include_once './include/header.php' ;
        include_once './include/nav.php';    
    ?>
    <title>Resume Preview</title>
</head>
<body>
    <?= print_r($rows) ?>
</body>
</html>
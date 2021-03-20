<!DOCTYPE html>
<html lang="en">
<head>
    <title>2019</title>
    <?php include "header.php"; ?>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php //include "section1.php"; ?>

    <?php include "imgGrid19.php"?>

    <?php //include "content1.php"; ?> 

    
    <!--home page-->
<?php
    include "2021content.php";
    $prntImgArr = prntImgArr($images19);
    echo $prntImgArr;
?>

    <?php include "footer.php"; ?>
</body>
</html>
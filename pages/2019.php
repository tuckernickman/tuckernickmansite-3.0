<!DOCTYPE html>
<html lang="en">
<head>
    <title>2019</title>
    <?php
    require_once dirname(__DIR__) . "/bootstrap.php";
    ?>
    <?php app_include("includes/header.php"); ?>
</head>

<body>
    <?php app_include("includes/menu.php"); ?>

    <?php //include "section1.php"; ?>

    <?php app_include("imgGrid19.php"); ?>

    <?php //include "content1.php"; ?> 

    
    <!--home page-->
<?php
    app_include("2021content.php");
    $prntImgArr = prntImgArr($images19);
    echo $prntImgArr;
?>

    <?php app_include("includes/footer.php"); ?>
</body>
</html>
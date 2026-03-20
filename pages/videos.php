<!DOCTYPE html>
<html lang="en">
<head>
    <title>Videos</title>
    <?php
    require_once dirname(__DIR__) . "/bootstrap.php";
    ?>
    <?php app_include("includes/header.php"); ?>
</head>

<body>
    <?php app_include("includes/menu.php"); ?>

    <!--home page-->
    <?php app_include("biomorphVids.php"); ?> 
    
    <?php app_include("biomorphportal.php"); ?>

    <?php app_include("includes/footer.php"); ?>
</body>
</html>
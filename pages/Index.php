<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tucker Nickman - Portfolio Website 2021</title>
    <?php
    require_once dirname(__DIR__) . '/bootstrap.php';
    app_include('includes/header.php');
    ?>
</head>
 
<body>
    <?php app_include('includes/menu.php'); ?>

    <!--home page-->

    <?php app_include('randimg.php'); ?>

    <?php app_include('mainsection1.php'); ?> 

    <?php app_include('mainsection2.php');?>

    <?php app_include('includes/footer.php'); ?>
</body>
</html>
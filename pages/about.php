<?php
require_once dirname(__DIR__) . '/bootstrap.php';
app_include('includes/datacleanse.php');
auth_start_session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Tucker Nickman</title>
    <?php app_include('includes/header.php'); ?>
</head>

<body>
    <?php
        app_include('includes/menu.php'); 

        app_include('aboutme.php'); 

        // include "experience.php"; 

        app_include('exhibitions.php'); 

        // include "tidbits.php";
        app_include('includes/contactform.php'); 

        app_include('includes/footer.php'); 
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tucker Nickman - User Data</title>
    <?php include "header.php"; ?>
</head>

<body>
    <?php
        include "menu.php"; 

        include "database.php";
        	
        include "datatable.php";

        $ini_data = parse_ini_file("db.ini");

        get_content($ini_data("contact_table"));

        include "footer.php"; 
    ?>
</body>
</html>
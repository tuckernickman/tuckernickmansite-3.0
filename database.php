<?php
$tablename = "form_response";

get_db_connection();

function get_db_connection(){
    $ini_data = parse_ini_file("db.ini");
    print_r($ini_data);

    try {
        $conn = new PDO("mysql:host=ini_data[serverName];dbname=$ini_data[dbName]", $ini_data["userName"], $ini_data["password"]);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

    return $conn;

}

?>
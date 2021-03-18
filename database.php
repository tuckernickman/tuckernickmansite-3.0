<?php
$tableName = "tnickman_form_response";
create_table($tableName);

function get_db_connection(){
    $ini_data = parse_ini_file("db.ini");
    print_r($ini_data);

    try {
        $conn = new PDO("mysql:host=$ini_data[serverName];dbname=$ini_data[dbName]", $ini_data["userName"], $ini_data["password"]);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

    return $conn;

}

function create_table($tableName){
    $conn = get_db_connection();
    try {
        //sql to create table
        //Unique to your form!!
        $sql = "CREATE TABLE $tableName (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(255),
            last_name VARCHAR(255),
            email VARCHAR(255),
            phone VARCHAR(255),
            contact_message VARCHAR(255)
            )";
        // use exec() because no results are returned
            $conn->exec($sql);
            echo "Table $tableName created successfully";
        } catch(PDOException $e) {
            echo "failed to create table: " . $e->getMessage();
    }
    $conn = null;
}

function contact_form_insert($tableName, $fname, $lname, $email, $phone, $message){
    $conn = get_db_connection();
    try{
        $sql = "INSERT INTO $tableName {
            first_name, last_name, email, phone, contact_message
            ) VALUES (
                NOW(), '$fname', '$lname', '$email', '$phone', '$message'
            )";

            $conn->exec($sql);
            echo "<br>Inserted Successfully!";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

function get_content($nameOftable){
    $conn = get_db_connection();
    try{
        $stmt = $conn->prepare("SELECT * FROM $nameOftable");
        $stmt->execute();
        // return $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // set the resulting array to associative
        $result =  $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //prnt_r($stmt->fetchAll());

        foreach($stmt->fetchAll() as $row) {
            foreach($row as $data){
                echo '<br>'.$data;
            }
        }
    } catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}

// function drop_table($nameOftable){
//     $conn = get_db_connection();
//     try {
//         //sql to create table
//         $sql = "DROP TABLE $nameOftable;";

//         //use exec() because no results are returned
//         $conn->exec($sql);
//         echo "Table $nameOftable deleted successfully";
//     } catch(PDOException $e) {
//         echo "<br>" . $e->getMessage();
//     }
//         $conn = null;
// }


?>
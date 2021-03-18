<?php 
// include "database.php";
$tableName = "tnickman_form_response";

$result="";
$fname = $lname = $email = $phone = $txtReasonDetail = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $fname = cleanse_data($_POST['fname']);
    $lname = cleanse_data($_POST['lname']);
    $email = cleanse_data($_POST['email']);
    $phone = cleanse_data($_POST['phone']);
    $txtReasonDetail = cleanse_data($_POST['txtReasonDetail']);

    contact_form_insert($tableName, $fname, $lname, $email, $phone, $message);

    $targetEmail = "tucker.nickman@aol.com";
    $subject = "New Contact Entry from ".$fname." ".$lname;
    $body = "<html><body>New Contact Form Entry: <br>Name: ".$fname." ".$lname."<br>Email: ".$email."<br>Phone: ".$phone."<br>Message: ".$txtReasonDetail."</html></body>";
    
    $headers = "MIME-Version:1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset-iso-8859-1" . "\r\n";

    mail($targetEmail, $subject, $body);
}

function cleanse_data($data){
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
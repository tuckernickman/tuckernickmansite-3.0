<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tucker Nickman - Portfolio Website 2021</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">


</head>
<body>
    <?php include "menu.php"; ?>

<section>
    <div class="container-fluid col" id="aboutContent">
        <div id="textParagraph">
            <p class> Tucker Nickman is an artist, designer and aspiring web developer from Salt Lake City, with ten years of dance and creative experience. After earning their BFA of Stage Dance in 2018, in Berlin, Germany, they left to continue pursuing other creative outlets in Amsterdam and Utah. They are currently based here and working on various ongoing projects.</p>
        </div>
        <div id="textParagraph">
            <button class="btn btn-outline-dark" onclick="myFunction()" id="demo">click here</button>
        </div>
</section>
<section>
    <div class="col">
        <h2>
            Professional Experience
        </h2>
        <h3>
            Host/Busser, <a href="http://copperkitchenslc.com/home" style="padding:0;" target="_blank">Copper Kitchen,</a> Holladay 2019-2020
        </h3>
        <p>
            <?php
                function buildString($stringArray){
                    $result = "";
                    foreach($stringArray as $item){
                        $result .= $item.", ";
                    }
                    return rtrim($result, ", ");
                }
                function buildListString($listArray){
                    $result = "";
                    foreach($listArray as $item_key => $item_value){
                        $result .= $item_key.": ".buildString($item_value)."<br>";
                    }
                    return rtrim($result, "<br>");
                }

                $experience = ["Greeting Guests, Assuring Quality of Experience, Making Reservations, Cleaning, Organizing Seating Arrangements, Serving Guests"];
                $hobbies = ["Inside" => ["Gaming", "Listening to Music", "Making Art"], "Outside" => ["Hiking", "Dancing", "Climbing"]];
            ?>
            <h4>Skills</h4>
            <?php
             echo buildString($experience);
             ?>
            <h2>Hobbies</h2>
            <?php
             echo buildListString($hobbies);
             ?>
        </p>
    </div>
</section>
        <div class="col">
            <table class="table">
            <h2 id="exhibitionsHeader">Exhibitions</h2>
            <tr>
                <td>Catching the Sun (Virtual Exhibition)</td>
                <td>Vampyre Galleri, Berlin, 2020</td>
            </tr>
            <tr>
                <td>The Closet Door Archives</td>
                <td>Sundance Film Festival, Queer Lounge, Salt Lake City, 2020</td>
            </tr>
            <tr>
                <td>Deep Storage</td>
                <td>Group Exhibition, Amsterdam, April, 2019</td>
            </tr>
            <tr>
                <td>STAGE '18</td>
                <td>Improvisational Piece, Amsterdam, 2018</td>
            </tr>
            <tr>
                <td>Amores</td>
                <td>Choreography, Graduation Piece, Berlin, 2018</td>
            </tr>
            </table>

        </div>

        <div class="col">
            <h2> Languages </h2>
            <p id="languages"></p>
        </div>
        
        <div class="col">
            <h2> Resume </h2>
            <a href="assets/pdf/Resume 2020.pdf" download> To download my full resume, click here.</a>
        </div>

        <div class="col">
            <div id="alertBox" class="required-input alert alert-danger alert-dismissable fade show d-none">
                <button type="button" class="close" onclick="closeAlert();">&times;</button>
                <strong>Stop!</strong> Please fill out all of the fields correctly.
            </div>
            <div>
                <h2> Contact </h2>
            </div>

            <form name="contactForm" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" onsubmit="event.preventDefault(); validateForm();">
                
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input id="fname" type="text" name="fname" class="form-control"
                    placeholder="First name" aria-describedby="First name">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input id="lname" type="text" name="lname" class="form-control"
                    placeholder="Last name" aria-describedby="Last name">
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input id="inputEmail" type="email" name="email" class="form-control">
               </div>
               <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input id="phone" type="text" name="phone" class="form-control"
                    placeholder="Phone Number" aria-describedby="Phone Number">
                </div>

                <div class="form-group">
                    <label for="txtReasonDetail">Enter Your Message Here</label>
                    <textarea id="txtReasonDetail" type="text" name="txtReasonDetail" class="form-control"
                    placeholder="Enter Your Message Here" aria-describedby="txtReasonDetail"></textarea>
                </div>
               <div class="col-12">
                <button type="submit" class="btn btn-outline-dark">Submit</button>
              </div>
            </form>
        </div>
    </div>
    
    <?php include "footer.php"; ?>
</body>
</html>

<?php 
$result="";
$fname = $lname = $email = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $fname = cleanse_data($_POST['fname']);
    $lname = cleanse_data($_POST['lname']);
    $email = cleanse_data($_POST['email']);
    $phone = cleanse_data($_POST['phone']);
    $txtReasonDetail = cleanse_data($_POST['txtReasonDetail']);

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
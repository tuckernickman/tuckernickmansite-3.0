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

        <div class="textParagraph">
            <h2> Languages </h2>
            <p id="languages"></p>
        </div>
        
        <div class="textParagraph">
            <h2> Resume </h2>
            <a href="assets/pdf/Resume 2020.pdf" download> To download my full resume, click here.</a>
        </div>

        <div class="col">
            <div id="alertBox" class="alert alert-danger alert-dismissable fade show d-none">
                <button type="button" class="close" onclick="hideAlert();">&times;</button>
                <strong>Stop!</strong> Please fill out all of the fields correctly.
            </div>
            <div class="col">
                <h2> Contact </h2>
            </div>
            <form id="contactForm" class="col-lg-8" method="post">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input id="fname" type="text" class="form-control" placeholder="First name" aria-describedby="First name">
                </div>
                <div class="form-group">
                    <label for="lname">First Name</label>
                    <input id="lname" type="text" class="form-control" placeholder="Last name" aria-describedby="Last name">
                </div>
               <div class="form-group">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input id="inputEmail" type="email" class="form-control">
               </div>
               <div class="col-12">
                <button type="submit" class="btn btn-outline-dark">Submit</button>
              </div>

                  
            </form>
        </div>
    </div>

    <!-- Optional JavaScript
    <script src="js\newscript1.js"></script>
    -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- P5.js script-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/addons/p5.sound.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.14/p5.js"></script>
    <script src="js/namebox.js" ></script>
    <script src="js/alert1.js" ></script>
</body>
</html>
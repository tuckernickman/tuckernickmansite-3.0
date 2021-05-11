<section>
    <div class="col">
        <h2 class="txt-color">
            Professional Experience
        </h2>
        <h3 class="txt-color">
            Host/Busser, <a href="http://copperkitchenslc.com/home" style="padding:0;" target="_blank">Copper Kitchen,</a> Holladay 2019-2020
        </h3>
        <p class="txt-color">
            <?php
                function buildString($stringArray){
                    $result = "";
                    foreach($stringArray as $item){
                        $result .= "<p>".$item.", "."</p>";
                    }
                    return rtrim($result, ", ");
                }
                function buildListString($listArray){
                    $result = "";
                    foreach($listArray as $item_key => $item_value){
                        $result .= "<p>".$item_key.": ".buildString($item_value)."</p>"."<br>";
                    }
                    return rtrim($result, "<br>");
                }

                $experience = ["Greeting Guests, Assuring Quality of Experience, Making Reservations, Cleaning, Organizing Seating Arrangements, Serving Guests"];
                $hobbies = ["Inside" => ["Gaming", "Listening to Music", "Making Art"], "Outside" => ["Hiking", "Dancing", "Climbing"]];
            ?>
            <h2 class="txt-color">Skills</h2>
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
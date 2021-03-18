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
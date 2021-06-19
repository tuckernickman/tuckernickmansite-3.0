<div class="col">
            <div id="alertBox" class="required-input alert alert-danger alert-dismissable fade show d-none">
                <button type="button" class="close" onclick="closeAlert();">&times;</button>
                <p class="txt-color"><strong>Stop!</strong> Please fill out all of the fields correctly.</p>
            </div>
            <div>
<<<<<<< HEAD
                <h2> Contact Tucker </h2>
=======
                <h2 class="txt-color"> Contact Tucker</h2>
>>>>>>> b649c4b90a8f78c0d902bf2970be654d2b40bd0c
            </div>

            <form name="contactForm" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" onsubmit="event.preventDefault(); validateForm();">
                
                <div class="form-group">
                    <label for="fname" class="txt-color">First Name</label>
                    <input id="fname" type="text" name="fname" class="form-control txt-color"
                    placeholder="First name" aria-describedby="First Name">
                </div>
                <div class="form-group">
                    <label for="lname" class="txt-color">Last Name</label>
                    <input id="lname" type="text" name="lname" class="form-control txt-color"
                    placeholder="Last name" aria-describedby="Last Name">
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="form-label txt-color">Email</label>
                    <input id="inputEmail" type="email" name="email" class="form-control txt-color"
                    placeholder="Your Email" aria-describedby="Your Email">
               </div>
               <div class="form-group">
                    <label for="phone" class="txt-color">Phone Number</label>
                    <input id="phone" type="text" name="phone" class="form-control txt-color"
                    placeholder="Phone Number" aria-describedby="Phone Number">
                </div>

                <div class="form-group">
                    <label for="txtReasonDetail" class="txt-color">Enter Your Message Here</label>
                    <textarea id="txtReasonDetail" type="text" name="txtReasonDetail" class="form-control txt-color"
                    placeholder="Enter Your Message Here" aria-describedby="Enter Your Message Here"></textarea>
                </div>
               <div class="col-12">
                <button type="submit" class="btn txt-color">Submit</button>
              </div>
            </form>
        </div>
    </div>
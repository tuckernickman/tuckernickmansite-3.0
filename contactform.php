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
                    placeholder="First name" aria-describedby="First Name">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input id="lname" type="text" name="lname" class="form-control"
                    placeholder="Last name" aria-describedby="Last Name">
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input id="inputEmail" type="email" name="email" class="form-control"
                    placeholder="Your Email" aria-describedby="Your Email">
               </div>
               <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input id="phone" type="text" name="phone" class="form-control"
                    placeholder="Phone Number" aria-describedby="Phone Number">
                </div>

                <div class="form-group">
                    <label for="txtReasonDetail">Enter Your Message Here</label>
                    <textarea id="txtReasonDetail" type="text" name="txtReasonDetail" class="form-control"
                    placeholder="Enter Your Message Here" aria-describedby="Enter Your Message Here"></textarea>
                </div>
               <div class="col-12">
                <button type="submit" class="btn btn-outline-dark">Submit</button>
              </div>
            </form>
        </div>
    </div>
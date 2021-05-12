<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Paradise Travles </title>
    </head>
    <style>

    <?php include "contact.css" ?>
    </style>
    <body>
    <header id ='contact'>
        <div class="navbar" style="letter-spacing:4px;">
         <img src="logo.jpg" class ="headinglink" >
          <div class="right" style="float:right">
              <a href="#contact"class="active"><i class="fa fa-address-card fa-lg"></i>Contact</a>
              <a href="menu.php"><i class="fa fa-gift"></i>Packages</a>
              <a href="about.php"><i class="fa fa-plane"></i>Services</a>
              <a href="home.php"><i class="fa fa-home fa-lg"></i>Home</a>
          </div>
      </div>

    </header>
    <div class="container2">
    <div class="head1">
        <h3>Location Information</h3>
        <hr>
    </div>
    <div class="address">
        <h4>Our Address</h4>
        <address>
              1-5H/205 Road No:7 Banjara Hills<br>
              (Beside Arena Drive-In,Near GVK Mall) ,<br>
               Hyderabad, TS - 500034<br>
              <i class="fa fa-phone"></i>: +91 9299611111<br>
              <i class="fa fa-fax"></i>: +91 929962222<br>
              <i class="fa fa-envelope"></i>:
                <a href="mailto:paradise@travels.net">paradise@travels.net</a>
           </address>
    </div>
    <div class="buttons">
        <div class="btn-group" role="group">
            <a role="button" class="btn call" href="tel:+91 9299611111"><i class="fa fa-phone"></i> Call</a>
            <a role="button" class="btn gmap" href="https://www.google.com/maps/place/1,+Rd+Number+7,+Zahara+Nagar,+Banjara+Hills,+Hyderabad,+Telangana+500034/@17.4191608,78.4430075,21z/data=!4m13!1m7!3m6!1s0x3bcb97318f660cd3:0xc5db806a7f45261c!2s1,+Rd+Number+7,+Zahara+Nagar,+Banjara+Hills,+Hyderabad,+Telangana+500034!3b1!8m2!3d17.419195!4d78.4431825!3m4!1s0x3bcb97318f660cd3:0xc5db806a7f45261c!8m2!3d17.419195!4d78.4431825"><i class="fa fa-map-marker"></i> Maps</a>
            <a role="button" class="btn email" href="mailto:paradise@travels.net"><i class="fa fa-envelope-o"></i> Email</a>
        </div>
    </div>
</div>
    <div class="container1">

        <h1>Send us your Feedback</h1>
        <form action="feedbacking.php" method="post" name="contactForm" onsubmit="return validateForm()">
        <label for="fullname">Full Name<span style="color:red;">*</span></label>
        <br>
        <input type="text" id="fullname" name="fullname" placeholder="Your Full name">
        <div style="font-size:90%;color:red;" id="nameErr"></div>
        <br>
        <label for="emailid">Email<span style="color:red;">*</span></label>
        <br>
        <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Your Email">
        <div style="font-size:90%;color:red;" id="emailErr"></div>
        <br>
        <label for="telnum">Contact number<span style="color:red;">*</span></label>
        <br>
        <input type="text" class="form-control" id="telnum" name="telnum" minlength="10" placeholder=" Your Contact number">
        <div style="font-size:90%;color:red;" id="mobileErr"></div>
        <br>
        <label for="rating">Rating</label>
        <br>
        <select id="rating" name="rating">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
        </select>

        <br>
        <label for="subject">How can we improve to serve you better</label>
        <br>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
        <br>
        <input type="submit" value="Send Feedback">
        <br>
        </form>
    </div>
    <footer >
        <div class="container">

          <div class="center">
            <div>
                <a href="https://www.facebook.com/"> <i class="fa fa-facebook-official hover-opacity"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram hover-opacity "></i></a>
                <a href="https://www.snapchat.com/">  <i class="fa fa-snapchat hover-opacity"></i></a>
                <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p hover-opacity"></i></a>
                <a href="https://www.twitter.com/"> <i class="fa fa-twitter hover-opacity "></i></a>
                <a href="https://www.linkedin.com/"> <i class="fa fa-linkedin hover-opacity"></i></a>
                <br>
            </div>

          </div>

       </div>
    </footer>



    </body>
</html>

<script>
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
    // Retrieving the values of form elements
    var name = document.contactForm.fullname.value;
    var email = document.contactForm.emailid.value;
    var mobile = document.contactForm.telnum.value;





	// Defining error variables with a default value
    var nameErr = emailErr = mobileErr = true;

    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }

    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }

    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }





    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +



        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};

</script>

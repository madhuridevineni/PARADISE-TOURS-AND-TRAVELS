<?php
    include('config.php');
    $place = $_POST['places'];
    $number = $_POST['guests'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];



        //to prevent from mysqli injection
        $place= stripcslashes($place);
        $checkin = stripcslashes($checkin);
        $checkout = stripcslashes($checkout);
        $place = mysqli_real_escape_string($con, $place);
        $checkin = mysqli_real_escape_string($con, $checkin);
        $checkout = mysqli_real_escape_string($con, $checkout);

        $sql = "select price,hotelname from accommodation where place = '$place' and  date='$checkin'";
        $result = mysqli_query($con, $sql);
        //$datediff=date_diff($checkin,$checkout);
        $row = mysqli_fetch_assoc($result);
        $price= $row["price"];
        $hname= $row["hotelname"];
        $count = mysqli_num_rows($result);
        $date1c = strtotime($checkout);
        $date1= getdate($date1c);
        $date2c = strtotime($checkin);
        $date2=getdate($date2c);
        $datediff= $date1['yday']-$date2['yday'];
        if($datediff==0){
            $datediff=1;
        }

        if($count == 1){
               $total= $price * $number*$datediff;//*$datediff;
               echo '
               <html>
               <style>
               .last {
               border: 5px dotted #bbb; /* Dotted border */
               width: 80%;
               border-radius: 15px; /* Rounded border */
               margin:auto ;
               margin-top:10%;
               max-width: 600px;

              }

              .container {
               padding: 2px 16px;
               background-color: #f1f1f1;
              }

              .promo {
               padding: 3px;
              }

              .expire {
               color: red;
              }
              body{
                  background-color:#DCD5DC;
              }
               </style>
               <body>
               <div class="last">
               <div class="container">
               <h3>Paradise Travels</h3>
              </div>
              <div class="container" style="background-color:white">
              <h2><b>Your Hotel is Booked</b></h2>
              <p>Thank you for choosing us and Have a nice stay!</p>
              </div>
              <div class="container">
              <p class="promo">Hotel Name :';
              echo $hname;
              echo'<p class="promo">Date of check-in :';
              echo $checkin;
              echo '<p class="promo">Date of check-out :';
              echo $checkout;
              echo '<p class="promo">Place of Stay :';
              echo $place;
              echo '<p class="promo">Duration of stay :';
              echo $datediff.' days';
              echo '<p class="promo">Numer of Guests :';
              echo $number;
              echo '<p class="expire">Price :';
              echo $total;
              echo'</p>
             </div>
             </div>
             </body>
             </html>';

        }
        else{
            echo '<html>Something went wrong try again</html>';

        }
?>

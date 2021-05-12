<?php
    include('config.php');
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $date = $_POST['Date'];
    $passengers = $_POST['passengers'];


        //to prevent from mysqli injection
        $departure = stripcslashes($departure);
        $arrival = stripcslashes($arrival);
        $date = stripcslashes($date);
        $departure = mysqli_real_escape_string($con, $departure);
        $arrival = mysqli_real_escape_string($con, $arrival);
        $date = mysqli_real_escape_string($con, $date);

        $sql = "select price from flights where Departure = '$departure' and Arrival= '$arrival' and Date='$date'";
        $result = mysqli_query($con, $sql);
        //$results_numeric = intval($result);
        $row = mysqli_fetch_assoc($result);
        $price= $row["price"];
        $count = mysqli_num_rows($result);

        if($count == 1){
               $total= $price * $passengers;
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
              <h2><b>Your Ticket is Booked</b></h2>
              <p>Thank you for choosing us and Happy Journey!</p>
              </div>
              <div class="container">
              <p class="promo">Date of Departure :';
              echo $date;
              echo '<p class="promo">Place of Departure :';
              echo $departure;
              echo '<p class="promo">Place of Arrival :';
              echo $arrival;
              echo '<p class="promo">Numer of Passengers :';
              echo $passengers;
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

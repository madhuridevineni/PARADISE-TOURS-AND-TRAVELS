
<?php
    include('config.php');


            $place="goa";
            $sql = "select * from Packages where place='$place'";
            $result = mysqli_query($con, $sql);
            //$results_numeric = intval($result);
            $row = mysqli_fetch_assoc($result);
            $price= $row["price"];
            $duration=$row["duration"];
            $name=$row["name"];
            $type=$row["type"];
            $count = mysqli_num_rows($result);

            if($count==1){

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
               <h2><b>Your Package is Booked</b></h2>
               <p>Thank you for choosing us and Have a wonderful trip!</p>
               </div>
               <div class="container">
               <p class="promo">Package Name :';
               echo $name;
               echo '<p class="promo">Place pf visit :';
               echo $place;
               echo '<p class="promo">Package type :';
               echo $type;
               echo '<p class="promo">Duration of Package :';
               echo $duration;
               echo '<p class="expire">Price :';
               echo $price;
               echo'</p>
              </div>
              </div>
              </body>
              </html>';

            }
            else{
                echo '<html>Something went wrong try again</html>';
            }



          error_reporting(0);


?>

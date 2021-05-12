<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="about.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Paradise Travles </title>
    </head>
    <body>
        <style>
            .headinglink{ object-fit: cover;}
        </style>
    <header id ='about' style="margin-bottom:0">
        <div class="navbar" style="letter-spacing:4px;">
         <img src="logo.jpg" class ="headinglink" >
          <div class="right" style="float:right">
              <a href="contact.php"><i class="fa fa-address-card fa-lg"></i>Contact</a>
              <a href="menu.php"><i class="fa fa-gift"></i>Packages</a>
              <a href="#about "class="active"><i class="fa fa-plane"></i>Services</a>
              <a href="home.php"><i class="fa fa-home fa-lg"></i>Home</a>
          </div>
        </div>
    </header>


     <div class="wrapper" style="margin-top:0">
              <h1 style="color:White ;margin-top:0"><b> We Make Trips Possible</b></h1>
              <br>
              <h2 style="color:White">Search our lowest fares to your favourite destination</h1>
              <br>
              <div class="midcontainer">
                  <!-- Tab links -->
                  <div class="tab">
                   <button class="tablinks" onclick="openService(event, 'flights')">Flights</button>
                   <button class="tablinks" onclick="openService(event, 'hotels')">Hotels</button>
                  </div>

                  <!-- Tab content -->
                  <div id="flights" class="tabcontent">
                      <form id="flights"  method="POST" action="flights.php">
                          <div class="rowitem">
                            <div class="columnitem">
                            <label><b>Departure :</b></label>
                            <br>
                            <select id="departure" name="departure">
                                <option value="delhi">Delhi</option>
                                <option value="mumbai">Mumbai</option>
                                <option value="kolkata">kolkata</option>
                                <option value="chennai">chennai</option>
                             </select>
                         </div>
                            <div class="columnitem">
                                <label><b>Arrival:</b></label>
                                <br>
                                <select id="arrival" name="arrival">
                                    <option value="delhi">Delhi</option>
                                    <option value="mumbai">Mumbai</option>
                                    <option value="kolkata">kolkata</option>
                                    <option value="chennai">chennai</option>
                                 </select>

                            </div>
                            </div>
                           <br>
                            <div class="rowitem">
                                <div class="columnitem">
                                    <label><b>Date: </b></label>
                                    <br>
                                    <input type="date" min="2021-04-16" max="2021-04-30" id="Date" name="Date">
                                </div>
                                <div class="columnitem">
                                    <label><b>Number of Passengers:</b></label>
                                    <br>
                                    <input type="number" id="passengers" name="passengers">
                                </div>

                          </div>
                           <button id='search'onclick="" type="submit"><b>Book<b></button>
                           <br>
                           <br>
                     </form>
                  </div>

                  <div id="hotels" class="tabcontent">
                      <form id="hotels"  method="post" action="hotels.php">
                          <div class="rowitem">

                            <div class="columnitem">
                                <label><b>Place :</b></label>
                                <br>
                                <select id="places" name="places">
                                    <option value="delhi">Delhi</option>
                                    <option value="mumbai">Mumbai</option>
                                    <option value="kolkata">kolkata</option>
                                    <option value="chennai">chennai</option>
                                 </select>

                            </div>
                            <div class="columnitem">
                                <label><b>Number of Guests:</b></label>
                                <br>
                                <input type="number" id="guests" name="guests">
                            </div>
                            </div>
                           <br>
                            <div class="rowitem">
                                <div class="columnitem">
                                    <label><b>Check-in Date:</b></label>
                                    <br>
                                    <input type="date"  min="2021-04-16" max="2021-04-30" id="checkin" name="checkin">
                                </div>
                                <div class="columnitem">
                                    <label><b>Check-out Date:</b></label>
                                    <br>
                                    <input type="date"  min="2021-04-16" max="2021-04-30" id="checkout" name="checkout">
                                </div>

                          </div>
                           <button id='search'onclick="" type="submit"><b>Book<b></button>
                           <br>
                     </form>
                  </div>


              </div>

       </div>


         <h3 style="margin-left:20px;font-size: 30px;">Our Customer Reviews</h3>


           <button type="button" class="collapsible" style="margin-top:30px;">
               K. Sirish
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span></button>
           <div class="content">
               <div class="container2">
                   <img src="boy1.png" alt="Avatar" style="width:90px">
                   <p><span>K.sirish</span> Hyderabad</p>
                   <p>We went on a Kerala family vacation. Overall, it was a pleasant experience.
                      As promised, services were provided. However,the best time to visit Kerala is during the winter season.
                      I'm going to book with the same agency again. Thank you to the whole team at
                      Paradise Travels for making our trip so unforgettable.</p>
                   </div>
               </div>
           <button type="button" class="collapsible">
              Karan Paul
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked" ></span>
              <span class="fa fa-star checked"></span>
          </button>
           <div class="content">
               <div class="container2">
                   <img src="boy4.png" alt="Avatar" style="width:90px">
                   <p><span>Karan Paul</span> New Delhi</p>
                   <p>I had an amazing time in Jaipur!!!! As I travelled with my cousins. With Paradise Travels, we got the best and cheapest offer.
                         They took us to all of the popular spots in Jaipur, and our guide was extremely courteous and professional.
                         They planned it so well that we were able to see most of the popular places in Jaipur in a short amount of time.
                         I would strongly advise all to use this travel agency!! Paradise Travels.
                         Thank you very much.</p>
                   </div>
           </div>
           <button type="button" class="collapsible">
              Irfan Pathan
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
          </button>
           <div class="content">
               <div class="container2">
                   <img src="boy3.png" alt="Avatar" style="width:90px">
                   <p><span>Irfan Pathan</span> Amritsar </p>
                   <p>“It was a wonderful stay with the Taj Banjara, who made us feel very safe as well as comfortable.
                       I was in wonder of how great I felt. The staff was extremely friendly and accommodating in a variety of ways.
                       “I stayed with my children.The Paradise Travel website is an excellent choice for visitors to Hyderabad,
                       offering a low-cost cot, family-friendly customer service, and a number of useful facilities to make your stay more enjoyable.</p>
                   </div>
           </div>
           <button type="button" class="collapsible">
             Kajal
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
          </button>
           <div class="content">
               <div class="container2">
                   <img src="girl1.png" alt="Avatar" style="width:90px">
                   <p><span> Kajal </span> Banagalore </p>
                   <p>The hotels that paradise travels recommended were excellent.
                       This is a great place and it was within walking distance of the city's main attractions, the space was absolutely perfect,
                       and the breakfast was good and varied. All you might like in a hotel stay was there: comfortable beds, hot showers, and so on.
                       I would strongly suggest it.</p>
                   </div>
           </div>
           <button type="button" class="collapsible" >
               Ravi Kiran
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
           </button>
           <div class="content" >
               <div class="container2" >
                   <img src="boy2.png" alt="Avatar" style="width:90px">
                   <p><span>Ravi Kiran</span> kolkata</p>
                   <p>I usually book through the airport service desk, but a friend recommended your website, so I decided to use it. The ticket purchase was quick and simple.
                       I'm glad I was able to buy tickets in the location I desired (Mumbai).</p>
                   </div>
           </div>







    <footer >
        <div class="container" style="margin-top:50px;">

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


    <script>
    function openService(evt, service) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(service).style.display = "block";
      evt.currentTarget.className += " active";
      }

      var coll = document.getElementsByClassName("collapsible");
      var i;

      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("activate");
          var content = this.nextElementSibling;
          if (content.style.display === "block") {
            content.style.display = "none";
          } else {
            content.style.display = "block";
          }
        });
      }



    </script>



    </body>
</html>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title> Paradise Travles </title>
    </head>
    <style>
  <?php include "home.css" ?>
  </style>
    <body>
    <header id ='Home'>
        <div class="navbar" style="letter-spacing:4px;">
         <img src="logo.jpg" class ="headinglink" >
          <div class="right" style="float:right">
              <a href="contact.php"><i class="fa fa-address-card fa-lg"></i>Contact</a>
              <a href="menu.php"><i class="fa fa-gift"></i>Packages</a>
              <a href="about.php"><i class="fa fa-plane"></i>Services</a>
              <a href="#Home" class="active"><i class="fa fa-home fa-lg"></i>Home</a>
          </div>
      </div>

    </header>

    <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="kerala.jpg" style="width:100%;  height:300px;">
            </div>

            <div class="mySlides fade">
                <img src="north.jpg" style="width:100%;  height:300px;">
            </div>

            <div class="mySlides fade">
                <img src="goa1.jpg" style="width:100%; height:300px;">
            </div>

        </div>
    <div class="row">
       <div class="column1" style="margin-left:10px;">
        <h2>About Us:</h2>
        <p style="font-size:19px;">“Paradise”, the purpose of tour description on our website is to supply potential customers with details about the features of the tour, so they're compelled to purchase their ticket. The content of our website is all about what makes your experience unique. In our services, we provide flight tickets, accommodation, and places to visit all over the country which helps online booking solutions for day-to-day travel needs. It generates maximum revenue from the Hotels and packages segment. Our company allows travelers to research, plan, book, and purchase a range of travel services and products through the website. Customers could book tickets to any place in India online or could call travel consultants who were available 24x7 in the office</p>
        <p style="font-size:19px;">We provide detailed steps after logging in to the website as of ticket booking or accommodation etc. Our company serves the leisure and corporate travelers, and small businesses. Our core value differentiator is the most trusted user experience, be it in terms of quickest search and booking, fastest payments, settlement, or refund processes.</p>
        <p style="font-size:19px;">People will be getting seasonal discounts according to the season. Through the stays, traveling our customers enjoy the standardized experience at certified hotel properties which are given according to the place on our website. Our company’s financial income had increased 11% from the past 2 years. There were three enabling components: technology, people and process, and supplier relations.</p>
        <p style="font-size:19px;">Our strategies would involve better customer service and customer relationship management ensuring the highest level of consumer satisfaction. We provide customer-friendly services, which would include the timely delivery of goods right at the doorstep of the consumer.</p>
    </div>
      <div class="column2" >
          <div class="proflie-card">
              <img src="founder.jpeg" alt="John" style="width:100%; height: 150px">
              <h1>Ritesh Agarawal</h1>
              <p class="title">CEO & Founder</p>
              <p>University of London</p>
              <a href="https://dribbble.com/shots/9807340-Ritesh-Agarwal-Vector-Illustration"><i class="fa fa-dribbble"></i></a>
              <a href="https://twitter.com/riteshagar?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a>
              <a href="https://www.linkedin.com/in/riteshagar/?originalSubdomain=in"><i class="fa fa-linkedin"></i></a>
              <a href="https://www.facebook.com/riteshagarwall"><i class="fa fa-facebook"></i></a>
          </div>
     <div id="myvedio">
         <video width="280" height="150" controls>
            <source src="tropicalparadise.mp4" type="video/mp4">
        </video>

     </div>

      </div>

  </div>

   <div class="Gallerycontainer">
       <hr class="dashed">
       <h1  align="center">Gallery</h1>
       <div class="rowg">
  <div class="columng">
      <img src="G4.jpg">
      <img src="G16.jpg">
      <img src="G5.jpg">
      <img src="G7.jpg" style="height:287px;">
  </div>
  <div class="columng">
    <img src="G1.jpg">
    <img src="G9.jpg">
    <img src="G15.jpg">
    <img src="G13.jpg">
  </div>
  <div class="columng">
    <img src="G6.jpg">
    <img src="G12.jpg">
    <img src="G8.jpg">
    <img src="G11.jpg" style="height:235px;">
  </div>
  <div class="columng">
      <img src="G3.jpg">
      <img src="G14.jpg">
      <img src="G2.jpg">
      <img src="G10.jpg" style="height:160px;">
  </div>
</div>

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

      <script type="text/javascript">
         var video = document.getElementById("myVideo");
         var slideIndex = 0;
         showSlides();

         function showSlides() {
           var i;
           var slides = document.getElementsByClassName("mySlides");
           var dots =   document.getElementsByClassName("dot");

           for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";
           }

           slideIndex++;

           if (slideIndex > slides.length) {slideIndex = 1}

           slides[slideIndex-1].style.display = "block";
           setTimeout(showSlides, 2000); // Change image every 2 seconds
         }
      </script>

    </body>
</html>

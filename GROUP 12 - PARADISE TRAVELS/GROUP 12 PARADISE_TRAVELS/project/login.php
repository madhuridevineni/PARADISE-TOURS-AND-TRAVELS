

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Paradise travels Login</title>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <style>

        <?php include "login.css" ?>
        </style>



            <div class="login">
             <form id="login" method="POST" action="checklogin.php">
              <h1 style="color:#fff; margin-left:20px;"><b>Login Form<b></h1>
              <label><b>User Name:</b></label>
              <br>
              <input class="in" type="text" name="username" id="username"  required="required"placeholder="Username">

              <br><br>
             <label><b>Password:</b></label>
             <br>
             <input  class ="in"type="Password" name="password" id="password" required="required" placeholder="Password">

             <br><br>
             <button value='login' class="log" type="submit"><b>Login<b></button>
             <br><br>

       </form>

       </div>



        </body>
</html>

<?php
$f_name = $_POST['fullname'];
$email = $_POST['emailid'];
$contact= $_POST['telnum'];
$rating = $_POST['rating'];
$feedback_txt = $_POST['subject'];

$conn = mysqli_connect("localhost", "root","", "paradise_travels");
$query ="insert into feedback(fullname,email,contactno,rating,suggestions)values('$f_name','$email',$contact,$rating, '$feedback_txt')";
$result = mysqli_query($conn, $query);
if($result)
  header("Location:contact.php");
else
echo '<script>alert("Something terrible happened. Please try again. ")</script>';
exit();
?>

<!DOCTYPE html>
<html>
<?php
   session_start();
   include "connect.php";
if(isset($_POST['sub'])) {
      $userid = $_POST['username'];
      $password = $_POST['pwd'];      
      $qry = 
      "SELECT * from user WHERE id='$username' and password='$password'";
      
      $result = mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);
      
      if(mysqli_num_rows($result)>0) {
        $_SESSION['userid'] = $userid;
      	header('location:suggest.php');
      } else {
         echo "<p>INVALID CREDENTIALS</p>";
      }
     mysqli_close($conn);
 }
?>

<p>PROPERTY SELLING</p>
<form method="post" action="">
<input type="text" name="username" placeholder="username"/>
<input type="password" name="pwd" placeholder="Password"/>
<input type="submit" name="sub"/>
</form>

</html>

<!DOCTYPE html>
<html>
<?php 
   include "connect.php";
   
   if(isset($_POST['sub'])) {
      $username = $_POST['username'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['pwd'];      
      $qry = 
      "INSERT INTO user (id, name, email, password) VALUES ('$username', '$name', '$email', '$password')";
      
      mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);
      header('location:login.php');
      /*echo $qry."<br/>";*/
   }
 ?>
   <form method="post" action="">
      <input name="name" type="text" placeholder="Your Name"/><br/>
      <input name="username" type="text" placeholder="userid"/><br/>
      <input name="email" type="email" placeholder="Your Email"/><br/>
      <input name="pwd" type="password" placeholder="PASSWORD"/><br/>
      <input type="submit" name="sub"/>
      <br/>
   </form>
</html>

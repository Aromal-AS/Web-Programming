<?php
include_once('link.php'); 
 if(isset($_POST['Submit'])) 
 {
     extract($_POST); 

     if(!empty($name) && !empty($phone) && !empty($place)) 
     {
         $query="INSERT INTO `formdata`(`name`, `phone`, `place`) VALUES ('$name','$phone','$place');"; 
         $run=mysqli_query($link,$query) or die(mysqli_error()); 
         if($run) 
         echo "Form data submitted";
         else 
         echo "Database Error";
     }
 else 
 echo "All field Required";
 }

?>


<html>
    <body>
        <form method="POST" action="index.php"> 
          <span>Enter Name:</span><br>
          <input type="text" name="name"><br>
          <span>Phone Number: </span><br>
          <input type="number" name="phone"><br>
          <span>Place:</span><br>
          <input type="text" name="place"><br>

          <input type="submit" name="Submit">

        </form>
    </body>
</html>
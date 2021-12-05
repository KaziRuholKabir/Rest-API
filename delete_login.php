<!DOCTYPE html>
<html>
<body>

<h2>Delete Login History</h2>



<form action="" method="POST">
  <label for="login_id">Delete Login From this device:</label><br>
  <!-- <input type="int" id="login_id" name="login_id"><br> -->
  
  <input type="submit" name="delete_login" value="Delete Login History">
  <!-- When a user press this button then the program will detect the device and delete login history accordingly -->
</form> 

<?php
  $device = $_SERVER['HTTP_USER_AGENT'];

  $conn = mysqli_connect('localhost','root','');
  $db = mysqli_select_db($conn,'products');

  if(isset($_POST['delete_login']))
  {
    //$login_id = $_POST['login_id'];
    $query = "DELETE FROM login_history where login_device='$device' ";

    
    
    $query_run = mysqli_query($conn,$query);
   

    if($query_run){

      echo "Login History DELETED....." ;

    }
    else{

      echo "Login History Not DELETED";
    }
  }



?>



 

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<h2>Delete Cart</h2>


<h3>Search For Product to Delete</h3>

<form action="" method="POST">
  <label for="product_name">Product Name:</label><br>
  <input type="text" id="product_name" name="product_name"><br>
  
  <input type="submit" name="delete" value="Submit">
</form> 

<?php

  $conn = mysqli_connect('localhost','root','');
  $db = mysqli_select_db($conn,'products');

  if(isset($_POST['delete']))
  {
    $product_name = $_POST['product_name'];
    $query = "DELETE FROM cart_table where product_name='$product_name' ";

    $query2 = "DELETE FROM cart_quantity where product_name='$product_name' ";
    
    $query_run = mysqli_query($conn,$query);
    $query2_run = mysqli_query($conn,$query2);

    if($query_run){

      echo "Product DELETED....." ;

    }
    else{

      echo "Product Not DELETED";
    }
  }



?>



 

</body>
</html>

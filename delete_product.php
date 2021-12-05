<!DOCTYPE html>
<html>
<body>

<h2>Delete Product</h2>


<h3>Enter Product Name to Delete</h3>

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
    $query = "DELETE FROM products_table where product_name='$product_name' ";
    //Data delete query
    $query_run = mysqli_query($conn,$query);

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

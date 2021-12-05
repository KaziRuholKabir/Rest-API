<!DOCTYPE html>
<html>
<body>

<h2>Update CART</h2>


<h3>Search For Product to Update</h3>

<form action="" method="POST">
  <label for="product_name">Product Name:</label><br>
  <input type="text" id="product_name" name="product_name"><br>
  
  <input type="submit" name="search"value="Search">
</form> 


<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'products');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        if(isset($_POST['search'])){

            $product_name = $_POST['product_name'];
            $query = "SELECT * FROM cart_table where product_name='$product_name' ";
            $query2 = "SELECT * FROM cart_quantity where product_name='$product_name'";
            $query_run = mysqli_query($conn,$query);
            $query2_run = mysqli_query($conn,$query2);
            while($row = mysqli_fetch_array($query_run) and $row2 = mysqli_fetch_array($query2_run))
            {
                echo "Product Searched Successfully.......";
                ?>
                
                    <form action="" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>"/>
                        <input type="text" name="product_name" value="<?php echo $row['product_name'] ?>"/>
                        <input type="text" name="product_price" value="<?php echo $row['product_price'] ?>"/>
                        <input type="text" name="product_color" value="<?php echo $row['product_color'] ?>"/>
                        <input type="text" name="product_size" value="<?php echo $row['product_size'] ?>"/>
                        <input type="text" name="product_quantity" value="<?php echo $row2['product_quantity'] ?>"/>
                    </form>
                <?php
    
            }


        }

    }


?>
<br>
<br>
<br>
<br>
<br>
<h3>Update Your Product</h3>
<form action="update_cart_connect.php" method="POST">
  
  <label for="product_name">Product Name:</label><br>
  <input type="text" id="product_name" name="product_name"><br>
  <label for="product_color">Product Color:</label><br>
  <input type="text" id="product_color" name="product_color"><br>
  <label for="product_size">Product Size:</label><br>
  <input type="text" id="product_size" name="product_size"><br>
  <label for="product_quantity">Product Quantity:</label><br>
  <input type="int" id="product_quantity" name="product_quantity"><br>  
  <input type="submit" name="update_cart"value="Submit">
  
  
</form>
</body>
</html>



 



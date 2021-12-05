<!DOCTYPE html>
<html>
<body>

<h2>Update Product</h2>


<h3>Search For Product to Update</h3>

<form action="" method="POST">
  <label for="product_name">Product Name:</label><br>
  <input type="text" id="product_name" name="product_name"><br>
  <!-- Searching for product if that exists or not -->
  
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
            $query = "SELECT * FROM products_table where product_name='$product_name' ";
            $query_run = mysqli_query($conn,$query);

            while($row = mysqli_fetch_array($query_run))
            {
                echo "Product Searched Successful";
                ?>
                
                    <form action="" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>"/>
                        <input type="text" name="product_name" value="<?php echo $row['product_name'] ?>"/>
                        <input type="text" name="product_price" value="<?php echo $row['product_price'] ?>"/>
                        <input type="text" name="product_image" value="<?php echo $row['product_image'] ?>"/>
                        <input type="text" name="product_color" value="<?php echo $row['product_color'] ?>"/>
                        <input type="text" name="product_size" value="<?php echo $row['product_size'] ?>"/>
                        <input type="text" name="product_description" value="<?php echo $row['product_description'] ?>"/>
                        <!-- printing the search result in column wise-->
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
<form action="update_product_connect.php" method="POST">
  
  <label for="product_name">Product Name:</label><br>
  <input type="text" id="product_name" name="product_name"><br>
  <label for="product_price">Product Price:</label><br>
  <input type="text" id="product_price" name="product_price"><br><br>
  <label for="product_image">Product Image:</label><br>
  <input type="file" id="product_image" name="product_image"><br><br>
  <label for="product_color">Product Color:</label><br>
  <input type="text" id="product_color" name="product_color"><br>
  <label for="product_size">Product Size:</label><br>
  <input type="text" id="product_size" name="product_size"><br>
  <label for="product_description">Product Desctription:</label><br>
  <input type="text" id="product_description" name="product_description"><br>  
  <input type="submit" name="update"value="Submit">
  <!-- Taking product update details in a form -->
  
</form>
</body>
</html>
<?php

 // $conn = mysqli_connect('localhost','root','');
 // $db = mysqli_select_db($conn,'products');

 // if(isset($_POST['update']))
 /* {
    $product_id = $_POST['product_id'];
    $query2 = "UPDATE `products_table` SET product_name='$_POST[product_name]',product_price='$_POST[product_price]',product_image='$_POST[product_image]',product_color='$_POST[product_color]',product_size='$_POST[product_size]',product_description='$_POST[product_description]' where product_id='$_POST[product_id]' ";
    $query2_run = mysqli_query($conn,$query2);

    if($query2_run){

      echo "Product Updated....." ;

    }
    else{

      echo "Product Not Updated";
    }
  }

*/

?>


 



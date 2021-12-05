<!DOCTYPE html>
<html>
<body>

<h2>Read Single Product</h2>


<h3>Search to Read Single Product</h3>

<form action="" method="POST">
  <label for="product_name">Product Name:</label><br>
  <input type="text" id="product_name" name="product_name"><br>
 
  <input type="submit" name="read" value="Submit">
</form> 
<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'products');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        if(isset($_POST['read'])){

            $product_name = $_POST['product_name'];
            $query = "SELECT * FROM products_table where product_name='$product_name' ";
            //search query
            $query_run = mysqli_query($conn,$query);
            //echo "Product Read Successful";
            ?>
            <form action="">
            <input type="hidden" name="product_id" value="ID"/>
            <input type="text" name="product_name" value="NAME"/>
            <input type="text" name="product_price" value="PRICE"/>
            <input type="text" name="product_image" value="IMAGE"/>
            <input type="text" name="product_color" value="COLOR"/>
            <input type="text" name="product_size" value="SIZE"/>
            <input type="text" name="product_description" value="DESCRIPTION"/>
            <!-- This code is for the column header name -->
            </form>
            
            <?php

            while($row = mysqli_fetch_array($query_run))
            {
                
                ?>
                
                    <form action="" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>"/>
                        <input type="text" name="product_name" value="<?php echo $row['product_name'] ?>"/>
                        <input type="text" name="product_price" value="<?php echo $row['product_price'] ?>"/>
                        <input type="text" name="product_image" value="<?php echo $row['product_image'] ?>"/>
                        <input type="text" name="product_color" value="<?php echo $row['product_color'] ?>"/>
                        <input type="text" name="product_size" value="<?php echo $row['product_size'] ?>"/>
                        <input type="text" name="product_description" value="<?php echo $row['product_description'] ?>"/>
                    </form>
                <?php
    
            }


        }

    }


?>




 

</body>
</html>

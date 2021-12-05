<!DOCTYPE html>
<html>
<body>

<h2>Read Product</h2>



<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'products');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
      
            $query = "SELECT * FROM products_table";
            //Collecting all data from table
            $query_run = mysqli_query($conn,$query);
            echo "Product Read Successful";
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

    


?>





 

</body>
</html>

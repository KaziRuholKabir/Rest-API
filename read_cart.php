<!DOCTYPE html>
<html>
<body>

<h2>Read Cart</h2>



<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'products');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
      
            $query = "SELECT * FROM cart_table";
            $query2 = "SELECT * FROM cart_quantity";
            $query_run = mysqli_query($conn,$query);
            $query2_run = mysqli_query($conn,$query2);
            echo "Product Read Successful";
            ?>
            <form action="">
            <input type="hidden" name="product_id" value="ID"/>
            <input type="text" name="product_name" value="NAME"/>
            <input type="text" name="product_price" value="PRICE"/>
            <input type="text" name="product_color" value="COLOR"/>
            <input type="text" name="product_size" value="SIZE"/>
            <input type="text" name="product_quantity" value="QUANTITY"/>
            </form>
            <?php
            while($row = mysqli_fetch_array($query_run) and $row2 = mysqli_fetch_array($query2_run) )
            {
                
                ?>
                
                    <form action="" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>"/>
                        <input type="text" name="product_name" value="<?php echo $row['product_name'] ?>"/>
                        <input type="text" name="product_price" value="<?php echo $row['product_price'] ?>"/>
                        <input type="text" name="product_color" value="<?php echo $row['product_color'] ?>"/>
                        <input type="text" name="product_size" value="<?php echo $row['product_size'] ?>"/>
                        <input type="int" name="product_quantity" value="<?php echo $row2['product_quantity'] ?>"/>
                        
                    </form>
                <?php
    
            }

          
            

        }

    


?>





 

</body>
</html>

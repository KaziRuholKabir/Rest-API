
<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'products');
    //Connecting database

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        if(isset($_POST['update'])){

            $product_name = $_POST['product_name'];
            $query2 = "UPDATE `products_table` SET product_price = '$_POST[product_price]',product_image = '$_POST[product_image]',product_color = '$_POST[product_color]',product_size = '$_POST[product_size]',product_description = '$_POST[product_description]' where product_name='$_POST[product_name]' ";
            //Update database query
            $query = "SELECT * FROM products_table where product_name='$product_name' ";
            //Collecting the updated data from database 
            $query2_run = mysqli_query($conn,$query2);
            $query_run = mysqli_query($conn,$query);
            if($query2_run){

                echo "Product Updated....." ;
          
              }
              else{
          
                echo "Product Not Updated";
              }
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





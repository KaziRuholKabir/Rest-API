
<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'products');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        if(isset($_POST['update_cart'])){

            $product_name = $_POST['product_name'];
            $query2 = "UPDATE `cart_table` SET product_color = '$_POST[product_color]', product_size = '$_POST[product_size]' where product_name='$_POST[product_name]' ";
            $query3 = "UPDATE `cart_quantity` SET product_quantity ='$_POST[product_quantity]' where product_name='$_POST[product_name]' ";
           
            $query = "SELECT * FROM cart_table where product_name='$product_name' ";
            $query4 = "SELECT * FROM cart_quantity where product_name='$product_name' ";
            $query2_run = mysqli_query($conn,$query2);
            $query_run = mysqli_query($conn,$query);
            $query3_run = mysqli_query($conn,$query3);
            $query4_run = mysqli_query($conn,$query4);
            if($query2_run){

                echo "Product Updated....." ;
          
              }
              else{
          
                echo "Product Not Updated";
              }


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
              while($row2 = mysqli_fetch_array($query_run) and $row = mysqli_fetch_array($query4_run))
              {
                
                  ?>
                  
                      <form action="" method="POST">
                          <input type="hidden" name="product_id" value="<?php echo $row2['product_id'] ?>"/>
                          <input type="text" name="product_name" value="<?php echo $row2['product_name'] ?>"/>
                          <input type="text" name="product_price" value="<?php echo $row2['product_price'] ?>"/>
                          <input type="text" name="product_color" value="<?php echo $row2['product_color'] ?>"/>
                          <input type="text" name="product_size" value="<?php echo $row2['product_size'] ?>"/>
                          <input type="int" name="product_quantity" value="<?php echo $row['product_quantity'] ?>"/>
                      </form>
                  <?php
      
              }

        }

    }


?>





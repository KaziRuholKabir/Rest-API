<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'products');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        if(isset($_POST['add_cart'])){

            $product_name = $_POST['product_name'];
            $product_quantity = $_POST['product_quantity'];
            $query3 = "INSERT INTO cart_table(product_id, product_name, product_price, product_color, product_size) SELECT product_id, product_name, product_price, product_color, product_size FROM products_table where product_name = '$product_name' ";
            //$query = "INSERT INTO cart_quantity(product_name, product_quantity) VALUES ($product_name,$product_quantity)";
           
           
            
          
            $query3_run = mysqli_query($conn,$query3);
            //$query_run = mysqli_query($conn,$query);
           
            if($query3_run){
                $query = "INSERT INTO cart_quantity(product_name, product_quantity) VALUES ('$product_name', '$product_quantity')";
                $query_run = mysqli_query($conn,$query);
                echo "Product Added to Cart....." ;
          
              }
              else{
          
                echo "Product Not Added";
              }
            
              
              $conn->close();

        }

    }


?>
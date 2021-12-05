<?php
    //$product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_color = $_POST['product_color'];
    $product_size = $_POST['product_size'];
    $product_description = $_POST['product_description'];

    $conn = new mysqli('localhost','root','','products');
    // Database connection

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
        //Chechking the database is connected or not. If not then this line of code will execute
    }
    else{

        $stmt =$conn->prepare("INSERT INTO products_table(product_name, product_price, product_image, product_color, product_size, product_description)
                VALUES(?, ?, ?, ?, ?, ?)");
                // mySQL query to insert the form data into database 
        $stmt->bind_param("ssssss", $product_name, $product_price, $product_image, $product_color, $product_size, $product_description);
        $stmt->execute();
        echo "Product Added Successfully.......";
        $stmt->close();
        $conn->close();
        //Closing connection





    }









?>
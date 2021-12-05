<!DOCTYPE html>
<html>
<body>

<h2>Add Product</h2>




<form action="add_product_connect.php" method="POST">

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
  <input type="submit" value="Submit">
  <!-- A form to collect product details from the admin -->
  
  
</form>

</body>
</html>

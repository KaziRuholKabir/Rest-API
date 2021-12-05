<!DOCTYPE html>
<html>
<body>

<h2>Read Log History</h2>



<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'products');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
      
            $query = "SELECT * FROM login_history";
          
            $query_run = mysqli_query($conn,$query);
            
            echo "Log In History Read Successful";
            ?>
            <form action="">
            <input type="hidden" name="login_id" value="ID"/>
            <input type="text" name="login_device" value="DEVICE"/>
            <input type="text" name="login_location" value="LOCATION"/>
            <input type="text" name="login_time" value="TIME"/>
           
            </form>
            <?php
            while($row = mysqli_fetch_array($query_run))
            {
                
                ?>
                
                    <form action="" method="POST">
                        <input type="hidden" name="login_id" value="<?php echo $row['login_id'] ?>"/>
                        <input type="text" name="login_device" value="<?php echo $row['login_device'] ?>"/>
                        <input type="text" name="login_location" value="<?php echo $row['login_location'] ?>"/>
                        
                        <input type="text" name="login_time" value="<?php echo $row['login_time'] ?>"/>
                       
                        
                    </form>
                <?php
    
            }

          
            

        }

    


?>





 

</body>
</html>

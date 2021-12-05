
<?php require 'facebook_config.php';?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
    <?php  if(isset($_SESSION['access_token'])){
        
           echo "WELCOME ".$user->getField('name');
    }?>
          
             <!-- <a href = "Gurbage.php">Logout</a> -->
        
  
        
        <a href="<?php echo $login_url; ?>" class="btn btn-primary btn-block" ><i calss="fab fa-facebook-f mr-2"></i>Facebook</a>
        <!-- Log in button -->
     
</body>
</html>

<!-- This Api will only sign in once -->
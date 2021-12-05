<?php
    $timezone = date_default_timezone_set("Asia/Dhaka");
   
    $dateAndTime = date("Y-m-d H:i:s");
    $device = $_SERVER['HTTP_USER_AGENT'];
    //$ip = file_get_contents('https://api.ipify.org');
    //echo "My public IP address is: " . $ip;
   
   // echo "$dateAndTime";
    ?>
    <!-- </br> -->
    <?php
    //echo "$device";
    ?>
    <!-- </br> -->
    <?php
    //echo "$ip";
    ?>
    <!-- </br> -->
    <?php


    $ch=curl_init();

    curl_setopt($ch, CURLOPT_URL,"http://ip-api.com/json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    $output = json_decode($output);
    //echo '<pre>';
   // print_r($output);


    if($output->status=='success'){

        $country = $output->country;
        $city = $output->city;
        $zip = $output->zip;




    }

    $location = $city.' '.$country.' '.$zip;
    //echo "$country";
    ?>
    <!-- </br> -->
    <?php
    //echo "$city";
    ?>
    <!-- </br> -->
    <?php
    //echo "$zip";
    //echo "$location";

    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn,'products');
  

    if(1){

        $INSERT = "INSERT INTO login_history(login_time, login_device, login_location)
        VALUES('$dateAndTime','$device','$location')";
        mysqli_query($conn,$INSERT);
        echo 'Login History Added';

    }
        
     




?>

<?php
    $connect=mysqli_connect('localhost','root','','usn_details') or die("Connection failed: ".mysqli_connect_error());
    if(!$connect){
        echo "No connection to database";
    }
?>

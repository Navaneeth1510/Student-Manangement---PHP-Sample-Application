<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $c=mysqli_connect('localhost','root','','usn_details') or die("Connection failed: ".mysqli_connect_error());
        if(isset($_POST['email']) && isset($_POST['password'])){
            $emailid=$_POST['email'];
            $pass=$_POST['password'];

            //query
            $sql="SELECT email, passcode FROM admin";
            //execute the query
            $query = mysqli_query($c,$sql);
            //if the entries are more than 1 entry
            if(mysqli_num_rows($query)>0){
                //fetch every entry 
                while($row=mysqli_fetch_assoc($query)){
                    if($emailid==$row['email'] && $pass==$row['passcode']){
                        echo '<script type="text/javascript">
                                 window.onload = function () { 
                                 alert("Successful Login !"); 
                                 window.location.href = "Display.php"; // Redirect after the alert is closed
                                 }</script>';
                    }
                    else{
                        echo '<script type="text/javascript">
                                 window.onload = function () { 
                                 alert("Wrong Credentials"); 
                                 window.location.href = "Admin_login.php"; // Redirect after the alert is closed
                                 }</script>';
                    }                        
                }
            }
            else{
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("Wrong Credentials"); 
                        window.location.href = "Admin_login.php"; // Redirect after the alert is closed
                        }</script>';
            }
        }
    }
?>
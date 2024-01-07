<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['create'])){
        $conn=mysqli_connect('localhost','root','','usn_details') or die("Connection failed: ".mysqli_connect_error());
        if(isset($_POST['usn']) && isset($_POST['name']) && isset($_POST['section']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['password'])){
            $usn=$_POST['usn'];
            $name=$_POST['name'];
            $section=$_POST['section'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $passcode=$_POST['password'];

            //query to update the usn table
            $sql="INSERT INTO `usn` (`usno`,`name`,`section`,`phone`,`email`,`address`) VALUES ('$usn','$name','$section','$phone','$email','$address')";
            $query = mysqli_query($conn,$sql);
            if($query){
                //query to update the authentication table
                $sql="INSERT INTO `authentication` (`usn`,`passcode`) VALUES ('$usn','$passcode')";
                $result=mysqli_query($conn,$sql);
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("Entry created Successfully !"); 
                        window.location.href = "Display.php"; // Redirect after the alert is closed
                        }</script>';
            }
            else {
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("Entry Creation Failed"); 
                        window.location.href = "Display.php"; // Redirect after the alert is closed
                        }</script>';
            }
            
            
            

        }
    }
?>
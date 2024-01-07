<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn=mysqli_connect('localhost','root','','usn_details') or die("Connection failed: ".mysqli_connect_error());
        if(isset($_POST['usn']) && isset($_POST['password'])){
            $usnid=$_POST['usn'];
            $pass=$_POST['password'];

            //query
            $sql="SELECT usn, passcode FROM authentication";
            //execute the query
            $query = mysqli_query($conn,$sql);
            //if the entries are more than 1 entry
            if(mysqli_num_rows($query)>0){
                //fetch every entry
                $count=0;
                while($row=mysqli_fetch_assoc($query)){
                    if($usnid==$row['usn'] && $pass==$row['passcode']){
                        $conn=mysqli_connect('localhost','root','','usn_details') or die("Connection failed: ".mysqli_connect_error());
                        $sql="SELECT `usno`,`name`,`section`,`phone`,`email`,`address` FROM usn";
                        $_SESSION['usn']=$usnid;
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result)){
                            if($usnid==$row['usno']){                                
                                $_SESSION['addres']=$row['address'];
                                $_SESSION['usn']=$row['usno'];
                                $_SESSION['name']=$row['name'];
                                $_SESSION['section']=$row['section'];
                                $_SESSION['phone']=$row['phone'];
                                $_SESSION['email']=$row['email'];
                                $count=1;
                            }                        
                        }                        
                        echo '<script type="text/javascript">
                              window.onload = function () { 
                              alert("Successful Login !");
                              window.location.href="Display_user.php"; //Redirect
                              }
                              </script>';
                    }                       
                }
                if($count==0){
                    echo '<script type="text/javascript">
                            window.onload = function () { 
                            alert("Wrong Credentials");
                            window.location.href="User_login.php"; //Redirect
                            }
                            </script>';
                }
            }
            else{
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("Empty Database");
                        window.location.href="User_login.php"; //Redirect
                        }
                        </script>';
            }
        }
    }
?>
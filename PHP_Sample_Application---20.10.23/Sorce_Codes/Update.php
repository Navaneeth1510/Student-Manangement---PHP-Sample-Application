<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn=mysqli_connect('localhost','root','','usn_details');
        if(isset($_POST['pass1']) && isset($_POST['pass2'])){
            $pass1=$_POST['pass1'];
            $pass2=$_POST['pass2'];
            if($pass1==$pass2){
                if(isset($_SESSION['usn'])){
                    $usn=$_SESSION['usn'];
                    $sql="UPDATE authentication SET passcode='$pass2' WHERE usn='$usn'";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        echo '<script type="text/javascript">
                              window.onload = function () { 
                                  alert("Password Updated Successfully"); 
                                  window.location.href = "User_login.php"; // Redirect after the alert is closed
                              }
                              </script>';
                    }
                    else{
                        echo '<script type="text/javascript">
                              window.onload = function () { 
                                  alert("Password Updation Failed"); 
                                  window.location.href = "User_login.php"; // Redirect after the alert is closed
                              }
                              </script>';
                    }
                }
                else{
                    echo '<script type="text/javascript">
                          window.onload = function () { 
                            alert("Couldnt fetch USN"); 
                            window.location.href = "User_login.php"; // Redirect after the alert is closed
                          }
                          </script>';
                }
            }
            else{
                echo '<script type="text/javascript">
                      window.onload = function () { 
                        alert("Password Mismtach"); 
                        window.location.href = "Change.php"; // Redirect after the alert is closed
                      }
                      </script>';
            }
        }
    }
?>
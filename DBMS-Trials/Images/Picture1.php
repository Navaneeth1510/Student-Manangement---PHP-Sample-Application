<?php
    //include your config.php file
    include_once("Picture.php");

    //make a directory for image
    $image_dir = "uploads/";

    //check if the 'insert image' button is pressed..
    //'submit' is the button name
    //'insert image' is value of the button

    if(isset($_POST['submit'])){
        //check the server request methord is 'POST'
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name=$_POST["name"];
            //check file is not empty
            if(!empty($_FILES["file"]["name"])){
                $filename = basename($_FILES["file"]["name"]);
                $image_target_path = $image_dir . $filename;
                $filetype = pathinfo($image_target_path, PATHINFO_EXTENSION);

                //make an array for support image types
                $image_types = array('jpg','png','jpeg','PNG','JPG','JPEG');
                
                if(in_array($filetype, $image_types)){
                    //upload image to the database
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $image_target_path)){
                        //Image insert to the table
                        // $sql="INSERT INTO image (Name) VALUES('$name')";
                        // $result = mysqli_query($con, $sql);

                        $image_insert = "INSERT INTO image (Username,image_name, uploaded_time) VALUES('$name','$filename', NOW())";
                        //NOW() this time
                        $insert_result = mysqli_query($con, $image_insert);
                        
                        //if image not insert
                        if($insert_result){
                            $msg[] = "<center>&nbsp<div class='alert alert-success col-10' role='alert'>Image Uploaded Successfully</div>&nbsp</center>";
                        }else{
                            $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Sorry, Try Again</div>&nbsp</center>";
                        }                 
                    }
                    else{
                        $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Error While uploading the image</div>&nbsp</center>";
                    }
                }else{
                    $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Unsported file extension</div>&nbsp</center>";
                    
                }                
            }
        }
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .img-sizejk{
            width: 120px;
            height: 100px;
        }
    </style>

</head>
<body>
    <br><br>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3>Upload Images</h3>
            </div>
                <?php
                    if(isset($msg)){
                        foreach($msg as $msg){
                            echo($msg);
                        }
                    }
                ?>
            <div class="card-body">
                <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Enter Name</label>
                        <input type="text" name="name"/><br>
                        <label for="image">Enter Image</label>
                        <input type="file" name="file" accept="image/*">                
                    </div>
                    <input type="submit" value="Insert Image" name="submit" class="btn btn-primary">       
            
                </form>

            </div>
        </div>

        <br><br><br>

        <div class="card">
            <div class="card-header">
                <h3>All Images</h3>
            </div>
            <div class="card-body">
                <?php 
                    //crete a veriable for select all images that we upload to the table
                    $select_all_image = "SELECT * FROM image ORDER BY 	uploaded_time DESC";
                    $select_image_result = mysqli_query($con, $select_all_image);

                    if (!$select_image_result) {
                        die('Error: ' . mysqli_error($con));
                    }

                    $image_nor = mysqli_num_rows($select_image_result);

                    
                    //check are ther any rows in table 
                    if($image_nor > 0){
                        //get row one by on to $row veriable
                        while($row = mysqli_fetch_assoc($select_image_result)){
                            $image_path = 'uploads/'.$row["image_name"];
                ?>
                    <img src="<?php echo $image_path; ?>" alt="" class="img-sizejk">
                <?php
                        }
                    }else{
                        echo("<center>&nbsp<div class='alert alert-primary col-10' role='alert'>Images not found</div>&nbsp</center>");
                    }
                
                ?>
            </div>
        </div>
    </div>
</div> 


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
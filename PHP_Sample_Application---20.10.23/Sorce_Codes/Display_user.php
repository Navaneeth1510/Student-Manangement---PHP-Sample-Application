<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Display_user.css"/>
    <title>Student Details</title>
</head>
<body class="bg-dark">
    <?php  
        include("Student.php"); 
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display"><?php if(isset($_SESSION['name'])) echo $_SESSION['name'] ?> 
                        </h2>

                    </div>
                    <div class="card-details">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>USN</td>
                                    <td>:</td>
                                    <td><?php if(isset($_SESSION['usn'])) echo $_SESSION['usn'] ?></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><?php if(isset($_SESSION['name'])) echo $_SESSION['name'] ?></td>
                                </tr>
                                <tr>
                                    <td>Section</td>
                                    <td>:</td>
                                    <td><?php if(isset($_SESSION['section'])) echo $_SESSION['section'] ?></td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td>:</td>
                                    <td><?php if(isset($_SESSION['phone'])) echo $_SESSION['phone'] ?></td>
                                </tr>
                                <tr>
                                    <td>E-mail ID</td>
                                    <td>:</td>
                                    <td><?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>:</td>
                                    <td><?php if(isset($_SESSION['addres'])) echo $_SESSION['addres'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="options">
                        <div>
                            <a href="User_login.php"><input type="button" class="back" name="Go Back" id="Back" value="Go Back"/></a>
                        </div>
                        <div>
                            <a href="Change.php"><input type="button" class="change" name="create" id="create" value="Change Password"/></a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>
<?php
    require_once('db.php');
    $query="SELECT * FROM usn";
    $result=mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Display.css"/>
    <title>Student Details</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display">STUDENT DETAILS</h2>
                    </div>
                    <div class="card-details">
                        <table class="table">
                            <thead>
                                <tr class="first-row">
                                    <th>USN</th>
                                    <th>Name</th>
                                    <th>Section</th>
                                    <th>Phone Number</th>
                                    <th>E-Mail ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <td><?php echo $row['usno']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['section']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="options">
                        <div>
                            <a href="Admin_login.php"><input type="button" class="back" name="Go Back" id="Back" value="Go Back"/></a>
                        </div>
                        <div>
                            <a href="Creation.php"><input type="button" class="create" name="create" id="create" value="Create"/></a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>
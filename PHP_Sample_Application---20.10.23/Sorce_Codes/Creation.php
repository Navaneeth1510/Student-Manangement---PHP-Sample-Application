<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Creation.css"/>
    <title>Document</title>
</head>
<body>
    <div class="contain">
        <div class="login-box">
            <form action='Insert.php' method='POST'>
                <div class="heading">
                    <h2 class="h2">Add an entry</h2>
                </div>
                <div class="details">
                    <label for="usn" class="input2">Enter USN:</label><br>
                    <input class="input1" type='text' name='usn' id="usn" required/><br><br>

                    <label for="name" class="input2">Enter Name:</label><br>
                    <input class="input1" type='text' name='name' id="name" required/><br><br>

                    <label for="section" class="input2">Enter Section:</label><br>
                    <input class="input1" type='text' name='section' id="section" required/><br><br>

                    <label for="phone" class="input2">Enter Phone:</label><br>
                    <input class="input1" type='text' name='phone' id="phone" required/><br><br>

                    <label for="email" class="input2">Enter Email:</label><br>
                    <input class="input1" type='text' name='email' id="email" required/><br><br>
                   
                    <label for="address" class="input2">Enter Address:</label><br>
                    <input class="input1" type='text' name='address' id="address" required/><br><br>

                    <label for="password" class="input2">Enter Password:</label><br>
                    <input class="input1" type='password' name='password' id="password" required/><br><br>
                </div>
                <div class="foot">
                    <br><br>
                    <input type="submit" class="create" name="create" id="create" value="Insert" onclick=/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Change.css"/>
    <title>Document</title>
</head>
<body bgcolor="white">
    <div class="container">
        <div class="login-box">
            <form action='Update.php' method='POST'>
                <div class="heading">
                    <h2 class="h2">Change Password</h2>
                </div>
                <div class="details">
                    <label for="password" class="input2">Enter new password:</label><br>
                    <input class="input1" type='password' name='pass1' id="usn" required/><br><br>

                    <label for="password" class="input2">Confirm new password:</label><br>
                    <input class="input1" type='password' name='pass2' id="password" required/><br><br>
                </div>
                <div class="foot">
                    <input class="submit" type='submit' name='submit' id="submit" value="Change"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
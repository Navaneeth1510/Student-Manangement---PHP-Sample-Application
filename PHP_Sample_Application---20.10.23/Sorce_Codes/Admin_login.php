<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin_login.css"/>
    <title>Document</title>
</head>
<body">
    <div class="container">
        <div class="head">
            <h1 class="h">Sample Application</h1>
        </div>
        <div class="login-box">
            <form action='Administartor.php' method='POST'>
                <div class="heading">
                    <h2 class="h2">Administrator Login</h2>
                </div>
                <div class="details">
                    <label class="label">Enter the Details</label><br><br>
                    
                    <label for="email" class="input2">E-Mail</label><br>
                    <input class="input1" type='text' name='email' id="usn" required/><br><br>

                    <label for="password" class="input2">Password</label><br>
                    <input class="input1" type='password' name='password' id="password" required/><br><br>
                </div>
                <div class="foot">
                    <a href="User_login.php" class="anchor">Are you a Student? Log In</a><br><br>

                    <input class="submit" type='submit' name='submit' id="submit" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>
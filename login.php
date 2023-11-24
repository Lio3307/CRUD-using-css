
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
    <form action="login.php" method="post">
    <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">

        <?php
        session_start();
        $username = "admin";
        $password = "admin";

        if ( !isset($_POST['username'], $_POST['password']) ) {
        	// Could not get the data that should have been sent.
        	exit('<p>Please fill both the username and password fields!</p>');
        }

        if ($_POST['password'] === $password){
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            header('Location: admin.php');
        }else{
            echo "<script>alert ('incorrect username or password')</script>";
        }
        ?>
    </form>
    </div>
</body>
</html>
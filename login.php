
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
    <form action="admin.php" method="post">
    <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
    </div>
    <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin123') {
        // Jika login berhasil akan di arahkan ke halaman admin
        $_SESSION['login'] = true;
        header("Location: admin.php");
        exit;
    } else {
        // Jika login gagal maka akan eror 
        echo "Username atau password salah!";
    }
}
?>

</body>
</html>
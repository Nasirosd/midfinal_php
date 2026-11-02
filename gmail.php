<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="text" name="password" placeholder="Enter your password">
        <button type="submit">Login</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password =$_POST['password'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address"; }
    else {
        echo "valid email address";
        echo "<br>";
    }
} 
if (strlen($password) <8) {
    echo "password must be 8 characters ";
}
    else {
        echo "valid password";
    }
 
    ?>

</body>
</html>
=======

<!DOCTYPE html>
<html>
<head>
    <title>Login Registration Validation</title>
</head>
<body>

<h2>Login Registration Form</h2>

<form method="post" action="">
    Username:
    <input type="text" name="username" required>
    <br><br>

    <input type="submit" name="submit" value="Register">
</form>

<?php
if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);

    // Check username length (4 to 8 characters)
    if (strlen($username) < 4 || strlen($username) > 8) {
        echo "Error: Username must be between 4 and 8 characters.";
    }
    // Check whether username contains @
    elseif (strpos($username, '@') === false) {
        echo "Error: Username must contain the @ symbol.";
    }
    else {
        echo "Registration successful!";
    }
}
?>

</body>
</html>
>>>>>>> 89b3e75895f31e87ebd728945429d98e6f73e96a

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
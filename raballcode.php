class.php(file name)
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
file.php(file name)
<?php 
$data = file('results.txt');
echo "<pre>";
print_r($data);
?>
results.txt (file name)
ID,    Name,    Batch,   Result
101,   Rabeya,  pwad73,  PASS
102,   Nela,    pwad73,  PASS
103,   Farjana, pwad73,  FAIL
104,   Sumaiya, pwad73,  PASS
105,   Rokon,   pwad73,  PASS
106,   Rifat,   pwad73,  FAIL
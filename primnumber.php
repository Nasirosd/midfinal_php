<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>


    <form method="POST">
        Enter a number: <input type="number" name="num" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["num"];
        $isPrime = true;


        if ($n <= 1) {
            $isPrime = false;
        } else {
        
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        
        if ($isPrime) {
            echo "<h3>$n is a Prime Number.</h3>";
        } else {
            echo "<h3>$n is NOT a Prime Number.</h3>";
        }
    }
    ?>

</body>
</html>
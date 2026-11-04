<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>Prime Number</h3>
   <form action="" method="post">
    <input type="number" name="num" placeholder="Enter the number"><br><br>
    <input type="submit" name="submit" value="Check">
   </form>
   <?php 
   if(isset($_POST['submit'])){
    $num = $_POST['num'];
    if($num==1){
        echo "$num is not a prime number";
    }elseif($num==2){
        echo "$num is a prime number";
    }else{
        for($i=2; $i<$num; $i++){
            if($num%$i===0){
                echo "$num is not prime number";
                return;
            }
        }
        echo "$num is a prime number";
    }
   }
   ?>
</body>
</html>
=======
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
>>>>>>> 89b3e75895f31e87ebd728945429d98e6f73e96a

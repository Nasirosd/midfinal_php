<!DOCTYPE html>
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

<?php 
function isPrime($n) {
    if ($n <= 1) return false;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

$num = 15;
if (isPrime($num)) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}
?>

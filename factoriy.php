<!DOCTYPE html>
<html>
<body>

    <form method="POST">
        Enter a number: <input type="number" name="num" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if (isset($_POST['num'])) {
        $num = $_POST['num'];
        $fact = 1;

        for ($i = 1; $i <= $num; $i++) {
            $fact = $fact * $i;
        }

        echo "<h3>Factorial of $num is: $fact</h3>";
    }
    ?>

</body>
</html>
<!DOCTYPE html>
<html>
<body>

    <form method="POST">
        Enter Grade: <input type="text" name="grade">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['grade'])) {
        $grade = $_POST['grade'];

        if ($grade == 'A' || $grade == 'a') {
            echo "excellent";
        } elseif ($grade == 'B' || $grade == 'b') {
            echo "good";
        } elseif ($grade == 'C' || $grade == 'c') {
            echo "fair";
        } elseif ($grade == 'D' || $grade == 'd') {
            echo "poor";
        } elseif ($grade == 'F' || $grade == 'f') {
            echo "failure";
        } else {
            echo "Invalid grade";
        }
    }
    ?>

</body>
</html>
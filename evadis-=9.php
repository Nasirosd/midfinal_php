<!DOCTYPE html>
<html>
<body>

    <h2>Student Result Sheet</h2>

    <table border="1" cellpadding="5">
        <tr>
            <th>Student Name</th>
            <th>Score</th>
        </tr>

        <?php
        // 1. Associative Array (Name => Score)
        $students = [
            "Rahim" => 85,
            "Karim" => 92,
            "Sumon" => 78,
            "Tania" => 95,
            "Farhana" => 88
        ];

        $maxScore = 0;
        $topStudent = "";

        // 2. Loop diye table banano ar maximum score khunje ber kora
        foreach ($students as $name => $score) {
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$score</td>";
            echo "</tr>";

            if ($score > $maxScore) {
                $maxScore = $score;
                $topStudent = $name;
            }
        }
        ?>
    </table>

    <!-- 3. Result Display -->
    <h3>Highest Scorer: <?php echo $topStudent; ?> (Score: <?php echo $maxScore; ?>)</h3>

</body>
</html>
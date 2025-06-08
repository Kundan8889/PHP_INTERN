<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['number'];

    echo "<h2>Table of $num</h2>";
    echo "<table border='1' cellpadding='5' >";

    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        echo "<tr><td>$num</td><td>$i</td><td>$result</td></tr>";
    }

    echo "</table>";
} else {
    echo "Invalid Request!";
}
?>

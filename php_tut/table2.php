<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiple Tables in One</title>
    <style>
        table {
            border: 1px solid black;
            margin-top: 20px;
        }
       th, td {
            border: 1px solid black;
            padding: 6px
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Task 2 ,from 1 to give no.</h1>
<form method="post">
    <input type="number" name="number" required>
    <input type="submit" value="Show Tables">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limit = $_POST['number'];

    echo "<h3>Tables from 1 to $limit</h3>";
    echo "<table>"; 

    echo "<tr>";
   
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($num = 1; $num <= $limit; $num++) {
            $result = $num * $i;
            echo "<td>$result</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>

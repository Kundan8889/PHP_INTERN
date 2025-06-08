<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<body>
    <table>
    <th>Express.</th>
    <th>Result</th>

    <?php
    $number = 10;
    
    if(){
    for ($x = 1; $x <= 5; $x++) {
            echo "<tr>";
            echo "<td>" . $x . "</td>";
            echo "<td>" . ($x * 10) . "</td>";
            echo "</tr>";
        }
    }
    
    ?>
    </table>
    

</body>

</html> -->





<!DOCTYPE html>
<html>
<head>
    <title>Number Table </title>
</head>
<body>


    <form method="post">
        <input type="number" name="number" required>
        <button type="submit">Show Table</button>
    </form>

    <?php if (!empty($numbers)): ?>
        <h3>Generated Numbers:</h3>
        <table border="1" cellpadding="10">
            <tr>
                <th>Index</th>
                <th>Number</th>
            </tr>
            <?php for ($j = 0; $j < count($numbers); $j++): ?>
                <tr>
                    <td><?= $j + 1 ?></td>
                    <td><?= $numbers[$j] ?></td>
                </tr>
            <?php  ?>
        </table>
    <?php  ?>
</body>
</html>

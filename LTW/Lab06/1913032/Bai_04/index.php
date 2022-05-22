<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 06 - Bài 04 </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Bài 04</h1>
    <table>
        <?php
        for($i = 1; $i <= 7; $i++) {
            echo "<tr>";
            for($j = 1; $j <= 7; $j++) {
                echo "<td>". ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</div>
</body>
</html>
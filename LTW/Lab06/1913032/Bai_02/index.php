<?php
    function printMessage($n) {
        switch ($n % 5) {
            case 0:
                echo "Hello";
                break;
            case 1:
                echo "How are you?";
                break;
            case 2:
                echo "I’m doing well, thank you";
                break;
            case 3:
                echo "See you later";
                break;
            case 4:
                echo "Good-bye";
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 06 - Bài 02 </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>
?>
<body>
<div class="container">
    <h1>Bài 02</h1>
    <?php
        $num = 10;
    ?>
    <h2>Number = <?php echo $num ?> => <?php printMessage($num); ?></h2>
</div>
</body>
</html>
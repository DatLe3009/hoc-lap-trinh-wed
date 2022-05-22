<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 06 - Bài 01 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Bài 01</h1>
            <?php
                $x = 10;
                $y = 7;
            ?>
            <ul>
                <li><?php echo $x; ?> + <?php echo $y; ?> = <?php echo $x + $y; ?></li>
                <li><?php echo $x; ?> - <?php echo $y; ?> = <?php echo $x - $y; ?></li>
                <li><?php echo $x; ?> * <?php echo $y; ?> = <?php echo $x * $y; ?></li>
                <li><?php echo $x; ?> / <?php echo $y; ?> = <?php echo $x / $y; ?></li>
                <li><?php echo $x; ?> % <?php echo $y; ?> = <?php echo $x % $y; ?></li>
            </ul>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qst5</title>
</head>
<body>
    <form action="" method="get">
        <label for="i1">Num1: </label>
        <input type="number" name="num1" id="i1">
        <label for="i2">Num2: </label>
        <input type="number" name="num2" id="i2">
        <input type="submit" value="soma">
    </form>

    <?php 
    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];
    ?>
    <p><?php echo rand($num1,$num2);?></p>
</body>
</html>
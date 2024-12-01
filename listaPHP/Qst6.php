<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qst6</title>
</head>
<body>
    <form action="" method="get">
        <label for="i1">Num: </label>
        <input type="number" name="num" id="i1">
        <input type="submit" value="soma">
    </form>
    <?php
    $num = $_REQUEST["num"];
    if($num%2 ==0){
        echo $num . " Esse número é par";
    } else{
        echo $num . " Esse número não é par";
    }
    ?>
</body>
</html>
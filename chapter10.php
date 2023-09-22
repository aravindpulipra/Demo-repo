<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wjilee loopt</title>
</head>
<body>
<form action="chapter10.php"  method="POST">
          <label for="num1">enternumber</label><br>
          <input type="number" name="num1" id="num1"><br>
          <input type="submit">

    </form>
    <?php
    $num1=$_POST["num1"];
    $a=1;
    do{
        echo "hello <br>";
        $a++;
    }while ($a <=10);
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="chapter8.php"  method="POST">
          <label for="nnn">enternumber</label><br>
          <input type="number" name="nnn" id="nnn"><br>
          <input type="submit">

    </form>
    <?php
    $nnn=$_POST["nnn"];
    if($nnn<0){
        echo "Its a Negative  numbbber";
    }else if($nnn>0){
        echo "Its a positive number";
    }else{
        echo "It zero";
    }
       
    
    ?>
</body>
</html>
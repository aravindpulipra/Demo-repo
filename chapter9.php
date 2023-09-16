<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="chapter9.php"  method="POST">
          <label for="nnn">enternumber</label><br>
          <input type="text" name="nnn" id="nnn"><br>
          <input type="submit">

    </form>
    <?php
    $nnn=$_POST["nnn"];
    switch($nnn){
        case "A":
            echo "Apple";
            break;
        case "B":
            echo "Bat";
            break;
        case "C":
            echo "Cat";
            break;
        default:
             echo "Invalid Letter";
             break;
    }
    ?>
    
</body>
</html>
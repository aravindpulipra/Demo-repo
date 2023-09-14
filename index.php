<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Php</title>
</head>
<body>
    <?php
    //This is a PHP program
    #This is Comment
    /*
    This is Multi Line comment
    */
    echo "Hello My World";
    echo "<br>";
    echo "<h1>Learn PHP<h1>";

    for($i=0; $i<5; $i++) {
        ?>
        Line <?php echo ($i+1)?><br/>
        <?php
    }
    ?>
</body>
</html>


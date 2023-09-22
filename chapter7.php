<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="chapter7.php" method="POST">
        <label for="name">Enter Your User  Name</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="pass">Enter Your Password</label><br>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit">

    </form>

    <?php
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    echo "You have Enter Your Details";

    ?>
    
</body>
</html>
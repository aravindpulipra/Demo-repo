<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrayt</title>
</head>
<body>
    <?php
        $country=array("IN"=>"INDIA", "SL"=>"SRE LANKA", "UK"=>"UNITED KINGDOM");
          foreach($country as $c=> $c_value){
            echo $c, "=", $c_value;
            echo "<br>";
          }
    ?>
    
</body>
</html>
<?php  

$cookie_name="user";
$cookie_value="Tanvirul HQ Nishat";

setcookie($cookie_name,$cookie_value , time() + (3600), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    echo $_COOKIE["$cookie_name"];
    ?>
</body>
</html>







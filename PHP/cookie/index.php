<?php
    $_COOKIE_name = "senghor";
    $_COOKIE_id = 30;

    setcookie($_COOKIE_name, $_COOKIE_id, time() + (86400 * 30), "/");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cookie</title>
</head>
<body>
    <?php
        if(isset($_COOKIE[$_COOKIE_name])){
            echo "Your name is  ".$_COOKIE_name."<br>";
            echo "Your id is  ".$_COOKIE_id;
        }else{
           echo "Your name is not yet set!!!!!!!"."<br>";
        }


       
    ?> 

</body>
</html>
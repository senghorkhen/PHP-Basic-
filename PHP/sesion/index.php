
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
<?php
$_SESSION['name'] = "sreyrot";
$_SESSION['id'] = 56;

echo "Your name is    ".$_SESSION['name']."<br>";
echo "Your id is   ".$_SESSION['id'];

?> 
   
</body>
</html>
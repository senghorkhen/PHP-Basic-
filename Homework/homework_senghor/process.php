<?php
    if(isset($_POST['btn-submit'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        if($username != "" && $password != "") {
            header('location:success.php');
        }else {
            header('location:field.php');
        }
    }

    // if($username=="username"||$password=="password")  {

    // }else if($username=="admin") {
    //     header('location:success.php');
    //     die();
    // }
    
//register
    if(isset($_POST['submit'])) {
        header('location:register.php');
    }

//teacher explain
    // if(isset($_POST['btn-submit'])) {
    //     $username=$_POST['username'];
    //     $password=$_POST['password'];
    //     if(  $username == "" && $password == "") {
    //         header('location:field.php');
    //     }
    // }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homewore PHP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image: url("images/background.jpg");
            background-size:cover;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <div class="alert alert-primary">
                <p><strong>Login Success!!!</strong> Congratulation you have done a great job.</p>
            </div>
                <a href="index.php" class="btn btn-primary btn-block">Log Out</a>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body> 
</html> -->
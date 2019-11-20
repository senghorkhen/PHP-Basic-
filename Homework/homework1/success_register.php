<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Homework PHP</title>
    <style>
        body{
            background-image: url("images/register.jpg");
            background-size:cover;
        }
        div.style{
            margin-top: 90px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
        <div class="alert alert-success">
            <strong>Register Success!!!</strong> Congratulation you can use the application.
        </div>
        <form action="process.php" method="post">
            <button type="submit" class="btn btn-primary btn-block" name="register">Log Out</button>
        </form>
    </div>
    <div class="container mt-5">
        <div class="row">
        <form action="#" method="post"></form>
            <div class="col-12">
            <ul class="list-group">
            <?php session_start(); ?>
                <li class="list-group-item" name="name"><strong>Username: </strong><?php
                    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                ?></li>
                <li class="list-group-item" name="pwd"><strong>Password: </strong><?php
                    if (isset($_SESSION['password']) && !empty($_SESSION['password'])) {
                        echo $_SESSION['password'];
                    }
                ?></li>
                <li class="list-group-item" name="em"><strong>Email: </strong><?php
                    if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                        echo $_SESSION['email'];
                    }
                ?></li>
                <li class="list-group-item" name="sms"><strong>Message: </strong><?php
                    if (isset($_SESSION['sms']) && !empty($_SESSION['sms'])) {
                        echo $_SESSION['sms'];
                    }
                ?></li>
            </ul>
            </div>
        </div>
    </div>
     </div>
 </div>
</body>
</html>
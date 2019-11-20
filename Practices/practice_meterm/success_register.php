<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body{
            background-image: url(images/rs.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success">   
                    <strong>Success Login!!!</strong> Congraulation can use the application
                </div>
                <form action="index.php" method="post">
                    <button type="submit" name="success_register" class="btn btn-primary btn-block">login Out</button>
                </form>
                </div>
            </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                <?php session_start() ?>
                    <li class="list-group-item" name="hiuser"><strong>Username:</strong><?php
                        if(isset($_SESSION['$username']) && !empty($_SESSION['$username'])) {
                            echo $_SESSION['$username'];
                        }
                    ?></li>
                    <li class="list-group-item" name=""><strong>Password:</strong><?php
                         if(isset($_SESSION['pass']) && !empty($_SESSION['pass'])) {
                            echo $_SESSION['pass'];
                        }
                    ?></li>
                    <li class="list-group-item" name="hiem"><strong>Email:</strong><?php
                          if(isset($_SESSION['$email']) && !empty($_SESSION['$email'])) {
                            echo $_SESSION['$email'];
                        }
                    ?></li>
                    <li class="list-group-item" name="hisms"><strong>Message:</strong><?php
                            if(isset($_SESSION['$message']) && !empty($_SESSION['$message'])) {
                                echo $_SESSION['$message'];
                            }
                    ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body{
            background-image: url(images/bg.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center"><h2>Login Form</h2></div>
                        <div class="card-body">
                            <form action="process.php" method="post">
                                <div class="group-form">
                                    <label for="fname">Username:</label>
                                    <input type="text" name="username" id="fname" placeholdeer="Username" class="form-control">
                                </div>
                                <div class="group-form">
                                    <label for="pwd">Password:</label>
                                    <input type="password" name="password" id="pwd" placeholdeer="Password" class="form-control">
                                </div>
                                <div class="group-form mt-5">
                                  <button name="submit" class="btn btn-primary">Login</button>
                                  <button name="btn-submit" class="btn btn-danger float-right">Register</button>
                                </div>
                            </form>
                        </div>
                    
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>
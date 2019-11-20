<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body{
            background-image: url("images/background.jpg");
        }
        div.style{
            margin-top: 90px;
        }
    </style>
</head>
<body>
 <div class="container">
     <div class="row">
         <div class="col-4"></div>
         <div class="col-4 style">
            <div class="card">
                    <h2 class="card-header text-center">Login Form</h2>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <div class="form-group">
                                <label for="fname">Username:</label>
                                <input type="text" name="username" id="fname" placeholder="Username" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" name="password" id="pwd" placeholder="Password"  class="form-control"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btn-submit"class="btn btn-primary">Login</button>
                                <button type="submit" name="submits"class="btn btn-danger float-right">Register</button>
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
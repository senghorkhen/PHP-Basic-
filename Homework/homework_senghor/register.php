<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
 <div class="container">
     <div class="row">
         <div class="col-4"></div>
         <div class="col-4 style">
            <div class="card">
                    <h2 class="card-header text-center">Register Login</h2>
                    <div class="card-body">
                        <form action="register_process.php" method="post">
                            <div class="form-group">
                                <label for="fname">Username:</label>
                                <input type="text" name="username" id="fname" placeholder="Username" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" name="password" id="pwd" placeholder="Password"  class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="em">Email:</label>
                                <input type="email" name="password" id="em" placeholder="Email"  class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="sms">Message:</label>
                                <textarea name="message" rows="2" cols="40"></textarea><br />
                            </div>
                            <div class="form-group">
                                <button type="btn-submit" name="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-danger float-right">Back to Login</button>
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
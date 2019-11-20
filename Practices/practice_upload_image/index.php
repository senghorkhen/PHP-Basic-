<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="cantainer mt-5">
        <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <form action="#"method="post">
            <div class="group-form">
                    <label for="fname">Username:</label>
                    <input type="text" name="name" class="form-control">
            </div>
            <div class="group-form">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control">
            </div>
            <div class="group-form">
                <button class="btn btn-primary float-right">Login</button>
            </div>
            <div class="group-form">
                <button>Upload</button> No select
            </div>
        </form>
        </div>
        <div class="col-4"></div>
        </div>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="card">
            <div  class="card-body">
            <form action="process.php" method="post" enctype="multipart/form-data">
            <br>
                <div class="form-group">
                    <label for="fname">Username*:</label>
                    <input type="text" name="username" id="fname" placeholder="Username" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="pwd">Password*:</label>
                    <input type="password" name="password" id="pwd" placeholder="Password" class="form-control" >
                </div>

                <div class="form-group">
                    Profile Picture*:
                    <input type="file" name="upload" id="upload" multiple>
                    
                </div>
                <input type="submit" name="send">
            </form>
        </div>
        </div>
        </div>
    </div>
    <div class="col-md-4"></div>
    </div>





<?php
if(isset($_POST["send"])){
$name = $_FILES["upload"]["name"];
$location = $_FILES["upload"]["tmp_name"];
$date = date("Y-m-d-H-s-i");

mkdir("empty/".$date);
move_uploaded_file($location,"empty/".$date."/".$name);
echo"<img src ='empty/$date/$name'>";
}

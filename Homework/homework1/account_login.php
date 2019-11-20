<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homewore PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
            <div class="alert alert-warning">
                <p><strong>You don't have account yet!!!</strong> Please register.</p>
            </div>
            <form action="process.php" method="post">
               <button type="submit" class="btn btn-primary btn-block" name="account_login">Register</button>
            </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>
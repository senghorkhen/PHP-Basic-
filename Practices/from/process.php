<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
</head>
<body>
    <form action="process.php" method="post">
    <h1>Personal Information</h1>
    <hr>
    <div class="form-group">
    <label for="fname">Firstname:</label>
    <input type="text" name="firstname" id="fname">
    </div>
    <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="text" password="password" id="pwd">
    </div>
    <div class="form-group">
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" id="gender" value="boy">Male
    <input type="radio" name="gender" id="gender" value="girl">Female
    </div>
    </form>
</body>
</html>
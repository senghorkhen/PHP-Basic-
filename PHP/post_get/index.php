<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
    <h1>Personal Information</h1>
    <hr>
    <div class="form-group">
        <label for="fname">Firstname:</label>
        <input type="text" name="firstname" id="fname" class="form-control">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password" id="pwd" class="form-control">
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender" value="boy">Male
        <input type="radio" name="gender" id="gender" value="girl">Female
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select name="status" id="status" class="form-control">
            <option value="Single">Single</option>
            <option value="Marriage">Marriage</option>
        </select>
    </div>
    <div class="form-group">
        <label for="inter">Interest:</label><br>
        <input type="checkbox" name="interest[]" id="inter" value="Dancing">Dancing<br>
        <input type="checkbox" name="interest[]" id="inter" value="Reading">Reading<br>
        <input type="checkbox" name="interest[]" id="inter" value="Watch Movie">Watch Movie<br>
    </div>
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="main.js"></script>
</head>
<body>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="process.php" method="post">
<h1>Personal Information</h1>
<hr>
<div class="form-group">
<label for="fname">Firstname:</label>
<input type="text" name="firstname" id="fname" class="form-control">
</div>
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" name="password" id="pwd" class="form-control">
</div>
<div class="form-group">
<label for="gender">Gender:</label>
<input type="radio" name="gender" id="gender" value="boy">Male
<input type="radio" name="gender" id="gender" value="girl">Female
</div>
<div class="form-group">
<label for="status">Status:</label>
<select name="status" id="status" class="form-control">
<option value="Single">Single</option>
<option value="Marriage">Marriage</option>
</select>
</div>
<div class="form-group">
<label for="inter">Interest:</label><br>
<input type="checkbox" name="interest[]" id="inter" value="Dancing"> Dancing <br>
<input type="checkbox" name="interest[]" id="inter" value="Reading"> Reading <br>
<input type="checkbox" name="interest[]" id="inter" value="Watch Movie"> Watch Movie <br>
</div>

<input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>
</div>
<div class="col-md-4"></div>
</div>
</body>
</html>
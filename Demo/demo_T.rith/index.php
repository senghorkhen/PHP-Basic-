<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Practice</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                   <h2 class="card-header">
                    Personal Information
                   </h2>
                   <div class="card-header">
                   <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="fname">Username:</label>
                        <input type="text" name="username" id="fname" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" id="pwd" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" id="gender" value="boy"/> Male
                        <input type="radio" name="gender" id="gender" value="girl"/> Female
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status">
                            <option value="Single">Single</option>
                            <option value="Marriage">Marriage</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="interest">Interest:</label>
                        <input type="checkbox" name="interes[]" value="Dancing" id="interest"/> Dancing
                        <input type="checkbox" name="interes[]" value="Reaecing" id="interest"/> Reaecing
                        <input type="checkbox" name="interes[]" value="Watch Movie" id="interest"/> Watch Movie
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" value="submit" class="btn btn-primary"/>
                    </div>
                   </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
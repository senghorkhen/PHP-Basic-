<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP</title>
</head>
<body>
    <form action="action.php" method="post"  enctype="multipart/form-data">
        <div class="wrapper">
                <label for="fullname">Username</label><br>
        <input type="text" name="username" id="fullname"><br>

        <label for="pwd">Password</label><br>
        <input type="password" name="password" id="pwd"><br>

        <label for="phonenumber">Phone Number</label><br>
        <input type="text" name="phoneNumber" id="phonenumber"><br>

        <label for="em">Email</label><br>
        <input type="text" name ="email" id="em"><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" name="gender" id="gender" value="boy">Male<br>
        <input type="radio" name="gender" id="gender" value="girl">Female<br>

        <label for="province">Province:</label><br>
        <select name="province" id="province">
            <option value="Kampongthom">Kampongthom</option><br>
            <option value="Kampongcham">Kampongcham</option>
        </select><br>

        <label for="interest">Interest Subjects:</label><br>
        <input type="checkbox" name="interest[]" value="No Interest" checked style="display: none;">
        <input type="checkbox" name="interest[]" value="PHP">PHP <br>
        <input type="checkbox" name="interest[]" value="Database">Database <br>
        <input type="checkbox" name="interest[]" value="JavaScript"> JavaScript <br>
   
        <label for="file">Picture Profile</label><br>
        <input type="file" name="picture" id="file"><br>
        
        <label for="message"></label><br>
        <textarea name="message" id="message" cols="30" rows="5"></textarea><br>

        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Clear information" name="clear"> 
        </div>
    
    </form>
</body>
</html>
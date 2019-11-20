<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload image</title>
</head>
<body>
    <form action="action/upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file-name">  
      <br>
      <br>
      <button type="submit" name="upload">Upload Now</button>  
</form>
</body>
</html>
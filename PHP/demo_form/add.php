<?php
    include_once "dbConnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="fullname" placeholder="fullname"><br>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" name="create" value="Create"><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['create'])) {
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $password = md5($_POST['password']);
        //OR
        //$pass = $_POST['password'];
        //$password = md5($pass);

        $query = "INSERT INTO tbl_user(fullname, gender, password) VALUES('$fullname','$gender','$password')";
        $result = mysqli_query($conn,$query);
        if($result) {
            header("location: index.php");
        }else {
            echo "Cannot Add Data!!!";
        }
    }
?>
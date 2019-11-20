<?php
    include_once "dbConnect.php";
    $id = $_GET['id'];
    $query = mysqli_query($conn,"SELECT * FROM tbl_user WHERE id = '$id'");
    foreach($query as $rows){

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
        <input type="text" name="fullname" placeholder="fullname" value="<?php echo $rows['fullname'];?>"><br>
        <select name="gender">
            <option <?php if($rows['gender'] == "Male"){?> selected="selected"<?php } ?> value="Male">Male</option>
            <option <?php if($rows['gender'] == "Female"){?> selected="selected"<?php } ?> value="Female">Female</option>
        </select><br>
        <input type="password" name="password" placeholder="password" value="<?php echo $rows['password'];?>"><br>
        <input type="submit" name="edit" value="Edit Information"><br>
    </form>
    <?php
        }
    ?>
</body>
</html>
<?php
    if(isset($_POST['edit'])) {
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $password = md5($_POST['password']);

        $query = "UPDATE tbl_user SET fullname ='$fullname', gender = '$gender', password = '$password' WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if($result) {
            header("location: index.php");
        }else {
            echo "Cannot Edit Data!!!";
        }
    }
?>
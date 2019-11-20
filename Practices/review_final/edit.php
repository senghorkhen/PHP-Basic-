<?php
    include_once "connect.php";
    $id = $_GET['id'];
    $query ="SELECT * FROM tbl_user SET fullname='$fullname'";
    $result = mysqli_query($conn, $query);
?>
<form action="#" method="post">
        <input type="text" name="fullname" placeholder="fullname" value="<?php echo ?>"><br>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" name="create" value="Create"><br>
    </form>
    <?php
        if(isset($_POST['create'])) {
            $fullname = $_POST['fullname'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];

            $query = "INSERT INTO tbl_user(fullname,gender,password) VALUES('$fullname','$gender',$password)";
            $result = mysqli_query($conn, $query);
            if($result) {
                header('location: index.php');
            }
        }
    ?> 
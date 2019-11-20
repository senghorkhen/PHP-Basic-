<?php
    include_once "connection.php";
    if(isset($_POST['create'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $genger= $_POST['genger'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $filename = $_FILES['file']['name'];
        $filelocation = $_FILES['file']['tmp_name'];
        move_uploaded_file($filelocation,"img/".$filename);

        $query = mysqli_query($connection,"INSERT INTO tbl_contact (firstname,lastname,genger,email,phone,profile)
        VALUES('$fname','$lname','$gender','$email','$phone','$filename')");
//     if($query == TRUE){
//         header("Location: index.php");
//     }else{
//         echo "cannot add information";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="mutipart/form-data">
        <input type="text" name="firstname" placeholder="Firstname"><br>
        <input type="text" name="lastname" placeholder="Lastname"><br>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <input type="email" name="email" placeholder="Email"> <br>
        <input type="text" name="phone" placeholder="Phone"><br>
        <input type="file" name="file"> <br>
        <input type="submit" name="create" value="Create New Contact"><br>
    </form>
</body>
</html>
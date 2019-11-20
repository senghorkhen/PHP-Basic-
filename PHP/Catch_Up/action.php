<?php
    $username =$_POST['username'];
    $password =$_POST['password'];
    $phoneNumber =$_POST['phoneNumber'];
    $email=$_POST['email'];
    $gender =$_POST['gender'];
    $province =$_POST['province'];
    $message = $_POST['message'];
    $interest= $_POST['interest'];
    $filename = $_FILES['picture']['name'];
    $filelocation = $_FILES['picture']['tmp_name'];
    
    move_uploaded_file($filelocation, "images/". $filename);

    if(isset($interest)){
        for($i = 0; $i < count($interest); $i++){
            echo $interest[$i];
        }
    }else{
        echo "No interest!!!";
    }
    echo $username;
    echo $password;
    echo $phoneNumber;
    echo $email;
    echo $gender;
    echo $province;
    echo $message;
    echo "<img src='images/$filename'>";
?>
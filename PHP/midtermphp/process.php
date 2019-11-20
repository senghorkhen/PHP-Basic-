<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Midterm Exam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<?php
//All fields cannot be empty. If any field is empty and user clicks on submit information 

if(isset($_POST['btn-submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $province = $_POST['province'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $interest = $_POST['interest'];
    $description = $_POST['shortBio'];
    if($username == "" || $email == ""  || $province == ""  ||  $phone == ""  || $gender == ""  || $status == ""  || $interest == "" ) {
       echo "Cannot empty";
    }else {
?>    
 <div class="container mt-5">
        <div class="row">
        <h2>Result After user has clicked on Submit Information button:</h2>
            <div class="col-12">
               <ul class="list-group">
                <li class="list-group-item"><strong>Username: </strong><?php echo $username;?></li>
                <li class="list-group-item"><strong>Email: </strong><?php echo $email;?></li>
                <li class="list-group-item"><strong>Province: </strong><?php echo $province;?></li>
                <li class="list-group-item"><strong>Phone: </strong><?php echo $phone;?></li>
                <li class="list-group-item"><strong>Gender: </strong><?php echo $gender;?></li>
                <li class="list-group-item"><strong>Status: </strong><?php echo $status;?></li>
                <li class="list-group-item"><strong>Interest: </strong><?php 
                                                                            foreach ($interest as $key => $value) {
                                                                                echo $value;
                                                                            }
                                                                        ?></li>
                <li class="list-group-item"><strong>Short Description: </strong><?php echo $description;?></li>
               </ul>
            </div>
        </div>
    </div>    
 <?php
    }
} 
?> 
</body>
</html>
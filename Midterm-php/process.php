<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Midterm Exam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">   
    <style>
        label{
            font-weight: bold;
        }
        div.card-header{
            font-weight: bold;
        }
    </style> 
</head>
<body>
<?php
    if(isset($_POST['btn-clear'])) {
        header("location: index.php");
    }
    if(isset($_POST['btn-submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $province = $_POST['province'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];
        $interest = $_POST['interest'];
        $description = $_POST['shortBio'];
            
        if($username == "" || $email == "" || $province == "" || $phone == "" || $gender == "" || $status == "" || $interest == "" || $description == ""){
?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="alert alert-danger" role="alert">
                            <p><strong>Fields cannot be empty!</strong></p>
                        </div>
                        <form action="index.php">
                            <input type="submit" value = "Back to Login" class="btn btn-primary form-control" name="back">
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
<?php
        }else{

?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <ul class="list-group">
                            <li class="list-group-item"><strong> Username: </strong><?php echo $username; ?></li>
                            <li class="list-group-item"><strong> Email: </strong><?php echo $email; ?></li>
                            <li class="list-group-item"><strong> Province: </strong><?php echo $province; ?></li>
                            <li class="list-group-item"><strong> Phone: </strong><?php echo $phone; ?></li>
                            <li class="list-group-item"><strong> Gender: </strong><?php echo $gender; ?></li>
                            <li class="list-group-item"><strong> Status: </strong><?php echo $status; ?></li>
                            <li class="list-group-item"><strong> Interet: </strong><?php 
                                                                                    foreach($interest as $value);
                                                                                        echo $value; ?></li>
                            <li class="list-group-item"><strong> Short Description: </strong><?php echo $description; ?></li>           
                        </ul>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
<?php
        }
    }
?>
</body>
</html>
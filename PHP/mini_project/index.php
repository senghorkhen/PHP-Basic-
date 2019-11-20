<?php
    include_once "connection.php";
    $query = mysqli_query($connection,"SELECT * FROM tbl_contact");
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
    <a href="add.php" class="btn btn-success">Add New Contact</a>
    <table class="table table-bordered">
        <tr>
            <th>
                <tr>
                    <th>ID</th>
                    <th>Profile</th>
                    <th>Fullname</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                <?php
                     while($tota = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $tota['id'];?></td>
                    <td><img src="<?php echo $tota['profile'];?> " width="120px" alt="<?php echo $tota['profile'];?>"></td>
                    <td><?php echo $tota['firstname']." ".$tota['lastname'];?></td>
                    <td><?php echo $tota['genger'];?></td>
                    <td><?php echo $tota['email'];?></td>
                    <td><?php echo $tota['phone'];?></td>
                    <a href="edit_form.php"></a>
                </tr>
            <?php } ?>
            </th>
        </tr>
    </table>
    </div>
</div>

</body>
</html>
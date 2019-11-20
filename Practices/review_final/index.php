<?php 
    include_once "connect.php";
    
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
<table>
    <tr>
        <th>ID</th>
        <th>Fullname</th>
        <th>Gender</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php
        include_once "connect.php";
        $query ="SELECT * FROM tbl_user";
        $result = mysqli_query($conn, $query);

        foreach ($result as $rows) {
       
    ?>
    <tr>
        <td><?php echo $rows['id']?></td>
        <td><?php echo $rows['fullname']?></td>
        <td><?php echo $rows['password']?></td>
        <td>
            <a href="edit.phhp?=id<?php echo $rows['id'];?>">Edit</a>
            <a href="delet.phhp?=id<?php echo $rows['id'];?>">Delete</a>
        </td>
    </tr>
    <?php
     }
    ?>
</table>
</body>
</html>

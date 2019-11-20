<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final</title>
</head>
<body>
    <a href="add.php">Add New Informatio</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Gender</th>
            <th>Password</th>
            <th>Action</th>
        </tr>  
        <?php
            include_once "dbConnect.php";
            $query = "SELECT * FROM tbl_user";
            $data = mysqli_query($conn, $query);
            $id = 1;
            foreach ($data as $rows) {
        ?> 
        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $rows['fullname']?></td>
            <td><?php echo $rows['gender']?></td>
            <td><?php echo $rows['password']?></td>
            <td>
                <a href="edit.php?id=<?php echo $rows['id'];?>">Edit</a>
                <a href="delete.php?id=<?php echo $rows['id'];?>" onClick= "return comfirm('Are you sure for delete')">Delete</a>
            </td>
        </tr>
        <?php
        $id ++;
        }
        ?>
    </table>
</body>
</html>

<?php
    include_once "connection.php";
    $query = mysqli_query($connection,"SELECT * FROM db_php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final</title>
</head>
    <a href="add.php">Add New Contact</a>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Action</th>
        </tr>
        <?php
         while($result = mysqli_fetch_array($query)) {
       
        ?>
        <tr>
            <td><?php echo $result['id'];?></td>
            <td><?php echo $result['fullname'];?></td>
            <td><a href="edit_form.php?id=<?php echo $result['id'];?>">Edit</a></a>|
            <a href="delete.php?id=<?php echo $result['id'];?>
            " onClick="return confirm('Are you sure to delete this record?')">Delete</a></td>
        </tr>
        <?php
          }
        ?>
    </table>
</body>
</html>
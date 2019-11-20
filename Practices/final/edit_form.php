<?php
include_once "connection.php";
$id = $_GET['id'];
$query = mysqli_query($connection,"SELECT * FROM db_php WHERE id = $id");
    while($result = mysqli_fetch_array($query)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    </head>
<body>
    <form action="edit_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result['id'];?>">
        <input type="text" name="fullname" placeholder="fullname" value="<?php echo $result['fullname'];?>">
        <br>
        <input type="submit" name="edit" value="Edit">
        <br>
    </form>
</body>
</html>
<?php
    }
?>
<?php 
$conn = mysqli_connect('localhost','root','','last_demo');
$id = $_GET['userId'];
$query = "SELECT * FROM user WHERE id = '$id'";
$result = mysqli_query($conn, $query);
foreach($result as $user) {
?>
<form action="#" method="post">
    <input type="text" name="user" value="<?php echo $user['name'] ?>">
    <?php if($user['gender'] === 'female') { ?>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female" selected>Female</option>
        </select>
    <?php } else {?>
        <select name="gender">
            <option value="male" selected>Male</option>
            <option value="female" >Female</option>
        </select>
    <?php } ?>
    <button type="submit" name="edit">Add New</button>
</form>
<?php 
}
   // include "database.php";
    if(isset($_POST['edit'])) {
        // get value from input
        $user = $_POST['user'];
        // query insert
        $query = "UPDATE user SET name='$user' WHERE id = '$id'";
        // execute
        $result = mysqli_query($conn , $query);  
        if($result) {
            echo "Sucess";
        }else {
            echo "Cannot";
        }
    }
?>
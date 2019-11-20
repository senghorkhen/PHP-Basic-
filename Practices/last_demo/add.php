<form action="#" method="post">
    <input type="text" name="user">
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <button type="submit" name="add">Add New</button>
</form>
<?php 
   // include "database.php";
    $conn = mysqli_connect('localhost','root','','last_demo');
    if(isset($_POST['add'])) {
        // get value from input
        $user = $_POST['user'];
        $gender = $_POST['gender'];
        
        // query insert
        $query = "INSERT INTO user(name,gender) VALUES('$user','$gender')";
        // execute
        $result = mysqli_query($conn , $query);  
        if($result) {
            echo "Sucess";
        }else {
            echo "Cannot";
        }
    }
?>
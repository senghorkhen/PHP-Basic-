<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php 
        //include_once "database.php";
        $conn = mysqli_connect('localhost','root','','last_demo');
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn, $query);
        foreach($result as $user) {
    ?>
        <tr>
            <td><?php echo $user['id']?></td>
            <td><?php echo $user['name']?></td>
            <td>
                <a href="delete.php?userId=<?php echo $user['id']?>">delete</a>
                <a href="edit.php?userId=<?php echo $user['id']?>">Edit</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
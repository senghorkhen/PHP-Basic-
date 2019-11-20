<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <div class="card">
            <div class="card-header">Add New</div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form_group">
                        <label for="">Name</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form_group">
                        <label for="">Province</label>
                        <input type="text" name="province" class="form-control" required>
                    </div>
                    <a href="index.php" class="btn btn-info">Go Back</a>
                    <button class="btn btn-primary float-right" type="submit" name="add">Add New</button>
                </form>
            </div>
            <?php
                include_once "sql_connect.php";
                if(isset($_POST['add'])) {
                    $name = $_POST['username'];
                    $province = $_POST['province'];
                    // echo $province;
                    // echo "</br>";
                    // echo $name;
                    $query = "INSERT INTO tb_extra(name, province) VALUES('$name','$province')";
                    // var_dump($query); check code INSERT INTO tb_extra(name, province) VALUES('senghor','Kampong Thom')
                    $result = mysqli_query($connect, $query);
                    if($result) {
                      header("location: index.php");
                    }else {
                        echo "Insert failed";
                    }
                }
            ?>
        </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>

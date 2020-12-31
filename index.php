<?php
include_once 'config/database.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css"

</head>
<body>

<div class="container">

    <a  class="btn btn-primary mb-5" href="register.php">Add User</a>
    <h2 class="text-center d-inline float-right bg-info" style="border-style: solid; border-radius: 5px">All Users</h2>

    <table class="table table-bordered clearfix">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">contact</th>
            <th scope="col">address</th>
            <th scope="col">action</th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        if($i%2==0)
            $classname="even";
        else
            $classname="odd";
        ?>

        </thead>
        <tbody>

        <tr class="<?php if(isset($classname)) echo $classname;?>">
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["contact"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><a  class="btn btn-success" href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a>
                <a  class="btn btn-danger" href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a>


            </td>
        </tr>
        <?php
        $i++;
        }
        ?>

        </tbody>
    </table>

</div>





<script src="js/bootstrap.bundle.js"
</body>
</html>
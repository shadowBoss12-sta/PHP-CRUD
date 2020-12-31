<?php
include_once 'config/database.php';
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "',  contact='" . $_POST['contact'] . "' ,address='" . $_POST['address'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";

    header("Location: index.php");
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css"
    <title>Update</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Update User</h1>
    <form name="frmUser" method="post" action="">
        <div class="bg-success" ><?php if(isset($message)) { echo $message; } ?>
        </div>
        <div style="padding-bottom:5px;">
            <a href="index.php">User List</a>
        </div>
        ID: <br>
        <input    type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
        <input   class="form-control" type="text" name="id"  value="<?php echo $row['id']; ?>">
        <br>
        Name: <br>
        <input  class="form-control" type="text" name="name"value="<?php echo $row['name']; ?>">
        <br>
        Address:<br>
        <input    type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
        <br>
        Contact:<br>
        <input  class="form-control" type="text" name="contact" class="txtField" value="<?php echo $row['contact']; ?>">
        <br>

        <br>
        <input type="submit" name="submit" value="Submit" class="btn btn-block btn-success">

    </form>
</div>



<script src="js/bootstrap.bundle.js"
</body>
</html>
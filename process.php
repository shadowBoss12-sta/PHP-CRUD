<?php
include_once 'config/database.php';
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users (name,address,contact)
	 VALUES ('$name','$address','$contact')";
    if (mysqli_query($conn, $sql)) {

        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
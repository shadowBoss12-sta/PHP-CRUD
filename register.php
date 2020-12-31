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
    <h1 class="text-center">Register User</h1>
    <form method="post" action="process.php">
        name:<br>
        <input  class="form-control" type="text" name="name">
        <br>

        <br>
        Contact:<br>
        <input  class="form-control" type="text" name="contact">
        <br>
        Address:<br>
        <input type="text"  class="form-control" name="address">
        <br><br>
        <input  class="btn btn-success btn-block" type="submit" name="save" value="submit">
    </form>
</div>

</body>
</html>
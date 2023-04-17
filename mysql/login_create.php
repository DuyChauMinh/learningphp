<?php
if (isset($_POST['submit'])) {
    // echo 'sdfgsdgdsgdf';
    $username = $_POST['username'];
    $password = $_POST['password'];

    // if ($username && $password) {
    //     echo $username . ' ' . $password;
    // } else {
    //     echo 'nothing here';
    // }

    $connection = mysqli_connect('localhost', 'root', '', 'learningphp');
    if ($connection) {
        echo 'connected';
    } else {
        die('not connected');
    }
} ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="submit">

            </form>
        </div>
    </div>
</body>
</html>
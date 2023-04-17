<?php

include 'db.php';

$query = 'SELECT * FROM users';

$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query failed' . mysqli_error());
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <select name="id" id="">
                        <option value="">1</option>
                    </select>
                </div>


                <input class="btn btn-primary" type="submit" name="submit" value="update">

            </form>
        </div>
    </div>
</body>
</html>
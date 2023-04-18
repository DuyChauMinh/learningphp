<?php

include 'db.php';

$query = 'SELECT * FROM users';

$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query failed' . mysqli_error($connection));
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
<!-- mysqli_fetch_assoc or mysqli_fetch_row  -->
        <div class="col-xs-6">
        <h1 class="text-center">READ</h1>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <pre>
    <?php print_r($row);} ?>
    </pre>
        </div>
    </div>
</body>
</html>
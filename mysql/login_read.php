<?php

include 'db.php';
include 'functions.php';
readData();
?>



<?php include 'includes/header.php'; ?>

    <div class="container">
<!-- mysqli_fetch_assoc or mysqli_fetch_row  -->
        <div class="col-xs-6">
        <h1 class="text-center">READ</h1>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <pre>
    <?php print_r($row);} ?>
    </pre>
        </div>
<?php include 'includes/footer.php'; ?>

<?php

include 'db.php';
include 'functions.php';
if (isset($_POST['submit'])) {
    updateUsers();
}
?>
<?php include 'includes/header.php'; ?>

    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">UPDATE</h1>

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

<?php showAllData(); ?>
                        <!-- <option value="">1</option> -->
                    </select>
                </div>


                <input class="btn btn-primary" type="submit" name="submit" value="update">

            </form>
        </div>
<?php include 'includes/footer.php'; ?>

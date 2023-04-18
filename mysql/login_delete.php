<?php

include 'db.php';
include 'functions.php';
deleteUSers();
?>
<?php include 'includes/header.php'; ?>

    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">DELETE</h1>
             <form action="login_delete.php" method="post">

                <label for="label">Choose id</label>
                <div class="form-group">
                    <select name="id" id="">

<?php showAllData(); ?>
                        
                    </select>
                </div>


                <input class="btn btn-primary" type="submit" name="submit" value="delete">

            </form>
        </div>
<?php include 'includes/footer.php'; ?>

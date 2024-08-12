<?php
include_once ('header.php');
?>
<div class="container col-md-4 offset-4">
    <h2 class="mt-5">Enter Password To Login</h2>
    <hr>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">
                <h5>Password:</h5>
            </label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <center>
            <button type="submit" class="btn btn-primary" name="submit" value="check_password">Submit</button>
        </center>
    </form>
</div>
<?php
include_once ('footer.php');
?>
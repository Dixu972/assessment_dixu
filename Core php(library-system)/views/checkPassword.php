<?php
include_once('header.php');
?>
<div class="container">
    <h2 class="mt-5">Enter Password To Login</h2>
    <hr>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="check_password">Submit</button>
    </form>
</div>
<?php
include_once('footer.php');
?>

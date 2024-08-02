<?php
include_once('header.php');
?>
<div class="container">
    <h2 class="mt-5">Change Password</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Enter old password:</label>
            <input type="password" class="form-control" name="old_password" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter new password:</label>
            <input type="password" class="form-control" name="new_password" required>
        </div>
        <button type="submit" class="btn btn-warning" name="submit" value="change_password">Change Password</button>
    </form>
    <form method="POST" class="mt-3">
        <button type="submit" class="btn btn-secondary" name="action" value="menu">Back to Menu</button>
    </form>
</div>
<?php
include_once('footer.php');
?>

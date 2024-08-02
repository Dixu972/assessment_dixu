<?php
include_once('header.php');
?>
<div class="container">
    <h2 class="mt-5">Delete Book</h2>
    <hr>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label mb-3"><h3>Enter Book Sr.No to delete:</h3></label>
            <input type="text" class="form-control" name="sr_no" required>
        </div>
        <button type="submit" class="btn btn-danger" name="submit" value="delete">Delete Book</button>
    </form>
    <form method="POST" class="mt-3">
        <button type="submit" class="btn btn-secondary" name="action" value="menu">Back to Menu</button>
    </form>
</div>
<?php
include_once('footer.php');
?>

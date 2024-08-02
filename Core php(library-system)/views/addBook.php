<?php
include_once('header.php');
?>
<div class="container">
    <h2 class="mt-5">Add Book</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Category:</label>
            <input type="text" class="form-control" name="category" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Author:</label>
            <input type="text" class="form-control" name="author" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Serial No:</label>
            <input type="text" class="form-control" name="sr_no" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="add">Add Book</button>
    </form>
    <form method="POST" class="mt-3">
        <button type="submit" class="btn btn-secondary" name="action" value="menu">Back to Menu</button>
    </form>
</div>
<?php
include_once('footer.php');
?>
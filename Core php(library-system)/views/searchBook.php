<?php
include_once('header.php');
?>
<div class="container">
    <h2 class="mt-5">Search Book</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Enter search term:</label>
            <input type="text" class="form-control" name="term" required>
        </div>
        <button type="submit" class="btn btn-info" name="submit" value="search">Search Book</button>
    </form>
    <form method="POST" class="mt-3">
        <button type="submit" class="btn btn-secondary" name="action" value="menu">Back to Menu</button>
    </form>
</div>
<?php
include_once('footer.php');
?>

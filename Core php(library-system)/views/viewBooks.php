<?php
include_once ('header.php');
?>
<div class="container">
    <h2 class="mt-5">View All Books</h2>
    <?php if (empty($_SESSION['books'])): ?>
        <div class="alert alert-warning" role="alert">No books found.</div>
    <?php else: ?>
        <ul class="list-group">
            <?php foreach ($_SESSION['books'] as $book): ?>
                <li class="m-5"><?php echo implode(", ", $book); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="POST" class="mt-3">
        <button type="submit" class="btn btn-secondary" name="action" value="menu">Back to Menu</button>
    </form>
</div>
<?php
include_once ('footer.php');
?>
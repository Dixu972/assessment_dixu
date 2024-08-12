<?php
include_once ('header.php');
?>
<div class="container">
    <h2 class="mt-5 mb-3">View Books</h2>
    <hr>
    <?php if (empty($_SESSION['books'])): ?>
        <div class=""><h3><i>No books found.</i></h3></div>
    <?php else: ?>

        <table class="table table-success table-striped"">
            <thead>
                    <tr>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Sr_No</th>
                    </tr>
            </thead>
            <tbody>
            <?php
            foreach ($_SESSION['books'] as $book) {
                ?>
                    <tr>
                        <td><?php echo $book['category'] ?></td>
                        <td><?php echo $book['title'] ?></td>
                        <td><?php echo $book['author'] ?></td>
                        <td><?php echo $book['sr_no'] ?></td>
                    </tr>
                <?php
            }
            ?>
            </tbody>
                </table>
                
    <?php endif; ?>
    <form method=" POST" class="mt-3">
        <button type="submit" class="btn btn-secondary" name="action" value="menu">Back to Menu</button>
        </form>
</div>
<?php
include_once ('footer.php');
?>
<?php
include_once('header.php');
?>
<div class="container">
    <h1 class="mt-5">Library Management System</h1>
    <form method="POST">
        <div class="mb-3">
            <button class="btn btn-primary" name="action" value="add">Add Book</button>
            <button class="btn btn-danger" name="action" value="delete">Delete Book</button>
            <button class="btn btn-info" name="action" value="search">Search Book</button>
            <button class="btn btn-secondary" name="action" value="view">View All Books</button>
            <button class="btn btn-warning" name="action" value="change_password">Change Password</button>
            <button class="btn btn-danger" name="action" value="logout">Logout</button>
        </div>
    </form>
</div>
<?php
include_once('footer.php');
?>
<?php
include_once ('header.php');
?>
<div class="container col-md-6 offset-3">
    <h1 class="mt-5">Library Management System</h1>
    <form method="POST">
        <div class="mb-3">
            <ol>
                <li><button class="btn btn-primary mb-2" name="action" value="add">Add Book</button></li>
                <li> <button class="btn btn-danger mb-2" name="action" value="delete">Delete Book</button></li>
                <li><button class="btn btn-info mb-2" name="action" value="search">Search Book</button></li>
                <li><button class="btn btn-secondary mb-2" name="action" value="view">View All Books</button></li>
                <li><button class="btn btn-warning mb-2" name="action" value="change_password">Change
                        Password</button></li>
                <li><button class="btn btn-danger mb-2" name="action" value="logout">Logout</button></li>
            </ol>
        </div>
    </form>
</div>
<?php
include_once ('footer.php');
?>
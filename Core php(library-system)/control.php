<?php
require 'model.php';

class LibraryController
{
    private $model;

    public function __construct()
    {
        $this->model = new LibraryModel();
    }

    public function displayMenu()
    {
        include 'menu.php';
    }

    public function addBook()
    {
        include 'addBook.php';
    }

    public function deleteBook()
    {
        include 'deleteBook.php';
    }

    public function searchBook()
    {
        include 'searchBook.php';
    }

    public function viewBooks()
    {
        include 'viewBooks.php';
    }

    public function changePassword()
    {
        include 'changePassword.php';
    }

    public function checkPassword()
    {
        if (isset($_POST['submit']) && $_POST['submit'] === 'check_password') {
            $entered_password = $_POST['password'];
            if ($entered_password === $_SESSION['password']) {
                $_SESSION['logged_in'] = true;
                echo "<script>
                alert('Login Succsess')</script>";
                $this->displayMenu();
            } else {
                echo "<script>
                alert ('Incorrect Password')
                </script>";
                include 'checkPassword.php';
            }
        } else {
            include 'checkPassword.php';
        }
    }

    public function handleAction($action)
    {
        switch ($action) {
            case 'add':
                $this->addBook();
                break;
            case 'delete':
                $this->deleteBook();
                break;
            case 'search':
                $this->searchBook();
                break;
            case 'view':
                $this->viewBooks();
                break;
            case 'change_password':
                $this->changePassword();
                break;
            case 'logout':
                echo "<script>
                alert('Logout Succsess')
                </script>";
                session_destroy();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            default:
                $this->displayMenu();
        }
    }

    public function handleSubmit($submit)
    {
        switch ($submit) {
            case 'add':
                $this->model->addBook($_POST);
                echo "<script>
                alert('Book Added Success !');
                </script>";
                $this->displayMenu();
                break;
            case 'delete':
                $this->model->deleteBook($_POST['sr_no']);
                echo
                "<script>
                alert('Book deleted successfully !');
                </script>";
                $this->displayMenu();
                break;
            case 'search':
                $books = $this->model->searchBook($_POST['term']);
                foreach ($books as $book) {
                    echo '<div class="alert alert-info" role="alert">Book Found: ' . implode(", ", $book) . '</div>';
                }
                $this->displayMenu();
                break;
            case 'change_password':
                if ($this->model->changePassword($_POST['old_password'], $_POST['new_password'])) {
                    echo '<div class="alert alert-success" role="alert">Password changed successfully.</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Incorrect old password.</div>';
                }
                $this->displayMenu();
                break;
            default:
                $this->displayMenu();
        }
    }
}
?>
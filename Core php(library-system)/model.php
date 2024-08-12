<?php
class LibraryModel {
    public function addBook($data) {
        $book = [
            'category' => $data['category'],
            'title' => $data['title'],
            'author' => $data['author'],
            'sr_no' => $data['sr_no']
        ];
        $_SESSION['books'][] = $book;
    }

    public function deleteBook($sr_no) {
        foreach ($_SESSION['books'] as $key => $book) {
            if ($book['sr_no'] === $sr_no) {
                unset($_SESSION['books'][$key]);
                break;
            }
        }
    }

    public function searchBook($term) {
        $results = [];
        foreach ($_SESSION['books'] as $book) {
            if (stripos($book['title'], $term) !== false || stripos($book['author'], $term) !== false || stripos($book['category'], $term) !== false || stripos($book['sr_no'], $term) !== false) {
                $results[] = $book;
            }
        }
        return $results;
    }

    public function changePassword($old_password, $new_password) {
        if ($old_password === $_SESSION['password']) {
            $_SESSION['password'] = $new_password;
            return true;
        }
        return false;
    }
}
?>

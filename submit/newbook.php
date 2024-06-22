<?php

include ("../common/conn.php");

if ($_POST['submit'] == "Submit") {

    // grab values from post array and assigned into variables
    $bookname = $_POST['name'];
    $publisher = $_POST['publisher'];
    $isbn = $_POST['isbn'];
    $quantity = $_POST['quantity'];

    // Making SQL queries
    $query = "INSERT INTO books (name, publisher, isbn, quantity) VALUES ('$bookname', '$publisher', '$isbn', '$quantity')";
    echo $query;

    // execute sql queries
    try {
        $con->query($query);
        header("Location: /library_management/addbook.php");
    } catch (Exception $e) {
        echo '<script type="text/javascript">';
        echo 'alert("There is a problem with database");';
        echo "window.location.href='/library_management/addbook.php'";
        echo '</script>';
    } 
}
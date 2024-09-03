<?php
//include database connection. 
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
//delete user row from table 
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        //after delete redirect to home
        header('Location: read.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>



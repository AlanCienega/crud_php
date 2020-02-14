<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tasks where id = '$id' ";
    mysqli_query($conn, $query);

    $_SESSION['message'] = "tarea borrada satisfactoriamente";
    $_SESSION['message_type'] = "primary";
    
    header('location: index.php');
    
}
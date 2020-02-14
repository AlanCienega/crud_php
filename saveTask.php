<?php 

include("db.php");

if (isset($_POST['saveTask'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "INSERT INTO tasks(title, description) VALUES('$title','$description');";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Fail");
    }
    header("location: index.php");

    $_SESSION["message"] = "Tarea guardada satisfactoriamente";
    $_SESSION["message_type"] = "success";
}
?>
<?php

include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * from tasks where id = '$id'";
    $task =  mysqli_query($conn, $query);
    
    if (mysqli_num_rows($task) == 1) {
        $row = mysqli_fetch_array($task);
        $title = $row['title'];
        $description = $row['description'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $query = "UPDATE tasks SET title = '$title', description = '$description' where id ='$id'";

    mysqli_query($conn, $query);

    $_SESSION['message'] = "Tarea actualizada correctamente";
    $_SESSION['message_type'] = "success";

    header('location: index.php');
}
?>
<?php include("includes/header.php") ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body d-flex">
                <form action="editTask.php?id=<?php echo $_GET['id'] ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title"
                        value="<?php echo $title ?>" placeholder="Actualiza el título">
                    </div>
                    <div class="form-group">
                        <textarea rows="3" class="form-control" name="description"
                        placeholder="Actualiza la descripción"><?php echo $description ?></textarea>
                    </div>
                    <button class="btn btn-primary" name="update">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>
<?php include("db.php")?>
<?php include("includes/header.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="saveTask.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" 
                        name="title" placeholder="nombre de la tarea" autofocus required>
                    </div>
                    <div class="form-group">
                        <textarea name="description"  rows="3" class="form-control" 
                        placeholder="Descripción" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="saveTask" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descipcion</th>
                        <th>Creado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tasks";
                    $tasks = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($tasks)) { ?>
                        <tr>
                            <td> <?php echo $row['title'] ?> </td>
                            <td> <?php echo $row['description'] ?> </td>
                            <td> <?php echo $row['created_at'] ?> </td>
                            <td>
                                <a href="editTask.php?id=<?php echo $row['id'] ?> " 
                                style="font-size: 2em"> 
                                    <i class="btn btn-sm btn-warning fas fa-edit"></i>
                                </a>
                                <a href="deleteTask.php?id=<?php echo $row['id'] ?> " 
                                style="font-size: 2em" >
                                    <i class="btn btn-sm btn-danger fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("includes/footer.php")?>
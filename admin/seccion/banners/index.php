<?php
include("../../bdd.php");

if(isset($_GET['txtID'])){
    $txtID = $_GET["txtID"];
    $sentencia = $conexion->prepare("DELETE FROM tbl_banners WHERE ID = :id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    header("Location:index.php");
    exit();
}

$sentencia = $conexion->prepare("SELECT * FROM tbl_banners");
$sentencia->execute();
$lista_banners = $sentencia->fetchAll(PDO::FETCH_ASSOC);

include('../../templates/header.php');
?>

<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="crear.php" role="button">Agregar Registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Link</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_banners as $registro) { ?>
                        <tr>
                            <td><?php echo $registro['id']; ?></td> 
                            <td><?php echo $registro['titulo']; ?></td>
                            <td><?php echo $registro['descripcion']; ?></td>
                            <td><?php echo $registro['link']; ?></td>
                            <td>
                                <a class="btn btn-info" href="editar2.php?txtID=<?php echo $registro['id']; ?>">Editar</a>
                                
                                <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['id']; ?>" role="button">Borrar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('../../templates/footer.php'); ?>
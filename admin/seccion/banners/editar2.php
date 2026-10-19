<?php
include("../../bdd.php");

$titulo = "";
$descripcion = "";
$link = "";
if(isset($_GET["txtID"])){

    $txtID = $_GET["txtID"];
    
    $sentencia = $conexion->prepare("SELECT * FROM tbl_banners WHERE ID = :id");
    $sentencia->bindParam(":id", $txtID);
    
    if($sentencia->execute()){
    
        $registro = $sentencia->fetch(PDO::FETCH_ASSOC);
    
        if($registro){
            $titulo = $registro["titulo"];
            $descripcion = $registro["descripcion"];
            $link = $registro["link"];
        } else {
            echo "❌ No se encontró el registro";
        }
    
    } else {
        echo "❌ Error al ejecutar la consulta";
    }
    }
include ('../../templates/header.php');
?>

<div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" value="<?php echo $titulo;?>" name="titulo" id="titulo">
</div>

<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <input type="text" class="form-control" value="<?php echo $descripcion;?>" name="descripcion" id="descripcion" 
    aria-describedby="helpid" placeholder="Escriba la descripción de banners">
</div>

<div class="mb-3">
    <label for="link" class="form-label">Link</label>
    <input type="text" class="form-control" value="<?php echo $link;?>" name="link" id="link"
    aria-describedby="helpid" placeholder="Escriba el enlace">
</div>

<?php
include ('../../templates/footer.php');?>


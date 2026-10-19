<?php

$url_base = "http://localhost:/pizzeria/admin/";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="container-fluid"> <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="javascript:void(0);">Administrador</a>
                <a class="nav-item nav-link" href="<?php echo $url_base; ?>seccion/banners/index.php">Banners</a>
                <a class="nav-item nav-link" href="<?php echo $url_base; ?>seccion/colaboradores/">Colaboradores</a>
                <a class="nav-item nav-link" href="<?php echo $url_base; ?>seccion/testimonios/">Testimonios</a>
                <a class="nav-item nav-link" href="<?php echo $url_base; ?>seccion/menu/">Menú</a>
                <a class="nav-item nav-link" href="<?php echo $url_base; ?>seccion/comentarios/">Comentarios</a>
                <a class="nav-item nav-link" href="<?php echo $url_base; ?>seccion/usuarios/">Usuarios</a>
                <a class="nav-item nav-link text-danger" href="http://localhost:8090/cafeteria/index.php">Cerrar Sesión</a>
            </div>
        </div>
    </nav>
</header>



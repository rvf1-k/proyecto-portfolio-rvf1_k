<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVPORTFOLIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="static/css/estilos.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#4e73df;">
        <div class="container">
            <a class="navbar-brand" href="index.php">DEVPORTFOLIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <!-- Inicio -->
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>

                    <!-- Proyectos -->
                    <li class="nav-item">
                        <a class="nav-link " href="proyectos.php">Proyectos</a>
                    </li>

                    <!-- Categorías -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle 
                            "
                            href="#" role="button" data-bs-toggle="dropdown">
                            Categorías
                        </a>

                        <ul class="dropdown-menu">

                            <?php
                            require_once 'datos.php';

                            foreach ($categorias as $categoria) {
                                echo ('<li>');
                                echo ('<a class="dropdown-item" href="proyectos.php?cat='.$categoria.'">');
                                echo ($categoria.' </a>');
                                echo ('</li>');
                            }
                            ?>
                        </ul>
                    </li>

                    <!-- Contacto -->
                    <li class="nav-item">
                        <a class="nav-link " href="contacto.php">Contacto</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
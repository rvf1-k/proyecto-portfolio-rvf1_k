<?php
require_once 'templates/header.php';

require_once 'datos.php';

$totalTecnologias = 0;
$totalProyectos = 0;

$filtroActivo = false;
$filtro = null;

$isCategoria = null;
$categoriaActivo = false;

if (isset($_GET['fil'])) {
    $filtroActivo = true;
    $filtro = strtoupper($_GET['fil']);
}

if (isset($_GET['cat'])) {
    $categoriaActivo = true;
    $isCategoria = strtoupper($_GET['cat']);
}
?>

<main class="container my-5">
    <h1>Proyectos<?php echo $categoriaActivo ? " de " . $_GET['cat'] : "" ?></h1>
    <br>
    <div class="text-center">

        <form method="get" action="" class="mb-4 row g-2">
            <div class="col-md-10">
                <input type="text" name="fil" placeholder="Buscar en nombre o descripcion..." value="" class="form-control">
                <?php echo $categoriaActivo ? '<input type="hidden" name="cat" value="' . $_GET['cat'] . '">' : "" ?>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-azul w-100">Filtrar</button>
            </div>
        </form>

        <div class="row">
            <?php

            foreach ($proyectos as $proyecto) {

                $descripcion = strtoupper($proyecto['descripcion']);
                $titulo = strtoupper($proyecto['titulo']);
                $categoria = strtoupper($proyecto['categoria']);

                if (($filtroActivo && !(str_contains($descripcion, $filtro) ||
                    (str_contains($titulo, $filtro)))) || ($categoriaActivo && !(str_contains($categoria, $isCategoria)))) {
                    continue;
                }

                $totalProyectos++;

                echo "<div class='col-md-4 mb-4'><div class='card h-100 shadow-sm'>";
                echo "<img src='{$proyecto['imagen']}' alt='{$proyecto['titulo']} class='card-img-top' style='max-height:200px; object-fit:cover;'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>{$proyecto['titulo']}</h5>";
                echo "<p class='card-text'>{$proyecto['descripcion']}</p>";
                echo "<p><strong>Categoría: </strong>{$proyecto['categoria']}</p>";

                echo "<p><strong>Tecnologías: </strong>";

                $tecnologias = $proyecto['tecnologias'];

                for ($i = 0; $i < count($tecnologias); $i++) {

                    $totalTecnologias++;

                    echo ($tecnologias[$i]);
                    echo ($i >= (count($tecnologias) - 1) ? "" : ($i >= (count($tecnologias) - 2) ? " y " : ", "));
                }
                echo "</p></div></div></div>";
            }
            ?>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-success h-100">
                    <div class="card-body text-center">
                        <h6 class="card-title">Total de proyectos</h6>
                        <p class="card-text"><?php echo $totalProyectos ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-info h-100">
                    <div class="card-body text-center">
                        <h6 class="card-title">Número medio de tecnologías</h6>
                        <p class="card-text"><?php echo ($totalProyectos === 0 ? "0" : round($totalTecnologias / $totalProyectos, 2)) ?></p>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
require_once 'templates/footer.php';
?>
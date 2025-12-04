<?php
require 'templates/header.php';
?>
<main class="container my-5">

<div class="container my-5">
    
    <!-- Datos de contacto -->
    <div class="row row justify-content-center">
        <div class="col-md-4 d-flex flex-column justify-content-center">
            <img src="https://portfolio-img-rvf1k.s3.us-east-1.amazonaws.comimg/contacto.png" alt="Contacto" class="img-fluid rounded shadow-sm" style="max-height:200px;">
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center">
            <h5 class="fw-semibold">Rafael Moreno Riquelme</h5>
            <p class="mb-1">Ciclo Superior DAW</p>
            <p>IES Macia Abela (Crevillent).</p>
            <p class="mb-1">
                <strong>Teléfono:</strong>
                <a href="tel:+34XXXXXXXXX" class="text-decoration-none text-dark">+34XXXXXXXXX</a>
            </p>
            <p>
                <strong>Email:</strong>
                <a href="mailto:rafmorriq@alu.gva.es" class="text-decoration-none text-dark">rafmorriq@alu.gva.es</a>
            </p>
        </div>
    </div>
    <hr class="my-5">
    <!-- Formulario de contacto -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form class="p-4 border rounded shadow-sm bg-light">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre *</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico *</label>
                    <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com" required="">
                </div>
                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto *</label>
                    <input type="text" class="form-control" id="asunto" placeholder="Motivo del mensaje" required="">
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje *</label>
                    <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required=""></textarea>
                </div>
                <button type="submit" class="btn btn-azul w-100 fs-5 py-2">Enviar</button>
            </form>
        </div>
    </div>
</div>

</main>

<?php
require_once 'templates/footer.php';
?>
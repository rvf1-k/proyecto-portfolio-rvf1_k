<footer class="mt-auto py-4" style="background-color:#f8f9fa;">
    <div class="container">
        <div class="row">
            <!-- Contacto -->
            <div class="col-md-3">
                <h5>Contacto</h5>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-phone me-2"></i>
                        <a href="tel:+34XXXXXXXXX" class="text-decoration-none text-dark">+34XXXXXXXXX</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope me-2"></i>
                        <a href="mailto:rafmorriq@alu.edu.gva.es" class="text-decoration-none text-dark">rafmorriq@alu.edu.gva.es</a>
                    </li>
                </ul>
            </div>

            <!-- Redes Sociales -->
            <div class="col-md-3">
                <h5>Redes Sociales</h5>
                <ul class="list-inline">
                    <li class="list-inline-item mx-2"><a href="https://twitter.com" target="_blank" class="text-dark"><i class="fab fa-twitter fa-2x"></i></a></li>
                    <li class="list-inline-item mx-2"><a href="https://www.linkedin.com" target="_blank" class="text-dark"><i class="fab fa-linkedin fa-2x"></i></a></li>
                    <li class="list-inline-item mx-2"><a href="https://github.com/rvf1-k" target="_blank" class="text-dark"><i class="fab fa-github fa-2x"></i></a></li>
                </ul>
            </div>

            <!-- Mensaje final -->
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <h5>Portfolio</h5>
                
                <?php
                require_once 'datos.php';

                echo ('<p style="margin:0px">Los mejores desarrollos ');
                for ($i=0; $i < count($categorias); $i++) { 
                    echo($categorias[$i]);
                    echo($i >= (count($categorias) - 1)? "" : ($i >= (count($categorias) - 2)? " y " : ", "));
                    }
                echo ('.</p>');

                ?>
                <p style="margin:0px">&copy; 2025 Mi Portfolio</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</footer>
</body>
</noscript>
<div style="text-align: center;">
    <div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

    </div>
</div>

</html>
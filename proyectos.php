<?php
$pagina = "proyectos";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-3">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 mb-3">
                <div class="proyecto">
                    <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <h2 class="px-3 py-2">ABM Clientes</h2>
                    <p class="px-3 py-1">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS,
                        PHP, Bootstrap y Json.</p>
                    <div class="row py-4 pb-3 px-3">
                        <div class="col-6">
                            <a href="#" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 mb-3"">
                <div class=" proyecto">
                <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                <h2 class="px-3 py-2">SISTEMA DE GESTIÓN DE VENTAS</h2>
                <p class="px-3 py-1">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP,
                    MVC, Bootstrap, Js, Ajax, jQuery y
                    MySQL de base de datos.</p>
                <div class="row py-4 pb-3 px-3">
                    <div class="col-6">
                        <a href="#" class="btn btn-rojo">Ver online</a>
                    </div>
                    <div class="col-6 text-center">
                        <a href="#" class="link-rojo">Código fuente</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12 mb-3"">
                <div class=" proyecto">
            <img src="images/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">
            <h2 class="px-3 py-2">Proyecto integrador</h2>
            <p class="px-3 py-1">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                Mercadopago con panel
                administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
            <div class="row py-4 pb-3 px-3">
                <div class="col-6">
                    <a href="#" class="btn btn-rojo">Ver online</a>
                </div>
                <div class="col-6 text-center">
                    <a href="#" class="link-rojo">Código fuente</a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="mailto:maxi_sigrist@hotmail.com">maxi_sigrist@hotmail.com</a>
            </div>
        </div>

        <a href="https://api.whatsapp.com/send?phone=+543535656422" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>

    </footer>
</body>

</html>
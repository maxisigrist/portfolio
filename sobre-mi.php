<?php
$pagina = "sobre-mi";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main>
        <section id="bio" class="container">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="col-12 py-5">Sobre mí</h1>
                    <p>Apasionado por la tecnología y reparacion de notebook y pc. Soy tecnico en reparacion de hardware.</p>
                    <a href="contacto.html" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
                </div>
                <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
                    <img src="images/nelson-daniel-tarche.jpg" alt="Nelson" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <img src="images/nelson-daniel-tarche.jpg" alt="Nelson" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <a href="contacto.html" class="btn btn-rojo my-5 d-sm-block d-sm-none">Enviar mensaje</a>
                </div>
            </div>
        </section>
        <section id="stack">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5">Stack tecnológico</h2>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Javascript</h3>
                            <i class="fa-brands fa-js pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">PHP</h3>
                            <i class="fa-brands fa-php pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">HTML</h3>
                            <i class="fa-brands fa-html5 pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">API Rest</h3>
                            <i class="fa-solid fa-gears pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Laravel</h3>
                            <i class="fa-brands fa-laravel pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Bootstrap</h3>
                            <i class="fa-brands fa-bootstrap pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">MySQL</h3>
                            <i class="fa-solid fa-database pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">CSS</h3>
                            <i class="fa-brands fa-css3-alt pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Git</h3>
                            <i class="fa-brands fa-git pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">React.js</h3>
                            <i class="fa-brands fa-react pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Mercadopago</h3>
                            <i class="fa-solid fa-wallet pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Amazon AWS</h3>
                            <i class="fa-brands fa-aws pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Linux</h3>
                            <i class="fa-brands fa-linux pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Apache</h3>
                            <i class="fa-solid fa-server pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Paypal</h3>
                            <i class="fa-brands fa-paypal pb-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="pt-5 pb-4">Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="images/logo-depcsuite.svg" alt="DEPCSUITE" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Socio</h3>
                    <h4>SOS Notebook</h4>
                    <h5>2016 - presente</h5>
                    <p>Reparacion de notebook, pc y all in one.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="images/uba.jpg" alt="Universidad de Buenos Aires" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador Senior Full Stack</h3>
                    <h4>Universidad de Buenos Aires</h4>
                    <h5>ago 2015 - ene 2020</h5>
                    <p>Planeamiento del proyecto, seguimiento, reuniones de avance, estimación de entregables. Trato con clientes y equipos
                    internos. Desarrollo de nuevos sistemas. Capacitar y organizar el área de desarrollo. Gestionar los ambientes de
                    desarrollo. Administrar repositorio. Asignación de tareas al equipo.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="images/enacom.svg" alt="Ente Nacional de Comunicaciones" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador Senior Full Stack</h3>
                    <h4>ENACOM</h4>
                    <h5>jul 2012 - jun 2018</h5>
                    <p>Diseño y desarrollo de sistemas internos para el organismo. Mantenimiento de los sistemas existentes. Gestión de base de
                    datos y reportes. Trato con distintos clientes internos y equipos. Reuniones de avance. Organización del proyecto en
                    Redmine. Resolución de pedidos mediante sistema de incidencias.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5 text-center">
                    <i class="fa-solid fa-landmark" alt="Certificado Digital SA"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Certificado Digital SA</h3>
                    <h4>Consultor Desarrollador</h4>
                    <h5>ago 2014 - dic 2016</h5>
                    <p>Proyecto de desarrollo de sistemas web para los clientes de la consultora. Tecnologías: PHP, CSS, HTML, jQuery,
                    Javascript, MySQL, WSDL.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5 text-center">
                    <i class="fa-solid fa-globe"  alt="Freelance"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador Back-end y Front-end</h3>
                    <h4>Freelance</h4>
                    <h5>jul 2011 - dic 2016</h5>
                    <p>Desarrollo, implementación y mantenimiento de sistemas y páginas Web. Relevamiento de requisitos. Trato con el cliente.
                    Desarrollo del Brief de marca y del sitio web. Participación en eventos de networking. Tecnologías: HTML, CSS,
                    Javasacript, jQuery, MySQL, AJAX, API, Facebook, API Twitter, y API Youtube, Drupal, Wordpress.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <img src="images/globons.png" alt="Globons SRL" class="img-fluid">
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Desarrollador Back-end y Front-end</h3>
                    <h4>Globons SRL</h4>
                    <h5>abr 2010 - ene 2011</h5>
                    <p>Desarrollo, implementación y mantenimiento de sistemas y páginas Web.</p>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Formación académica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/ean.jpg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Licenciado en Tecnología</h3>
                            <h4>Escuela Argentina de Negocios</h4>
                            <h5>2015 – 2020</h5>
                            <p>https://www.ean.edu.ar/</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/unlam.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Ingeniería en Informática</h3>
                            <h4>Universidad Nacional de La Matanza</h4>
                            <h5>2006 – 2010</h5>
                            <p>Materias aprobadas 20 de 41, 48%.<br>
                                https://unlam.edu.ar</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                            <i class="fa-solid fa-landmark" alt="depcsuite"></i>
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Técnico en Informática</h3>
                            <h4>Colegio Parroquial San Juan XXIII</h4>
                            <h5>2003 – 2005</h5>
                            <p>https://colparroquialjuan23.edu.ar</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/utn.jpg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Programa Ejecutivo en Project Management</h3>
                            <h4>Universidad Tecnológica Nacional</h4>
                            <h5>Expedición: may 2018</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/ean.jpg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Diplomatura en Marketing</h3>
                            <h4>Escuela Argentina de Negocios</h4>
                            <h5>Expedición: dic 2017</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/fundacion-impulsar.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Capacitación en Planes de Negocio</h3>
                            <h4>Fundación Impulsar</h4>
                            <h5>Expedición: may 2018</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/unlam.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Programación Web ASP.NET</h3>
                            <h4>Universidad Nacional de La Matanza</h4>
                            <h5>Expedición: dic 2019</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/microsoft.jpg" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Programación C# .NET</h3>
                            <h4>Microsoft</h4>
                            <h5>Expedición: dic 2006</h5>
                            <p></p>
                        </div>
        
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                            <i class="fa-solid fa-landmark" alt="depcsuite"></i>
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>English Intermediate B2</h3>
                            <h4>Instituto John Milton de Cultura Inglesa</h4>
                            <h5>Expedición: dic 2006</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Basico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>gameplays</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion">

        </section>
        <section id="cursos">

        </section>
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
                <a href="mailto:info@nelsontarche.com.ar">maxi_sigrist@hotmail.com</a>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=+543535656422" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
    </footer>
</body>

</html>
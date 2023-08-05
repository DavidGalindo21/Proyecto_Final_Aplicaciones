<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>Ricas Tentaciones</title>

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
    <link rel="stylesheet" href="assets/css/foodhut.css">
    <link rel="shortcut icon" href="assets/imgs/LOGO PIZZA (2).PNG">
    <style>
        .login{
            background-color: blue;
            border-radius: 5px;
            padding: 5px 20px 5px 20px;
            margin-right: 10px;
        }
        .registro{
            background-color: #ff214f;
            padding: 5px 20px 5px 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Políticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacto</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/LOGO PIZZA (2).PNG" class="brand-img" alt="">
                <span class="brand-txt">Ricas Tentaciones</span>
            </a>
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link login" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link registro" href="Altas_Usuarios.php">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeria.html">Galería de productos</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">WEBPIZZ</h1>
            <h2 class="display-4 mb-5">Las mejores pizzas &amp; sus grandes sabores </h2>
            <a class="btn btn-lg btn-primary" href="galeria.html">Conoce nuestro Menú</a>
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about" data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">¿Quiénes somos?</h2>
                        <p>Esta empresa es un establecimiento de negocio de una pizzería llamada “Ricas tentaciones”, en
                            la que se promocionan y se venden ricas pizzas con diferentes ingredientes según lo que el
                            cliente desee, de la misma manera pizzas de diversos tamaños, con precios muy accesibles.
                            <br> </p>
                        <p><b>Estas pizzas tienen el rico sabor y sazón Mexicano</b></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  gallary Section  -->
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">Nuestras instalaciones</h2>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/+.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img"
                height="100%">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/6125328d679e6a86536cc0e4b7c48515.jpg"
                alt="template by DevCRID http://www.devcrud.com/" height="100%" class="gallary-img">

        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/bd0ba3a8eeb87de3634e4f6851a1482c.gif"
                alt="template by DevCRID http://www.devcrud.com/" class="gallary-img" height="100%">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/75b191fcd7f7ebcda76aade0b2c214e3.jpg"
                alt="template by DevCRID http://www.devcrud.com/" class="gallary-img" height="100%">
        </div>


       
        <!-- BLOG Section  -->
        <div id="blog" class="container-fluid bg-dark text-light p-2 text-center wow fadeIn">
            <h2 class="section-title py-2">NUESTRA...</h2>
            <div class="row justify-content-center">

            </div>
                    <div class="row d-flex align-items-center justify-content-center pb-3 w-100">
                        <div class="col-md-3">
                            <div class="card bg-transparent border my-3 my-md-0">
                                <img src="assets/imgs/34d0a0e7ff21a86245c35a30089c4c88.gif"
                                    alt="template by DevCRID http://www.devcrud.com/"
                                    class="rounded-0 card-img-top mg-responsive">
                                <div class="card-body">
                                    <h4 class="pt20 pb20">Misión</h4>
                                    <p class="text-white">Ricas tentaciones tiene como misión ofrecer pizzas con rico
                                        sazón, variedad, precio, calidad y servicio al cliente.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-transparent border my-3 my-md-0">
                                <img src="assets/imgs/63f488c4c8876675e06d614cb7d22da8.gif"
                                    alt="template by DevCRID http://www.devcrud.com/"
                                    class="rounded-0 card-img-top mg-responsive">
                                <div class="card-body">

                                    <h4 class="pt20 pb20">Visión</h4>
                                    <p class="text-white">Convertirse en la pizzería más reconocida por su rico sazón y
                                        poder llegar a todos los municipios del estado de Aguascalientes. </p>
                                </div>
                            </div>
                        </div>
                        <!-- VALORES -->
                        <div class="col-md-3">
                    <div class="card bg-transparent" style="width: 24rem; height: 28rem;">
                        <img src="assets/imgs/about-section.jpg" class="card-img-top " alt="">
                        <div class="card-body">
                            <h4 class="card-title">Valores Organizacionales</h4>
                            <p class="text-white">
                              Para llevar a cabo una buena relación dentro de la empresa, ponemos en práctica los siguientes valores:
                            </p>
                          
                                <div class="badges-contenedor">
                                    <span class="badge text-bg-primary bg-primary">Compromiso</span>
                                    <span class="badge text-bg-primary bg-primary">Trabajo en equipo</span>
                                    <span class="badge text-bg-primary bg-primary">Solidaridad</span>
                                    <span class="badge text-bg-primary bg-primary">Pasión</span>
                                    
                                </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        
                        <div class="col-md-15">
                            <div class=" bg-transparent my-3 my-md-0">
                                <img src="assets/imgs/politicas.jpg" class="rounded-0 card-img-top mg-responsive w-50">
                                <div class="card-body">
                                    <h4 class="pt20 pb20">Políitica de Calidad</h4>
                                    <p class="text-white" style="text-align: justify;"> Ricas tentaciones ha
                                        seleccionado la Calidad como un factor estratégico, aplicable en todo su ámbito
                                        organizativo, para reforzar su posición competitiva asegurando la satisfacción
                                        del cliente, evaluando continuamente y mejorando los procesos en relación con la
                                        calidad de sus productos. El compromiso que tiene Ricas tentaciones contrae con
                                        la sociedad se basa en los principios de Calidad, Seguridad, Responsabilidad y
                                        Transparencia de los productos que comercializa. Para conseguir este objetivo
                                        prioritario se apoya en:
                                    <ul style="text-align: justify;">
                                        <li>Asumir la necesidad de una mejora continua en la calidad y la seguridad de
                                            nuestros productos, de nuestros procesos y de nuestras condiciones de
                                            trabajo, ello lo logramos con el trabajo bien hecho y asegurando que ninguna
                                            tarea sea realizada sin las debidas medidas de seguridad e higiene. </li>
                                        <li>Hacer de la Calidad y la seguridad los elementos básicos en la cultura de la
                                            empresa, implicando para ello a todo el personal afectado. Para ello,
                                            desarrollamos procedimientos de comunicación externa e interna que
                                            garanticen el máximo nivel de eficacia en las comunicaciones. </li>
                                        <li>Conseguir el compromiso de todo el personal de apoyando y atendiendo sus
                                            sugerencias y propuestas de mejora. Velamos por otorgar a todo nuestro
                                            personal un nivel alto de formación en materia de Inocuidad y Seguridad
                                            Alimentaria creando así una auténtica Cultura de Seguridad Alimentaria </li>
                                        <li>Desarrollar una mejora continua de nuestro Sistema de Gestión de Inocuidad
                                            Alimentaria, de los procesos y productos, innovando, adecuando y promoviendo
                                            los métodos de trabajo seguros en Ricas tentaciones.</li>
                                        <li>Diseñar, desarrollar e implantar un sistema de seguridad en nuestras
                                            instalaciones que evite la contaminación intencionada de los productos
                                            elaborados para cumplir así con el compromiso adquirido de seguridad de
                                            nuestros productos. </li>
                                    </ul>
                                    <p style="text-align: justify;"> Dirección de Ricas tentaciones asume la
                                        responsabilidad de velar constantemente porque dichos principios estén presentes
                                        en todas las actividades internas de la empresa, así como en nuestras relaciones
                                        con el exterior: clientes, proveedores y sociedad en general y dotar a la
                                        empresa de los recursos necesarios para lograr los objetivos planificados y la
                                        mejora continua en nuestra actividad.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        </div>

        <!-- CONTACT Section  -->
        <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div id="map" style="width: 100%; height: 100%; min-height: 400px"></div>
                </div>
                <div class="col-md-6 px-5 has-height-lg middle-items">
                    <h3>Ubicación</h3>
                    <p>Esta pizzeria está ubicada en el municipio de Pabellón de Hidalgo que pertence al municipio de
                        Rincón de Romos Ags.</p>
                    <div class="text-muted">
                        <p><span class="ti-location-pin pr-3"></span> Pabellón de Hidalgo Colonia Linda Vista Calle
                            Nueva #124</p>
                        <p><span class="ti-support pr-3"></span> 465-108-17-21</p>
                        <p><span class="ti-email pr-3"></span>info@website.com</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Programacion en PHP -->
            <?php 
                include('Conexion.php');
                $nombre = $apellidos = $email = $mensaje = '';
                $edad = 0;
                $db = new DataBase();

               
            ?>
         <!-- Programacion en PHP -->   

        <div class="container p-5">
            <div class="text-center">
                <h1>Contáctanos</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Francisco">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="exampleFormControlInput1" placeholder="Gómez Palacios">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Edad</label>
                    <input type="number" class="form-control" name="edad" id="exampleFormControlInput1" placeholder="18">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                    <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="text-center">
                  <input type="submit" value="ENVIAR" class="btn btn-primary btn-lg" id="ENVIAR" name="ENVIAR">
                </div>
            </form>
        </div>

        <?php
             if(isset($_REQUEST['ENVIAR'])){
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $edad = $_POST['edad'];
                $email = $_POST['email'];
                $mensaje = $_POST['mensaje'];

                $insert = "INSERT INTO mensajes(NOMBRE,APELLIDOS,EDAD,EMAIL,MENSAJE) VALUES (:nombre,:apellidos,:edad,:email,:mensaje);";
                $insert = $db->connect()->prepare($insert);
                $insert->bindParam('nombre',$nombre,PDO::PARAM_STR,50);
                $insert->bindParam('apellidos',$apellidos,PDO::PARAM_STR,50);
                $insert->bindParam('edad',$edad,PDO::PARAM_STR,2);
                $insert->bindParam('email',$email,PDO::PARAM_STR,50);
                $insert->bindParam('mensaje',$mensaje,PDO::PARAM_STR,100);

                $insert->execute();
            }
        ?>
        <div class="bg-dark text-light text-center border-top wow fadeIn w-100">
            <p class="mb-0 py-3 text-muted small">&copy; Copyright
                <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i>
                By <a href="http://devcrud.com">DevCRUD</a>
            </p>
        </div>
        <!-- end of page footer -->

        <!-- core  -->
        <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

        <!-- bootstrap affix -->
        <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

        <!-- wow.js -->
        <script src="assets/vendors/wow/wow.js"></script>

        <!-- google maps -->
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

        <!-- FoodHut js -->
        <script src="assets/js/foodhut.js"></script>

</body>

</html>
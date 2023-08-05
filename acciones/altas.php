<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de altas</title>
    <link rel="stylesheet" href="../style_1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .salir {
            background-color: #dc3545;
            padding: 10px;
            border: 2px solid #dc3545;
            border-radius: 10px;
            color: white;
            font-weight: bold;
        }
        .salir:hover{
            background-color: white;
            color: #000;
        }
    </style>
</head>

<body>
    <?php
    include("../Conexion.php");
    $nombre = $correo = $password = $apellidos = "";
    $nivel = "0";
    $db = new Database();
    $query = $db->connect()->prepare('select max(id) as id from registro_usuario');
    $query->execute();
    $row = $query->fetch();
    $numero = $row['id'];
    $numero++;


    ?>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-between w-100 px-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link salir" aria-current="page" href="./../index.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="principal">
        <div class="contenedor text-center">

            <a href="altas.php"> <button>Agregar Registro</button> </a>

            <a href="bajas.php"> <button>Eliminar Registro</button> </a>

            <a href="consultas.php"> <button>Consultar</button> </a>

            <a href="cambios.php"> <button>Cambios</button> </a>

        </div>
        <div class="formulario text-center d-flex justify-content-center align-items-center flex-column">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" autocomplete="on">
                <section class="form-registrer p-4">
                    <h1><b>Alta de Usuarios</b></h1>
                    <label for="id"><b>Número de registro:</label><br>
                    <input type="text" id="id" name="id" readonly size="5" value="<?php echo $numero; ?>"> <br /><br />


                    <label for="nombre"><b>Nombre:</label></b><br>
                    <input type="text" id="nombre" name="nombre" size="30" placeholder="Inicie con mayúscula" autofocus>
                    <br /><br />



                    <label for="apellidos">Apellidos:</label><br>
                    <input type="text" id="apellidos" name="apellidos" placeholder="Sólo letras" size="30">
                    <br /><br />


                    <label for="correo">Correo:</label><br>
                    <input type="email" id="correo" name="correo" placeholder="Email" size="30">
                    <br /><br />
                    <label for="password">Contraseña:</label><br>
                    <input type="password" id="password" name="password" placeholder="Utiliza símbolos y letras" autofocus size="30">
                    <br /><br />

                    <label for="nivel">Nivel:</label>
                    <select name="nivel" id="nivel">
                        <option value="1">1 - (Administrador)</option>
                        <option value="2">2 - (Básico)</option>
                    </select>
                    <br /><br />

                    <input class="enviar btn btn-primary btn-lg" type="submit" value="Registrar" name="enviar">
                </section>
            </form>


        </div>

    </div>
    <?php
    if (isset($_REQUEST['enviar'])) {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $nivel = $_POST['nivel'];


        $query = $db->connect()->prepare('select correo from registro_usuario where correo = :correo');
        $query->execute(['correo' => $correo]);
        $row = $query->fetch(PDO::FETCH_NUM);
        if ($query->rowCount() <= 0) {
            $insert = "insert into registro_usuario(nombre, correo, password, nivel, apellidos) values(:nombre, :correo, :password,:nivel,:apellidos)";
            $insert = $db->connect()->prepare($insert);
            $insert->bindParam('nombre', $nombre, PDO::PARAM_STR, 30);
            $insert->bindParam('correo', $correo, PDO::PARAM_STR, 50);
            $insert->bindParam('password', $password, PDO::PARAM_STR, 100);
            $insert->bindParam('nivel', $nivel, PDO::PARAM_STR);
            $insert->bindParam('apellidos', $apellidos, PDO::PARAM_STR, 50);
            $insert->execute();
            if (!$query) {
                echo "Error: ", $query->errorInfo();
            }
            echo "¡Registro agregado!";
        } else if ($query->rowCount() > 0) {

            echo "¡EL CORREO YA EXISTE!";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
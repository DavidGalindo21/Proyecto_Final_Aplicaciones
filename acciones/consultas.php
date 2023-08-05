<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../style_1.css">
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

    $correo = isset($_REQUEST['correo']) ? $_REQUEST['correo'] : null;

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
            <h1>Consultas de registros</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <fieldset>
                    <legend>Datos de consulta</legend>
                    <label for="correo">Correo a consultar:</label>
                    <input type="text" name="correo" id="correo" value="<?php echo $correo; ?>" size="30" required><br><br>
                    <input type="submit" name="consultar" value="Consultar Correo" class="btn btn-secondary">
                    <input type="submit" name="todo" id="todo" value="Mostrar todos los regístros" class="btn btn-primary">
                </fieldset>
            </form>
            <?php
            include("../Conexion.php");
            $db = new Database();
            if (isset($_REQUEST['consultar'])) {
                $correo = isset($_REQUEST['correo']) ? $_REQUEST['correo'] : null;
                $query = $db->connect()->prepare('SELECT * FROM registro_usuario WHERE correo = :correo');

                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute(['correo' => $correo]);
                $row = $query->fetch();

               
                
                if ($query->rowCount() <= 0) {
                    echo "<h4>Correo no encontrado</h4>";
                } else if ($query->rowCount() > 0) {
                    print "<h5>Registro encontrado</h5>";
                    print "<hr/>";
                    print "<table class='table'>";

                    print "<tr>";
                    print "<th>Id</th>";
                    print "<td>" . $row['id'] . "</td>";
                    print "</tr>";

                    print "<tr>";
                    print "<th>Nombra</th>";
                    print "<td>" . $row['nombre'] . "</td>";
                    print "</tr>";

                    print "<tr>";
                    print "<th>Apellidos</th>";
                    print "<td>" . $row['apellidos'] . "</td>";
                    print "</tr>";

                    print "<tr>";
                    print "<th>Tipo de usuario</th>";
                    print "<td>" . $row['nivel'] . "</td>";
                    print "</tr>";

                    print "<tr>";
                    print "<th>Password</th>";
                    print "<td>" . $row['password'] . "</td>";
                    print "</tr>";

                    print "<tr>";
                    print "<th>Correo</th>";
                    print "<td>" . $row['correo'] . "</td>";
                    print "</tr>";


                    print "</table>";
                    print "<hr>";
                } //rowCount>0
            } //Boton Buscar
            if (isset($_REQUEST['todo'])) {
                $query = $db->connect()->prepare("SELECT * FROM registro_usuario");
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute();
                if ($query->rowCount() < 0) {
                    print "NO HAY INFORMACION DISPONIBLE";
                } else if ($query->rowCount() >= 0) {
                    print "<br/><br/><hr/><br/>";
                    print "USUARIOS REGISTRADOS";
                    print "<br/><hr/><br/>";
                    print "<table class='table'>";
                    print "<tr>";
                    print "<th>ID</th>";
                    print "<th>Nombre</th>";
                    print "<th>Apellidos</th>";
                    print "<th>Nivel</th>";
                    print "<th>Correo</th>";
                    print "</tr>";
                    while ($row = $query->fetch()) {
                        $nivel = "";
                if($row['nivel'] == 1){
                    $nivel = "Administrador";
                }else if($row['nivel'] == 2){
                    $nivel = "Basico";
                }

                        print "<tr>";
                        print "<td>" . $row['id'] . "</td>";
                        print "<td>" . $row['nombre'] . "</td>";
                        print "<td>" . $row['apellidos'] . "</td>";
                        print "<td>" . $nivel . "</td>";
                        print "<td>" . $row['correo'] . "</td>";
                        print "</tr>";
                    }
                    print "</table>";
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
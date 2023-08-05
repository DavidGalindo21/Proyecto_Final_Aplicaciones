<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar registros</title>
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
            <h1>Eliminar Registros</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <fieldset>
                    <legend>Eliminar Registros</legend>

                    <label for="coreo">Correo a buscar:</label>
                    <input type="text" name="correo" id="correo" value="<?php echo $correo; ?>" size="30" class="text-center" required>
                    <input type="submit" name="buscar" id="Buscar" class="btn btn-primary">
                    <br><br>
                    <?php
                        $nivel = "";
                    include('../Conexion.php');
                    $db = new DataBase();

                    if (isset($_REQUEST['buscar'])) {
                        $correo = isset($_REQUEST['correo']) ? $_REQUEST['correo'] : null;
                        $query = $db->connect()->prepare('SELECT * FROM registro_usuario WHERE correo = :correo');
                        $query->setFetchMode(PDO::FETCH_ASSOC); /* Para convertir la consulta en un arreglo */
                        $query->execute(['correo' => $correo]);
                        $row = $query->fetch();


                        
                        if($row['nivel'] == 1){
                            $nivel = "Administrador";
                        }else if($row['nivel'] == 2){
                            $nivel = "Basico";
                        }



                        if ($query->rowCount() <= 0) {
                            echo "<h4>Correo no encontrado</h4>";
                        } else if ($query->rowCount() > 0) {
                            print '<div class="text-center w-100 d-flex justify-content-center align-items-center flex-column">';
                            print "<h5>Registro encontrado:</h5>";
                            print "<hr>";
                            print "<table class='table'>";

                            print "<tr>";
                            print "<th>ID</th>";
                            print "<td>" . $row['id'] . "</td>";
                            print "</tr>";
                            print "<tr>";
                            print "<th>Nombre:</th>";
                            print "<td>" . $row['nombre'] . "</td>";
                            print "</tr>";
                            print "<tr>";
                            print "<th>Apellidos:</th>";
                            print "<td>" . $row['apellidos'] . "</td>";
                            print "</tr>";
                            print "<tr>";
                            print "<th>Tipo de usuario:</th>";
                            print "<td>".$nivel."</td>";
                            print "</tr>";
                            print "<tr>";
                            print "<th>Contraseña:</th>";
                            print "<td>" . $row['password'] . "</td>";
                            print "</tr>";
                            print "</table>";
                            print "<hr>";
                            print "<input type='submit' name='eliminar' id='eliminar' class='btn btn-danger btn-lg' value='Eliminar registro'/>";
                            print '</div>';
                        } // rowCount > 0
                    } // Boton buscar
                    if (isset($_REQUEST['eliminar'])) {
                        $correo = isset($_REQUEST['correo']) ? $_REQUEST['correo'] : null;
                        $query = $db->connect()->prepare("DELETE FROM registro_usuario WHERE correo = :correo");
                        $query->execute(['correo' => $correo]);
                        if (!$query) {
                            echo "Error: " . $query->errorInfo();
                        }
                        echo "<h5>Registro eliminado</h5>";
                        $query->closeCursor();
                        $query = null;
                        $db = null;
                    }
                    ?>
                </fieldset>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
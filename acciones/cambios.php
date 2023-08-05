<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambios de datos</title>
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
    $nivel = "";
    $nivel_usuario = 0;
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
            <h1>Cambios de datos</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="text-center" method="POST">
                <label for="correo">Correo:</label>
                <input type="text" name="correo" id="correo" value="<?php echo $correo; ?>" size="30" class="text-center">
                <input type="submit" value="Buscar Registro" name="buscar" id="buscar" class="btn btn-primary"><br><br>
                <hr>


                <?php
                if (isset($_REQUEST['buscar'])) {
                    include('../Conexion.php');
                    $db = new DataBase();  
                    $correo = isset($_REQUEST['correo']) ? $_REQUEST['correo'] : null;
                
                    
                   
                    
                    $query = $db->connect()->prepare("SELECT * FROM registro_usuario WHERE correo = :correo");
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    $query->execute(['correo' => $correo]);
                    $row = $query->fetch();


                    if ($query->rowCount() <= 0) {
                        echo "CORREO NO ENCONTRADO";
                    } else if ($query->rowCount() > 0) {
                        $nivel = "";
                        if($row['nivel'] == "1"){$nivel = $nivel."Administrador";}
                        if($row['nivel'] == "2"){$nivel = $nivel."Basico";}

                        echo '<label>ID:</label>';
                        echo '<input type="text" name="" value="' . $row['id'] . '" readonly size="5"/> <br/><br/>';
                        echo '<label>Nombre:</label>';
                        echo '<input type="text" name="nombre" value="' . $row['nombre'] . '"   size="20"/> <br/><br/>';
                        echo '<label>Apellidos:</label>';
                        echo '<input type="text" name="apellidos" value="' . $row['apellidos'] .'"  size="20"/> <br/><br/>';
                        echo '<label>Tipo de usuario:</label>';
                        echo '<select name="nivel" id="nivel">
                <option value="' .$nivel . '">' . $nivel . '</option>
                <option value="1">1 - (Administrador)</option>
                <option value="2">2 - (Básico)</option>
            </select><br><br>';
            echo '<label>Contraseña:</label>';
            echo '<input type="text" name="password" value="' . $row['password'] .'" autofocus class="text-center" /> <br/><br/>';
            echo '<input type="submit" name="cambiar" id="cambiar" value="Cambiar datos" class="btn btn-danger btn-lg" />';

                    }
                }
                if (isset($_REQUEST['cambiar'])) {
                  
                    include('../Conexion.php');
                    $db = new DataBase();  


                   $nombre = $_POST['nombre'];
                   $apellidos = $_POST['apellidos'];
                    $password = $_POST['password'];
                    $nivel = $_POST['nivel'];
                    $correo = $_POST['correo'];

                    $sql = "UPDATE registro_usuario SET nombre=?, apellidos=?, nivel=?, password=? WHERE correo = ?";
                    $stmt = $db->connect()->prepare($sql);
                    $stmt->execute([$nombre,$apellidos,$nivel,$password,$correo]);
                    echo "Los datos se actualizaron correctamente!!!";
                }
                ?>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
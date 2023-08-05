<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de usuarios</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="style2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
     section {
        background-image: url(assets/imgs/fondo.jpg);
        background-size: cover;
        background-position: center;
      }
  
      .formulario {
        border-radius: 8px;
      }
  
      .btn {
        width: 150px;
        height: 50px;
        font-size: 18px;
      }
      option{
        border: 2px solid #dc3545;
      }
      input[type="password"] {
        border: 2px solid #dc3545;
      }
      input[type="text"] {
        border: 2px solid #dc3545;
      }
      input[type="email"] {
        border: 2px solid #dc3545;
      }
      .form-label{
        font-size: 1.3rem;
      }
      video {
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        z-index: -1;
      }
      .naav{
        position: absolute;
        right: 2rem;
      }
      .salir{
        background-color: #dc3545;
        padding: 10px;
        border-radius: 10px;
        border: 2px solid #dc3545;
        color: #fff;
        font-weight: bold;
      }
      .salir:hover{
        background-color: white;
      }
      .crear{
        border: 2px solid;
      }
      .text-muted{
        color: blue;
      }
      .inicio{
        background-color: blue;
        padding: 10px;
        border: 2px solid blue;
        color: white;
        font-weight: bold;
        margin-right: 10px;
        border-radius: 10px;
      }
      .inicio:hover{
        background-color: white;
      }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md bg-white text">
    <div class="container-fluid">
      <a class="navbar-brand ml-3" href="#"><img src="assets/imgs/LOGO PIZZA (2).PNG" class="rounded-circle" height="50px" width="50px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav text-center m-auto naav">
          <li class="nav-item">
            <a class="nav-link inicio" href="login.php">Inicio de sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link salir" href="index.php">Aplicación</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>





  <?php
  include("Conexion.php");
  $nombre = $correo = $password = $apellidos = "";
  $nivel = "0";
  $db = new Database();
  $query = $db->connect()->prepare('select max(id) as id from registro_usuario');
  $query->execute();
  $row = $query->fetch();
  $numero = $row['id'];
  $numero++;


  ?>




  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center flex-column align-items-center h-100">

        <div class=" formulario w-50 bg-white p-5">
          <div class="text-center">
            <img src="assets/imgs/LOGO PIZZA (2).PNG" style="width: 100px; border-radius: 50%;" alt="logo">
            <h4 class="mt-1 mb-5 pb-1">Ricas Tentaciones</h4>
          </div>

          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example11">Número de registro</label>
              <input type="text" id="form2Example11" name="id" size="5" value="<?php echo $numero; ?>" class="form-control" />

            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example22">Nombre</label>
              <input type="text" id="form2Example22" name="nombre" class="form-control" />

            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example22">Apellidos</label>
              <input type="text" id="form2Example22" name="apellidos" class="form-control" />

            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example22">Correo</label>
              <input type="email" id="form2Example22" name="correo" class="form-control" />

            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example22">Contraseña</label>
              <input type="password" id="form2Example22" name="password" class="form-control" />

            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example22">Tipo de usuario</label>
              <select name="nivel" class="form-control" id="nivel">
                <option value="1">1 - (Administrador)</option>
                <option value="2">2 - (Basico)</option>
              </select>

            </div>

            <div class="text-center pt-1 mb-3 pb-1">
              <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 w-100" value="Registrar" name="enviar" type="submit">
              <br>
            </div>

            <div class="d-flex align-items-center justify-content-center flex-column">
              <p class="mb-0 me-2">Ya cuentas con una?</p>
              <a href="./login.php"> <button type="button" class="btn btn-outline-danger crear">Iniciar sesión</button></a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>

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
      echo  '<script type="text/javascript">
      alert("REGISTRO EXITOSO!!!");
    </script>';
   
    } else if ($query->rowCount() > 0) {

      echo "¡EL CORREO YA EXISTE!";
    }
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
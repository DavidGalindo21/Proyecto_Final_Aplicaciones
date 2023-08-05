<?php
  include('Conexion.php');
  $correo = $password = "";
  if (isset($_POST['correo']) && isset($_POST['password'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $db = new DataBase();
    $query = $db->connect()->prepare("SELECT * FROM registro_usuario WHERE correo = :correo AND password = :password");
    $query->execute(['correo' => $correo, 'password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if ($row == true) {
      header('location: acciones/altas.php');
    } else {
      echo '
          <script type="text/javascript">
            alert("USUARIO O PASSWORD INCORRECTO");
            window.location="login.php";
          </script>
        ';
    }
  }
  ?>
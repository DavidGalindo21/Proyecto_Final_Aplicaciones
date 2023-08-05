<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
  
      input[type="password"] {
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
        color: #fff;
        font-weight: bold;
        border: 2px solid #dc3545;
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
  </style>
</head>

<body>
  <video src="assets/videos/video.mp4" muted="true" loop="true" autoplay="true"></video>
  <nav class="navbar navbar-expand-md  bg-white">
    <div class="container-fluid">
      <a class="navbar-brand ml-3" href="#"><img src="assets/imgs/LOGO PIZZA (2).PNG" class="rounded-circle" height="50px" width="50px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="navbarNav">
        <ul class="navbar-nav naav">
          <li class="nav-item">
            <a class="nav-link salir" href="index.php">Salir de la aplicación</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center flex-column align-items-center h-100">

        <div class=" formulario w-50 bg-white p-5">
          <div class="text-center">
            <img src="assets/imgs/LOGO PIZZA (2).PNG" style="width: 100px; border-radius: 50%;" alt="logo">
            <h4 class="mt-1 mb-5 pb-1">Ricas Tentaciones</h4>
          </div>

          <form method="post" action="accion_login.php">
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example11">Correo</label>
              <input type="email" id="form2Example11" name="correo" class="form-control" />

            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example22">Contraseña</label>
              <input type="password" id="form2Example22" name="password" class="form-control" />

            </div>

            <div class="text-center pt-1 mb-3 pb-1">
              <input class="btn btn-primary w-100 btn-block fa-lg gradient-custom-2 mb-3" value="Acceder" type="submit">
              <br>
              <a style="text-decoration: underline;" href="#!">Olvidaste tu contraseña?</a>
            </div>

            <div class="d-flex align-items-center justify-content-center flex-column">
              <p class="mb-0 me-2">No tienes una cuenta?</p>
              <a href="./Altas_Usuarios.php"> <button type="button" class="btn btn-outline-danger crear">Crear una</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
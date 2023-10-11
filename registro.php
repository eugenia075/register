<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.111.3">
  <title>Registro</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
  <link rel="stylesheet" href="login.css">

  <link rel="stylesheet" href="bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link href="boot1.css" rel="stylesheet">
  <style>
  </style>
</head>

<body class="text-center">

  <main class="form-signin w-100 m-auto">
    <form action="base.php" method="POST">
      <div class="caja-negra">
        <h1 class="h3 mb-3 fw-normal helado">Registro</h1>
      </div>

      <p>Introduce tu email, nombre y contraseña</p>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name='email'>
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name='usuario'>
        <label for="floatingInput">Usuario</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='contraseña'>
        <label for="floatingPassword">contraseña</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Confirmar</button>
    </form>
  </main>
  <?php
  include('base.php');
  ?>
</body>

</html>
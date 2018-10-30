<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Login Sistema Vides</title>

    <!-- Bootstrap core CSS -->
    <link href="/Framework/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/Framework/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="/Controlador/cLogin.php">
      <img class="mb-4" src="grapes_1f347.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Sistema Vides</h1>
      <label for="inputName" class="sr-only">Nombre Usuario</label>
      <input type="text" name="txtUsuario" id="inputName" class="form-control" placeholder="Nombre Usuario" required autofocus>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" name="txtPass" id="inputPassword" class="form-control" placeholder="Contraseña" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar cuenta
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    <script>
        function login(){
            window.location = "dashboard.html";
        }
    </script>
  </body>
</html>
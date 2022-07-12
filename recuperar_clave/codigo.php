<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validar codigo</title>
  <link rel="shortcut icon" href="https://www.risaralda.gov.co/info/gobrisaralda/web/portal/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" href="codigo.css"/>
</head>

<body>
  <div class="contenedor alt">
    <form method="POST" id="contenedor">
      <h3>Ingresa el codigo que enviamos a tu correo.</h3>
      <input class="form-control" type="number" placeholder="Codigo" name="codigo" id="codigo" min="1">
      <input type="submit" value="Validar" id="validar" name="validar" class="btn btn-success">
    </form>
    <div  class='alert alert-primary' id="alerta" role='alert'><i class='fas fa-exclamation-triangle'></i></div>
  </div>

  <script src="codigo.js"></script>
</body>

</html>
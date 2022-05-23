<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>combiar contraseña</title>
  <link rel="stylesheet" href="codigo.css" />
</head>

<body>
<div class="padre">
  <div class="contenedor alt">
    <form method="POST" id="contenedor">

      <label class="d" for="" style="font-size: 20px;"><b> Validar codigo</b> </label><input class="m" type="number" name="codigo" id="codigo">

      <input type="submit" value="Validar " id="validar" name="validar" class="validar">
    </form>
    <div style="font-size: 20px;" class='alert alert-primary' id="alerta" role='alert'><i class='fas fa-exclamation-triangle'></i></div>
  </div>
</div>
  <script src="codigo.js"></script>
</body>

</html>
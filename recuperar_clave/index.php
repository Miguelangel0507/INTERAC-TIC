<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <style>
    body {
      background-image: url("../img/fondo.jpg");
    }

    .corecto {
      margin: 18px;
      background-color: #005aff6e;
      font-size: 20px;
      /* width: 55%; */
      border: 1px solid #005aff6e;
    }

    .contenedor {
      background-color: white;
      width: 380px;
      border-radius: 15px;
      text-align: center;
      margin-left: 462px;
      padding: 23px;
    }

    .validar {
      background-color: #31D431;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 25px;
      margin: 10px;
    }

    input {
      background-color: gainsboro;
      margin: 7px;
    }

    .d {
      margin: 25px;
    }

    .alt {
      height: 320px;
      align-items: center;
      margin-top: 127px;
    }

    input {
      align-items: center;
    }

    .form-control{
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="contenedor alt">
    <form action="index.php" method="POST" id="p">
      <label class="d" for=""><b> Ingresa tu correo electronico</b> </label> <input class="form-control" placeholder="Correo electronico" type="email" name="email">
      <button class="validar"> Enviar</button><br>
      <a href="../index.php "> <b> Regresar</b></a>
    </form>

    <?php
    if (isset($_POST["email"])) {
      $email = $_POST["email"];
      $campo = array();
      if ($email == "" || strpos($email, "@") == false) {
        array_push($campo, "Ingresa un correo valido");
      }
      if (count($campo) > 0) {
        echo "<div class='alert alert-primary'>";
        echo " " . $campo[0] . "";
      } else {
        echo "<div class='alert alert-primary'>";
        include "validar.php";
      }
      echo "</div>";
    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
  
</body>

</html>
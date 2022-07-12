<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperacion contraseña</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="shortcut icon" href="https://www.risaralda.gov.co/info/gobrisaralda/web/portal/img/favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <style>
    body {
      background-image: url("../img/fondo.jpg");
      display: flex;
      justify-content: center;
      font-family: Arial, Helvetica, sans-serif;
    }

    .corecto {
      margin: 18px;
      background-color: #005aff6e;
      font-size: 20px;
      border: 1px solid #005aff6e;
    }

    .contenedor {
      background-color: white;
      border-radius: 15px;
      width: 404px;
      text-align: center;
      /*margin-left: 462px;*/
      padding: 23px;
      align-items: center;
      margin-top: 127px;

    }

    .validar {
      background-color: green;
      border: none;
      border-radius: 4px;
      font-size: 25px;
      margin: 10px;
    }

    input {
      background-color: gainsboro;
      margin: 7px;
    }

    .titulo{
      margin-bottom: 24px;
    }

    .instruccion{
      font-size: 14.5px;
      margin: 0px;
      color: gray;
    }
    .btn{
      margin: 10px 0px 16px;
    }

    @media(max-width:492px) {
      .contenedor {
        width: 80%;
      }
    }
  </style>
</head>

<body>

  <div class="contenedor alt">
    <form action="index.php" method="POST" id="p">
      <h3 class="titulo">Ingresa tu correo electronico.</h3>
      <label class="instruccion">Se enviara un codigo a tu correo electronico registrado.</label>
      <input type="email" class="form-control input" name="email" id="email" placeholder="Ingrese su correo electronico " aria-label="Username" aria-describedby="basic-addon1" />
      <button class="btn btn-success">Enviar</button><br>
      
    </form>
    
    <?php
    if (isset($_POST["email"])) {
      $email = $_POST["email"];
      $campo = array();
      if ($email == "" || strpos($email, "@") == false) {
        array_push($campo, "Ingresa un correo valido");
      }
      if (count($campo) > 0) {
        echo "<div class='alert alert-primary' id='alerta' role='alert'>";
        echo $campo[0];
      } else {
        echo "<div class='para alert alert-primary' id='alerta' role='alert'>";
        include "validar.php";
      }
      echo "</div>";
    }
    ?>

<a href="../index.php "> <b> Regresar</b></a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF " crossorigin="anonymous "></script>
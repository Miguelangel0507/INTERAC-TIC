<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>combiar contraseña</title>
    
    <style> 
  body{
    background-image: url("../img/fondo.jpg");
  }
  .contenedor{
    background-color: white;
    border: solid 1px green;
    width: 280px;
    /* border-radius: 5px; */
    /* float: left; */
    text-align: center;
    margin-left: 462px;
    padding: 23px;
    
}
.validar{
  background-color: green;
  border-radius: 5px;
  font-size: 23px;
}
input{
  background-color:gainsboro;
  margin: 4px;
}
.m{
  border-radius: 7px;
  border: 1px solid black;
  font-size: 25px;
}
.d{
margin: 25px;
}
.alt{
  height: 300px;
    display: flex;
    align-items: center;
    margin-top: 127px;
    
}
  input{
    align-items: center;
  }
  </style>
  </head>
  <body>
  <div class="contenedor alt">
    <form action="comprobar.php" method="POST" >
       
      <label class="d" for="" style="font-size: 20px;"><b>  Validar codigo</b> </label><input class="m" type="text" name="codigo" id="codigo">
      <b><input type="submit"value="Validar " id="validar" class="validar"> </b> 
    
       </form>
  </div>
</body>
</html>

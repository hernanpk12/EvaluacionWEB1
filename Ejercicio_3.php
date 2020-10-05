<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>EvaluacinesWEB1</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Taller Programacion Web 1</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Ejercicio_1.php">Ejercicio 1<span class="sr-only">(current)</span></a>
        <li class="nav-item active">
        <a class="nav-link" href="Ejercicio_2.php">Ejercicio 2<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="Ejercicio_3.php">Ejercicio 3<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="Ejercicio_4.php">Ejercicio 4<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="Ejercicio_5.php">Ejercicio 5<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="Ejercicio_6.php">Ejercicio 6<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="Ejercicio_7.php">Ejercicio 7<span class="sr-only">(current)</span></a>
      </li>
    </ul>
           <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
         </form>
  </div>
</nav>


    </header>
    <main>
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-6">

          <form class="mt-3" action="Ejercicio_3.php" method="POST">
          <h4>descuento de zapatos</h4>
          <div class="row">
             <div class="col">
             <input type="text" class="form-control" placeholder="Ingresar la cantidad" name = "Zapatos">
             </div>
             <div class="col">
             <input type="text" class="form-control" placeholder="Ingresar precio" name ="Precio">
             </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3 btn-block" name="BotonCalcular">Calcular</button>
          </form>
   </div>

   <div class="container">
       <div class="row justify-content-center">
          <div class="col-4">
          <form  class="mt-3" action="Ejercicio_3.php" method="POST">
          
          <?php

          $Preciozapatos;
          $Cantidadzapatos;
          $preciototal;
          $descuento;

          if(isset($_POST["BotonCalcular"])){
              $Cantidadzapatos = $_POST["Zapatos"];
              $Preciozapatos = $_POST["Precio"];

              $preciototal = $Preciozapatos*$Cantidadzapatos;

              if ($Cantidadzapatos == 3){
                  $descuento = ($preciototal*10)/100;
                  $preciototal =$preciototal-$descuento; 
                  echo ("El Precio de la compra de zapatos es: ".$preciototal);
              }elseif($Cantidadzapatos > 3 && $Cantidadzapatos < 8){
                $descuento = ($preciototal*20)/100;
                $preciototal =$preciototal-$descuento; 
                echo ("El Precio de la compra de zapatos es: ".$preciototal);
              }elseif($Cantidadzapatos > 8 ){
                $descuento = ($preciototal*50)/100;
                $preciototal =$preciototal-$descuento; 
                echo ("El Precio de la compra de zapatos es: ".$preciototal);
              }else{
                  echo("Usted no tiene descuento");
              }
          }


          ?>
          </form>
    </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
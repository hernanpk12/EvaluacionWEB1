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
      <li class="nav-item">
        <a class="nav-link" href="Ejercicio_1.php">Ejercicio 1</a>
        <li class="nav-item">
        <a class="nav-link" href="Ejercicio_2.php">Ejercicio 2</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Ejercicio_3.php">Ejercicio 3</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Ejercicio_4.php">Ejercicio 4</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Ejercicio_5.php">Ejercicio 5</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Ejercicio_6.php">Ejercicio 6</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Ejercicio_7.php">Ejercicio 7</a>
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
          <div class="col-4">

          <form class="mt-3" action="Ejercicio_2.php" method="POST">
          <h4>Indice de Masa Corporal</h4>
          <div class="row">
             <div class="col">
             <input type="text" class="form-control" placeholder="Ingresar Peso" name = "Peso">
             </div>
             <div class="col">
             <input type="text" class="form-control" placeholder="Ingresar Altura" name ="Altura">
             </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3 btn-block" name="BotonCalcular">Calcular</button>
          </form>
   </div>

   <div class="container">
       <div class="row justify-content-center">
          <div class="col-4">
          <form  class="mt-3" action="Ejercicio_2.php" method="POST">
          
          <?php

          $IMC;
          $peso;
          $altura;

          if(isset($_POST["BotonCalcular"])){
              $peso = $_POST["Peso"];
              $altura = $_POST["Altura"];

              $IMC = $peso/($altura*$altura);
              if ($IMC <18.5){
                  echo ("su peso es suficiente ");
              }elseif($IMC > 18.5 && $IMC < 24.9){
                  echo("su peso es normal");
              }elseif($IMC > 25 && $IMC < 26.9){
                  echo("Sobre Grado 1");
              }elseif($IMC >27 && $IMC < 29.9){
                  echo("Sobre peso Grado 2 (preobesidad)");
              }elseif($IMC > 30 && $IMC <34.9){
                  echo("Obesidad de tipo 1");
              }elseif($IMC > 35 && $IMC < 39.9){
                  echo("Obesidad de tipo 2");
              }elseif($IMC > 40 && $IMC <49.9){
                  echo("Obesidad de tipo 3 (morbida)");
              }else {
                  echo("Obesidad de tipo (extrema)");
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
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcular la presion que la persona ejerce sobre la losa</h2>
  <p>Descripción:</p>
  <p>Una persona de 84 kg se para sobre una losa que tiene por superficie 225 metros cuadrados <br>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    Presion = f/a<br>
    Peso = m*g
</section>
<section class="datos">
<h2>Datos:</h2>
   m= 84kg <br>
   g= 9.8 m/s2.<br>
   a= 225m2.<br>
   W= ?. <br>
   P= ?.
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>La presion es:<br>
    W= 824N/225m2. <br>
   </p>
</section>
<?php
     function calcula_presion(){
        $g=9.8;
        $m= 84;
        $a= 225;
        $p= $m*$g;
        $W= $p/$a;
        return $W;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: Presion = ".calcula_presion(). " Pa</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
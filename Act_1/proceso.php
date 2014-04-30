<html lang="es">
<head>
  <title>Actividad 1 - Programación de sitios web - Jairo Alberto Prieto</title>
  <meta name="description" content="Actividad 2 del colaborativo 1, grupo 301127_34">
  <meta name="author" content="Jairo Alberto Prieto">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<h1>Actividad 1</h1>
<div class="panel panel-default">
<h2>UNIVERSIDAD NACIONAL ABIERTA Y A DISTANCIA</h2>
<h3>Encuenta de datos personales</h3>
<?php 
if (empty($registros)) {
  echo "Por favor ingrese el número de personas válido";
} else {
  $edad = $_REQUEST['edad'];
  $sexo = $_REQUEST['sexo'];
  $est_civil = $_REQUEST['est_civil'];
  echo "<p>Crear un programa que solicite el numero de estudiantes para realizar una encuesta sobre
(Numero de hombres, numero de mujeres, edad promedio de hombres, edad promedio de
mujeres, edad promedio de todos los estudiantes, y cuantas personas son según el estado
civil).</p><p>A continuación se muestra la idea de lo que debe contener el ejercicio, es solo manejando
formularios dinámicos.</p>";
  $hombres = 0;
  $mujeres = 0;
  $edad_hombres = 0;
  $edad_mujeres = 0;
  for ($e=1; $e <= count($sexo); $e++) { 
    if ($sexo[$e] == "femenino") {
      $mujeres++;
      $edad_mujeres += $edad[$e];
    } else {
      $hombres++;
      $edad_hombres += $edad[$e];
    }
  }
  echo "Hombres: $hombres. Mujeres: $mujeres. Edad hombres: $edad_hombres. Edad mujeres: $edad_mujeres";
}
?>
</div>
<div><a href="index.php">Ingresar otro valor</a></div>
</body>
</html>

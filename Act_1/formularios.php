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
$num = $_REQUEST['num_personas'];
if (empty($num) || !is_numeric($num) || $num < 1) {
  echo "Por favor ingrese el número de personas válido";
} else {
  for ($i=1; $i <= $num; $i++) { 
    echo "<div class='panel'><h4>Datos de la persona $i</h4>";
    echo "<label for='edad_$i'>EDAD</label>";
    echo "<input type='text' name='edad_$i' id='edad_$i' />";
    echo "</div>";
  }
}
?>
</div>
<div><a href="index.php">Ingresar otro valor</a></div>
</body>
</html>

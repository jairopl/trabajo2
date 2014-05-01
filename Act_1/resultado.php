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
<div class="panel panel-default container">
<h2>UNIVERSIDAD NACIONAL ABIERTA Y A DISTANCIA</h2>
<h3>Encuenta de datos personales</h3>
<?php 
if (empty($_REQUEST['registros'])) {
  echo "Por favor ingrese el número de personas válido";
} else {
  $edad = $_REQUEST['edad'];
  $sexo = $_REQUEST['sexo'];
  $est_civil = $_REQUEST['est_civil'];
  echo "<p>A continuación se muestran los resultados de los formularios.</p>";
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
?>
  <table class="table table-striped">
    <tr>
      <th>Variable</th>
      <th>Valor</th>
    </tr>
    <tr>
      <td>Hombres</td>
      <td><?php echo $hombres; ?></td>
    </tr>
    <tr>
      <td>Mujeres</td>
      <td><?php echo $mujeres; ?></td>
    </tr>
    <tr>
      <td>Edad promedio hombres:</td>
      <td><?php echo ($edad_hombres / $hombres); ?></td>
    </tr>
    <tr>
      <td>Edad promedio mujeres:</td>
      <td><?php echo ($edad_mujeres / $mujeres); ?></td>
    </tr>
    <tr>
      <td>Edad promedio general:</td>
      <td><?php echo (($edad_mujeres + $edad_hombres) / ($mujeres + $hombres)); ?></td>
    </tr>
  </table>
  <table class="table table-striped">
    <tr>
      <th>Estado civil</th>
      <th>Cantidad</th>
    </tr>
    <?php 
    foreach (array_count_values($est_civil) as $estado => $cuenta) {
      echo "<tr><td>" . ucwords(str_replace('_', ' ', $estado)) . "</td>";
      echo "<td>" . $cuenta . "</td></tr>";
    }
    ?>
  </table>
<?php
}
?>
</div>
<div><a href="index.php">Inicio</a></div>
</body>
</html>

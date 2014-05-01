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
$num = $_REQUEST['num_personas'];
if (empty($num) || !is_numeric($num) || $num < 1) {
  echo "Por favor ingrese el número de personas válido";
} else {
  echo "<form action='resultado.php' method='get'>";
  for ($i=1; $i <= $num; $i++) { 
    echo "<div class='panel'><h4>Datos de la persona $i</h4>";
    echo "<div class='form-group'><label for='edad_$i'>Edad</label>";
    echo "<input type='text' name='edad[$i]' id='edad_$i' required />";
    echo "</div>";
    $sexo = "sexo_$i";
    echo "<div class='form-group'><label for='$sexo'>Sexo</label>";
    echo "<select id='$sexo' name='sexo[$i]'>";
    echo "<option name='sexo[$i]' value='femenino'>Femenino</option>";
    echo "<option name='sexo[$i]' value='masculino'>Masculino</option>";
    echo "</select></div>";
    $est_civil = "estCivil_1";
    echo "<div class='form-group'><label for='$est_civil'>Estado civil</label>";
    echo "<select id='$est_civil' name='est_civil[$i]'>";
    echo "<option name='est_civil[$i]' value='soltero'>Soltero</option>";
    echo "<option name='est_civil[$i]' value='casado'>Casado</option>";
    echo "<option name='est_civil[$i]' value='union_libre'>Unión libre</option>";
    echo "<option name='est_civil[$i]' value='separado'>Separado</option>";
    echo "<option name='est_civil[$i]' value='viudo'>Viudo</option>";
    echo "</select></div>";
    echo "</div>";
  }
  echo "<div class='panel'><button class='btn default-btn' name='registros' value='1'>Enviar</button></div>";
  echo "</form>";
}
?>
</div>
<div><a href="index.php">Ingresar otro valor</a></div>
</body>
</html>

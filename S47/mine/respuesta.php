<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Aprendiendo PHP</title>
  <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

  <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
</head>

<body>

  <div class="contenedor">
    <h1>Aprendiendo PHP</h1>
    <!-- 291 -->
    <!-- <pre>
             <?php var_dump($_POST) ?>
             </pre> -->

    <!-- 292 -->
    <?php echo "<br> ****************292 *********************<br>"; ?>

    <?php $resultado = $_POST; ?>
    <p>Nombre: <?php echo $resultado['nombre']  ?></p>
    <p>Apellido: <?php echo $resultado['apellido']  ?></p>

    <!-- 294 Validando que un campo no llegue vacío -->

    <?php echo "<br> ****************294 validando datos *********************<br>"; ?>

    <?php
    $nombre = $resultado['nombre'];
    $apellido = trim($resultado['apellido']);

    if (!(filter_has_var(INPUT_POST, 'nombre') && (strlen(filter_input(INPUT_POST, 'nombre')) > 0))) {
      echo 'Debes agregar un valor';
    } else {
    ?>
      <p>Nombre: <?php echo $nombre;  ?></p>
    <?php
    }
    ?>

    <?php
    if (isset($apellido) && trim($apellido) != "") {
    ?>

      <p>Apellido: <?php echo $apellido;  ?></p>

    <?php
    } else {
      echo 'No agregaste apellido';
    }
    ?>

    <?php echo "<br> ****************295 validando checkbox *********************<br>"; ?>
    <?php
    if (isset($_POST['notificaciones'])) {
      echo 'existen notificaciones';
    } else {
      echo 'no existen notificaciones';
    }

    ?>

    <?php echo "<br> ****************296 validando checkbox relacionados *********************<br>"; ?>
    <?php
    // validar si hay array
    if (isset($_POST['curso'])) {
      $cursos = $_POST['curso'];
      echo 'tus cursos son: ';
      foreach ($cursos as $curso) {
        echo $curso . ', ';
      }
    }
    ?>

    <?php echo "<br> ****************297 leyendo valores select *********************<br>"; ?>
    <?php

    if (isset($_POST['area'])) {
      $area = $_POST['area'];
      echo 'tu select dice: ' . $area;
    }
    ?>

    <?php echo "<br> ****************298 leyendo radiobutton *********************<br>"; ?>
    <?php


    $tipo_curso  = $_POST['opciones'];
    echo 'tipo de curso elegido: ' . $tipo_curso;


    ?>

    <?php echo "<br> ****************299 leyendo textArea *********************<br>"; ?>
    <?php


    $textArea  = $_POST['mensaje'];
    echo 'mensaje: ' . $textArea;


    ?>



  </div>




</body>

</html>
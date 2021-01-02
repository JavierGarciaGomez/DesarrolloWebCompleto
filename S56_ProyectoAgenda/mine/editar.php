<!-- 436 -->
<?php
// include 'inc/funciones/funciones.php';
// 436
include 'inc/layout/header.php';

// $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

// if (!$id) {
//      die('No es válido');
// }

// $resultado = obtenerContacto($id);
// $contacto = $resultado->fetch_assoc();
?>

<!-- 436 -->
<div class="contenedor-barra">
     <div class="contenedor barra">
          <a href="index.php" class="btn volver">Volver</a>
          <h1>Editar Contacto</h1>
     </div>
</div>

<!-- 436 -->
<div class="bg-amarillo contenedor sombra">
     <form id="contacto" action="#">
          <legend>Edite el Contacto</span> </legend>
          <!-- 
          <?php include 'inc/layout/formulario.php'; ?> -->
     </form>
</div>


<?php include 'inc/layout/footer.php'; ?>
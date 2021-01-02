<?php
// <!-- 430 -->
// 444
include 'inc/funciones/funciones.php';
include 'inc/layout/header.php';
?>

<!-- 430 -->
<div class="contenedor-barra">
     <h1>Agenda de Contactos</h1>
</div>

<!-- 431 -->
<div class="bg-amarillo contenedor sombra">
     <form id="contacto" action="">
          <legend>Añada un contacto <span>Todos los campos son obligatorios</span> </legend>
          <?php
          // include 'inc/funciones/funciones.php';
          include 'inc/layout/formulario.php';
          ?>


     </form>
</div>

<!-- 434 -->
<div class="bg-blanco contenedor sombra contactos">
     <div class="contenedor-contactos">
          <h2>Contactos</h2>
          <!-- 434 -->
          <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contactos...">
          <!-- 434 -->
          <p class="total-contactos"><span></span> Contactos</p>
          <!-- 434 -->
          <div class="contenedor-tabla">
               <!-- 434 -->
               <table id="listado-contactos" class="listado-contactos">
                    <!-- 434 -->
                    <thead>
                         <tr>
                              <th>Nombre</th>
                              <th>Empresa</th>
                              <th>Teléfono</th>
                              <th>Acciones</th>
                         </tr>
                    </thead>
                    <!-- 434 -->

                    <tbody>
                         <?php $contactos = obtenerContactos();

                         if ($contactos->num_rows) {

                              foreach ($contactos as $contacto) { ?>
                                   <tr>

                                        <td><?php echo $contacto['nombre']; ?></td>
                                        <td><?php echo $contacto['empresa']; ?></td>
                                        <td><?php echo $contacto['telefono']; ?></td>
                                        <td>
                                             <a class="btn-editar btn" href="editar.php?id=<?php echo $contacto['id']; ?>">
                                                  <i class="fas fa-pen-square"></i>
                                             </a>
                                             <button data-id="<?php echo $contacto['id']; ?>" type="button" class="btn-borrar btn">
                                                  <i class="fas fa-trash-alt"></i>
                                             </button>
                                        </td>
                                   </tr>
                         <?php }
                         } ?>

                    </tbody>
               </table>
          </div>
     </div>
</div>

<!-- 430 -->
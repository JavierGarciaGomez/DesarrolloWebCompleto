<!-- 338 created -->

<section class="seccion contenedor">
    <h2>Invitados</h2>

    <!-- 334 -->

    <?php
    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `invitados` ";
        $resultado = $conn->query($sql);
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }
    ?>

    <!-- 334 -->
    <ul class="lista-invitados clearfix">
        <?php while ($invitados = $resultado->fetch_assoc()) { ?>

            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']; ?>">
                        <img src="img/invitados/<?php echo $invitados['url_imagen'] ?>" alt="Imagen invitado">
                        <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></p>
                    </a>
                </div> <!-- END .invitado -->
            </li>
            <!-- 335 div oculto para colorbox-->
            <div style="display:none;">
                <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id']; ?>">
                    <h2><?php echo $invitados['nombre_invitado'] ?></h2>
                    <img src="img/invitados/<?php echo $invitados['url_imagen'] ?>" alt="">
                    <p><?php echo $invitados['descripcion'] ?></p>
                </div>

            </div>

        <?php } ?>

    </ul> <!-- END lista-invitados -->

    <?php $conn->close(); ?>

</section>
<!-- 316 -->

<?php include_once 'includes/templates/header.php'; ?>

<!-- 128 -->
<section class="seccion contenedor">
  <h2>La mejor conferencia de diseño web en español</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aperiam ex, maxime, esse odio molestias quia culpa
    molestiae incidunt ad quod alias cupiditate fuga, ratione expedita exercitationem necessitatibus illum eum.</p>
</section>

<section class="programa">
  <div class="contenedor-video">
    <video autoplay loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogv">
    </video>
  </div>
  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa del evento</h2>

        <!-- 340 -->
        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT * FROM `categoria_evento` ";
          $resultado = $conn->query($sql);
        } catch (Exception $e) {
          $error = $e->getMessage();
        }
        ?>

        <nav class="menu-programa">
          <!-- 340 -->
          <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <?php $categoria = $cat['cat_evento']; ?>
            <a href="#<?php echo strtolower($categoria) ?>">
              <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
            </a>

          <?php
          } // while end
          ?>
        </nav>

        <!-- 341 MULTIQUERY -->

        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
          $sql .= "FROM `eventos` ";
          $sql .= "INNER JOIN `categoria_evento` ";
          $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
          $sql .= "INNER JOIN `invitados` ";
          $sql .= "ON eventos.id_inv=invitados.invitado_id ";
          $sql .= "AND eventos.id_cat_evento = 1 ";
          $sql .= "ORDER BY `evento_id` LIMIT 2;";

          $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
          $sql .= "FROM `eventos` ";
          $sql .= "INNER JOIN `categoria_evento` ";
          $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
          $sql .= "INNER JOIN `invitados` ";
          $sql .= "ON eventos.id_inv=invitados.invitado_id ";
          $sql .= "AND eventos.id_cat_evento = 2 ";
          $sql .= "ORDER BY `evento_id` LIMIT 2;";

          $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
          $sql .= "FROM `eventos` ";
          $sql .= "INNER JOIN `categoria_evento` ";
          $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
          $sql .= "INNER JOIN `invitados` ";
          $sql .= "ON eventos.id_inv=invitados.invitado_id ";
          $sql .= "AND eventos.id_cat_evento = 3 ";
          $sql .= "ORDER BY `evento_id` LIMIT 2;";
        } catch (Exception $e) {
          $error = $e->getMessage();
        }

        // MULTI-QUERY
        $conn->multi_query($sql);

        // Do while
        do {
          // Save result in each loop
          $resultado = $conn->store_result();
          // row = event
          $row = $resultado->fetch_all(MYSQLI_ASSOC);
          // var_dump($row);
          // set value for first element
          $i = 0;
          // for each value of evento
          foreach ($row as $evento) :
            // this if prevents from creating another div, because every 2 events there is a new category
            if ($i % 2 == 0) { ?>
              <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
              <?php } ?>
              <div class="detalle-evento">
                <h3><?php echo html_entity_decode($evento['nombre_evento']) ?></h3>
                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $evento['hora_evento']; ?></p>
                <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento']; ?></p>
                <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . " " .  $evento['apellido_invitado']; ?></p>
              </div>
              <?php if ($i % 2 == 1) : ?>
                <a href="calendario.php" class="button">Ver todos</a>
              </div>
              <!--#talleres-->
        <?php endif;
              $i++;
            endforeach;

            // para liberar el resultado en cada iteración
            $resultado->free();

            // while until there are more results
          } while ($conn->more_results() && $conn->next_result()); ?>

      </div>
    </div>
  </div>
</section>

<?php include_once 'includes/templates/invitados.php'; ?>


<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen-evento">
      <li>
        <p class="numero"></p>Invitados
      </li>
      <li>
        <p class="numero"></p>Talleres
      </li>
      <li>
        <p class="numero"></p>Días
      </li>
      <li>
        <p class="numero"></p>Conferencias
      </li>
    </ul>
  </div>
</div>

<!-- 143 -->

<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista-precios">
      <li>
        <div class="tabla-precio">
          <h3>Pase por día</h3>
          <p class="numero">$30</p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los tallers</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Todos los días</h3>
          <p class="numero">$50</p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los tallers</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Pase por dos días</h3>
          <p class="numero">$45</p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los tallers</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>

<div id="mapa" class="mapa"></div>


<!-- 147 -->
<section class="seccion">
  <h2>Testimomiales</h2>
  <div class="testimoniales contenedor">
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid atque animi illo, distinctio nobis natus
          aut</p>
      </blockquote>
      <footer class="footer-testimonial">
        <div class="img-wrapper">
          <img src="img/testimonial.jpg" alt="testimonial">
        </div>
        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>
      </footer>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid atque animi illo, distinctio nobis natus
          aut</p>
      </blockquote>
      <footer class="footer-testimonial">
        <div class="img-wrapper">
          <img src="img/testimonial.jpg" alt="testimonial">
        </div>
        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>
      </footer>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid atque animi illo, distinctio nobis natus
          aut</p>
      </blockquote>
      <footer class="footer-testimonial">
        <div class="img-wrapper">
          <img src="img/testimonial.jpg" alt="testimonial">
        </div>
        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>
      </footer>
    </div>
  </div>
</section>

<!-- 150 -->
<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Regístrate al newsletter:</p>
    <h3>GdlWebCamp</h3>
    <a href="registro.html" class="button transparente">Registro</a>
  </div>
</div>

<!-- 152 -->
<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="elementos-cuenta">
      <li class="elemento">
        <p id="dias" class="numero"></p> días
      </li>
      <li class="elemento">
        <p id="horas" class="numero"></p> horas
      </li>
      <li class="elemento">
        <p id="minutos" class="numero"></p> minutos
      </li>
      <li class="elemento">
        <p id="segundos" class="numero"></p> segundos
      </li>

    </ul>
  </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>
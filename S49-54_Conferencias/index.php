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
        <nav class="menu-programa">
          <a href="#talleres"><i class="fas fa-code" aria-hidden="true"></i> Talleres</a>
          <a href="#conferencias"><i class="fas fa-comment" aria-hidden="true"></i> Conferencias</a>
          <a href="#seminarios"><i class="fas fa-university" aria-hidden="true"></i> Seminarios</a>
        </nav>
        <div id="talleres" class="info-curso ocultar">
          <div class="detalle-evento">
            <h3>HTML5, CSS3, JavaScript</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i> 16:00</p>
            <p><i class="fas fa-calendar" aria-hidden="true"></i> 10 de dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Juan Pablo De la torre Valdez</p>
          </div>
          <div class="detalle-evento">
            <h3>Responsive Web Design</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i> 20:00</p>
            <p><i class="fas fa-calendar" aria-hidden="true"></i> 10 de dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Juan Pablo De la torre Valdez</p>
          </div>
          <a href="" class="button">Ver todos</a>
        </div>
        <div id="conferencias" class="info-curso ocultar">
          <div class="detalle-evento">
            <h3>Cómo ser freelancer?</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i> 10:00</p>
            <p><i class="fas fa-calendar" aria-hidden="true"></i> 10 de dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Gregorio Sánchez</p>
          </div>
          <div class="detalle-evento">
            <h3>Tecnologías del futuro</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i> 17:00</p>
            <p><i class="fas fa-calendar" aria-hidden="true"></i> 10 de dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Susan Sánchez</p>
          </div>
          <a href="" class="button">Ver todos</a>
        </div>
        <div id="seminarios" class="info-curso ocultar">
          <div class="detalle-evento">
            <h3>Diseño UI/UX para móviles</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i> 17:00</p>
            <p><i class="fas fa-calendar" aria-hidden="true"></i> 11 de dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Harold García</p>
          </div>
          <div class="detalle-evento">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="fas fa-clock" aria-hidden="true"></i> 10:00</p>
            <p><i class="fas fa-calendar" aria-hidden="true"></i> 11 de dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Susana Rivera</p>
          </div>
          <a href="" class="button">Ver todos</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="invitados contenedor seccion">
  <h2>Nuestros invitados</h2>
  <ul class="lista-invitados">
    <div class="invitado">
      <img src="img/invitados/invitado1.jpg" alt="invitado">
      <p>Rafael Bautista</p>
    </div>
    <div class="invitado">
      <img src="img/invitados/invitado2.jpg" alt="invitado">
      <p>Shari Herrera</p>
    </div>
    <div class="invitado">
      <img src="img/invitados/invitado3.jpg" alt="invitado">
      <p>Gregorio Sánchez</p>
    </div>
    <div class="invitado">
      <img src="img/invitados/invitado4.jpg" alt="invitado">
      <p>Susana Rivera</p>
    </div>
    <div class="invitado">
      <img src="img/invitados/invitado5.jpg" alt="invitado">
      <p>Harold García</p>
    </div>
    <div class="invitado">
      <img src="img/invitados/invitado6.jpg" alt="invitado">
      <p>Susan Sánchez</p>
    </div>
  </ul>
</section>

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
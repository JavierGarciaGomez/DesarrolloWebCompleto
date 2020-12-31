<!-- 326. File created -->
<?php include_once 'includes/templates/header.php'; ?>


<section class="seccion contenedor">
    <h2>Calendario de eventos</h2>



    <?php
    try {
        require_once('includes/funciones/bd_conexion.php');
        // 326, 328
        $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " ORDER BY evento_id ";
        $resultado = $conn->query($sql);

        // while ($eventos = $resultado->fetch_assoc()) {
        //     var_dump($eventos);
        // }
    } catch (\Exception $e) {
        echo $e->getMessage();
    }

    ?>

    <div class="calendario">
        <?php
        /*
        Hay distintas formas de imprimir:
            -fetch_assoc: entrega los arrays con nombre
                ["evento_id"]=>
                        string(1) "5"
                        ["nombre_evento"]=>
                        string(21) "Responsive Web Design"
                        ["fecha_evento"]=>
                        string(10) "2016-12-09"
            -fetch_array: entrega los arrays con número:
                    array(14) {
                [0]=>
                string(1) "5"
                ["evento_id"]=>
                string(1) "5"
                [1]=>
                string(21) "Responsive Web Design"
                ["nombre_evento"]=>
                string(21) "Responsive Web Design"
                [2]=>
                string(10) "2016-12-09"
                ["fecha_evento"]=>
                string(10) "2016-12-09"
            -fetch_all: imprime todos los resultados, pero númericos
                            array(30) {
                [0]=>
                array(7) {
                    [0]=>
                    string(1) "5"
                    [1]=>
                    string(21) "Responsive Web Design"
            
         */

        //  329
        $calendario = array();
        // 326
        while ($eventos = $resultado->fetch_assoc()) {

            // 329 obitene fecha del evento
            $fecha = $eventos['fecha_evento'];

            // 329
            $evento = array(
                'titulo' => $eventos['nombre_evento'],
                'fecha' => $eventos['fecha_evento'],
                'hora' => $eventos['hora_evento'],
                'categoria' => $eventos['cat_evento'],
                'icono' =>  $eventos['icono'],
                'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
            );
            $calendario[$fecha][] = $evento;
        }
        ?>

        <!-- 330 -->
        <?php
        // calendario es un array multidimensional con fechas y eventos
        // dia sería el elemento agrupador (fecha) de cada array de eventos 
        // lista de eventos sería el array asignado a cada fecha.
        foreach ($calendario as $dia => $lista_eventos) { ?>
            <h3>
                <i class="fa fa-calendar"></i>

                <?php
                // cambiar locale
                setLocale(LC_TIME, 'spanish');
                // imprime la fecha con formato
                echo strftime("%d de %B del %Y", strtotime($dia));
                ?>
            </h3>

            <!-- 331 -->
            <?php foreach ($lista_eventos as $evento) { ?>
                <div class="dia">
                    <p class="titulo"><?php echo $evento['titulo']; ?></p>
                    <p class="hora">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                    </p>
                    <p>
                        <i class="fa <?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                        <?php echo $evento['categoria']; ?></p>
                    <p>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo $evento['invitado']; ?></p>
                    </p>

                </div>

        <?php } // fin foreach eventos 
        } // fin del forecach        
        ?>








    </div>

    <?php $conn->close(); ?>

</section>

<?php include_once 'includes/templates/footer.php'; ?>
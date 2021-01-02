<!-- 346 -->
<?php if (isset($_POST['submit'])) :
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $regalo = $_POST['regalo'];
    $total = $_POST['total_pedido'];
    $fecha = date('Y-m-d H:i:s');
    // 347
    $boletos = $_POST['boletos'];
    $camisas = $_POST['pedido_camisas'];
    $etiquetas = $_POST['pedido_etiquetas'];
    // importar funciones
    include_once 'includes/funciones/funciones.php';
    $pedido = productos_json($boletos, $camisas, $etiquetas);
    // 349 registro de eventos
    $eventos = $_POST['registro'];
    $registro = eventos_json($eventos);
    // 350 Prepared statements
    try {
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
        // sssssis es el tipo de datos, s string i int
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        // 352
        header('Location: validar_registro.php?exitoso=1');
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
endif;
?>
<!-- 345 -->
<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Resumen de registro</h2>

    <!-- 352 -->

    <?php if (isset($_GET['exitoso'])) :
        if ($_GET['exitoso'] == "1") :
            echo "Registro exitoso";
        endif;
    endif; ?>

    <!-- <pre>
    <?php
    // var_dump($nombre);
    // var_dump($apellido);
    // var_dump($email);
    // var_dump($fecha);
    // var_dump($pedido);
    // var_dump($registro);
    // var_dump($regalo);
    // var_dump($total);
    ?>
    </pre> -->

</section>



<?php include_once 'includes/templates/footer.php'; ?>
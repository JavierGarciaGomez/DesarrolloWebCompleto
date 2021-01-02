<!-- 347 -->

<?php

function productos_json(&$boletos, &$camisas = 0, &$etiquetas = 0)
{

    $json = array();

    // array de boletos con nombres correctos
    $dias = array(0 => 'un_dia', 1 => 'pase_completo', 2 => 'pase_2dias');
    // combinamos el array boletos con dias
    $total_boletos = array_combine($dias, $boletos);

    // recorremos los boletos
    foreach ($total_boletos as $key => $boletos) :
        if ((int) $boletos > 0) {
            $json[$key] = (int) $boletos;
        }
    endforeach;

    // 348
    $camisas = (int) $camisas;
    if ($camisas > 0) {
        $json['camisas'] = $camisas;
    }

    $etiquetas = (int) $etiquetas;
    if ($etiquetas > 0) {
        $json['etiquetas'] = $etiquetas;
    }

    $json = json_encode($json);

    return json_encode($json);
}

// 349
function eventos_json(&$eventos)
{
    $eventos_json = array();
    foreach ($eventos as $evento) :
        $eventos_json['eventos'][] = $evento;
    endforeach;

    return json_encode($eventos_json);
}




?>
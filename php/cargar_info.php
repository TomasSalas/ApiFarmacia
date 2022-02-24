<?php
    include("api.php");
    /* Variable enviada por POST */
    $grupo = ($_POST["grupo"]); 
    $nombre = "";
    /* Recorremos el JSON de la API */
    foreach ($datos as $key){
        if($grupo == $key['fk_comuna']) {
            /* Asignamos valores a option de select */
            /* $nombre = $key['local_nombre'] . " Dirección: " .$key['local_direccion'] ; */
            $nombre = $key;
            
        }
    };
    /* Escribimos el resultado para manejarlo en AJAX */
    echo json_encode($nombre);
?>
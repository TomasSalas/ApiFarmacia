<?php
    $homepage = file_get_contents("http://farmanet.minsal.cl/maps/index.php/ws/getLocalesTurnos");
    $datos = json_decode($homepage,true);
?>
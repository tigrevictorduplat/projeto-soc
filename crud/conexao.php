<?php
$con =  mysqli_connect("localhost","root","","","3306");
    if (!$con) {
        echo("Conexão Inválida!" .mysqli_error($con));
    };

    mysqli_select_db($con,"banco-soc");
?>
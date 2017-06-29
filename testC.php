<?php

ini_set('max_execution_time', 300); //300 seconds = 5 minutes

// Funcion para conectarse a una Base de Datos
function Conectar() {
    $Conexion = mysql_connect("10.22.157.19", "sigejupe", "sigejupe_2016"); #prod
    mysql_select_db("htsj_sigejupe", $Conexion);
    return $Conexion;
}

//  Funcion que cierra una conexion
function Desconectar($Conexion) {
    mysql_close($Conexion);
}


$conexion = Conectar();
#OBTENEMOS FECHA ACTUAL
$fecha = "";
$sql = "SELECT * FROM tbljuzgados";
$result = mysql_query($sql);
/*if (!mysql_error()) {
   if (mysql_num_rows($result) > 0) {
      while ($rowsFecha = mysql_fetch_array($result)) {
       //$fecha = $rowsFecha[""];
      }
   }
}*/

Desconectar($conexion);
?>

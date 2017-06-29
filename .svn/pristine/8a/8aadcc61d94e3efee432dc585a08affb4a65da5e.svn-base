<?php

ini_set('max_execution_time', 300); //300 seconds = 5 minutes

include_once(dirname(__FILE__) . "/../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/AuronixController.Class.php");

class AuronixFacade {

    protected $_proveedor;

    public function __construct() {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    // Funcion para conectarse a una Base de Datos
    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function getAudiencias() {
        $this->_conexion();


        #OBTENEMOS FECHA ACTUAL
        $fecha = "";
        $sql = "SELECT now() as fecha";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $fecha = $row["fecha"];
                }
            }
        }


        $fechayhora = explode(' ', $fecha);  //Separamos la hora de la fecha
        $fecha = $fechayhora[0];                  //Obtenemos la fecha
        $hora = $fechayhora[1];                    //Obtenemos la hora  
        ##################################
//        $fecha = "2015-08-01";
        ##################################

        $fechacomp = explode("-", $fecha);        //Separamos por el guion la fecha
        $dia = $fechacomp[2];                     //Capturamos el dia de la fecha
        $mes = $fechacomp[1];                     // Capturamos el mes de la fecha
        $anio = $fechacomp[0];                  //Capturamos el año de la fecha
//
        #OBTENEMOS TODOS LOS JUZGADOS QUE TENGAN URLAURONIX DIFERENTE DE VACIO
        $arrayJuzgados = "";
        $sql = "SELECT cveJuzgado, desJuzgado, activo, urlAuronix ";
        $sql .= "from tbljuzgados where urlAuronix != '' and activo = 'S' ";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $index = 0;
                while ($rowsJuzgados = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $arrayJuzgados[$index]["cveJuzgado"] = utf8_encode($rowsJuzgados["cveJuzgado"]);
                    $arrayJuzgados[$index]["desJuzgado"] = utf8_encode($rowsJuzgados["desJuzgado"]);
                    $arrayJuzgados[$index]["activo"] = utf8_encode($rowsJuzgados["activo"]);
                    $arrayJuzgados[$index]["urlAuronix"] = utf8_encode($rowsJuzgados["urlAuronix"]);
                    $index++;
                }
            }
        }

        if ($arrayJuzgados != "" && count($arrayJuzgados) > 0) {
            $auronixController = new AuronixController();
            $arrayAudienciasReturn = array();
            foreach ($arrayJuzgados as $juzgado) {
                $FechaIniAud = $anio . "-" . $mes . "-" . $dia . " 00:00:00";
                $FechaFinAud = $anio . "-" . $mes . "-" . $dia . " 23:59:59";

                $sql = "select A.idAudiencia ";
                $sql .= "from tblaudiencias A, tbljuzgados J ";
                $sql .= "where J.cveJuzgado = A.cveJuzgadoDesahoga ";
                $sql .= "and A.fechaInicial >= '" . $FechaIniAud . "' ";
                $sql .= "and A.fechaInicial <= '" . $FechaFinAud . "' ";
                $sql .= "and A.cveJuzgadoDesahoga  = '" . $juzgado["cveJuzgado"] . "' ";
                $sql .= "and A.activo  = 'S' ";
                $sql .= "order by A.fechaInicial, A.fechaFinal ";

                $arrayAudiencias = "";

                $this->_proveedor->execute($sql);
                if (mysqli_num_rows($result) >= 0) {
                    $index = 0;
                    while ($rowAudiencias = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                        $arrayAudiencias[$index]["idAudiencia"] = utf8_encode($rowAudiencias["idAudiencia"]);
                        $index++;
                    }

                    if ($arrayAudiencias != "" && count($arrayAudiencias) > 0) {
                        echo "JUZGADO:" . $juzgado["desJuzgado"] . "<br>";
                        echo "TOTAL:" . count($arrayAudiencias) . "<br>";
                        $contadorTotal = 1;
                        foreach ($arrayAudiencias as $audiencia) {
                            echo "<br>";
                            echo $contadorTotal . " de " . count($arrayAudiencias);
                            echo "<br>";
                            $tmpArrayAudiencias = $auronixController->getDetalleAudiencia($audiencia["idAudiencia"], $juzgado["urlAuronix"], $this->_proveedor);
                            if ($tmpArrayAudiencias["idAudiencia"] != "" && $tmpArrayAudiencias["idAuronix"] != "") {
                                $arrayAudienciasReturn[] = $tmpArrayAudiencias;
                                print_r($tmpArrayAudiencias);
                            }
                            $contadorTotal++;
                        }
                    }
                }
            }
        }
        #AQUI VAMOS A ELIMINAR LOS REGISTROS DE AURONIX QUE NO ESTEN EN LA LISTA DE AUDIENCIAS DEL SIGEJUPE
        #OBTENEMOS TODOS LOS JUZGADOS D E AURONIX
        $arrayJuzgados = "";
        $sql = "SELECT JA.cveJuzgadoAuronix, JA.cveJuzgado, JA.cveJuzgadoDepende, JA.descJuzgadoAuronix, J.urlAuronix, JA.activo  ";
        $sql .= "FROM tbljuzgadosauronix as JA, tbljuzgados as J where JA.activo = 'S' and J.activo = 'S' and JA.cveJuzgadoDepende = J.CveJuzgado ";
        $sql .= "group by cveJuzgado";
        $this->_proveedor->execute($sql);

        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $index = 0;
                while ($rowsJuzgados = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $arrayJuzgados[$index]["cveJuzgadoAuronix"] = utf8_encode($rowsJuzgados["cveJuzgadoAuronix"]);
                    $arrayJuzgados[$index]["cveJuzgado"] = utf8_encode($rowsJuzgados["cveJuzgado"]);
                    $arrayJuzgados[$index]["cveJuzgadoDepende"] = utf8_encode($rowsJuzgados["cveJuzgadoDepende"]);
                    $arrayJuzgados[$index]["descJuzgadoAuronix"] = utf8_encode($rowsJuzgados["descJuzgadoAuronix"]);
                    $arrayJuzgados[$index]["urlAuronix"] = utf8_encode($rowsJuzgados["urlAuronix"]);
                    $arrayJuzgados[$index]["activo"] = utf8_encode($rowsJuzgados["activo"]);
                    $index++;
                }
            }
        }

        #BUSCAMOS TODOS LOS JUZGADOS DE CADA JUZGADO DE AURONIX
        foreach ($arrayJuzgados AS $juzgado) {
            $arrayJuzgadoAuronix = "";
            $sql = "SELECT cveJuzgadoDepende FROM tbljuzgadosauronix where cveJuzgado = '" . $juzgado["cveJuzgado"] . "' and activo = 'S'";
            $this->_proveedor->execute($sql);
            if (!$this->_proveedor->error()) {
                if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                    while ($rowsJuzgados = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                        $arrayJuzgadoAuronix .= $rowsJuzgados["cveJuzgadoDepende"] . ",";
                    }
                    $arrayJuzgadoAuronix = substr($arrayJuzgadoAuronix, 0, -1);
                }
            }

            if ($arrayJuzgadoAuronix != "") {
                $sql = "select idAudiencia, idAudienciaAuronix ";
                $sql .= "from tblaudiencias ";
                $sql .= "where fechaInicial >= '" . $FechaIniAud . "' ";
                $sql .= "and fechaInicial <= '" . $FechaFinAud . "' ";
                $sql .= "and cveJuzgadoDesahoga  in(" . $arrayJuzgadoAuronix . ") ";
                $sql .= "and idAudienciaAuronix  != 0 ";
                $sql .= "and activo = 'S' ";

                $this->_proveedor->execute($sql);

                $arrayAudienciasSigejupe = "";
                if (!$this->_proveedor->error()) {
                    if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                        $index = 0;
                        while ($rowsJuzgados = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                            $arrayAudienciasSigejupe[$index]["idAudiencia"] = utf8_encode($rowsJuzgados["idAudiencia"]);
                            $arrayAudienciasSigejupe[$index]["idAudienciaAuronix"] = utf8_encode($rowsJuzgados["idAudienciaAuronix"]);
                            $index++;
                        }
                    }
                }

                $arrayAudienciasAuronix = $auronixController->selectTodasAudienciasFechas($fecha, $juzgado["urlAuronix"], $this->_proveedor);

                echo "<br>";
                echo "AUDIENCIAS SIGEJUPE: <br>";
                print_r($arrayAudienciasSigejupe);
                echo "<br>";
                echo "AUDIENCIAS AURONIX: <br>";
                print_r($arrayAudienciasAuronix);
                echo "<br>";


                echo "SE ELIMINARAN LAS SIGUENTES AUDIENCIAS DE AURONIX:";
                echo "<br>";
                foreach ($arrayAudienciasAuronix["hearings"] as $arrayAudienciaAuronix) {
                    $encontrado = false;
                    foreach ($arrayAudienciasSigejupe as $arrayAudienciaSigejupe) {
                        if ($arrayAudienciaAuronix["id"] == $arrayAudienciaSigejupe["idAudienciaAuronix"]) {
                            $encontrado = true;
                            break;
                        }
                    }
                    if (!$encontrado) {
                        print_r($arrayAudienciaAuronix);
                        echo "<br>";
                        $returnElimina = $auronixController->deleteAudiencia($arrayAudienciaAuronix["id"], $juzgado["urlAuronix"], $this->_proveedor, "0", "automatico");
                        echo "RETURN ELIMINA: <br>";
                        print_r($returnElimina);
                    }
                }
            }
            echo "<br>----------------------------------------------------<br>";
        }
//        Desconectar( $this->_proveedor);
        $this->_proveedor->close();
    }

    public function setAudienciaIndividual($idAudiencia, $urlAuronix) {
        $this->_conexion();
        $auronixController = new AuronixController();
        $respuetsaAuronix = $auronixController->getDetalleAudiencia($idAudiencia, $urlAuronix, $this->_proveedor, "manual");
        $this->_proveedor->close();
        return $respuetsaAuronix;
    }

    public function deleteAudienciaIndividual($idAudienciaAuronix, $urlAuronix, $idAudiencia) {
        $this->_conexion();
        $auronixController = new AuronixController();
        $respuetsaAuronix = $auronixController->deleteAudiencia($idAudienciaAuronix, $urlAuronix, $this->_proveedor, $idAudiencia, "manual");
        $this->_proveedor->close();
        return $respuetsaAuronix;
    }

    public function consultaDetalleAudienciaAuronix($idAudienciaAuronix, $urlAuronix, $idAudiencia) {
        $this->_conexion();
        $auronixController = new AuronixController();
        $respuetsaAuronix = $auronixController->selectDetalleAudiencia($idAudienciaAuronix, $urlAuronix, $this->_proveedor, $idAudiencia, "manual");
        $this->_proveedor->close();
        return $respuetsaAuronix;
    }

}

?>

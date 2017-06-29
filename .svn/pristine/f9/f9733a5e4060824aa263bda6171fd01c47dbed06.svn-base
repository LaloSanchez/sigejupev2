<?php

error_reporting(E_ALL);
error_reporting(-1);
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/calendario/CalendarioDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/calendario/CalendarioDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionapelacateos/ProgramacionapelacateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionapelacateos/ProgramacionapelacateosDTO.Class.php");

class BuscarJuzgadoresApelacionCateo {

    private $proveedor;

    public function __construct() {
        
    }

    public function obtenerSecretario($juzgadosDto, $fechaInicio = "", $fechaFinal = "", $proveedor = null) {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $arraySalas = array();
        $arraySecretarios = array();
        $count = 0;

//        $juzgadosDao = new JuzgadosDAO();
//        $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $this->proveedor);
//        //if ($juzgadosDto <> "") {
//            $juzgadosDto = $juzgadosDto[0];
//            $salasSegundaInstanciaDto = new JuzgadosDTO();
//            //$salasSegundaInstanciaDto->setCveRegion($juzgadosDto->getCveRegion()); // Traemos las salas de la region del juzgado
//            $salasSegundaInstanciaDto->setCveTipojuzgado(5);
//            $salasSegundaInstanciaDto->setActivo("S");
//            $salasSegundaInstanciaDao = new JuzgadosDAO();
//            $salasSegundaInstanciaDto = $salasSegundaInstanciaDao->selectJuzgados($salasSegundaInstanciaDto, "", $this->proveedor);
//
//            if ($salasSegundaInstanciaDto <> "") {
//                for ($index = 0; $index < sizeof($salasSegundaInstanciaDto); $index++) {
//                    $arraySalas[] = array("cveJuzgado" => $salasSegundaInstanciaDto[$index]->getCveJuzgado(), "cveRegion" => $salasSegundaInstanciaDto[$index]->getCveRegion(), "descripcion" => $salasSegundaInstanciaDto[$index]->getDesJuzgado());
//                }
//                /*
//                 * Buscamos los secretarios que estan disponibles o que cue3ntan con una proramacion
//                 */
                $programacionapelacateosDao = new ProgramacionapelacateosDAO();
//                for ($index = 0; $index < sizeof($arraySalas); $index++) {
        $programacionapelacateosDto = new ProgramacionapelacateosDTO();
//                    $programacionapelacateosDto->setCveJuzgado($arraySalas[$index]["cveJuzgado"]);
        $programacionapelacateosDto->setActivo('S');
        $programacionapelacateosDto = $programacionapelacateosDao->selectProgramacionapelacateos($programacionapelacateosDto, " And fechaInicio<=" . (($fechaInicio === "") ? "now()" : "'" . $fechaInicio . "'") . " And fechaFinal>=" . (($fechaFinal === "") ? "now() " : "'" . $fechaFinal . "' ") . "", $this->proveedor); //" And fechaInicio<=now() And fechaFinal>=now()" //

        if ($programacionapelacateosDto <> "") {

            for ($x = 0; $x < sizeof($programacionapelacateosDto); $x++) {
                $arraySecretarios[$count] = array("cveJuzgado" => $programacionapelacateosDto[$x]->getCveJuzgado(), "secretarios" => array(), "asuntos" => 0); //$arraySalas[$index]["cveJuzgado"]
                $arraySecretarios[$count]["secretarios"][] = array("idJuzgador" => $programacionapelacateosDto[$x]->getIdJuzgador());
                $count++;
            }
//                        
        } else {
            //No se encontraron secretarios en la programacion deseada
        }
//                }

        if (sizeof($arraySecretarios) > 0) {//Ordenamos las salas por asuntos radicados
            for ($index = 0; $index < sizeof($arraySecretarios); $index++) {
//                        $this->proveedor = new Proveedor();
                $sql = "Select count(idApelacionCateo) as Total FROM tblapelacioncateos Where cveSala='" . $arraySecretarios[$index]["cveJuzgado"] . "' and date_format(fechaEscritoApelacion,'%Y')=year(NOW())";
                $this->proveedor->execute($sql);
                if (!$this->proveedor->error()) {
                    if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                        $row = $this->proveedor->fetch_array($this->proveedor->stmt, 0);
                        $arraySecretarios[$index]["asuntos"] = $row["Total"];
                    }
                }
            }
            //print_r($arraySecretarios);
            $arraySecretarios = $this->burbuja($arraySecretarios);
            //print_r($arraySecretarios);
            if ($arraySecretarios <> "") {
                if ($proveedor == null) {
                    #$proveedor->close();
                }
                return array("cveSala" => $arraySecretarios[0]["cveJuzgado"], "idSecretario" => $arraySecretarios[0]["secretarios"][0]["idJuzgador"]);
            }
        } else {
            //No se encontraron secretarios para las salas   
            if ($proveedor == null) {
                #$proveedor->close();
            }

            return array("estatus" => "error", "totalCount" => 0, "text" => "No se encontraron secretarios para las salas");
        }
        
        
//            } else {
//                //Nose encontraron salas registradas para este juzgado 
//                //Revizar la region del juzgado
//                if ($proveedor == null) {
//                    #$proveedor->close();
//                }
//                return array("estatus" => "error", "totalCount" => 0, "text" => "No se encontraron salas registradas para el juzgado");
//            }
        //} else {
        //El juzgado no es valido verifique
        //if ($proveedor == null) {
        #$proveedor->close();
        //}
        //return array("estatus" => "error", "totalCount" => 0, "text" => "El juzgado no es valido");
        //}
        
//        return array("cveSala" => 1, "idSecretario" => 1);
    }

    public function burbuja($salas) {
        if (sizeof($salas) > 0) {
            $aux = "";
            for ($x = 0; $x < sizeof($salas); $x ++) {
                for ($y = 0; $y < sizeof($salas) - 1; $y ++) {
                    $total1 = $salas[$y]["asuntos"];
                    $total2 = $salas[$y + 1]["asuntos"];
                    if ($total1 > $total2) {
                        $aux = $salas[$y];
                        $salas[$y] = $salas[$y + 1];
                        $salas[$y + 1] = $aux;
                    }
                }
            }

            return $salas;
        }
        return "";
    }

}

//$juzgadosDto = new JuzgadosDTO();
//$juzgadosDto->setCveJuzgado(850);
//$BuscarJuzgadoresApelacionCateo = new BuscarJuzgadoresApelacionCateo();
//$salas = $BuscarJuzgadoresApelacionCateo->obtenerSecretario($juzgadosDto);
//var_dump($salas);
?>
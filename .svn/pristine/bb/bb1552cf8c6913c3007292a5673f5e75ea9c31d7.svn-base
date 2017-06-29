<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/asignarecursos/AsignarecursosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/asignarecursos/AsignarecursosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadorescarpetas/JuzgadorescarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");

//carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescarpetas/JuzgadorescarpetasDAO.Class.php");

class AsignarecursosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAsignarecursos($AsignarecursosDto) {
        $AsignarecursosDto->setidAsignaRecurso(strtoupper(str_ireplace("'", "", trim($AsignarecursosDto->getidAsignaRecurso()))));
        $AsignarecursosDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($AsignarecursosDto->getidReferencia()))));
        $AsignarecursosDto->setnumDiscos(strtoupper(str_ireplace("'", "", trim($AsignarecursosDto->getnumDiscos()))));
        $AsignarecursosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($AsignarecursosDto->getidJuzgador()))));
        $AsignarecursosDto->setactivo(strtoupper(str_ireplace("'", "", trim($AsignarecursosDto->getactivo()))));
        $AsignarecursosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AsignarecursosDto->getfechaRegistro()))));
        $AsignarecursosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AsignarecursosDto->getfechaActualizacion()))));
        return $AsignarecursosDto;
    }

    public function selectAsignarecursos($AsignarecursosDto, $proveedor = null) {
        $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
        $AsignarecursosDao = new AsignarecursosDAO();
        $AsignarecursosDto = $AsignarecursosDao->selectAsignarecursos($AsignarecursosDto, $proveedor);
        return $AsignarecursosDto;
    }

    public function insertAsignarecursos($AsignarecursosDto, $proveedor = null) {
        $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
        $AsignarecursosDao = new AsignarecursosDAO();
        $AsignarecursosDto = $AsignarecursosDao->insertAsignarecursos($AsignarecursosDto, $proveedor);
        return $AsignarecursosDto;
    }

    public function updateAsignarecursos($AsignarecursosDto,$idjuzgadorcarpeta=null, $proveedor = null) {
        $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
        $AsignarecursosDao = new AsignarecursosDAO();
        $juzgadoresDto ="";
        if($idjuzgadorcarpeta != null){
            $juzgadorescarpetasController = new JuzgadorescarpetasController();
            $juzgadoresDto = new JuzgadorescarpetasDTO();
            $juzgadoresDto->setIdJuzgadorCarpeta($idjuzgadorcarpeta);
            $juzgadoresDto->setActivo("N");
            $juzgadoresDto = $juzgadorescarpetasController->updateJuzgadorescarpetas($juzgadoresDto);
            
        }
        $AsignarecursosDto = $AsignarecursosDao->updateAsignarecursos($AsignarecursosDto, $proveedor);
        if($juzgadoresDto != ""){
            
        $arrayRegresar = array();
        $arrayRegresar["totalCount"]=1;
        $arrayRegresar["text"] = "REGISTRO ACTUALIZADO";
        
        $arrayAsignar = array();
        $arrayAsignar["idAsignaRecurso"]= $AsignarecursosDto[0]->getIdAsignaRecurso();
        $arrayAsignar["idReferencia"]=$AsignarecursosDto[0]->getIdReferencia();
        $arrayAsignar["numDiscos"]=$AsignarecursosDto[0]->getNumDiscos();
        $arrayAsignar["idJuzgador"]=$AsignarecursosDto[0]->getIdJuzgador();
        $arrayAsignar["idJuzgadorCarpeta"]=$juzgadoresDto[0]->getIdJuzgadorCarpeta();
        
        $arrayRegresar["data"] =$arrayAsignar;
        $arrayRegresar = json_encode($arrayRegresar);
        return $arrayRegresar;
        }else{
           return $AsignarecursosDto; 
        }
//}
//return "";
    }

    public function deleteAsignarecursos($AsignarecursosDto, $proveedor = null) {
        $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
        $AsignarecursosDao = new AsignarecursosDAO();
        $AsignarecursosDto = $AsignarecursosDao->deleteAsignarecursos($AsignarecursosDto, $proveedor);
        return $AsignarecursosDto;
    }

    public function consultarTocasAsignar($AsignarecursosDto, $param, $paginacion, $proveedor = null) {
        $SelectDao = new SelectDAO();
        $especifica = true;
        $condicion = "";
        $sqlIntervalo = "";
        $cveJuzgado=$param['cveJuzgado'];
        if ($param['numero'] != "") {
            $condicion .= " and tblcarpetasjudiciales.numero=" . $param['numero'];
            $especifica = false;
        }
        if ($param['anio'] != "") {
            $condicion .= " and tblcarpetasjudiciales.anio=" . $param['anio'];
            $especifica = false;
        }
        if ($especifica) {
            if ($param['fechaInicial'] != "" && $param['fechaFinal'] != "") {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $sqlIntervalo = " AND tblcarpetasjudiciales.fechaRadicacion >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($param["fechaFinal"] != "") {
                    $fechaFinal = explode("/", $param["fechaFinal"]);
                    $sqlIntervalo.=" AND  tblcarpetasjudiciales.fechaRadicacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
        }
        $params["fields"] = " `tblcarpetasjudiciales`.*,
	`tblestatuscarpetas`.`cveEstatusCarpeta`,
	`tblactuaciones`.`sintesis`,
	`tblactuaciones`.`cveTipoActuacion`,
	`tblestatuscarpetas`.`desEstatusCarpeta`  ";
         $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales INNER JOIN tblestatuscarpetas tblestatuscarpetas 
		ON tblcarpetasjudiciales.cveEstatusCarpeta = tblestatuscarpetas. 
		cveEstatusCarpeta LEFT JOIN  tblactuaciones ON (tblactuaciones.idReferencia = tblcarpetasjudiciales.idCarpetaJudicial
        AND (tblactuaciones.cveTipoActuacion IN (35 , 32)
        
        AND ((tblactuaciones.activo = 'S')))) ";
         $params["conditions"] = " (tblcarpetasjudiciales.cveTipoCarpeta = 6) AND
	(tblcarpetasjudiciales.activo = 'S') AND
	(tblcarpetasjudiciales.cveJuzgado = " . $cveJuzgado . ") ".$condicion.$sqlIntervalo;
//      $params["groups"] = "";
        $params["orders"] = " tblcarpetasjudiciales.fechaRegistro desc";
         $rs = json_decode($SelectDao->selectDAO($params,null,$paginacion));
         $arrayBandejas = array();
         $arrayBandejasResultados = array();
         $inAnio = "";
         $inNumero = "";
         $juzgadoresController = new JuzgadoresController();
         $juzgadoresDto = new JuzgadoresDTO();
         $juzgadoresDto->setCveTipoJuzgador(7);
         $juzgadoresDto->setActivo("S");
         $juzgadoresDto = $juzgadoresController->consultarJuzgadoresMagistradosPorAdscripcion($juzgadoresDto, $cveJuzgado);
         if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
               foreach ($value as $key2 => $value2) {
                  $arrayBandejas[$key][$key2] = ($value2);
                  if ($key2 == "numero") {
                        $numero = $value2;
                    }
                    if ($key2 == "anio") {
                        $anio = $value2;
                    }
                    if ($key2 == "cveJuzgado") {
                        $cveJuzgado = $value2;
                    }
                    if ($key2 == "idCarpetaJudicial") {
                        $idCarpetaJudicial = $value2;
                    }
               }
               $arrayBandejas[$key]["resolucionesCombatidas"] = $this->getResolucionesCombatidas($value->idCarpetaJudicial);
               $arrayBandejas[$key]["asignarRecurso"] = $this->obtenerAsignacion($idCarpetaJudicial);
               $arrayBandejas[$key]["asignarRec"] = $this->obtenerAsignacionRec($idCarpetaJudicial);
               $arrayBandejas[$key]["fechaAudiencia"] = $this->obtenerPrimerAudiencia($numero, $anio, $cveJuzgado,$idCarpetaJudicial); 
               $arrayBandejas[$key]["resolucion"] = $this->obtenerResolucion($value->idCarpetaJudicial);
               $arrayBandejas[$key]["juzgadores"] = json_decode($juzgadoresDto);
               $arrayBandejas[$key]["idJuzgadorCarpeta"] = $this->obtenerJuzgadorCarpeta($value->idCarpetaJudicial);
            }
            $arrayBandejasResultados["Estatus"] = $rs->Estatus;
            $arrayBandejasResultados["totalCount"] = $rs->totalCount;
            $arrayBandejasResultados["mnj"] = $rs->mnj;
            $arrayBandejasResultados["resultados"] = $arrayBandejas;
            
           
         } 
         echo json_encode($arrayBandejasResultados);
         
    }
    public function obtenerPaginasAsignar($AsignarecursosDto, $param, $paginacion, $proveedor = null) {
        $SelectDao = new SelectDAO();
        $especifica = true;
        $condicion = "";
        $sqlIntervalo = "";
        $cveJuzgado=$param['cveJuzgado'];
        if ($param['numero'] != "") {
            $condicion .= " and tblcarpetasjudiciales.numero=" . $param['numero'];
            $especifica = false;
        }
        if ($param['anio'] != "") {
            $condicion .= " and tblcarpetasjudiciales.anio=" . $param['anio'];
            $especifica = false;
        }
        if ($especifica) {
            if ($param['fechaInicial'] != "" && $param['fechaFinal'] != "") {
                $fechaInicio = explode("/", $param["fechaInicial"]);
                $sqlIntervalo = " AND tblcarpetasjudiciales.fechaRegistro >= '" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
                if ($param["fechaFinal"] != "") {
                    $fechaFinal = explode("/", $param["fechaFinal"]);
                    $sqlIntervalo.=" AND  tblcarpetasjudiciales.fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
                }
            }
        }

        $asignacionRecurso = "";
        $params["fields"] = " `tblcarpetasjudiciales`.*,
	`tblestatuscarpetas`.`cveEstatusCarpeta`,
	`tblactuaciones`.`sintesis`,
	`tblactuaciones`.`cveTipoActuacion`,
	`tblestatuscarpetas`.`desEstatusCarpeta`  ";
         $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales INNER JOIN tblestatuscarpetas tblestatuscarpetas 
		ON tblcarpetasjudiciales.cveEstatusCarpeta = tblestatuscarpetas. 
		cveEstatusCarpeta LEFT JOIN  tblactuaciones ON (tblactuaciones.idReferencia = tblcarpetasjudiciales.idCarpetaJudicial
        AND (tblactuaciones.cveTipoActuacion IN (35 , 32)
        
        AND ((tblactuaciones.activo = 'S')))) ";
         $params["conditions"] = " (tblcarpetasjudiciales.cveTipoCarpeta = 6) AND
	(tblcarpetasjudiciales.activo = 'S') AND
	(tblcarpetasjudiciales.cveJuzgado = " . $cveJuzgado . ") ".$condicion.$sqlIntervalo;
        $asignacionRecurso = $SelectDao->selectDAO($params);
        $asignacionRecursoAux = json_decode($asignacionRecurso);

        $Pages = (int) $asignacionRecursoAux->totalCount / $paginacion["cantxPag"];
        $restoPages = $asignacionRecursoAux->totalCount % $paginacion["cantxPag"];

        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $asignacionRecursoAux->totalCount . '",';

        $json .= '"data":[';
        $x = 1;

        if ($totPages > 0) {
            for ($index = 1; $index <= $totPages; $index++) {

                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x++;
                if ($x <= ($totPages )) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"' . ($index - 1) . '"';
            $json .= "}";
        } else {
            $json .= "]}";
        }
        return $json;
    }

    public function obtenerPrimerAudiencia($numero, $anio, $cveJuzgado,$idCarpetaJudicial) {
        $fechaAudiencia = "";
        $audienciasDao = new AudienciasDAO();
        $audienciasDto = new AudienciasDTO();
        $audienciasDto->setNumero($numero);
        $audienciasDto->setAnio($anio);
        $audienciasDto->setCveJuzgado($cveJuzgado);
        $audienciasDto->setActivo("S");
        $audienciasDto->setCveTipoCarpeta(6);
        $audienciasDto->setIdReferencia($idCarpetaJudicial);
        $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto);
        
        if ($audienciasDto != "") {
            $fechaAudiencia = $audienciasDto[0]->getFechaInicial();
        }
        return $fechaAudiencia;
    }

    public function obtenerAsignacion($idCarpetaJudicial) {
        $AsignarecursosDto = new AsignarecursosDTO();
        $AsignarecursosDao = new AsignarecursosDAO();
        $AsignarecursosDto->setIdReferencia($idCarpetaJudicial);
        $AsignarecursosDto->setActivo("S");       
        $juzgadoresCarpetasController = new JuzgadorescarpetasController();
        $juzgadoresCarpetasDto = new JuzgadorescarpetasDTO();
        $juzgadoresCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $juzgadoresCarpetasDto = $juzgadoresCarpetasController->selectJuzgadorescarpetas($juzgadoresCarpetasDto);
        $AsignarecursosDto = $AsignarecursosDao->selectAsignarecursos($AsignarecursosDto);
        if ($AsignarecursosDto != "") {
            $json = "";
            $json .= '{"idAsignaRecurso":' . $AsignarecursosDto[0]->getIdAsignaRecurso();
            $json .= ',"idReferencia":' . $AsignarecursosDto[0]->getIdReferencia();
            $json .= ',"numDiscos":' . $AsignarecursosDto[0]->getNumDiscos();
            $json .= ',"idJuzgador":' . $juzgadoresCarpetasDto[0]->getIdJuzgador();
            $json .= ',"idJuzgadorCarpeta":' . $juzgadoresCarpetasDto[0]->getIdJuzgadorCarpeta();
            $json .= '}';
            $tmp = '{"Estatus":"ok",';
            $tmp .= '"totalCount":"1",';
            $tmp .= '"mnj":"Consulta exitosa",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $tmp .= "}";
        } else {
            $tmp = "";
        } 
//        var_dump($tmp);
//        var_dump(json_decode($tmp));
        return $tmp;
    }
    public function obtenerAsignacionRec($idCarpetaJudicial) {
            
        $juzgadoresCarpetasController = new JuzgadorescarpetasController();
        $juzgadoresCarpetasDto = new JuzgadorescarpetasDTO();
        $juzgadoresCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $juzgadoresCarpetasDto->setActivo("S");
        $juzgadoresCarpetasDto = $juzgadoresCarpetasController->selectJuzgadorescarpetas($juzgadoresCarpetasDto);
        
        if ($juzgadoresCarpetasDto != "") {
            $json = "";
            $json .= '{"idJuzgador":' . $juzgadoresCarpetasDto[0]->getIdJuzgador();
            $json .= ',"idJuzgadorCarpeta":' . $juzgadoresCarpetasDto[0]->getIdJuzgadorCarpeta();
            $json .= '}';
            $tmp = '{"Estatus":"ok",';
            $tmp .= '"totalCount":"1",';
            $tmp .= '"mnj":"Consulta exitosa",';
            $tmp .= '"resultados":[';
            $tmp .= $json;
            $tmp .= "]";
            $tmp .= "}";
        } else {
            $tmp = "";
        } 
//        var_dump($tmp);
//        var_dump(json_decode($tmp));
        return $tmp;
    }
    public function obtenerResolucion($idCarpetaJudicial) {
        $valor = false;
        $SelectDao = new SelectDAO();
        $params["fields"] = "*";
        $params["tables"] = "tblactuaciones a, tblactuacionesestatus ae";
        $params["conditions"] = " a.idActuacion=ae.idActuacion AND ae.cveEstatus = 46 and a.cveTipoActuacion = 34 and a.idReferencia=" .$idCarpetaJudicial;
        $rs = json_decode($SelectDao->selectDAO($params));
        //error_log(json_encode($rs));
        if($rs->totalCount > 0){
             $valor = true;
        }
        
        return $valor;
    }
    public function obtenerJuzgadorCarpeta($idCarpetaJudicial) {
         $juzgadorescarpetasController = new JuzgadorescarpetasController();
            $juzgadoresDto = new JuzgadorescarpetasDTO();
            $juzgadoresDto->setIdJuzgadorCarpeta($idCarpetaJudicial);
            $juzgadoresDto->setActivo("S");
            $juzgadoresDto = $juzgadorescarpetasController->selectJuzgadorescarpetas($juzgadoresDto);
            
            if($juzgadoresDto != ""){
//                var_dump($juzgadoresDto[0]->getIdCarpetaJudicial());
                return $juzgadoresDto[0]->getIdCarpetaJudicial();
            }else{
                return "";
            }
    }

    public function agregarAsigancionRecurso($AsignarecursosDto) {
        $this->proveedor = new Proveedor('mysql', 'sigejupe');
        $this->proveedor->connect();
        $this->proveedor->execute("BEGIN");
        $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
        $AsignarecursosDao = new AsignarecursosDAO();
        if($AsignarecursosDto->getIdAsignaRecurso() != ""){
         $AsignarecursosDto = $AsignarecursosDao->updateAsignarecursos($AsignarecursosDto, $this->proveedor);   
        }else{
         $AsignarecursosDto = $AsignarecursosDao->insertAsignarecursos($AsignarecursosDto, $this->proveedor);   
        }
        $juzgadorescarpetasDto = "";
        if ($AsignarecursosDto != "") {
            $juzgadorescarpetasDto = new JuzgadorescarpetasDTO();
            $juzgadorescarpetasDao = new JuzgadorescarpetasDAO();
            $juzgadorescarpetasDto->setIdCarpetaJudicial($AsignarecursosDto[0]->getIdReferencia());
            $juzgadorescarpetasDto = $juzgadorescarpetasDao->selectJuzgadorescarpetas($juzgadorescarpetasDto);
            
            if ($juzgadorescarpetasDto != "") {
                $juzgadorescarpetasDto[0]->setIdJuzgador($AsignarecursosDto[0]->getIdJuzgador());
                $juzgadorescarpetasDto[0]->setActivo("S");
                $juzgadorescarpetasDto = $juzgadorescarpetasDao->updateJuzgadorescarpetas($juzgadorescarpetasDto[0], $this->proveedor);
                if($juzgadorescarpetasDto == ""){
                    $msg[] = array("Error al asignar Magistrado");
                }
            } else {
                $juzgadorescarpetasDto = new JuzgadorescarpetasDTO();
                $juzgadorescarpetasDao = new JuzgadorescarpetasDAO();
                $juzgadorescarpetasDto->setIdCarpetaJudicial($AsignarecursosDto[0]->getIdReferencia());
                $juzgadorescarpetasDto->setIdJuzgador($AsignarecursosDto[0]->getIdJuzgador());
                $juzgadorescarpetasDto = $juzgadorescarpetasDao->insertJuzgadorescarpetas($juzgadorescarpetasDto, $this->proveedor);
                if($juzgadorescarpetasDto == ""){
                    $msg[] = array("Error al asignar Magistrado");
                }
            }
        }else{
            $msg[] = array("Error al guardar numero de discos");
        }


        if ($juzgadorescarpetasDto != "") {
            $this->proveedor->execute('COMMIT');
             $json = "";
            $json .= "{'idAsignaRecurso':" . $AsignarecursosDto[0]->getIdAsignaRecurso();
            $json .= ",'idReferencia':" . $AsignarecursosDto[0]->getIdReferencia();
            $json .= ",'numDiscos':" . $AsignarecursosDto[0]->getNumDiscos();
            $json .= ",'idJuzgador':" . $AsignarecursosDto[0]->getIdJuzgador();
            $json .= ",'idJuzgadorCarpeta':" . $juzgadorescarpetasDto[0]->getIdJuzgadorCarpeta();
            $json .= "}";
            $result = '{"Estatus":"ok",';
            $result .= '"totalCount":"1",';
            $result .= '"mnj":"Consulta exitosa",';
            $result .= '"data":[';
            $result .= $json;
            $result .= "]";
            $result .= "}";
            $result = $result;
        } else {
            
            
            $this->proveedor->execute('ROLLBACK');
            $result = array(
                "status" => "Error",
                "msj" => $msg
            );
            $result = json_encode($result);
        }




        return $result;
    }

    public function getResolucionesCombatidas($idCarpetaJudicial) {
      $SelectDao = new SelectDAO();
      $param["fields"] = " desResolucionCombatida ";
      $param["tables"] = " tblactuaciones a inner join tblremisionapelaciones ra on (a.idActuacion = ra.idActuacion) inner join tblcatresolucionescombatidas crc on (crc.cveCatResolucionCombatida = ra.cveCatResolucionCombatida) ";
      $param["conditions"] = " a.idReferencia =  " . $idCarpetaJudicial;
      $rs = $SelectDao->selectDAO($param);
      return json_decode($rs);
   }
   
   function fechaMysql($fecha) {
         list($dia, $mes, $year) = explode("/", $fecha);
         return $year . "-" . $mes . "-" . $dia;
      }
    
}

?>
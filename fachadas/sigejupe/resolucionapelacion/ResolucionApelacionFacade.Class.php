<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once (dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionespermisos/ActuacionespermisosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuacionespermisos/ActuacionespermisosDAO.Class.php");

class ResolucionApelacionFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function selectDAO($params, $proveedor, $paginacion,$bandera = false) {
        $selectDAO = new SelectDAO();
        $EscolaridadesArray = $selectDAO->selectDAO($params, $proveedor, $paginacion,null,$bandera);
        return $EscolaridadesArray;
    }

    public function validarExisteResoluacionApelacion($idReferencia) {
        if ($idReferencia != NULL) {
//         var_dump("idReferencia");
//         var_dump($idReferencia);
            $params["fields"] = " *   ";
            $params["tables"] = " tblactuaciones   ";
            $params["conditions"] = " idReferencia = " . $idReferencia . " and Activo = 'S' and cveTipoActuacion = 34 ";
//   $params["groups"] = "";
//      $params["orders"] = "";
            $rs = json_decode($this->selectDAO($params, null, null));
//         var_dump($rs);
            if ($rs->totalCount > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function consultarPermisosSecrecia($cveUsuarioSesion, $idActuacion) {
            $params["fields"] = " a.secreto ";
            $params["tables"] = " tblactuaciones a ";
            $params["conditions"] = " a.idActuacion = " . $idActuacion . " AND a.activo='S'";
            $secreto = json_decode($this->selectDAO($params, null, null));
        if($secreto->resultados[0]->secreto == "S"){
            $params["fields"] = " ap.cveUsuario ";
            $params["tables"] = " tblactuacionespermisos ap ";
            $params["conditions"] = " ap.idActuacion = " . $idActuacion . " AND ap.cveUsuario = ".$cveUsuarioSesion." AND ap.activo='S'";
            $rs = json_decode($this->selectDAO($params, null, null));
            if($rs->totalCount > 0){
                $respuesta = '{"status": "true","mnj": "Tienes persmisos para acceder a esta carpeta"}';
            }else{
                $respuesta = '{"status": "false","mnj": "No tienes persmisos para acceder a esta carpeta"}';
            }
        }else{
            $respuesta = '{"status": "true","mnj": "Tienes persmisos para acceder a esta carpeta"}';
        }
        return $respuesta;
    }
    public function consultarProyectistasCarpeta($cveJuzgado,$cveTipoCarpeta,$numero, $anio, $idActuacion) {
            // consultar todas las personas usuarios
            $cveAdscripcion =  $_SESSION["cveAdscripcion"];

           // $respuesta = $personalCliente->getPersonalAdscripcion($cveAdscripcion);
           // $respuesta = json_decode($respuesta);
            $ActuacionespermisosDAO = new ActuacionespermisosDAO();
           $usuariosCliente = new UsuarioCliente();
           $usuarios = $usuariosCliente->selectUsuariosGrupoSistema(224,38,$cveAdscripcion);
           $usuarios = json_decode($usuarios);
            // var_dump($usuarios);
            $params["fields"] = " j.cveUsuario ";
            $params["tables"] = "tblcarpetasjudiciales cj INNER JOIN  tbljuzgadorescarpetas jc ON (cj.idCarpetaJudicial=jc.idCarpetaJudicial) inner join tbljuzgadores j on (j.idJuzgador=jc.idJuzgador)  ";
            $params["conditions"] = " cj.numero = ".$numero." and cj.anio = ".$anio." and cj.cveTipoCarpeta = ".$cveTipoCarpeta." and cj.cveJuzgado=".$cveJuzgado." AND  cj.activo='S' and jc.activo = 'S' and j.activo='S' ";
            $rs = json_decode($this->selectDAO($params, null, null));
            if($rs->totalCount > 0){
                $params["fields"] = " ma.* ";
                $params["tables"] = " tblmagistradosproyectistas ma  ";
                $params["conditions"] = " ma.cveUsuarioMagistrado = " . $rs->resultados[0]->cveUsuario . " and ma.activo = 'S' ";
                $resp = json_decode($this->selectDAO($params,null,null));
                if($resp->totalCount > 0){
                    $cveUsuarioMagistrado = $resp->resultados[0]->cveUsuarioMagistrado;
                    // $respuesta = json_encode($resp);
                    foreach ($resp->resultados as $key => $value) {
                        foreach ($value as $key2 => $value2) {
                            $returnArray[$key][$key2] = $value2;
                            if($key2 == "cveUsuarioProyectista"){
                                if($idActuacion != ""){ 
                                    $ActuacionespermisosDTO = new ActuacionespermisosDTO();
                                    $ActuacionespermisosDTO->setIdActuacion($idActuacion);
                                    $ActuacionespermisosDTO->setCveUsuario($value2);
                                    $ActuacionespermisosDTO->setActivo("S");
                                    $ActuacionespermisosDTO = $ActuacionespermisosDAO->selectActuacionespermisos($ActuacionespermisosDTO);
                                    if($ActuacionespermisosDTO != ""){
                                            $returnArray[$key]["idResolucionPermiso"] =  $ActuacionespermisosDTO[0]->getIdResolucionPermiso();
                                    }else{
                                        $returnArray[$key]["idResolucionPermiso"] = "";
                                    }
                                }else{
                                    $returnArray[$key]["idResolucionPermiso"] = "";
                                }
                                foreach ($usuarios->usuarios as $keyUsuario => $valueUsuario) {
                                    if($valueUsuario->CveUsuario == $value2){
                                       $returnArray[$key]["nombreUsuario"] = $valueUsuario->Nombre ." ".$valueUsuario->Materno ." ".$valueUsuario->Paterno ;
                                    }
                                }
                            }
                        }
                    }
                        $returnArrayRS["Estatus"] = $resp->Estatus;
                        $returnArrayRS["totalCount"] = $resp->totalCount;
                        $returnArrayRS["mnj"] = $resp->mnj;
                        $returnArrayRS["resultados"] = $returnArray; 
                        if($idActuacion != ""){
                            $datosMag = $this->obtenerDatosMagistrado($cveUsuarioMagistrado, $idActuacion);
                            if($datosMag != ""){
                                $datos = array("idResolucionPermiso"=>$datosMag[0]->getIdResolucionPermiso(),
                                            "cveUsuario"=>$datosMag[0]->getCveUsuario());
                                $returnArrayRS["magistrado"] = ($datos); 
                            }
                        }else{
                             $datos = array("idResolucionPermiso"=>"",
                                        "cveUsuario"=>$cveUsuarioMagistrado);
                            $returnArrayRS["magistrado"] = $datos; 
                        }

                        $respuesta = json_encode($returnArrayRS);
                    
                }else{
                    $respuesta = json_encode($resp);
                }
            }else{
                $respuesta = '{"status": "error","mnj": "Error al consultar carpeta"}';
            }
        
        return $respuesta;
    }

    public function obtenerDatosMagistrado($cveUsuarioMagistrado, $idActuacion) {
        $ActuacionespermisosDAO = new ActuacionespermisosDAO();
        $ActuacionespermisosDTO = new ActuacionespermisosDTO();
        $ActuacionespermisosDTO->setIdActuacion($idActuacion);
        $ActuacionespermisosDTO->setCveUsuario($cveUsuarioMagistrado);
        $ActuacionespermisosDTO->setActivo("S");
        $ActuacionespermisosDTO = $ActuacionespermisosDAO->selectActuacionespermisos($ActuacionespermisosDTO);
        return $ActuacionespermisosDTO;
    } 
    public function getAdmiteAcuerdoRadicacion($idCarpetaJudicial) {
        $params["fields"] = " tblactuacionesestatusrad.cveTipoEstatusRadicacion    ";
        $params["tables"] = " tblactuaciones tblactuaciones 
		INNER JOIN tblactuacionesestatusrad 
		tblactuacionesestatusrad 
		ON tblactuaciones.idActuacion = tblactuacionesestatusrad. 
		idActuacion INNER JOIN tblactuacionesestatus tblactuacionesestatus ON (tblactuacionesestatus.idActuacion = tblactuaciones.idActuacion) ";
        $params["conditions"] = " (tblactuaciones.cveTipoActuacion = 33) AND (tblactuacionesestatus.cveEstatus = 3) AND
	(tblactuaciones.idReferencia = " . $idCarpetaJudicial . ") AND
	(tblactuaciones.activo = 'S') AND
	(tblactuacionesestatusrad.activo = 'S')  ";
//   $params["groups"] = "";
        $params["orders"] = " tblactuaciones.idActuacion DESC LIMIT 1 ";
        $rs = json_decode($this->selectDAO($params, null, null));
        if ($rs->totalCount > 0) {
            return $rs->resultados;
        } else {
            return 0;
        }
    }
    public function getSentenciaToca($idCarpetaJudicial) {
        $params["fields"] = " tblsentenciastocas.cveTipoSentencia    ";
        $params["tables"] = " tblsentenciastocas tblsentenciastocas ";
        $params["conditions"] = " (tblsentenciastocas.idToca = " . $idCarpetaJudicial . ") AND
	(tblsentenciastocas.activo = 'S') ";
        $rs = json_decode($this->selectDAO($params, null, null));
        if ($rs->totalCount > 0) {
            return $rs->resultados;
        } else {
            return 0;
        }
    }
    public function getJuzgador($idCarpetaJudicial) {
        $params["fields"] = " j.titulo, j.paterno, j.materno, j.nombre     ";
        $params["tables"] = " tbljuzgadorescarpetas jc inner join tbljuzgadores j on (jc.idJuzgador = j.idJuzgador) ";
        $params["conditions"] = " (jc.idCarpetaJudicial = " . $idCarpetaJudicial . ") AND
	(jc.activo = 'S') ";
        $rs = json_decode($this->selectDAO($params, null, null));
        if ($rs->totalCount > 0) {
            return $rs->resultados;
        } else {
            return 0;
        }
    }
     public function getJuzgadorAct($idActuacion) {
        $params["fields"] = " ja.idJuzgador, ja.idActuacion,ja.cveFuncionJuzgador, ja.idJuzgadorActuacion ";
        $params["tables"] = " tbljuzgadoresactuaciones ja inner join tbljuzgadores j on (ja.idJuzgador = j.idJuzgador) ";
        $params["conditions"] = " (ja.idActuacion = " . $idActuacion . ") AND
	(ja.activo = 'S') ";
        $rs = json_decode($this->selectDAO($params, null, null));
        if ($rs->totalCount > 0) {
            return $rs;
        } else {
            return 0;
        }
    }

}

//strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["cveJuzgado"], "utf8") : strtoupper($_POST["cveJuzgado"])))))
@$cveJuzgado = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["cveJuzgado"], "utf8") : strtoupper($_POST["cveJuzgado"])))));
@$cveTipoCarpeta = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["cveTipoCarpeta"], "utf8") : strtoupper($_POST["cveTipoCarpeta"])))));
@$numero = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["numero"], "utf8") : strtoupper($_POST["numero"])))));
@$anio = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["anio"], "utf8") : strtoupper($_POST["anio"])))));
@$idCarpetaJudicial = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["idCarpetaJudicial"], "utf8") : strtoupper($_POST["idCarpetaJudicial"])))));
@$idActuacion = strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($_POST["idActuacion"], "utf8") : strtoupper($_POST["idActuacion"])))));

@$accion = $_POST["accion"];
//var_dump($anio)

$ResolucionApelacionFacade = new ResolucionApelacionFacade();
if($accion == 'consultarMagistrado'){
    $juzgador = $ResolucionApelacionFacade->getJuzgadorAct($idActuacion);
    echo json_encode($juzgador);
    
}else if ($accion == 'consultarApelantesPorCarpera') {
    $params["fields"] = " tblapelantescarpetas.idApelanteCarpeta,
    tblapelantescarpetas.idCarpetaJudicial,
    tblapelantescarpetas.cveTipoPersona,
    tblapelantescarpetas.nombre,
    tblapelantescarpetas.paterno,
    tblapelantescarpetas.materno,
    tblapelantescarpetas.email,
    tblcarpetasjudiciales.cveEstatusCarpeta,
    tblapelantescarpetas.nombreMoral,
    tblapelantescarpetas.domicilio   ";
    $params["tables"] = " tblcarpetasjudiciales tblcarpetasjudiciales 
        INNER JOIN tblapelantescarpetas tblapelantescarpetas 
        ON tblcarpetasjudiciales.idCarpetaJudicial = tblapelantescarpetas. 
        idCarpetaJudicial   ";
    $params["conditions"] = " (tblcarpetasjudiciales.cveJuzgado = " . $cveJuzgado . ") AND
    (tblcarpetasjudiciales.cveTipoCarpeta = " . $cveTipoCarpeta . ") AND
    (tblcarpetasjudiciales.numero = " . $numero . ") AND
    (tblcarpetasjudiciales.anio = '" . $anio . "') AND
    (tblapelantescarpetas.activo = 'S') AND  
  (tblcarpetasjudiciales.cveEstatusCarpeta = 1 || tblcarpetasjudiciales.cveEstatusCarpeta = 2) ";
//   $params["groups"] = "";
    $params["orders"] = " tblapelantescarpetas.nombreMoral ASC,
    tblapelantescarpetas.nombre ASC,
    tblapelantescarpetas.paterno ASC,
    tblapelantescarpetas.materno ASC ";
    $rs = ($ResolucionApelacionFacade->selectDAO($params, null, null));
    $respuestaArray = json_decode($rs);
//   var_dump($rs);
    if ($respuestaArray->totalCount > 0) {
        if (!$ResolucionApelacionFacade->validarExisteResoluacionApelacion($respuestaArray->resultados[0]->idCarpetaJudicial)) {
            $arrayRs = json_decode($rs);
            $returnArray = array();
            $returnArrayRS = array();
//         var_dump($arrayRs);
            if ($arrayRs->totalCount > 0) {
                foreach ($arrayRs->resultados as $key => $value) {
                    foreach ($value as $key2 => $value2) {
                        $returnArray[$key][$key2] = $value2;
                        if ($key2 == "idCarpetaJudicial"){
                            $returnArray[$key]["acuerdo"] = $ResolucionApelacionFacade->getAdmiteAcuerdoRadicacion($value2);
                            $returnArray[$key]["sentenciatoca"] = $ResolucionApelacionFacade->getSentenciaToca($value2);
                            $returnArray[$key]["juzgador"] = $ResolucionApelacionFacade->getJuzgador($value2);
                        }
                    }
                }
                $returnArrayRS["Estatus"] = $arrayRs->Estatus;
                $returnArrayRS["totalCount"] = $arrayRs->totalCount;
                $returnArrayRS["mnj"] = $arrayRs->mnj;
                $returnArrayRS["resultados"] = $returnArray;

                echo json_encode($returnArrayRS);
            } else {
                echo $rs;
            }
        } else {
//      echo $rs;
            $respuestaArray->Estatus = "fail";
            echo json_encode($respuestaArray);
//      $rs->estat
//      echo '{"estatus": "fail","mnj": "YA EXISTE UNA RESOLUCION DE APELACION"} ';
        }
    } else {
        echo '{"Estatus": "fail","mnj": "NO EXISTE LA TOCA"}';
    }
}else if ($accion == 'consultarPermisosSecrecia') {
        @$cveUsuarioSesion = $_POST["cveUsuarioSesion"];
        @$idActuacion = $_POST["idActuacion"];
        // @$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
        $validado = $ResolucionApelacionFacade->consultarPermisosSecrecia($cveUsuarioSesion,$idActuacion);
        echo $validado;
    
}else if ($accion == 'consultarProyectistasCarpeta') {
        @$cveJuzgado = $_POST["cveJuzgado"];
        @$idActuacion = $_POST["idActuacion"];
        @$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
        @$numero = $_POST["numero"];
        @$anio = $_POST["anio"];
        // @$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
        $validado = $ResolucionApelacionFacade->consultarProyectistasCarpeta($cveJuzgado,$cveTipoCarpeta,$numero, $anio, $idActuacion);
        echo $validado;
    
} else if ($accion == 'consultarApelantesParaActuacion') {
    $params["fields"] = " tblapelantescarpetas.idApelanteCarpeta,
	tblapelantescarpetas.idCarpetaJudicial,
	tblapelantescarpetas.cveTipoPersona,
	tblapelantescarpetas.nombre,
	tblapelantescarpetas.paterno,
	tblapelantescarpetas.materno,
	tblapelantescarpetas.email,
	tblapelantescarpetas.nombreMoral,
    tblapelantescarpetas.domicilio   ";
    $params["tables"] = " htsj_sigejupe.tblcarpetasjudiciales tblcarpetasjudiciales 
		INNER JOIN htsj_sigejupe.tblapelantescarpetas tblapelantescarpetas 
		ON tblcarpetasjudiciales.idCarpetaJudicial = tblapelantescarpetas. 
		idCarpetaJudicial   ";
    $params["conditions"] = " (tblcarpetasjudiciales.cveJuzgado = " . $cveJuzgado . ") AND
	(tblcarpetasjudiciales.cveTipoCarpeta = " . $cveTipoCarpeta . ") AND
	(tblcarpetasjudiciales.numero = " . $numero . ") AND
	(tblcarpetasjudiciales.anio = '" . $anio . "') AND
	(tblapelantescarpetas.activo = 'S') ";
//   $params["groups"] = "";
    $params["orders"] = " tblapelantescarpetas.nombreMoral ASC,
	tblapelantescarpetas.nombre ASC,
	tblapelantescarpetas.paterno ASC,
	tblapelantescarpetas.materno ASC ";
    $rs = ($ResolucionApelacionFacade->selectDAO($params, null, null));
    $respuestaArray = json_decode($rs);
//   var_dump($rs);
    if ($respuestaArray->totalCount > 0) {
        if (!$ResolucionApelacionFacade->validarExisteResoluacionApelacion($respuestaArray->resultados[0]->idCarpetaJudicial)) {
            echo $rs;
        } else {
//      echo $rs;
            $respuestaArray->Estatus = "fail";
            echo json_encode($respuestaArray);
//      $rs->estat
//      echo '{"estatus": "fail","mnj": "YA EXISTE UNA RESOLUCION DE APELACION"} ';
        }
    } else {
        echo '{"Estatus": "fail","mnj": "NO EXISTE LA TOCA"}';
    }
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
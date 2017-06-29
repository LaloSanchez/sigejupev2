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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formulacionimputaciones/FormulacionimputacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/formulacionimputaciones/FormulacionimputacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

class FormulacionimputacionesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarFormulacionimputaciones($FormulacionimputacionesDto) {
        $FormulacionimputacionesDto->setidFormulacionImputacion(strtoupper(str_ireplace("'", "", trim($FormulacionimputacionesDto->getidFormulacionImputacion()))));
        $FormulacionimputacionesDto->setidActuacion(strtoupper(str_ireplace("'", "", trim($FormulacionimputacionesDto->getidActuacion()))));
        $FormulacionimputacionesDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim($FormulacionimputacionesDto->getidImpOfeDelCarpeta()))));
        $FormulacionimputacionesDto->setcveTipoFormulacion(strtoupper(str_ireplace("'", "", trim($FormulacionimputacionesDto->getcveTipoFormulacion()))));
        $FormulacionimputacionesDto->setfechaFormulacion(strtoupper(str_ireplace("'", "", trim($FormulacionimputacionesDto->getfechaFormulacion()))));
        $FormulacionimputacionesDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($FormulacionimputacionesDto->getidJuzgador()))));
        return $FormulacionimputacionesDto;
    }

    public function selectFormulacionimputaciones($FormulacionimputacionesDto, $proveedor = null) {
        $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($FormulacionimputacionesDto);
        $FormulacionimputacionesDao = new FormulacionimputacionesDAO();
        $FormulacionimputacionesDto = $FormulacionimputacionesDao->selectFormulacionimputaciones($FormulacionimputacionesDto, $proveedor);
        return $FormulacionimputacionesDto;
    }

    public function insertFormulacionimputaciones($FormulacionimputacionesDto, $proveedor = null) {
        $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($FormulacionimputacionesDto);
        $FormulacionimputacionesDao = new FormulacionimputacionesDAO();
        $FormulacionimputacionesDto = $FormulacionimputacionesDao->insertFormulacionimputaciones($FormulacionimputacionesDto, $proveedor);
        return $FormulacionimputacionesDto;
    }

    public function updateFormulacionimputaciones($FormulacionimputacionesDto, $proveedor = null) {
        $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($FormulacionimputacionesDto);
        $FormulacionimputacionesDao = new FormulacionimputacionesDAO();
//$tmpDto = new FormulacionimputacionesDTO();
//$tmpDto = $FormulacionimputacionesDao->selectFormulacionimputaciones($FormulacionimputacionesDto,$proveedor);
//if($tmpDto!=""){//$FormulacionimputacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $FormulacionimputacionesDto = $FormulacionimputacionesDao->updateFormulacionimputaciones($FormulacionimputacionesDto, $proveedor);
        return $FormulacionimputacionesDto;
//}
//return "";
    }
    
    public function deleteFormulacionimputaciones($FormulacionimputacionesDto, $proveedor = null) {
        $FormulacionimputacionesDto = $this->validarFormulacionimputaciones($FormulacionimputacionesDto);
        $FormulacionimputacionesDao = new FormulacionimputacionesDAO();
        $FormulacionimputacionesDto = $FormulacionimputacionesDao->deleteFormulacionimputaciones($FormulacionimputacionesDto, $proveedor);
        return $FormulacionimputacionesDto;
    }
    
    public function borrarFormulacionimputaciones($FormulacionimputacionesDto) {
        $FormulacionimputacionesDao = new FormulacionimputacionesDAO();
        $FormulacionimputacionesDto->setActivo("N");
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $registroEliminado = $FormulacionimputacionesDao->updateFormulacionimputaciones($FormulacionimputacionesDto, $proveedor);
        $transaccion = true;
        $idFormulacionImputacion = "";
        $mensaje = "ERROR. EL REGISTRO NO SE PUDO ELIMINAR";
        if (($registroEliminado != "") || ($registroEliminado != null)) {
            $mensaje = "REGISTRO ELIMINADO EXITOSAMENTE!";
            $bitacoraController = new BitacoramovimientosController();
            $idFormulacionImputacion = $registroEliminado[0]->getIdFormulacionImputacion();
            $bitacora = $bitacoraController->agregar(273, 'tblformulacionimputaciones', 'dto', $registroEliminado, null, $proveedor);
            if (($bitacora == "") || ($bitacora == null)) {
                $mensaje = "ERROR. NO SE PUDO GUARDAR EN BITACORA ";
                $transaccion = false;
            }
            $ActuacionDao = new ActuacionesDAO();
            $actuacionesDto = new ActuacionesDTO();
            $actuacionesDto->setActivo("N");
            $actuacionesDto->setIdActuacion($registroEliminado[0]->getIdActuacion());
            $respActuacion = $ActuacionDao->updateActuaciones($actuacionesDto, $proveedor);
            if (($respActuacion == "") || ($respActuacion == null)) {
                $transaccion = false;
                $mensaje = "ERROR. NO SE PUDO BORRAR LA ACTUACION-FORMULACION";
            } ELSE {
                $bitacora = $bitacoraController->agregar(30, 'tblactuaciones', 'dto', $respActuacion, null, $proveedor);
                if (($bitacora == "") || ($bitacora == null)) {
                    $mensaje = "ERROR. NO SE PUDO GUARDAR EN BITACORA ";
                    $transaccion = false;
        }
            }
        } else {
            $transaccion = false;
        }
        if (!$transaccion) {
            $proveedor->execute("ROLLBACK");
            $transaccion = 0;
        } else {
            $proveedor->execute('COMMIT');
            $transaccion = 1;
        }
        $json = '{"transaccion":"' . $transaccion . '",';
        $json .= '"mensaje":' . json_encode(utf8_encode($mensaje)) . ",";
        $json .= '"idFormulacionImputacion":"' . $idFormulacionImputacion . '"';
        $json .= "}";
        $proveedor->close();
        return $json;
    }
    
    public function selectFormulacionimputacionesDetalles($FormulacionimputacionesDto, $param, $datos) {
        $sqlIntervalo = "";
        if ($param["fechaDesde"] != "") {
            $fechaInicio = explode("/", $param["fechaDesde"]);
            $fechaFinal = explode("/", $param["fechaHasta"]);
            $sqlIntervalo = " AND fi.fechaFormulacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            $sqlIntervalo.=" AND  fi.fechaFormulacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
        }
        $json = "";
        $campos = " fi.idFormulacionImputacion,
                fi.fechaFormulacion,
                a.idActuacion,
                a.numero,
                a.anio,
                a.idReferencia,
                a.fechaSentencia,
                a.fechaEjecutoria,
                a.sintesis,
                a.observaciones,
                a.fechaRegistro,
                tf.desTipoFormulacion,
                tf.cveTipoFormulacion,
                j.titulo,
                j.nombre as jnombre,
                j.paterno as jpaterno,
                j.materno as jmaterno,
                j.idJuzgador,
                ta.desTipoActuacion,
                ta.cveTipoActuacion,
                juz.desJuzgado,
                juz.cveJuzgado,
                iodc.idImpOfeDelCarpeta,
                ic.nombre as icnombre,
                ic.paterno as icpaterno,
                ic.materno as icmaterno,
                ic.nombreMoral as icnombreMoral,
                ic.cveTipoPersona as iccveTipoPersona,
                iodc.fechaDelito,
                oc.nombre as ocnombre,
                oc.paterno as ocpaterno,
                oc.materno as ocmaterno,
                oc.nombreMoral as ocnombreMoral,
                oc.cveTipoPersona as occveTipoPersona,
                d.desDelito,
                m.desModalidad,
                tc.desTipoCarpeta,
                tc.cveTipoCarpeta,
                c.desComision ";
        $orden = " fi, tblcarpetasjudiciales cj,tbltiposcarpetas tc,tbljuzgados juz,tbltiposactuaciones ta,tbljuzgadores j,tbltiposformulaciones tf, tblactuaciones a,tblimpofedelcarpetas iodc , tblimputadoscarpetas ic, tblofendidoscarpetas oc, tbldelitoscarpetas dc, tbldelitos d, tblmodalidades m, tblcomisiones c";
        $orden .= " WHERE iodc.idImputadoCarpeta = ic.idImputadoCarpeta";
        $orden .= " AND  iodc.idOfendidoCarpeta = oc.idOfendidoCarpeta";
        $orden .= " AND  iodc.idDelitoCarpeta = dc.idDelitoCarpeta";
        $orden .= " AND  dc.cveDelito = d.cveDelito";
        $orden .= " AND  iodc.cveModalidad = m.cveModalidad";
        $orden .= " AND  iodc.cveComision = c.cveComision";
        $orden .= " AND a.cveTipoCarpeta = tc.cveTipoCarpeta";
        $orden .= " AND ta.cveTipoActuacion = a.cveTipoActuacion";
        $orden .= " AND juz.cveJuzgado = a.cveJuzgado";
        $orden .= " AND iodc.idCarpetaJudicial = cj.idCarpetaJudicial";
        if ($FormulacionimputacionesDto->getCveTipoFormulacion() != "") {
            $orden .= " AND tf.cveTipoFormulacion='" . $FormulacionimputacionesDto->getCveTipoFormulacion() . "'";
        }
        if ($datos["cveJuzgado"] != "") {
            $orden .= " AND cj.cveJuzgado='" . $datos["cveJuzgado"] . "'";
        }
        if ($datos["cveTipoCarpeta"] != "") {
            $orden .= " AND cj.cveTipoCarpeta='" . $datos["cveTipoCarpeta"] . "'";
        }
        if ($datos["numero"] != "") {
            $orden .= " AND cj.numero='" . $datos["numero"] . "'";
        }
        if ($datos["anio"] != "") {
            $orden .= " AND cj.anio='" . $datos["anio"] . "'";
        }
        $orden .= " AND cj.activo = 'S'";
        $orden .= " AND iodc.activo  ='S'";
        $orden .= " AND ic.activo  ='S'";
        $orden .= " AND oc.activo  ='S'";
        $orden .= " AND dc.activo  ='S'";
        $orden .= " AND d.activo  ='S'";
        $orden .= " AND m.activo  ='S'";
        $orden .= " AND c.activo  ='S'";
        $orden .= " AND fi.activo  ='S'";
        $orden .= " AND a.activo  ='S'";
        $orden .= " AND tf.activo  ='S'";
        $orden .= " AND j.activo  ='S'";
        $orden .= " AND ta.activo  ='S'";
        $orden .= " AND juz.activo  ='S'";
        $orden .= " AND tc.activo  ='S'";
        $orden .= " AND iodc.idImpOfeDelCarpeta= fi.idImpOfeDelCarpeta";
        $orden .= " AND fi.idActuacion = a.idActuacion";
        $orden .= " AND fi.cveTipoFormulacion = tf.cveTipoFormulacion";
        $orden .= " AND fi.idJuzgador = j.idJuzgador";
        if ($FormulacionimputacionesDto->getIdActuacion() != "") {
            $orden .= " AND fi.idActuacion ='" . $FormulacionimputacionesDto->getIdActuacion() . "'";
        } else {
            if ($sqlIntervalo != "") {
                $orden .= $sqlIntervalo;
            }
        }
        $orden .= " ORDER BY fi.fechaFormulacion DESC";
        $FormulacionimputacionesDtoVacio = new FormulacionimputacionesDTO();
        $FormulacionimputacionesDao = new FormulacionimputacionesDAO(); //($impofedelcarpetasDto, $orden = "", $proveedor = null, $param = null,$fields=null) 
        $FormulacionimputacionesDaoS = $FormulacionimputacionesDao->selectFormulacionimputaciones($FormulacionimputacionesDtoVacio, $orden, null, $param, $campos);
        if ($FormulacionimputacionesDaoS != "") {
            $total = count($FormulacionimputacionesDaoS);
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . $total . '",';
            $json .= '"data":[';
            $x = 1;
            $validacion = new Validacion();
            foreach ($FormulacionimputacionesDaoS as $registrosDto) {
                $json .= "{";
                $json .= '"idFormulacionImputacion":' . json_encode(utf8_encode($registrosDto["idFormulacionImputacion"])) . ",";
                $json .= '"fechaFormulacion":' . json_encode(utf8_encode($validacion->mysqlToNormal($registrosDto["fechaFormulacion"]))) . ",";
                $json .= '"idActuacion":' . json_encode(utf8_encode($registrosDto["idActuacion"])) . ",";
                $json .= '"idReferencia":' . json_encode(utf8_encode($registrosDto["idReferencia"])) . ",";
                $json .= '"numero":' . json_encode(utf8_encode($registrosDto["numero"])) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($registrosDto["anio"])) . ",";
                $json .= '"fechaSentencia":' . json_encode(utf8_encode($validacion->mysqlToNormal($registrosDto["fechaSentencia"]))) . ",";
                $json .= '"fechaEjecutoria":' . json_encode(utf8_encode($validacion->mysqlToNormal($registrosDto["fechaEjecutoria"]))) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($validacion->mysqlToNormal($registrosDto["fechaRegistro"]))) . ",";
                $json .= '"sintesis":' . json_encode(utf8_encode($registrosDto["sintesis"])) . ",";
                $json .= '"observaciones":' . json_encode(utf8_encode($registrosDto["observaciones"])) . ",";
                $json .= '"desTipoFormulacion":' . json_encode(utf8_encode($registrosDto["desTipoFormulacion"])) . ",";
                $json .= '"cveTipoFormulacion":' . json_encode(utf8_encode($registrosDto["cveTipoFormulacion"])) . ",";
                $json .= '"titulo":' . json_encode(utf8_encode($registrosDto["titulo"])) . ",";
                $json .= '"jnombre":' . json_encode(utf8_encode($registrosDto["jnombre"])) . ",";
                $json .= '"jpaterno":' . json_encode(utf8_encode($registrosDto["jpaterno"])) . ",";
                $json .= '"jmaterno":' . json_encode(utf8_encode($registrosDto["jmaterno"])) . ",";
                $json .= '"idJuzgador":' . json_encode(utf8_encode($registrosDto["idJuzgador"])) . ",";
                $json .= '"desTipoActuacion":' . json_encode(utf8_encode($registrosDto["desTipoActuacion"])) . ",";
                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode($registrosDto["cveTipoActuacion"])) . ",";
                $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($registrosDto["desTipoCarpeta"])) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($registrosDto["cveTipoCarpeta"])) . ",";
                $json .= '"desJuzgado":' . json_encode(utf8_encode($registrosDto["desJuzgado"])) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($registrosDto["cveJuzgado"])) . ",";
                $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($registrosDto["idImpOfeDelCarpeta"])) . ",";
                $json .= '"icnombre":' . json_encode(utf8_encode($registrosDto["icnombre"])) . ",";
                $json .= '"icpaterno":' . json_encode(utf8_encode($registrosDto["icpaterno"])) . ",";
                $json .= '"icmaterno":' . json_encode(utf8_encode($registrosDto["icmaterno"])) . ",";
                $json .= '"iccveTipoPersona":' . json_encode(utf8_encode($registrosDto["iccveTipoPersona"])) . ",";
                $json .= '"icnombreMoral":' . json_encode(utf8_encode($registrosDto["icnombreMoral"])) . ",";
                $json .= '"ocnombre":' . json_encode(utf8_encode($registrosDto["ocnombre"])) . ",";
                $json .= '"ocpaterno":' . json_encode(utf8_encode($registrosDto["ocpaterno"])) . ",";
                $json .= '"ocmaterno":' . json_encode(utf8_encode($registrosDto["ocmaterno"])) . ",";
                $json .= '"occveTipoPersona":' . json_encode(utf8_encode($registrosDto["occveTipoPersona"])) . ",";
                $json .= '"ocnombreMoral":' . json_encode(utf8_encode($registrosDto["ocnombreMoral"])) . ",";
                $json .= '"desDelito":' . json_encode(utf8_encode($registrosDto["desDelito"])) . ",";
                $json .= '"desModalidad":' . json_encode(utf8_encode($registrosDto["desModalidad"])) . ",";
                $json .= '"desComision":' . json_encode(utf8_encode($registrosDto["desComision"])) . ",";
                $json .= '"fechaDelito":' . json_encode(utf8_encode($validacion->mysqlToNormal($registrosDto["fechaDelito"])));
                $json .= "}";
                $x++;
                if ($x <= $total) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["paginacion"])) . ",";
            $json .= '"total":"' . $total . '"';
            $json .= "}";
        }
        return $json;
    }

    public function getPaginasFormulacionimputaciones($FormulacionimputacionesDto, $param, $datos) {
        $sqlIntervalo = "";
        if ($param["fechaDesde"] != "") {
            $fechaInicio = explode("/", $param["fechaDesde"]);
            $fechaFinal = explode("/", $param["fechaHasta"]);
            $sqlIntervalo = " AND fi.fechaFormulacion >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            $sqlIntervalo.=" AND  fi.fechaFormulacion <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
        }
        $json = "";
        $campos = " count(fi.idFormulacionImputacion) as totalCount ";
        $orden = " fi, tblcarpetasjudiciales cj,tbltiposcarpetas tc,tbljuzgados juz,tbltiposactuaciones ta,tbljuzgadores j,tbltiposformulaciones tf, tblactuaciones a,tblimpofedelcarpetas iodc , tblimputadoscarpetas ic, tblofendidoscarpetas oc, tbldelitoscarpetas dc, tbldelitos d, tblmodalidades m, tblcomisiones c";
        $orden .= " WHERE iodc.idImputadoCarpeta = ic.idImputadoCarpeta";
        $orden .= " AND  iodc.idOfendidoCarpeta = oc.idOfendidoCarpeta";
        $orden .= " AND  iodc.idDelitoCarpeta = dc.idDelitoCarpeta";
        $orden .= " AND  dc.cveDelito = d.cveDelito";
        $orden .= " AND  iodc.cveModalidad = m.cveModalidad";
        $orden .= " AND  iodc.cveComision = c.cveComision";
        $orden .= " AND a.cveTipoCarpeta = tc.cveTipoCarpeta";
        $orden .= " AND ta.cveTipoActuacion = a.cveTipoActuacion";
        $orden .= " AND juz.cveJuzgado = a.cveJuzgado";
        $orden .= " AND iodc.idCarpetaJudicial = cj.idCarpetaJudicial";
        if ($FormulacionimputacionesDto->getCveTipoFormulacion() != "") {
            $orden .= " AND tf.cveTipoFormulacion='" . $FormulacionimputacionesDto->getCveTipoFormulacion() . "'";
        }
        if ($datos["cveJuzgado"] != "") {
            $orden .= " AND cj.cveJuzgado='" . $datos["cveJuzgado"] . "'";
        }
        if ($datos["cveTipoCarpeta"] != "") {
            $orden .= " AND cj.cveTipoCarpeta='" . $datos["cveTipoCarpeta"] . "'";
        }
        if ($datos["numero"] != "") {
            $orden .= " AND cj.numero='" . $datos["numero"] . "'";
        }
        if ($datos["anio"] != "") {
            $orden .= " AND cj.anio='" . $datos["anio"] . "'";
        }
        $orden .= " AND cj.activo = 'S'";
        $orden .= " AND iodc.activo  ='S'";
        $orden .= " AND ic.activo  ='S'";
        $orden .= " AND oc.activo  ='S'";
        $orden .= " AND dc.activo  ='S'";
        $orden .= " AND d.activo  ='S'";
        $orden .= " AND m.activo  ='S'";
        $orden .= " AND c.activo  ='S'";
        $orden .= " AND fi.activo  ='S'";
        $orden .= " AND a.activo  ='S'";
        $orden .= " AND tf.activo  ='S'";
        $orden .= " AND j.activo  ='S'";
        $orden .= " AND ta.activo  ='S'";
        $orden .= " AND juz.activo  ='S'";
        $orden .= " AND tc.activo  ='S'";
        $orden .= " AND iodc.idImpOfeDelCarpeta= fi.idImpOfeDelCarpeta";
        $orden .= " AND fi.idActuacion = a.idActuacion";
        $orden .= " AND fi.cveTipoFormulacion = tf.cveTipoFormulacion";
        $orden .= " AND fi.idJuzgador = j.idJuzgador";
        if ($sqlIntervalo != "") {
            $orden .= $sqlIntervalo;
        }
        $FormulacionimputacionesDtoVacio = new FormulacionimputacionesDTO();
        $FormulacionimputacionesDao = new FormulacionimputacionesDAO(); //($impofedelcarpetasDto, $orden = "", $proveedor = null, $param = null,$fields=null) 
        $FormulacionimputacionesDaoS = $FormulacionimputacionesDao->selectFormulacionimputaciones($FormulacionimputacionesDtoVacio, $orden, null, $param, $campos);
        if ($FormulacionimputacionesDaoS != "") {
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . $FormulacionimputacionesDaoS[0]["totalCount"] . '",';
            $json .= '"pagina":' . json_encode(utf8_encode($param["paginacion"]));
            $json .= "}";
        }
        return $json;
    }

}

?>

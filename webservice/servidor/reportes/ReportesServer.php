<?php

include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
class ReportesServer {

    public function selectDAO($json = "") {
        $accion = "";
        if ($json != "") {
            $decode_JSON = new Decode_JSON();
            $json = $decode_JSON->decode($json, true);
            if (!is_null($json)) {
                $accion = $json["accion"];
                return $this->acciones($accion, $json);
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON no tiene la estructura correcta")));
            }
        }
    }

    private function acciones($accion, $datos) {
        $resultado=null;
        if ($accion == "Reporte_DuracionPromedioJuicio_WebService") {
            include_once '../../../fachadas/sigejupe/reportes/ReporteduracionpromediojuicioFacade.Class.php';
            $reporteduracionpromediojuicioFacade = new ReporteduracionpromediojuicioFacade();
            $resultado= $reporteduracionpromediojuicioFacade->reporteDuracionPromedioJuicioWebService($datos);
        } else if ($accion == "Indicador_Audiencias_WebService") {
            include_once '../../../fachadas/sigejupe/reportes/ReporteAudienciasFacade.Class.php';
            $reporteAudienciasFacade = new ReporteAudienciasFacade();
            $resultado=$reporteAudienciasFacade->indicadorAudienciasWebService($datos);
        } else if ($accion == "Indicador_AcusadoSinSentencia_WebService") {
            include_once '../../../fachadas/sigejupe/reportes/ReporteacusadosinsentenciaFacade.Class.php';
            $reporteacusadosinsentenciaFacade = new ReporteacusadosinsentenciaFacade();
            $resultado=$reporteacusadosinsentenciaFacade ->reporteAcusadoSinSentenciaWebService($datos);
        }else if ($accion == "ConsultarCargaJueces_Indicador") {
            $accion2 = $accion;
            include '../../../fachadas/sigejupe/reportes/ReporteCargaJuecesFacade.Class.php';
            $ReporteCargaJuecesFacade = new ReporteCargaJuecesFacade();
            $resultado = $ReporteCargaJuecesFacade->reporteCargaWebService($accion2,$datos);
        }else if ($accion == "ConsultarPorcentajeATer_Reporte") {
            $accion2 = $accion;
            include '../../../fachadas/sigejupe/reportes/ReporteCausasFacade.Class.php';
            $ReporteCausasFacade = new ReporteCausasFacade();
            $resultado = $ReporteCausasFacade->reporteWebService($accion2,$datos);
        }else if($accion == "ConsultarPromCausasTerJuezCtrl_Indicador"){
           $accion2 = $accion;
            include '../../../fachadas/sigejupe/reportes/ReporteCargaJuecesFacade.Class.php';
            $ReporteCargaJuecesFacade = new ReporteCargaJuecesFacade();
            $resultado = $ReporteCargaJuecesFacade->reporteCargaWebService($accion2,$datos);
        }else if($accion== "ConsultarDatos_Indicador"){
            $accion2 = $accion;
            include '../../../fachadas/sigejupe/reportes/ReporteDatosIndicadoresFacade.Class.php';
            $ReporteDatosIndicadoresFacade = new ReporteDatosIndicadoresFacade();
            $resultado = $ReporteDatosIndicadoresFacade->reporteDatosWebService($accion2,$datos);
        }else if($accion== "consultar_indicador"){
            include_once '../../../fachadas/sigejupe/reportes/IndicadorseleccionadoFacade.Class.php';
            $indicadorseleccionadoFacade = new IndicadorseleccionadoFacade();
            $resultado=$indicadorseleccionadoFacade->indicadorSeleccionadoWebService($datos);
        }else if($accion== "consultar_indicadores_setec"){
            include_once '../../../fachadas/sigejupe/reportes/IndicadoresSetecFacade.Class.php';
            $indicadoressetecFacade = new IndicadoresSetecFacade();
            $resultado=$indicadoressetecFacade->indicadoresSetecWebService($datos);
        }else{
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "No se encontro la accion")));
        }
        $resultado=  substr($resultado,0,-1);
        return $resultado.',"fechaBaseDatos":"'.$this->getFechaBaseDatos().'"}';;
    }

    public function cargarCombos($json = "") {
        if ($json != "") {
            $decode_JSON = new Decode_JSON();
            $json = $decode_JSON->decode($json, true);
            if (!is_null($json)) {
                $combos = $json["combos"];
                return $this->accionesCombos($combos,$json["fechaBaseDatos"]);
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON no tiene la estructura correcta")));
            }
        }
    }
    
    private function obtenerCombos_idCombos($combos){
        $vecCombos=explode(',', $combos);
        $auxTotal=count($vecCombos);
        $arrayCombos=array();
        for($i=0;$i<$auxTotal;$i++){
            $auxCombos=explode('=', $vecCombos[$i]);
            $arrayCombos["desCombo"][$i]=$auxCombos[0];
            $arrayCombos["idCombo"][$i]="#".$auxCombos[1];
        }
        return $arrayCombos;
    }

    private function accionesCombos($combos,$fechaBaseDatos) {
        $auxCombos = $this->obtenerCombos_idCombos($combos);
        $combos=$auxCombos["desCombo"];
        $array_combos = array();
        $contador = 0;
        $identificadores = $auxCombos["idCombo"];
        $auxTotal = 0;
        $options = "<option value='0'>Seleccione una opci&oacute;n</option>";
        if (in_array("tbltiposjuzgados", $combos)) {
            include_once( "../../../modelos/sigejupe/dto/tiposjuzgados/TiposjuzgadosDTO.Class.php");
            include_once(  "../../../controladores/sigejupe/tiposjuzgados/TiposjuzgadosController.Class.php");
            $TiposjuzgadosController = new TiposjuzgadosController();
            $TiposjuzgadosDto = new TiposjuzgadosDTO();
            $TiposjuzgadosDto->setActivo("S");
            $TiposjuzgadosDtoConsulta = $TiposjuzgadosController->selectTiposjuzgadosOrden($TiposjuzgadosDto, null, "ORDER BY desTipoJuzgado ASC");
            if ($TiposjuzgadosDtoConsulta != "") {
                $auxTotal = count($TiposjuzgadosDtoConsulta);
                for ($i = 0; $i < $auxTotal; $i++) {
                    $options.="<option value='" . $TiposjuzgadosDtoConsulta[$i]->getCveTipoJuzgado() . "'>" . $TiposjuzgadosDtoConsulta[$i]->getDesTipoJuzgado() . "</option>";
                }
            }
            $array_combos[$contador] = $options;
            $options = "<option value='0'>Seleccione una opci&oacute;n</option>";
            $contador++;
        }
        if (in_array("tbltiposcarpetas", $combos)) {
            include_once( "../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
            include_once( "../../../controladores/sigejupe/tiposcarpetas/TiposcarpetasController.Class.php");
            $tiposcarpetasDto = new TiposcarpetasDTO();
            $tiposcarpetasDto->setActivo("S");
            $TiposcarpetasController = new TiposcarpetasController();
            $TiposcarpetasDtoConsulta = $TiposcarpetasController->selectTiposcarpetas($tiposcarpetasDto);
            if ($TiposcarpetasDtoConsulta != "") {
                $auxTotal = count($TiposcarpetasDtoConsulta);
                for ($i = 0; $i < $auxTotal; $i++) {
                    $options.="<option value='" . $TiposcarpetasDtoConsulta[$i]->getCveTipoCarpeta() . "'>" . $TiposcarpetasDtoConsulta[$i]->getDesTipoCarpeta() . "</option>";
                }
            }
            $array_combos[$contador] = $options;
            $options = "<option value='0'>Seleccione una opci&oacute;n</option>";
            $contador++;
        }
        if (in_array("tblregiones", $combos)) {
            include_once( "../../../modelos/sigejupe/dto/regiones/RegionesDTO.Class.php");
            include_once( "../../../controladores/sigejupe/regiones/RegionesController.Class.php");
            $regionesDto = new RegionesDTO();
            $regionesDto->setActivo("S");
            $regionesController = new RegionesController();
            $regionesDtoConsulta = $regionesController->selectRegiones($regionesDto);
            if ($regionesDtoConsulta != "") {
                $auxTotal = count($regionesDtoConsulta);
                for ($i = 0; $i < $auxTotal; $i++) {
                    $options.="<option value='" . $regionesDtoConsulta[$i]->getCveRegion() . "'>" . $regionesDtoConsulta[$i]->getDesRegion() . "</option>";
                }
            }
            $array_combos[$contador] = $options;
            $options = "<option value='0'>Seleccione una opci&oacute;n</option>";
            $contador++;
        }
        if (in_array("tbldistritos", $combos)) {
            include_once( "../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
            include_once( "../../../controladores/sigejupe/distritos/DistritosController.Class.php");
            $distritosDto = new DistritosDTO();
            $distritosDto->setActivo("S");
            $distritosController = new DistritosController();
            $distritosDtoConsulta = $distritosController->selectDistritos($distritosDto);
            if ($distritosDtoConsulta != "") {
                $auxTotal = count($distritosDtoConsulta);
                for ($i = 0; $i < $auxTotal; $i++) {
                    $options.="<option value='" . $distritosDtoConsulta[$i]->getCveDistrito() . "'>" . $distritosDtoConsulta[$i]->getDesDistrito() . "</option>";
                }
            }
            $array_combos[$contador] = $options;
            $options = "<option value='0'>Seleccione una opci&oacute;n</option>";
            $contador++;
        }
        if (in_array("tbljuzgados", $combos)) {
            include_once( "../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
            include_once( "../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDto->setActivo("S");
            $juzgadosController = new JuzgadosController();
            $juzgadosDtoConsulta = $juzgadosController->selectJuzgados($juzgadosDto);
            if ($juzgadosDtoConsulta != "") {
                $auxTotal = count($juzgadosDtoConsulta);
                for ($i = 0; $i < $auxTotal; $i++) {
                    $options.="<option value='" . $juzgadosDtoConsulta[$i]->getCveJuzgado() . "'>" . $juzgadosDtoConsulta[$i]->getDesJuzgado() . "</option>";
                }
            }
            $array_combos[$contador] = $options;
            $options = "<option value='0'>Seleccione una opci&oacute;n</option>";
            $contador++;
        }
        if(($contador==0)&&($fechaBaseDatos=="")){
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("type" => "Error", "mensaje" => "No se encontro ningun combo")));
        }
        if (($contador==0)&&($fechaBaseDatos!="")){
            $json = '{"type":"OK",';
            $json .= '"totalCount":"1",';
            $json .= '"fechaBaseDatos":"'.$this->getFechaBaseDatos().'"';
            $json .= "}";
            return json_encode($json);
        }
        $json = $this->formarJsonCombos($array_combos, $identificadores);
        return utf8_encode($json);
    }
    private function formarJsonCombos($array_combos, $identificadores) {
        $total = count($array_combos);
        $json = '{"type":"OK",';
        $json .= '"totalCount":"' . $total . '",';
        $json .= '"data":[';
        for ($i = 0; $i < $total; $i++) {
            $json.='{"resultado":' .json_encode(utf8_encode($array_combos[$i])) . ",";
            $json.='"idCombo":'.'"'.$identificadores[$i].'"}';
            if ($i < $total - 1) {
                $json.=",";
            }
        }
        $json .='],"fechaBaseDatos":"'.$this->getFechaBaseDatos().'"';
        $json .= "}";
        return json_encode($json);
    }
    
    private function getFechaBaseDatos(){
        $params = array();
        $select = new SelectDAO();
        $params["fields"] = "DATE_FORMAT(now(),'%d/%m/%Y %H:%i') AS fecha";
        $json = $select->selectDAO($params);
        $decode_JSON = new Decode_JSON();
            $json = $decode_JSON->decode($json, true);
        return $json["resultados"][0]->fecha;
    }

}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("ReportesServerScramble.wsdl");
$server->setClass("ReportesServer");
$server->handle();
?>

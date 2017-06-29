<?php

/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 FACADES
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/paises/PaisesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estados/EstadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/municipios/MunicipiosController.Class.php");
class DomiciliosofendidoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto){
        $DomiciliosofendidoscarpetasDto->setidDomicilioOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta())){
            $DomiciliosofendidoscarpetasDto->setidDomicilioOfendidoCarpeta($this->fechaMysql($DomiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta()));
        }
        $DomiciliosofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getidOfendidoCarpeta(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getidOfendidoCarpeta()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getidOfendidoCarpeta())){
            $DomiciliosofendidoscarpetasDto->setidOfendidoCarpeta($this->fechaMysql($DomiciliosofendidoscarpetasDto->getidOfendidoCarpeta()));
        }
        $DomiciliosofendidoscarpetasDto->setDomicilioProcesal(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getDomicilioProcesal(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getDomicilioProcesal()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getDomicilioProcesal())){
            $DomiciliosofendidoscarpetasDto->setDomicilioProcesal($this->fechaMysql($DomiciliosofendidoscarpetasDto->getDomicilioProcesal()));
        }
        $DomiciliosofendidoscarpetasDto->setcvePais(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getcvePais(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getcvePais()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getcvePais())){
            $DomiciliosofendidoscarpetasDto->setcvePais($this->fechaMysql($DomiciliosofendidoscarpetasDto->getcvePais()));
        }
        $DomiciliosofendidoscarpetasDto->setcveEstado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getcveEstado(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getcveEstado()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getcveEstado())){
            $DomiciliosofendidoscarpetasDto->setcveEstado($this->fechaMysql($DomiciliosofendidoscarpetasDto->getcveEstado()));
        }
        $DomiciliosofendidoscarpetasDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getcveMunicipio(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getcveMunicipio()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getcveMunicipio())){
            $DomiciliosofendidoscarpetasDto->setcveMunicipio($this->fechaMysql($DomiciliosofendidoscarpetasDto->getcveMunicipio()));
        }
        $DomiciliosofendidoscarpetasDto->setdireccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getdireccion(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getdireccion()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getdireccion())){
            $DomiciliosofendidoscarpetasDto->setdireccion($this->fechaMysql($DomiciliosofendidoscarpetasDto->getdireccion()));
        }
        $DomiciliosofendidoscarpetasDto->setcolonia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getcolonia(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getcolonia()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getcolonia())){
            $DomiciliosofendidoscarpetasDto->setcolonia($this->fechaMysql($DomiciliosofendidoscarpetasDto->getcolonia()));
        }
        $DomiciliosofendidoscarpetasDto->setnumInterior(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getnumInterior(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getnumInterior()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getnumInterior())){
            $DomiciliosofendidoscarpetasDto->setnumInterior($this->fechaMysql($DomiciliosofendidoscarpetasDto->getnumInterior()));
        }
        $DomiciliosofendidoscarpetasDto->setnumExterior(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getnumExterior(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getnumExterior()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getnumExterior())){
            $DomiciliosofendidoscarpetasDto->setnumExterior($this->fechaMysql($DomiciliosofendidoscarpetasDto->getnumExterior()));
        }
        $DomiciliosofendidoscarpetasDto->setcp(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getcp(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getcp()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getcp())){
            $DomiciliosofendidoscarpetasDto->setcp($this->fechaMysql($DomiciliosofendidoscarpetasDto->getcp()));
        }
        $DomiciliosofendidoscarpetasDto->setlatitud(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getlatitud(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getlatitud()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getlatitud())){
            $DomiciliosofendidoscarpetasDto->setlatitud($this->fechaMysql($DomiciliosofendidoscarpetasDto->getlatitud()));
        }
        $DomiciliosofendidoscarpetasDto->setlongitud(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getlongitud(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getlongitud()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getlongitud())){
            $DomiciliosofendidoscarpetasDto->setlongitud($this->fechaMysql($DomiciliosofendidoscarpetasDto->getlongitud()));
        }
        $DomiciliosofendidoscarpetasDto->setrecidenciaHabitual(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getrecidenciaHabitual(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getrecidenciaHabitual()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getrecidenciaHabitual())){
            $DomiciliosofendidoscarpetasDto->setrecidenciaHabitual($this->fechaMysql($DomiciliosofendidoscarpetasDto->getrecidenciaHabitual()));
        }
        $DomiciliosofendidoscarpetasDto->setestado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getestado(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getestado()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getestado())){
            $DomiciliosofendidoscarpetasDto->setestado($this->fechaMysql($DomiciliosofendidoscarpetasDto->getestado()));
        }
        $DomiciliosofendidoscarpetasDto->setmunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getmunicipio(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getmunicipio()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getmunicipio())){
            $DomiciliosofendidoscarpetasDto->setmunicipio($this->fechaMysql($DomiciliosofendidoscarpetasDto->getmunicipio()));
        }
        $DomiciliosofendidoscarpetasDto->setcveConvivencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getcveConvivencia(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getcveConvivencia()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getcveConvivencia())){
            $DomiciliosofendidoscarpetasDto->setcveConvivencia($this->fechaMysql($DomiciliosofendidoscarpetasDto->getcveConvivencia()));
        }
        $DomiciliosofendidoscarpetasDto->setcveTipoDeVivienda(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosofendidoscarpetasDto->getcveTipoDeVivienda(),"utf8"):strtoupper($DomiciliosofendidoscarpetasDto->getcveTipoDeVivienda()))))));
        if($this->esFecha($DomiciliosofendidoscarpetasDto->getcveTipoDeVivienda())){
            $DomiciliosofendidoscarpetasDto->setcveTipoDeVivienda($this->fechaMysql($DomiciliosofendidoscarpetasDto->getcveTipoDeVivienda()));
        }
        return $DomiciliosofendidoscarpetasDto;
    }
    
    public function selectDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto){
        /*$DomiciliosofendidoscarpetasDto=$this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasController = new DomiciliosofendidoscarpetasController();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasController->selectDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        if($DomiciliosofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DomiciliosofendidoscarpetasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));*/
        $DomiciliosofendidoscarpetasDto=$this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasController = new DomiciliosofendidoscarpetasController();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasController->selectDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $json = "";
        $x = 1;
        $paisesDto = new PaisesDTO ();
        $paisesDao = new PaisesDAO ();
        $estadosDto = new EstadosDTO ();
        $estadosDao = new EstadosDAO ();
        $municipiosDto = new MunicipiosDTO ();
        $municipiosDao = new MunicipiosDAO ();
        if($DomiciliosofendidoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($DomiciliosofendidoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($DomiciliosofendidoscarpetasDto as $DomicilioOfendido) {
                $paisesDto->setCvePais($DomicilioOfendido->getCvePais());
                $rsPais = $paisesDao->selectPaises($paisesDto);
                if ($DomicilioOfendido->getCveEstado() != "" && $DomicilioOfendido->getCveEstado() != null) {
                    $estadosDto->setCveEstado($DomicilioOfendido->getCveEstado());
                    $rsEstados = $estadosDao->selectEstados($estadosDto);
                }
                if ($DomicilioOfendido->getCveMunicipio() != "" && $DomicilioOfendido->getCveMunicipio() != null) {
                    $municipiosDto->setCveMunicipio($DomicilioOfendido->getCveMunicipio());
                    $rsMunicipios = $municipiosDao->selectMunicipios($municipiosDto);
                }
                $json .= "{";
                $json .= '"idDomicilioOfendidoCarpeta":' . json_encode(utf8_encode($DomicilioOfendido->getIdDomicilioOfendidoCarpeta())) . ",";
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($DomicilioOfendido->getIdOfendidoCarpeta())) . ",";
                $json .= '"DomicilioProcesal":' . json_encode(utf8_encode($DomicilioOfendido->getDomicilioProcesal())) . ",";
                $json .= '"cvePais":' . json_encode(utf8_encode($DomicilioOfendido->getCvePais())) . ",";
                if ($rsPais != "") {
                    $json .= '"desPais":' . json_encode(utf8_encode($rsPais[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "N/A",';
                }
                $json .= '"cveEstado":' . json_encode(utf8_encode($DomicilioOfendido->getCveEstado())) . ",";
                if ($DomicilioOfendido->getCveEstado() != "" && $DomicilioOfendido->getCveEstado() != null && $DomicilioOfendido->getCveEstado() != 0) {
                    $json .= '"desEstado":' . json_encode(utf8_encode($rsEstados[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"desEstado":' . json_encode(utf8_encode($DomicilioOfendido->getEstado())) . ",";
                }
                $json .= '"cveMunicipio":' . json_encode(utf8_encode($DomicilioOfendido->getCveMunicipio())) . ",";
                if ($DomicilioOfendido->getCveMunicipio() != "" && $DomicilioOfendido->getCveMunicipio() != null && $DomicilioOfendido->getCveMunicipio() != 0) {
                    $json .= '"desMunicipio":' . json_encode(utf8_encode($rsMunicipios[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"desMunicipio":' . json_encode(utf8_encode($DomicilioOfendido->getMunicipio())) . ",";
                }
                $json .= '"direccion":' . json_encode(utf8_encode($DomicilioOfendido->getDireccion())) . ",";
                $json .= '"colonia":' . json_encode(utf8_encode($DomicilioOfendido->getColonia())) . ",";
                $json .= '"numInterior":' . json_encode(utf8_encode($DomicilioOfendido->getNumInterior())) . ",";
                $json .= '"numExterior":' . json_encode(utf8_encode($DomicilioOfendido->getNumExterior())) . ",";
                $json .= '"cp":' . json_encode(utf8_encode($DomicilioOfendido->getCp())) . ",";
                $json .= '"latitud":' . json_encode(utf8_encode($DomicilioOfendido->getLatitud())) . ",";
                $json .= '"longitud":' . json_encode(utf8_encode($DomicilioOfendido->getLongitud())) . ",";
                $json .= '"recidenciaHabitual":' . json_encode(utf8_encode($DomicilioOfendido->getRecidenciaHabitual())) . ",";
                $json .= '"estado":' . json_encode(utf8_encode($DomicilioOfendido->getEstado())) . ",";
                $json .= '"municipio":' . json_encode(utf8_encode($DomicilioOfendido->getMunicipio())) . ",";
                $json .= '"cveConvivencia":' . json_encode(utf8_encode($DomicilioOfendido->getCveConvivencia())) . ",";
                $json .= '"cveTipoDeVivienda":' . json_encode(utf8_encode($DomicilioOfendido->getCveTipoDeVivienda())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($DomicilioOfendido->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($DomiciliosofendidoscarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }
    
    /*
     * Para actualizar carptas judiciales
     */
    public function agregarDomicilioOfendido($DomiciliosofendidoscarpetasDto)
    {
        $DomiciliosofendidoscarpetasDto = $this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasController = new DomiciliosofendidoscarpetasController();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasController->agregarDomicilioOfendido($DomiciliosofendidoscarpetasDto);

        return json_encode($DomiciliosofendidoscarpetasDto);

    }

    public function modificarDomicilioOfendido($DomiciliosofendidoscarpetasDto)
    {
        $DomiciliosofendidoscarpetasDto = $this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasController = new DomiciliosofendidoscarpetasController();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasController->modificarDomicilioOfendido($DomiciliosofendidoscarpetasDto);

        return json_encode($DomiciliosofendidoscarpetasDto);
    }

    public function eliminarDomicilioOfendido($DomiciliosofendidoscarpetasDto)
    {
        $DomiciliosofendidoscarpetasDto = $this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasController = new DomiciliosofendidoscarpetasController();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasController->eliminarDomicilioOfendido($DomiciliosofendidoscarpetasDto);

        return json_encode($DomiciliosofendidoscarpetasDto);
    }
    
    public function insertDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto){
        $DomiciliosofendidoscarpetasDto=$this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasController = new DomiciliosofendidoscarpetasController();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasController->insertDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        if($DomiciliosofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DomiciliosofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto){
        $DomiciliosofendidoscarpetasDto=$this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasController = new DomiciliosofendidoscarpetasController();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasController->updateDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        if($DomiciliosofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DomiciliosofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto){
        $DomiciliosofendidoscarpetasDto=$this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasController = new DomiciliosofendidoscarpetasController();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasController->deleteDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        if($DomiciliosofendidoscarpetasDto==true){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }
    
    private function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }
    
    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }
    
    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }
}



@$idDomicilioOfendidoCarpeta=$_POST["idDomicilioOfendidoCarpeta"];
@$idOfendidoCarpeta=$_POST["idOfendidoCarpeta"];
@$DomicilioProcesal=$_POST["DomicilioProcesal"];
@$cvePais=$_POST["cvePais"];
@$cveEstado=$_POST["cveEstado"];
@$cveMunicipio=$_POST["cveMunicipio"];
@$direccion=$_POST["direccion"];
@$colonia=$_POST["colonia"];
@$numInterior=$_POST["numInterior"];
@$numExterior=$_POST["numExterior"];
@$cp=$_POST["cp"];
@$latitud=$_POST["latitud"];
@$longitud=$_POST["longitud"];
@$recidenciaHabitual=$_POST["recidenciaHabitual"];
@$estado=$_POST["estado"];
@$municipio=$_POST["municipio"];
@$cveConvivencia=$_POST["cveConvivencia"];
@$cveTipoDeVivienda=$_POST["cveTipoDeVivienda"];
@$accion=$_POST["accion"];
@$activo = $_POST['activo'];
//print_r($_POST);
$domiciliosofendidoscarpetasFacade = new DomiciliosofendidoscarpetasFacade();
$domiciliosofendidoscarpetasDto = new DomiciliosofendidoscarpetasDTO();

$domiciliosofendidoscarpetasDto->setIdDomicilioOfendidoCarpeta($idDomicilioOfendidoCarpeta);
$domiciliosofendidoscarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
$domiciliosofendidoscarpetasDto->setDomicilioProcesal($DomicilioProcesal);
$domiciliosofendidoscarpetasDto->setCvePais($cvePais);
$domiciliosofendidoscarpetasDto->setCveEstado($cveEstado);
$domiciliosofendidoscarpetasDto->setCveMunicipio($cveMunicipio);
$domiciliosofendidoscarpetasDto->setDireccion($direccion);
$domiciliosofendidoscarpetasDto->setColonia($colonia);
$domiciliosofendidoscarpetasDto->setNumInterior($numInterior);
$domiciliosofendidoscarpetasDto->setNumExterior($numExterior);
$domiciliosofendidoscarpetasDto->setCp($cp);
$domiciliosofendidoscarpetasDto->setLatitud($latitud);
$domiciliosofendidoscarpetasDto->setLongitud($longitud);
$domiciliosofendidoscarpetasDto->setRecidenciaHabitual($recidenciaHabitual);
$domiciliosofendidoscarpetasDto->setEstado($estado);
$domiciliosofendidoscarpetasDto->setMunicipio($municipio);
$domiciliosofendidoscarpetasDto->setCveConvivencia($cveConvivencia);
$domiciliosofendidoscarpetasDto->setCveTipoDeVivienda($cveTipoDeVivienda);
$domiciliosofendidoscarpetasDto->setActivo($activo);

if( ($accion=="guardar") && ($idDomicilioOfendidoCarpeta=="") ){
    $domiciliosofendidoscarpetasDto=$domiciliosofendidoscarpetasFacade->insertDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
    echo $domiciliosofendidoscarpetasDto;
} else if(($accion=="guardar") && ($idDomicilioOfendidoCarpeta!="")){
    $domiciliosofendidoscarpetasDto=$domiciliosofendidoscarpetasFacade->updateDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
    echo $domiciliosofendidoscarpetasDto;
} else if($accion=="consultar"){
    $domiciliosofendidoscarpetasDto=$domiciliosofendidoscarpetasFacade->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
    echo $domiciliosofendidoscarpetasDto;
} else if( ($accion=="baja") && ($idDomicilioOfendidoCarpeta!="") ){
    $domiciliosofendidoscarpetasDto=$domiciliosofendidoscarpetasFacade->deleteDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
    echo $domiciliosofendidoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idDomicilioOfendidoCarpeta!="") ){
    $domiciliosofendidoscarpetasDto=$domiciliosofendidoscarpetasFacade->selectDomiciliosofendidoscarpetas($domiciliosofendidoscarpetasDto);
    echo $domiciliosofendidoscarpetasDto;
} else if ($accion == "agregar" && $idDomicilioOfendidoCarpeta == "") {
    $domiciliosofendidoscarpetasDto = $domiciliosofendidoscarpetasFacade->agregarDomicilioOfendido($domiciliosofendidoscarpetasDto);
    echo $domiciliosofendidoscarpetasDto;
} else if ($accion == "agregar" && $idDomicilioOfendidoCarpeta != "") {
    $domiciliosofendidoscarpetasDto = $domiciliosofendidoscarpetasFacade->modificarDomicilioOfendido($domiciliosofendidoscarpetasDto);
    echo $domiciliosofendidoscarpetasDto;
} else if ($accion == "eliminar" && $idDomicilioOfendidoCarpeta != "") {
    $domiciliosofendidoscarpetasDto = $domiciliosofendidoscarpetasFacade->eliminarDomicilioOfendido($domiciliosofendidoscarpetasDto);
    echo $domiciliosofendidoscarpetasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/paises/PaisesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estados/EstadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/municipios/MunicipiosController.Class.php");
class DomiciliosimputadoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto){
        $DomiciliosimputadoscarpetasDto->setidDomicilioImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta())){
            $DomiciliosimputadoscarpetasDto->setidDomicilioImputadoCarpeta($this->fechaMysql($DomiciliosimputadoscarpetasDto->getidDomicilioImputadoCarpeta()));
        }
        $DomiciliosimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getidImputadoCarpeta(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getidImputadoCarpeta()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getidImputadoCarpeta())){
            $DomiciliosimputadoscarpetasDto->setidImputadoCarpeta($this->fechaMysql($DomiciliosimputadoscarpetasDto->getidImputadoCarpeta()));
        }
        $DomiciliosimputadoscarpetasDto->setDomicilioProcesal(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getDomicilioProcesal(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getDomicilioProcesal()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getDomicilioProcesal())){
            $DomiciliosimputadoscarpetasDto->setDomicilioProcesal($this->fechaMysql($DomiciliosimputadoscarpetasDto->getDomicilioProcesal()));
        }
        $DomiciliosimputadoscarpetasDto->setcvePais(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getcvePais(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getcvePais()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getcvePais())){
            $DomiciliosimputadoscarpetasDto->setcvePais($this->fechaMysql($DomiciliosimputadoscarpetasDto->getcvePais()));
        }
        $DomiciliosimputadoscarpetasDto->setcveEstado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getcveEstado(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getcveEstado()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getcveEstado())){
            $DomiciliosimputadoscarpetasDto->setcveEstado($this->fechaMysql($DomiciliosimputadoscarpetasDto->getcveEstado()));
        }
        $DomiciliosimputadoscarpetasDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getcveMunicipio(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getcveMunicipio()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getcveMunicipio())){
            $DomiciliosimputadoscarpetasDto->setcveMunicipio($this->fechaMysql($DomiciliosimputadoscarpetasDto->getcveMunicipio()));
        }
        $DomiciliosimputadoscarpetasDto->setdireccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getdireccion(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getdireccion()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getdireccion())){
            $DomiciliosimputadoscarpetasDto->setdireccion($this->fechaMysql($DomiciliosimputadoscarpetasDto->getdireccion()));
        }
        $DomiciliosimputadoscarpetasDto->setcolonia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getcolonia(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getcolonia()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getcolonia())){
            $DomiciliosimputadoscarpetasDto->setcolonia($this->fechaMysql($DomiciliosimputadoscarpetasDto->getcolonia()));
        }
        $DomiciliosimputadoscarpetasDto->setnumInterior(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getnumInterior(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getnumInterior()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getnumInterior())){
            $DomiciliosimputadoscarpetasDto->setnumInterior($this->fechaMysql($DomiciliosimputadoscarpetasDto->getnumInterior()));
        }
        $DomiciliosimputadoscarpetasDto->setnumExterior(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getnumExterior(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getnumExterior()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getnumExterior())){
            $DomiciliosimputadoscarpetasDto->setnumExterior($this->fechaMysql($DomiciliosimputadoscarpetasDto->getnumExterior()));
        }
        $DomiciliosimputadoscarpetasDto->setcp(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getcp(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getcp()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getcp())){
            $DomiciliosimputadoscarpetasDto->setcp($this->fechaMysql($DomiciliosimputadoscarpetasDto->getcp()));
        }
        $DomiciliosimputadoscarpetasDto->setlatitud(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getlatitud(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getlatitud()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getlatitud())){
            $DomiciliosimputadoscarpetasDto->setlatitud($this->fechaMysql($DomiciliosimputadoscarpetasDto->getlatitud()));
        }
        $DomiciliosimputadoscarpetasDto->setlongitud(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getlongitud(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getlongitud()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getlongitud())){
            $DomiciliosimputadoscarpetasDto->setlongitud($this->fechaMysql($DomiciliosimputadoscarpetasDto->getlongitud()));
        }
        $DomiciliosimputadoscarpetasDto->setrecidenciaHabitual(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getrecidenciaHabitual(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getrecidenciaHabitual()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getrecidenciaHabitual())){
            $DomiciliosimputadoscarpetasDto->setrecidenciaHabitual($this->fechaMysql($DomiciliosimputadoscarpetasDto->getrecidenciaHabitual()));
        }
        $DomiciliosimputadoscarpetasDto->setestado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getestado(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getestado()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getestado())){
            $DomiciliosimputadoscarpetasDto->setestado($this->fechaMysql($DomiciliosimputadoscarpetasDto->getestado()));
        }
        $DomiciliosimputadoscarpetasDto->setmunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getmunicipio(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getmunicipio()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getmunicipio())){
            $DomiciliosimputadoscarpetasDto->setmunicipio($this->fechaMysql($DomiciliosimputadoscarpetasDto->getmunicipio()));
        }
        $DomiciliosimputadoscarpetasDto->setcveConvivencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getcveConvivencia(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getcveConvivencia()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getcveConvivencia())){
            $DomiciliosimputadoscarpetasDto->setcveConvivencia($this->fechaMysql($DomiciliosimputadoscarpetasDto->getcveConvivencia()));
        }
        $DomiciliosimputadoscarpetasDto->setcveTipoDeVivienda(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DomiciliosimputadoscarpetasDto->getcveTipoDeVivienda(),"utf8"):strtoupper($DomiciliosimputadoscarpetasDto->getcveTipoDeVivienda()))))));
        if($this->esFecha($DomiciliosimputadoscarpetasDto->getcveTipoDeVivienda())){
            $DomiciliosimputadoscarpetasDto->setcveTipoDeVivienda($this->fechaMysql($DomiciliosimputadoscarpetasDto->getcveTipoDeVivienda()));
        }
        return $DomiciliosimputadoscarpetasDto;
    }
    public function selectDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto){
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasController->selectDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $json = "";
        $x = 1;
        $paisesDto = new PaisesDTO ();
        $paisesDao = new PaisesDAO ();
        $estadosDto = new EstadosDTO ();
        $estadosDao = new EstadosDAO ();
        $municipiosDto = new MunicipiosDTO ();
        $municipiosDao = new MunicipiosDAO ();
        if($DomiciliosimputadoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($DomiciliosimputadoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($DomiciliosimputadoscarpetasDto as $DomicilioImputado) {
                $paisesDto->setCvePais($DomicilioImputado->getCvePais());
                $rsPais = $paisesDao->selectPaises($paisesDto);
                if ($DomicilioImputado->getCveEstado() != "" && $DomicilioImputado->getCveEstado() != null) {
                    $estadosDto->setCveEstado($DomicilioImputado->getCveEstado());
                    $rsEstados = $estadosDao->selectEstados($estadosDto);
                }
                if ($DomicilioImputado->getCveMunicipio() != "" && $DomicilioImputado->getCveMunicipio() != null) {
                    $municipiosDto->setCveMunicipio($DomicilioImputado->getCveMunicipio());
                    $rsMunicipios = $municipiosDao->selectMunicipios($municipiosDto);
                }
                $json .= "{";
                $json .= '"idDomicilioImputadoCarpeta":' . json_encode(utf8_encode($DomicilioImputado->getIdDomicilioImputadoCarpeta())) . ",";
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($DomicilioImputado->getIdImputadoCarpeta())) . ",";
                $json .= '"DomicilioProcesal":' . json_encode(utf8_encode($DomicilioImputado->getDomicilioProcesal())) . ",";
                $json .= '"cvePais":' . json_encode(utf8_encode($DomicilioImputado->getCvePais())) . ",";
                if ($rsPais != "") {
                    $json .= '"desPais":' . json_encode(utf8_encode($rsPais[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "N/A",';
                }
                $json .= '"cveEstado":' . json_encode(utf8_encode($DomicilioImputado->getCveEstado())) . ",";
                if ($DomicilioImputado->getCveEstado() != "" && $DomicilioImputado->getCveEstado() != null && $DomicilioImputado->getCveEstado() != 0) {
                    $json .= '"desEstado":' . json_encode(utf8_encode($rsEstados[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"desEstado": "0",';
                }
                $json .= '"cveMunicipio":' . json_encode(utf8_encode($DomicilioImputado->getCveMunicipio())) . ",";
                if ($DomicilioImputado->getCveMunicipio() != "" && $DomicilioImputado->getCveMunicipio() != null && $DomicilioImputado->getCveMunicipio() != 0) {
                    $json .= '"desMunicipio":' . json_encode(utf8_encode($rsMunicipios[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"desMunicipio": "0",';
                }
                $json .= '"direccion":' . json_encode(utf8_encode($DomicilioImputado->getDireccion())) . ",";
                $json .= '"colonia":' . json_encode(utf8_encode($DomicilioImputado->getColonia())) . ",";
                $json .= '"numInterior":' . json_encode(utf8_encode($DomicilioImputado->getNumInterior())) . ",";
                $json .= '"numExterior":' . json_encode(utf8_encode($DomicilioImputado->getNumExterior())) . ",";
                $json .= '"cp":' . json_encode(utf8_encode($DomicilioImputado->getCp())) . ",";
                $json .= '"latitud":' . json_encode(utf8_encode($DomicilioImputado->getLatitud())) . ",";
                $json .= '"longitud":' . json_encode(utf8_encode($DomicilioImputado->getLongitud())) . ",";
                $json .= '"recidenciaHabitual":' . json_encode(utf8_encode($DomicilioImputado->getRecidenciaHabitual())) . ",";
                $json .= '"estado":' . json_encode(utf8_encode($DomicilioImputado->getEstado())) . ",";
                $json .= '"municipio":' . json_encode(utf8_encode($DomicilioImputado->getMunicipio())) . ",";
                $json .= '"cveConvivencia":' . json_encode(utf8_encode($DomicilioImputado->getCveConvivencia())) . ",";
                $json .= '"cveTipoDeVivienda":' . json_encode(utf8_encode($DomicilioImputado->getCveTipoDeVivienda())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($DomicilioImputado->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($DomiciliosimputadoscarpetasDto)) {
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
    
    /*-------- GET PAGINAS DOMICILIOS-----------------------------------------------------*/
    public function getPaginasDomicilios($DomiciliosimputadoscarpetasDto,$param)
    {
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasController->getPaginasDomicilios($DomiciliosimputadoscarpetasDto,$param);
        if ($DomiciliosimputadoscarpetasDto != "") {
            //$DomiciliosimputadoscarpetasDto=json_encode($DomiciliosimputadoscarpetasDto);
            return $DomiciliosimputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    /*-------------------------------------------------------------------------------------------------------*/
    
    
    /*----------------- CONSULTA DE IMPUTADOS POR DOMICILIO-----------------------------------------------------*/
    public function consultarImputadosDomicilio($DomiciliosimputadoscarpetasDto,$param)
    {
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasController->consultarImputadosDomicilio($DomiciliosimputadoscarpetasDto,$param);
        if ($DomiciliosimputadoscarpetasDto != "") {
            $DomiciliosimputadoscarpetasDto=json_encode($DomiciliosimputadoscarpetasDto);
            return $DomiciliosimputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    /*-------------------------------------------------------------------------------------------------------*/
    
    /*----------------- CONSULTA DE UN SOLO IMPUTADO POR DOMICILIO-----------------------------------------------------*/
    public function consultarUnImputadoDomicilio($DomiciliosimputadoscarpetasDto,$param)
    {
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasController->consultarUnImputadoDomicilio($DomiciliosimputadoscarpetasDto,$param);
        if ($DomiciliosimputadoscarpetasDto != "") {
            //$DomiciliosimputadoscarpetasDto=json_encode($DomiciliosimputadoscarpetasDto);
            return $DomiciliosimputadoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    /*-------------------------------------------------------------------------------------------------------*/
    
    public function insertDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto){
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasController->insertDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        if($DomiciliosimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DomiciliosimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto){
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasController->updateDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        if($DomiciliosimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DomiciliosimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto){
        $DomiciliosimputadoscarpetasDto=$this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $DomiciliosimputadoscarpetasDto = $DomiciliosimputadoscarpetasController->deleteDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        if($DomiciliosimputadoscarpetasDto==true){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    /*
     * Para actualizar carpetas judiciales
     */
    public function agregarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto){
        $DomiciliosimputadoscarpetasDto = $this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $rs = $DomiciliosimputadoscarpetasController->agregarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        return $rs;
    }
    
    public function modificarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto){
        $DomiciliosimputadoscarpetasDto = $this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $rs = $DomiciliosimputadoscarpetasController->modificarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        return $rs;
    }
    
    public function eliminarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto){
        $DomiciliosimputadoscarpetasDto = $this->validarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        $DomiciliosimputadoscarpetasController = new DomiciliosimputadoscarpetasController();
        $rs = $DomiciliosimputadoscarpetasController->eliminarDomiciliosimputadoscarpetas($DomiciliosimputadoscarpetasDto);
        return $rs;
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



@$idDomicilioImputadoCarpeta=$_POST["idDomicilioImputadoCarpeta"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
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
@$activo=$_POST["activo"];

$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
@$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
@$param["generico"] = $_POST['generico'];

$domiciliosimputadoscarpetasFacade = new DomiciliosimputadoscarpetasFacade();
$domiciliosimputadoscarpetasDto = new DomiciliosimputadoscarpetasDTO();

$domiciliosimputadoscarpetasDto->setIdDomicilioImputadoCarpeta($idDomicilioImputadoCarpeta);
$domiciliosimputadoscarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
$domiciliosimputadoscarpetasDto->setDomicilioProcesal($DomicilioProcesal);
$domiciliosimputadoscarpetasDto->setCvePais($cvePais);
$domiciliosimputadoscarpetasDto->setCveEstado($cveEstado);
$domiciliosimputadoscarpetasDto->setCveMunicipio($cveMunicipio);
$domiciliosimputadoscarpetasDto->setDireccion($direccion);
$domiciliosimputadoscarpetasDto->setColonia($colonia);
$domiciliosimputadoscarpetasDto->setNumInterior($numInterior);
$domiciliosimputadoscarpetasDto->setNumExterior($numExterior);
$domiciliosimputadoscarpetasDto->setCp($cp);
$domiciliosimputadoscarpetasDto->setLatitud($latitud);
$domiciliosimputadoscarpetasDto->setLongitud($longitud);
$domiciliosimputadoscarpetasDto->setRecidenciaHabitual($recidenciaHabitual);
$domiciliosimputadoscarpetasDto->setEstado($estado);
$domiciliosimputadoscarpetasDto->setMunicipio($municipio);
$domiciliosimputadoscarpetasDto->setCveConvivencia($cveConvivencia);
$domiciliosimputadoscarpetasDto->setCveTipoDeVivienda($cveTipoDeVivienda);
$domiciliosimputadoscarpetasDto->setActivo($activo);

if( ($accion=="guardar") && ($idDomicilioImputadoCarpeta=="") ){
    $domiciliosimputadoscarpetasDto=$domiciliosimputadoscarpetasFacade->insertDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
    echo $domiciliosimputadoscarpetasDto;
} else if(($accion=="guardar") && ($idDomicilioImputadoCarpeta!="")){
    $domiciliosimputadoscarpetasDto=$domiciliosimputadoscarpetasFacade->updateDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
    echo $domiciliosimputadoscarpetasDto;
} else if($accion=="consultar"){
    $domiciliosimputadoscarpetasDto=$domiciliosimputadoscarpetasFacade->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
    echo $domiciliosimputadoscarpetasDto;
} else if( ($accion=="baja") && ($idDomicilioImputadoCarpeta!="") ){
    $domiciliosimputadoscarpetasDto=$domiciliosimputadoscarpetasFacade->deleteDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
    echo $domiciliosimputadoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idDomicilioImputadoCarpeta!="") ){
    $domiciliosimputadoscarpetasDto=$domiciliosimputadoscarpetasFacade->selectDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
    echo $domiciliosimputadoscarpetasDto;
} else if( ($accion=="guarda") && ($idDomicilioImputadoCarpeta=="") ){
    $domiciliosimputadoscarpetasDto=$domiciliosimputadoscarpetasFacade->agregarDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
    echo $domiciliosimputadoscarpetasDto;
} else if(($accion=="guarda") && ($idDomicilioImputadoCarpeta!="")){
    $domiciliosimputadoscarpetasDto=$domiciliosimputadoscarpetasFacade->modificarDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
    echo $domiciliosimputadoscarpetasDto;
} else if( ($accion=="elimina") && ($idDomicilioImputadoCarpeta!="") ){
    $domiciliosimputadoscarpetasDto=$domiciliosimputadoscarpetasFacade->eliminarDomiciliosimputadoscarpetas($domiciliosimputadoscarpetasDto);
    echo $domiciliosimputadoscarpetasDto;
}
else if ($accion == "consultarImputadosDomicilio") {
    @$param["paginacion"] = true;
    @$param["cveTipoPersona"] = $_POST['cveTipoPersona'];
    $domiciliosimputadoscarpetasDto = $domiciliosimputadoscarpetasFacade->consultarImputadosDomicilio($domiciliosimputadoscarpetasDto,$param);//$param
    echo $domiciliosimputadoscarpetasDto;
}
else if ($accion == "getPaginasDomicilios") {
    @$param["paginacion"] = true;
    @$param["cveTipoPersona"] = $_POST['cveTipoPersona'];
    $domiciliosimputadoscarpetasDto = $domiciliosimputadoscarpetasFacade->getPaginasDomicilios($domiciliosimputadoscarpetasDto,$param);//$param
    echo $domiciliosimputadoscarpetasDto;
}
else if ($accion == "consultarUnImputadoDomicilio") {
    @$param["paginacion"] = true;
    @$param["idImputadoExhorto"]=$_POST["idImputadoExhorto"];
    @$param["tipo"]=$_POST["tipo"];
    $domiciliosimputadoscarpetasDto = $domiciliosimputadoscarpetasFacade->consultarUnImputadoDomicilio($domiciliosimputadoscarpetasDto,$param);//$param
    echo $domiciliosimputadoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
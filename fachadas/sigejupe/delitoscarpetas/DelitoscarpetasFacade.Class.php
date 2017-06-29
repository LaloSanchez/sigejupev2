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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/delitoscarpetas/DelitoscarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");
class DelitoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarDelitoscarpetas($DelitoscarpetasDto){
        $DelitoscarpetasDto->setidDelitoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscarpetasDto->getidDelitoCarpeta(),"utf8"):strtoupper($DelitoscarpetasDto->getidDelitoCarpeta()))))));
        if($this->esFecha($DelitoscarpetasDto->getidDelitoCarpeta())){
            $DelitoscarpetasDto->setidDelitoCarpeta($this->fechaMysql($DelitoscarpetasDto->getidDelitoCarpeta()));
        }
        $DelitoscarpetasDto->setcveDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscarpetasDto->getcveDelito(),"utf8"):strtoupper($DelitoscarpetasDto->getcveDelito()))))));
        if($this->esFecha($DelitoscarpetasDto->getcveDelito())){
            $DelitoscarpetasDto->setcveDelito($this->fechaMysql($DelitoscarpetasDto->getcveDelito()));
        }
        $DelitoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscarpetasDto->getactivo(),"utf8"):strtoupper($DelitoscarpetasDto->getactivo()))))));
        if($this->esFecha($DelitoscarpetasDto->getactivo())){
            $DelitoscarpetasDto->setactivo($this->fechaMysql($DelitoscarpetasDto->getactivo()));
        }
        $DelitoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($DelitoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($DelitoscarpetasDto->getfechaRegistro())){
            $DelitoscarpetasDto->setfechaRegistro($this->fechaMysql($DelitoscarpetasDto->getfechaRegistro()));
        }
        $DelitoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($DelitoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($DelitoscarpetasDto->getfechaActualizacion())){
            $DelitoscarpetasDto->setfechaActualizacion($this->fechaMysql($DelitoscarpetasDto->getfechaActualizacion()));
        }
        $DelitoscarpetasDto->setidCarpetaJudicial(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscarpetasDto->getidCarpetaJudicial(),"utf8"):strtoupper($DelitoscarpetasDto->getidCarpetaJudicial()))))));
        if($this->esFecha($DelitoscarpetasDto->getidCarpetaJudicial())){
            $DelitoscarpetasDto->setidCarpetaJudicial($this->fechaMysql($DelitoscarpetasDto->getidCarpetaJudicial()));
        }
        return $DelitoscarpetasDto;
    }
    
    public function selectDelitoscarpetas($DelitoscarpetasDto){
        /*$DelitoscarpetasDto=$this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasController = new DelitoscarpetasController();
        $DelitoscarpetasDto = $DelitoscarpetasController->selectDelitoscarpetas($DelitoscarpetasDto);
        if($DelitoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DelitoscarpetasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));*/
        $DelitoscarpetasDto=$this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasController = new DelitoscarpetasController();
        $DelitoscarpetasDto = $DelitoscarpetasController->selectDelitoscarpetas($DelitoscarpetasDto);
        $json = "";
        $x = 1;
        $delitosDto = new DelitosDTO();
        $delitosDao = new DelitosDAO();
        if($DelitoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($DelitoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($DelitoscarpetasDto as $delitos) {
                $delitosDto->setCveDelito($delitos->getCveDelito());
                $rsDelito = $delitosDao->selectDelitos($delitosDto);
                $json .= "{";
                $json .= '"idDelitoCarpeta":' . json_encode(utf8_encode($delitos->getIdDelitoCarpeta())) . ",";
                $json .= '"cveDelito":' . json_encode(utf8_encode($delitos->getCveDelito())) . ",";
                if ($rsDelito != "") {
                    $json .= '"desDelito":' . json_encode(utf8_encode($rsDelito[0]->getDesDelito())) . ",";
                } else {
                    $json .= '"desDelito": "N/A",';
                }
                $json .= '"activo":' . json_encode(utf8_encode($delitos->getActivo())) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($delitos->getIdCarpetaJudicial())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($DelitoscarpetasDto)) {
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
    
    public function updateDelitos($DelitoscarpetasDto){
        $DelitoscarpetasDto=$this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasController = new DelitoscarpetasController();
        $DelitoscarpetasDto = $DelitoscarpetasController->updateDelitos($DelitoscarpetasDto);
        if($DelitoscarpetasDto!=""){
            return $DelitoscarpetasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    /*
     * Eliminar logicamente delitos de la carpeta judicial
     */
    public function bajaDelitosCarpetas($DelitoscarpetasDto){
        $DelitoscarpetasDto=$this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasController = new DelitoscarpetasController();
        $DelitoscarpetasDto = $DelitoscarpetasController->bajaDelitosCarpetas($DelitoscarpetasDto);

        return json_encode($DelitoscarpetasDto);
    }

    public function selectDelitoscarpetastotales($DelitoscarpetasDto){
        $DelitoscarpetasDto=$this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasController = new DelitoscarpetasController();
        $DelitoscarpetasDto = $DelitoscarpetasController->selectDelitoscarpetastotales($DelitoscarpetasDto);
        return $DelitoscarpetasDto;
    }
    
    public function insertDelitoscarpetas($DelitoscarpetasDto){
        $DelitoscarpetasDto=$this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasController = new DelitoscarpetasController();
        $DelitoscarpetasDto = $DelitoscarpetasController->insertDelitoscarpetas($DelitoscarpetasDto);
        if($DelitoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DelitoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateDelitoscarpetas($DelitoscarpetasDto){
        $DelitoscarpetasDto=$this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasController = new DelitoscarpetasController();
        $DelitoscarpetasDto = $DelitoscarpetasController->updateDelitoscarpetas($DelitoscarpetasDto);
        if($DelitoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DelitoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteDelitoscarpetas($DelitoscarpetasDto){
        $DelitoscarpetasDto=$this->validarDelitoscarpetas($DelitoscarpetasDto);
        $DelitoscarpetasController = new DelitoscarpetasController();
        $DelitoscarpetasDto = $DelitoscarpetasController->deleteDelitoscarpetas($DelitoscarpetasDto);
        if($DelitoscarpetasDto==true){
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



@$idDelitoCarpeta=$_POST["idDelitoCarpeta"];
@$cveDelito=$_POST["cveDelito"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$idCarpetaJudicial=$_POST["idCarpetaJudicial"];
@$accion=$_POST["accion"];

$delitoscarpetasFacade = new DelitoscarpetasFacade();
$delitoscarpetasDto = new DelitoscarpetasDTO();

$delitoscarpetasDto->setIdDelitoCarpeta($idDelitoCarpeta);
$delitoscarpetasDto->setCveDelito($cveDelito);
$delitoscarpetasDto->setActivo($activo);
$delitoscarpetasDto->setFechaRegistro($fechaRegistro);
$delitoscarpetasDto->setFechaActualizacion($fechaActualizacion);
$delitoscarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);

if( ($accion=="guardar") && ($idDelitoCarpeta=="") ){
$delitoscarpetasDto=$delitoscarpetasFacade->insertDelitoscarpetas($delitoscarpetasDto);
echo $delitoscarpetasDto;
} else if(($accion=="guardar") && ($idDelitoCarpeta!="")){
$delitoscarpetasDto=$delitoscarpetasFacade->updateDelitoscarpetas($delitoscarpetasDto);
echo $delitoscarpetasDto;
} else if($accion=="consultar"){
$delitoscarpetasDto=$delitoscarpetasFacade->selectDelitoscarpetas($delitoscarpetasDto);
echo $delitoscarpetasDto;
} else if( ($accion=="baja") && ($idDelitoCarpeta!="") ){
$delitoscarpetasDto=$delitoscarpetasFacade->deleteDelitoscarpetas($delitoscarpetasDto);
echo $delitoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idDelitoCarpeta!="") ){
$delitoscarpetasDto=$delitoscarpetasFacade->selectDelitoscarpetas($delitoscarpetasDto);
echo $delitoscarpetasDto;
} else if($accion=="guardaDelitos"){
    $delitoscarpetasDto=$delitoscarpetasFacade->updateDelitos($delitoscarpetasDto);
    echo $delitoscarpetasDto;
} else if( ($accion == "eliminarDelito") && ($idDelitoCarpeta!="") ) {
    $delitoscarpetasDto=$delitoscarpetasFacade->bajaDelitosCarpetas($delitoscarpetasDto);
    echo $delitoscarpetasDto;
} else if($accion=="consultarTotal"){
    $delitoscarpetasDto=$delitoscarpetasFacade->selectDelitoscarpetastotales($delitoscarpetasDto);
    echo $delitoscarpetasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
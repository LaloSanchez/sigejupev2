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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/defensoresimputadoscarpetas/DefensoresimputadoscarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposdefensores/TiposdefensoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposdefensores/TiposdefensoresController.Class.php");
class DefensoresimputadoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto){
        $DefensoresimputadoscarpetasDto->setidDefensorImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->getidDefensorImputadoCarpeta(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->getidDefensorImputadoCarpeta()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->getidDefensorImputadoCarpeta())){
            $DefensoresimputadoscarpetasDto->setidDefensorImputadoCarpeta($this->fechaMysql($DefensoresimputadoscarpetasDto->getidDefensorImputadoCarpeta()));
        }
        $DefensoresimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->getidImputadoCarpeta(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->getidImputadoCarpeta()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->getidImputadoCarpeta())){
            $DefensoresimputadoscarpetasDto->setidImputadoCarpeta($this->fechaMysql($DefensoresimputadoscarpetasDto->getidImputadoCarpeta()));
        }
        $DefensoresimputadoscarpetasDto->setcveTipoDefensor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->getcveTipoDefensor(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->getcveTipoDefensor()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->getcveTipoDefensor())){
            $DefensoresimputadoscarpetasDto->setcveTipoDefensor($this->fechaMysql($DefensoresimputadoscarpetasDto->getcveTipoDefensor()));
        }
        $DefensoresimputadoscarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->getnombre(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->getnombre()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->getnombre())){
            $DefensoresimputadoscarpetasDto->setnombre($this->fechaMysql($DefensoresimputadoscarpetasDto->getnombre()));
        }
        $DefensoresimputadoscarpetasDto->settelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->gettelefono(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->gettelefono()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->gettelefono())){
            $DefensoresimputadoscarpetasDto->settelefono($this->fechaMysql($DefensoresimputadoscarpetasDto->gettelefono()));
        }
        $DefensoresimputadoscarpetasDto->setcelular(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->getcelular(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->getcelular()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->getcelular())){
            $DefensoresimputadoscarpetasDto->setcelular($this->fechaMysql($DefensoresimputadoscarpetasDto->getcelular()));
        }
        $DefensoresimputadoscarpetasDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->getemail(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->getemail()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->getemail())){
            $DefensoresimputadoscarpetasDto->setemail($this->fechaMysql($DefensoresimputadoscarpetasDto->getemail()));
        }
        $DefensoresimputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->getactivo(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->getactivo()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->getactivo())){
            $DefensoresimputadoscarpetasDto->setactivo($this->fechaMysql($DefensoresimputadoscarpetasDto->getactivo()));
        }
        $DefensoresimputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->getfechaRegistro())){
            $DefensoresimputadoscarpetasDto->setfechaRegistro($this->fechaMysql($DefensoresimputadoscarpetasDto->getfechaRegistro()));
        }
        $DefensoresimputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresimputadoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($DefensoresimputadoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($DefensoresimputadoscarpetasDto->getfechaActualizacion())){
            $DefensoresimputadoscarpetasDto->setfechaActualizacion($this->fechaMysql($DefensoresimputadoscarpetasDto->getfechaActualizacion()));
        }
        return $DefensoresimputadoscarpetasDto;
    }
    public function selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto){
        $DefensoresimputadoscarpetasDto=$this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasController->selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $json = "";
        $x = 1;
        $tiposDefensoresDto = new TiposdefensoresDTO();
        $tiposDefensoresDao = new TiposdefensoresDAO();
        if($DefensoresimputadoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($DefensoresimputadoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($DefensoresimputadoscarpetasDto as $DefensorImputados) {
                $tiposDefensoresDto->setCveTipoDefensor($DefensorImputados->getCveTipoDefensor());
                $rsDefensor = $tiposDefensoresDao->selectTiposdefensores($tiposDefensoresDto);
                $json .= "{";
                $json .= '"idDefensorImputadoCarpeta":' . json_encode(utf8_encode($DefensorImputados->getIdDefensorImputadoCarpeta())) . ",";
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($DefensorImputados->getIdImputadoCarpeta())) . ",";
                $json .= '"cveTipoDefensor":' . json_encode(utf8_encode($DefensorImputados->getCveTipoDefensor())) . ",";
                if ($rsDefensor != "") {
                    $json .= '"desDefensor":' . json_encode(utf8_encode($rsDefensor[0]->getDesTipoDefensor())) . ",";
                } else {
                    $json .= '"desDefensor": "",';
                }
                $json .= '"nombre":' . json_encode(utf8_encode($DefensorImputados->getNombre())) . ",";
                $json .= '"telefono":' . json_encode(utf8_encode($DefensorImputados->getTelefono())) . ",";
                $json .= '"celular":' . json_encode(utf8_encode($DefensorImputados->getCelular())) . ",";
                $json .= '"email":' . json_encode(utf8_encode($DefensorImputados->getEmail())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($DefensorImputados->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($DefensoresimputadoscarpetasDto)) {
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
    public function insertDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto){
        $DefensoresimputadoscarpetasDto=$this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasController->insertDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        if($DefensoresimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DefensoresimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    public function updateDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto){
        $DefensoresimputadoscarpetasDto=$this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasController->updateDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        if($DefensoresimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DefensoresimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    public function deleteDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto){
        $DefensoresimputadoscarpetasDto=$this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasController->deleteDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        if($DefensoresimputadoscarpetasDto==true){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    /*
     * Para actualizar carpteas judiciales
     */
    public function agregarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto){
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
        $rs = $DefensoresimputadoscarpetasController->agregarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        return $rs;
    }
    
    public function modificarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto){
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
        $rs = $DefensoresimputadoscarpetasController->modificarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        return $rs;
    }
    
    public function eliminarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto){
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasController = new DefensoresimputadoscarpetasController();
        $rs = $DefensoresimputadoscarpetasController->eliminarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
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



@$idDefensorImputadoCarpeta=$_POST["idDefensorImputadoCarpeta"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$cveTipoDefensor=$_POST["cveTipoDefensor"];
@$nombre=$_POST["nombre"];
@$telefono=$_POST["telefono"];
@$celular=$_POST["celular"];
@$email=$_POST["email"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$defensoresimputadoscarpetasFacade = new DefensoresimputadoscarpetasFacade();
$defensoresimputadoscarpetasDto = new DefensoresimputadoscarpetasDTO();

$defensoresimputadoscarpetasDto->setIdDefensorImputadoCarpeta($idDefensorImputadoCarpeta);
$defensoresimputadoscarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
$defensoresimputadoscarpetasDto->setCveTipoDefensor($cveTipoDefensor);
$defensoresimputadoscarpetasDto->setNombre($nombre);
$defensoresimputadoscarpetasDto->setTelefono($telefono);
$defensoresimputadoscarpetasDto->setCelular($celular);
$defensoresimputadoscarpetasDto->setEmail($email);
$defensoresimputadoscarpetasDto->setActivo($activo);
$defensoresimputadoscarpetasDto->setFechaRegistro($fechaRegistro);
$defensoresimputadoscarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idDefensorImputadoCarpeta=="") ){
    $defensoresimputadoscarpetasDto=$defensoresimputadoscarpetasFacade->insertDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto);
    echo $defensoresimputadoscarpetasDto;
} else if(($accion=="guardar") && ($idDefensorImputadoCarpeta!="")){
    $defensoresimputadoscarpetasDto=$defensoresimputadoscarpetasFacade->updateDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto);
    echo $defensoresimputadoscarpetasDto;
} else if($accion=="consultar"){
    $defensoresimputadoscarpetasDto=$defensoresimputadoscarpetasFacade->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto);
    echo $defensoresimputadoscarpetasDto;
} else if( ($accion=="baja") && ($idDefensorImputadoCarpeta!="") ){
    $defensoresimputadoscarpetasDto=$defensoresimputadoscarpetasFacade->deleteDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto);
    echo $defensoresimputadoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idDefensorImputadoCarpeta!="") ){
    $defensoresimputadoscarpetasDto=$defensoresimputadoscarpetasFacade->selectDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto);
    echo $defensoresimputadoscarpetasDto;
} else if( ($accion=="guarda") && ($idDefensorImputadoCarpeta=="") ){
    $defensoresimputadoscarpetasDto=$defensoresimputadoscarpetasFacade->agregarDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto);
    echo $defensoresimputadoscarpetasDto;
} else if(($accion=="guarda") && ($idDefensorImputadoCarpeta!="")){
    $defensoresimputadoscarpetasDto=$defensoresimputadoscarpetasFacade->modificarDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto);
    echo $defensoresimputadoscarpetasDto;
} else if( ($accion=="eliminar") && ($idDefensorImputadoCarpeta!="") ){
    $defensoresimputadoscarpetasDto=$defensoresimputadoscarpetasFacade->eliminarDefensoresimputadoscarpetas($defensoresimputadoscarpetasDto);
    echo $defensoresimputadoscarpetasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
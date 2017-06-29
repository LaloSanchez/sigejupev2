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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresofendidoscarpetas/DefensoresofendidoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposdefensores/TiposdefensoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposdefensores/TiposdefensoresController.Class.php");
class DefensoresofendidoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto){
        $DefensoresofendidoscarpetasDto->setidDefensorOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta())){
            $DefensoresofendidoscarpetasDto->setidDefensorOfendidoCarpeta($this->fechaMysql($DefensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta()));
        }
        $DefensoresofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->getidOfendidoCarpeta(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->getidOfendidoCarpeta()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->getidOfendidoCarpeta())){
            $DefensoresofendidoscarpetasDto->setidOfendidoCarpeta($this->fechaMysql($DefensoresofendidoscarpetasDto->getidOfendidoCarpeta()));
        }
        $DefensoresofendidoscarpetasDto->setcveTipoDefensor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->getcveTipoDefensor(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->getcveTipoDefensor()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->getcveTipoDefensor())){
            $DefensoresofendidoscarpetasDto->setcveTipoDefensor($this->fechaMysql($DefensoresofendidoscarpetasDto->getcveTipoDefensor()));
        }
        $DefensoresofendidoscarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->getnombre(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->getnombre()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->getnombre())){
            $DefensoresofendidoscarpetasDto->setnombre($this->fechaMysql($DefensoresofendidoscarpetasDto->getnombre()));
        }
        $DefensoresofendidoscarpetasDto->settelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->gettelefono(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->gettelefono()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->gettelefono())){
            $DefensoresofendidoscarpetasDto->settelefono($this->fechaMysql($DefensoresofendidoscarpetasDto->gettelefono()));
        }
        $DefensoresofendidoscarpetasDto->setcelular(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->getcelular(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->getcelular()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->getcelular())){
            $DefensoresofendidoscarpetasDto->setcelular($this->fechaMysql($DefensoresofendidoscarpetasDto->getcelular()));
        }
        $DefensoresofendidoscarpetasDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->getemail(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->getemail()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->getemail())){
            $DefensoresofendidoscarpetasDto->setemail($this->fechaMysql($DefensoresofendidoscarpetasDto->getemail()));
        }
        $DefensoresofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->getactivo(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->getactivo()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->getactivo())){
            $DefensoresofendidoscarpetasDto->setactivo($this->fechaMysql($DefensoresofendidoscarpetasDto->getactivo()));
        }
        $DefensoresofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->getfechaRegistro())){
            $DefensoresofendidoscarpetasDto->setfechaRegistro($this->fechaMysql($DefensoresofendidoscarpetasDto->getfechaRegistro()));
        }
        $DefensoresofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DefensoresofendidoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($DefensoresofendidoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($DefensoresofendidoscarpetasDto->getfechaActualizacion())){
            $DefensoresofendidoscarpetasDto->setfechaActualizacion($this->fechaMysql($DefensoresofendidoscarpetasDto->getfechaActualizacion()));
        }
        return $DefensoresofendidoscarpetasDto;
    }
    
    public function selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto){
        /*$DefensoresofendidoscarpetasDto=$this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasController = new DefensoresofendidoscarpetasController();
        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasController->selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        if($DefensoresofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DefensoresofendidoscarpetasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));*/
        $DefensoresofendidoscarpetasDto=$this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasController = new DefensoresofendidoscarpetasController();
        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasController->selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $json = "";
        $x = 1;
        $tiposDefensoresDto = new TiposdefensoresDTO();
        $tiposDefensoresDao = new TiposdefensoresDAO();
        if($DefensoresofendidoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($DefensoresofendidoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($DefensoresofendidoscarpetasDto as $DefensorOfendido) {
                $tiposDefensoresDto->setCveTipoDefensor($DefensorOfendido->getCveTipoDefensor());
                $rsDefensor = $tiposDefensoresDao->selectTiposdefensores($tiposDefensoresDto);
                $json .= "{";
                $json .= '"idDefensorOfendidoCarpeta":' . json_encode(utf8_encode($DefensorOfendido->getIdDefensorOfendidoCarpeta())) . ",";
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($DefensorOfendido->getIdOfendidoCarpeta())) . ",";
                $json .= '"cveTipoDefensor":' . json_encode(utf8_encode($DefensorOfendido->getCveTipoDefensor())) . ",";
                if ($rsDefensor != "") {
                    $json .= '"desTipoDefensor":' . json_encode(utf8_encode($rsDefensor[0]->getDesTipoDefensor())) . ",";
                } else {
                    $json .= '"desTopoDefensor": "",';
                }
                $json .= '"nombre":' . json_encode(utf8_encode($DefensorOfendido->getNombre())) . ",";
                $json .= '"telefono":' . json_encode(utf8_encode($DefensorOfendido->getTelefono())) . ",";
                $json .= '"celular":' . json_encode(utf8_encode($DefensorOfendido->getCelular())) . ",";
                $json .= '"email":' . json_encode(utf8_encode($DefensorOfendido->getEmail())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($DefensorOfendido->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($DefensoresofendidoscarpetasDto)) {
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
     * Para actualizar caprteas judiciales
     */
    public function agregarDefensorOfendido($DefensoresofendidoscarpetasDto)
    {
        $DefensoresofendidoscarpetasDto = $this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasController = new DefensoresofendidoscarpetasController();
        $defensoresResponse = $DefensoresofendidoscarpetasController->agregarDefensorOfendido($DefensoresofendidoscarpetasDto);

        return json_encode($defensoresResponse);
    }

    public function modificarDefensorOfendido($DefensoresofendidoscarpetasDto)
    {
        $DefensoresofendidoscarpetasDto = $this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasController = new DefensoresofendidoscarpetasController();
        $defensoresResponse = $DefensoresofendidoscarpetasController->modificarDefensorOfendido($DefensoresofendidoscarpetasDto);

        return json_encode($defensoresResponse);
    }

    public function eliminarDefensor($DefensoresofendidoscarpetasDto)
    {
        $DefensoresofendidoscarpetasDto = $this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasController = new DefensoresofendidoscarpetasController();
        $defensoresResponse = $DefensoresofendidoscarpetasController->eliminarDefensor($DefensoresofendidoscarpetasDto);

        return json_encode($defensoresResponse);
    }
    
    public function insertDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto){
        $DefensoresofendidoscarpetasDto=$this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasController = new DefensoresofendidoscarpetasController();
        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasController->insertDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        if($DefensoresofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DefensoresofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto){
        $DefensoresofendidoscarpetasDto=$this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasController = new DefensoresofendidoscarpetasController();
        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasController->updateDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        if($DefensoresofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($DefensoresofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto){
        $DefensoresofendidoscarpetasDto=$this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasController = new DefensoresofendidoscarpetasController();
        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasController->deleteDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        if($DefensoresofendidoscarpetasDto==true){
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



@$idDefensorOfendidoCarpeta=$_POST["idDefensorOfendidoCarpeta"];
@$idOfendidoCarpeta=$_POST["idOfendidoCarpeta"];
@$cveTipoDefensor=$_POST["cveTipoDefensor"];
@$nombre=$_POST["nombre"];
@$telefono=$_POST["telefono"];
@$celular=$_POST["celular"];
@$email=$_POST["email"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$defensoresofendidoscarpetasFacade = new DefensoresofendidoscarpetasFacade();
$defensoresofendidoscarpetasDto = new DefensoresofendidoscarpetasDTO();

$defensoresofendidoscarpetasDto->setIdDefensorOfendidoCarpeta($idDefensorOfendidoCarpeta);
$defensoresofendidoscarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
$defensoresofendidoscarpetasDto->setCveTipoDefensor($cveTipoDefensor);
$defensoresofendidoscarpetasDto->setNombre($nombre);
$defensoresofendidoscarpetasDto->setTelefono($telefono);
$defensoresofendidoscarpetasDto->setCelular($celular);
$defensoresofendidoscarpetasDto->setEmail($email);
$defensoresofendidoscarpetasDto->setActivo($activo);
$defensoresofendidoscarpetasDto->setFechaRegistro($fechaRegistro);
$defensoresofendidoscarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idDefensorOfendidoCarpeta=="") ){
    $defensoresofendidoscarpetasDto=$defensoresofendidoscarpetasFacade->insertDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto);
    echo $defensoresofendidoscarpetasDto;
} else if(($accion=="guardar") && ($idDefensorOfendidoCarpeta!="")){
    $defensoresofendidoscarpetasDto=$defensoresofendidoscarpetasFacade->updateDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto);
    echo $defensoresofendidoscarpetasDto;
} else if($accion=="consultar"){
    $defensoresofendidoscarpetasDto=$defensoresofendidoscarpetasFacade->selectDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto);
    echo $defensoresofendidoscarpetasDto;
} else if( ($accion=="baja") && ($idDefensorOfendidoCarpeta!="") ){
    $defensoresofendidoscarpetasDto=$defensoresofendidoscarpetasFacade->deleteDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto);
    echo $defensoresofendidoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idDefensorOfendidoCarpeta!="") ){
    $defensoresofendidoscarpetasDto=$defensoresofendidoscarpetasFacade->selectDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto);
    echo $defensoresofendidoscarpetasDto;
} else if ($accion == "agregar" && $idDefensorOfendidoCarpeta == "") {
    $defensoresofendidoscarpetasDto = $defensoresofendidoscarpetasFacade->agregarDefensorOfendido($defensoresofendidoscarpetasDto);
    echo $defensoresofendidoscarpetasDto;
} else if ($accion == "agregar" && $idDefensorOfendidoCarpeta != "") {
    $defensoresofendidoscarpetasDto = $defensoresofendidoscarpetasFacade->modificarDefensorOfendido($defensoresofendidoscarpetasDto);
    echo $defensoresofendidoscarpetasDto;
} else if ($accion == "eliminar" && $idDefensorOfendidoCarpeta != "") {
    $defensoresofendidoscarpetasDto = $defensoresofendidoscarpetasFacade->eliminarDefensor($defensoresofendidoscarpetasDto);
    echo $defensoresofendidoscarpetasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
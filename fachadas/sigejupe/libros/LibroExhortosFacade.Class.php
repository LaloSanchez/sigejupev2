<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/libros/librosElectronicosController.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
    
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");

    
    class libroExhortos{
        public function obtenerDatos(){
            
        }
        public function selectExhortos($actuacionesdto,$param =null){
//            print_r($param);
            $libroController = new librosController();
            $actuacionesres = $libroController->libroExhorto($actuacionesdto,$param);
            return $actuacionesres;
            //$actuacionesController = json_decode($actuacionesController);
        }
        public function fechaMysql($fecha) {
           list($dia, $mes, $year) = explode("/", $fecha);

           return $year . "-" . $mes . "-" . $dia;
        }
        public function fechaNormal($fecha) {
           list($dia, $mes, $year) = explode("/", $fecha);
           return $year . "-" . $mes . "-" . $dia;
        }
    }
        @$fechaInicio = $_POST["fechainicio"];
        @$fechafin = $_POST["fechafin"];
        @$cveJuzgado = $_POST["cveJuzgado"];
        @$id = $_POST["id"];
        @$accion = $_POST["accion"];
        @$ativo = $_POST["activo"];
        
        $exhortosDto = new ExhortosDTO();
        $param = array();
        
        $libroFacade=new libroExhortos();
        $fechaInicio=$libroFacade->fechaMysql($fechaInicio);
        $fechaFin=$libroFacade->fechaMysql($fechafin);
        $exhortosDto->setCveJuzgado($cveJuzgado);
        $exhortosDto->setActivo("S");
        $exhortosDto->setIdExhorto($id);
        $param["fechaInicial"] = $fechaInicio;
        $param["fechaFinal"] = $fechaFin;
        $libroFacade=new libroExhortos();
        //print_r($param);
        if($accion == "consultar"){
            $controller = $libroFacade->selectExhortos($exhortosDto, $param);
            echo $controller;
        }
        
} else {
   header("HTTP/1.0 440 la sesion caduco");
   header("Status: 440 Login Timeout");
}
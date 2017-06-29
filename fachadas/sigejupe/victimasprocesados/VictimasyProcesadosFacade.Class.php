<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/victimasprocesados/victimasProcesadosController.Class.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
    
    class victimasProcesadosFacade{
        private $proveedor;
        public function __construct() {
        }
        
        public function selectVictimasProcesados($carpetasdto,$param =null){     
            $victimasProcesadosController = new VictimasProcesadosController();
            $rsvictimasProcesados = $victimasProcesadosController->selectVictimasProcesados($carpetasdto,$param);
            return $rsvictimasProcesados;
        }
        public function selectVictimasProcesadosDelitos($carpetasdto,$param =null){     
            $victimasProcesadosController = new VictimasProcesadosController();
            $rsvictimasProcesadosDelitos = $victimasProcesadosController->selectVictimasProcesadosDelitos($carpetasdto,$param);
            return $rsvictimasProcesadosDelitos;
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
        @$fechaInicio = $_POST["fechaInicio"] ;
        @$fechafin = $_POST["fechaFin"];
        @$cveJuzgado = $_POST["cveAdscripcion"];
        @$cveDistrito = $_POST["distrito"];
        @$cveRegion = $_POST["region"];
        @$accion = $_POST["accion"];
        @$activo = $_POST["activo"];
        
        $victimasProcesadosFacade=new victimasProcesadosFacade();
        
        $fechaInicio=$victimasProcesadosFacade->fechaMysql($fechaInicio);
        $fechafin=$victimasProcesadosFacade->fechaMysql($fechafin);
        
        $param = Array();
        @$param['fechaDesde'] = $fechaInicio;
        @$param['fechaHasta'] = $fechafin;
        @$param["region"] = $cveRegion;
        @$param["distrito"] = $cveDistrito;
        @$param["juzgado"] = $cveJuzgado;
        
        $carpetasdto = new CarpetasjudicialesDTO();
        $carpetasdto->setCveJuzgado($cveJuzgado);
        $carpetasdto->setActivo($activo);
        
        if($accion == "ReportePorCarpeta"){
            $porCarpetas = $victimasProcesadosFacade->selectVictimasProcesados($carpetasdto,$param);
            echo $porCarpetas;
        }
        if($accion == "ReportePorDelito"){
            $porDelitos = $victimasProcesadosFacade->selectVictimasProcesadosDelitos($carpetasdto,$param);
            echo $porDelitos;
        }
        
} else {
   header("HTTP/1.0 440 la sesion caduco");
   header("Status: 440 Login Timeout");
}
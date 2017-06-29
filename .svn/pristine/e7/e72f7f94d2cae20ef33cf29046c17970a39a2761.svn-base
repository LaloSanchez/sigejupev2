<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/trayectoriacarpetas/trayectoriaCarpetasController.Class.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
    

    
    class trayectoriaCarpetas{
        public function obtenerDatos(){
            
        }
        public function selectTrajectoria($carpetasdto,$param =null){
//            print_r($param);
//            print_r($carpetasdto);
//            exit;
            $trajectoria = new trajectoriasCarpetas();
            $actuacionesres = $trajectoria->selectTrayectoria($carpetasdto,$param);
            return $actuacionesres;
            //$actuacionesController = json_decode($actuacionesController);
        }
        public function selectTrazabilidad($carpetasdto,$param =null){
//            print_r($param);
//            print_r($carpetasdto);
//            exit;
            $trajectoria = new trajectoriasCarpetas();
            $actuacionesres = $trajectoria->selectTrazabilidad($carpetasdto,$param);
            return $actuacionesres;
            //$actuacionesController = json_decode($actuacionesController);
        }
        public function getPaginasTrayectorias($carpetasdto,$param =null){
//            print_r($param);
//            print_r($carpetasdto);
//            exit;
            $trajectoria = new trajectoriasCarpetas();
            $actuacionesres = $trajectoria->getPaginasTrayectorias($carpetasdto,$param);
            return $actuacionesres;
            //$actuacionesController = json_decode($actuacionesController);
        }
        public function fechaMysql($fecha) {
            if($fecha != ""){
           list($dia, $mes, $year) = explode("/", $fecha);
           return $year . "-" . $mes . "-" . $dia;
            }else{
                return "";
            }
        }
        public function fechaNormal($fecha) {
            if($fecha != ""){
           list($dia, $mes, $year) = explode("/", $fecha);
           return $year . "-" . $mes . "-" . $dia;
            }else{
               return "";
           }
        }
    }
        @$fechaInicio = $_POST["fechaInicio"] ;
        @$FechaInicioSA = $_POST["fechaSinActividad"];
        @$fechafin = $_POST["fechaFin"];
        @$cveJuzgado = $_POST["cveAdscripcion"];
        @$accion = $_POST["accion"];
        @$activo = $_POST["activo"];
        
        $trayectoriaFacade=new trayectoriaCarpetas();
        $fechaInicio=$trayectoriaFacade->fechaMysql($fechaInicio);
        $fechafin=$trayectoriaFacade->fechaMysql($fechafin);
        $fechaInicioSA=$trayectoriaFacade->fechaMysql($FechaInicioSA);
        $param = Array();
        @$param['fechaDesde'] = $fechaInicio;
        @$param['fechaHasta'] = $fechafin;
        @$param['fechaSin'] = $fechaInicioSA;
        @$param['cantxPag'] = $_POST["cantxPag"];
        @$param["pag"]=$_POST["pag"];
        @$param["paginacion"] = $_POST["paginacion"];
        //print_r($param);
        $carpetasdto=new CarpetasjudicialesDTO();
        $carpetasdto->setCveJuzgado($cveJuzgado);
        $carpetasdto->setActivo($activo);
        
        if($accion == "consultar"){
            $carpetas = $trayectoriaFacade->selectTrajectoria($carpetasdto,$param);
            echo $carpetas;
        }else if($accion == "getPaginasTrayectorias"){
            $carpetas = $trayectoriaFacade->getPaginasTrayectorias($carpetasdto,$param);
            echo $carpetas;
        }else if($accion == "selectTrazabilidad"){
            $carpetas = $trayectoriaFacade->selectTrazabilidad($carpetasdto,$param);
            echo $carpetas;
        }
        
} else {
   header("HTTP/1.0 440 la sesion caduco");
   header("Status: 440 Login Timeout");
}

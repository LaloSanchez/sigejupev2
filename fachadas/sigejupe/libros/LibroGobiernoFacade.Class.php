<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/libros/librosElectronicosController.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
    
    class libroGobierno{
        public function obtenerDatos(){
            
        }
        public function selectCarpetas($actuacionesdto,$param =null){
//            print_r($param);
            $libroController = new librosController();
            $actuacionesres = $libroController->libroGobierno($actuacionesdto,$param);
            return $actuacionesres;
            //$actuacionesController = json_decode($actuacionesController);
        }
        public function selectCarpetas2($actuacionesdto,$param =null){
//            print_r($param);
            $libroController = new librosController();
            $actuacionesres = $libroController->libroGobierno2($actuacionesdto,$param);
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
        @$id=$_POST["id"];
        @$fechaInicio = $_POST["fechainicio"];
        @$fechafin = $_POST["fechafin"];
        @$cveJuzgado = $_POST["cveJuzgado"];
        @$accion = $_POST["accion"];
        @$ativo = $_POST["activo"];
        
        $libroFacade=new libroGobierno();
        $fechaInicio=$libroFacade->fechaMysql($fechaInicio);
        $fechafin=$libroFacade->fechaMysql($fechafin);
        $param = Array();
        @$param['fechaDesde'] = $fechaInicio;
        @$param['fechaHasta'] = $fechafin;
        //@$param['cantxPag'] = '9999999999';
//        @$param["pag"]=0;
//        @$param["paginacion"] = "true";
        //print_r($param);
        $carpetasjudicialesDto=new CarpetasjudicialesDTO();
        $carpetasjudicialesDto->setCveJuzgado($cveJuzgado);
        $carpetasjudicialesDto->setActivo('S');
        $carpetasjudicialesDto->setIdCarpetaJudicial($id);
        if($accion == "consultar"){
            $actuaciones = $libroFacade->selectCarpetas($carpetasjudicialesDto,$param);
            echo $actuaciones;
        }else if($accion == "consultar2"){
            $actuaciones = $libroFacade->selectCarpetas2($carpetasjudicialesDto,$param);
            echo $actuaciones;
        }
} else {
   header("HTTP/1.0 440 la sesion caduco");
   header("Status: 440 Login Timeout");
}
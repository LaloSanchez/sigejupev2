<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/libros/librosElectronicosController.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
    

    
    class libroOficios{
        public function obtenerDatos(){
            
        }
        public function selectActuaciones($actuacionesdto,$param =null){
            
//            print_r($param);
            $libroController = new librosController();
            $actuacionesres = $libroController->libroOficio($actuacionesdto,$param);
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
        
        $libroFacade=new libroOficios();
//        $fechaInicio=$libroFacade->fechaMysql($fechaInicio);
//        $fechaFin=$libroFacade->fechaMysql($fechafin);
        $param = Array();
        @$param['fechaDesde'] = $fechaInicio;
        @$param['fechaHasta'] = $fechafin;
        @$param['cantxPag'] = '9999999999';
        @$param["pag"]=0;
        @$param["paginacion"] = "true";
        //print_r($param);
        $actuacionesdto=new ActuacionesDTO();
        $actuacionesdto->setCveJuzgado($cveJuzgado);
        $actuacionesdto->setCveTipoActuacion('7');
        $actuacionesdto->setActivo('S');
         $actuacionesdto->setIdActuacion($id);
        if($accion == "consultar"){
            $actuaciones = $libroFacade->selectActuaciones($actuacionesdto,$param);
            echo $actuaciones;
        }else if($accion == "consultar2"){
            $id=$_POST["id"];
            $actuacionesdto->setIdActuacion($id);
            $actuaciones = $libroFacade->selectActuaciones($actuacionesdto);
            echo $actuaciones;
        }
        
} else {
   header("HTTP/1.0 440 la sesion caduco");
   header("Status: 440 Login Timeout");
}
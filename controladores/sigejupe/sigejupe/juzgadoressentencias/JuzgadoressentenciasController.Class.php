<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadoressentencias/JuzgadoressentenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadoressentencias/JuzgadoressentenciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php"); 
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoressentenciasController {
private $proveedor;
public function __construct() {
}
public function validarJuzgadoressentencias($JuzgadoressentenciasDto){
$JuzgadoressentenciasDto->setidJuzgadorSentencia(strtoupper(str_ireplace("'","",trim($JuzgadoressentenciasDto->getidJuzgadorSentencia()))));
$JuzgadoressentenciasDto->setidActuacion(strtoupper(str_ireplace("'","",trim($JuzgadoressentenciasDto->getidActuacion()))));
$JuzgadoressentenciasDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($JuzgadoressentenciasDto->getidJuzgador()))));
$JuzgadoressentenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($JuzgadoressentenciasDto->getfechaRegistro()))));
$JuzgadoressentenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($JuzgadoressentenciasDto->getfechaActualizacion()))));
return $JuzgadoressentenciasDto;
}
public function selectJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor=null){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasDao = new JuzgadoressentenciasDAO();
$JuzgadoressentenciasDto = $JuzgadoressentenciasDao->selectJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor);
return $JuzgadoressentenciasDto;
}




public function eliminacionlogica($JuzgadoressentenciasDto,$proveedor=null){
    

    $JuzgadoressentenciasDto->setActivo('S');
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasDao = new JuzgadoressentenciasDAO();

 
     $proveedor = new Proveedor('mysql', 'sigejupe');
     $proveedor->connect();

$fechaserver=$proveedor->getfechaActual();

$JuzgadoressentenciasDto2=$JuzgadoressentenciasDao->selectJuzgadoressentencias($JuzgadoressentenciasDto);
$error=false;


if($JuzgadoressentenciasDto2!=""){
    
    
     $JuzgadoressentenciasDto->setActivo('N');
$JuzgadoressentenciasDto=$JuzgadoressentenciasDao->updateJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor);
if($JuzgadoressentenciasDto!=""){
    
     $bitacoraDTO = new BitacoramovimientosDTO();
        $bitacoraCtrl = new BitacoramovimientosController();
        $bitacoraDTO->setCveAccion(278); // insercion de sentencia ACTUACION
        $bitacoraDTO->setFechaMovimiento($fechaserver); //
        $dtoToJson = new DtoToJson($JuzgadoressentenciasDto);
        $dtoToJson->toJson("ELIMINACION DE JUZGADOR SENTENCIA");
        $bitacoraDTO->setObservaciones($dtoToJson->toJson("ELIMINACION")); //
        $bitacoraDTO->setCveUsuario($_SESSION['cveUsuarioSistema']);
        $bitacoraDTO->setCvePerfil($_SESSION['cvePerfil']); // variable de session
        $bitacoraDTO->setCveAdscripcion($_SESSION['cveAdscripcion']); // variable de session
       $bitacoraDTO= $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO,$proveedor);
        if($bitacoraDTO==""){
      $error=true;
       }
    
}else{
      $error=true;
}

      
if ($error == false) {
 $proveedor->execute("COMMIT");
} else {
 $proveedor->execute("ROLLBACK");
}
$proveedor->close();

}

if($error==false){
   return array("Actualizo"=>true); 
}
else{
    return array("Actualizo"=>false); 
}


}

public function selectJuzgadoresnombres($JuzgadoressentenciasDto,$proveedor=null){
$JuzgadoressentenciasDto->setActivo('S');
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasDao = new JuzgadoressentenciasDAO();
$JuzgadoressentenciasDto = $JuzgadoressentenciasDao->selectJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor);
$nomrejuzgador="";
$datos=array();
$cont=0;
if($JuzgadoressentenciasDto!=""){
    foreach($JuzgadoressentenciasDto as $cm){
     $JuzgadoresDTO=new JuzgadoresDTO();
     $JuzgadoresDAO=new JuzgadoresDAO();
      $JuzgadoresDTO->setActivo('S');
        $JuzgadoresDTO->setIdJuzgador($cm->getIdJuzgador());
     $JuzgadoresDTO=$JuzgadoresDAO->selectJuzgadores($JuzgadoresDTO);
     if($JuzgadoresDTO!=""){
         
         foreach($JuzgadoresDTO as $d){
             
             $nomrejuzgador=$d->getPaterno()." ".$d->getMaterno()." ".$d->getNombre();
         
         }
          $datos[$cont]=array("nombre"=>$nomrejuzgador,"idjuzgadorsente"=>$cm->getIdJuzgadorSentencia(),"idjuzgador"=>$cm->getIdJuzgador()); 
     
    $cont++;
    
    }
    
    
       
         }
     
     
        
    
}

$request=[];
if($cont>0){
    $request=array("totalCount"=>$cont,"data"=>$datos);
}else{
    
       $request=array("totalCount"=>0);
}

return $request;
}

public function insertJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor=null){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasDao = new JuzgadoressentenciasDAO();
$JuzgadoressentenciasDto = $JuzgadoressentenciasDao->insertJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor);
return $JuzgadoressentenciasDto;
}
public function updateJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor=null){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasDao = new JuzgadoressentenciasDAO();
//$tmpDto = new JuzgadoressentenciasDTO();
//$tmpDto = $JuzgadoressentenciasDao->selectJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor);
//if($tmpDto!=""){//$JuzgadoressentenciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$JuzgadoressentenciasDto = $JuzgadoressentenciasDao->updateJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor);
return $JuzgadoressentenciasDto;
//}
//return "";
}
public function deleteJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor=null){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasDao = new JuzgadoressentenciasDAO();
$JuzgadoressentenciasDto = $JuzgadoressentenciasDao->deleteJuzgadoressentencias($JuzgadoressentenciasDto,$proveedor);
return $JuzgadoressentenciasDto;
}
}
?>
<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DAOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico 
*************************************************
*/

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/imputadossanciones/ImputadossancionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ImputadossancionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertImputadossanciones($imputadossancionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblimputadossanciones(";
if($imputadossancionesDto->getIdImputadoSancion()!=""){
$sql.="idImputadoSancion";
if(($imputadossancionesDto->getIdImputadoSentencia()!="") ||($imputadossancionesDto->getCveTipoSancion()!="") ||($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getIdImputadoSentencia()!=""){
$sql.="idImputadoSentencia";
if(($imputadossancionesDto->getCveTipoSancion()!="") ||($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getCveTipoSancion()!=""){
$sql.="cveTipoSancion";
if(($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getAnioPrision()!=""){
$sql.="anioPrision";
if(($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getMesPrision()!=""){
$sql.="mesPrision";
if(($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getDiasPrision()!=""){
$sql.="diasPrision";
if(($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getCantidadMulta()!=""){
$sql.="cantidadMulta";
if(($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getCantidadReparacion()!=""){
$sql.="cantidadReparacion";
if(($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getAmonestacion()!=""){
$sql.="amonestacion";
if(($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getEspecificacion()!=""){
$sql.="especificacion";
if(($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getFechaInicio()!=""){
$sql.="fechaInicio";
if(($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getFechaTermina()!=""){
$sql.="fechaTermina";
if(($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($imputadossancionesDto->getIdImputadoSancion()!=""){
$sql.="'".$imputadossancionesDto->getIdImputadoSancion()."'";
if(($imputadossancionesDto->getIdImputadoSentencia()!="") ||($imputadossancionesDto->getCveTipoSancion()!="") ||($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getIdImputadoSentencia()!=""){
$sql.="'".$imputadossancionesDto->getIdImputadoSentencia()."'";
if(($imputadossancionesDto->getCveTipoSancion()!="") ||($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getCveTipoSancion()!=""){
$sql.="'".$imputadossancionesDto->getCveTipoSancion()."'";
if(($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getAnioPrision()!=""){
$sql.="'".$imputadossancionesDto->getAnioPrision()."'";
if(($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getMesPrision()!=""){
$sql.="'".$imputadossancionesDto->getMesPrision()."'";
if(($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getDiasPrision()!=""){
$sql.="'".$imputadossancionesDto->getDiasPrision()."'";
if(($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getCantidadMulta()!=""){
$sql.="'".$imputadossancionesDto->getCantidadMulta()."'";
if(($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getCantidadReparacion()!=""){
$sql.="'".$imputadossancionesDto->getCantidadReparacion()."'";
if(($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getAmonestacion()!=""){
$sql.="'".$imputadossancionesDto->getAmonestacion()."'";
if(($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getEspecificacion()!=""){
$sql.="'".$imputadossancionesDto->getEspecificacion()."'";
if(($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getFechaInicio()!=""){
$sql.="'".$imputadossancionesDto->getFechaInicio()."'";
if(($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getFechaTermina()!=""){
$sql.="'".$imputadossancionesDto->getFechaTermina()."'";
if(($imputadossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getActivo()!=""){
$sql.="'".$imputadossancionesDto->getActivo()."'";
}
if($imputadossancionesDto->getFechaRegistro()!=""){
}
if($imputadossancionesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ImputadossancionesDTO();
$tmp->setidImputadoSancion($this->_proveedor->lastID());
$tmp = $this->selectImputadossanciones($tmp,"",$this->_proveedor);
} else {
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function updateImputadossanciones($imputadossancionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblimputadossanciones SET ";
if($imputadossancionesDto->getIdImputadoSancion()!=""){
$sql.="idImputadoSancion='".$imputadossancionesDto->getIdImputadoSancion()."'";
if(($imputadossancionesDto->getIdImputadoSentencia()!="") ||($imputadossancionesDto->getCveTipoSancion()!="") ||($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getIdImputadoSentencia()!=""){
$sql.="idImputadoSentencia='".$imputadossancionesDto->getIdImputadoSentencia()."'";
if(($imputadossancionesDto->getCveTipoSancion()!="") ||($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getCveTipoSancion()!=""){
$sql.="cveTipoSancion='".$imputadossancionesDto->getCveTipoSancion()."'";
if(($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getAnioPrision()!=""){
$sql.="anioPrision='".$imputadossancionesDto->getAnioPrision()."'";
if(($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getMesPrision()!=""){
$sql.="mesPrision='".$imputadossancionesDto->getMesPrision()."'";
if(($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getDiasPrision()!=""){
$sql.="diasPrision='".$imputadossancionesDto->getDiasPrision()."'";
if(($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getCantidadMulta()!=""){
$sql.="cantidadMulta='".$imputadossancionesDto->getCantidadMulta()."'";
if(($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getCantidadReparacion()!=""){
$sql.="cantidadReparacion='".$imputadossancionesDto->getCantidadReparacion()."'";
if(($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getAmonestacion()!=""){
$sql.="amonestacion='".$imputadossancionesDto->getAmonestacion()."'";
if(($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getEspecificacion()!=""){
$sql.="especificacion='".$imputadossancionesDto->getEspecificacion()."'";
if(($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getFechaInicio()!=""){
$sql.="fechaInicio='".$imputadossancionesDto->getFechaInicio()."'";
if(($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getFechaTermina()!=""){
$sql.="fechaTermina='".$imputadossancionesDto->getFechaTermina()."'";
if(($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getActivo()!=""){
$sql.="activo='".$imputadossancionesDto->getActivo()."'";
if(($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$imputadossancionesDto->getFechaRegistro()."'";
if(($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossancionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$imputadossancionesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idImputadoSancion='".$imputadossancionesDto->getIdImputadoSancion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ImputadossancionesDTO();
$tmp->setidImputadoSancion($imputadossancionesDto->getIdImputadoSancion());
$tmp = $this->selectImputadossanciones($tmp,"",$this->_proveedor);
} else {
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function deleteImputadossanciones($imputadossancionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblimputadossanciones  WHERE idImputadoSancion='".$imputadossancionesDto->getIdImputadoSancion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = true;
} else {
$tmp = false;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function selectImputadossanciones($imputadossancionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idImputadoSancion,idImputadoSentencia,cveTipoSancion,anioPrision,mesPrision,diasPrision,cantidadMulta,cantidadReparacion,amonestacion,especificacion,fechaInicio,fechaTermina,activo,fechaRegistro,fechaActualizacion FROM tblimputadossanciones ";
if(($imputadossancionesDto->getIdImputadoSancion()!="") ||($imputadossancionesDto->getIdImputadoSentencia()!="") ||($imputadossancionesDto->getCveTipoSancion()!="") ||($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($imputadossancionesDto->getIdImputadoSancion()!=""){
$sql.="idImputadoSancion='".$imputadossancionesDto->getIdImputadoSancion()."'";
if(($imputadossancionesDto->getIdImputadoSentencia()!="") ||($imputadossancionesDto->getCveTipoSancion()!="") ||($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getIdImputadoSentencia()!=""){
$sql.="idImputadoSentencia='".$imputadossancionesDto->getIdImputadoSentencia()."'";
if(($imputadossancionesDto->getCveTipoSancion()!="") ||($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getCveTipoSancion()!=""){
$sql.="cveTipoSancion='".$imputadossancionesDto->getCveTipoSancion()."'";
if(($imputadossancionesDto->getAnioPrision()!="") ||($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getAnioPrision()!=""){
$sql.="anioPrision='".$imputadossancionesDto->getAnioPrision()."'";
if(($imputadossancionesDto->getMesPrision()!="") ||($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getMesPrision()!=""){
$sql.="mesPrision='".$imputadossancionesDto->getMesPrision()."'";
if(($imputadossancionesDto->getDiasPrision()!="") ||($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getDiasPrision()!=""){
$sql.="diasPrision='".$imputadossancionesDto->getDiasPrision()."'";
if(($imputadossancionesDto->getCantidadMulta()!="") ||($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getCantidadMulta()!=""){
$sql.="cantidadMulta='".$imputadossancionesDto->getCantidadMulta()."'";
if(($imputadossancionesDto->getCantidadReparacion()!="") ||($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getCantidadReparacion()!=""){
$sql.="cantidadReparacion='".$imputadossancionesDto->getCantidadReparacion()."'";
if(($imputadossancionesDto->getAmonestacion()!="") ||($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getAmonestacion()!=""){
$sql.="amonestacion='".$imputadossancionesDto->getAmonestacion()."'";
if(($imputadossancionesDto->getEspecificacion()!="") ||($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getEspecificacion()!=""){
$sql.="especificacion='".$imputadossancionesDto->getEspecificacion()."'";
if(($imputadossancionesDto->getFechaInicio()!="") ||($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getFechaInicio()!=""){
$sql.="fechaInicio='".$imputadossancionesDto->getFechaInicio()."'";
if(($imputadossancionesDto->getFechaTermina()!="") ||($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getFechaTermina()!=""){
$sql.="fechaTermina='".$imputadossancionesDto->getFechaTermina()."'";
if(($imputadossancionesDto->getActivo()!="") ||($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getActivo()!=""){
$sql.="activo='".$imputadossancionesDto->getActivo()."'";
if(($imputadossancionesDto->getFechaRegistro()!="") ||($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$imputadossancionesDto->getFechaRegistro()."'";
if(($imputadossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossancionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$imputadossancionesDto->getFechaActualizacion()."'";
}
if($orden!=""){
$sql.=$orden;
}else{
$sql.="";
}
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
$tmp[$contador] = new ImputadossancionesDTO();
$tmp[$contador]->setIdImputadoSancion($row["idImputadoSancion"]);
$tmp[$contador]->setIdImputadoSentencia($row["idImputadoSentencia"]);
$tmp[$contador]->setCveTipoSancion($row["cveTipoSancion"]);
$tmp[$contador]->setAnioPrision($row["anioPrision"]);
$tmp[$contador]->setMesPrision($row["mesPrision"]);
$tmp[$contador]->setDiasPrision($row["diasPrision"]);
$tmp[$contador]->setCantidadMulta($row["cantidadMulta"]);
$tmp[$contador]->setCantidadReparacion($row["cantidadReparacion"]);
$tmp[$contador]->setAmonestacion($row["amonestacion"]);
$tmp[$contador]->setEspecificacion($row["especificacion"]);
$tmp[$contador]->setFechaInicio($row["fechaInicio"]);
$tmp[$contador]->setFechaTermina($row["fechaTermina"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$contador++;
}
} else {
$error = true;
}
} else {
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
}
?>
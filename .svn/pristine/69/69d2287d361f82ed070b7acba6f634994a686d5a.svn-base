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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/detencionessolicitudes/DetencionessolicitudesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DetencionessolicitudesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDetencionessolicitudes($detencionessolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbldetencionessolicitudes(";
if($detencionessolicitudesDto->getidDetencionSolicitud()!=""){
$sql.="idDetencionSolicitud";
if(($detencionessolicitudesDto->getIdImputadoSolicitud()!="") ||($detencionessolicitudesDto->getActivo()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getidImputadoSolicitud()!=""){
$sql.="idImputadoSolicitud";
if(($detencionessolicitudesDto->getActivo()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getactivo()!=""){
$sql.="activo";
if(($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getfechaDetencion()!=""){
$sql.="fechaDetencion";
if(($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getnumOficio()!=""){
$sql.="numOficio";
if(($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getcveCereso()!=""){
$sql.="cveCereso";
if(($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getnombreAgente()!=""){
$sql.="nombreAgente";
if(($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getobservaciones()!=""){
$sql.="observaciones";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($detencionessolicitudesDto->getidDetencionSolicitud()!=""){
$sql.="'".$detencionessolicitudesDto->getidDetencionSolicitud()."'";
if(($detencionessolicitudesDto->getIdImputadoSolicitud()!="") ||($detencionessolicitudesDto->getActivo()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getidImputadoSolicitud()!=""){
$sql.="'".$detencionessolicitudesDto->getidImputadoSolicitud()."'";
if(($detencionessolicitudesDto->getActivo()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getactivo()!=""){
$sql.="'".$detencionessolicitudesDto->getactivo()."'";
if(($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getfechaRegistro()!=""){
if(($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getfechaActualizacion()!=""){
if(($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getfechaDetencion()!=""){
$sql.="'".$detencionessolicitudesDto->getfechaDetencion()."'";
if(($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getnumOficio()!=""){
$sql.="'".$detencionessolicitudesDto->getnumOficio()."'";
if(($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getcveCereso()!=""){
$sql.="'".$detencionessolicitudesDto->getcveCereso()."'";
if(($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getnombreAgente()!=""){
$sql.="'".$detencionessolicitudesDto->getnombreAgente()."'";
if(($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getobservaciones()!=""){
$sql.="'".$detencionessolicitudesDto->getobservaciones()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DetencionessolicitudesDTO();
$tmp->setidDetencionSolicitud($this->_proveedor->lastID());
$tmp = $this->selectDetencionessolicitudes($tmp,"",$this->_proveedor);
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
public function updateDetencionessolicitudes($detencionessolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbldetencionessolicitudes SET ";
if($detencionessolicitudesDto->getidDetencionSolicitud()!=""){
$sql.="idDetencionSolicitud='".$detencionessolicitudesDto->getidDetencionSolicitud()."'";
if(($detencionessolicitudesDto->getIdImputadoSolicitud()!="") ||($detencionessolicitudesDto->getActivo()!="") ||($detencionessolicitudesDto->getFechaRegistro()!="") ||($detencionessolicitudesDto->getFechaActualizacion()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getidImputadoSolicitud()!=""){
$sql.="idImputadoSolicitud='".$detencionessolicitudesDto->getidImputadoSolicitud()."'";
if(($detencionessolicitudesDto->getActivo()!="") ||($detencionessolicitudesDto->getFechaRegistro()!="") ||($detencionessolicitudesDto->getFechaActualizacion()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getactivo()!=""){
$sql.="activo='".$detencionessolicitudesDto->getactivo()."'";
if(($detencionessolicitudesDto->getFechaRegistro()!="") ||($detencionessolicitudesDto->getFechaActualizacion()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$detencionessolicitudesDto->getfechaRegistro()."'";
if(($detencionessolicitudesDto->getFechaActualizacion()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$detencionessolicitudesDto->getfechaActualizacion()."'";
if(($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getfechaDetencion()!=""){
$sql.="fechaDetencion='".$detencionessolicitudesDto->getfechaDetencion()."'";
if(($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getnumOficio()!=""){
$sql.="numOficio='".$detencionessolicitudesDto->getnumOficio()."'";
if(($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getcveCereso()!=""){
$sql.="cveCereso='".$detencionessolicitudesDto->getcveCereso()."'";
if(($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getnombreAgente()!=""){
$sql.="nombreAgente='".$detencionessolicitudesDto->getnombreAgente()."'";
if(($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionessolicitudesDto->getobservaciones()!=""){
$sql.="observaciones='".$detencionessolicitudesDto->getobservaciones()."'";
}
$sql.=" WHERE idDetencionSolicitud='".$detencionessolicitudesDto->getidDetencionSolicitud()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DetencionessolicitudesDTO();
$tmp->setidDetencionSolicitud($detencionessolicitudesDto->getidDetencionSolicitud());
$tmp = $this->selectDetencionessolicitudes($tmp,"",$this->_proveedor);
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
public function deleteDetencionessolicitudes($detencionessolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbldetencionessolicitudes  WHERE idDetencionSolicitud='".$detencionessolicitudesDto->getidDetencionSolicitud()."'";
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
public function selectDetencionessolicitudes($detencionessolicitudesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idDetencionSolicitud,idImputadoSolicitud,activo,fechaRegistro,fechaActualizacion,fechaDetencion,numOficio,cveCereso,nombreAgente,observaciones FROM tbldetencionessolicitudes ";
if(($detencionessolicitudesDto->getidDetencionSolicitud()!="") ||($detencionessolicitudesDto->getidImputadoSolicitud()!="") ||($detencionessolicitudesDto->getactivo()!="") ||($detencionessolicitudesDto->getfechaRegistro()!="") ||($detencionessolicitudesDto->getfechaActualizacion()!="") ||($detencionessolicitudesDto->getfechaDetencion()!="") ||($detencionessolicitudesDto->getnumOficio()!="") ||($detencionessolicitudesDto->getcveCereso()!="") ||($detencionessolicitudesDto->getnombreAgente()!="") ||($detencionessolicitudesDto->getobservaciones()!="") ){
$sql.=" WHERE ";
}
if($detencionessolicitudesDto->getidDetencionSolicitud()!=""){
$sql.="idDetencionSolicitud='".$detencionessolicitudesDto->getIdDetencionSolicitud()."'";
if(($detencionessolicitudesDto->getIdImputadoSolicitud()!="") ||($detencionessolicitudesDto->getActivo()!="") ||($detencionessolicitudesDto->getFechaRegistro()!="") ||($detencionessolicitudesDto->getFechaActualizacion()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionessolicitudesDto->getidImputadoSolicitud()!=""){
$sql.="idImputadoSolicitud='".$detencionessolicitudesDto->getIdImputadoSolicitud()."'";
if(($detencionessolicitudesDto->getActivo()!="") ||($detencionessolicitudesDto->getFechaRegistro()!="") ||($detencionessolicitudesDto->getFechaActualizacion()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionessolicitudesDto->getactivo()!=""){
$sql.="activo='".$detencionessolicitudesDto->getActivo()."'";
if(($detencionessolicitudesDto->getFechaRegistro()!="") ||($detencionessolicitudesDto->getFechaActualizacion()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionessolicitudesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$detencionessolicitudesDto->getFechaRegistro()."'";
if(($detencionessolicitudesDto->getFechaActualizacion()!="") ||($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionessolicitudesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$detencionessolicitudesDto->getFechaActualizacion()."'";
if(($detencionessolicitudesDto->getFechaDetencion()!="") ||($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionessolicitudesDto->getfechaDetencion()!=""){
$sql.="fechaDetencion='".$detencionessolicitudesDto->getFechaDetencion()."'";
if(($detencionessolicitudesDto->getNumOficio()!="") ||($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionessolicitudesDto->getnumOficio()!=""){
$sql.="numOficio='".$detencionessolicitudesDto->getNumOficio()."'";
if(($detencionessolicitudesDto->getCveCereso()!="") ||($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionessolicitudesDto->getcveCereso()!=""){
$sql.="cveCereso='".$detencionessolicitudesDto->getCveCereso()."'";
if(($detencionessolicitudesDto->getNombreAgente()!="") ||($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionessolicitudesDto->getnombreAgente()!=""){
$sql.="nombreAgente='".$detencionessolicitudesDto->getNombreAgente()."'";
if(($detencionessolicitudesDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionessolicitudesDto->getobservaciones()!=""){
$sql.="observaciones='".$detencionessolicitudesDto->getObservaciones()."'";
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
$tmp[$contador] = new DetencionessolicitudesDTO();
$tmp[$contador]->setIdDetencionSolicitud($row["idDetencionSolicitud"]);
$tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setFechaDetencion($row["fechaDetencion"]);
$tmp[$contador]->setNumOficio($row["numOficio"]);
$tmp[$contador]->setCveCereso($row["cveCereso"]);
$tmp[$contador]->setNombreAgente($row["nombreAgente"]);
$tmp[$contador]->setObservaciones($row["observaciones"]);
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
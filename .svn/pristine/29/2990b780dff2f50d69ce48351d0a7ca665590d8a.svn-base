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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/detencionescarpetas/DetencionescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DetencionescarpetasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDetencionescarpetas($detencionescarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbldetencionescarpetas(";
if($detencionescarpetasDto->getidDetencionCarpeta()!=""){
$sql.="idDetencionCarpeta";
if(($detencionescarpetasDto->getIdImputadoCarpeta()!="") ||($detencionescarpetasDto->getActivo()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getidImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta";
if(($detencionescarpetasDto->getActivo()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getactivo()!=""){
$sql.="activo";
if(($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getfechaDetencion()!=""){
$sql.="fechaDetencion";
if(($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getnumOficio()!=""){
$sql.="numOficio";
if(($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getcveCereso()!=""){
$sql.="cveCereso";
if(($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getnombreAgente()!=""){
$sql.="nombreAgente";
if(($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getobservaciones()!=""){
$sql.="observaciones";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($detencionescarpetasDto->getidDetencionCarpeta()!=""){
$sql.="'".$detencionescarpetasDto->getidDetencionCarpeta()."'";
if(($detencionescarpetasDto->getIdImputadoCarpeta()!="") ||($detencionescarpetasDto->getActivo()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getidImputadoCarpeta()!=""){
$sql.="'".$detencionescarpetasDto->getidImputadoCarpeta()."'";
if(($detencionescarpetasDto->getActivo()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getactivo()!=""){
$sql.="'".$detencionescarpetasDto->getactivo()."'";
if(($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getfechaRegistro()!=""){
if(($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getfechaActualizacion()!=""){
if(($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getfechaDetencion()!=""){
$sql.="'".$detencionescarpetasDto->getfechaDetencion()."'";
if(($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getnumOficio()!=""){
$sql.="'".$detencionescarpetasDto->getnumOficio()."'";
if(($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getcveCereso()!=""){
$sql.="'".$detencionescarpetasDto->getcveCereso()."'";
if(($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getnombreAgente()!=""){
$sql.="'".$detencionescarpetasDto->getnombreAgente()."'";
if(($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getobservaciones()!=""){
$sql.="'".$detencionescarpetasDto->getobservaciones()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DetencionescarpetasDTO();
$tmp->setidDetencionCarpeta($this->_proveedor->lastID());
$tmp = $this->selectDetencionescarpetas($tmp,"",$this->_proveedor);
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
public function updateDetencionescarpetas($detencionescarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbldetencionescarpetas SET ";
if($detencionescarpetasDto->getidDetencionCarpeta()!=""){
$sql.="idDetencionCarpeta='".$detencionescarpetasDto->getidDetencionCarpeta()."'";
if(($detencionescarpetasDto->getIdImputadoCarpeta()!="") ||($detencionescarpetasDto->getActivo()!="") ||($detencionescarpetasDto->getFechaRegistro()!="") ||($detencionescarpetasDto->getFechaActualizacion()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getidImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$detencionescarpetasDto->getidImputadoCarpeta()."'";
if(($detencionescarpetasDto->getActivo()!="") ||($detencionescarpetasDto->getFechaRegistro()!="") ||($detencionescarpetasDto->getFechaActualizacion()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getactivo()!=""){
$sql.="activo='".$detencionescarpetasDto->getactivo()."'";
if(($detencionescarpetasDto->getFechaRegistro()!="") ||($detencionescarpetasDto->getFechaActualizacion()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$detencionescarpetasDto->getfechaRegistro()."'";
if(($detencionescarpetasDto->getFechaActualizacion()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$detencionescarpetasDto->getfechaActualizacion()."'";
if(($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getfechaDetencion()!=""){
$sql.="fechaDetencion='".$detencionescarpetasDto->getfechaDetencion()."'";
if(($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getnumOficio()!=""){
$sql.="numOficio='".$detencionescarpetasDto->getnumOficio()."'";
if(($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getcveCereso()!=""){
$sql.="cveCereso='".$detencionescarpetasDto->getcveCereso()."'";
if(($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getnombreAgente()!=""){
$sql.="nombreAgente='".$detencionescarpetasDto->getnombreAgente()."'";
if(($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=",";
}
}
if($detencionescarpetasDto->getobservaciones()!=""){
$sql.="observaciones='".$detencionescarpetasDto->getobservaciones()."'";
}
$sql.=" WHERE idDetencionCarpeta='".$detencionescarpetasDto->getidDetencionCarpeta()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DetencionescarpetasDTO();
$tmp->setidDetencionCarpeta($detencionescarpetasDto->getidDetencionCarpeta());
$tmp = $this->selectDetencionescarpetas($tmp,"",$this->_proveedor);
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
public function deleteDetencionescarpetas($detencionescarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbldetencionescarpetas  WHERE idDetencionCarpeta='".$detencionescarpetasDto->getidDetencionCarpeta()."'";
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
public function selectDetencionescarpetas($detencionescarpetasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idDetencionCarpeta,idImputadoCarpeta,activo,fechaRegistro,fechaActualizacion,fechaDetencion,numOficio,cveCereso,nombreAgente,observaciones FROM tbldetencionescarpetas ";
if(($detencionescarpetasDto->getidDetencionCarpeta()!="") ||($detencionescarpetasDto->getidImputadoCarpeta()!="") ||($detencionescarpetasDto->getactivo()!="") ||($detencionescarpetasDto->getfechaRegistro()!="") ||($detencionescarpetasDto->getfechaActualizacion()!="") ||($detencionescarpetasDto->getfechaDetencion()!="") ||($detencionescarpetasDto->getnumOficio()!="") ||($detencionescarpetasDto->getcveCereso()!="") ||($detencionescarpetasDto->getnombreAgente()!="") ||($detencionescarpetasDto->getobservaciones()!="") ){
$sql.=" WHERE ";
}
if($detencionescarpetasDto->getidDetencionCarpeta()!=""){
$sql.="idDetencionCarpeta='".$detencionescarpetasDto->getIdDetencionCarpeta()."'";
if(($detencionescarpetasDto->getIdImputadoCarpeta()!="") ||($detencionescarpetasDto->getActivo()!="") ||($detencionescarpetasDto->getFechaRegistro()!="") ||($detencionescarpetasDto->getFechaActualizacion()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionescarpetasDto->getidImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$detencionescarpetasDto->getIdImputadoCarpeta()."'";
if(($detencionescarpetasDto->getActivo()!="") ||($detencionescarpetasDto->getFechaRegistro()!="") ||($detencionescarpetasDto->getFechaActualizacion()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionescarpetasDto->getactivo()!=""){
$sql.="activo='".$detencionescarpetasDto->getActivo()."'";
if(($detencionescarpetasDto->getFechaRegistro()!="") ||($detencionescarpetasDto->getFechaActualizacion()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionescarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$detencionescarpetasDto->getFechaRegistro()."'";
if(($detencionescarpetasDto->getFechaActualizacion()!="") ||($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionescarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$detencionescarpetasDto->getFechaActualizacion()."'";
if(($detencionescarpetasDto->getFechaDetencion()!="") ||($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionescarpetasDto->getfechaDetencion()!=""){
$sql.="fechaDetencion='".$detencionescarpetasDto->getFechaDetencion()."'";
if(($detencionescarpetasDto->getNumOficio()!="") ||($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionescarpetasDto->getnumOficio()!=""){
$sql.="numOficio='".$detencionescarpetasDto->getNumOficio()."'";
if(($detencionescarpetasDto->getCveCereso()!="") ||($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionescarpetasDto->getcveCereso()!=""){
$sql.="cveCereso='".$detencionescarpetasDto->getCveCereso()."'";
if(($detencionescarpetasDto->getNombreAgente()!="") ||($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionescarpetasDto->getnombreAgente()!=""){
$sql.="nombreAgente='".$detencionescarpetasDto->getNombreAgente()."'";
if(($detencionescarpetasDto->getObservaciones()!="") ){
$sql.=" AND ";
}
}
if($detencionescarpetasDto->getobservaciones()!=""){
$sql.="observaciones='".$detencionescarpetasDto->getObservaciones()."'";
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
$tmp[$contador] = new DetencionescarpetasDTO();
$tmp[$contador]->setIdDetencionCarpeta($row["idDetencionCarpeta"]);
$tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
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